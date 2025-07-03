<?php

date_default_timezone_set("EST");

$main_dir = substr(__DIR__, 0, -12);
$ini_data = parse_ini_file($main_dir."config.ini", true);



require('library.php');


function create_templates($folder_name, $data_array){
    global $ini_data;

    $totals = [];
    $general = [];

    $file_dir = substr(__DIR__, 0, -12);
    $accountfile =  $data_array['files'][0]['AccountFile'];
    $censusfile =  $data_array['files'][0]['CensusFile'];
    $planspec =  $data_array['files'][0]['PlanSpec'];

    $file_locations['account'] = $accountfile;
    $file_locations['plan'] = $planspec;
    $file_locations['census'] =  $censusfile;

    $census_data = fetchCensusData($file_locations);
    $account_data = fetchAccountData($file_locations);
    $plan_data = fetchPlanData($file_locations);

    $general = do_normalize_array_keys($plan_data[0]);

    $general['d'] = $data_array;
        
    if ($general['S_VLTHDPCK_PPctKeys_'] > 60){
        $general['__IS_TOP_HEAVY'] = true;
    } else {
        $general['__IS_TOP_HEAVY'] = false;
    }

    $sparts = [1,2,3,4,5,6,7,8,9,10];

    $active = [];

    $deferral_segments = array();
    foreach ($sparts as $segment){
        if (strpos($general['_SNAME_'.$segment], "SOURCE") === FALSE){



            switch ($general['_SNAME_'.$segment]){
            case "ROTH DEF":
                    $sections[$segment] = "Roth Deferral";
                    $deferral_segments[] = $segment;
 
                      break;

            case "ROLLOVER":
                       $sections[$segment] = "Rollover";
                       break;
     


            case "ROLL#1":
                       $sections[$segment] = "Rollover";
                       break;
     
                case "MATCHING":
                       $sections[$segment] = "Matching";
                       break;

                case "DEFERRAL":
                    $sections[$segment] = "Employee Deferral";
                    $deferral_segments[] = $segment;
                    break;


                case "EMPLOYER":
                        $sections[$segment] = "Employer Discretionary";
                    break;
                case "SH NONEL":
                    $sections[$segment] = "Safe Harbor Non-Elective";
                    $general['__IS_SAFE_HARBOR'] = true;
                    break;
                case "SH MATCH":
                    $sections[$segment] = "Safe Harbor Match";
                    $general['__IS_SAFE_HARBOR'] = true;
                    break;
                    default:
                       $sections[$segment] = $general['_SNAME_'.$segment];
                       break;
            }

            $named_segments[$general['_SNAME_'.$segment]] = $segment;
            $active[$segment] = "Active";
        }
    }

    $general['__SEGMENTS'] = $sections;
    $general['__ACTIVE_SEGMENTS'] = $active;
    $general['__NAMED_SEGMENTS'] = $named_segments;

    foreach ($general['__ACTIVE_SEGMENTS'] as $ask => $as){
        if ($general['__SEGMENTS'][$ask] != ""){
            $aslist[] = $general['__SEGMENTS'][$ask];
        }
    }


    $general['aslistString'] = join(", ", $aslist);

    $summary_data = fetchSummaryData($file_dir);

    foreach ($summary_data as $sd){
        echo $sd['key']."\n";

        $k = str_replace([".","-",">","<"," ","@","$","(",")",";",":","%"], "_", strtoupper($sd['key']));

        $general['__'.$k] = $sd['year2'];
    }

    list($final_data, $general) = merge_data($census_data, $account_data, $general);

    foreach ($final_data as $k => $v){
        if (empty($v['__BEGVALUE_TOTAL']) && empty($v['__CTBVALUE_TOTAL']) && empty($v['__INTVALUE_TOTAL']) && empty($v['__WDWVALUE_TOTAL']) && empty($v['__ENDVALUE_TOTAL'])){
//        if (!$v['__BEGVALUE_TOTAL'] && !$v['__CTBVALUE_TOTAL'] && !$v['__INTVALUE_TOTAL'] && !$v['__WDWVALUE_TOTAL'] && !$v['__ENDVALUE_TOTAL']){
           $final_data[$k]['__DONT_SHOW'] = 1;
        }
    }

    // - ENTRY DATES

    $general['__KEYELIG'] = 0;
    $general['__HCEELIG'] = 0;
    $general['__AGE70HALF'] = 0;
    $general['__AGE50HALF'] = 0;

    $general['__TOTALCOMP'] = 0;
    $general['__ACTIVE_EMPLOYEES'] = 0;
    $general['__INACTIVE_EMPLOYEES'] = 0;
    $general['__INELIGIBLE_EMPLOYEES'] = 0;

    # var_dump($general);


    $ages_20s = $ages_30s = $ages_40s = $ages_50s = $ages_60s = $ages_d_20s = $ages_active_20s = $ages_inactive_20s = $ages_30s = $ages_d_30s = $ages_active_30s = $ages_inactive_30s = $ages_d_40s = $ages_active_40s = $ages_inactive_40s = $ages_d_50s = $ages_50s = $ages_active_50s = $ages_inactive_50s = $ages_60s = $ages_d_60s = $ages_active_60s = $ages_inactive_60s = 0;
    
    file_put_contents("employees.csv", "Name, Status, Entry Date, Hire Date, Group 1, Group 2, Group 3, Group 4, Group 5, Has Balance, In Total\n");

    $group1 = $group2 = $group3 = $group4 = $group5 = 1;
    foreach ($final_data as $v){


        // I am trying to get a count of 
        //
        // 1:  Active Participant at 01/01 will be all "A" status, all "B" that entered on 01/01 and all "H" "M" and "N" that have an entry date of 01/01 (of the plan year) or earlier
        // 2:  Termed /balance at 01/01 are all "T" status with an account balance
        // 3:  Active participant at 12/31 will be all "A" and "B" status
        // 4:  Termed w/ balance at 12/31 are all "T", "H", "M" and "N" status with a vested balance

        // If any of the above cases are true then they count.

        $startOfThisYear = "01/01/".$ini_data["YEAR"];
        $endOfThisYear = "29/12/".$ini_data["YEAR"];

        $startOfThisYearTimestamp = strtotime($startOfThisYear);
        
        $endOfThisYearTimestamp = strtotime($endOfThisYear);

        $hiretimestamp = strtotime($v["ENTRY"]);

        $hasbalance = 0;

        if ($v["_ENDVALUE_1_0_"] > 0  || $v["_ENDVALUE_2_0_"] > 0  || $v["_ENDVALUE_3_0_"] > 0 || $v["_ENDVALUE_4_0_"] > 0 || $v["_ENDVALUE_5_0_"] > 0 || $v["_ENDVALUE_6_0_"] > 0 || $v["_ENDVALUE_7_0_"] > 0 || $v["_ENDVALUE_8_0_"] > 0 ){
            $hasbalance = 1;
        }

        $group1 = $group2 = $group3 = $group4 = $group5 =  0;
        $iamintotal = 0;
        $inGroup = "";

        if (in_array($v["PARTSTAT"], array("A")) || (in_array($v['PARTSTAT'],array("B")) && substr($v["ENTRY"], 0, 5) == "01/01") || (in_array($v['PARTSTAT'], array("H","M","N")) && $hiretimestamp <= $startOfThisYearTimestamp)){  //  case "A" OR "B": //NOT C
            $group1++;
            $iamintotal=1;
        }



        if (in_array($v["PARTSTAT"], array("T")) && $hasbalance == 1 ){  //  case "A" OR "B": //NOT C
            $group2++;
           // trigger_error("GROUP 2 $totalPeoplelll ($group2): NAME: {$v["NAME"]} --- {$v["PARTSTAT"]}");
            $iamintotal=1;
        }

        if (in_array($v["PARTSTAT"], array("A","B"))){  //  case "A" OR "B": //NOT C
            $group3++;
        //    trigger_error("GROUP 3 $totalPeoplelll ($group3): NAME: {$v["NAME"]} --- {$v["PARTSTAT"]}");
            $iamintotal=1;
        }

        if (in_array($v["PARTSTAT"], array("T", "H", "M", "N", "F")) && $hasbalance == 1 ){  //  case "A" OR "B": //NOT C
            $group4++;
           // trigger_error("GROUP 4 $totalPeoplelll ($group4): NAME: {$v["NAME"]} --- {$v["PARTSTAT"]}");
            $iamintotal=1;
        }

        if ((in_array($v["PARTSTAT"], array("A", "B", "H", "M", "N"))) && ($hiretimestamp >= $startOfThisYearTimestamp) && ($hasbalance == 0)){  //  case "A" OR "B": //NOT C
       #     $group1 = 0;
            $group5 = 1; 
            $iamintotal=0;
        }

        // Name, Status, Entry Date, Hire Date, Group 1, Group 2, Group 3, Group 4, Group 5, Has Balance, In Total"
        file_put_contents("employees.csv", "\"{$v['NAME']}\",{$v['PARTSTAT']},{$v['ENTRY']},".date("n/j/Y" ,$hiretimestamp).",$group1,$group2,$group3,$group4,$group5,$hasbalance,$iamintotal\n", FILE_APPEND);
        // file_put_contents("employees.csv", "\"{$v['NAME']}\",{$v['PARTSTAT']},{$v['ENTRY']},".date("n/j/Y" ,$hiretimestamp).",$group1,$group2,$group3,$group4,$group5,$hasbalance,$iamintotal,$hiretimestamp, $startOfThisYearTimestamp\n", FILE_APPEND);

	if ($iamintotal){
            $totalPeoplelll++;
            $general['__EMPLOYEES_COUNT']++;
        }
       // trigger_error($totalPeoplelll);

        if (in_array($v["PARTSTAT"], array("E", "U", "I"))){
               // $inGroup = "inactive";
        }

        if (in_array($v["PARTSTAT"], array("A", "B"))){  //  case "A" OR "B": //NOT C
                $inGroup = "active";
        }


        $inGroupECount = "";
        if (in_array($v["PARTSTAT"], array("A", "B", "T")) ||  (in_array($v["PARTSTAT"], array("D", "H", "M", "N")) && $hasbalance) ){  //  case "A" OR "B": //NOT C

                $inGroupECount = "employeeCount";
        }



        if (in_array($v["PARTSTAT"], array("E", "U", "I"))){
               // $inGroup = "inactive";
        }

        if (in_array($v["PARTSTAT"], array("S", "Y", "W"))){ 
                $inGroup = "ineligable";
        }
        
        if (in_array($v["PARTSTAT"], array("D","F","H","M","N","T","P"))){ 
 //       if (in_array($v["PARTSTAT"], array("M","N","T"))){ 
               // $inGroup = "terminated";
                $inGroup = "inactive";
        }

        


        $general['__TOTALCOMP'] = $general['__TOTALCOMP'] + $v['COMP'];

// active
        if ($inGroup == "active"){
            $general['__ACTIVECOMP'] = $general['__ACTIVECOMP'] + $v['COMP'];
            $general['__ACTIVE_EMPLOYEES']++;
        }
// ineligable
        if ($inGroup == "ineligable"){
            $general['__INELIGIBLE_COMP'] = $general['__INELIGIBLE_COMP'] + $v['COMP'];
            $general['__INELIGIBLE_EMPLOYEES']++;
        }
// inactive
        if ($inGroup == "inactive"){
            $general['__INACTIVE_COMP'] = $general['__INACTIVE_COMP'] + $v['COMP'];
            $general['__INACTIVE_EMPLOYEES']++;
        }

// terminated
        if ($inGroup == "terminated"){
            $general['__TERMINATED_COMP'] = $general['__TERMINATED_COMP'] + $v['COMP'];
            $general['__TERMINATED_EMPLOYEES']++;
        }

        if ($inGroupECount == "employeeCount"){
        //    $general['__EMPLOYEES_COUNT']++;
        }




        $key_eligable = $v['_KEYELIG'];
        $highly_compensated = $v['_HCEELIG'];
        $age70half = $v['_AGE70HALF'];
        $catchup_eligable = $v['_AGE50HALF'];

    //	echo "$key_eligable	$highly_compensated	$age70half	$catchup_eligable\n";

        if ($key_eligable){
            $general['__KEYELIG']++;
        }

        if ($highly_compensated){
            $general['__HCEELIG']++;
        }

        if ($age70half){
            $general['__AGE70HALF']++;
        }

        if ($catchup_eligable){
            $general['__AGE50HALF']++;
        }

        $age = $v["_AGENEAREST"];
        

        $deferstoplan = 0;


        foreach ($deferral_segments as $df){
            if ($v["_CTBVALUE_".$df."_0_"] > 0){
 #               trigger_error(print_r($deferral_segments,1));
 #               trigger_error($v["_CTBVALUE_".$df."_0_"]);
                $deferstoplan = 1;
            }
        }

        if ($age < 30){

            if ($inGroup == "active"){
                $ages_20s++;
               // trigger_error( "20s!!! {$v["NAME"]}\t{$v["_AGELAST"]}\t{$v['PARTSTAT']} \t$ages_20s" );
            }

            if ($deferstoplan && $inGroup == "active"){
                $ages_d_20s++;
            }

            if ($hasbalance && $inGroup == "active"){
                $ages_active_20s++;
            }

            if ($hasbalance && $inGroup == "inactive"){
                $ages_inactive_20s++;
            }

            echo "20s $age\n";
        } elseif($age >= 30 && $age < 40){

            if ($inGroup == "active"){
                $ages_30s++;
            }

            if ($deferstoplan && $inGroup == "active"){
                $ages_d_30s++;
            }

            if ($hasbalance && $inGroup == "active"){
                $ages_active_30s++;
            }

            if ($hasbalance && $inGroup == "inactive"){
                $ages_inactive_30s++;
            }


            #echo "30s $age\n";
        } elseif($age >= 40 && $age < 50){


            if ($inGroup == "active"){
                $ages_40s++;
            }

            if ($deferstoplan && $inGroup == "active"){
                $ages_d_40s++;
            }

            if ($hasbalance && $inGroup == "active"){
                $ages_active_40s++;
            }

            if ($hasbalance && $inGroup == "inactive"){
                $ages_inactive_40s++;
            }


            #echo "40s $age\n";
        } elseif($age >= 50 && $age < 60){

            if ($inGroup == "active"){
                $ages_50s++;
            }

            if ($deferstoplan && $inGroup == "active"){
                $ages_d_50s++;
            }

            if ($hasbalance && $inGroup == "active"){
                $ages_active_50s++;
            }

            if ($hasbalance && $inGroup == "inactive"){
                $ages_inactive_50s++;
            }

            #echo "50s $age\n";
        } elseif($age >= 60){
            
            if ($inGroup == "active"){
                $ages_60s++;
            }

            if ($deferstoplan && $inGroup == "active"){
                $ages_d_60s++;
            }

            if ($hasbalance && $inGroup == "active"){
                $ages_active_60s++;
            }

            if ($hasbalance && $inGroup == "inactive"){
                $ages_inactive_60s++;
            }

            #echo "60s $age\n";
        }
        
        $ages[] = $age;
    }

    $limitsArray = array();


    foreach ($ini_data['KEYS']['key'] as $i => $key){

        $a = array();

        $a['limits'] = $key;

        foreach ($ini_data['YEARS']['year'] as $year){
            $a[$year] = $ini_data[$year]['values'][$i];
        }
        $limitsArray[] = $a;
    }


    $general = array_merge($general, $ini_data);

    $general['__LIMITS'] = $limitsArray;
    $general['__AGES_ELIG_20s'] = $ages_20s;
    $general['__AGES_ELIG_30s'] = $ages_30s;
    $general['__AGES_ELIG_40s'] = $ages_40s;
    $general['__AGES_ELIG_50s'] = $ages_50s;
    $general['__AGES_ELIG_60s'] = $ages_60s;
    $general['__AGES_ELIG_TOTAL'] = $ages_20s + $ages_30s + $ages_40s + $ages_50s + $ages_60s;

    $general['__AGES_DEFER_20s'] = $ages_d_20s;
    $general['__AGES_DEFER_30s'] = $ages_d_30s;
    $general['__AGES_DEFER_40s'] = $ages_d_40s;
    $general['__AGES_DEFER_50s'] = $ages_d_50s;
    $general['__AGES_DEFER_60s'] = $ages_d_60s;

    $general['__AGES_DEFER_TOTAL'] = $ages_d_20s + $ages_d_30s + $ages_d_40s + $ages_d_50s + $ages_d_60s;

    $general['__AGES_PERCENT_DEFER_20s'] = divZero($ages_20s, $ages_d_20s);
    $general['__AGES_PERCENT_DEFER_30s'] = divZero($ages_30s, $ages_d_30s);
    $general['__AGES_PERCENT_DEFER_40s'] = divZero($ages_40s, $ages_d_40s);
    $general['__AGES_PERCENT_DEFER_50s'] = divZero($ages_50s, $ages_d_50s);
    $general['__AGES_PERCENT_DEFER_60s'] = divZero($ages_60s, $ages_d_60s);

    $general['__AGES_PERCENT_DEFER_TOTAL'] = divZero($general['__AGES_ELIG_TOTAL'], $general['__AGES_DEFER_TOTAL']);

    $general['__AGES_ACTIVE_BALANCE_20s'] = $ages_active_20s;
    $general['__AGES_ACTIVE_BALANCE_30s'] = $ages_active_30s;
    $general['__AGES_ACTIVE_BALANCE_40s'] = $ages_active_40s;
    $general['__AGES_ACTIVE_BALANCE_50s'] = $ages_active_50s;
    $general['__AGES_ACTIVE_BALANCE_60s'] = $ages_active_60s;

    $general['__AGES_ACTIVE_BALANCE_TOTAL'] = $ages_active_20s + $ages_active_30s + $ages_active_40s + $ages_active_50s + $ages_active_60s;

    $general['__AGES_INACTIVE_BALANCE_20s'] = $ages_inactive_20s;
    $general['__AGES_INACTIVE_BALANCE_30s'] = $ages_inactive_30s;
    $general['__AGES_INACTIVE_BALANCE_40s'] = $ages_inactive_40s;
    $general['__AGES_INACTIVE_BALANCE_50s'] = $ages_inactive_50s;
    $general['__AGES_INACTIVE_BALANCE_60s'] = $ages_inactive_60s;

    $general['__AGES_INACTIVE_BALANCE_TOTAL'] = $ages_inactive_20s + $ages_inactive_30s + $ages_inactive_40s + $ages_inactive_50s + $ages_inactive_60s;

    $general['__AVERAGE_AGE'] = round(array_sum($ages) / count($ages), 2);

    $general['__RETIREMENT_AGE'] = 65;
    $general['__AS_OF_DATE'] = $general['S_VALDATE'];
    $general['__EFFECTIVE_DATE'] = $general['S_PLEFDATE'];

    $general['__415_MINIMUM'] = '260000';

    date_default_timezone_set('EST');

    $d = date_create_from_format("m/d/Y", $general['S_VALDATE']);
    $ed = date_create_from_format("m/d/Y", $general['S_PLEFDATE']);

    // Date interval -12 months + 1 day / 7/1/17 - 6/30/18 
    // UPDATED 1/30/2019

    $begin_date = clone $d;
    date_sub($begin_date, date_interval_create_from_date_string('1 year - 1 day'));
    $general['__AS_OF_DATE_BEGIN'] = $begin_date->format("m/d/Y");
    // $general['__AS_OF_DATE_BEGIN'] = "1/1/".$d->format("Y");

    $dbegin = date_create_from_format("m/d/Y", $general['__AS_OF_DATE_BEGIN']);

    $general['__AS_OF_DATE_END_LONG'] = $d->format("F j, Y"); 
    $general['__AS_OF_DATE_BEGIN_LONG'] = $dbegin->format("F j, Y"); 
    $general['__AS_OF_DATE_LONG'] = $d->format("F j, Y"); 
    $general['__S_PLEFDATE_LONG'] = $ed->format("F j, Y"); 

    foreach ($totals as $key => $val){
        $general[$key] = array_sum($val);
    }

    $base = substr(dirname(__file__), 0, -12);

    require_once $base .'program/libraries/Twig/Autoloader.php';
    Twig_Autoloader::register();

    $loader = new Twig_Loader_Filesystem($base.'program/templates');
    $twig = new Twig_Environment($loader, array(
        'cache' => $base.'program/cache',
        'debug' => true,
    ));

    $filter = new Twig_SimpleFilter('ssnmask', function ($string) {
        
        $last4 = substr($string, -4);

        return "XXX-XX-$last4";
    });

    $twig->addFilter($filter);

    $twig->addExtension(new Twig_Extension_Debug());

    $template = $twig->loadTemplate('template.html');

    $t = $template->render(["rows1" => $census_data, 
                "rows2" => $account_data,
                "employees" => $final_data,
                "summarydata" => $summary_data,
                "general"  => $general]); 

    file_put_contents($base."compiled/reports.html", $t);
}

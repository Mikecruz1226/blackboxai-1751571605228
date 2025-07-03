<?php

function merge_data($a1, $a2, $general){

	$newarray = [];
	$finalarray = [];

	foreach ($a1 as $key => $value){
		if (is_array($value)){
			$newarray[$value['SSNUM']] = $value;	
		}
	}

	foreach($a2 as $key => $value){
		if (is_array($value)){
			$otherarray = $newarray[$value['SSNUM']];

			$merged_array = array_merge($value, $otherarray);
			$finalarray[$key] = $merged_array;
		}
	}

	list($normfinalarray, $general) = normalize_array_keys($finalarray, $general);

	return [$normfinalarray, $general];
}

function calculate_totals($array, $general){

	global $totals, $ini_data;

	if ($array["COMP"] > $ini_data['MAX_COMPENSATION']){
        $array['__415_MAX'] = $ini_data['MAX_COMPENSATION'];
        $array['COMP'] = $ini_data['MAX_COMPENSATION'];

    } else {
		$array['__415_MAX'] = $array['COMP'];
	}


    if (empty($general['__ACTIVE_SEGMENTS'])){
        $general['__ACTIVE_SEGMENTS'] = [];
    }


    $array['__ENDVALUE_1_0_'] =  $array['_ENDVALUE_1_0_'] * $array['VESTPCT_1'] / 100; 
    $array['__ENDVALUE_2_0_'] =  $array['_ENDVALUE_2_0_'] * $array['VESTPCT_2'] / 100; 
    $array['__ENDVALUE_3_0_'] =  $array['_ENDVALUE_3_0_'] * $array['VESTPCT_3'] / 100; 
    $array['__ENDVALUE_4_0_'] =  $array['_ENDVALUE_4_0_'] * $array['VESTPCT_4'] / 100; 
    $array['__ENDVALUE_5_0_'] =  $array['_ENDVALUE_5_0_'] * $array['VESTPCT_5'] / 100; 
    $array['__ENDVALUE_6_0_'] =  $array['_ENDVALUE_6_0_'] * $array['VESTPCT_6'] / 100; 
    $array['__ENDVALUE_7_0_'] =  $array['_ENDVALUE_7_0_'] * $array['VESTPCT_7'] / 100; 
    $array['__ENDVALUE_8_0_'] =  $array['_ENDVALUE_8_0_'] * $array['VESTPCT_8'] / 100; 
    $array['__ENDVALUE_9_0_'] =  $array['_ENDVALUE_9_0_'] * $array['VESTPCT_9'] / 100; 
    $array['__ENDVALUE_10_0_'] =  $array['_ENDVALUE_10_0_'] * $array['VESTPCT_10'] / 100; 



#	if (count($general['__ACTIVE_SEGMENTS']) == 7){
	$array['__BEGVALUE_TOTAL'] = $array['_BEGVALUE_1_0_'] + $array['_BEGVALUE_2_0_'] + $array['_BEGVALUE_3_0_'] + $array['_BEGVALUE_4_0_'] + $array['_BEGVALUE_5_0_'] 
			+ $array['_BEGVALUE_6_0_'] + $array['_BEGVALUE_7_0_'] +  $array['_BEGVALUE_8_0_'] + $array['_BEGVALUE_9_0_'] + $array['_BEGVALUE_10_0_'];  

    $array['__CTBVALUE_TOTAL'] = $array['_CTBVALUE_1_0_'] + $array['_CTBVALUE_2_0_'] + $array['_CTBVALUE_3_0_'] + $array['_CTBVALUE_4_0_'] + $array['_CTBVALUE_5_0_'] 
        + $array['_CTBVALUE_6_0_'] + $array['_CTBVALUE_7_0_'] +  $array['_CTBVALUE_8_0_'] + $array['_CTBVALUE_9_0_'] + $array['_CTBVALUE_10_0_'];  

    $array['__CRTVALUE_TOTAL'] = $array['_CRTVALUE_1_0_'] + $array['_CRTVALUE_2_0_'] + $array['_CRTVALUE_3_0_'] + $array['_CRTVALUE_4_0_'] + $array['_CRTVALUE_5_0_'] 
        + $array['_CRTVALUE_6_0_'] + $array['_CRTVALUE_7_0_'] +  $array['_CRTVALUE_8_0_'] + $array['_CRTVALUE_9_0_'] + $array['_CRTVALUE_10_0_'];  

	$array['__INTVALUE_TOTAL'] = $array['_INTVALUE_1_0_'] + $array['_INTVALUE_2_0_'] + $array['_INTVALUE_3_0_'] + $array['_INTVALUE_4_0_'] + $array['_INTVALUE_5_0_'] 
        + $array['_INTVALUE_6_0_'] + $array['_INTVALUE_7_0_'] +  $array['_INTVALUE_8_0_'] + $array['_INTVALUE_9_0_'] + $array['_INTVALUE_10_0_'];  

    $array['__EXPINTVALUE_TOTAL'] = $array['_INTVALUE_1_0_'] + $array['_INTVALUE_2_0_'] + $array['_INTVALUE_3_0_'] + $array['_INTVALUE_4_0_']
        + $array['_INTVALUE_5_0_'] + $array['_INTVALUE_6_0_'] + $array['_INTVALUE_7_0_'] +  $array['_INTVALUE_8_0_'] + $array['_INTVALUE_9_0_']
        + $array['_INTVALUE_10_0_'] - $array['_EXPVALUE_1_0_'] - $array['_EXPVALUE_2_0_'] - $array['_EXPVALUE_3_0_'] - $array['_EXPVALUE_4_0_'] 
        - $array['_EXPVALUE_5_0_'] - $array['_EXPVALUE_6_0_'] - $array['_EXPVALUE_7_0_'] -  $array['_EXPVALUE_8_0_'] - $array['_EXPVALUE_9_0_'] 
        - $array['_EXPVALUE_10_0_']; 

	$array['__WDWVALUE_TOTAL'] = $array['_WDWVALUE_1_0_'] + $array['_WDWVALUE_2_0_'] + $array['_WDWVALUE_3_0_'] + $array['_WDWVALUE_4_0_'] + $array['_WDWVALUE_5_0_'] 
        + $array['_WDWVALUE_6_0_'] + $array['_WDWVALUE_7_0_'] +  $array['_WDWVALUE_8_0_'] + $array['_WDWVALUE_9_0_'] + $array['_WDWVALUE_10_0_'];  


    $array['_FRFVALUE_1_0_'] = $array['_FRFVALUE_1_0_'] - $array['_FAMVALUE_1_0_'];
    $array['_FRFVALUE_2_0_'] = $array['_FRFVALUE_2_0_'] - $array['_FAMVALUE_2_0_'];
    $array['_FRFVALUE_3_0_'] = $array['_FRFVALUE_3_0_'] - $array['_FAMVALUE_3_0_'];
    $array['_FRFVALUE_4_0_'] = $array['_FRFVALUE_4_0_'] - $array['_FAMVALUE_4_0_'];
    $array['_FRFVALUE_5_0_'] = $array['_FRFVALUE_5_0_'] - $array['_FAMVALUE_5_0_'];
    $array['_FRFVALUE_6_0_'] = $array['_FRFVALUE_6_0_'] - $array['_FAMVALUE_6_0_'];
    $array['_FRFVALUE_7_0_'] = $array['_FRFVALUE_7_0_'] - $array['_FAMVALUE_7_0_'];
    $array['_FRFVALUE_8_0_'] = $array['_FRFVALUE_8_0_'] - $array['_FAMVALUE_8_0_'];
    $array['_FRFVALUE_9_0_'] = $array['_FRFVALUE_9_0_'] - $array['_FAMVALUE_9_0_'];
    $array['_FRFVALUE_10_0_'] = $array['_FRFVALUE_10_0_'] - $array['_FAMVALUE_10_0_'];

	$array['__FRFVALUE_TOTAL'] = $array['_FRFVALUE_1_0_'] + $array['_FRFVALUE_2_0_'] + $array['_FRFVALUE_3_0_'] + $array['_FRFVALUE_4_0_'] + $array['_FRFVALUE_5_0_'] 
        + $array['_FRFVALUE_6_0_'] + $array['_FRFVALUE_7_0_'] +  $array['_FRFVALUE_8_0_'] + $array['_FRFVALUE_9_0_'] + $array['_FRFVALUE_10_0_'];  

    $array['_TFIOVALUE_1_0_'] = $array['_TFIVALUE_1_0_'] - $array['_TFOVALUE_1_0_'];
    $array['_TFIOVALUE_2_0_'] = $array['_TFIVALUE_2_0_'] - $array['_TFOVALUE_2_0_'];
    $array['_TFIOVALUE_3_0_'] = $array['_TFIVALUE_3_0_'] - $array['_TFOVALUE_3_0_'];
    $array['_TFIOVALUE_4_0_'] = $array['_TFIVALUE_4_0_'] - $array['_TFOVALUE_4_0_'];
    $array['_TFIOVALUE_5_0_'] = $array['_TFIVALUE_5_0_'] - $array['_TFOVALUE_5_0_'];
    $array['_TFIOVALUE_6_0_'] = $array['_TFIVALUE_6_0_'] - $array['_TFOVALUE_6_0_'];
    $array['_TFIOVALUE_7_0_'] = $array['_TFIVALUE_7_0_'] - $array['_TFOVALUE_7_0_'];
    $array['_TFIOVALUE_8_0_'] = $array['_TFIVALUE_8_0_'] - $array['_TFOVALUE_8_0_'];
    $array['_TFIOVALUE_9_0_'] = $array['_TFIVALUE_9_0_'] - $array['_TFOVALUE_9_0_'];
    $array['_TFIOVALUE_10_0_'] = $array['_TFIVALUE_10_0_'] - $array['_TFOVALUE_10_0_'];
  






	$array['__TFIVALUE_TOTAL'] = $array['_TFIVALUE_1_0_'] + $array['_TFIVALUE_2_0_'] + $array['_TFIVALUE_3_0_'] + $array['_TFIVALUE_4_0_'] + $array['_TFIVALUE_5_0_'] 
        + $array['_TFIVALUE_6_0_'] + $array['_TFIVALUE_7_0_'] +  $array['_TFIVALUE_8_0_'] + $array['_TFIVALUE_9_0_'] + $array['_TFIVALUE_10_0_'];  

	$array['__TFOVALUE_TOTAL'] = $array['_TFOVALUE_1_0_'] + $array['_TFOVALUE_2_0_'] + $array['_TFOVALUE_3_0_'] + $array['_TFOVALUE_4_0_'] + $array['_TFOVALUE_5_0_'] 
        + $array['_TFOVALUE_6_0_'] + $array['_TFOVALUE_7_0_'] +  $array['_TFOVALUE_8_0_'] + $array['_TFOVALUE_9_0_'] + $array['_TFOVALUE_10_0_'];  

    $array['__TFIOVALUE_TOTAL'] = ($array['__TFIVALUE_TOTAL'] - $array['__TFOVALUE_TOTAL']); 

	$array['__ENDVALUE_TOTAL'] = $array['_ENDVALUE_1_0_'] + $array['_ENDVALUE_2_0_'] + $array['_ENDVALUE_3_0_'] + $array['_ENDVALUE_4_0_'] + $array['_ENDVALUE_5_0_'] 
			+ $array['_ENDVALUE_6_0_'] + $array['_ENDVALUE_7_0_'] +  $array['_ENDVALUE_8_0_'] + $array['_ENDVALUE_9_0_'] + $array['_ENDVALUE_10_0_'];  

        
	$array['__ADDED_ENDVALUE_TOTAL'] = $array['__ENDVALUE_1_0_'] + $array['__ENDVALUE_2_0_'] + $array['__ENDVALUE_3_0_'] + $array['__ENDVALUE_4_0_'] + $array['__ENDVALUE_5_0_'] 
			+ $array['__ENDVALUE_6_0_'] + $array['__ENDVALUE_7_0_'] + $array['__ENDVALUE_8_0_'] + $array['__ENDVALUE_9_0_'] + $array['__ENDVALUE_10_0_'];  


    $general['__ADDED_ENDVALUE_GRAND_TOTAL']     = $general['__ADDED_ENDVALUE_GRAND_TOTAL'] + $array['__ADDED_ENDVALUE_TOTAL']; 
    $general['__ADDED_ENDVALUE_1_0_GRAND_TOTAL'] = $general['__ADDED_ENDVALUE_1_0_GRAND_TOTAL'] + $array['__ENDVALUE_1_0_']; 
    $general['__ADDED_ENDVALUE_2_0_GRAND_TOTAL'] = $general['__ADDED_ENDVALUE_2_0_GRAND_TOTAL'] + $array['__ENDVALUE_2_0_']; 
    $general['__ADDED_ENDVALUE_3_0_GRAND_TOTAL'] = $general['__ADDED_ENDVALUE_3_0_GRAND_TOTAL'] + $array['__ENDVALUE_3_0_']; 
    $general['__ADDED_ENDVALUE_4_0_GRAND_TOTAL'] = $general['__ADDED_ENDVALUE_4_0_GRAND_TOTAL'] + $array['__ENDVALUE_4_0_']; 
    $general['__ADDED_ENDVALUE_5_0_GRAND_TOTAL'] = $general['__ADDED_ENDVALUE_5_0_GRAND_TOTAL'] + $array['__ENDVALUE_5_0_']; 
    $general['__ADDED_ENDVALUE_6_0_GRAND_TOTAL'] = $general['__ADDED_ENDVALUE_6_0_GRAND_TOTAL'] + $array['__ENDVALUE_6_0_']; 
    $general['__ADDED_ENDVALUE_7_0_GRAND_TOTAL'] = $general['__ADDED_ENDVALUE_7_0_GRAND_TOTAL'] + $array['__ENDVALUE_7_0_']; 
    $general['__ADDED_ENDVALUE_8_0_GRAND_TOTAL'] = $general['__ADDED_ENDVALUE_8_0_GRAND_TOTAL'] + $array['__ENDVALUE_8_0_']; 
    $general['__ADDED_ENDVALUE_9_0_GRAND_TOTAL'] = $general['__ADDED_ENDVALUE_9_0_GRAND_TOTAL'] + $array['__ENDVALUE_9_0_']; 
    $general['__ADDED_ENDVALUE_10_0_GRAND_TOTAL'] = $general['__ADDED_ENDVALUE_10_0_GRAND_TOTAL'] + $array['__ENDVALUE_10_0_']; 

    $general['__BEGVALUE_GRAND_TOTAL'] = $general['__BEGVALUE_GRAND_TOTAL'] + $array['__BEGVALUE_TOTAL']; 

    $general['__BEGVALUE_1_0_GRAND_TOTAL'] = $general['__BEGVALUE_1_0_GRAND_TOTAL'] + $array['_BEGVALUE_1_0_']; 
    $general['__BEGVALUE_2_0_GRAND_TOTAL'] = $general['__BEGVALUE_2_0_GRAND_TOTAL'] + $array['_BEGVALUE_2_0_']; 
    $general['__BEGVALUE_3_0_GRAND_TOTAL'] = $general['__BEGVALUE_3_0_GRAND_TOTAL'] + $array['_BEGVALUE_3_0_']; 
    $general['__BEGVALUE_4_0_GRAND_TOTAL'] = $general['__BEGVALUE_4_0_GRAND_TOTAL'] + $array['_BEGVALUE_4_0_']; 
    $general['__BEGVALUE_5_0_GRAND_TOTAL'] = $general['__BEGVALUE_5_0_GRAND_TOTAL'] + $array['_BEGVALUE_5_0_']; 
    $general['__BEGVALUE_6_0_GRAND_TOTAL'] = $general['__BEGVALUE_6_0_GRAND_TOTAL'] + $array['_BEGVALUE_6_0_']; 
    $general['__BEGVALUE_7_0_GRAND_TOTAL'] = $general['__BEGVALUE_7_0_GRAND_TOTAL'] + $array['_BEGVALUE_7_0_']; 
    $general['__BEGVALUE_8_0_GRAND_TOTAL'] = $general['__BEGVALUE_8_0_GRAND_TOTAL'] + $array['_BEGVALUE_8_0_']; 
    $general['__BEGVALUE_9_0_GRAND_TOTAL'] = $general['__BEGVALUE_9_0_GRAND_TOTAL'] + $array['_BEGVALUE_9_0_']; 
    $general['__BEGVALUE_10_0_GRAND_TOTAL'] = $general['__BEGVALUE_10_0_GRAND_TOTAL'] + $array['_BEGVALUE_10_0_']; 
        

    $general['__CTBVALUE_GRAND_TOTAL'] = $general['__CTBVALUE_GRAND_TOTAL'] + $array['__CTBVALUE_TOTAL'] - $array['__CRTVALUE_TOTAL']; 

    $array['__CTBVALUE_1_0_'] = $array['_CTBVALUE_1_0_'] -  $array['_CRTVALUE_1_0_'];
    $array['__CTBVALUE_2_0_'] = $array['_CTBVALUE_2_0_'] -  $array['_CRTVALUE_2_0_'];
    $array['__CTBVALUE_3_0_'] = $array['_CTBVALUE_3_0_'] -  $array['_CRTVALUE_3_0_'];
    $array['__CTBVALUE_4_0_'] = $array['_CTBVALUE_4_0_'] -  $array['_CRTVALUE_4_0_'];
    $array['__CTBVALUE_5_0_'] = $array['_CTBVALUE_5_0_'] -  $array['_CRTVALUE_5_0_'];
    $array['__CTBVALUE_6_0_'] = $array['_CTBVALUE_6_0_'] -  $array['_CRTVALUE_6_0_'];
    $array['__CTBVALUE_7_0_'] = $array['_CTBVALUE_7_0_'] -  $array['_CRTVALUE_7_0_'];
    $array['__CTBVALUE_8_0_'] = $array['_CTBVALUE_8_0_'] -  $array['_CRTVALUE_8_0_'];
    $array['__CTBVALUE_9_0_'] = $array['_CTBVALUE_9_0_'] -  $array['_CRTVALUE_9_0_'];
    $array['__CTBVALUE_10_0_'] = $array['_CTBVALUE_10_0_'] -  $array['_CRTVALUE_10_0_'];


        $general['__CTBVALUE_1_0_GRAND_TOTAL'] = $general['__CTBVALUE_1_0_GRAND_TOTAL'] + $array['__CTBVALUE_1_0_']; 
        $general['__CTBVALUE_2_0_GRAND_TOTAL'] = $general['__CTBVALUE_2_0_GRAND_TOTAL'] + $array['__CTBVALUE_2_0_']; 
        $general['__CTBVALUE_3_0_GRAND_TOTAL'] = $general['__CTBVALUE_3_0_GRAND_TOTAL'] + $array['__CTBVALUE_3_0_']; 
        $general['__CTBVALUE_4_0_GRAND_TOTAL'] = $general['__CTBVALUE_4_0_GRAND_TOTAL'] + $array['__CTBVALUE_4_0_']; 
        $general['__CTBVALUE_5_0_GRAND_TOTAL'] = $general['__CTBVALUE_5_0_GRAND_TOTAL'] + $array['__CTBVALUE_5_0_']; 
        $general['__CTBVALUE_6_0_GRAND_TOTAL'] = $general['__CTBVALUE_6_0_GRAND_TOTAL'] + $array['__CTBVALUE_6_0_']; 
        $general['__CTBVALUE_7_0_GRAND_TOTAL'] = $general['__CTBVALUE_7_0_GRAND_TOTAL'] + $array['__CTBVALUE_7_0_']; 
        $general['__CTBVALUE_8_0_GRAND_TOTAL'] = $general['__CTBVALUE_8_0_GRAND_TOTAL'] + $array['__CTBVALUE_8_0_']; 
        $general['__CTBVALUE_9_0_GRAND_TOTAL'] = $general['__CTBVALUE_9_0_GRAND_TOTAL'] + $array['__CTBVALUE_9_0_']; 
        $general['__CTBVALUE_10_0_GRAND_TOTAL'] = $general['__CTBVALUE_10_0_GRAND_TOTAL'] + $array['__CTBVALUE_10_0_']; 



    $general['__INTVALUE_GRAND_TOTAL'] = $general['__INTVALUE_GRAND_TOTAL'] + $array['__INTVALUE_TOTAL']; 
    $general['__EXPINTVALUE_GRAND_TOTAL'] = $general['__EXPINTVALUE_GRAND_TOTAL'] + $array['__EXPINTVALUE_TOTAL']; 

        $general['__INTVALUE_1_0_GRAND_TOTAL'] = $general['__INTVALUE_1_0_GRAND_TOTAL'] + $array['_INTVALUE_1_0_']; 
        $general['__INTVALUE_2_0_GRAND_TOTAL'] = $general['__INTVALUE_2_0_GRAND_TOTAL'] + $array['_INTVALUE_2_0_']; 
        $general['__INTVALUE_3_0_GRAND_TOTAL'] = $general['__INTVALUE_3_0_GRAND_TOTAL'] + $array['_INTVALUE_3_0_']; 
        $general['__INTVALUE_4_0_GRAND_TOTAL'] = $general['__INTVALUE_4_0_GRAND_TOTAL'] + $array['_INTVALUE_4_0_']; 
        $general['__INTVALUE_5_0_GRAND_TOTAL'] = $general['__INTVALUE_5_0_GRAND_TOTAL'] + $array['_INTVALUE_5_0_']; 
        $general['__INTVALUE_6_0_GRAND_TOTAL'] = $general['__INTVALUE_6_0_GRAND_TOTAL'] + $array['_INTVALUE_6_0_']; 
        $general['__INTVALUE_7_0_GRAND_TOTAL'] = $general['__INTVALUE_7_0_GRAND_TOTAL'] + $array['_INTVALUE_7_0_']; 
        $general['__INTVALUE_8_0_GRAND_TOTAL'] = $general['__INTVALUE_8_0_GRAND_TOTAL'] + $array['_INTVALUE_8_0_']; 
        $general['__INTVALUE_9_0_GRAND_TOTAL'] = $general['__INTVALUE_9_0_GRAND_TOTAL'] + $array['_INTVALUE_9_0_']; 
        $general['__INTVALUE_10_0_GRAND_TOTAL'] = $general['__INTVALUE_10_0_GRAND_TOTAL'] + $array['_INTVALUE_10_0_']; 

        $general['__EXPINTVALUE_1_0_GRAND_TOTAL'] = $general['__EXPINTVALUE_1_0_GRAND_TOTAL'] + $array['_INTVALUE_1_0_'] - $array['_EXPVALUE_1_0_']; 
        $general['__EXPINTVALUE_2_0_GRAND_TOTAL'] = $general['__EXPINTVALUE_2_0_GRAND_TOTAL'] + $array['_INTVALUE_2_0_'] - $array['_EXPVALUE_2_0_']; 
        $general['__EXPINTVALUE_3_0_GRAND_TOTAL'] = $general['__EXPINTVALUE_3_0_GRAND_TOTAL'] + $array['_INTVALUE_3_0_'] - $array['_EXPVALUE_3_0_']; 
        $general['__EXPINTVALUE_4_0_GRAND_TOTAL'] = $general['__EXPINTVALUE_4_0_GRAND_TOTAL'] + $array['_INTVALUE_4_0_'] - $array['_EXPVALUE_4_0_']; 
        $general['__EXPINTVALUE_5_0_GRAND_TOTAL'] = $general['__EXPINTVALUE_5_0_GRAND_TOTAL'] + $array['_INTVALUE_5_0_'] - $array['_EXPVALUE_5_0_']; 
        $general['__EXPINTVALUE_6_0_GRAND_TOTAL'] = $general['__EXPINTVALUE_6_0_GRAND_TOTAL'] + $array['_INTVALUE_6_0_'] - $array['_EXPVALUE_6_0_']; 
        $general['__EXPINTVALUE_7_0_GRAND_TOTAL'] = $general['__EXPINTVALUE_7_0_GRAND_TOTAL'] + $array['_INTVALUE_7_0_'] - $array['_EXPVALUE_7_0_']; 
        $general['__EXPINTVALUE_8_0_GRAND_TOTAL'] = $general['__EXPINTVALUE_8_0_GRAND_TOTAL'] + $array['_INTVALUE_8_0_'] - $array['_EXPVALUE_8_0_']; 
        $general['__EXPINTVALUE_9_0_GRAND_TOTAL'] = $general['__EXPINTVALUE_9_0_GRAND_TOTAL'] + $array['_INTVALUE_9_0_'] - $array['_EXPVALUE_9_0_']; 
        $general['__EXPINTVALUE_10_0_GRAND_TOTAL'] = $general['__EXPINTVALUE_10_0_GRAND_TOTAL'] + $array['_INTVALUE_10_0_'] - $array['_EXPVALUE_10_0_']; 

        $array['_EXPINTVALUE_1_0_'] = $array['_INTVALUE_1_0_'] - $array['_EXPVALUE_1_0_']; 
        $array['_EXPINTVALUE_2_0_'] = $array['_INTVALUE_2_0_'] - $array['_EXPVALUE_2_0_']; 
        $array['_EXPINTVALUE_3_0_'] = $array['_INTVALUE_3_0_'] - $array['_EXPVALUE_3_0_']; 
        $array['_EXPINTVALUE_4_0_'] = $array['_INTVALUE_4_0_'] - $array['_EXPVALUE_4_0_']; 
        $array['_EXPINTVALUE_5_0_'] = $array['_INTVALUE_5_0_'] - $array['_EXPVALUE_5_0_']; 
        $array['_EXPINTVALUE_6_0_'] = $array['_INTVALUE_6_0_'] - $array['_EXPVALUE_6_0_']; 
        $array['_EXPINTVALUE_7_0_'] = $array['_INTVALUE_7_0_'] - $array['_EXPVALUE_7_0_']; 
        $array['_EXPINTVALUE_8_0_'] = $array['_INTVALUE_8_0_'] - $array['_EXPVALUE_8_0_']; 
        $array['_EXPINTVALUE_9_0_'] = $array['_INTVALUE_9_0_'] - $array['_EXPVALUE_9_0_']; 
        $array['_EXPINTVALUE_10_0_'] =  $array['_INTVALUE_10_0_'] - $array['_EXPVALUE_10_0_']; 







    $general['__WDWVALUE_GRAND_TOTAL'] = $general['__WDWVALUE_GRAND_TOTAL'] + $array['__WDWVALUE_TOTAL']; 
 
        $general['__WDWVALUE_1_0_GRAND_TOTAL'] = $general['__WDWVALUE_1_0_GRAND_TOTAL'] + $array['_WDWVALUE_1_0_']; 
        $general['__WDWVALUE_2_0_GRAND_TOTAL'] = $general['__WDWVALUE_2_0_GRAND_TOTAL'] + $array['_WDWVALUE_2_0_']; 
        $general['__WDWVALUE_3_0_GRAND_TOTAL'] = $general['__WDWVALUE_3_0_GRAND_TOTAL'] + $array['_WDWVALUE_3_0_']; 
        $general['__WDWVALUE_4_0_GRAND_TOTAL'] = $general['__WDWVALUE_4_0_GRAND_TOTAL'] + $array['_WDWVALUE_4_0_']; 
        $general['__WDWVALUE_5_0_GRAND_TOTAL'] = $general['__WDWVALUE_5_0_GRAND_TOTAL'] + $array['_WDWVALUE_5_0_']; 
        $general['__WDWVALUE_6_0_GRAND_TOTAL'] = $general['__WDWVALUE_6_0_GRAND_TOTAL'] + $array['_WDWVALUE_6_0_']; 
        $general['__WDWVALUE_7_0_GRAND_TOTAL'] = $general['__WDWVALUE_7_0_GRAND_TOTAL'] + $array['_WDWVALUE_7_0_']; 
        $general['__WDWVALUE_8_0_GRAND_TOTAL'] = $general['__WDWVALUE_8_0_GRAND_TOTAL'] + $array['_WDWVALUE_8_0_']; 
        $general['__WDWVALUE_9_0_GRAND_TOTAL'] = $general['__WDWVALUE_9_0_GRAND_TOTAL'] + $array['_WDWVALUE_9_0_']; 
        $general['__WDWVALUE_10_0_GRAND_TOTAL'] = $general['__WDWVALUE_10_0_GRAND_TOTAL'] + $array['_WDWVALUE_10_0_']; 


    $general['__FRFVALUE_GRAND_TOTAL'] = $general['__FRFVALUE_GRAND_TOTAL'] + $array['__FRFVALUE_TOTAL']; 
 
        $general['__FRFVALUE_1_0_GRAND_TOTAL'] = $general['__FRFVALUE_1_0_GRAND_TOTAL'] + $array['_FRFVALUE_1_0_']; 
        $general['__FRFVALUE_2_0_GRAND_TOTAL'] = $general['__FRFVALUE_2_0_GRAND_TOTAL'] + $array['_FRFVALUE_2_0_']; 
        $general['__FRFVALUE_3_0_GRAND_TOTAL'] = $general['__FRFVALUE_3_0_GRAND_TOTAL'] + $array['_FRFVALUE_3_0_']; 
        $general['__FRFVALUE_4_0_GRAND_TOTAL'] = $general['__FRFVALUE_4_0_GRAND_TOTAL'] + $array['_FRFVALUE_4_0_']; 
        $general['__FRFVALUE_5_0_GRAND_TOTAL'] = $general['__FRFVALUE_5_0_GRAND_TOTAL'] + $array['_FRFVALUE_5_0_']; 
        $general['__FRFVALUE_6_0_GRAND_TOTAL'] = $general['__FRFVALUE_6_0_GRAND_TOTAL'] + $array['_FRFVALUE_6_0_']; 
        $general['__FRFVALUE_7_0_GRAND_TOTAL'] = $general['__FRFVALUE_7_0_GRAND_TOTAL'] + $array['_FRFVALUE_7_0_']; 
        $general['__FRFVALUE_8_0_GRAND_TOTAL'] = $general['__FRFVALUE_8_0_GRAND_TOTAL'] + $array['_FRFVALUE_8_0_']; 
        $general['__FRFVALUE_9_0_GRAND_TOTAL'] = $general['__FRFVALUE_9_0_GRAND_TOTAL'] + $array['_FRFVALUE_9_0_']; 
        $general['__FRFVALUE_10_0_GRAND_TOTAL'] = $general['__FRFVALUE_10_0_GRAND_TOTAL'] + $array['_FRFVALUE_10_0_']; 

    $general['__TFIVALUE_GRAND_TOTAL'] = $general['__TFIVALUE_GRAND_TOTAL'] + $array['__TFIVALUE_TOTAL']; 
 
        $general['__TFIVALUE_1_0_GRAND_TOTAL'] = $general['__TFIVALUE_1_0_GRAND_TOTAL'] + $array['_TFIVALUE_1_0_']; 
        $general['__TFIVALUE_2_0_GRAND_TOTAL'] = $general['__TFIVALUE_2_0_GRAND_TOTAL'] + $array['_TFIVALUE_2_0_']; 
        $general['__TFIVALUE_3_0_GRAND_TOTAL'] = $general['__TFIVALUE_3_0_GRAND_TOTAL'] + $array['_TFIVALUE_3_0_']; 
        $general['__TFIVALUE_4_0_GRAND_TOTAL'] = $general['__TFIVALUE_4_0_GRAND_TOTAL'] + $array['_TFIVALUE_4_0_']; 
        $general['__TFIVALUE_5_0_GRAND_TOTAL'] = $general['__TFIVALUE_5_0_GRAND_TOTAL'] + $array['_TFIVALUE_5_0_']; 
        $general['__TFIVALUE_6_0_GRAND_TOTAL'] = $general['__TFIVALUE_6_0_GRAND_TOTAL'] + $array['_TFIVALUE_6_0_']; 
        $general['__TFIVALUE_7_0_GRAND_TOTAL'] = $general['__TFIVALUE_7_0_GRAND_TOTAL'] + $array['_TFIVALUE_7_0_']; 
        $general['__TFIVALUE_8_0_GRAND_TOTAL'] = $general['__TFIVALUE_8_0_GRAND_TOTAL'] + $array['_TFIVALUE_8_0_']; 
        $general['__TFIVALUE_9_0_GRAND_TOTAL'] = $general['__TFIVALUE_9_0_GRAND_TOTAL'] + $array['_TFIVALUE_9_0_']; 
        $general['__TFIVALUE_10_0_GRAND_TOTAL'] = $general['__TFIVALUE_10_0_GRAND_TOTAL'] + $array['_TFIVALUE_10_0_']; 



        $general['__TFOVALUE_GRAND_TOTAL'] = $general['__TFOVALUE_GRAND_TOTAL'] + $array['__TFOVALUE_TOTAL']; 
 
        $general['__TFOVALUE_1_0_GRAND_TOTAL'] = $general['__TFOVALUE_1_0_GRAND_TOTAL'] + $array['_TFOVALUE_1_0_']; 
        $general['__TFOVALUE_2_0_GRAND_TOTAL'] = $general['__TFOVALUE_2_0_GRAND_TOTAL'] + $array['_TFOVALUE_2_0_']; 
        $general['__TFOVALUE_3_0_GRAND_TOTAL'] = $general['__TFOVALUE_3_0_GRAND_TOTAL'] + $array['_TFOVALUE_3_0_']; 
        $general['__TFOVALUE_4_0_GRAND_TOTAL'] = $general['__TFOVALUE_4_0_GRAND_TOTAL'] + $array['_TFOVALUE_4_0_']; 
        $general['__TFOVALUE_5_0_GRAND_TOTAL'] = $general['__TFOVALUE_5_0_GRAND_TOTAL'] + $array['_TFOVALUE_5_0_']; 
        $general['__TFOVALUE_6_0_GRAND_TOTAL'] = $general['__TFOVALUE_6_0_GRAND_TOTAL'] + $array['_TFOVALUE_6_0_']; 
        $general['__TFOVALUE_7_0_GRAND_TOTAL'] = $general['__TFOVALUE_7_0_GRAND_TOTAL'] + $array['_TFOVALUE_7_0_']; 
        $general['__TFOVALUE_8_0_GRAND_TOTAL'] = $general['__TFOVALUE_8_0_GRAND_TOTAL'] + $array['_TFOVALUE_8_0_']; 
        $general['__TFOVALUE_9_0_GRAND_TOTAL'] = $general['__TFOVALUE_9_0_GRAND_TOTAL'] + $array['_TFOVALUE_9_0_']; 
        $general['__TFOVALUE_10_0_GRAND_TOTAL'] = $general['__TFOVALUE_10_0_GRAND_TOTAL'] + $array['_TFOVALUE_10_0_']; 

        $general['__TFIOVALUE_GRAND_TOTAL'] = $general['__TFIOVALUE_GRAND_TOTAL'] + $array['__TFIOVALUE_TOTAL']; 
 
        $general['__TFIOVALUE_1_0_GRAND_TOTAL'] = $general['__TFIVALUE_1_0_GRAND_TOTAL'] - $general['__TFOVALUE_1_0_GRAND_TOTAL'];
        $general['__TFIOVALUE_2_0_GRAND_TOTAL'] = $general['__TFIVALUE_2_0_GRAND_TOTAL'] - $general['__TFOVALUE_2_0_GRAND_TOTAL'];
        $general['__TFIOVALUE_3_0_GRAND_TOTAL'] = $general['__TFIVALUE_3_0_GRAND_TOTAL'] - $general['__TFOVALUE_3_0_GRAND_TOTAL'];
        $general['__TFIOVALUE_4_0_GRAND_TOTAL'] = $general['__TFIVALUE_4_0_GRAND_TOTAL'] - $general['__TFOVALUE_4_0_GRAND_TOTAL'];
        $general['__TFIOVALUE_5_0_GRAND_TOTAL'] = $general['__TFIVALUE_5_0_GRAND_TOTAL'] - $general['__TFOVALUE_5_0_GRAND_TOTAL'];
        $general['__TFIOVALUE_6_0_GRAND_TOTAL'] = $general['__TFIVALUE_6_0_GRAND_TOTAL'] - $general['__TFOVALUE_6_0_GRAND_TOTAL'];
        $general['__TFIOVALUE_7_0_GRAND_TOTAL'] = $general['__TFIVALUE_7_0_GRAND_TOTAL'] - $general['__TFOVALUE_7_0_GRAND_TOTAL'];
        $general['__TFIOVALUE_8_0_GRAND_TOTAL'] = $general['__TFIVALUE_8_0_GRAND_TOTAL'] - $general['__TFOVALUE_8_0_GRAND_TOTAL'];
        $general['__TFIOVALUE_9_0_GRAND_TOTAL'] = $general['__TFIVALUE_9_0_GRAND_TOTAL'] - $general['__TFOVALUE_9_0_GRAND_TOTAL'];
        $general['__TFIOVALUE_10_0_GRAND_TOTAL'] = $general['__TFIVALUE_10_0_GRAND_TOTAL'] -  $general['__TFOVALUE_10_0_GRAND_TOTAL'];

   
    $general['__ENDVALUE_GRAND_TOTAL'] = $general['__ENDVALUE_GRAND_TOTAL'] + $array['__ENDVALUE_TOTAL']; 

        $general['__ENDVALUE_1_0_GRAND_TOTAL'] = $general['__ENDVALUE_1_0_GRAND_TOTAL'] + $array['_ENDVALUE_1_0_']; 
        $general['__ENDVALUE_2_0_GRAND_TOTAL'] = $general['__ENDVALUE_2_0_GRAND_TOTAL'] + $array['_ENDVALUE_2_0_']; 
        $general['__ENDVALUE_3_0_GRAND_TOTAL'] = $general['__ENDVALUE_3_0_GRAND_TOTAL'] + $array['_ENDVALUE_3_0_']; 
        $general['__ENDVALUE_4_0_GRAND_TOTAL'] = $general['__ENDVALUE_4_0_GRAND_TOTAL'] + $array['_ENDVALUE_4_0_']; 
        $general['__ENDVALUE_5_0_GRAND_TOTAL'] = $general['__ENDVALUE_5_0_GRAND_TOTAL'] + $array['_ENDVALUE_5_0_']; 
        $general['__ENDVALUE_6_0_GRAND_TOTAL'] = $general['__ENDVALUE_6_0_GRAND_TOTAL'] + $array['_ENDVALUE_6_0_']; 
        $general['__ENDVALUE_7_0_GRAND_TOTAL'] = $general['__ENDVALUE_7_0_GRAND_TOTAL'] + $array['_ENDVALUE_7_0_']; 
        $general['__ENDVALUE_8_0_GRAND_TOTAL'] = $general['__ENDVALUE_8_0_GRAND_TOTAL'] + $array['_ENDVALUE_8_0_']; 
        $general['__ENDVALUE_9_0_GRAND_TOTAL'] = $general['__ENDVALUE_9_0_GRAND_TOTAL'] + $array['_ENDVALUE_9_0_']; 
        $general['__ENDVALUE_10_0_GRAND_TOTAL'] = $general['__ENDVALUE_10_0_GRAND_TOTAL'] + $array['_ENDVALUE_10_0_']; 


	if ($array['_BEGVALUE_1_0_'] + $array['_CTBVALUE_1_0_'] + $array['_INTVALUE_1_0_']  + $array['_EXPVALUE_1_0_'] + $array['_WDWVALUE_1_0_'] + $array['_ENDVALUE_1_0_'] != 0){
		$array['__1_HAS_VALUE'] = true;
	}

	if ($array['_BEGVALUE_2_0_'] + $array['_CTBVALUE_2_0_'] + $array['_INTVALUE_2_0_']  + $array['_EXPVALUE_2_0_'] + $array['_WDWVALUE_2_0_'] + $array['_ENDVALUE_2_0_'] != 0){
		$array['__2_HAS_VALUE'] = true;
	}

	if ($array['_BEGVALUE_3_0_'] + $array['_CTBVALUE_3_0_'] + $array['_INTVALUE_3_0_']  + $array['_EXPVALUE_3_0_'] + $array['_WDWVALUE_3_0_'] + $array['_ENDVALUE_3_0_'] != 0){
		$array['__3_HAS_VALUE'] = true;
	}

	if ($array['_BEGVALUE_4_0_'] + $array['_CTBVALUE_4_0_'] + $array['_INTVALUE_4_0_']  + $array['_EXPVALUE_4_0_'] + $array['_WDWVALUE_4_0_'] + $array['_ENDVALUE_4_0_'] != 0){
		$array['__4_HAS_VALUE'] = true;
	}

	if ($array['_BEGVALUE_5_0_'] + $array['_CTBVALUE_5_0_'] + $array['_INTVALUE_5_0_']  + $array['_EXPVALUE_5_0_'] + $array['_WDWVALUE_5_0_'] + $array['_ENDVALUE_5_0_'] != 0){
		$array['__5_HAS_VALUE'] = true;
	}

	if ($array['_BEGVALUE_7_0_'] + $array['_CTBVALUE_7_0_'] + $array['_INTVALUE_7_0_']  + $array['_EXPVALUE_6_0_'] + $array['_WDWVALUE_7_0_'] + $array['_ENDVALUE_7_0_'] != 0){
		$array['__7_HAS_VALUE'] = true;
	}

	if ($array['_BEGVALUE_6_0_'] + $array['_CTBVALUE_6_0_'] + $array['_INTVALUE_6_0_']  + $array['_EXPVALUE_7_0_'] + $array['_WDWVALUE_6_0_'] + $array['_ENDVALUE_6_0_'] != 0){
		$array['__6_HAS_VALUE'] = true;
	}
	if ($array['_BEGVALUE_8_0_'] + $array['_CTBVALUE_8_0_'] + $array['_INTVALUE_8_0_']  + $array['_EXPVALUE_8_0_'] + $array['_WDWVALUE_8_0_'] + $array['_ENDVALUE_8_0_'] != 0){
		$array['__8_HAS_VALUE'] = true;
	}
	if ($array['_BEGVALUE_9_0_'] + $array['_CTBVALUE_9_0_'] + $array['_INTVALUE_9_0_']  + $array['_EXPVALUE_9_0_'] + $array['_WDWVALUE_9_0_'] + $array['_ENDVALUE_9_0_'] != 0){
		$array['__9_HAS_VALUE'] = true;
	}
	if ($array['_BEGVALUE_10_0_'] + $array['_CTBVALUE_10_0_'] + $array['_INTVALUE_10_0_']  + $array['_EXPVALUE_10_0_'] + $array['_WDWVALUE_10_0_'] + $array['_ENDVALUE_10_0_'] != 0){
		$array['__10_HAS_VALUE'] = true;
	}

    if ($array['_KEYELIG']){
		$general['__KEY_BALANCES_1'] = $general['__KEY_BALANCES_1'] + $array['_ENDVALUE_1_0_'];
		$general['__KEY_BALANCES_2'] = $general['__KEY_BALANCES_2'] + $array['_ENDVALUE_2_0_'];
		$general['__KEY_BALANCES_3'] = $general['__KEY_BALANCES_3'] + $array['_ENDVALUE_3_0_'];
		$general['__KEY_BALANCES_4'] = $general['__KEY_BALANCES_4'] + $array['_ENDVALUE_4_0_'];
		$general['__KEY_BALANCES_5'] = $general['__KEY_BALANCES_5'] + $array['_ENDVALUE_5_0_'];
		$general['__KEY_BALANCES_6'] = $general['__KEY_BALANCES_6'] + $array['_ENDVALUE_6_0_'];
		$general['__KEY_BALANCES_7'] = $general['__KEY_BALANCES_7'] + $array['_ENDVALUE_7_0_'];
		$general['__KEY_BALANCES_8'] = $general['__KEY_BALANCES_8'] + $array['_ENDVALUE_8_0_'];
		$general['__KEY_BALANCES_9'] = $general['__KEY_BALANCES_9'] + $array['_ENDVALUE_9_0_'];
		$general['__KEY_BALANCES_10'] = $general['__KEY_BALANCES_10'] + $array['_ENDVALUE_10_0_'];
		
		$general['__KEY_BALANCES'] = $general['__KEY_BALANCES'] + $array['_ENDVALUE_1_0_']
		       							+ $array['_ENDVALUE_2_0_']
									+ $array['_ENDVALUE_3_0_']
									+ $array['_ENDVALUE_4_0_']
									+ $array['_ENDVALUE_5_0_']
                                    + $array['_ENDVALUE_6_0_']
                                    + $array['_ENDVALUE_7_0_']
                                    + $array['_ENDVALUE_8_0_']
                                    + $array['_ENDVALUE_9_0_']
                                    + $array['_ENDVALUE_10_0_'];
	}

	$general['__ALL_BALANCES_1'] = $general['__ALL_BALANCES_1'] + $array['_ENDVALUE_1_0_'];
	$general['__ALL_BALANCES_2'] = $general['__ALL_BALANCES_2'] + $array['_ENDVALUE_2_0_'];
	$general['__ALL_BALANCES_3'] = $general['__ALL_BALANCES_3'] + $array['_ENDVALUE_3_0_'];
	$general['__ALL_BALANCES_4'] = $general['__ALL_BALANCES_4'] + $array['_ENDVALUE_4_0_'];
	$general['__ALL_BALANCES_5'] = $general['__ALL_BALANCES_5'] + $array['_ENDVALUE_5_0_'];
	$general['__ALL_BALANCES_6'] = $general['__ALL_BALANCES_6'] + $array['_ENDVALUE_6_0_'];
	$general['__ALL_BALANCES_7'] = $general['__ALL_BALANCES_7'] + $array['_ENDVALUE_7_0_'];
	$general['__ALL_BALANCES_8'] = $general['__ALL_BALANCES_8'] + $array['_ENDVALUE_8_0_'];
	$general['__ALL_BALANCES_9'] = $general['__ALL_BALANCES_9'] + $array['_ENDVALUE_9_0_'];
	$general['__ALL_BALANCES_10'] = $general['__ALL_BALANCES_10'] + $array['_ENDVALUE_10_0_'];

	$general['__ALL_BALANCES'] = $general['__ALL_BALANCES'] + $array['_ENDVALUE_1_0_']
	       							+ $array['_ENDVALUE_2_0_']
								+ $array['_ENDVALUE_3_0_']
								+ $array['_ENDVALUE_4_0_']
								+ $array['_ENDVALUE_5_0_']
                                + $array['_ENDVALUE_6_0_']
                                + $array['_ENDVALUE_7_0_']
                                + $array['_ENDVALUE_8_0_']
                                + $array['_ENDVALUE_9_0_']
                                + $array['_ENDVALUE_10_0_'];

	
	$totals['__415_MAX'][] = $array['__415_MAX'];
	$totals['__EMPLOYEE_DEFERRAL'][] = $array['_CTBVALUE_1_0_'];
	$totals['__SHNONEI_CONTRIBUTION'][] = $array['_CTBVALUE_4_0_'];
	$totals['__EMPLOYER_CONTRIBUTION'][] = $array['_CTBVALUE_2_0_'];
	$totals['__TOTAL_DEPOSIT'][] = $array['_CTBVALUE_1_0_'] + $array['_CTBVALUE_4_0_'] + $array['_CTBVALUE_2_0_'];


	return [$array, $general];
}


function do_normalize_array_keys($value){

		$nvalue = [];

		foreach ($value as $k => $v){
			$k = str_replace([".","-",">","<"," ","@","$","(",")",";",":","%","\\","/"], "_", $k);
			$nvalue[$k] = $v;
		}

	return $nvalue;	
}

function normalize_array_keys($array, $general){

	$retval = [];
	foreach ($array as $key => $value){

		$nvalue = do_normalize_array_keys($value);

		list($nvalue, $general) = calculate_totals($nvalue, $general);

		$retval[$key] = $nvalue;
	}

	return [$retval, $general];
}

function divZero($b, $a){

	if ($a == 0 OR $b == 0){
		return 0;
	} else {
		return ($a / $b) * 100;
	}

}

function fetchSummaryData($file_dir){
	$summaryFile = $file_dir . 'example-files\pensionstudioreportproject\limits.csv';

	$fileContents = file_get_contents($summaryFile);
	$fileContents = trim($fileContents);

	$lines = explode("\n", $fileContents);

	
	foreach ($lines as $line){
		$cells = explode("\t", $line);
		$data[] = ["key" => $cells[0], "year1" => $cells[1], "year2" => $cells[2]];
	}

	return $data;

}

function fetchCensusData($file_locations){

	$fileContents = file_get_contents($file_locations['census']);
    $fileContents = str_replace("\n\t", "\t", $fileContents);
    $fileContents = trim($fileContents);

	$lines = explode("\n", $fileContents);

	$data = formatToArray($lines);

	return $data;
}

function fetchAccountData($file_locations){

	$fileContents = file_get_contents($file_locations['account']);
    $fileContents = str_replace("\n\t", "\t", $fileContents);
	$fileContents = trim($fileContents);
	$lines = explode("\n", $fileContents);

	$data = formatToArray($lines);
	return $data;
}

function fetchPlanData($file_locations){

	$fileContents = file_get_contents($file_locations['plan']);
    $fileContents = str_replace("\n\t", "\t", $fileContents);
	$fileContents = trim($fileContents);
	$lines = explode("\n", $fileContents);
	
	$data = formatToArray($lines);
	return $data;
}

function formatToArray($lines){
    global $ini_data;

    trigger_error(print_r($ini_data, 1));

	$count = 0;
	foreach ($lines as $line){
		$line = trim($line);

		$items = explode("\t", $line);
		
		if (!$count++){
			$headers = $items;
			continue;
        } else {
            if (count($items) < count($headers)){
                $items[] = "";
            }
            $new_array = array_combine($headers, $items);
        }

        // THIS IS WHERE WE CHECK VALUES
        //
        $discard_row = 0;
        foreach ($ini_data['DISCARD'] as $k => $n){
            if (in_array($new_array[$k], $n)){
                // $discard_row = 1;
                $new_array['DISCARD'] = 1;
            }
        }

        if ($discard_row != 1){
            $retval[] = $new_array;
        } 


          //  $retval[] = $new_array;
	}
	return $retval;
}

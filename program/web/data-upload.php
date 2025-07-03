<?php

file_put_contents("dataOutput.json", $_REQUEST['data']);

$main_dir = substr(__DIR__, 0, -11);

$data = json_decode($_REQUEST['data'], 1);

$clean_prep = str_replace(" ", "_", $data['Preparer']);
$ini_file = $main_dir . 'preparers\\'. $clean_prep . '.ini';

// Check if preparer file exists before using it
if (file_exists($ini_file)) {
    $ini_data = parse_ini_file($ini_file);
    $data = array_merge($ini_data, $data);
} else {
    // Log that we're using default settings
    error_log("No preparer file found for: " . $data['Preparer'] . ". Using default settings.");
}

// Process uploaded PDFs for vesting schedules
require_once($main_dir . 'program/code/pdf_processor.php');
$pdfProcessor = new PDFProcessor();
try {
    $vestingResults = $pdfProcessor->processAllPDFs();
    
    // Add vesting schedule results to the data
    if (!empty($vestingResults)) {
        $data['vesting_schedules'] = $vestingResults;
        
        // Update plan year limit based on vesting schedule analysis
        foreach ($vestingResults as $result) {
            if (!isset($result['error']) && isset($result['schedule_type'])) {
                $data['vesting_schedule_type'] = $result['schedule_type'];
                break; // Use the first valid schedule found
            }
        }
    }
} catch (Exception $e) {
    error_log("Error processing PDFs: " . $e->getMessage());
}

$main_config_data = parse_ini_file($main_dir . 'config.ini', true);

$file_location = $main_config_data["FILES_LOCATION"];
// Generate a timestamp-based prefix if none provided
$timestamp = date('YmdHis');
$file_name = $timestamp."_PDFReport";
$orig_prefix = $timestamp;

$prefix = $file_location.$timestamp;

// Include files using correct path
require_once(__DIR__ . "/../code/parse-files.php");
require_once(__DIR__ . "/../code/library.php");

// Check for required files in the uploads directory
$uploadDir = './files/uploads/';
$requiredFiles = [
    'AccountFile' => null,
    'CensusFile' => null,
    'PlanSpec' => null
];

// Scan upload directory for required files
$files = scandir($uploadDir);
foreach ($files as $file) {
    if ($file === '.' || $file === '..') continue;
    
    if (strpos($file, 'account') !== false) {
        $requiredFiles['AccountFile'] = $uploadDir . $file;
    } elseif (strpos($file, 'census') !== false) {
        $requiredFiles['CensusFile'] = $uploadDir . $file;
    } elseif (strpos($file, 'plan') !== false) {
        $requiredFiles['PlanSpec'] = $uploadDir . $file;
    }
}

// Check if all required files were found
if (in_array(null, $requiredFiles, true)) {
    $missing = array_keys(array_filter($requiredFiles, function($v) { return $v === null; }));
    http_response_code(400);
    echo json_encode(["error" => "Missing required files: " . implode(', ', $missing)]);
    exit;
}

$data['files'] = [$requiredFiles];

try {
    create_templates($file_name, $data);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["error" => $e->getMessage()]);
    exit;
}

$finalReport = $prefix . "_FinalReport.pdf";

$cmd = "del \"$file_location\\$file_name.pdf\"";
$cmd2 = "del \"$finalReport\"";

system($cmd);
system($cmd2);

#$cmd = "\"{$main_dir}program\\wkhtmltopdf\\bin\\wkhtmltopdf.exe\" -s Letter -L 0 -T 10 -R 0 -O portrait --header-spacing 9 --dpi 300 --disable-smart-shrinking --header-html \"{$main_dir}program\\templates\\components\\header.html\" --footer-html \"{$main_dir}program\\templates\\components\\footer.html\"  \"{$main_dir}compiled\\reports.html\" \"{$file_location}\\{$file_name}.pdf\"";
 
$cmd = "\"{$main_dir}program\\wkhtmltopdf\\bin\\wkhtmltopdf.exe\" -s Letter -L 0 -T 10 -R 0 -O portrait --header-spacing 9 --enable-smart-shrinking --header-html \"{$main_dir}program\\templates\\components\\header.html\" --footer-html \"{$main_dir}program\\templates\\components\\footer.html\"  \"{$main_dir}compiled\\reports.html\" \"{$file_location}\\{$file_name}.pdf\"";


$data = system($cmd);

sleep(2);

$counter = 0;

$w = ["B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];

foreach (glob("{$file_location}\\{$orig_prefix}*.pdf") as $filename) {

    if (!strpos($filename, "PDFReport")){
        $pdf_array[$w[$counter]] = "{$w[$counter]}=\"$filename\"";
        $counter++;
    }
}

// Initialize empty PDF array
$pdf_array = [];

// Get list of PDFs in upload directory
foreach (glob("{$file_location}*.pdf") as $index => $filename) {
    if (!strpos($filename, "PDFReport") && !strpos($filename, "FinalReport")) {
        $letter = chr(66 + $index); // B, C, D, etc.
        $pdf_array[$letter] = $letter . "=\"" . $filename . "\"";
    }
}

if (!empty($pdf_array)) {
    $pdfString = join(" ", $pdf_array);
    $pdfKeys = join(" ", array_keys($pdf_array));
    $myString = "A=\"{$file_location}{$orig_prefix}_PDFReport.pdf\"";
    
    // Create final report
    $finalReport = "{$orig_prefix}_FinalReport.pdf";
    $outputPath = "{$file_location}{$finalReport}";
    
    // Use pdftk if available, otherwise just copy the report
    if (file_exists("{$main_dir}program/PDFtk/bin/pdftk")) {
        $cmd = "\"{$main_dir}program/PDFtk/bin/pdftk\" {$myString} {$pdfString} cat A {$pdfKeys} output \"{$outputPath}\"";
        exec($cmd);
    } else {
        copy("{$file_location}{$orig_prefix}_PDFReport.pdf", $outputPath);
    }
}

echo json_encode(["success" => true, "message" => "Report created successfully"]);

// echo $main_dir;

// echo "{$file_location}{$finalReport}";

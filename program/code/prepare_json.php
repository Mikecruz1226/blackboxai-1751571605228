<?php

$f = glob("preparers\*");

foreach ($f as $file){
    $na[] = '"'.str_replace("_", " ", substr($file, 10, -4)).'"';
}

$rdata = join(",", $na);
$data = file_get_contents("program/web/report.json");

$fdata = preg_replace('/,"enum": \[.*\]/', ',"enum": ['.$rdata.']', $data, 1);

file_put_contents("program/web/report.json", $fdata);

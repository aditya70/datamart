<?php

//ini_set('memory_limit', '2048M');

$excel_readers = array(
    'Excel5' , 
    'Excel2003XML' , 
    'Excel2007'
);
require_once('./PHPExcel-1.8/Classes/PHPExcel.php');
//$reader = PHPExcel_IOFactory::createReader('Excel5');
$reader = PHPExcel_IOFactory::createReader('Excel2007');
$reader->setReadDataOnly(true);
$path = 'Historic_Weather_Data.xlsx';
$excel = $reader->load($path);
$writer = PHPExcel_IOFactory::createWriter($excel, 'CSV');
$writer->save('data.csv');

?>
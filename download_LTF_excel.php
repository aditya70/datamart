<?php

$file = 'Historic_Weather_Data_Template.xlsm';
if (file_exists($file)) {
header('Content-Description: File Transfer');
// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet ;charset="UTF-8"');
//header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet ;charset="ASCII"');
//header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet ;charset="ANSI"');
//header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet ;charset="ISO-8859-1"');
//header('Content-Disposition: attachment;filename="Data.xlsx"');
header('Content-Disposition: attachment;filename="'.basename($file).'"');
 header('Expires: 0');
   header('Cache-Control: must-revalidate');
header('Content-Length: ' . filesize($file));
header('Cache-Control: max-age=0');
 header('Pragma: public');
  header('Content-Length: ' . filesize($file));
 readfile($file);
exit;
}
?>
<?php

$file_name=$_REQUEST["filename"];

if (file_exists($file_name)) {
  header('Content-Description: File Transfer');
  header('Content-Type: text/plain');
  header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length: ' . filesize($file_name));
  readfile($file_name);
  exit();
}
?>


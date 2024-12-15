<?php 

$dir = "./*.pdf";

// Sort in ascending order - this is default
$a = glob($dir);

// Sort in descending order
$b = rsort($a);

$filename = $b[0];

if (file_exists($filename)) {
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename="'.basename($filename).'"');
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length: ' . filesize($filename));
  readfile($filename);
  exit;
} else {
  echo "Cannot find " . $filename . ".";
}

?>

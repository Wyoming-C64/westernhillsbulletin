<?php 

$filename=

$dir = "./*.pdf";

// Sort in ascending order - this is default
$a = glob($dir);

// Sort in descending order
$b = rsort($a);

$filename = $b[0];

header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
header('Content-Transfer-Encoding: binary');
readfile($filename);

?>

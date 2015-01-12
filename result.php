<!DOCTYPE html>
<head>
<title>Current Contracts</title>
</head>
<html>
<body>
<?php
$current = "Current";
$sum=0;
$CSVfp = fopen("final.csv", "r");
if($CSVfp !== FALSE) {
 while(! feof($CSVfp)) {
  $data = fgetcsv($CSVfp, 1000, ",");
  
  if($data[1]==$current && isset($data[12]))
  {
	 $sum = $sum + $data[12];
 
  }
 }
 echo"Total Amount of Current Contracts: ";
  print_r($sum);
}
fclose($CSVfp);
?>
</body>
</html>

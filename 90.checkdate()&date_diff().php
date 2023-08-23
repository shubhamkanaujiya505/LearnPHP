<?php 
echo checkdate(2, 15, 2024);

$date1 = date_create("2023-03-06");
$date2 = date_create("2023-06-09");

$diff = date_diff($date1, $date2);

echo "<pre>";
print_r($diff);
echo "</pre>";


?>
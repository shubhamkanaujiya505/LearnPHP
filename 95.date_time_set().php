<?php 
$date = date_create("2023-05-15");

date_time_set($date, 13, 20);

echo date_format($date, "d-m-Y H:i:s") . "<br>";

date_time_set($date, 05, 20, 45);
?>
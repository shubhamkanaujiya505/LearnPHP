<?php 

echo "<pre>";
// $date = date_parse("2023-03-06 12:30:45");
$date = date_parse_from_format("mmddyyyy", "11052023");
print_r($date);
// echo $date['day'];




?>
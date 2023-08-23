<?php 
echo date_default_timezone_set("asia/kolkata");
echo date_default_timezone_get() . "<br>";

$a = timezone_open("asia/kolkata");

echo timezone_name_get($a);

echo "<pre>";
// print_r(timezone_location_get($a)). "<br>";
// print_r(timezone_identifiers_list()). "<br>";
print_r(timezone_identifiers_list(1)). "<br>";




?>
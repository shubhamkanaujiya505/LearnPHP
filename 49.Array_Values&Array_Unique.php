
<!-- 

-->


<!-- === -> value, key and datatype matched

return 0, 1, -1

0 ->  means two value matched -
1 ->  means a > b value.
-1 ->  means a < b value.

-->

<?php

// u -> means user defined function


$array1 = array("a" => "green", "3" => "red", "c" => "blue", "7" =>  "yellow", "8" => "green");
// $array2 = array("a" => "green", "2" => "red","5" =>  "yellow", "4" => "pink");

echo "<pre>";

// $result = array_values($array1);
$result = array_unique($array1);
print_r($result);
echo "</pre>";



?>
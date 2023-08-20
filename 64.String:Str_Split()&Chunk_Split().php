<?php 

$a = 'Hello this is the hello world'; 

//  $n = str_split($a,2);
 $n = chunk_split($a, 1,",");

echo "<pre>";
print_r($n);
echo "</pre>";

?>
<?php 

$a = 'Hello this is the hello is world'; 


//  $n = strpos($a, "is",1);
//  $n = strrpos($a, "is",1); //reverse search
//  $n = stripos($a, "is",1);
 $n = strripos($a, "is",1);  //reverse search

echo "<pre>";
print_r($n);
echo "</pre>";

?>
<?php 

$a = 'Hello this is the hello is world'; 



//  $n = strstr($a,"this",true); // print before all string  
//  $n = strstr($a,"this"); // print after all string  
//  $n = stristr($a,"This");  
//  $n = strchr($a,"this");  // same ass strstr
//  $n = strchr($a,"this");  
//  $n = strrchr($a,"this");  
 $n = strpbrk($a,"i");  

echo "<pre>";
print_r($n);
echo "</pre>";

?>
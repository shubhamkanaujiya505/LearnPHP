<?php 


// $b = "this is 'The Second' string";
$b = "this is the Second string";
 
echo $b . "<br>";  

// $newstr = addslashes($b);
$newstr = addcslashes($b, "a...z");
echo $newstr;

echo stripcslashes($newstr);


?>
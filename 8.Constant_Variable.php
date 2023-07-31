<!-- IN php constant variables are global variables 

connot use $ sign with constant variable name 

-->

<?php
// define("variable",value,"false")
define("test",50);
define("_test",500);
// define("test",500); // we cannot redefine 
echo test;
echo _test;

$sum = test + 100;
echo $sum;

?>

<?php 

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$a = " Kanaujiya"; //gobal variable 
$b = " Shubham";
function asd(){
   global $a,$b; // make global variable accessable
    echo "my name is: ". $a ."<br>";
    echo "my name is: ". $b ."<br>";
}

asd();
echo "my name is: ". $b . $a ."<br>";
?>
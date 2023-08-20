<?php 

$a = 'this is the first string';

$b = 'this is The Second string';

// echo strcmp($a,$b); //+ -> $a > $b, - -> $a < $b
// echo strncmp($a,$b,6); //0 -> same number of letter both variable 
// echo strcasecmp($a,$b); //0 -> same number of letter both variable 
// echo strnatcmp($a,$b);  
// echo strnatcasecmp($a,$b);  
// echo substr_compare($a,$b,5,2);  
echo similar_text($a,$b,$per);  

echo "percentage : ". $per;



?>
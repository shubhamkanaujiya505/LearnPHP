
<!-- array_splice(array,start,length,array-II) 
array -> varable name where array store and you remove the value.
start -> Required. Numeric value. Specifies where the function will start removing elements. 0 = the first element.
length -> Optional. Numeric value. Specifies how many elements will be removed, and also length of the returned array.
array II -> Optional. this is define for not take the value in 2nd variable.

-->


<?php 
$fruit = ['orange','apple','banana','grapes'];
$extrafruit = ['pineapple','guvava'];

// array_splice($fruit,1);
// array_splice($fruit,1, count($fruit),$extrafruit);
array_splice($fruit,1,0,$extrafruit);
echo "<pre>";
$x = print_r($fruit);
echo "</pre>";

?>


<?php
// $a1=array("0"=>"red","1"=>"green");
// $a2=array("0"=>"purple","1"=>"orange");
// array_splice($a1,1,0,$a2);
// echo "<pre>";
// print_r($a1);
// echo "</pre>";
?>
<?php 

$a = 'Hello this is the hello is world'; 

//  $n = strlen($a);
// for word count
//  $n = str_word_count($a,4);

// for search word
 $n = substr_count($a, "is",1,30);

echo "<pre>";
print_r($n);
echo "</pre>";

?>
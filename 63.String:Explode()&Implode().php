<!-- string to array convertion -->

<?php 

// $a = 'Hello this is the hello world'; // for expload
$a = array("Hello", "this", "is", "the", "hello", "world");

// $b = explode(" ", $a);
// $b = implode(" ", $a);
$b = join(" ", $a);

echo "<pre>";
print_r($b);
echo "</pre>";

?>
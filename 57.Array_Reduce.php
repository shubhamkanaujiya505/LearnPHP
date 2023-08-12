<?php 

function myfunction($n, $m){
    // return $n . "-" . $m;
    // return $n + $m;
    // return $n * $m;
    $n +=$m;
    return $n;
}

// $a = ["orange", "apple", "pea"];
$a = [1,2,3,4,5];

// $result = array_reduce($a, "myfunction","lemon");
// $result = array_reduce($a, "myfunction");
$result = array_reduce($a, "myfunction", 1);

echo "<pre>";
print_r($result);
echo "</pre>";



?>
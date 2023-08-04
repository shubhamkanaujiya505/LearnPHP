<!-- Passing arguments by value
Passing arguments by Reference or address-->


<!-- Passing arguments by Reference or address -->

<?php 

function second($num)
{
    $num +=40;
    return $num;
}

$b = 50;
$numer = second($b);
echo "noraml value is " . $numer. '<br>';

function first(&$numb)
{
    $numb +=40;
    // echo $num;
}

$b = 50;
first($b);
echo "Referenced value is " .$b. '<br>';
 

?>
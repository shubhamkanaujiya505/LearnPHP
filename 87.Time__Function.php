<?php 

echo "Hour is  " . date("h") . "<br>";
echo "Hour is  " . date("H") . "<br>";
echo "Hour is  " . date("g") . "<br>";
echo "Hour is  " . date("G") . "<br>";
echo "Hour is  " . date("i") . "<br>";
echo "Hour is  " . date("s") . "<br>";
echo "Hour is  " . date("S") . "<br>";
echo "Hour is  " . date("A") . "<br>";
echo "Hour is  " . date("a") . "<br>";
echo "today date and Hour is  " . date("d/m/Y") ." " . date("h:i:sa e") . "<br>";


date_default_timezone_set("Asia/Kolkata");
echo "Time is " . date("h:i:sa e") . "<br>";



?>
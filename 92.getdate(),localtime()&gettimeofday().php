<?php 
$olddate = mktime(0,0,0,03,15,2015);
// $date = getdate($olddate);
// echo $date['month']. "-". $date['year'];

echo "<pre>";
// print_r(getdate($olddate));
print_r(gettimeofday());

// $date = gettimeofday();
// echo $date['sec']."<br>";

// echo gettimeofday(true);



// for localtime

echo "<pre>";
// print_r(localtime(time(),true));
print_r(localtime($olddate,true));


?>
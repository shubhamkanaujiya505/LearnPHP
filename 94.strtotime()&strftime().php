<?php 
// echo date("d/m/y",strtotime(("3 march 2023")));
echo date("d/m/Y H:m",strtotime("+5 hours")). "<br>";
echo date("d/m/Y H:m",strtotime("+5 week")). "<br>";
echo date("d/m/Y H:m",strtotime("next monday")). "<br>";
echo date("d/m/Y H:m",strtotime("last sunday")). "<br>";
echo date("d/m/Y H:m",strtotime("first day of last month")). "<br>"."<br>";
echo strftime("%B %d %Y, %X %Z"). "<br>"."<br>";
echo strftime("%B %d %Y, %X %Z", mktime(21,30,0,05,18,2005)). "<br>";


?>
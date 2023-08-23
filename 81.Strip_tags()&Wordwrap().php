<?php 

// $str = "hello  my name is <b> shubham </b> and this is <i> italic </i> character";
// echo strip_tags($str, "<br");


$str = "hello  my name is <b> shubham </b> and this is <i> italic </i> character";
echo wordwrap($str, 4, "<br>", true);







?>
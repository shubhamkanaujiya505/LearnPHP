<?php 

// $str = "A 'quote' is <b> bold </b>";
$str = "<a>https://www.youtube.com/watch?v=D8L7l1qAgd4&list=PL0b6OzIxLPbyrzCMJOFzLnf_-_5E_dkzs&index=76</a>";

echo $str . "<br>" . "<br>";
// echo htmlentities($str, ENT_QUOTES);
$g =  htmlentities($str, ENT_NOQUOTES);

echo $g . "<br>" . "<br>";

echo html_entity_decode($g);



?>
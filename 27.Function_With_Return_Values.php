 <!-- function functionName(parameter1,parameter2){
    statements
    return value;
 } 
$a = functionName(argument1,argument2);

-->


<!-- Passing arguments by value -->

<?php 

// function abc($a = 4, $b = 5)
// {
//    $n =  $a + $b;
//    return $n;
// }

// $m = abc($a = 10, $b = 8);
//  echo "Your age is: " . $m;


// find %

function percentage2($TotalMarks,$FullMarks){
   $Total = ($TotalMarks*100)/$FullMarks;
   return $Total;
}

// function percentage($hindi = 33, $english = 33, $science = 33, $Maths = 33)
// {
//    $Total = (($hindi+$english+$science+$Maths)*100)/400;
//    return $Total;
// }
$hindi = 10;
$english = 00;
$science = 00;
$science = 00;
$sst = 50;
$totalnumber = $hindi+$english+$science+$science+$sst;
$Fullmarks = 500;

$Final_Percentage = percentage2($totalnumber,$Fullmarks);
//  echo "Shubham your Final Percentage is: " . $Final_Percentage;
// echo $Final_Percentage;die;


 switch ($Final_Percentage) {
   
   case ($Final_Percentage >=33 && $Final_Percentage <45):
      echo "Your percentage is " . $Final_Percentage . " " . "and you are <b>Promoted by Grace Marks</b>";
      break;
   case ($Final_Percentage >=45 && $Final_Percentage <60):
      echo "Your percentage is " . $Final_Percentage . " " .  "and you are third devision ";
      break;
   case ($Final_Percentage >=60 && $Final_Percentage <80):
      echo "Your percentage is " . $Final_Percentage . " " .  "and you are second devision ";
      break;
   case ($Final_Percentage >= 80 && $Final_Percentage <100):
      echo "Your percentage is " . $Final_Percentage . " " .  "and you are first devision ";
      break;
   
   default:
      echo "Sorry you are Fail";
      break;
 }


?>
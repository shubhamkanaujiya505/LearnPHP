<?php
$age  = 80;
if($age <= 10){
    echo ("You are child ");
}else if ($age >=10 && $age <= 18 ){
    echo ("you are teen age");
}
else if ($age >= 18 && $age <=40 ){
    echo ("you are young");
}
else if ($age > 40 && $age <=60 ){
    echo ("you are teen meture");
}
else if ($age > 60 && $age <=100 ){
    echo ("you are old");
}else{
    echo("you are not a person");
}




?>
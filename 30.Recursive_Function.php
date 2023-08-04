

<?php 

// function display($number){
//     if($number  <= 20){
//         echo $number . "<br>";
//         display($number + 1);
//     }

// }

// display(3);

function factorial($n){
    if($n == 0){
        return 1;
    }else{
        return ($n * factorial($n-1));
    }

}

$number = factorial(5);
echo $number;


?>
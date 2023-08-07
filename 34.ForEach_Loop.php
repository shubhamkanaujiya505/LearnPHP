<!-- foreach($array as $value){
    statement
} -->

<?php 

$color = [
    "red" => 1,
    "green" => 2,
    "blue" => 3,
    "yellow" => 4,
    "white" => 5,
];
echo "<ul>";
foreach ($color as $key => $value) {
    echo "<li>" . "<h1>" . $value ." => ". $key . "</h1>" ."</li>";
}
echo "</ul>";

?>
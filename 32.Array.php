<?php 
$color = ["red","green","yellow", "blue"];
echo "<ul>";
// echo "<pre>";
// print_r($color);die;
for($i = 0;$i < 4;$i++){
    echo "<li>".$color[$i] . '</li>';
}
echo "</ul>";
?>
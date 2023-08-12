<!-- 
array_intersect             use Value, not callback
array_uintersect            use Value, callback receives Value
array_intersect_key         use Key, not callback
array_intersect_ukey        use Key, callback receives Key
array_intersect_assoc       use Both, not callback
array_intersect_uassoc      use Both, callback receives Key ONLY
array_uintersect_assoc      use Both, callback receives Value ONLY
array_uintersect_uassoc     use Both, One callback receives the Key, the other receives the Value. 
-->


<!-- === -> value, key and datatype matched

return 0, 1, -1

0 ->  means two value matched -
1 ->  means a > b value.
-1 ->  means a < b value.

-->

<?php

// u -> means user defined function

// for match keys only.
function compare($array1, $array2){
    if($array1 === $array2){
        return 0;
    }
    return($array1 > $array2)? 1 : -1;

}

// for match values only.
function compareValue($array1, $array2){
    if($array1 === $array2){
        return 0;
    }
    return($array1 > $array2)? 1 : -1;

}

$array1 = array("a" => "green", "1" => "red", "3" => "blue");
$array2 = array("a" => "green", "1" => "red","3" =>  "red");
// $array3 = array("b" => "green","4" => "red", "orange");
// $result = array_intersect($array1, $array2);
// $result = array_intersect_key($array1, $array2);
// $result = array_intersect_assoc($array1, $array2);
// $result = array_intersect_uassoc($array1, $array2, "compare");
// $result = array_uintersect_assoc($array1, $array2, "compare");
// $result = array_intersect_ukey($array1, $array2, "compare");
// $result = array_uintersect($array1, $array2, "compare");
$result = array_uintersect_uassoc($array1, $array2, "compare", "compareValue");
print_r($result);



?>
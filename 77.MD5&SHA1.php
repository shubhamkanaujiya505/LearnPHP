<?php 
// $str = "Hello";
$str = "Hello world";
echo "the string : " . $str . "<br>";

// echo "md5 binary: " . md5($str, True) . "<br>";
// echo "md5 binary: " . sha1($str, True) . "<br>";

// echo "md5 hex: " . md5($str) . "<br>";
// echo "md5 hex: " . sha1($str) . "<br>";

// if(sha1($str ) == "f7ff9e8b7bb2e09b70935a5d785e0cc5d9d0abf0"){
//     echo "password matched";
// }

if(md5($str ) == "f7ff9e8b7bb2e09b70935a5d785e0cc5d9d0abf0"){
    echo "password matched";
}else {
    echo "not matched";
}

?>
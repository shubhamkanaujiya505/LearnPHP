<?php 
session_start();
print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    if(isset($_SESSION['favcolor'])){
        echo "hello" . $_SESSION['favcolor'];
    }
   ?>
</body>
</html>
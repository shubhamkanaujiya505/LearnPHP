<!-- 
Array
(
    [image] => Array
        (
            [name] => gabriel-heinzer-4Mw7nkQDByk-unsplash.jpg
            [type] => image/jpeg
            [tmp_name] => /tmp/phphHjuwk
            [error] => 0
            [size] => 844071
        )

) -->
<?php 

if(isset($_FILES['image'])){
    echo "<pre>";
    print_r($_FILES);
}

$file_name = $_FILES['image']['name'];
$file_type = $_FILES['image']['type'];
$file_tmp_name = $_FILES['image']['tmp_name'];
$file_error = $_FILES['image']['error'];
$file_size = $_FILES['image']['size'];


if(move_uploaded_file($file_tmp_name, "image_upload/".$file_name)){
    echo "successfully uploaded";
}else{
    echo "file not uploaded";
}


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
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image"/><br><br>
        <input type="submit"/>
    </form>
    
</body>
</html>
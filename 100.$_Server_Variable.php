<!-- super global variable -->


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<!-- method get show content in url bar -->
<!-- $_server for same page print content -->
    <form action = "<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

    Name : <input type="text" name="fname"><br><br>

    Age : <input type="text" name="age"><br><br>

    <input type="submit" name="save">
    </form>

    <?php 
    if(isset($_POST['save'])){
        echo $_POST['fname'];
        echo $_POST['age'];

    }
    ?>

</body>
</html>
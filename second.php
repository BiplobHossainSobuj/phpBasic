<?php
    if (isset($_POST['btn'])) {
        $user=$_POST['user'];
        $email=$_POST['email'];
        $cell=$_POST['cell'];
        $age=$_POST['age'];
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
    <h1>username is
        <?php
        if(isset($age)){
            echo $age;
        }
        ?>
    </h1>
</body>
</html>
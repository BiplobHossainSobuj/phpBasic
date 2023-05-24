<?php
    $con=mysqli_connect('localhost','root','');
    if (!$con) {
        echo "not connected";
    }else {
        echo "connected to the server";
    }
    if (!mysqli_select_db($con,'first_php')) {
        echo "not connected to DB";
    }else {
        echo "connected to the DB";
    }
    

    if (isset($_POST['user_name'])) {
        $name = $_POST['user_name'];
        $email = $_POST['user_mail'];
        $sql = "INSERT INTO simple_db(name,email) VALUES ('$name','$email')";
        if(!mysqli_query($con,$sql)) {
            echo "value not inserted";
        }
        else {
            echo "values inserted";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database connection</title>
</head>
<body>
    <form action="" method="post">
        username:<input type="text" name="user_name" id=""><br>
        useremail:<input type="email" name="user_mail" id=""><br>
        <input type="submit" value="Save">
        <br>
    </form>
</body>
</html>
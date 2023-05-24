
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user input</title>
</head>
<body>
    <form action="third.php" method="POST">
        <label for="">username</label>
        <input type="text" name="user" id="">
        <br>
        <label for="">userEmail</label>
        <input type="email" name="email" id="">
        <br>
        <label for="">Contact</label>
        <input type="tel" name="cell" id="">
        <br>
        <label for="">Age</label>
        <input type="number" name="age" id="">
        <br>
        <input type="submit" value="submit" name="btn">
    </form>
    <?php
    echo "welcome to form";
    ?>
</body>
</html>
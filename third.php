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
        if(isset($user)){
            $search_char="b";
            $count=0;
            for($i=0;$i<strlen($user);$i++){
                if(substr($user,$i,1)==$search_char)
                $count=$count+1;
            }
            echo $count;
        }
        ?>
    </h1>
    <h2>
        factorial is
        <?php
        if(isset($age)){
            $x=1;
            for($i=1;$i<=$age-1;$i++){
                $x*=($i+1);
            }
            echo $x;
        }
        ?>
    </h2>
</body>
</html>
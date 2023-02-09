<?php
include"function/index.php";
session_start();

if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
    // set default invalid
    $_SESSION['status']='invalid';
}

if($_SESSION['status'] =='valid'){
    echo"<script>window.location.href='table.php'</script>";
}

if (isset($_POST['login'])){
    $userName = trim($_POST['userName']);
    $passWord = trim($_POST['passWord']);

    if(empty($userName) || empty($passWord)){
        echo"<script>alert('Please fill all fields!')</script>";
    }else{
        $queryvalidation ="SELECT * FROM account WHERE userName = '$userName' AND passWord = '$passWord'";
        $sqlvalidation = $con->query($queryvalidation);
        $resvalidate = $sqlvalidation->fetch_assoc();

        if(mysqli_num_rows($sqlvalidation) > 0){
            $_SESSION['status'] = 'valid';
            $_SESSION['userName'] = $resvalidate['userName'];
            echo"<script>window.location.href='table.php'</script>";

        }else{
            $_SESSION['status'] = 'invalid';
            echo"<script>alert('Invalid Credentials!')</script>";
        }
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="Login.php" method="post">
        <input type="text" name="userName" id="" placeholder="Input username">
        <input type="password" name="passWord" id="" placeholder="Input Password">
        <input type="submit" value="login" name="login">
    </form>
</body>
</html>
<?php
session_start();
if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'] )){

    $_SESSION['status'] = 'invalid';

    echo"<script>window.location.href='Login.php'</script>";
}

if($_SESSION['status'] == 'valid'){
    $_SESSION['status'] = 'valid';

    echo"<script>window.location.href='table.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form action="function/function.php" method="post">
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="text" name="gender" placeholder="Gender" required>
        <input type="submit" name="submit" value='submit'>
    </form>
    
</body>
</html>
<?php

include"function/edit.php";
$id = $_GET['id'];

$queryEditM = "SELECT * FROM member WHERE id=$id";
$sqlEditM = $con->query($queryEditM);

while($res = $sqlEditM->fetch_assoc()){
    $fname = $res['first_name'];
    $lname = $res['last_name'];
    $gender = $res['gender'];


};


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form name="" action="function/edit.php" method="post">
    <input type="text" name="first_name" value=<?php echo $fname; ?> >
        <input type="text" name="last_name"  value=<?php echo $lname; ?> >
        <input type="text" name="gender"  value=<?php echo $gender; ?> >
        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
        <input type="submit" name="update" value='submit'>

    </form>
</body>
</html>
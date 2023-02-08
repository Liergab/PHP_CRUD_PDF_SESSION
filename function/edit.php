<?php 
include"index.php";

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $gender = $_POST['gender'];

    $queryEditM = "UPDATE member SET first_name='$fname', last_name='$lname',gender='$gender' WHERE id=$id";
    $sqlEditM = $con->query($queryEditM);

    echo"<script>alert('Successfully Edited')</script>";

    echo"<script>window.location.href='../table.php'</script>";

}

?>
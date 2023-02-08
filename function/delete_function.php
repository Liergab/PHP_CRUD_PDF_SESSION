<?php
    include"index.php";
    $id = $_GET['id'];
    $queryDeleteM ="DELETE FROM member WHERE id=$id";
    $sqlDeleteM = $con->query($queryDeleteM);
    echo"<script>alert('Successfully Deleted!')</script>";
     echo"<script>window.location.href='../table.php'</script>";
?>
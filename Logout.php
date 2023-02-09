<?php 
session_start();

$_SESSION['status'] ='invalid';

unset($_SESSION['userName']);

echo"<script>window.location.href='Login.php'</script>";

?>
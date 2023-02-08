<?php
    include"index.php";

    if(isset($_POST['submit'])){
        $fname =$_POST['first_name'];
        $lname=$_POST['last_name'];
        $gender=$_POST['gender'];

         $queryCreateM = "Insert INTO member (first_name, last_name, gender) VALUES ('$fname','$lname','$gender')";
        $sqlCreateM = $con->query($queryCreateM);
     
        echo"<script>alert('successfully added')</script>";
        echo"<script>window.location.href='../table.php'</script>";
    }

  

 
?>
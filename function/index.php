<?php
$host = "localhost";
$username = "root";
$password="";
$database_name ="bcwmunisan_db";

$con = new mysqli($host, $username, $password, $database_name);

if(!$con){
 echo"$con->connect_error";
}

// $queryMember = "SELECT * FROM member";
// $sqlMember = $con->query($queryMember) or die($con->error);
// $row =$sqlMember->fetch_assoc();
// do{
//     echo $row['first_name'];
// }while($row =$sqlMember->fetch_assoc());

?>
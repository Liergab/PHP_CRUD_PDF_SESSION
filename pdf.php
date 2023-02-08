<?php
include "function/index.php";

require_once __DIR__ . '/vendor/autoload.php';
$currentDate = date('Y-m-d h:m:s');

$resultsAccount = "";


$queryMember = "SELECT * FROM member";
$sqlMember = mysqli_query($con,$queryMember) or die(connect_error);

while($res = $sqlMember->fetch_assoc()){
    $resultsAccount = $resultsAccount.'

    <tr>
        <td>'.$res['first_name'].'</td>
        <td>'.$res['last_name'].'</td>
        <td>'.$res['gender'].'</td>
  
    </tr>
    
    ';
}

$html = '
<link rel="stylesheet" href="pdf.css">

<h1>PERSONAL INFORMATIONS!</h1>
<table>
    <tr>
       <th> <strong>DATE: </strong></th>
        <th>'.$currentDate.'</th>
    </tr>
</table>

<table class="info-table">
    <thead>
        <tr>
            <th>First Name</th>
            <th>LastName</th>
            <th>Gender</th>
        </tr>
        
    </thead>
    <tbody>
        '.$resultsAccount.'
        
    </tbody>
</table>

';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output("$currentDate.pdf","D");
?>


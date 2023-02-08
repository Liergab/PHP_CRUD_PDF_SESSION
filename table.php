<?php
include"function/index.php";
$sort = "DESC";
$column = "first_name";

if(isset($_GET['column']) && isset($_GET['sort'])){
    $sort = $_GET['sort'];
    $column = $_GET['column'];

    $sort == 'ASC'? $sort ='DESC' : $sort = 'ASC';

}

$queryMember = "SELECT * FROM member ORDER BY $column $sort";
$sqlMember = mysqli_query($con,$queryMember) or die(connect_error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        body{
            background:#86A3B8;
        }
        .costom{
            margin-top:50px;
            display:grid;
            grid-template-row: 1fr 1fr;
            grid-template-column: 1fr;
            gap:60px;
        }
       
    </style>
</head>
<body class="container-fluid" >
    <div class="container costom">
        <div class="box1">
        <a href='add.php' class='btn btn-primary btn-sm'>ADD</a>
        </div>
        <form action="pdf.php" method="post">
        <input type="submit" class="btn  btn-primary btn-sm" name="exportTopdf" value="Download PDF">
        </form>
        <table class="table box2">
            <thead>
                <tr>
                    <th><a href="?column=first_name&sort=<?php echo $sort ?>">FirstName</a></th>
                    <th><a href="?column=last_name&sort=<?php echo $sort ?>">LastName</a></th>
                    <th><a href="?column=gender&sort=<?php echo $sort ?>">Gender</a></th>
                    <th>Option</th>
                </tr>
            </thead>
           
            <tbody>
                <?php while($res = $sqlMember->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $res['first_name']; ?></td>
                <td><?php echo $res['last_name']; ?></td>
                <td><?php echo $res['gender']; ?></td>
                <td><?php echo "<a href='edit.php?id=$res[id]' class='btn btn-success btn-sm'>Edit</a> |<a href='function/delete_function.php?id=$res[id]' class='btn btn-danger btn-sm'>Delete</a>" ?></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
   
</body>
</html>
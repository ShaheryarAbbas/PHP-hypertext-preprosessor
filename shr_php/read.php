<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud System</title>
</head>
<body>
    <a href="index.php">Add new Record</a>
    <table border="10">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
           
        </tr>
        <?php
        $q=mysqli_query($conn,"SELECT * FROM `employee`");
        foreach($q as $data)
        {
            echo'<tr>
            <td>'.$data['id'].'</td>
            <td>'.$data['name'].'</td>
            <td>'.$data['email'].'</td>
            <td>
            <a href="read.php?id='.$data['id'].'" class="btn btn-danger">Delete</a>
            |
            <a href="update.php?id='.$data['id'].'" class="btn btn-success">Update</a>
            
        </td>
            </tr>';
        }
        ?>
    </table>
</body>
</html>
<?php
if(isset($_GET['id']))
{
    $del=$_GET['id'];
    mysqli_query($conn,"DELETE FROM `employee` WHERE `id` =$del");
    echo"<script>'window.location.href='read.php';</script>";
}
?>
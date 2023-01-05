<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Add new Record</a>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
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
            </tr>';
        }
        ?>
    </table>
</body>
</html>
<?php
// if(isset($_GET['id']))
// {
//     $del=$_GET['id'];
//     mysqli_query($conn,"DELETE FROM `employee` WHERE `id` =$del");
//     echo"<script>window.location.href='read.php';</script>";
// }
?>
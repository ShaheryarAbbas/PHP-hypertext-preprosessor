<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Crud System</title>
</head>
<body>
    <a href="read.php">Back to List</a>
    <form method="POST">
    <label>Name</label>
    <input type="text" name="txtname" required>
    <br>
    <label>Email</label>
    <input type="text" name="txtemail" required>
    <br>
    <input type="submit" name="btnAdd">
    </form>
</body>
</html>
<?php
if(isset($_POST["btnAdd"]))
{
    $name=$_POST["txtname"];
    $email=$_POST["txtemail"];
    $q=mysqli_query($conn,"INSERT INTO `employee`(`id`, `name`, `email`) VALUES ('','$name','$email')");
    if($q>0)
    {
        echo'<script>
        swal("Added!","","success");
        </script>';
    }
    else
    {
        echo'<script>
        swal("Added!","","error");
        </script>';
    }
}
?>
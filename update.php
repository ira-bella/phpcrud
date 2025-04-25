<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
include"conn.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql=mysqli_query($conn,"SELECT * from login where id='$id'");
    while($row=mysqli_fetch_array($sql)){
        ?>
<form action=""method="POST">
<h1>ADD USER</h1>
<fieldset>
<label for="username">usernmae</label>
<input type="text" name="username" placeholder="type your username" value="<?php echo $row['username'];?>"><br><br>
<label for="password">password</label>
<input type="text" name="password" placeholder="type your password" value="<?php echo $row['password'];?>"><br><br>
<input type="submit" name="update" values ="update">
<?php
if(isset($_POST['update'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $update=mysqli_query($conn,"UPDATE login SET username='$username',password='$password' WHERE id='$id'"); 
if ($update){
header('location:./display.php');
}
else{
die($err=mysqli_error($conn));
}
}
else{
}
}
}
?>
</form> 
</body>
</html>
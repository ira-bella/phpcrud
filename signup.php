<?php
include("conn.php");
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $insert="INSERT INTO login values('','$username','$password')";
    $sql=mysqli_query($conn,$insert);
    if($sql==true){
        header("location:login.php");
    }
    echo'not inserted';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sty.css">
</head>
<body>
    
    <center>
        <form action=""method="POST">
        <h1>ADD USER</h1>
    <fieldset>
    <label for="username">usernmae</label>
    <input type="text" name="username" placeholder="type your username"><br><br>
    <label for="password">password</label>
    <input type="text" name="password" placeholder="type your password"><br><br>
    <input type="submit" name="submit" values ="submit">
    
    


    </fieldset>
    </center>
    </form> 
</body>
</html>
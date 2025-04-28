<?php
session_start();
$a='localhost';
$b='root';
$d='';
$c='coding';
if(!empty($_POST)){
$conn=mysqli_connect($a,$b,$d,$c);
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM login WHERE username='$username' AND password='$password'";
$query=mysqli_query($conn,$sql);
if($row=mysqli_fetch_assoc($query)){
    $_session['userID']=$row['id'];
    $_session['table']='login';
}
else{
    echo"<script>alert('invalid username and passward')</script>";
}
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
        <h1>LOGIN FORM</h1>
    <fieldset>
    <label for="username">usernmae</label>
    <input type="text" name="username" placeholder="type your username"><br><br>
    <label for="password">password</label>
    <input type="text" name="password" placeholder="type your password"><br><br>
    <input type="submit" name="submit" values ="submit">
    <a href="signup.php">signup</a>
    </fieldset>
    </center>
    </form> 
</body>
</html>
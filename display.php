<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1' table-collapse='collapse'>
    <tr>
        <th>id</th>
        <th>username</th>
        <th>password</th>
        <th>actions</th>
</tr>
<?php
include"conn.php";
$select=mysqli_query($conn,"SELECT * FROM login");
while($row=mysqli_fetch_array($select)){
    echo '
    <tr>
    <td>'.$row['id'].'</td>
    <td>'.$row['username'].'</td>
    <td>'.$row['password'].'</td>
    <td>
    <a href="delete.php?id='.$row['id'].'">delete</a>
    <a href="update.php?id='.$row['id'].'">update</a>
    </td>
    
    
    </tr>
    
    
    ';
    
    

}
  



?>
</table>
</body>
</html>
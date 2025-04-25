<?php
include 'conn.php';
$id=$_GET['id'];
$query="DELETE FROM login WHERE id='$id'";
$delete=mysqli_query($conn,$query);
if($delete){
    // echo "<script>alert('data deleted')</script>";
    header('location:display.php');
}
else{
    echo "<script>alert('failed to delete')</script>";
}


?>
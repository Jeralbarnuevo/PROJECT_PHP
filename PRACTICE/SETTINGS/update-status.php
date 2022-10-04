<?php
    session_start();
    include('../connection.php');
    $adminID=$_SESSION['Admin_ID'];
    $time=time()+10;
    $update="UPDATE admin set status=$time WHERE Admin_ID=$adminID";
    $run=mysqli_query($conn,$update);
?>

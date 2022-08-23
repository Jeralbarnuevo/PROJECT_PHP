<?php
    session_start();
    require("connection.php");
    if(isset($_POST['submit'])){
        $violationName=$_POST['ViolationName'];
        $Category=$_POST['Category'];
        $Punishment=$_POST['Punishment'];
        $duplicate=mysqli_query($conn, "SELECT*FROM vtion WHERE ViolationName='$violationName'");
        if(mysqli_num_rows($duplicate)>0){
            echo "<script>alert('Record Has Already Exist')</script>";
            header("location:realtime.php");
        }   
        else{
            $query="INSERT INTO vtion (ViolationName,Category,Punishment) VALUES('$violationName','$Category','$Punishment')";
            $run=mysqli_query($conn,$query);
            if($run){
                $last_id=mysqli_insert_id($conn);
                if($last_id){
                    $code=rand(1,999);
                    $violation_no="VIOLATION-" .$code. "" .$last_id;
                    $query1="UPDATE vtion SET ViolationNo='".$violation_no."' WHERE ViolationID='".$last_id."'";
                    $res=mysqli_query($conn,$query1);
                    $_SESSION['message']="Record has been saved!";
                    $_SESSION['msg_type']="success";
                    header("location:realtime.php");
                    
                }
                else{
                    echo "<script>alert('Failed')</script>";
                }

            }   
            else{
                echo "<script>alert('Try Again')</script>";
            }
        }   
    }
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $mysqli="DELETE FROM vtion WHERE ViolationID=$id";
        $run=mysqli_query($conn,$mysqli);
        $_SESSION['message']="Record has been deleted!";
        $_SESSION['msg_type']="danger";
        header("location:realtime.php");
    }
?>

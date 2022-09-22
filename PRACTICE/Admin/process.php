<?php
    session_start();
    require("../connection.php");
    $last_id=rand(0,9999);
    if($last_id==true){
        $id=str_replace("VIOLATION", "",$last_id);
        $id1=str_pad($id + 1, 4,0, STR_PAD_LEFT);
        $code='VIOLATION-' .$id1;
    }
    if(isset($_POST['submit'])){
        $ViolationNo=$_POST['ViolationNo'];
        $violationName=$_POST['ViolationName'];
        $Category=$_POST['Category'];
        $Punishment=$_POST['Punishment'];
        $duplicate=mysqli_query($conn, "SELECT*FROM violations WHERE ViolationName='$violationName'");
        if(mysqli_num_rows($duplicate)>0){
            $_SESSION['message']="Record has already saved";
            $_SESSION['msg_type']="warning";
            header("location:Admin-Violations.php");
        }   
        else{   
            $query="INSERT INTO violations (ViolationNo,ViolationName,Category,Punishment) VALUES('$ViolationNo','$violationName','$Category','$Punishment')";
            $run=mysqli_query($conn,$query);
                    $_SESSION['messages']="Record has been saved!";
                    $_SESSION['msg_type']="success";
                    header("location:Admin-Violations.php");
                    $last_id=rand(0,9999);
                    if($last_id==true){
                    $id=str_replace("VIOLATION", "",$last_id);
                    $id1=str_pad($id + 1, 4,0, STR_PAD_LEFT);
                    $code='VIOLATION-' .$id1;
                    }
            
                }   
                
            }        
            
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $mysqli="DELETE FROM violations WHERE ViolationID=$id";
        $run=mysqli_query($conn,$mysqli);
    if($run==true){
        $_SESSION['messages']="Record has been deleted!";
        $_SESSION['msg_type']="success";
        header("location:Admin-Violations.php");
    }
   }
       

    if(isset($_POST['update'])){
        $VtionID=$_POST['VtionID'];
        $VtionName=$_POST['VtionName'];
        $category=$_POST['category'];
        $punishment=$_POST['punishment'];
        $update="UPDATE violations SET ViolationName='$VtionName', Category='$category', Punishment='$punishment' WHERE ViolationID='$VtionID'";
        $test=mysqli_query($conn, $update); 
        if($test){
        $_SESSION['messages']="Record has been updated!";
        $_SESSION['msg_type']="success";
        header("location:Admin-Violations.php");
        }else{
            $_SESSION['messages']="Update Failed";
            $_SESSION['msg_type']="danger";
            header("location:Admin-Violations.php");
        }   
    }
?>


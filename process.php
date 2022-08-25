<?php
    session_start();
    require("connection.php");
    $query = "SELECT ViolationID from vtion order by ViolationID desc";
    $run = mysqli_query($conn, $query);
    $row=mysqli_fetch_array($run);
    $last_id=$row['ViolationID'];
    if(empty($last_id)){
        $code="VIOLATION-00001";
    }else{
        $id=str_replace("E", "",$last_id);
        $id1=str_pad($id + 1, 5,0, STR_PAD_LEFT);
        $number='VIOLATION-' .$id1;
    }
    if(isset($_POST['submit'])){
        $ViolationNo=$_POST['ViolationNo'];
        $violationName=$_POST['ViolationName'];
        $Category=$_POST['Category'];
        $Punishment=$_POST['Punishment'];
        $duplicate=mysqli_query($conn, "SELECT*FROM vtion WHERE ViolationName='$violationName'");
        if(mysqli_num_rows($duplicate)>0){
            $_SESSION['message']="Record has already saved";
            $_SESSION['msg_type']="warning";
            header("location:realtime.php");
        }   
        else{
            $query="INSERT INTO vtion (ViolationNo,ViolationName,Category,Punishment) VALUES('$ViolationNo','$violationName','$Category','$Punishment')";
            $run=mysqli_query($conn,$query);
                    $_SESSION['message']="Record has been saved!";
                    $_SESSION['msg_type']="success";
                    header("location:realtime.php");
                    if(mysqli_query($conn, $run)){
                        $query = "SELECT ViolationID from vtion order by ViolationID desc";
                        $run = mysqli_query($conn, $query);
                        $row=mysqli_fetch_array($run);
                        $last_id=$row['ViolationID'];
                        if(empty($last_id)){
                        $code="VIOLATION-00001";
                        }else{
                        $id=str_replace("E", "",$last_id);
                        $id1=str_pad($id + 1, 5,0, STR_PAD_LEFT);
                        $number='VIOLATION-' .$id1;
                        $_SESSION['message']="Record has been saved!";
                        $_SESSION['msg_type']="success";
                        header("location:realtime.php");
                        }
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


    if(isset($_POST['update'])){
        $VtionID=$_POST['VtionID'];
        $VtionName=$_POST['VtionName'];
        $category=$_POST['category'];
        $punishment=$_POST['punishment'];
        $update="UPDATE vtion SET ViolationName='$VtionName', Category='$category', Punishment='$punishment' WHERE ViolationID='$VtionID'";
        $test=mysqli_query($conn, $update); 
        if($test){
        $_SESSION['message']="Record has been updated!";
        $_SESSION['msg_type']="success";
        header("location:realtime.php");
        }else{
            $_SESSION['message']="Update Failed";
            $_SESSION['msg_type']="danger";
            header("location:realtime.php");
        }
    }
?>


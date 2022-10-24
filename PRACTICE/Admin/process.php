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
        $status="Active";
        $duplicate=mysqli_query($conn, "SELECT*FROM violations WHERE ViolationName='$violationName'");
        if(mysqli_num_rows($duplicate)>0){
            $_SESSION['messages']="Record has already exist!";
        $_SESSION['msg_type']="success";
            header("location:Admin-Violations.php");
        }   
        else{   
            $query="INSERT INTO violations (ViolationNo,ViolationName,Category,Punishment,Status) VALUES('$ViolationNo','$violationName','$Category','$Punishment','$status')";
            $run=mysqli_query($conn,$query);
            $_SESSION['messages']="Violation has been added";
            $_SESSION['msg_type']="success";
            header("location:Admin-Violations.php");
                   
                }   
                
            }        
    /*        
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $mysqli="DELETE FROM violations WHERE ViolationID=$id";
        $run=mysqli_query($conn,$mysqli);
    if($run==true){
        $_SESSION['messages']="Record has been deleted!";
        $_SESSION['msg_type']="success";
        header("location:Admin-Violations.php");
       
        
    }
   }*/

   // Inactive //
   if(isset($_GET['deactivate'])){
        $id=$_GET['deactivate'];
        $mysqli="UPDATE violations SET Status='Inactive' WHERE ViolationID=$id";
        $run=mysqli_query($conn,$mysqli);
    if($run==true){
        $_SESSION['messages']="Violation has been deactivate!";
        $_SESSION['msg_type']="success";
        header("location:Admin-Violations.php");
    }
    }

    // Active //
    if(isset($_GET['activate'])){
        $id=$_GET['activate'];
        $mysqli="UPDATE violations SET Status='Active' WHERE ViolationID=$id";
        $run=mysqli_query($conn,$mysqli);
    if($run==true){
        $_SESSION['messages']="Violation has been activate!";
        $_SESSION['msg_type']="success";
        header("location:Admin-Violations.php");
    }
    }
       
    // Update //
    if(isset($_POST['updates'])){
        $VtionID=$_POST['vid'];
        $VtionName=$_POST['vname'];
        $category=$_POST['categ'];
        $punishment=$_POST['punish'];
        $updated="UPDATE violations SET ViolationName='$VtionName', Category='$category', Punishment='$punishment' WHERE ViolationID=$VtionID";
        $test1=mysqli_query($conn,$updated); 
        if($test1==true){
        $_SESSION['messages']="Violation has been update!";
        $_SESSION['msg_type']="success";
        
        
        }else{
            $_SESSION['messages']="update failed!";
            $_SESSION['msg_type']="danger";
            
            
        }
    }


    
            
?>


<?php
    
    require('../connection.php');
    session_start();
    if(isset($_POST['register'])){
        $Firstname=$_POST['FirstName'];
        $Lastname=$_POST['LastName'];
        $Gender=$_POST['Gender'];
        $Age=$_POST['Age'];
        $Contacts=$_POST['Contact#'];
        $Address=$_POST['Address'];
        $Birthdate=$_POST['Birthday'];
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
        $Confirm_Password=$_POST['Confirm-Password'];  
        $double=mysqli_query($conn, "SELECT*FROM homeowners WHERE Email='$Email'");
        if(mysqli_num_rows($double)>0){
            $_SESSION['message']="Records Has Already Exist";
            $_SESSION['msg_type']="warning";
            header("location:Register.php");
        }
        $doubleN=mysqli_query($conn, "SELECT*FROM homeowners WHERE First_Name='$Firstname'");
        if(mysqli_num_rows($doubleN)>0){
            $_SESSION['message']="Records Has Already Exist";
            $_SESSION['msg_type']="warning";
            header("location:Register.php");
        }else{
            if($Password==$Confirm_Password){
                $Encrypt=password_hash($Password, PASSWORD_DEFAULT);
                $EncryptConfirm=password_hash($Confirm_Password, PASSWORD_DEFAULT);
                $query="INSERT INTO homeowners (First_Name,Last_Name,Gender,Age,ContactNo,Address,Birthdate,Email,Password,Confirm_Password) 
                VALUES ('$Firstname','$Lastname','$Gender','$Age','$Contacts','$Address','$Birthdate','$Email','$Encrypt','$EncryptConfirm')";
                $run=mysqli_query($conn, $query);
                $_SESSION['message']="Registration Sucessful";
                $_SESSION['msg_type']="success";
                header("location:Register.php");
            }
            else{
                $_SESSION['message']="Please Match the Password";
                $_SESSION['msg_type']="danger";
                header("location:Register.php");
            }
      } 
    }
 ?>
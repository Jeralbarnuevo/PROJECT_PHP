<?php
    
    require('../connection.php');
    session_start();
    //
    /*if(isset($_POST['register'])){
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
    */
    // VALIDATION //
    $error="";$errorLastName="";$errorGender="";$errorAge="";$errorContact="";$errorAddress="";$errorBirthday="";
    $errorEmail="";$errorPass="";$errorConfirm="";

    $Firstname="";$Lastname="";$Gender="";$Age="";$Contacts="";$Address="";$Birthday="";$Email="";$Password="";$Confirm_Password="";
    if(isset($_POST['register'])){      
        if(empty($_POST['FirstName'])){
            $error="Firstname is required!";
        }else{
            $Firstname=$_POST['FirstName'];
            if(!preg_match("/^[a-zA-z]*$/", $Firstname)){
                $error="Only Letters are allowed*";
            }
            
        }if(empty($_POST['LastName'])){
            $errorLastName="Lastname is required*";
        }else{
            $Lastname=$_POST['LastName'];
            if(!preg_match("/^[a-zA-z]*$/", $Lastname)){
                $errorLastName="Only Letters are allowed*";
            }
        }if(empty($_POST['Gender'])){
            $errorGender="Please Fill the blank!*";
        }else{
            $Gender=$_POST['Gender'];
        }if(empty($_POST['Age'])){
            $errorAge="Please Fill the blank!*";
        }else{
            $Age=$_POST['Age'];
        }if(empty($_POST['Contact#'])){
            $errorContact="Please Fill the blank!*";
        }else{
            $Contacts=$_POST['Contact#'];
             if(!preg_match("/^[0-9]*$/", $Contacts)){
                $errorContact="Only numbers are allowed*";
            }
        }if(empty($_POST['Address'])){
            $errorAddress="Please Fill the blank!*";
        }else{
            $Address=$_POST['Address'];
        }if(empty($_POST['Birthday'])){
            $errorBirthday="Please Fill the blank!*";
        }else{
            $Birthday=$_POST['Birthday'];
        }if(empty($_POST['Email'])){
            $errorEmail="Email is Required*";
        }else{
            $Email=$_POST['Email'];
            if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {  
                $errorEmail = "Invalid email format*";  
            }  
        }if(empty($_POST['Password'])){
            $errorPass="Password is required*";
        }else{
            $Password=$_POST['Password'];
            if(strlen($Password)<=12){
                $errorPass="Password Maximum 12*";
            }
        }if(empty($_POST['Confirm_Password'])){
            $errorConfirm="Confirm Password is Required*";
        }else{
            $Confirm_Password=$_POST['Confirm_Password'];
        }
        }
        if($_POST['register']){
        $double=mysqli_query($conn, "SELECT*FROM homeowners WHERE Email='$Email'");
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
        }
    }

 ?>
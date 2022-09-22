<?php
 session_start();
 if($_SESSION['Homeowners_ID']){
 unset($_SESSION['Homeowners_ID']);
 unset($_SESSION['Email']);
 header("location:../Accounts/Homeowners/Homeowner.php");
 die();
 }

 if($_SESSION['Admin_ID']){
 unset($_SESSION['Admin_ID']);
 unset($_SESSION['Email']);
 header("location:../Accounts/Admin/Admin.php");
 }
?>
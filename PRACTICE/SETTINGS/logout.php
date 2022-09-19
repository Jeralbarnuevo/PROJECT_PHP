<?php
 session_start();
 unset($_SESSION['Homeowners_ID']);
 unset($_SESSION['Email']);
 header("location:../Accounts/Homeowners/Homeowner.php");
 die();
?>
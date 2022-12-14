<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="icon" href="../../Assets/logo1.png">
    <script type="text/javascript">window.history.forward();</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Admin Login</title>
</head>
<body>
<?php
      session_start(); 
      require('../../connection.php');
      if(isset($_SESSION['Admin_ID'])){
        header('location: ../../Admin/Admin-Dashboard.php');
        die();
    } 
      if(isset($_POST["login"])){
          $Email=$_POST["Email"];
          $Password=$_POST["Password"];
          $Email = strip_tags(mysqli_real_escape_string($conn, trim($Email)));
          $Password = strip_tags(mysqli_real_escape_string($conn, trim($Password)));
          $result=mysqli_query($conn,"SELECT*FROM admin WHERE Email='$Email'");
          $row=mysqli_fetch_assoc($result);
          if(mysqli_num_rows($result)>0){
            $Encrypt=$row['Password'];
            $verify=$row['Verified'];
            if($verify!=1){
                echo"<script>alert('Verify Your Email Account')</script>";  
            }else{
              if (password_verify($Password,$Encrypt)){
                  $_SESSION["login"]=true;
                  $_SESSION["Admin_ID"]=$row["Admin_ID"];
                  $_SESSION['Email']=$row['Email'];
                  $admin=$_SESSION['Admin_ID'];
                  $time=time()+10;
                  $online="UPDATE admin SET status='$time' WHERE Admin_ID=".$_SESSION['Admin_ID'];
                  $sql=mysqli_query($conn,$online);
                  header("location: ../../Admin/Admin-Dashboard.php");
                  die();
              }
              else{
                  echo "<script> alert('Incorrect password please try again');</script>";
              }
            }
      
          }
          else{
              echo "<script> alert('Username Not Registered');</script>";
          }
      }

     
     ?>
    <div class="main">
        <div class="container">
            <div class="logo">
                <img src="../../Assets/logo.jpg" alt="">
                <div class="text"><h3>Complaint and Violation<br>Tracker System</h3></div>
            </div>
            <div class="register">
                <h1>Admin</h1>
                <form action="" method="POST" class="mt-3">
                    <div class="col-md-12 mb-2 box1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16"><path fill="#ffffff" d="M11.5,8 C12.3284271,8 13,8.67157288 13,9.5 L13,10 C13,11.9714437 11.14049,14 8,14 C4.85950997,14 3,11.9714437 3,10 L3,9.5 C3,8.67157288 3.67157288,8 4.5,8 L11.5,8 Z M8,1.5 C9.51878306,1.5 10.75,2.73121694 10.75,4.25 C10.75,5.76878306 9.51878306,7 8,7 C6.48121694,7 5.25,5.76878306 5.25,4.25 C5.25,2.73121694 6.48121694,1.5 8,1.5 Z"/></svg>
                        <input type="email" name="Email" class="form-control" autocomplete="0" placeholder="Enter Your Email" required>
                      </div>
                      <div class="col-md-12 mb-2 box1">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" width="20" height="20" viewBox="0 0 24 24"><path fill="#ffffff" d="M17,9V7c0-2.8-2.2-5-5-5S7,4.2,7,7v2c-1.7,0-3,1.3-3,3v7c0,1.7,1.3,3,3,3h10c1.7,0,3-1.3,3-3v-7C20,10.3,18.7,9,17,9z M9,7
                            c0-1.7,1.3-3,3-3s3,1.3,3,3v2H9V7z M13.1,15.5c0,0-0.1,0.1-0.1,0.1V17c0,0.6-0.4,1-1,1s-1-0.4-1-1v-1.4c-0.6-0.6-0.7-1.5-0.1-2.1
                            c0.6-0.6,1.5-0.7,2.1-0.1C13.6,13.9,13.7,14.9,13.1,15.5z"/></svg>
                        <input type="password" name="Password" class="form-control" autocomplete="0" placeholder="Enter Your Password" required>
                      </div>
                      
                      <div class="col-lg-12 mt-4 button box1">
                        <button type="submit" name="login" class="btn btn-success">Login</button>
                      </div>
                      <div class="col-lg-12 mt-2 forgot">
                        <p><a href="../../Account-Menu/Account-Menu.php">Do you want to back to login menu?</a></p>
                        <p><a href="../../OTP/OTP_ADMIN/verify.php">Verify Your Account</a></p>
                        <p><a href="../../OTP/OTP_ADMIN/resetadmin.php">Forgot your password?</a></p>
                      </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
      }
    </script>
</body>
</html>


<?php 
    session_start();
    require('../connection.php');
    $errorPass="";$errorConfirm="";
    $Password="";$Confirm_Password="";
    if(isset($_POST['reset'])){
        if(empty($_POST['old_pass'])){
            $errorOLD="Old Password is Required*";
        }else{
            $OldPass=$_POST['old_pass'];
        }
        if(empty($_POST['Password'])){
            $errorPass="New Password is required*";
        }else{
            $Password=$_POST['Password'];
            if(strlen($Password)<=12){  
                $errorPass="Your Password Must Contain At Least 12 Characters!*";
            }
            
        }if(empty($_POST['confirm_password'])){
            $errorConfirm="Confirm Password is Required*";
        }else{
            $Confirm_Password=$_POST['confirm_password'];
        }
        if($Password==$Confirm_Password){
        $otp = $_SESSION['VerificationCode'];
        $Email = $_SESSION['mail'];
        $res_code = $_POST['code'];

        if($otp != $res_code){
            ?>
           <script>
               alert("Invalid Reset Password code");
           </script>
           <?php
        }else{
            $Encrypt=password_hash($Password, PASSWORD_DEFAULT);
            mysqli_query($conn, "UPDATE homeowners SET Password='$Encrypt' WHERE Email = '$Email'");
            ?>
             <script>
                 alert("Your Password is Reset done, you may sign in now");
                   window.location.replace("../Accounts/Homeowners/Homeowner.php");
             </script>
             <?php
        }
        }else{
            ?>
            <script>
            alert("Error Reset Password Code invalid");
            </script>
            <?php
        }
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Verify</title>
</head>
<body>
    <style>
        *{
            margin:0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: var(--side);
        }
        :root{
            --side:#191919;
            --top:#ffffff;
            --body:#ffffff;
            --font-text:#000000;
            --main-color:#59CE8F;
            --secondary:#319052;
            --hover:#65C18C;
            }
        
        .main{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100vh;
            padding:1rem;
        }
        .main>.container1{
            border:1px solid black;
            width: 100%;
            max-width: 500px;
            background-color: var(--body);
            border-radius:1rem;
        }
        .main>.container1>h1{
            text-align: center;
            padding: 1rem;
            background-color:var(--secondary) ;
            color:White;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
        }
        .main>.container1>form{
            padding:1rem;
        }
        .main>.container1>form>.button{
            display: flex;
            justify-content: flex-end;
            gap:.5rem;
        }
    </style>
    
    <div class="main">
        <div class="container1">
            <h1>Reset Your Password</h1>
            <form action="" method="POST">
                  <div class="mb-3">
                    <p><?php echo $_SESSION['mail'] ?></p>
                    <label for="exampleFormControlInput1" class="form-label">New Password</label>
                    <input type="text" class="form-control" name="Password" id="exampleFormControlInput1" placeholder="">
                    <div class="error" style="color:red;"><p style="margin:0;"><?php echo $errorPass ?></p></div>
                </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                    <input type="text" class="form-control" name="confirm_password" id="exampleFormControlInput1" placeholder="">
                    <div class="error" style="color:red;"><p style="margin:0;"><?php echo $errorConfirm ?></p></div>
                </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Enter Your Reset Password Code</label>
                    <input type="text" class="form-control" name="code" id="exampleFormControlInput1" placeholder="">
                  </div>
                <div class="button mb-3">
                    <a href="../Accounts/Homeowners/Homeowner.php"><button class="btn btn-dark">Cancel</button></a>
                    <button class="btn btn-success" type="submit" name="reset">Confirm</button>
                </div>
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

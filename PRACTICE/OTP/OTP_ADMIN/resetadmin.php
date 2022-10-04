<?php
    session_start();
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
                    <h4>STEP 1</h4>
                    <label for="exampleFormControlInput1" class="form-label">Enter Your Current Email</label>
                    <input type="Email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="" required>
                  </div>
                <div class="button mb-3">
                    <a href="../../Accounts/Admin/Admin.php"><button class="btn btn-dark" type="button">Cancel</button></a>
                    <button class="btn btn-success" type="submit" name="Send">Send</button>
                </div>
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php 
    require('../../connection.php');
    if(isset($_POST['Send'])){
        $email = $_POST['email'];
        $otp=rand(100000,999999); 
        $_SESSION['VerificationCode']=$otp; 
        $_SESSION['mail']=$email;
        require("../../phpmailer/PHPMailerAutoload.php");
        $mail = new PHPMailer;

        $mail->isSMTP();
        $mail->Host='smtp.hostinger.com';  
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';

        $mail->Username='stceciliahoaviolationcomplaint@stceciliahoa.online'; 
        $mail->Password='Capstone_101822';

        $mail->setFrom('stceciliahoaviolationcomplaint@stceciliahoa.online', 'ST-CECILIA-HOA'); 
        $mail->addAddress($_POST['email']);

        $mail->isHTML(true);
        $mail->Subject="Your Reset Password";
        $mail->Body="<p>Dear $email , </p> <h3>Your Reset Password Code is $otp <br></h3> 
        <br><br>
        <p>With regards,</p>
        <b>ST CECILIA HOA</b>";
    

        if(!$mail->send()){
            ?>
                <script>
                    alert("<?php echo "Register Failed, Invalid Email "?>");
                </script>
            <?php
        }else{
            $query="UPDATE admin SET VerificationCode='$otp' WHERE Email='$email'";
            $run=mysqli_query($conn, $query);
            ?>
            <script>
                alert("<?php echo "Password Reset Code sent to " . $email ?>");
                window.location.replace('resetcoders.php');
            </script>
            <?php
        }


    }

?>
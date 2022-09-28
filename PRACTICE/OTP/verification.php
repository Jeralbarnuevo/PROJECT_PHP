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
            <h1>Verification Code</h1>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Enter Your OTP Verifcation Code</label>
                    <input type="text" class="form-control" name="otp-code" id="exampleFormControlInput1" placeholder="">
                  </div>
                <div class="button mb-3">
                    <button class="btn btn-dark">Cancel</button>
                    <button class="btn btn-success" type="submit" name="verify">Verify</button>
                </div>
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php 
    require('../connection.php');
    if(isset($_POST['verify'])){
        $otp = $_SESSION['VerificationCode'];
        $Email = $_SESSION['mail'];
        $otp_code = $_POST['otp-code'];

        if($otp != $otp_code){
            ?>
           <script>
               alert("Invalid OTP code");
           </script>
           <?php
        }else{
            mysqli_query($conn, "UPDATE homeowners SET verified = 1 WHERE Email = '$Email'");
            ?>
             <script>
                 alert("Verfiy account done, you may sign in now");
                   window.location.replace("../Accounts/Homeowners/Homeowner.php");
             </script>
             <?php
        }

    }

?>
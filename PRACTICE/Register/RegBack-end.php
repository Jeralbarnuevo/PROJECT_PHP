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
    $errorEmail="";$errorPass="";$errorConfirm="";$errorFile="";

    $Firstname="";$Lastname="";$Gender="";$Age="";$Contacts="";$Address="";$Birthday="";$Email="";$Password="";$Confirm_Password="";$Image="";
    if(isset($_POST['register'])){      
        if(empty($_POST['FirstName'])){
            $error="Firstname is required!";
        }else{
            $Firstname=$_POST['FirstName'];
            if(!preg_match("/^[a-zA-Z].*[\s\.]*$/", $Firstname)){
                $error="Only Letters are allowed*";
            }
            
        }if(empty($_POST['LastName'])){
            $errorLastName="Lastname is required*";
        }else{
            $Lastname=$_POST['LastName'];
            if(!preg_match("/^[a-zA-Z].*[\s\.]*$/", $Lastname)){
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
                $errorPass="Your Password Must Contain At Least 12 Characters!*";
            }
            
        }if(empty($_POST['Confirm_Password'])){
            $errorConfirm="Confirm Password is Required*";
        }else{
            $Confirm_Password=$_POST['Confirm_Password'];
        }if(empty($_FILES['profile-pic'])){
            $errorFile="Your Image is Required*";
        }else{
            $Image=$_FILES['profile-pic']['name'];
            $folder ='imgs/' . $Image;
            move_uploaded_file($_FILES['profile-pic']['tmp_name'], $folder);
   
        }
        
        }else{
            $_SESSION['message']="Remember! Fill out the form correctly to register ";
            $_SESSION['msg_status']="info";
        }
        
        if($error||$errorLastName||$errorGender||$errorAge||$errorContact||$errorAddress||$errorBirthday||
        $errorEmail||$errorPass||$errorConfirm||$errorFile){
            $_SESSION['message']="Fill out the forms to register";
            $_SESSION['msg_status']="error";
        }else if($Firstname||$Lastname||$Gender||$Age||$Contacts||$Address||$Birthday||$Email||$Password||$Confirm_Password||$Image){
            $doubleN=mysqli_query($conn, "SELECT*FROM homeowners WHERE First_Name='$Firstname'");
            if(mysqli_num_rows($doubleN)>0){
                $_SESSION['message']="Records Has Already Exist";
                $_SESSION['msg_status']="warning";        
        }else{
            if($Password!=$Confirm_Password){
                echo "<script>alert('Your Password Not Match')</script>";
            }
            
                else{
                    $Email=$_POST['Email'];
                    $otp=rand(100000,999999); // RANDOM PARA DAMA
                    $_SESSION['VerificationCode']=$otp; // OTP PARA SA MAMA MO
                    $_SESSION['mail']=$Email;
                    require("../phpmailer/PHPMailerAutoload.php");
                    $mail = new PHPMailer;
    
                    $mail->isSMTP();
                    $mail->Host='smtp.hostinger.com';  //HOSTING NATIN MGA MAHAL
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    
                    $mail->Username='stceciliahoaviolationcomplaint@stceciliahoa.online'; // EMAIL NA GAGAMITIN PARA IPANG SEND SA MGA KUPAL
                    $mail->Password='Capstone_101822';
    
                    $mail->setFrom('stceciliahoaviolationcomplaint@stceciliahoa.online', 'ST-CECILIA-HOA'); //EMAIL NATIN SAKA TITLE
                    $mail->addAddress($_POST['Email']);
    
                    $mail->isHTML(true);
                    $mail->Subject="Your OTP Verification Code";
                    $mail->Body="<p>Dear $Email , </p> <h3>Your verify OTP code is $otp <br></h3> 
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
                        $last_id=rand(0,9999);
                        $id=str_replace("ST-CE-HOA", "",$last_id);
                        $id1=str_pad($id + 1, 4,0, STR_PAD_LEFT);
                        $code="ST-CE-HOA" .$id1;
                        $Encrypt=password_hash($Password, PASSWORD_DEFAULT);
                        $EncryptConfirm=password_hash($Confirm_Password, PASSWORD_DEFAULT);
                        $query="INSERT INTO homeowners (Account_Number,First_Name,Last_Name,Gender,Age,ContactNo,Address,Birthdate,Email,Image,Password,Confirm_Password,VerificationCode,Verified) 
                        VALUES ('$code','$Firstname','$Lastname','$Gender','$Age','$Contacts','$Address','$Birthday','$Email','$Image','$Encrypt','$EncryptConfirm','$otp',0)";
                        $run=mysqli_query($conn, $query);
                        ?>
                        <script>
                            alert("<?php echo "Register Successfully, OTP sent to " . $Email ?>");
                            window.location.replace('../OTP/verification.php');
                        </script>
                        <?php
                    }
    
                }
                
            }
        }
      
    

  

 ?>
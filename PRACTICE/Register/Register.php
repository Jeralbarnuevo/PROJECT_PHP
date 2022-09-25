<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="icon" href="../Assets/logo1.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Register</title>
</head>
<body>
<?php
      require("RegBack-end.php");
      ?>

    <div class="main">
    <?php 
    if(isset($_SESSION['message'])&& $_SESSION['msg_status'] !=''){
      ?>
      <script>
        swal({
            title: "<?php echo $_SESSION['message']; ?>",
            icon: "<?php echo $_SESSION['msg_status']; ?>",
            button: "Ok",
            });
      </script>
      <?php
      unset($_SESSION['status']);
    }
    ?>
        <div class="container">
            <div class="logo">
                <img src="../Assets/logo.jpg" alt="">
                <div class="text"><h3>Complaint and Violation<br>Tracker System</h3></div>
            </div>
            <div class="register">
                <h1>Register</h1>
                <form action=""  method="POST" enctype="multipart/form-data">
                    <div class="col-md-12 mb-2 box1">
                        <input type="text" class="form-control" id="validationTooltip01" name="FirstName" autocomplete="0" placeholder="First Name">
                        <div class="error"><p style="margin:0;"><?php echo $error ?></p></div>
                      </div>
                      <div class="col-md-12 mb-2 box1">
                        <input type="text" class="form-control is valid" name="LastName" autocomplete="0" placeholder="Last Name" >
                        <div class="error"><p style="margin:0;"><?php echo $errorLastName ?></p></div>
                      </div>
                      
                      <div class="col-sm-4 mb-2 box1">
                        <select class="form-select" name="Gender" id="select" value="Gender" style="border:2px solid #319052;">
                            <option style="color:gray;" value="" disabled selected hidden>Gender--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <div class="error"><p style="margin:0;"><?php echo $errorGender ?></p></div>
                        
                      </div>
                      <div class="col-sm-3 mb-2 box1">
                        <input type="number" class="form-control" name="Age" autocomplete="0" placeholder="Age" >
                        <div class="error"><p style="margin:0;"><?php echo $errorAge ?></p></div>
                      </div>
                      <div class="col-md-5 mb-2 box1">
                        <input type="text" class="form-control" name="Contact#" autocomplete="0" placeholder="Contact No.">
                        <div class="error"><p style="margin:0;"><?php echo $errorContact ?></p></div>
                      </div>
                      <div class="col-lg-12 mb-2  box1">
                        <input type="text" class="form-control" name="Address" autocomplete="0" placeholder="Address">
                        <div class="error"><p style="margin:0;"><?php echo $errorAddress ?></p></div>
                      </div>
                      <div class="col-lg-12 mb-2  box1">
                        <input type="text" id="date" class="form-control" name="Birthday" autocomplete="0" placeholder="Date of Birth" onfocus="(this.type='date')" onblur="(this.type='text')">
                        <div class="error"><p style="margin:0;"><?php echo $errorBirthday ?></p></div>
                      </div>
                      <div class="col-lg-12 mb-2  box1">
                        <input type="email" class="form-control" name="Email" autocomplete="0" placeholder="Email">
                        <div class="error"><p style="margin:0;"><?php echo $errorEmail ?></p></div>
                      </div>
                      <div class="col-lg-12 mb-2  box1">
                        <input type="password" class="form-control" name="Password" autocomplete="0" placeholder="Password">
                        <div class="error"><p style="margin:0;"><?php echo $errorPass ?></p></div>
                      </div>
                      <div class="col-lg-12 mb-2 box1">
                        <input type="password" class="form-control" name="Confirm_Password" autocomplete="0" placeholder="Confirm Password" >
                        <div class="error"><p style="margin:0;"><?php echo $errorConfirm ?></p></div>
                      </div>
                      <div class="col-lg-12 mb-2  box1">
                        <label for="profile-pic" class="form-label">Upload Your Image</label>
                        <input class="form-control" name="profile-pic" id="profile-pic" accept=".jpg, .jpeg, .png"  type="file">
                        <div class="error"><p style="margin:0;"><?php echo $errorFile ?></p></div>
                      </div>
                      <div class="col-lg-12 button box1">
                        <a href="../Account-Menu/Account-Menu.php" class="btn btn-dark">Back to login</a>
                        <button type="submit" name="register" class="btn btn-success">Register</button>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>
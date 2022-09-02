<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Register</title>
</head>
<body>
<?php
  require("RegBack-end.php");
?>
    <div class="main">
    <?php
    if(isset($_SESSION['message'])):
    ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?> alert-dismissible fade show" style="width:100%; max-width:700px;">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
         ?>
    </div>
    <?php endif ?>
        <div class="container">
            <div class="logo">
                <img src="../Assets/logo.jpg" alt="">
                <div class="text"><h3>Complaint and Violation<br>Tracker System</h3></div>
            </div>
            <div class="register">
                <h1>Register</h1>
                <form action="RegBack-end.php" method="POST" class="need-validate">
                    <div class="col-md-12 mb-2 box1">
                        <input type="text" class="form-control" name="FirstName" autocomplete="0" placeholder="First Name" required >
                        
                      </div>
                      <div class="col-md-12 mb-2 box1">
                        <input type="text" class="form-control is valid" name="LastName" autocomplete="0" placeholder="Last Name" required >
              
                      </div>
                      <div class="col-sm-4 mb-2 box1">
                        <select class="form-select" name="Gender" id="select" value="Gender" style="border:2px solid #319052;" required>
                            <option selected style="color: gray;">Gender--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        
                      </div>
                      <div class="col-sm-3 mb-2 box1">
                        <input type="number" class="form-control" name="Age" autocomplete="0" placeholder="Age" required >
                        
                      </div>
                      <div class="col-md-5 mb-2 box1">
                        <input type="text" class="form-control" name="Contact#" autocomplete="0" placeholder="Contact No." required >
                       
                      </div>
                      <div class="col-lg-12 mb-2 box1">
                        <input type="text" class="form-control" name="Address" autocomplete="0" placeholder="Address" required >
                        
                      </div>
                      <div class="col-lg-12 mb-2 box1">
                        <input type="text" id="date" class="form-control" name="Birthday" autocomplete="0" placeholder="Date of Birth" onfocus="(this.type='date')" onblur="(this.type='text')" required >
                        
                      </div>
                      <div class="col-lg-12 mb-2 box1">
                        <input type="email" class="form-control" name="Email" autocomplete="0" placeholder="Email" required  >
                        
                      </div>
                      <div class="col-lg-12 mb-2 box1">
                        <input type="password" class="form-control" name="Password" autocomplete="0" placeholder="Password"  required>
                        
                      </div>
                      <div class="col-lg-12 mb-2 box1">
                        <input type="password" class="form-control" name="Confirm-Password" autocomplete="0" placeholder="Confirm Password" required >
                        
                      </div>
                      <div class="col-lg-12 button box1">
                        <a href="/PRACTICE/Account-Menu/Account-Menu.html" class="btn btn-dark">Back to login</a>
                        <button type="submit" name="register" class="btn btn-success">Register</button>
                      </div>
                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>
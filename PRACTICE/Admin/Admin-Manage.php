<?php
    require("process.php");
    if(!isset($_SESSION['Admin_ID'])){
        header('location: ../Accounts/Admin/Admin.php');
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="icon" href="../Assets/logo1.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="realtime.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="Admin-Complaint.css">

    <!-------------------------------------DATA-TABLE-CDN-------------------------------------------->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.css"/>
 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#Mytable').DataTable();
        } );
    </script>
    <title>Admin Manage Account</title>
</head>
<body>
    <style>
        .online{
                color:green;
        }
        .offline{
            color:red;
        }
    </style>
<?php
    
    if(!isset($_SESSION['Admin_ID'])){
        header('location: ../Accounts/Admin/Admin.php');
        die();
    }
    if(!empty($_SESSION['Admin_ID'])){
        $AdminID=$_SESSION['Admin_ID'];
        $result=mysqli_query($conn, "SELECT*FROM admin WHERE Admin_ID='$AdminID'");
        $row=mysqli_fetch_assoc($result);

    }
?>
    <div class="main">
    <div class="side">
        <div class="logo">
            <img src="../Assets/logo.jpg" alt="" width="90px">
            <h2>St. Cecillia Homeowners Association</h2>
        </div>
        <div class="button">
            <ul class="side-button">
                <a href="Admin-Dashboard.php"><button class="buttn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1792" height="1792" viewBox="0 0 1600 2000"><path d="M1472 992v480q0 26-19 45t-45 19h-384v-384H768v384H384q-26 0-45-19t-19-45V992q0-1 .5-3t.5-3l575-474 575 474q1 2 1 6zm223-69-62 74q-8 9-21 11h-3q-13 0-21-7L896 424l-692 577q-12 8-24 7-13-2-21-11l-62-74q-8-10-7-23.5t11-21.5l719-599q32-26 76-26t76 26l244 204V288q0-14 9-23t23-9h192q14 0 23 9t9 23v408l219 182q10 8 11 21.5t-7 23.5z"/></svg><p>Home</p>
                </button></a>
                <a href="Admin-Violations.php"><button class="buttn">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 32 32" viewBox="0 0 32 32"><path d="M31.10741,26.15234L19.3037,2.54395c-0.62988-1.25879-1.89551-2.04102-3.30371-2.04102c-1.40771,0-2.67334,0.78223-3.30322,2.04102h-0.00049L0.89257,26.15234c-0.57666,1.15332-0.51611,2.49609,0.16162,3.59277c0.67822,1.09668,1.85254,1.75195,3.14209,1.75195H27.8037c1.29004,0,2.46484-0.65527,3.14258-1.75195S31.68359,27.30469,31.10741,26.15234z M28.39355,28.16797c-0.0752,0.12305-0.25293,0.3291-0.58984,0.3291H4.19628c-0.33643,0-0.51416-0.20605-0.58984-0.3291c-0.07617-0.12207-0.18066-0.37305-0.03027-0.67383l11.80371-23.6084c0.17285-0.3457,0.49121-0.38281,0.62012-0.38281c0.12891,0,0.44726,0.03711,0.62012,0.38281l11.80371,23.6084C28.57421,27.79492,28.46972,28.0459,28.39355,28.16797z"/><path d="M15.99999 8.95508c-.82861 0-1.5.67188-1.5 1.5v9.53613c0 .82813.67139 1.5 1.5 1.5.82861 0 1.5-.67188 1.5-1.5v-9.53613C17.49999 9.62695 16.82861 8.95508 15.99999 8.95508zM15.99999 22.86621c-.82861 0-1.5.67188-1.5 1.5v1.08887c0 .82813.67139 1.5 1.5 1.5.82861 0 1.5-.67188 1.5-1.5v-1.08887C17.49999 23.53809 16.82861 22.86621 15.99999 22.86621z"/></svg><p>Violations</p>
                </button></a>
                <button type="button" class="buttn buttn-primary dropdown-toggle" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path d="M50 12c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38zm0 72c-18.8 0-34-15.2-34-34s15.2-34 34-34 34 15.2 34 34-15.2 34-34 34zm19.5-34c0 1.1-.9 2-2 2H45.1c-1.1 0-2-.9-2-2s.9-2 2-2h22.4c1.1 0 2 .9 2 2zm0 12c0 1.1-.9 2-2 2H45.1c-1.1 0-2-.9-2-2s.9-2 2-2h22.4c1.1 0 2 .9 2 2zM38.3 50c0 1.1-.9 2-2 2h-3.8c-1.1 0-2-.9-2-2s.9-2 2-2h3.8c1.1 0 2 .9 2 2zm0 12c0 1.1-.9 2-2 2h-3.8c-1.1 0-2-.9-2-2s.9-2 2-2h3.8c1.1 0 2 .9 2 2zm31.2-24c0 1.1-.9 2-2 2H45.1c-1.1 0-2-.9-2-2s.9-2 2-2h22.4c1.1 0 2 .9 2 2zm-31.2 0c0 1.1-.9 2-2 2h-3.8c-1.1 0-2-.9-2-2s.9-2 2-2h3.8c1.1 0 2 .9 2 2z"/><path fill="#00F" d="M244-1210V474h-1784v-1684H244m8-8h-1800V482H252v-1700z"/></svg><p>Complaints</p></a>
                </button>
                <ul class="drop">
                    <li><a class="dropdown-item" href="Admin-Complaint.php">Pending Complaints</a></li>
                    <li><a class="dropdown-item" href="Closed-Complaint.php">Closed Complaints</a></li>
                    <li><a class="dropdown-item" href="Forward-Complaint.php">Forward Complaints</a></li>
                </ul>
                <button type="button" class="buttn buttn-primary dropdown-toggle" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14.81,12.28a3.73,3.73,0,0,0,1-2.5,3.78,3.78,0,0,0-7.56,0,3.73,3.73,0,0,0,1,2.5A5.94,5.94,0,0,0,6,16.89a1,1,0,0,0,2,.22,4,4,0,0,1,7.94,0A1,1,0,0,0,17,18h.11a1,1,0,0,0,.88-1.1A5.94,5.94,0,0,0,14.81,12.28ZM12,11.56a1.78,1.78,0,1,1,1.78-1.78A1.78,1.78,0,0,1,12,11.56ZM19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg><p>Accounts</p>
                </button>
                <ul class="drop">
                    <li><a class="dropdown-item" href="Admin-Homeowners.php">Homeowners</a></li>
                    <li><a class="dropdown-item" href="Admin-Manage.php">Admin</a></li>
                </ul>
                <a href="Violation-Entry.php"><button class="buttn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,6a1,1,0,0,0-1,1V17a3,3,0,0,1-3,3H7a1,1,0,0,0,0,2H17a5,5,0,0,0,5-5V7A1,1,0,0,0,21,6Zm-3,9V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H15A3,3,0,0,0,18,15ZM10,4h2V8.86l-.36-.3a1,1,0,0,0-1.28,0l-.36.3ZM4,15V5A1,1,0,0,1,5,4H8v7a1,1,0,0,0,1.65.76L11,10.63l1.35,1.13A1,1,0,0,0,13,12a1.06,1.06,0,0,0,.42-.09A1,1,0,0,0,14,11V4h1a1,1,0,0,1,1,1V15a1,1,0,0,1-1,1H5A1,1,0,0,1,4,15Z"/></svg><p>Violations Entry</p>
                </button></a>
                <a href="Admin-Records.php"><button class="buttn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="#fffff" d="M4 9h4v2H4V9z"/><path fill="#fffff" d="M16 2h-1V0H5v2H3v1.25L2.4 4H1v1.75L0 7v9h12l4-5V2zM2 5h8v2H2V5zm9 10H1V8h10v7zm1-8h-1V4H4V3h8v4zm2-2.5l-1 1.25V2H6V1h8v3.5z"/></svg><p>Records</p>
                </button></a>
            </ul>
        </div>
    </div>
    <div class="top">
        <div class="burger">
            <p>Manage Accounts</p>
        </div>
        <div class="profile">
            <div class="welcome"><p>Welcome, <?php echo $row['FirstName'], "&nbsp;&nbsp;",$row['LastName']; ?></p></div>
        <div class="image" onclick="Dropmenu();">
                <img src="admin-imgs/<?php echo $row['Image_Profile']; ?>" alt="" width="50px">
            </div>
            <div class="menu">
                <h4><?php echo $row['FirstName'], "&nbsp;&nbsp;",$row['LastName']; ?><br><span>Admin</span></h4>
                <ul>
                    <li>
                        <a href="../SETTINGS/MyProfile.php" class="link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#000" d="M5.84846399,13.5498221 C7.28813318,13.433801 8.73442297,13.433801 10.1740922,13.5498221 C10.9580697,13.5955225 11.7383286,13.6935941 12.5099314,13.8434164 C14.1796238,14.1814947 15.2696821,14.7330961 15.73685,15.6227758 C16.0877167,16.317132 16.0877167,17.1437221 15.73685,17.8380783 C15.2696821,18.727758 14.2228801,19.3149466 12.4926289,19.6174377 C11.7216312,19.7729078 10.9411975,19.873974 10.1567896,19.9199288 C9.43008411,20 8.70337858,20 7.96802179,20 L6.64437958,20 C6.36753937,19.9644128 6.09935043,19.9466192 5.83981274,19.9466192 C5.05537891,19.9062698 4.27476595,19.8081536 3.50397353,19.6530249 C1.83428106,19.3327402 0.744222763,18.7633452 0.277054922,17.8736655 C0.0967111971,17.5290284 0.00163408158,17.144037 0.000104217816,16.752669 C-0.00354430942,16.3589158 0.0886574605,15.9704652 0.268403665,15.6227758 C0.72692025,14.7330961 1.81697855,14.1548043 3.50397353,13.8434164 C4.27816255,13.6914539 5.06143714,13.5933665 5.84846399,13.5498221 Z M8.00262682,-1.16351373e-13 C10.9028467,-1.16351373e-13 13.2539394,2.41782168 13.2539394,5.40035587 C13.2539394,8.38289006 10.9028467,10.8007117 8.00262682,10.8007117 C5.10240696,10.8007117 2.75131423,8.38289006 2.75131423,5.40035587 C2.75131423,2.41782168 5.10240696,-1.16351373e-13 8.00262682,-1.16351373e-13 Z" transform="translate(4 2)"/></svg>
                        <p>My Profile</p></a>
                    </li>
                   <!---- <li>
                        <a href="" class="link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-1.29 1.29c-.63.63-.19 1.71.7 1.71h13.17c.89 0 1.34-1.08.71-1.71L18 16z"/></svg>
                        <p>Notifications</p></a>
                    </li>---->
                    <li>
                        <a href="../SETTINGS/logout.php" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.9 11.6c-.1-.1-.1-.2-.2-.3l-3-3c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l1.3 1.3H13c-.6 0-1 .4-1 1s.4 1 1 1h4.6l-1.3 1.3c-.4.4-.4 1 0 1.4.2.2.5.3.7.3s.5-.1.7-.3l3-3c.1-.1.2-.2.2-.3.1-.3.1-.5 0-.8z"/><path d="M15.5 18.1c-1.1.6-2.3.9-3.5.9-3.9 0-7-3.1-7-7s3.1-7 7-7c1.2 0 2.4.3 3.5.9.5.3 1.1.1 1.4-.4.3-.5.1-1.1-.4-1.4C15.1 3.4 13.6 3 12 3c-5 0-9 4-9 9s4 9 9 9c1.6 0 3.1-.4 4.5-1.2.5-.3.6-.9.4-1.4-.3-.4-.9-.6-1.4-.3z"/></svg>
                        <p>Logout</p></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="body">
    <!-----------------------------------------VIEW-DETAILS-MODAL------------------------------------->
    <?php                   
                            $query="SELECT*FROM admin";
                            $result=mysqli_query($conn, $query);
                            if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                            
                         ?>
    <div class="modal fade" id="viewdetails<?php echo $row['Admin_ID']?>" tabindex="-1">
        <div class="modal-dialog" style="width:100%; max-width:800px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Homeowners Details</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th><img src="admin-imgs/<?php echo $row['Image_Profile']; ?>  " alt="" width="100px"></th>
                                <td colspan="5"><h2 style="color:green;">Active</h2></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Account No.</th>
                                <td style="color:red;">ST-CE-001</td>
                                <th>First Name:</th>
                                <td><?php echo $row['FirstName']; ?></td>
                                <th>Last Name</th>
                                <td><?php echo $row['FirstName']; ?></td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td><?php echo $row['Gender']; ?></td>
                                <th>Birthdate</th>
                                <td><?php echo $row['Birthdate']; ?></td>
                                <th>Age:</th>
                                <td><?php echo $row['Age']; ?></td>
                            </tr>
                            <tr>
                                <th>Contact#:</th>
                                <td colspan="3"><?php echo $row['ContactNo']; ?></td>
                                <th>Registered Date</th>
                                <td style="color:green;"><?php echo $row['date_registered']; ?></td>
                            </tr>
                            <tr>
                                <th>Address:</th>
                                <td colspan="5" style="height:40px;"><?php echo $row['Address']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
                }
            ?>
    <!------------------------------------------------------------------------------------------------>
        <div class="container1">
            <div class="title"><h1>Admin Accounts</h1></div>
            <div class="table-complaint">
            <div class="button"><button class="hello" id="add"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 48 48"><path fill="none" d="M0 0h48v48H0z"/><path d="M26 14h-4v8h-8v4h8v8h4v-8h8v-4h-8v-8zM24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm0 36c-8.82 0-16-7.18-16-16S15.18 8 24 8s16 7.18 16 16-7.18 16-16 16z"/></svg>Add Admin</button></div>
            <table class="table table-bordered table-hover table-responsive" id="Mytable" style="padding:0;">
                <thead class="table-dark head">
                    <tr class="height">
                    <th class="text-center">Account No.</th>
                    <th class="text-center">First Name</th>
                    <th class="text-center">Last Name</th>
                    <th class="text-center">Registered Date</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Details</th>
                    </tr>
                </thead>
                
                <tbody id="admin-pg">
                <?php
                            $query="SELECT*FROM admin WHERE verified=1";
                            $result=mysqli_query($conn, $query);
                            if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                            $time=time();
                            $status="Offline";
                            $class="btn-danger";
                            if($row['status']>$time){
                                $status="Online";
                                $class="btn-success";
                            }
                         ?>
                    <tr class="height">
                    <td style="color:red; font-weight:600;"><?php echo $row['AdminAccNo']; ?></td>
                    <td><?php echo $row['FirstName']; ?></td>
                    <td><?php echo $row['LastName']; ?></td>
                    <td><?php echo $row['date_registered']; ?></td>
                    <td><button class="btn <?php echo $class ?>"><?php echo $status; ?></button></td>
                    <td><button style="padding:.5rem; border:none;" data-bs-toggle="modal" data-bs-target="#viewdetails<?php echo $row['Admin_ID']?>">View More  </button></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
             
              <script type="text/javascript">
                function updatestatus(){
                    jQuery.ajax({
                        url:'../SETTINGS/update-status.php',
                        success:function(){

                        }
                    });
                }
                function getstatus(){
                    jQuery.ajax({
                        url:'../SETTINGS/get-status.php',
                        success:function(result){
                            jQuery('#admin-pg').html(result);
                        }
                    });
                }
                

                setInterval(function(){
                    updatestatus();
                },1000);
                setInterval(function(){
                    getstatus();
                },7000);
            </script>
            </table>
           
            </div>
        </div>
        

        <!-------------ADD ADMIN------------------>
        <?php
        $error="";$errorLastName="";$errorGender="";$errorAge="";$errorContact="";$errorAddress="";$errorBirthday="";
        $errorEmail="";$errorPass="";$errorConfirm="";$errorFile="";
    
        $Firstname="";$Lastname="";$Gender="";$Age="";$Contacts="";$Address="";$Birthday="";$Email="";$Password="";$Confirm_Password="";$Image="";
        if(isset($_POST['add'])){      
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
                $folder ='admin-imgs/' . $Image;
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
                $doubleN=mysqli_query($conn, "SELECT*FROM admin WHERE FirstName='$Firstname'");
                if(mysqli_num_rows($doubleN)>0){
                    $_SESSION['message']="Records Has Already Exist";
                    $_SESSION['msg_status']="warning";        
            }else if($Password!=$Confirm_Password){
                    echo "<script>alert(Your Password and Confirm Password not match!')</script>";
                    
                }else{
                    $Email=$_POST['Email'];
                    $otp=rand(100000,999999); 
                    $_SESSION['VerificationCode']=$otp; 
                    $_SESSION['mail']=$Email;
                    require("../phpmailer/PHPMailerAutoload.php");
                    $mail = new PHPMailer;
    
                    $mail->isSMTP();
                    $mail->Host='smtp.hostinger.com';  
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    
                    $mail->Username='st.ceciliahoatrackersystem@stceciliahoa.online'; 
                    $mail->Password='Capstone_101822';
    
                    $mail->setFrom('st.ceciliahoatrackersystem@stceciliahoa.online', 'ST-CECILIA-HOA'); 
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
                        $id=str_replace("ST-CE","-",$last_id);
                        $id1=str_pad($id + 1, 4,0, STR_PAD_LEFT);
                        $code='ST-CE-' .$id1;
                        $Encrypt=password_hash($Password, PASSWORD_DEFAULT);
                        $EncryptConfirm=password_hash($Confirm_Password, PASSWORD_DEFAULT);
                        $query="INSERT INTO admin (AdminAccNo,FirstName,LastName,Gender,Age,ContactNo,Address,Birthdate,Email,Image_Profile,Password,Confirm_Password,VerificationCode) 
                        VALUES ('$code','$Firstname','$Lastname','$Gender','$Age','$Contacts','$Address','$Birthday','$Email','$Image','$Encrypt','$EncryptConfirm',$otp)";
                        $run=mysqli_query($conn, $query);
                        echo "<script>alert('Register Success')</script>";
                    }
                    
                
                
                    
                }
            }

          

         ?>
        <div class="con">
        <div class="register">
                <h1>ADD ADMIN</h1>
                <form action="#" id="form" method="POST" enctype="multipart/form-data">
                    <div class="col-md-12 mb-2 box1">
                        <input type="text" class="form-control" id="validationTooltip01" name="FirstName" autocomplete="0" placeholder="First Name" required>
                        <div class="error" ><p style="margin:0;"><?php echo $error ?></p></div>
                      </div>
                      <div class="col-md-12 mb-2 box1">
                        <input type="text" class="form-control is valid" name="LastName" autocomplete="0" placeholder="Last Name" required>
                        <div class="error" ><p style="margin:0;"><?php echo $errorLastName ?></p></div>
                      </div>
                      
                      <div class="col-sm-12 mb-2 box1">
                        <select class="form-select" name="Gender" id="select" value="Gender" style="border:2px solid #319052;" required>
                            <option style="color:gray;" value="" disabled selected hidden>Gender--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <div class="error"><p style="margin:0;"><?php echo $errorGender ?></p></div>
                        
                      </div>
                      <div class="col-sm-12 mb-2 box1">
                        <input type="number" class="form-control" name="Age" autocomplete="0" placeholder="Age" required>
                        <div class="error"><p style="margin:0;"><?php echo $errorAge ?></p></div>
                      </div>
                      <div class="col-md-12 mb-2 box1">
                        <input type="text" class="form-control" name="Contact#" autocomplete="0" placeholder="Contact No."required>
                        <div class="error"><p style="margin:0;"><?php echo $errorContact ?></p></div>
                      </div>
                      <div class="col-lg-12 mb-2  box1">
                        <input type="text" class="form-control" name="Address" autocomplete="0" placeholder="Address" required>
                        <div class="error"><p style="margin:0;"><?php echo $errorAddress ?></p></div>
                      </div>
                      <div class="col-lg-12 mb-2  box1">
                        <input type="text" id="date" class="form-control" name="Birthday" autocomplete="0" placeholder="Date of Birth" onfocus="(this.type='date')" onblur="(this.type='text')" required>
                        <div class="error"><p style="margin:0;"><?php echo $errorBirthday ?></p></div>
                      </div>
                      <div class="col-lg-12 mb-2  box1">
                        <input type="email" class="form-control" name="Email" autocomplete="0" placeholder="Email" required>
                        <div class="error"><p style="margin:0;"><?php echo $errorEmail ?></p></div>
                      </div>
                      <div class="col-lg-12 mb-2  box1">
                        <input type="password" class="form-control" name="Password" autocomplete="0" placeholder="Password" required>
                        <div class="error"><p style="margin:0;"><?php echo $errorPass ?></p></div>
                      </div>
                      <div class="col-lg-12 mb-2 box1">
                        <input type="password" class="form-control" name="Confirm_Password" autocomplete="0" placeholder="Confirm Password" required>
                        <div class="error"><p style="margin:0;"><?php echo $errorConfirm ?></p></div>
                      </div>
                      <div class="col-lg-12 mb-2  box1">
                        <label for="profile-pic" class="form-label">Upload Your Image</label>
                        <input class="form-control" name="profile-pic" id="profile-pic" accept=".jpg, .jpeg, .png"  type="file" required>
                        <div class="error"><p style="margin:0;"><?php echo $errorFile ?></p></div>
                      </div>
                      <div class="col-lg-12 button box1">
                        <button type="button" class="btn btn-dark" id="back">Back</button>
                        <button type="submit" name="add" id="reg" class="btn btn-success">Register</button>
                      </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function Dropmenu(){
    const Toggle = document.querySelector('.menu');
    Toggle.classList.toggle('active');    
}
$(window).on("load", function(){
        $(".rotate").fadeOut(2000);
    })
</script>
<!-------JQUERY-SHOW/HIDE------>
<script>
    $(document).ready(function(e){
        $("#add").click(function(){
            $(".register").show(300);
            $(".container1").hide();
            e.preventDefault();
        });
        $("#back").click(function(e){
            $(".container1").show(300);
            $(".register").hide(); 
            e.preventDefault();
        })
        $("#reg").click(function(){
            $(".container1").hide(300);
            $(".register").show(); 
            
        })
    })
   

    if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
      }
</script>
<script type="text/javascript" src="slide.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>
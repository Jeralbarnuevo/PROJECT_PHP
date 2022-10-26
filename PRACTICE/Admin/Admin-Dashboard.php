<?php
     session_start();
     require('../connection.php');
?>
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
    <link rel="stylesheet" href="Dashboard.css">
    <link rel="stylesheet" href="calendar.css">

    <!-------------------------------------DATA-TABLE-CDN-------------------------------------------->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.css"/>
 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#mytable').DataTable();
        } );
    </script>
    <title>Dashboard</title>
</head>
<body>
    <div class="main">
    <div class="side">
        <div class="logo">
            <img src="../Assets/logo.jpg" alt="" width="90px">
            <h2>St. Cecillia Homeowners Association</h2>
        </div>
        <div class="button">
            <ul class="side-button">
                <a href="Admin-Dashboard.php"><button class="buttn active">
                    <svg class="active" xmlns="http://www.w3.org/2000/svg" width="1792" height="1792" viewBox="0 0 1600 2000"><path d="M1472 992v480q0 26-19 45t-45 19h-384v-384H768v384H384q-26 0-45-19t-19-45V992q0-1 .5-3t.5-3l575-474 575 474q1 2 1 6zm223-69-62 74q-8 9-21 11h-3q-13 0-21-7L896 424l-692 577q-12 8-24 7-13-2-21-11l-62-74q-8-10-7-23.5t11-21.5l719-599q32-26 76-26t76 26l244 204V288q0-14 9-23t23-9h192q14 0 23 9t9 23v408l219 182q10 8 11 21.5t-7 23.5z"/></svg><p>Home</p>
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
            <p>Dashboard</p>
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
    <div class="body content">
   
    <!------------------------------------------------------------------------------------------------>
        <div class="container2">
        <div class="first">
        <div class="calendar1">
        <div class="calendar">
            <div class="month">
                <i class="fas fa-angle-left prev"></i>
                <div class="date">
                    <h1></h1>
                    <p></p>
                </div>
                <i class="fas fa-angle-right next"></i>
            </div>
            <div class="weekdays">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thur</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="days">
            </div>
        </div>
        </div>
        </div>
        <div class="second">
            <div class="box">
                <div class="text">
                    <?php
                        $box1query="SELECT * FROM homeowners WHERE verified='1'";
                        $runtest=mysqli_query($conn,$box1query);
                        if($total=mysqli_num_rows($runtest)){
                            echo '<h1> '.$total.' </h1>';
                        }else{
                            echo"<h1>0</h1>";
                        }
                     ?>
                    <p>Registered Residents</p>
                </div>
                <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill="#ffffff  " d="M8.49578666,8 C9.32421378,8 9.99578666,8.67157288 9.99578666,9.5 L9.99500413,10.2483651 C10.0978758,12.0849239 8.68333886,13.0008101 6.06019361,13.0008101 C3.44551926,13.0008101 2,12.0969079 2,10.2745741 L2,9.5 C2,8.67157288 2.67157288,8 3.5,8 L8.49578666,8 Z M12.4963886,8 C13.3248157,8 13.9963886,8.67157288 13.9963886,9.5 L13.9956373,10.0265728 C14.0860521,11.6740351 12.8361745,12.5 10.5515945,12.5 C10.2414712,12.5 9.94992668,12.4848914 9.67765519,12.4546597 C10.2143644,11.9590361 10.5014697,11.2864584 10.5004904,10.4365689 L10.4942216,10.2204023 L10.4957867,9.5 C10.4957867,8.90242987 10.2337129,8.36607035 9.81823197,7.99958804 L12.4963886,8 Z M6,2 C7.38093559,2 8.50040506,3.11946948 8.50040506,4.50040506 C8.50040506,5.88134065 7.38093559,7.00081013 6,7.00081013 C4.61906441,7.00081013 3.49959494,5.88134065 3.49959494,4.50040506 C3.49959494,3.11946948 4.61906441,2 6,2 Z M11,3 C12.1045695,3 13,3.8954305 13,5 C13,6.1045695 12.1045695,7 11,7 C9.8954305,7 9,6.1045695 9,5 C9,3.8954305 9.8954305,3 11,3 Z"/></svg>      
                </div>
            </div>
            <div class="box">
            <div class="text">
                    <?php
                        $box1query="SELECT * FROM admin WHERE verified='1'";
                        $runtest=mysqli_query($conn,$box1query);
                        if($total=mysqli_num_rows($runtest)){
                            echo '<h1> '.$total.' </h1>';
                        }else{
                            echo"<h1>0</h1>";
                        }
                     ?>
                    <p>Admin</p>
                </div>
                <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48"><path fill="#ffffff" fill-rule="evenodd" d="M13.5 10.0968C13.5 7.77419 24 6 24 6 24 6 34.5 7.77419 34.5 10.0968 34.5 13.1939 32.5909 14.5 32.5909 14.5H15.4091C15.4091 14.5 13.5 13.1935 13.5 10.0968zM26 9.56667C26 9.56667 24.5333 9.03333 24 8.5 23.4667 9.03333 22 9.56667 22 9.56667 22 9.56667 22.4 12.5 24 12.5 25.6 12.5 26 9.56667 26 9.56667zM31.8143 18.2794C33.2047 17.1955 32.9877 16 32.9877 16H15.0123C15.0123 16 14.7953 17.1955 16.1857 18.2794 16.064 18.8342 16 19.41 16 20 16 24.4183 19.5817 28 24 28 28.4183 28 32 24.4183 32 20 32 19.41 31.936 18.8342 31.8143 18.2794zM24 20C26.7215 20 28.6235 19.6861 29.9517 19.234 29.9835 19.4846 30 19.7403 30 20 30 23.3137 27.3137 26 24 26 20.6863 26 18 23.3137 18 20 18 19.7403 18.0165 19.4846 18.0483 19.234 19.3765 19.6861 21.2785 20 24 20zM16.8786 28L23.3557 33.4571C23.728 33.7708 24.272 33.7708 24.6443 33.4571L31.1214 28C31.1214 28 42 31.3932 42 35.4669V42.0002H6V35.4669C6 31.3932 16.8786 28 16.8786 28zM12.7253 37.2072C12.296 37.0846 12 36.6922 12 36.2457V35H19V36.2457C19 36.6922 18.704 37.0846 18.2747 37.2072L15.7747 37.9215C15.5952 37.9728 15.4048 37.9728 15.2253 37.9215L12.7253 37.2072zM33.6645 33.1253C33.6127 32.9582 33.3873 32.9582 33.3355 33.1253L32.8639 34.6458C32.8407 34.7205 32.7743 34.771 32.6994 34.771H31.1733C31.0058 34.771 30.936 34.9957 31.0717 35.0989L32.3063 36.0387C32.3669 36.0849 32.3922 36.1666 32.3691 36.2413L31.8975 37.7619C31.8457 37.9288 32.0281 38.0678 32.1638 37.9646L33.3984 37.0248C33.459 36.9786 33.5411 36.9786 33.6017 37.0248L34.8362 37.9646C34.9719 38.0678 35.1543 37.9288 35.1025 37.7619L34.6309 36.2413C34.6078 36.1666 34.6332 36.0849 34.6938 36.0387L35.9283 35.0989C36.064 34.9957 35.9942 34.771 35.8267 34.771H34.3006C34.2257 34.771 34.1593 34.7205 34.1361 34.6458L33.6645 33.1253z" clip-rule="evenodd"/></svg>
                </div>
            </div>
            <div class="box">
            <div class="text">
                <?php
                        $box1query="SELECT * FROM complaint WHERE Status='Pending'";
                        $runtest=mysqli_query($conn,$box1query);
                        if($total=mysqli_num_rows($runtest)){
                            echo '<h1> '.$total.' </h1>';
                        }else{
                            echo"<h1>0</h1>";
                        }
                     ?>
                    <p>Complaints</p>
                </div>
                <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.7 12.7"><path fill-rule="evenodd" d="M6 3C4.355 3 3 4.355 3 6l-.004 26.004c0 1.335 2.002 1.335 2.002 0L5 6c0-.571.429-1 1-1h28c.571 0 1 .429 1 1v18c-.02 1.352 2.02 1.352 2 0V6c0-1.645-1.355-3-3-3zm6 8a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm3.9.002c-1.303.09-1.21 2.034.096 2H28c1.305-.028 1.305-1.972 0-2H15.996a1.018 1.018 0 0 0-.096 0zM12 17a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm16.11 0c-.037 0-.074 0-.11.004H15.996a1.018 1.018 0 0 0-.096 0c-1.226.152-1.14 1.958.096 1.992H28c1.373.121 1.488-1.967.11-1.996zm-12.114 5.998c-1.305.028-1.305 1.972 0 2H28c1.362.03 1.362-2.03 0-2zM12 23a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm0 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm3.996 0c-1.362-.03-1.362 2.03 0 2h10.002c1.362.03 1.362-2.03 0-2zM12 35a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm3.9 0c-1.334.064-1.239 2.066.096 2.002h8.002c1.335 0 1.335-2.002 0-2.002h-8.002a1.018 1.018 0 0 0-.096 0zm-11.914.982a1 1 0 0 0-.99 1.02L3 42c0 1.645 1.355 3 3 3h20c1.352.02 1.352-2.02 0-2H6c-.571 0-1-.429-1-1l-.002-4.998a1 1 0 0 0-1.012-1.02zm32.016-8.984c-4.959 0-8.998 4.041-8.998 9s4.04 9.006 8.998 9.006c4.959 0 8.998-4.047 8.998-9.006 0-4.959-4.04-9-8.998-9zm0 2.002A6.982 6.982 0 0 1 43 35.998a6.987 6.987 0 0 1-6.998 7.004 6.987 6.987 0 0 1-6.998-7.004A6.982 6.982 0 0 1 36.002 29zm3.158 3.875a1 1 0 0 0-.685.303l-3.536 3.535-1.41-1.416a1.002 1.002 0 1 0-1.418 1.416l2.12 2.119a1 1 0 0 0 1.415 0l4.247-4.238a1 1 0 0 0-.733-1.719z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible" paint-order="stroke fill markers" transform="scale(.26458)" style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;isolation:auto;mix-blend-mode:normal"/></svg>
                </div>
            </div>
            <div class="box">
            <div class="text">
            <?php
                        $box1query="SELECT * FROM records WHERE Status='Pending'";
                        $runtest=mysqli_query($conn,$box1query);
                        if($total=mysqli_num_rows($runtest)){
                            echo '<h1> '.$total.' </h1>';
                        }else{
                            echo"<h1>0</h1>";
                        }
                     ?>
                    <p>Violators</p>
                </div>
                <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" enable-background="new 0 0 32 32" viewBox="0 0 32 32"><path d="M31.10741,26.15234L19.3037,2.54395c-0.62988-1.25879-1.89551-2.04102-3.30371-2.04102c-1.40771,0-2.67334,0.78223-3.30322,2.04102h-0.00049L0.89257,26.15234c-0.57666,1.15332-0.51611,2.49609,0.16162,3.59277c0.67822,1.09668,1.85254,1.75195,3.14209,1.75195H27.8037c1.29004,0,2.46484-0.65527,3.14258-1.75195S31.68359,27.30469,31.10741,26.15234z M28.39355,28.16797c-0.0752,0.12305-0.25293,0.3291-0.58984,0.3291H4.19628c-0.33643,0-0.51416-0.20605-0.58984-0.3291c-0.07617-0.12207-0.18066-0.37305-0.03027-0.67383l11.80371-23.6084c0.17285-0.3457,0.49121-0.38281,0.62012-0.38281c0.12891,0,0.44726,0.03711,0.62012,0.38281l11.80371,23.6084C28.57421,27.79492,28.46972,28.0459,28.39355,28.16797z"/><path d="M15.99999 8.95508c-.82861 0-1.5.67188-1.5 1.5v9.53613c0 .82813.67139 1.5 1.5 1.5.82861 0 1.5-.67188 1.5-1.5v-9.53613C17.49999 9.62695 16.82861 8.95508 15.99999 8.95508zM15.99999 22.86621c-.82861 0-1.5.67188-1.5 1.5v1.08887c0 .82813.67139 1.5 1.5 1.5.82861 0 1.5-.67188 1.5-1.5v-1.08887C17.49999 23.53809 16.82861 22.86621 15.99999 22.86621z"/></svg>   
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<?php
        include('loading.php');
    ?>
<script type="text/javascript">
    function Dropmenu(){
    const Toggle = document.querySelector('.menu');
    Toggle.classList.toggle('active');    
}
$(window).on("load", function(){
        $(".rotate").fadeOut(5000);
    })
</script>
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
<script type="text/javascript" src="slide.js"></script>
<script type="text/javascript" src="calendar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>
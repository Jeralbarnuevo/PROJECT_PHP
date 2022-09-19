<?php
    require("../Admin/process.php");
?>
<?php
    
    if(!isset($_SESSION['Homeowners_ID'])){
        header('location: ../Accounts/Homeowners/Homeowner.php');
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="homeowners-dash.css">
    
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
                <a href="Homeowners-dash.php"><button class="buttn active">
                    <svg class="active" xmlns="http://www.w3.org/2000/svg" width="1792" height="1792" viewBox="0 0 1600 2000"><path d="M1472 992v480q0 26-19 45t-45 19h-384v-384H768v384H384q-26 0-45-19t-19-45V992q0-1 .5-3t.5-3l575-474 575 474q1 2 1 6zm223-69-62 74q-8 9-21 11h-3q-13 0-21-7L896 424l-692 577q-12 8-24 7-13-2-21-11l-62-74q-8-10-7-23.5t11-21.5l719-599q32-26 76-26t76 26l244 204V288q0-14 9-23t23-9h192q14 0 23 9t9 23v408l219 182q10 8 11 21.5t-7 23.5z"/></svg><p>Home</p>
                </button></a>
                <button class="buttn buttn-primary dropdown-toggle" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 32 32" viewBox="0 0 32 32"><path d="M31.10741,26.15234L19.3037,2.54395c-0.62988-1.25879-1.89551-2.04102-3.30371-2.04102c-1.40771,0-2.67334,0.78223-3.30322,2.04102h-0.00049L0.89257,26.15234c-0.57666,1.15332-0.51611,2.49609,0.16162,3.59277c0.67822,1.09668,1.85254,1.75195,3.14209,1.75195H27.8037c1.29004,0,2.46484-0.65527,3.14258-1.75195S31.68359,27.30469,31.10741,26.15234z M28.39355,28.16797c-0.0752,0.12305-0.25293,0.3291-0.58984,0.3291H4.19628c-0.33643,0-0.51416-0.20605-0.58984-0.3291c-0.07617-0.12207-0.18066-0.37305-0.03027-0.67383l11.80371-23.6084c0.17285-0.3457,0.49121-0.38281,0.62012-0.38281c0.12891,0,0.44726,0.03711,0.62012,0.38281l11.80371,23.6084C28.57421,27.79492,28.46972,28.0459,28.39355,28.16797z"/><path d="M15.99999 8.95508c-.82861 0-1.5.67188-1.5 1.5v9.53613c0 .82813.67139 1.5 1.5 1.5.82861 0 1.5-.67188 1.5-1.5v-9.53613C17.49999 9.62695 16.82861 8.95508 15.99999 8.95508zM15.99999 22.86621c-.82861 0-1.5.67188-1.5 1.5v1.08887c0 .82813.67139 1.5 1.5 1.5.82861 0 1.5-.67188 1.5-1.5v-1.08887C17.49999 23.53809 16.82861 22.86621 15.99999 22.86621z"/></svg><p>My Violations</p>
                </button>
                <ul class="drop">
                    <li><a class="dropdown-item" href="Myviolations.php">Pending Violations</a></li>
                    <li><a class="dropdown-item" href="CloseViolations.php">Closed Violations</a></li>
                </ul>
                <button type="button" class="buttn buttn-primary dropdown-toggle" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path d="M50 12c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38zm0 72c-18.8 0-34-15.2-34-34s15.2-34 34-34 34 15.2 34 34-15.2 34-34 34zm19.5-34c0 1.1-.9 2-2 2H45.1c-1.1 0-2-.9-2-2s.9-2 2-2h22.4c1.1 0 2 .9 2 2zm0 12c0 1.1-.9 2-2 2H45.1c-1.1 0-2-.9-2-2s.9-2 2-2h22.4c1.1 0 2 .9 2 2zM38.3 50c0 1.1-.9 2-2 2h-3.8c-1.1 0-2-.9-2-2s.9-2 2-2h3.8c1.1 0 2 .9 2 2zm0 12c0 1.1-.9 2-2 2h-3.8c-1.1 0-2-.9-2-2s.9-2 2-2h3.8c1.1 0 2 .9 2 2zm31.2-24c0 1.1-.9 2-2 2H45.1c-1.1 0-2-.9-2-2s.9-2 2-2h22.4c1.1 0 2 .9 2 2zm-31.2 0c0 1.1-.9 2-2 2h-3.8c-1.1 0-2-.9-2-2s.9-2 2-2h3.8c1.1 0 2 .9 2 2z"/><path fill="#00F" d="M244-1210V474h-1784v-1684H244m8-8h-1800V482H252v-1700z"/></svg><p>Complaints</p></a>
                </button>
                <ul class="drop">
                    <li><a class="dropdown-item" href="createcomplaint.php">Create Complaint</a></li>
                    <li><a class="dropdown-item" href="PendingCom.php">Pending Complaints</a></li>
                    <li><a class="dropdown-item" href="closedcomplaint.php">Closed Complaints</a></li>
                </ul>
                
            </ul>
        </div>
    </div>

    <div class="top">
        <div class="burger">
            <div class="hamburger"><svg class="ham" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 7h14c.6 0 1-.4 1-1s-.4-1-1-1H5c-.6 0-1 .4-1 1s.4 1 1 1zm0 6h14c.6 0 1-.4 1-1s-.4-1-1-1H5c-.6 0-1 .4-1 1s.4 1 1 1zm0 6h14c.6 0 1-.4 1-1s-.4-1-1-1H5c-.6 0-1 .4-1 1s.4 1 1 1z"/></svg></div>
            <p>Dashboard</p>
        </div>
        <div class="profile">
        <div class="welcome"><p>Welcome, <?php echo $_SESSION['Email']; ?></p></div>
        <div class="image" onclick="Dropmenu();">
                <img src="../Assets/example.jpg" alt="" width="50px">
            </div>
            <div class="menu">
                <h4>JERAL BARNUEVO<br><span>Homeowners</span></h4>
                <ul>
                    <li>
                        <a href="../SETTINGS/MyProfile.php" class="link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#000" d="M5.84846399,13.5498221 C7.28813318,13.433801 8.73442297,13.433801 10.1740922,13.5498221 C10.9580697,13.5955225 11.7383286,13.6935941 12.5099314,13.8434164 C14.1796238,14.1814947 15.2696821,14.7330961 15.73685,15.6227758 C16.0877167,16.317132 16.0877167,17.1437221 15.73685,17.8380783 C15.2696821,18.727758 14.2228801,19.3149466 12.4926289,19.6174377 C11.7216312,19.7729078 10.9411975,19.873974 10.1567896,19.9199288 C9.43008411,20 8.70337858,20 7.96802179,20 L6.64437958,20 C6.36753937,19.9644128 6.09935043,19.9466192 5.83981274,19.9466192 C5.05537891,19.9062698 4.27476595,19.8081536 3.50397353,19.6530249 C1.83428106,19.3327402 0.744222763,18.7633452 0.277054922,17.8736655 C0.0967111971,17.5290284 0.00163408158,17.144037 0.000104217816,16.752669 C-0.00354430942,16.3589158 0.0886574605,15.9704652 0.268403665,15.6227758 C0.72692025,14.7330961 1.81697855,14.1548043 3.50397353,13.8434164 C4.27816255,13.6914539 5.06143714,13.5933665 5.84846399,13.5498221 Z M8.00262682,-1.16351373e-13 C10.9028467,-1.16351373e-13 13.2539394,2.41782168 13.2539394,5.40035587 C13.2539394,8.38289006 10.9028467,10.8007117 8.00262682,10.8007117 C5.10240696,10.8007117 2.75131423,8.38289006 2.75131423,5.40035587 C2.75131423,2.41782168 5.10240696,-1.16351373e-13 8.00262682,-1.16351373e-13 Z" transform="translate(4 2)"/></svg>
                        <p>My Profile</p></a>
                    </li>
                    <li>
                        <a href="" class="link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-1.29 1.29c-.63.63-.19 1.71.7 1.71h13.17c.89 0 1.34-1.08.71-1.71L18 16z"/></svg>
                        <p>Notifications</p></a>
                    </li>
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
        <!----------------
        <div class="forum">
        <h1>Forum</h1>
        <div class="body-topic">
        <div class="box-topic">
            <h3>Topic</h3>
        <hr>
        <div class="text">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, alias? Commodi sint quae eius veniam harum quidem doloremque. Deserunt aspernatur consectetur rerum fugiat voluptatem, reiciendis exercitationem rem veniam inventore totam!</p>
            <div class="posted">
                <p>Posted by: Administrator</p>
            </div>
        </div>
        <hr>
        <div class="reply">
            <button class="btn btn-primary">Reply</button>
        </div>
        </div>
    </div>
        </div> ------>
        </div>
        <div class="second">
            <div class="box">
            <div class="text">
                    <h1>60</h1>
                    <p>My Violations</p>
                </div>
                <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" enable-background="new 0 0 32 32" viewBox="0 0 32 32"><path d="M31.10741,26.15234L19.3037,2.54395c-0.62988-1.25879-1.89551-2.04102-3.30371-2.04102c-1.40771,0-2.67334,0.78223-3.30322,2.04102h-0.00049L0.89257,26.15234c-0.57666,1.15332-0.51611,2.49609,0.16162,3.59277c0.67822,1.09668,1.85254,1.75195,3.14209,1.75195H27.8037c1.29004,0,2.46484-0.65527,3.14258-1.75195S31.68359,27.30469,31.10741,26.15234z M28.39355,28.16797c-0.0752,0.12305-0.25293,0.3291-0.58984,0.3291H4.19628c-0.33643,0-0.51416-0.20605-0.58984-0.3291c-0.07617-0.12207-0.18066-0.37305-0.03027-0.67383l11.80371-23.6084c0.17285-0.3457,0.49121-0.38281,0.62012-0.38281c0.12891,0,0.44726,0.03711,0.62012,0.38281l11.80371,23.6084C28.57421,27.79492,28.46972,28.0459,28.39355,28.16797z"/><path d="M15.99999 8.95508c-.82861 0-1.5.67188-1.5 1.5v9.53613c0 .82813.67139 1.5 1.5 1.5.82861 0 1.5-.67188 1.5-1.5v-9.53613C17.49999 9.62695 16.82861 8.95508 15.99999 8.95508zM15.99999 22.86621c-.82861 0-1.5.67188-1.5 1.5v1.08887c0 .82813.67139 1.5 1.5 1.5.82861 0 1.5-.67188 1.5-1.5v-1.08887C17.49999 23.53809 16.82861 22.86621 15.99999 22.86621z"/></svg>   
                </div>
            </div>
            <div class="box">
                <div class="text">
                        <h1>20</h1>
                        <p>My Complaints</p>
                    </div>
                    <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.7 12.7"><path fill-rule="evenodd" d="M6 3C4.355 3 3 4.355 3 6l-.004 26.004c0 1.335 2.002 1.335 2.002 0L5 6c0-.571.429-1 1-1h28c.571 0 1 .429 1 1v18c-.02 1.352 2.02 1.352 2 0V6c0-1.645-1.355-3-3-3zm6 8a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm3.9.002c-1.303.09-1.21 2.034.096 2H28c1.305-.028 1.305-1.972 0-2H15.996a1.018 1.018 0 0 0-.096 0zM12 17a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm16.11 0c-.037 0-.074 0-.11.004H15.996a1.018 1.018 0 0 0-.096 0c-1.226.152-1.14 1.958.096 1.992H28c1.373.121 1.488-1.967.11-1.996zm-12.114 5.998c-1.305.028-1.305 1.972 0 2H28c1.362.03 1.362-2.03 0-2zM12 23a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm0 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm3.996 0c-1.362-.03-1.362 2.03 0 2h10.002c1.362.03 1.362-2.03 0-2zM12 35a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm3.9 0c-1.334.064-1.239 2.066.096 2.002h8.002c1.335 0 1.335-2.002 0-2.002h-8.002a1.018 1.018 0 0 0-.096 0zm-11.914.982a1 1 0 0 0-.99 1.02L3 42c0 1.645 1.355 3 3 3h20c1.352.02 1.352-2.02 0-2H6c-.571 0-1-.429-1-1l-.002-4.998a1 1 0 0 0-1.012-1.02zm32.016-8.984c-4.959 0-8.998 4.041-8.998 9s4.04 9.006 8.998 9.006c4.959 0 8.998-4.047 8.998-9.006 0-4.959-4.04-9-8.998-9zm0 2.002A6.982 6.982 0 0 1 43 35.998a6.987 6.987 0 0 1-6.998 7.004 6.987 6.987 0 0 1-6.998-7.004A6.982 6.982 0 0 1 36.002 29zm3.158 3.875a1 1 0 0 0-.685.303l-3.536 3.535-1.41-1.416a1.002 1.002 0 1 0-1.418 1.416l2.12 2.119a1 1 0 0 0 1.415 0l4.247-4.238a1 1 0 0 0-.733-1.719z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible" paint-order="stroke fill markers" transform="scale(.26458)" style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;isolation:auto;mix-blend-mode:normal"/></svg>
                    </div>
                </div>
        </div>
    </div>
    </div>
</div>
<?php
        include('../Admin/loading.php');
    ?>
<script type="text/javascript">
    function Dropmenu(){
    const Toggle = document.querySelector('.menu');
    Toggle.classList.toggle('active');    
}
$(window).on("load", function(){
        $(".rotate").fadeOut(2000);
    })
</script>
<script type="text/javascript" src="../Admin/slide.js"></script>
<script type="text/javascript" src="cal.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>
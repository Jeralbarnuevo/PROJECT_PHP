<?php
    require_once("process.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="realtime.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">

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
    <title>Violations</title>
</head>
<body>
    <div class="main">
    <div class="side">
        <div class="logo">
            <img src="Assets/logo.jpg" alt="" width="90px">
            <h2>St. Cecillia Homeowners Association</h2>
        </div>
        <div class="button">
            <ul class="side-button">
                <a href=""><button class="buttn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1792" height="1792" viewBox="0 0 1600 2000"><path d="M1472 992v480q0 26-19 45t-45 19h-384v-384H768v384H384q-26 0-45-19t-19-45V992q0-1 .5-3t.5-3l575-474 575 474q1 2 1 6zm223-69-62 74q-8 9-21 11h-3q-13 0-21-7L896 424l-692 577q-12 8-24 7-13-2-21-11l-62-74q-8-10-7-23.5t11-21.5l719-599q32-26 76-26t76 26l244 204V288q0-14 9-23t23-9h192q14 0 23 9t9 23v408l219 182q10 8 11 21.5t-7 23.5z"/></svg><p>Home</p>
                </button></a>
                <a href="#violations"><button class="buttn">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 32 32" viewBox="0 0 32 32"><path d="M31.10741,26.15234L19.3037,2.54395c-0.62988-1.25879-1.89551-2.04102-3.30371-2.04102c-1.40771,0-2.67334,0.78223-3.30322,2.04102h-0.00049L0.89257,26.15234c-0.57666,1.15332-0.51611,2.49609,0.16162,3.59277c0.67822,1.09668,1.85254,1.75195,3.14209,1.75195H27.8037c1.29004,0,2.46484-0.65527,3.14258-1.75195S31.68359,27.30469,31.10741,26.15234z M28.39355,28.16797c-0.0752,0.12305-0.25293,0.3291-0.58984,0.3291H4.19628c-0.33643,0-0.51416-0.20605-0.58984-0.3291c-0.07617-0.12207-0.18066-0.37305-0.03027-0.67383l11.80371-23.6084c0.17285-0.3457,0.49121-0.38281,0.62012-0.38281c0.12891,0,0.44726,0.03711,0.62012,0.38281l11.80371,23.6084C28.57421,27.79492,28.46972,28.0459,28.39355,28.16797z"/><path d="M15.99999 8.95508c-.82861 0-1.5.67188-1.5 1.5v9.53613c0 .82813.67139 1.5 1.5 1.5.82861 0 1.5-.67188 1.5-1.5v-9.53613C17.49999 9.62695 16.82861 8.95508 15.99999 8.95508zM15.99999 22.86621c-.82861 0-1.5.67188-1.5 1.5v1.08887c0 .82813.67139 1.5 1.5 1.5.82861 0 1.5-.67188 1.5-1.5v-1.08887C17.49999 23.53809 16.82861 22.86621 15.99999 22.86621z"/></svg><p>Violations</p>
                </button></a>
                <button type="button" class="buttn buttn-primary dropdown-toggle" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path d="M50 12c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38zm0 72c-18.8 0-34-15.2-34-34s15.2-34 34-34 34 15.2 34 34-15.2 34-34 34zm19.5-34c0 1.1-.9 2-2 2H45.1c-1.1 0-2-.9-2-2s.9-2 2-2h22.4c1.1 0 2 .9 2 2zm0 12c0 1.1-.9 2-2 2H45.1c-1.1 0-2-.9-2-2s.9-2 2-2h22.4c1.1 0 2 .9 2 2zM38.3 50c0 1.1-.9 2-2 2h-3.8c-1.1 0-2-.9-2-2s.9-2 2-2h3.8c1.1 0 2 .9 2 2zm0 12c0 1.1-.9 2-2 2h-3.8c-1.1 0-2-.9-2-2s.9-2 2-2h3.8c1.1 0 2 .9 2 2zm31.2-24c0 1.1-.9 2-2 2H45.1c-1.1 0-2-.9-2-2s.9-2 2-2h22.4c1.1 0 2 .9 2 2zm-31.2 0c0 1.1-.9 2-2 2h-3.8c-1.1 0-2-.9-2-2s.9-2 2-2h3.8c1.1 0 2 .9 2 2z"/><path fill="#00F" d="M244-1210V474h-1784v-1684H244m8-8h-1800V482H252v-1700z"/></svg><p>Complaints</p></a>
                </button>
                <ul class="drop">
                    <li><a class="dropdown-item" href="">Pending Complaints</a></li>
                    <li><a class="dropdown-item" href="">Closed Complaints</a></li>
                    <li><a class="dropdown-item" href="">Forward Complaints</a></li>
                </ul>
                <button type="button" class="buttn buttn-primary dropdown-toggle" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14.81,12.28a3.73,3.73,0,0,0,1-2.5,3.78,3.78,0,0,0-7.56,0,3.73,3.73,0,0,0,1,2.5A5.94,5.94,0,0,0,6,16.89a1,1,0,0,0,2,.22,4,4,0,0,1,7.94,0A1,1,0,0,0,17,18h.11a1,1,0,0,0,.88-1.1A5.94,5.94,0,0,0,14.81,12.28ZM12,11.56a1.78,1.78,0,1,1,1.78-1.78A1.78,1.78,0,0,1,12,11.56ZM19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg><p>Accounts</p>
                </button>
                <ul class="drop">
                    <li><a class="dropdown-item" href="">Homeowners</a></li>
                    <li><a class="dropdown-item" href="">Admin</a></li>
                    <li><a class="dropdown-item" href="">Officer</a></li>
                </ul>
                <a href=""><button class="buttn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,6a1,1,0,0,0-1,1V17a3,3,0,0,1-3,3H7a1,1,0,0,0,0,2H17a5,5,0,0,0,5-5V7A1,1,0,0,0,21,6Zm-3,9V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H15A3,3,0,0,0,18,15ZM10,4h2V8.86l-.36-.3a1,1,0,0,0-1.28,0l-.36.3ZM4,15V5A1,1,0,0,1,5,4H8v7a1,1,0,0,0,1.65.76L11,10.63l1.35,1.13A1,1,0,0,0,13,12a1.06,1.06,0,0,0,.42-.09A1,1,0,0,0,14,11V4h1a1,1,0,0,1,1,1V15a1,1,0,0,1-1,1H5A1,1,0,0,1,4,15Z"/></svg><p>Violations Entry</p>
                </button></a>
                <a href=""><button class="buttn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="#fffff" d="M4 9h4v2H4V9z"/><path fill="#fffff" d="M16 2h-1V0H5v2H3v1.25L2.4 4H1v1.75L0 7v9h12l4-5V2zM2 5h8v2H2V5zm9 10H1V8h10v7zm1-8h-1V4H4V3h8v4zm2-2.5l-1 1.25V2H6V1h8v3.5z"/></svg><p>Records</p>
                </button></a>
            </ul>
        </div>
    </div>
    <div class="top">
        <div class="burger">
            <div class="hamburger"><svg class="ham" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 7h14c.6 0 1-.4 1-1s-.4-1-1-1H5c-.6 0-1 .4-1 1s.4 1 1 1zm0 6h14c.6 0 1-.4 1-1s-.4-1-1-1H5c-.6 0-1 .4-1 1s.4 1 1 1zm0 6h14c.6 0 1-.4 1-1s-.4-1-1-1H5c-.6 0-1 .4-1 1s.4 1 1 1z"/></svg></div>
            <p>Violations</p>
        </div>
        <div class="profile">
            <div class="image"></div>
            <div class="text">
                <h4>Name</h4>
                <p>Admin</p>
            </div>
        </div>
    </div>
    <div class="body">

    <?php
    if(isset($_SESSION['message'])):
    ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?> alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
         ?>
    </div>
    <?php endif ?>
    <!------------------------------------------DELETE-MODAL-------------------------------------->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this record?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
                    Are You Sure?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="process.php?delete=<?php echo $row['ViolationID'];?>">
                    <button type="button" class="btn btn-danger">Yes! Delete</button></a>
                </div>
            </div>
        </div>
        </div>
    <!--------------------------------------------------------------------------------------------->
    <!------------------------------------------UPDATE-MODAL--------------------------------------->
    <?php
                            $query="SELECT*FROM vtion";
                            $result=mysqli_query($conn, $query);
                            if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                            
                         ?>
    <div class="modal fade" id="updateModal<?php echo $row['ViolationID']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Violation Record</h3>
                    </div>
                <div class="modal-body">
                  <form class="form" id="form1" action="process.php" method="post">
                    <div class="type-update">
                        <label  class="form-label">Violation No.</label>
                        <input type="text" class="form-control" name="VtionNo" value="<?php echo $row['ViolationNo']?>" style="color:red;">
                        <input type="text" class="form-control" name="VtionID" value="<?php echo $row['ViolationID']?>" style="color:red;" hidden>
                    </div>
                    <div class="type-update">
                        <label class="form-label">Violation Name</label>
                        <input type="text" class="form-control" name="VtionName" value="<?php echo $row['ViolationName']?>" required>
                    </div>
                    <div class="type-update">
                    <label for="category">Category :</label>
                        <select name="category" required>
                            <option value="<?php echo $row['Category']?>">Select Category--</option>
                            <option value="Minor">Minor</option>
                            <option value="Major">Major</option>
                        </select>
                    </div>
                    <div class="type-update">
                        <label  class="form-label">Punishment</label>
                        <textarea  class="col-12" name="punishment" required><?php echo $row['Punishment']?></textarea>
                    </div>
                  </form>
                </div>  
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" form="form1"  name="update" class="btn btn-success">Update</button>
                </div>
            </div>
        </div>
        </div>
        <?php
                            }
                        } 
        ?>
    <!------------------------------------------------------------------------------------------------>
        <div class="container">
            <div class="input">
                <h2>Create Violation</h2>
                <form action="process.php" method="post">
                    <div class="one">
                    <div class="box">
                        <label>Violation No. :</label>
                        <input type="text" name="ViolationNo" value="<?php echo $number ?>" style="color:red;" readonly required>

                    </div>
                    <div class="box">
                        <label>Violation Name :</label>
                        <input name="ViolationName" type="text" placeholder="Enter The Violation Name" required>
                    </div>
                    <div class="box">
                        <label for="category">Category :</label>
                        <select name="Category"  required>
                            <option value="">Select Category</option>
                            <option value="Minor">Minor</option>
                            <option value="Major">Major</option>
                        </select>
                    </div>
                    </div>
                    <div class="two">
                    <div class="box">
                        <label>Punishment :</label>
                        <input name="Punishment" type="text" class="other" placeholder="Enter The Punisment of Violation" required>
                    </div>
                    <button name="submit" type="submit" class="add">Add</button>
                </div>
                </form>
            </div>

            <div class="table" >
                <h4>Lists of Violations</h4>
                <table class="table table-responsive table-hover" id="mytable" >
                    <thead class="table-dark">
                      <tr>
                        <th class="mid text-center">Violation No.</th>
                        <th class="mid text-center">Violation Name</th>
                        <th class="mid text-center">Category</th>
                        <th class="mid text-center">Punishment</th>
                        <th class="mid text-center  ">Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-success">
                        <?php
                            $query="SELECT*FROM vtion";
                            $result=mysqli_query($conn, $query);
                            if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                            
                         ?>
                      <tr>      
                        <td><?php echo $row['ViolationNo'] ?></td>
                        <td><?php echo $row['ViolationName'] ?></td>
                        <td><?php echo $row['Category'] ?></td>
                        <td><?php echo $row['Punishment'] ?></td>
                        <td class="action">
                            
                            <button class="update" data-bs-toggle="modal" data-bs-target="#updateModal<?php echo $row['ViolationID']?>">Edit</button>
                            <button class="delete" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
                        </td>
                      </tr>
                      <?php
                            
                            }     
                            
                        }
                        
                      ?>
                    </tbody>
                  </table>
                  
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="slide.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>
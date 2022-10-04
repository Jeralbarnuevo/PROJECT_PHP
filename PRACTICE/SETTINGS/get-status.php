<?php
    session_start();
    include('../connection.php');
    $adminID=$_SESSION['Admin_ID'];
    $time=time();
    $get="SELECT * FROM admin WHERE verified=1";
    $run=mysqli_query($conn,$get);
    $i=1;
    $tag='';
    while($row=mysqli_fetch_assoc($run)){
        $status="Offline";
        $class="btn-danger";
        if($row['status']>$time){
            $status="Online";
            $class="btn-success";
        }
   
$tag .='<tr class="height">
<td style="color:red;"> '.$row['AdminAccNo'].' </td>
<td> '.$row['FirstName'].'</td>
<td> '.$row['LastName'].'</td>
<td>'.$row['date_registered'].'</td>
<td><button class="btn '. $class.' ">'. $status.' </button></td>
<td><button style="padding:.5rem; border:none;" data-bs-toggle="modal" data-bs-target="#viewdetails'. $row['Admin_ID'].'">View More  </button></td>
</tr>';

    }

echo $tag;
?>

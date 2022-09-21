<?php
if(isset($_POST['register'])){
    $profileImg=time() . '_' . $_FILES['profile-pic']['name'];
    $folder ='imgs/' . $profileImg;
    if(move_uploaded_file($_FILES['profile-pic']['tmp_name'], $folder)){
        $insert="INSERT INTO homeowners (Image) VALUE ('$profileImg')";
        echo "<script>alert('success')</script>";
    }else{
        echo "<script>alert('Failed')</script>";
    }
    
}
 ?>
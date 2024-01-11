<?php
include('conn.php');
// print_r($_REQUEST);
    $content=$_REQUEST['content'];
    $pass = substr(md5(uniqid(mt_rand(), true)) , 0, 8);
    $sql="INSERT INTO `test` (`code`,`email`,`status`) VALUES ('$pass','$content','0')";
    if(mysqli_query($con,$sql)){
        echo json_encode(['status'=>1]);
    }else{
        echo json_encode(["status"=>0]);
    }

?>

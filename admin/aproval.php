<?php
include ('config.php');

$id =$_POST['uid'];

$sql ="SELECT * FROM `user` where `uid`=$id";
$r = mysqli_query($con,$sql);
$data = mysqli_fetch_assoc($r);
$status = $data['status'];

if($status == '1')
{
    $status ='0';
}
else
{
    
    $status ='1';
}

$update = "UPDATE `user` SET `status`='$status' WHERE `uid` =$id";
$r1=mysqli_query($con,$update);
if ($r1) {
echo $status;

}
?>
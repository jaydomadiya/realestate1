<?php
include ('config.php');

$id =$_POST['uid'];

$sql ="SELECT * FROM `request` where `id`=$id";
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

$update = "UPDATE `request` SET `status`='$status' WHERE `id` =$id";
$r1=mysqli_query($con,$update);
if ($r1) {
echo $status;

}
?>
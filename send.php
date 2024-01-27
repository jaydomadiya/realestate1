<?php
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}
if(isset($_POST['send'])){
    if($user_id != ''){
      $user_id=$_SESSION['uid'];
       
       $property_id = $_POST['property_id'];
       
 
       $select_receiver = mysqli_query($con, "SELECT * FROM `property` WHERE pid = '$property_id' LIMIT 1");
       $fetch_receiver = mysqli_fetch_assoc($select_receiver);
       $receiver = $fetch_receiver['uid'];
 
       $verify_request = mysqli_query($con, "SELECT * FROM `request` WHERE property_id = '$property_id' AND sender = '$user_id' AND receiver = '$receiver'");
 
       if(mysqli_num_rows($verify_request) > 0){
            
          $warning_msg[] = 'request sent already!';
       }else{
          $send_request = mysqli_query($con, "INSERT INTO `request`( property_id, sender, receiver) VALUES('$property_id', '$user_id', '$receiver')");
          $success_msg[] = 'request sent successfully!';
       }
 
    }else{
       $warning_msg[] = 'please login first!';
    }
 }
?>
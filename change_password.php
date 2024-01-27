<?php 
session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}

if(isset($_POST['add'])){
    $uid=$_SESSION['uid'];

    $currentPassword=sha1($_POST['currentPassword']); 
    $password=($_POST['password']);  
    $passwordConfirm=($_POST['passwordConfirm']);
    
    $sql="SELECT upass from user where uid='$uid'";
    $res = mysqli_query($con,$sql);
           $row = mysqli_fetch_assoc($res);
            $currentPassworddb=$row['upass'];
            if(($currentPassword==$currentPassworddb))
            {
                if($passwordConfirm ==''){
                    $error[] = 'Please confirm the password.';
                }
                if($password != $passwordConfirm){
                    $error[] = 'Passwords do not match.';
                }
                if(strlen($password)<=5){ // min 
                    $error[] = 'The password have to be 6 characters long.';
                }
           
                if(strlen($password)>=20){ // Max 
                    $error[] = 'Password: Max length 20 Characters Not allowed';
                }
            if(!isset($error))
                {
                    
                    $password = sha1($password);
   
                    $result = mysqli_query($con,"UPDATE user SET upass='$password' WHERE uid='$uid'");
                if($result)
                {
                    $msg="<p class='alert alert-success'>Password Changed</p>";
		            header("Location:profile.php?msg=$msg");
                }
                else 
                {
                    $error[]='Something went wrong';
                }
                }
   
           } 
           else 
           {
               $error[]='Current password does not match.'; 
           }   
       }
           if(isset($error)){ 
   
   foreach($error as $error){ 
     echo '<p class="errmsg">'.$error.'</p>'; 
   }
   }
?> 					
 
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">

<!--	Title
	=========================================================-->
<title>Dream House</title>
</head>
<body>




<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Change Password</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item text-white"><a href="profile.php">Profile</a></li>
                                <li class="breadcrumb-item active">Change Password</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->

         <div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Change Password</h2>
                        </div>
					</div>
                <div class="dashboard-personal-info p-5 bg-white">
                
                    <form method="post" enctype="multipart/form-data">
                   
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Current Password:- </label>
                                <input type="password" name="currentPassword" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>New Password:- </label>
                                <input type="password" name="password"  class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Confirm New Password:-</label>
                                <input type="password" name="passwordConfirm"  class="form-control">
                            </div>                        
                        </div>
                        
                        <input type="submit" class="btn btn-info d-none d-xl-block" value="Change Password" name="add"  style="margin:28px 194px;">
                    </form>
                  
                </div>                
            </div>
        </div>



 <!--	Footer   start-->
 <?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 
<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>
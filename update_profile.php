<?php 
session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}
$msg="";
if(isset($_POST['add']))
{
	$uid=$_SESSION['uid'];
	
	$uname=$_POST['uname'];
	$uemail=$_POST['uemail'];
	$uphone=$_POST['uphone'];
	$uimage=$_FILES['uimage']['name'];
	$temp_name=$_FILES['uimage']['tmp_name'];
	move_uploaded_file($temp_name,"admin/user/$uimage");
	
	
	$sql = "UPDATE user SET uname='{$uname}', uemail='{$uemail}', uphone='{$uphone}', uimage='{$uimage}' WHERE uid ={$uid}";
	
	$result=mysqli_query($con,$sql);
	if($result == true)
	{
		$msg="<p class='alert alert-success'>Profile Updated</p>";
		header("Location:profile.php?msg=$msg");
	}
	else{
		$msg="<p class='alert alert-warning'>Profile Not Updated</p>";
		header("Location:profile.php?msg=$msg");
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
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Update Profile</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item text-white"><a href="profile.php">Profile</a></li>
                                <li class="breadcrumb-item active">Update Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
		 
		 
		<!--	Update Profile   -->
		<div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Update Profile</h2>
                        </div>
					</div>
                <div class="dashboard-personal-info p-5 bg-white">
                <?php
									
									$uid=$_SESSION['uid'];
									$query=mysqli_query($con,"select  * from user where uid='$uid'");
									while($row=mysqli_fetch_row($query))
									{
								?>
                    <form method="post" enctype="multipart/form-data">
                   
                        <div class="">
                            <div class="col-md-6 form-group">
                                <label for=""> Name</label>
                                <input type="text" class="form-control" name="uname" value="">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="uemail" value="" >
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">Phone Number</label>
                                <input type="text" class="form-control" name="uphone" value="">
                            </div>                        
                           
                            <div class="form-group">
								<label class="col-lg-3 col-form-label">Image</label>
									<div class="col-lg-6">
											<input class="form-control" name="uimage" type="file" required="">
												
									</div>
							</div>
                        </div>
                        <input type="submit" class="btn btn-info d-none d-xl-block" value="update profile" name="add" style="margin:28px 194px;">
                    </form>
                    <?php
								} 
							?>
                </div>                
            </div>
        </div>

	<!--	Update Profile   -->
        
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
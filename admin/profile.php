<?php
session_start();
require("config.php");
////code
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
} 
$msg="";
if(isset($_POST['form1'])) {

	$aid=$_SESSION['aid'];

	$auser=$_POST['auser'];
	$aemail=$_POST['aemail'];
	$aphone=$_POST['aphone'];

	$sql = "UPDATE admin SET auser='{$auser}', aemail='{$aemail}', aphone='{$aphone}' WHERE aid ={$aid}";
	
	$result=mysqli_query($con,$sql);
	if($result == true)
	{
		$msg="<p class='alert alert-success'>Profile Updated</p>";
		
	}
	else{
		$msg="<p class='alert alert-warning'>Profile Not Updated</p>";
		
	}
}
if(isset($_POST['form2']))
{
	$aid=$_SESSION['aid'];
	
	$aimage=$_FILES['aimage']['name'];
	$temp_name=$_FILES['aimage']['tmp_name'];
	
	
	
	$sql = "UPDATE admin SET  aimage='{$aimage}' WHERE aid ={$aid}";
	$result=mysqli_query($con,$sql);
	move_uploaded_file($temp_name,"user/$aimage");
	if($result == true)
	{
		$msg="<p class='alert alert-success'>Photo Updated</p>";
		
	}
	else{
		$msg="<p class='alert alert-warning'>Photo Not Updated</p>";
	
	}
}						
if(isset($_POST['form3'])){
    $aid=$_SESSION['aid'];

    $currentPassword=sha1($_POST['old_pass']); 
    $password=($_POST['new_pass']);  
    $passwordConfirm=($_POST['c_pass']);
    
    $sql="SELECT apass from admin where aid='$aid'";
    $res = mysqli_query($con,$sql);
           $row = mysqli_fetch_assoc($res);
            $currentPassworddb=$row['apass'];
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
                    $error[] = 'Password Max length 20 Characters';
                }
            if(!isset($error))
                {
                    
                    $password = sha1($password);
   
                    $result = mysqli_query($con,"UPDATE admin SET apass='$password' WHERE aid='$aid'");
                if($result)
                {
                    $msg="<p class='alert alert-success'>Password Changed</p>";
		            
                }
                else 
                {
                    $error[]='Something went wrong';
                }
                }
   
           } 
           else 
           {
               $error[]='Old password does not match.'; 
           }   
       }
          
?> 					

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Dream Homes | Profile</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->

		
			<!-- Header -->
			<?php include("header.php"); ?>
			<!-- /Header -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col mt-5">
								<h3 class="page-title">Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<?php
						
						$aid=$_SESSION['aid'];
						$sql="select * from admin where aid='$aid'";
						$result=mysqli_query($con,$sql);
						while($row=mysqli_fetch_array($result))
						{
						?>
					<div class="row">
						
						<div class="col-md-12">
							<div class="profile-header">
								<div class="row align-items-center">
									<div class="col-auto profile-image">
										<a href="#">
											<img class="rounded-circle" alt="User Image" src="user/<?php echo $row['5']; ?>">
										</a>
									</div>
									<div class="col ml-md-n2 profile-user-info">
										<h4 class="user-name mb-2 text-uppercase"><?php echo $row['1']; ?></h4>
										<h6 class="text-muted"><?php echo $row['2']; ?></h6>
										<div class="user-Location"><i class="fa fa-id-badge" aria-hidden="true"></i>
											<?php echo $row['4']; ?></div>
										<div class="about-text"></div>
									</div>

								</div>
							</div>
							<div class="profile-menu">
								<ul class="nav nav-tabs nav-tabs-solid">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#per_details_tab">Update Info</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#image_tab">Update Photo</a>
									</li> 
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#password_tab">Update Password</a>
									</li> 
								</ul>
							</div>	
							<div class="tab-content profile-tab-cont">
								
								<!-- Personal Details Tab -->
								<div class="tab-pane fade show active" id="per_details_tab">
								
									<!-- Personal Details -->
									<form class="form-horizontal" action="#" method="post">
										<?php echo $msg ?>
										<?php	 if(isset($error)){ 
   
												foreach($error as $error){ 
												  echo '<p class="errmsg">'.$error.'</p>'; 
												}
												}
										?>
									<div class="row">
										<div class="col-lg-9">
											<div class="card">
												<div class="card-body">
													<div class="row">
													<label for="" class="col-sm-2 control-label">Name</label>
														<div class="col-sm-4">
															<input type="text" class="form-control mb-3 ml-3" name="auser" value="<?php echo $row[1] ?>">
														</div>
													</div>
													<div class="row">
													<label for="" class="col-sm-2 control-label">Email Address</label>
														<div class="col-sm-4">
															<input type="text" class="form-control mb-3 ml-3" name="aemail" value="<?php echo $row[2] ?>">
														</div>
													</div>
													<div class="row">
													<label for="" class="col-sm-2 control-label">Mobile</label>
														<div class="col-sm-4">
															<input type="text" class="form-control mb-3 ml-3" name="aphone" value="<?php echo $row[4] ?>">
														</div>
													
													</div>
													<button class="btn btn-primary" type="submit" name="form1"> Save Changes</button>
												</div>
												
											</div>
										</div>

										<div class="col-lg-3">
											
											<!-- Account Status -->
											<div class="card">
												<div class="card-body">
													<h5 class="card-title d-flex justify-content-between">
														<span>Account Status</span>
														
													</h5>
													<button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i> Active</button>
												</div>
											</div>
											<!-- /Account Status -->

											
										</div>
									</div>
									</form>
									<!-- /Personal Details -->

								</div>
								<!-- /Personal Details Tab -->

								<!-- update Photo Tab -->
								<div class="tab-pane fade" id="image_tab">
									<div class="card">
									<div class="card-body">
									<form class="form-horizontal"  method="post" enctype="multipart/form-data">
										<div class="box box-info">
											<div class="box-body">
												<div class="form-group">
							            			<label for="" class="col-sm-2 control-label"><b>New Photo</b></label>
							            				<div class="col-sm-6" style="padding-top:6px;">
							                				<input type="file" name="aimage">
							            				</div>
							        			</div>
							       				<div class="form-group">
													<label for="" class="col-sm-2 control-label"></label>
													<div class="col-sm-6">
													<button type="submit" class="btn btn-primary pull-left" name="form2">Update Photo</button>
													</div>
												</div>
											</div>
										</div>
									</form>
									</div>
									</div>
          						</div>
								<!-- update Photo Tab -->

								<!-- Change Password Tab -->
								
								<div id="password_tab" class="tab-pane fade">
								<form class="form-horizontal" action="#" method="post">
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Change Password</h5>
											<div class="row">
												<div class="col-md-10 col-lg-6">
													
														<div class="form-group">
															<label>Old Password</label>
															<input type="password" name="old_pass" class="form-control">
														</div>
														<div class="form-group">
															<label>New Password</label>
															<input type="password" name="new_pass"  class="form-control">
														</div>
														<div class="form-group">
															<label>Confirm Password</label>
															<input type="password" name="c_pass" class="form-control">
														</div>
														<div class="form-group">
															<label for="" class="col-sm-2 control-label"></label>
															<div class="col-sm-6">
																<button type="submit" class="btn btn-primary pull-left" name="form3">Update Password</button>
															</div>
														</div>
													
												</div>
											</div>
										</div>
									</div>
								</form>
								</div> 
							
								<!-- /Change Password Tab -->
								
							</div>
						</div>
					</div>
				<?php } ?>
				</div>			
			</div>
			<!-- /Page Wrapper -->

		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>
</html>
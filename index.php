<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
if(isset($_SESSION['uid'])){
    $user_id = $_SESSION['uid'];
 }else{
    $user_id = '';
 }
include("send.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/newsec.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <title>Dream House</title>
</head>

<body>


    <div id="page-wrapper">
        <div class="row">
            <!--	Header start  -->
            <?php include("include/header.php"); ?>
            <!--	Header end  -->

            <!--	Banner Start   -->
            <div class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('images/banner/banner.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-12">
                            <div class="text-white">
                                <h1 class="mb-4"><span class="text-info">Let us</span><br>
                                    Guide you Find Your <span class="text-info">#DreamHome</span><br></h1>
                                <form method="post" action="propertygrid.php">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control searchform" name="type">
                                                    <option value="">Select Type</option>
                                                    <option value="apartment">Apartment</option>
                                                    <option value="flat">Flat</option>
                                                    <option value="building">Building</option>
                                                    <option value="house">House</option>
                                                    <option value="villa">Villa</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" name="stype">
                                                    <option value="">Select Status</option>
                                                    <option value="rent">Rent</option>
                                                    <option value="sale">Sale</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-2">
                                            <div class="form-group">
                                                <select name="min" class="form-control" required>

                                                    <option value="">minimum price</option>
                                                    <option value="5000">5k</option>
                                                    <option value="10000">10k</option>
                                                    <option value="15000">15k</option>
                                                    <option value="20000">20k</option>
                                                    <option value="30000">30k</option>
                                                    <option value="40000">40k</option>
                                                    <option value="50000">50k</option>
                                                    <option value="100000">1 lac</option>
                                                    <option value="500000">5 lac</option>
                                                    <option value="1000000">10 lac</option>
                                                    <option value="2000000">20 lac</option>
                                                    <option value="3000000">30 lac</option>
                                                    <option value="4000000">40 lac</option>
                                                    <option value="5000000">50 lac</option>
                                                    <option value="6000000">60 lac</option>
                                                    <option value="7000000">70 lac</option>
                                                    <option value="8000000">80 lac</option>
                                                    <option value="9000000">90 lac</option>
                                                    <option value="10000000">1 Cr</option>
                                                    <option value="20000000">2 Cr</option>
                                                    <option value="30000000">3 Cr</option>
                                                    <option value="40000000">4 Cr</option>
                                                    <option value="50000000">5 Cr</option>
                                                    <option value="60000000">6 Cr</option>
                                                    <option value="70000000">7 Cr</option>
                                                    <option value="80000000">8 Cr</option>
                                                    <option value="90000000">9 Cr</option>
                                                    <option value="100000000">10 Cr</option>
                                                    <option value="150000000">15 Cr</option>
                                                    <option value="200000000">20 Cr</option>
                                                    <option value="250000000">25 Cr</option>
                                                    <option value="300000000">30 Cr</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-2">
                                            <div class="form-group">
                                                <select name="max" class="form-control" required>

                                                    <option value="">maximum price</option>
                                                    <option value="5000">5k</option>
                                                    <option value="10000">10k</option>
                                                    <option value="15000">15k</option>
                                                    <option value="20000">20k</option>
                                                    <option value="30000">30k</option>
                                                    <option value="40000">40k</option>
                                                    <option value="40000">40k</option>
                                                    <option value="50000">50k</option>
                                                    <option value="100000">1 lac</option>
                                                    <option value="500000">5 lac</option>
                                                    <option value="1000000">10 lac</option>
                                                    <option value="2000000">20 lac</option>
                                                    <option value="3000000">30 lac</option>
                                                    <option value="4000000">40 lac</option>
                                                    <option value="4000000">40 lac</option>
                                                    <option value="5000000">50 lac</option>
                                                    <option value="6000000">60 lac</option>
                                                    <option value="7000000">70 lac</option>
                                                    <option value="8000000">80 lac</option>
                                                    <option value="9000000">90 lac</option>
                                                    <option value="10000000">1 Cr</option>
                                                    <option value="20000000">2 Cr</option>
                                                    <option value="30000000">3 Cr</option>
                                                    <option value="40000000">4 Cr</option>
                                                    <option value="50000000">5 Cr</option>
                                                    <option value="60000000">6 Cr</option>
                                                    <option value="70000000">7 Cr</option>
                                                    <option value="80000000">8 Cr</option>
                                                    <option value="90000000">9 Cr</option>
                                                    <option value="100000000">10 Cr</option>
                                                    <option value="150000000">15 Cr</option>
                                                    <option value="200000000">20 Cr</option>
                                                    <option value="250000000">25 Cr</option>
                                                    <option value="300000000">30 Cr</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-2">
                                            <div class="form-group">
                                                <select name="city" class="form-control">
                                                    <option>select city</option>
                                                    <option value="surat">surat</option>
                                                    <option value="Ahmedabad">Ahmedabad</option>
                                                    <option value="Jaipur">Jaipur</option>
                                                    <option value="Rajkot">Rajkot</option>
                                                    <option value="Mumbai">Mumbai</option>
                                                    <option value="delhi">delhi</option>
                                                    <option value="Kolkata">Kolkata</option>
                                                    <option value="Coimbatore">Coimbatore</option>
                                                    <option value="Madurai">Madurai</option>
                                                    <option value="Howrah">Howrah</option>
                                                    <option value="Durgapur">Durgapur</option>
                                                    <option value="Chennai">Chennai</option>
                                                    <option value="Bangalore">Bangalore</option>
                                                    <option value="Hubballi‑Dharwad">Hubballi‑Dharwad</option>
                                                    <option value="Mysore">Mysore</option>
                                                    <option value="Indore">Indore</option>
                                                    <option value="Bhopal">Bhopal</option>
                                                    <option value="Gwalior">Gwalior</option>
                                                    <option value="Pune">Pune</option>
                                                    <option value="Nagpur">Nagpur</option>
                                                    <option value="Ludhiana">Ludhiana</option>
                                                    <option value="Amritsar">Amritsar</option>
                                                    <option value="Jalandhar">Jalandhar</option>
                                                    <option value="Jodhpur">Jodhpur</option>
                                                    <option value="Kota">Kota</option>
                                                    <option value="Dehradun">Dehradun</option>
                                                    <option value="Nainital">Nainital</option>
                                                    <option value="Almora">Almora</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-2">
                                            <div class="form-group">
                                                <button type="submit" name="filter" class="btn-sub btn-info">Search Property</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!--	Banner End  -->




            <div class="imgfilter">



                <!-- this div for appartment type -->
                <div class="img-wrapper">
                    <div class="imgfilter_grediant">
                        <div class="imgfilter_text imgfilter_text-appartment">
                            <?php
                            $query = mysqli_query($con, "SELECT count(type), property.* FROM property where type='Apartment'");
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <h4 class="hover-text-success text-capitalize"><a href="filterproperty.php?id=<?php echo $row['4'] ?>">Apartment</a></h4>
                                <span class="prolisted"><?php
                                                        $total = $row[0];
                                                        echo $total; ?> Properties Listed</span>

                            <?php } ?>

                        </div>
                        <div class="imgfilter_img">
                            <img class="inner-img inner-img-appartment" src="newsectionimg/appartment.png" height="350px" width="390" />
                        </div>

                    </div>
                </div>

                <!-- this div for House type -->
                <div class="img-wrapper">
                    <div class="imgfilter_grediant imgfilter_grediant2">
                        <div class="imgfilter_text ">
                            <?php
                            $query = mysqli_query($con, "SELECT count(type), property.* FROM property where type='House'");
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <h4 class="hover-text-success text-capitalize"><a href="filterproperty.php?id=<?php echo $row['4'] ?>">House</a></h4>
                                <span class="prolisted"><?php
                                                        $total = $row[0];
                                                        echo $total; ?> Properties Listed</span>

                            <?php } ?>

                        </div>
                        <div class="imgfilter_img">
                            <img class="inner-img" src="newsectionimg/house.png" height="350px" width="380px" />
                        </div>
                    </div>
                </div>
                <!-- this div for flate type -->
                <div class="img-wrapper">
                    <div class="imgfilter_grediant imgfilter_grediant">
                        <div class="imgfilter_text imgfilter_text-flate">
                            <?php
                            $query = mysqli_query($con, "SELECT count(type), property.* FROM property where type='Flat'");
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <h4 class="hover-text-success text-capitalize"><a href="filterproperty.php?id=<?php echo $row['4'] ?>">Flate</a></h4>
                                <span class="prolisted"><?php
                                                        $total = $row[0];
                                                        echo $total; ?> Properties Listed</span>

                            <?php } ?>

                        </div>
                        <div class="imgfilter_img">
                            <img class="inner-img" src="newsectionimg/flate.png" height="350px" width="290" />
                        </div>
                    </div>
                </div>
                <!-- this div for villa type -->
                <div class="img-wrapper">
                    <div class="imgfilter_grediant imgfilter_grediant">
                        <div class="imgfilter_text imgfilter_text-villa">
                            <?php
                            $query = mysqli_query($con, "SELECT count(type), property.* FROM property where type='Villa'");
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <h4 class="hover-text-success text-capitalize"><a href="filterproperty.php?id=<?php echo $row['4'] ?>">Villa</a></h4>
                                <span class="prolisted"><?php
                                                        $total = $row[0];
                                                        echo $total; ?> Properties Listed</span>
                        </div>
                    <?php } ?>
                    <div class="imgfilter_img">
                        <img class="inner-img" src="newsectionimg/modern-villa.png" height="350px" width="290" />
                    </div>
                    </div>
                </div>

                <!-- this div for buildings type -->
                <div class="img-wrapper">
                    <div class="imgfilter_grediant">
                        <div class="imgfilter_text imgfilter_text-flate">
                            <?php
                            $query = mysqli_query($con, "SELECT count(type), property.* FROM property where type='Building'");
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <h4 class="hover-text-success text-capitalize"><a href="filterproperty.php?id=<?php echo $row['4'] ?>">Building</a></h4>
                                <span class="prolisted"><?php
                                                        $total = $row[0];
                                                        echo $total; ?> Properties Listed</span>

                            <?php } ?>

                        </div>
                        <div class="imgfilter_img">
                            <img class="inner-img" src="newsectionimg/buildings.png" height="350px" width="290" />
                        </div>
                    </div>
                </div>
                <!-- this div for villa type -->

            </div>




            <!-- BHK block HTML code   -->



            <div class="bhkdiv">
                <div><img src="newsectionimg/pngegg.png" height="100px" alt=""></div>
                <div class="bhkboxs bhkfilterbox2">
                    <div class="bhkfilterinnertxt">
                        <?php
                        $query = mysqli_query($con, "SELECT count(bhk), property.* FROM property where bhk='1 BHK'");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <h4 class=""><a class="bhkfilterinnertxt-innertxt" href="filterbhk.php?id=<?php echo $row['5'] ?>">1BHK</a></h4>
                            <span class="bhkfilterinnertxt-innertxt2"><?php
                                                                        $total = $row[0];
                                                                        echo $total; ?> Properties Listed</span>

                        <?php } ?>

                    </div>
                </div>
                <div class="bhkboxs bhkfilterbox3">
                    <div class="bhkfilterinnertxt">
                        <?php
                        $query = mysqli_query($con, "SELECT count(bhk), property.* FROM property where bhk='2 BHK'");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <h4 class=""><a class="bhkfilterinnertxt-innertxt" href="filterbhk.php?id=<?php echo $row['5'] ?>">2BHK</a></h4>
                            <span class="bhkfilterinnertxt-innertxt2"><?php
                                                                        $total = $row[0];
                                                                        echo $total; ?> Properties Listed</span>

                        <?php } ?>

                    </div>
                </div>
                <div class="bhkboxs bhkfilterbox4">
                    <div class="bhkfilterinnertxt">
                        <?php
                        $query = mysqli_query($con, "SELECT count(bhk), property.* FROM property where bhk='3 BHK'");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <h4 class=""><a class="bhkfilterinnertxt-innertxt" href="filterbhk.php?id=<?php echo $row['5'] ?>">3BHK</a></h4>
                            <span class="bhkfilterinnertxt-innertxt2"><?php
                                                                        $total = $row[0];
                                                                        echo $total; ?> Properties Listed</span>

                        <?php } ?>

                    </div>
                </div>
                <div class="bhkboxs bhkfilterbox5">
                    <div class="bhkfilterinnertxt">
                        <?php
                        $query = mysqli_query($con, "SELECT count(bhk), property.* FROM property where bhk='4 BHK'");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <h4 class=""><a class="bhkfilterinnertxt-innertxt" href="filterbhk.php?id=<?php echo $row['5'] ?>">4BHK</a></h4>
                            <span class="bhkfilterinnertxt-innertxt2"><?php
                                                                        $total = $row[0];
                                                                        echo $total; ?> Properties Listed</span>

                        <?php } ?>

                    </div>
                </div>
                <div class="bhkboxs bhkfilterbox6">
                    <div class="bhkfilterinnertxt">
                        <?php
                        $query = mysqli_query($con, "SELECT count(bhk), property.* FROM property where bhk='5 BHK'");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <h4 class=""><a class="bhkfilterinnertxt-innertxt" href="filterbhk.php?id=<?php echo $row['5'] ?>">5BHK</a></h4>
                            <span class="bhkfilterinnertxt-innertxt2"><?php
                                                                        $total = $row[0];
                                                                        echo $total; ?> Properties Listed</span>

                        <?php } ?>

                    </div>
                </div>
                <div class="bhkboxs bhkfilterbox7">
                    <div class="bhkfilterinnertxt">
                        <?php
                        $query = mysqli_query($con, "SELECT count(bhk), property.* FROM property where bhk='5+ BHK'");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <h4 class=""><a class="bhkfilterinnertxt-innertxt" href="filterbhk.php?id=<?php echo $row['5'] ?>">5BHK +</a></h4>
                            <span class="bhkfilterinnertxt-innertxt2"><?php
                                                                        $total = $row[0];
                                                                        echo $total; ?> Properties Listed</span>

                        <?php } ?>

                    </div>
                </div>
            </div>


            <!--	Text Block One
		======================================================-->
            <div class="full-row bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">What We Do</h2>
                        </div>
                    </div>
                    <div class="text-box-one">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-rent text-info flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Selling Service</a></h5>
                                    <p>This is a dummy text for filling out spaces. Just some random words...</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-for-rent text-info flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Rental Service</a></h5>
                                    <p>This is a dummy text for filling out spaces. Just some random words...</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-list text-info flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Property Listing</a></h5>
                                    <p>This is a dummy text for filling out spaces. Just some random words...</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-diagram text-info flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Legal Investment</a></h5>
                                    <p>This is a dummy text for filling out spaces. Just some random words...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-----  Our Services  ---->

            <!--	Recent Properties  -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-secondary double-down-line text-center mb-4">Recent Property</h2>
                        </div>

                        <div class="col-md-12">
                            <div class="tab-content mt-4" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                    <div class="row">

                                        <?php $query = mysqli_query($con, "SELECT property.*, user.uname,user.utype,user.uimage FROM `property`,`user` WHERE property.uid=user.uid ORDER BY date DESC LIMIT 9");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>


                                            <div class="col-md-6 col-lg-4">
                                                <div class="featured-thumb hover-zoomer mb-4">
                                                    <div class="overlay-black overflow-hidden position-relative"> <img src="admin/property/<?php echo $row['18']; ?>" alt="pimage">
                                                        <div class="featured bg-info text-white">New</div>
                                                        <div class="sale bg-info text-white text-capitalize">For <?php echo $row['5']; ?></div>
                                                        <div class="price text-primary"><b>₹<?php echo $row['13']; ?> </b><span class="text-white"><?php echo $row['12']; ?> Sqft</span></div>
                                                    </div>
                                                    <div class="featured-thumb-data shadow-one">
                                                        <div class="p-3">
                                                            <h5 class="text-secondary hover-text-success mb-2 text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0']; ?>"><?php echo $row['1']; ?></a></h5>
                                                            <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-info"></i> <?php echo $row['14']; ?></span>
                                                        </div>
                                                        <div class="bg-gray quantity px-4 pt-4">
                                                            <ul>
                                                                <li><span><?php echo $row['12']; ?></span> Sqft</li>
                                                                <li><span><?php echo $row['6']; ?></span> Beds</li>
                                                                <li><span><?php echo $row['7']; ?></span> Baths</li>
                                                                <li><span><?php echo $row['9']; ?></span> Kitchen</li>
                                                                <li><span><?php echo $row['8']; ?></span> Balcony</li>

                                                            </ul>
                                                        </div>
                                                        <div class="p-4 d-inline-block w-100">
                                                            <div class="float-left text-capitalize"><i class="fas fa-user text-info mr-1"></i>By : <?php echo $row['uname']; ?></div>
                                                            <div class="float-right"><i class="far fa-calendar-alt text-info mr-1"></i> <?php echo date('d-m-Y', strtotime($row['date'])); ?></div>
                                                        </div>
                                                        <!-- knaninaoinslnfinaifnanfoiasnfoianfionaoifnsaoinfoanf -->
                                                        <?php
                                                        if ($_SESSION['utype'] == 'buyer') {
                                                        ?>
                                                            <form action="" method="POST">
                                                                <div class="box">
                                                                    <input type="hidden" name="property_id" value="<?= $row['pid']; ?>">
                                                                    <input type="submit" value="send enquiry" name="send" class="btn btn-info">
                                                                </div>

                                                            </form>

                                                        <?php
                                                        }
                                                        ?>
                                                        <!-- hbasbduiabuasudhnisndiasndoiasjdiohasofihasihaoishfoiahfioashfasoifhoiashfoiashfoiashfoashfoashofhasoifhoh -->
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>

                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Recent Properties  -->

            <!--	Why Choose Us -->
            <div class="full-row living bg-one overlay-secondary-half" style="background-image: url('images/01.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="living-list pr-4">
                                <h3 class="pb-4 mb-3 text-white">Why Choose Us</h3>
                                <ul>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="flaticon-reward flat-medium float-left d-table mr-4 text-info" aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Top Rated</h5>
                                            <p>This is a dummy text for filling out spaces. This is just a dummy text for filling out blank spaces.</p>
                                        </div>
                                    </li>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="flaticon-real-estate flat-medium float-left d-table mr-4 text-info" aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Experience Quality</h5>
                                            <p>This is a dummy text for filling out spaces. This is just a dummy text for filling out blank spaces.</p>
                                        </div>
                                    </li>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="flaticon-seller flat-medium float-left d-table mr-4 text-info" aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Experienced Agents</h5>
                                            <p>This is a dummy text for filling out spaces. This is just a dummy text for filling out blank spaces.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	why choose us -->

            <!--	How it work -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">How It Work</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="icon-thumb-one text-center mb-5">
                                <div class="bg-info text-white rounded-circle position-absolute z-index-9">1</div>
                                <div class="left-arrow"><svg height="140px" viewBox="0 0 61.7998 61.7998" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <title></title>
                                            <g data-name="Layer 2" id="Layer_2">
                                                <g data-name="—ÎÓÈ 1" id="_ÎÓÈ_1">
                                                    <circle cx="30.8999" cy="30.8999" fill="#58b0e0" r="30.8999"></circle>
                                                    <path d="M23.255 38.68l15.907.121v12.918l-15.907-.121V38.68z" fill="#f9dca4" fill-rule="evenodd"></path>
                                                    <path d="M43.971 58.905a30.967 30.967 0 0 1-25.843.14V48.417H43.97z" fill="#e6e6e6" fill-rule="evenodd"></path>
                                                    <path d="M33.403 61.7q-1.238.099-2.503.1-.955 0-1.895-.057l1.03-8.988h2.41z" fill="#e9573e" fill-rule="evenodd"></path>
                                                    <path d="M25.657 61.332A34.072 34.072 0 0 1 15.9 57.92a31.033 31.033 0 0 1-7.857-6.225l1.284-3.1 13.925-6.212c0 5.212 1.711 13.482 2.405 18.95z" fill="#677079" fill-rule="evenodd"></path>
                                                    <path d="M39.165 38.759v3.231c-4.732 5.527-13.773 4.745-15.8-3.412z" fill-rule="evenodd" opacity="0.11"></path>
                                                    <path d="M31.129 8.432c21.281 0 12.987 35.266 0 35.266-12.267 0-21.281-35.266 0-35.266z" fill="#ffe8be" fill-rule="evenodd"></path>
                                                    <path d="M18.365 24.046c-3.07 1.339-.46 7.686 1.472 7.658a31.972 31.972 0 0 1-1.472-7.659z" fill="#f9dca4" fill-rule="evenodd"></path>
                                                    <path d="M44.14 24.045c3.07 1.339.46 7.687-1.471 7.658a31.993 31.993 0 0 0 1.471-7.658z" fill="#f9dca4" fill-rule="evenodd"></path>
                                                    <path d="M21.931 14.328c-3.334 3.458-2.161 13.03-2.161 13.03l-1.05-.495c-6.554-25.394 31.634-25.395 25.043 0l-1.05.495s1.174-9.572-2.16-13.03c-4.119 3.995-14.526 3.974-18.622 0z" fill="#464449" fill-rule="evenodd"></path>
                                                    <path d="M36.767 61.243a30.863 30.863 0 0 0 17.408-10.018l-1.09-2.631-13.924-6.212c0 5.212-1.7 13.393-2.394 18.861z" fill="#677079" fill-rule="evenodd"></path>
                                                    <path d="M39.162 41.98l-7.926 6.465 6.573 5.913s1.752-9.704 1.353-12.378z" fill="#ffffff" fill-rule="evenodd"></path>
                                                    <path d="M23.253 41.98l7.989 6.465-6.645 5.913s-1.746-9.704-1.344-12.378z" fill="#ffffff" fill-rule="evenodd"></path>
                                                    <path d="M28.109 51.227l3.137-2.818 3.137 2.818-3.137 2.817-3.137-2.817z" fill="#e9573e" fill-rule="evenodd"></path>
                                                    <path d="M25.767 61.373a30.815 30.815 0 0 1-3.779-.88 2.652 2.652 0 0 1-.114-.093l-3.535-6.39 4.541-3.26h-4.752l1.017-6.851 4.11-2.599c.178 7.37 1.759 15.656 2.512 20.073z" fill="#434955" fill-rule="evenodd"></path>
                                                    <path d="M36.645 61.266c.588-.098 1.17-.234 1.747-.384.682-.177 1.36-.377 2.034-.579l.134-.043 3.511-6.315-4.541-3.242h4.752l-1.017-6.817-4.11-2.586c-.178 7.332-1.758 15.571-2.51 19.966z" fill="#434955" fill-rule="evenodd"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg></div>
                                <h5 class="text-secondary mt-5 mb-4">Create An Account</h5>
                                <!-- <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p> -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-thumb-one text-center mb-5">
                                <div class="bg-info text-white rounded-circle position-absolute z-index-9">2</div>
                                <div class="left-arrow"><svg height="140px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-87.04 -87.04 686.08 686.08" xml:space="preserve" fill="#000000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0">
                                            <rect x="-87.04" y="-87.04" width="686.08" height="686.08" rx="343.04" fill="#58b0e0" strokewidth="0"></rect>
                                        </g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <polygon style="fill:#288FD9;" points="490.44,0 256,0 235.085,77.732 490.44,56.817 "></polygon>
                                            <polygon style="fill:#8BCBF1;" points="21.56,0 21.56,56.817 256,77.732 256,0 "></polygon>
                                            <polygon style="fill:#0079CE;" points="512,56.817 256,56.817 235.085,491.085 307.222,512 512,512 "></polygon>
                                            <polygon style="fill:#288FD9;" points="0,56.817 0,512 204.778,512 256,491.085 256,56.817 "></polygon>
                                            <polygon style="fill:#F39624;" points="307.222,512 307.222,347.947 256,347.947 235.085,440.947 256,512 "></polygon>
                                            <g>
                                                <rect x="204.779" y="347.951" style="fill:#F7C02D;" width="51.221" height="164.049"></rect>
                                                <polygon style="fill:#F7C02D;" points="156.346,110.718 105.123,110.718 84.208,145.771 105.123,180.822 156.346,180.822 "></polygon>
                                                <polygon style="fill:#F7C02D;" points="156.346,229.333 105.123,229.333 84.208,264.384 105.123,299.436 156.346,299.436 "></polygon>
                                            </g>
                                            <g>
                                                <polygon style="fill:#F39624;" points="307.222,110.718 256,110.718 235.085,145.771 256,180.822 307.222,180.822 "></polygon>
                                                <polygon style="fill:#F39624;" points="307.222,229.333 256,229.333 235.085,264.384 256,299.436 307.222,299.436 "></polygon>
                                            </g>
                                            <polygon style="fill:#F7C02D;" points="156.346,347.947 105.123,347.947 84.208,382.999 105.123,418.05 156.346,418.05 "></polygon>
                                            <g>
                                                <polygon style="fill:#E9751C;" points="458.099,110.718 406.877,110.718 385.962,145.771 406.877,180.822 458.099,180.822 "></polygon>
                                                <polygon style="fill:#E9751C;" points="458.099,229.333 406.877,229.333 385.962,264.384 406.877,299.436 458.099,299.436 "></polygon>
                                                <polygon style="fill:#E9751C;" points="458.099,347.947 406.877,347.947 385.962,382.999 406.877,418.05 458.099,418.05 "></polygon>
                                            </g>
                                            <g>
                                                <rect x="53.901" y="110.717" style="fill:#FBE27B;" width="51.221" height="70.102"></rect>
                                                <rect x="53.901" y="229.334" style="fill:#FBE27B;" width="51.221" height="70.102"></rect>
                                                <rect x="53.901" y="347.951" style="fill:#FBE27B;" width="51.221" height="70.102"></rect>
                                            </g>
                                            <g>
                                                <rect x="204.779" y="110.717" style="fill:#F7C02D;" width="51.221" height="70.102"></rect>
                                                <rect x="204.779" y="229.334" style="fill:#F7C02D;" width="51.221" height="70.102"></rect>
                                            </g>
                                            <g>
                                                <rect x="355.652" y="110.717" style="fill:#F39624;" width="51.221" height="70.102"></rect>
                                                <rect x="355.652" y="229.334" style="fill:#F39624;" width="51.221" height="70.102"></rect>
                                                <rect x="355.652" y="347.951" style="fill:#F39624;" width="51.221" height="70.102"></rect>
                                            </g>
                                        </g>
                                    </svg></div>
                                <h5 class="text-secondary mt-5 mb-4">Find Property</h5>
                                <!-- <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p> -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-thumb-one text-center mb-5">
                                <div class="bg-info text-white rounded-circle position-absolute z-index-9">3</div>
                                <div><svg height="140px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <circle cx="512" cy="512" r="512" style="fill:#58b0e0"></circle>
                                            <path d="M461.3 642.8c3.5 0 7-1 9.8-2.9l.5-.3.4-.4c33.2-28.4 66.4-56.9 99.6-85.3 49.9-42.8 101.2-86.8 152.2-130.4-19 41.4-38.3 83.5-57 124.2-14.1 30.8-28.3 61.6-42.4 92.4-1 1.9-1.8 3.9-2.6 5.7-1.6 3.7-2.9 6.9-5 8.8l-.1.1-.1.1c-4.4 4.6-8.1 6.9-11.2 7H258.6c-1.2-.1-2.1-.2-2.8-.3.1-.3.2-.5.3-.8.2-.5.4-.9.6-1.3 12.8-28.7 25.6-57.3 38.4-86 17.7-39.6 36-80.6 54-121 2.1 3.9 4.2 7.9 6.3 11.7 3.3 6.2 6.7 12.5 10.1 18.7 16.9 31.4 34.1 63.3 50.7 94.2 10.2 18.9 20.3 37.8 30.5 56.7 2.4 5.5 8.1 9.1 14.6 9.1zm360.6-315.9c-19.5 16.8-39.2 33.4-58.6 50.3-4.1 10.1-8.9 19.9-13.4 29.8-38.5 83.9-77 167.7-115.5 251.6-6.2 11.3-18.3 21-31.9 19.7H262.6c-5.2.1-10.7.3-15.6-2-4.4-1.6-7.9-5.3-9.1-9.9v-6.1c1.3-4.9 3.8-9.4 5.8-14 31.3-70.1 62.6-140.1 93.9-210.2 3.2-7.3 9.5-12.9 16.6-16.4 6-3 13-3.1 19.5-4.2 112.9-16.4 225.8-32.8 338.8-49.2 9.6-1.6 19.3-2.4 28.8-4.4 25.4-16.1 50.4-32.9 75.8-49.1 3.1-2 7.9-1.3 9.5 2.3 1.7 4.4-.9 9.3-4.7 11.8zm-72.7 62.6c-94.4 80.9-188.8 161.8-283.1 242.7-3.5 2.3-9.5 1.8-11.1-2.6-27.1-50.4-54.3-100.8-81.4-151.3-8.3-15-16-30.4-24.6-45.2-3.7 4.2-5.5 9.6-7.9 14.7-30.9 69.2-61.9 138.4-92.8 207.6-1.6 3.6-4.3 8.2-1.1 11.7 2.9 2.7 7.1 3.4 11 3.6h347.1c7.1-.1 13.1-4.9 17.8-9.8 4.8-4.7 6.5-11.4 9.5-17.2L734 422.9c5-11 10.5-22 15.2-33.4zm66-66.7c-12 7.5-23.7 15.4-35.6 23.1-15.1 9.8-30.4 19.2-44.6 30.4l-265.4 171-105-106.1-5.8-7c34.2 63.9 69 127.6 103.2 191.5 11.8-9.6 23.1-19.7 34.7-29.5 92.2-79.1 184.4-158.1 276.7-237.2 13.9-12.2 28.1-23.9 41.8-36.2z" style="fill:#fff"></path>
                                        </g>
                                    </svg></i></div>
                                <h5 class="text-secondary mt-5 mb-4">Send Request</h5>
                                <!-- <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--	How It Work -->

            <!--	Achievement
        ============================================================-->
            <div class="full-row overlay-secondary" style="background-image: url('images/home.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="fact-counter">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(pid) FROM property");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <div class="count-num text-info my-4" data-speed="3000" data-stop="<?php
                                                                                                            $total = $row[0];
                                                                                                            echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Property Available</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(pid) FROM property where stype='sale'");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <div class="count-num text-info my-4" data-speed="3000" data-stop="<?php
                                                                                                            $total = $row[0];
                                                                                                            echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Sale Property Available</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(pid) FROM property where stype='rent'");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <div class="count-num text-info my-4" data-speed="3000" data-stop="<?php
                                                                                                            $total = $row[0];
                                                                                                            echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Rent Property Available</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(uid) FROM user");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <div class="count-num text-info my-4" data-speed="3000" data-stop="<?php
                                                                                                            $total = $row[0];
                                                                                                            echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Registered Users</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--	Popular Place -->
            <div class="full-row bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">Popular Places</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6 col-lg-3 pb-1">
                                <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/1.jpg" alt="">
                                    <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                        <?php
                                        $query = mysqli_query($con, "SELECT count(state), property.* FROM property where state='maharashtra'");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <h4 class="hover-text-success text-capitalize"><a href="stateproperty.php?id=<?php echo $row['17'] ?>"><?php echo $row['state']; ?></a></h4>
                                            <span><?php
                                                    $total = $row[0];
                                                    echo $total; ?> Properties Listed</span>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 pb-1">
                                <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/2.jpg" alt="">
                                    <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                        <?php
                                        $query = mysqli_query($con, "SELECT count(state), property.* FROM property where state='Tamil Nadu'");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <h4 class="hover-text-success text-capitalize"><a href="stateproperty.php?id=<?php echo $row['17'] ?>"><?php echo $row['state']; ?></a></h4>
                                            <span><?php
                                                    $total = $row[0];
                                                    echo $total; ?> Properties Listed</span>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 pb-1">
                                <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/3.jpg" alt="">
                                    <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                        <?php
                                        $query = mysqli_query($con, "SELECT count(state), property.* FROM property where state='Gujarat'");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <h4 class="hover-text-success text-capitalize"><a href="stateproperty.php?id=<?php echo $row['17'] ?>"><?php echo $row['state']; ?></a></h4>
                                            <span><?php
                                                    $total = $row[0];
                                                    echo $total; ?> Properties Listed</span>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 pb-1">
                                <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/4.jpg" alt="">
                                    <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                        <?php
                                        $query = mysqli_query($con, "SELECT count(state), property.* FROM property where state='Rajasthan'");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <h4 class="hover-text-success text-capitalize"><a href="stateproperty.php?id=<?php echo $row['17'] ?>"><?php echo $row['state']; ?></a></h4>
                                            <span><?php
                                                    $total = $row[0];
                                                    echo $total; ?> Properties Listed</span>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Popular Places -->
            <!--	Testonomial -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content-sidebar p-4">
                                <div class="mb-3 col-lg-12">
                                    <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Testimonial</h4>
                                    <div class="recent-review owl-carousel owl-dots-gray owl-dots-hover-success">

                                        <?php

                                        $query = mysqli_query($con, "select feedback.*, user.* from feedback,user where feedback.uid=user.uid and feedback.status='1'");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <div class="item">
                                                <div class="p-4 bg-success down-angle-white position-relative">
                                                    <p class="text-white"><i class="fas fa-quote-left mr-2 text-white"></i><?php echo $row['2']; ?>. <i class="fas fa-quote-right mr-2 text-white"></i></p>
                                                </div>
                                                <div class="p-2 mt-4">
                                                    <span class="text-info   d-table text-capitalize"><?php echo $row['uname']; ?></span> <span class="text-capitalize"><?php echo $row['utype']; ?></span>
                                                </div>
                                            </div>
                                        <?php }  ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Testonomial -->


            <!--	Footer   start-->
            <?php include("include/footer.php"); ?>
            <!--	Footer   start-->


            <!-- Scroll to top -->
            <a href="#" class="bg-info text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
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
    <script src="js/YouTubePopUp.jquery.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
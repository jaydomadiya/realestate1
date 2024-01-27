<?php
session_start();
include("config.php");
if (isset($_SESSION['uid'])) {
    $user_id = $_SESSION['uid'];
} else {
    $user_id = '';
}

if (isset($_POST['delete'])) {

    $delete_id = $_POST['request_id'];

    $verify_delete = "SELECT * FROM `request` WHERE id = '$delete_id'";
    $result_verify_delete = mysqli_query($con, $verify_delete);

    if (mysqli_num_rows($result_verify_delete) > 0) {
        $delete_request = "DELETE FROM `request` WHERE id = '$delete_id'";
        $result_delete_request = mysqli_query($con, $delete_request);
        $success_msg[] = 'request deleted successfully!';
    } else {
        $warning_msg[] = 'request deleted already!';
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

    <script src="https://kit.fontawesome.com/843124c358.js" crossorigin="anonymous"></script>
    <title>Dream House</title>
</head>

<body>

    <div id="page-wrapper">
        <div class="row">
            <!--	Header start  -->
            <?php include("include/header.php"); ?>
            <!--	Header end  -->

            <!--	Banner   --->
            <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Property Request</b></h2>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="breadcrumb" class="float-left float-md-right">
                                <ol class="breadcrumb bg-transparent m-0 p-0">
                                    <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">property Request</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Banner   --->
            <div class="full-row bg-gray">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center">Requested Property</h2>

                        </div>
                        <table class="items-list col-lg-12 table-hover" style="border-collapse:inherit;">
                            <thead>
                                <tr class="bg-dark">
                                    <th class="text-white font-weight-bolder">Properties</th>
                                    <th class="text-white font-weight-bolder">Seller</th>

                                    <th class="text-white font-weight-bolder">Requested Date</th>


                                    <th class="text-white font-weight-bolder">Delete</th>
                                </tr>
                            </thead>
                            <tbody>




                                <?php
                                $select_requests = "SELECT * FROM `request` WHERE sender = '$user_id'";
                                $result_requests = mysqli_query($con, $select_requests);
                                if (mysqli_num_rows($result_requests) > 0) {
                                    while ($fetch_request = mysqli_fetch_assoc($result_requests)) {

                                        $select_receiver = "SELECT * FROM `user` WHERE uid = '" . $fetch_request['receiver'] . "'";
                                        $result_receiver = mysqli_query($con, $select_receiver);
                                        $fetch_receiver = mysqli_fetch_assoc($result_receiver);

                                        $select_property = "SELECT * FROM `property` WHERE pid = '" . $fetch_request['property_id'] . "'";
                                        $result_property = mysqli_query($con, $select_property);
                                        $fetch_property = mysqli_fetch_assoc($result_property);
                                ?>


                                        <form action="" method="POST">
                                            <tr>

                                                <td>
                                                    <img src="admin/property/<?= $fetch_property['pimage']; ?>" alt="pimage">
                                                    <div class="property-info d-table">
                                                        <h5 class="text-secondary text-capitalize"><a href="propertydetail.php?pid=<?= $fetch_property['pid']; ?>"><?= $fetch_property['title']; ?></a></h5>
                                                        <span class="font-14 text-capitalize"><i class="fas fa-map-marker-alt text-info font-13"></i>&nbsp; <?= $fetch_property['location']; ?></span>
                                                        <div class="price mt-3">
                                                            <span class="text-info">₹&nbsp;<?= $fetch_property['price']; ?></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?php
                                                    if ($fetch_request['status'] == 1) {
                                                        echo $fetch_receiver['uname'] . '  ';
                                                        echo "   ";
                                                        echo $fetch_receiver['uphone'];
                                                    } else {
                                                        echo $fetch_receiver['uname'];
                                                    }

                                                    ?></td>

                                                <td><?= $fetch_request['date']; ?></td>


                                                <input type="hidden" name="request_id" value="<?= $fetch_request['id']; ?>">
                                                <td>
                                                    <?php
                                                    if ($fetch_request['status'] == "1") {
                                                        echo '<button class="btn btn-success" disabled>Accepted</button>';
                                                    } else {
                                                        ?>
                                                        <input type="submit" value="Delete Request" class="btn btn-danger" onclick="return confirm('remove this request?')" name="delete">
                                                        <?php
                                                    '<button class="btn btn-info" onclick="togleaccept(' . $fetch_request['id'] . ');">Accept</button>';
                                                    }
                                                    ?>

                                                </td>

                                            </tr>
                                        </form>
                                <?php
                                    }
                                } else {
                                    echo '<p class="empty">you have not sent any request!</p>';
                                }
                                ?>




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--	Footer   start-->
            <?php include("include/footer.php"); ?>
            <!--	Footer   start-->

            <!-- Scroll to top -->
            <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
            <!-- End Scroll To top -->

        </div>
    </div>
    <!--	Js Link
============================================================-->
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="./login.js"></script>
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
<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
    <div class="top-header bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="top-contact list-text-white  d-table">
                        <li><a><i class="fas fa-phone-alt text-info mr-1"></i>+91 99784 97157</a></li>
                        <li><a><i class="fas fa-envelope text-info mr-1"></i>contactus@dreamhouse.com</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="top-contact float-right">
                        <ul class="list-text-white d-table">
                            <li><i class="fas fa-user text-info mr-1"></i>
                                <?php if (isset($_SESSION['uemail'])) { ?>
                                    <a href="logout.php">Logout</a>&nbsp;&nbsp;<?php } else { ?>
                                    <a href="login.php">Login</a>&nbsp;&nbsp;

                            </li>
                            <li><i class="fas fa-user-plus text-info mr-1"></i><a href="register.php"> Register</li><?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-nav secondary-nav hover-success-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative  " href="index.php">
                            <div class="navlogo-main">
                                <h2 class="navtext navt1">Dream</h2><img class="navlogo" src="images/logopng.png" alt="">
                                <h2 class="navtext navt2">House</h2>
                            </div>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 23rem;">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown"> <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a></li>

                                <li class="nav-item"> <a class="nav-link" href="about.php">About</a> </li>

                                <li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a> </li>

                                <li class="nav-item"> <a class="nav-link" href="property.php">Properties</a> </li>

                                <li class="nav-item"> <a class="nav-link" href="agent.php">Agent</a> </li>

                                <?php if (isset($_SESSION['uemail'])) { ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"> <a class="nav-link" href="profile.php">Profile</a> </li>
                                            <?php
                                            if ($_SESSION['utype'] != 'buyer') {
                                                ?>
                                                <li class="nav-item"> <a class="nav-link" href="propertyrequestpage.php">Property Request</a> </li>
                                                <li class="nav-item"> <a class="nav-link" href="feature.php">Your Property</a> </li>
                                            <?php
                                            } else {
                                            ?>
                                            <li class="nav-item"> <a class="nav-link" href="buyerrequest.php">Property Request</a> </li>
                                            <?php
                                            }
                                            ?>
                                            <li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a> </li>
                                        </ul>
                                    </li>
                                <?php } else { ?>
                                    <!-- <li class="nav-item"> <a class="nav-link" href="login.php">Login/Register</a> </li> -->
                                <?php } ?>

                            </ul>


                            <!-- <a class="btn btn-info d-none d-xl-block" style="border-radius:30px;" href="submitproperty.php">Add Peoperty</a>  -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
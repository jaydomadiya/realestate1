<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Real Estate PHP">
    <meta name="keywords" content="">
    <meta name="author" content="Unicoder">
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
    <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>FAQ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

        * {
            box-sizing: border-box;
        }

        body {
            background-color: #f0f0f0;
            font-family: 'Muli', sans-serif;
        }

        h1 {
            margin: 50px 0 30px;
        }

        .faqs-container {
            max-width: 919px;
        }

        .faq {
            background-color: transparent;
            border: 1px solid #9FA4A8;
            border-radius: 10px;
            padding: 30px;
            position: relative;
            overflow: hidden;
            margin: 20px 0;
            transition: 0.3s ease;
        }

        .faq.active {
            background-color: #fff;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1), 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        .faq.active::after,
        .faq.active::before {
            color: #2ecc71;
            content: '\f075';
            font-family: 'Font Awesome 5 Free';
            font-size: 7rem;
            position: absolute;
            opacity: 0.2;
            top: 20px;
            left: 20px;
            z-index: 0;
        }

        .faq.active::before {
            color: #3498db;
            top: -10px;
            left: -30px;
            transform: rotateY(180deg);
        }

        .faq-title {
            margin: 0 35px 0 0;
            font-size: 23px;
            color:#000;
        }

        .faq-text {
            display: none;
            margin: 30px 0 0;
        }

        .faq.active .faq-text {
            display: block;
        }

        .faq-toggle {
            background-color: transparent;
            border: none;
            border-radius: 50%;
            color: #fff;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            padding: 0;
            position: absolute;
            top: 30px;
            right: 30px;
            height: 30px;
            width: 30px;
        }

        .faq-toggle:focus {
            outline: none;
        }

        .faq.active .faq-toggle {
            background-color: #9FA4A8;
        }

        .faq-toggle .fa-times {
            display: none;
        }

        .faq.active .faq-toggle .fa-times {
            display: block;
        }

        .faq-toggle .fa-chevron-down {
            color: #83888E;
        }

        .faq.active .faq-toggle .fa-chevron-down {
            display: none;
        }

        /* SOCIAL PANEL CSS */
        .social-panel-container {
            position: fixed;
            right: 0;
            bottom: 80px;
            transform: translateX(100%);
            transition: transform 0.4s ease-in-out;
        }

        .social-panel-container.visible {
            transform: translateX(-10px);
        }

        .social-panel {
            background-color: #fff;
            border-radius: 16px;
            box-shadow: 0 16px 31px -17px rgba(0, 31, 97, 0.6);
            border: 5px solid #001F61;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: 'Muli';
            position: relative;
            height: 169px;
            width: 370px;
            max-width: calc(100% - 10px);
        }

        .social-panel button.close-btn {
            border: 0;
            color: #97A5CE;
            cursor: pointer;
            font-size: 20px;
            position: absolute;
            top: 5px;
            right: 5px;
        }

        .social-panel button.close-btn:focus {
            outline: none;
        }

        .social-panel p {
            background-color: #001F61;
            border-radius: 0 0 10px 10px;
            color: #fff;
            font-size: 14px;
            line-height: 18px;
            padding: 2px 17px 6px;
            position: absolute;
            top: 0;
            left: 50%;
            margin: 0;
            transform: translateX(-50%);
            text-align: center;
            width: 235px;
        }

        .social-panel p i {
            margin: 0 5px;
        }

        .social-panel p a {
            color: #FF7500;
            text-decoration: none;
        }

        .social-panel h4 {
            margin: 20px 0;
            color: #97A5CE;
            font-family: 'Muli';
            font-size: 14px;
            line-height: 18px;
            text-transform: uppercase;
        }

        .social-panel ul {
            display: flex;
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .social-panel ul li {
            margin: 0 10px;
        }

        .social-panel ul li a {
            border: 1px solid #DCE1F2;
            border-radius: 50%;
            color: #001F61;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50px;
            width: 50px;
            text-decoration: none;
        }

        .social-panel ul li a:hover {
            border-color: #FF6A00;
            box-shadow: 0 9px 12px -9px #FF6A00;
        }

        .floating-btn {
            border-radius: 26.5px;
            background-color: #001F61;
            border: 1px solid #001F61;
            box-shadow: 0 16px 22px -17px #03153B;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            line-height: 20px;
            padding: 12px 20px;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
        }

        .floating-btn:hover {
            background-color: #ffffff;
            color: #001F61;
        }

        .floating-btn:focus {
            outline: none;
        }
        


        @media screen and (max-width: 480px) {

            .social-panel-container.visible {
                transform: translateX(0px);
            }

            .floating-btn {
                right: 10px;
            }
        }
    </style>
    <!--	Title
	=========================================================-->

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
                            <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Frequently Asked Questions</b></h2>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="breadcrumb" class="float-left float-md-right">
                                <ol class="breadcrumb bg-transparent m-0 p-0">
                                    <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">FAQs</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Banner   --->

            <!--	Property Grid
		===============================================================-->
            <div class="full-row">
                <div class="container">
                <h1 >Frequently Asked Questions</h1>
                    <div class="row">

                        <div class="faqs-container">
                            <div class="faq active">
                                <h3 class="faq-title">
                                What types of properties are available on Dream House?
                                </h3>
                                <p class="faq-text">
                                Dream House offers a wide range of properties, including single-family homes, townhouses, condominiums, apartments, and commercial real estate. Our listings feature properties in various locations, sizes, and price ranges to meet the needs of a diverse range of buyers and renters.
                                </p>
                                <button class="faq-toggle">
                                    <i class="fas fa-chevron-down"></i>
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>

                            <div class="faq">
                                <h3 class="faq-title">
                                How can I search for properties on Dream House?
                                </h3>
                                <p class="faq-text">
                                You can search for properties on Dream House by using our advanced search filters, which allow you to specify criteria such as location, property type, price range, number of bedrooms and bathrooms, and more. You can also browse our featured properties and new listings to discover homes that meet your preferences.
                                </p>
                                <button class="faq-toggle">
                                    <i class="fas fa-chevron-down"></i>
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>

                            <div class="faq">
                                <h3 class="faq-title">
                                Can I sell my home through Dream House?
                                </h3>
                                <p class="faq-text">
                                Absolutely! Dream House offers a comprehensive listing service for homeowners who want to sell their property. Our team of experienced real estate agents will work with you to determine the value of your home, create a customized marketing plan, and manage the entire selling process from start to finish.
                                </p>
                                <button class="faq-toggle">
                                    <i class="fas fa-chevron-down"></i>
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>

                            <div class="faq">
                                <h3 class="faq-title">
                                Does Dream House offer financing options for homebuyers?
                                </h3>
                                <p class="faq-text">
                                While Dream House is not a lender, we work with a network of trusted partners who offer a variety of financing options to help you purchase your dream home. Our agents can connect you with a lender who can offer you competitive rates and terms that meet your needs.
                                </p>
                                <button class="faq-toggle">
                                    <i class="fas fa-chevron-down"></i>
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>

                            <div class="faq">
                                <h3 class="faq-title">
                                How can I contact Dream House if I have questions or need assistance?
                                </h3>
                                <p class="faq-text">
                                You can contact Dream House through our website, where you can submit a contact form and receive a response from our team within 24 hours. You can also call us directly at our customer service number, which is listed on our website. Our agents are available to assist you with any questions or concerns you may have.
                                </p>
                                <button class="faq-toggle">
                                    <i class="fas fa-chevron-down"></i>
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                        
                       

                        


                        <script>
                            const toggles = document.querySelectorAll('.faq-toggle');

                            toggles.forEach(toggle => {
                                toggle.addEventListener('click', () => {
                                    toggle.parentNode.classList.toggle('active');
                                });
                            });

                            // SOCIAL PANEL JS
                            const floating_btn = document.querySelector('.floating-btn');
                            const close_btn = document.querySelector('.close-btn');
                            const social_panel_container = document.querySelector('.social-panel-container');

                            floating_btn.addEventListener('click', () => {
                                social_panel_container.classList.toggle('visible')
                            });

                            close_btn.addEventListener('click', () => {
                                social_panel_container.classList.remove('visible')
                            });
                        </script>
                    </div>


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
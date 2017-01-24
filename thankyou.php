<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shiwebs Hosting and Development</title>
    
    <!-- owl carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css"/>

    <!-- slick slider css -->
    <link rel="stylesheet" href="css/slick.css">

    
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Roboto:100,400|Ubuntu:400,500,700" rel="stylesheet">
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    
    <!-- animte css -->
    <link rel="stylesheet" href="css/animate.css"/>
    
    <!-- style css -->
    <link rel="stylesheet" href="style.css"/>
    
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
</head>
<body class="error-page">

    <!-- preloader -->
    <div class="preloader-bg">
        <div class='preloader'>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <!--================================
        1.START HERO-SECTION
    =================================-->
    <section class="hk_hero_section">
        <!-- tiny header starts -->
        <div class="hk_tiny_header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact_email">
                            <span><i class="fa fa-clock-o"></i>24/7 Support</span><a href="tel:1234567890"><p>(66) 0993352348</p></a>
                        </div>
                        <div class="hk_contact_lang">
                            <ul>
                                
                                <li class="hk_login_modal">
                                    <a href="#"><span class="fa fa-lock"></span><p>Login</p></a>
                                    <div class="login_modal_wrapper">
                                        <form action="#">
                                            <div class="hk_input_wrapper">
                                                <input type="text" placeholder="Username">
                                                <span class="fa fa-user"></span>
                                            </div>
                                            <div class="hk_input_wrapper">
                                                <input type="password" placeholder="Password">
                                                <span class="fa fa-lock"></span>
                                            </div>
                                            <p>Forget Password? <a href="#">Click Here</a></p>
                                            <input class="hk_btn hk_login_btn" type="submit" value="Login Account">
                                        </form>
                                    </div>
                                </li>
                                <li class="lang">
                                    <a href="#"><span class="lng">eng</span> <span class="caret"></span></a>
                                    <ul class="hk_lang_dropdown">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Thai</a></li>
                                       
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <!-- tiny header ends -->
        
        <!-- main menu starts -->   
         <?php include("menu.php"); ?>
                  <!-- main menu ends -->
    </section>
    <!--================================
        1.END HERO-SECTION
    =================================-->

    <!--================================
        2.START BREADCRAM AREA
    =================================-->
    <section class="hk_breadcrumb">
        <div class="container">
            <div class="col-md-12">
                <div class="hk_breadcrumb_wrapper">
                    <div class="hk_breadcrumb_title">
                        <h1>Thank you</h1>
                    </div>
                    <div class="hk_breadcrumb_area">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Thank you</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
        2.END BREDCRAM AREA
    =================================-->


    <!--================================
        2.START ERROR PAGE AREA
    =================================-->
    <section class="jk_page_not_found hk_section_padding">
       <div class="container">
           <div class="row">
                <div class="col-md-12">
                    <div class="hk_huge_text"><p>Thank You</p></div>
                    <p class="hk_directory_text">You're order has been submited. You'll recive a email shortly.</p>

                    <!-- back to home btn -->
                    <a href="index.html" class="hk_btn hk_err_btn"> <span class="fa fa-long-arrow-left"></span>Back to Home</a>
                </div>
           </div>
       </div>
   </section>
    <!--================================
        2.END ERROR PAGE AREA
    =================================-->


    <!--================================
        7.START PARTNER-TESTIMONOAL
    =================================-->
    <section class="hk_promot_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hk_promot_text">
                        <h2>Have a pre-sale question for our packages?</h2>
                    </div>
                    <div class="hk_promot_btn">
                        <a href="#" class="hk_btn">Get Started Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
        8.START PARTNER-TESTIMONOAL
    =================================-->

    <!--================================
        9.START PARTNER-TESTIMONOAL
    =================================-->
    <footer>
       <?php include("footer.php"); ?>
    </footer>
    <!--================================
        9.START PARTNER-TESTIMONOAL
    =================================-->



    
    <!--//////////////////// JS GOES HERE ////////////////-->
    
    <!-- jquery latest version -->
    <script src="js/jquery-1.12.3.js"></script>
    
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- jquery easing 1.3 -->
    <script src="js/jquery.easing1.3.js"></script>
    
    <!-- Owl carousel js-->
    <script src="js/owl.carousel.min.js"></script>

    <!-- slick slider js -->
    <script src="js/slick.min.js"></script>
    
    <!-- waypoint js -->
    <script src="js/waypoints.min.js"></script>
    
    <!-- google map js -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    
    <!-- smoothscroll js -->
    <script src="js/SmoothScroll.chrome.js"></script>
    
    <!-- Main js -->
    <script src="js/main.js"></script>
</body>
</html>
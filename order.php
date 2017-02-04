<?php
if(isset($_GET) && $_GET['do'] == 'order') {
    // send e-mail to customer & sales@shiwebs.com
    $c_subject = 'Thank you for your order!';
    $c_message = 'Your order has been received, please complete the payment of 
                  the order so it can be processed quickly. If you have selected 
                  a domain that should be registered we will set it up so it is 
                  configured for use with our service at once. \n\n If you are using paypal,
                  Send the payment for the service '.$_POST['package'].' to sales@shiwebs.com 
                  with the domain '.$_POST['domain'].' as subject.\n\nFeel free to contact us
                  on sales@shiwebs.com at any time to discuss your order or complete the 
                  inital payment of services.
Order datails:
Name '.$_POST['fname.'].' '.$_POST['lname'].'
Address '.$_POST['address1'].' '.$_POST['address2'].'
City '.$_POST['city'].', Zipcode '.$_POST['zipcode'].'
Country '.$_POST['country'].'

Phone '.$_POST['phone'].'
Package '.$_POST['package'].'
Domain '.$_POST['domain'].', Register '.$_POST['register_domain'].'
DNS '.$_POST['default_dns'].'

E-mail '.$_POST['email'].'
Password '.$_POST['password'].'

Best Regards,
The Shiwebs Team';

    $a_subject = 'A new order has been receieved';
    $a_message = 'A new order has been created, awaiting payment.
Order datails:
Name '.$_POST['fname.'].' '.$_POST['lname'].'
Address '.$_POST['address1'].' '.$_POST['address2'].'
City '.$_POST['city'].', Zipcode '.$_POST['zipcode'].'
Country '.$_POST['country'].'

Phone '.$_POST['phone'].'
Package '.$_POST['package'].'
Domain '.$_POST['domain'].', Register '.$_POST['register_domain'].'
DNS '.$_POST['default_dns'].'

E-mail '.$_POST['email'].'
Password '.$_POST['password'];
        
        $header = "From: Shiwebs <sales@shiwebs.com>\r\n";

        mail($_POST['email'], $c_subject, $c_message, $header);
        mail('timh@shiwebs.com', $a_subject, $a_message, $header);

        header('Location: /thankyou.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shiwebs Development and Hosting</title>
    
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
<body class="checkout-page">

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
                        <h1>Order</h1>
                    </div>
                    <div class="hk_breadcrumb_area">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Order</li>
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
        1.ORDER AREA
        =================================-->
<div class="container">
</div>
        <section class="hk_chekout_area hk_section_padding">
        <div class="container">
            <div class="row">
                <form action="order.php?do=order" method="post">
<div class="col-md-3"></div>
                <div class="col-md-6 col-sm-6">
                    <div class="hk_form_wrapper">
                    <div class="hk_select_wrapper">
                        <label for="package">Package</label>
                        <select class="hk_checkout_input package" name="package" id="package">
                            <option selected>-- Select Package --</option>
                            <option value="WebHosting">Shared WebHosting b500/mo</option>
                            <option value="VPS3000">VPS Hosting b3,000/mo</option>
                            <option value="VPS5000">VPS Hosting b5,000/mo</option>
                            <option value="VPS10000">VPS Hosting b10,000/mo</option>
                        </select>
                        <span class="caret"></span>
                    </div>
                    <label for="domain">Domain</label>
                    <input class="hk_checkout_input domain" name="domain" id="domain" type="text" placeholder="Domain">
                    <div class="hk_select_wrapper">
                    <label for="register_domain">Register Domain</label>
                        <select class="hk_checkout_input register" name="register_domain" id="register_domain">
                            <option value="Yes" selected>Yes, register domain</option>
                            <option value="No">No, domain already registered</option>
                        </select>
                        <input type="checkbox" value="default_dns" name="default_dns" checked>Setup basic DNS-records
                        <span class="caret"></span>
                    </div>
                            <input class="hk_checkout_input left hk_input_half_width" type="text" placeholder="First Name" name="fname">
                            <input class="hk_checkout_input hk_input_half_width" type="text" placeholder="Last Name" name="lname">
                            <input class="hk_checkout_input left hk_input_half_width" type="text" placeholder="Email" name="email">
                            <input class="hk_checkout_input hk_input_half_width" type="text" placeholder="Phone Number" name="phone">
                            <input class="hk_checkout_input address" type="text" placeholder="Address Line 1" name="address1">
                            <input class="hk_checkout_input address" type="text" placeholder="Address Line 2" name="address2">
                            <input class="hk_checkout_input hk_input_half_width left" type="text" placeholder="City" name="city">
                            <input class="hk_checkout_input hk_input_half_width" type="text" placeholder="Zip Code" name="zipcode">
                            <!-- <div class="hk_select_wrapper hk_input_half_width">
                                <select name="package" id="package">
                                    <option value="Package Selection">Package Selection</option>
                                    <option value="Web Hosting">Web Hosting</option>
                                    <option value="VPS Hosting">VPS Hosting</option>
                                    <option value="VPN Service">VPN Service</option>
                                                    </select>
                                <span class="caret"></span>
                            </div>
                             -->
                            <div class="hk_select_wrapper">
                                <select class="hk_checkout_input" name="country" id="country">
                                    <option value="Country">Country</option>
                                    <option value="United States">United States</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Srilanka">Srilanka</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Africa">Africa</option>
                                </select>
                                <span class="caret"></span>
                            </div>
                            <input class="hk_checkout_input hk_input_half_width left" type="text" placeholder="Password" name="password">
                            <input class="hk_checkout_input hk_input_half_width" type="text" placeholder="Verify Password" name="verify_password">
<br/>
                            <input type="submit" value="Process order" class="hk_btn hk_proccen_btn">
                        </form>
                    </div>
                </div>

<!--
                <div class="col-md-6 col-sm-6">
                                     
                                       <form action="#">
                        <div class="hk_purchase_procced_area">
                        
                        <ul>
                            <li>
                                <span class="title subtotal">Subtotal:</span><span class="price">$29.97</span>
                            </li>
                            <li>
                                <span class="title tax">Estimated Taxes & Fees:</span><span class="price">$0.03</span>
                            </li>
                            <li>
                                <span class="title discount">Discount:</span><span class="price">$1</span>
                            </li>
                            <li class="hk_total">
                                <span class="title">Total:</span><span class="price">$29.0</span>
                            </li>
                            <li class="hk_payment hk_credit_card">
                                    <div class="hk_left_icon">
                                        <input type="radio" id="ceditcard" name="payment">
                                        <label for="ceditcard">
                                            <i class="hk_check"></i>
                                            <span>Credit Card</span>
                                        </label>
                                    </div>
                                    <ul class="credit_cards">
                                        <li><a href="#"><img src="images/card1.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="images/card2.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="images/card3.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="images/card4.jpg" alt=""></a></li>
                                    </ul>
                                </li>
                                <li class="hk_payment hk_credit_card">
                                    <div class="hk_left_icon">
                                        <input type="radio" id="paypal" name="payment">
                                        <label for="paypal">
                                            <i class="hk_check"></i>
                                            <span>Via PayPal</span>
                                        </label>
                                    </div>
                                    <div class="credit_cards">
                                        <a href="#"><img src="images/paypal.png" alt="paypal"></a>
                                    </div>
                                </li>
                            </ul>
                        <div class="hk_puchase_wrapper">
                            <a href="thankyou.html" class="hk_btn hk_proccen_btn">Order</a>
                        </div>
                    </div>
-->
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================================
        2.END BREDCRAM AREA
    =================================-->

    <!--================================
        7.START PARTNER-TESTIMONOAL
    =================================-->
    <section class="hk_promot_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hk_promot_text">
                        <h2>Have a pre-sale question for our packages and services?</h2>
                    </div>
                    <div class="hk_promot_btn">
                        <a href="contact.html" class="hk_btn">Contact Us</a>
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
   <?php include("footer.php"); ?>
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

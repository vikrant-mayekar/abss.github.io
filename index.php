<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);


    // fetch testimonials
    $testi = mysqli_query($con,"SELECT * FROM testimonials");

    //fetch blog
    $blog = mysqli_query($con,"SELECT * FROM blog");


     //fetch services
    $services = mysqli_query($con,"SELECT * FROM services ORDER BY id DESC LIMIT 3");

?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title><?php echo $setting['site_name']; ?>  Amii Bussiness Support Solution PVT LTD</title>
<meta name="description" content="We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business.">
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="assets/css/color.css" rel="stylesheet">

<!-- Gallery File-->

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=601e75803d01430011c105c8&product=image-share-buttons' async='async'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <!-- Add CSS for pop-up -->
    <style>
        /* Pop-up container style */
        .popup-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 9999;
            animation: fade-in 0.5s ease-out;
        }

        /* Close button style */
        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            font-weight: bold;
            color: #888;
            cursor: pointer;
        }

        /* Animation keyframes */
        @keyframes fade-in {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fade-out {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }
    </style>
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>        
    </div>
    <div class="popup-container" id="popupContainer">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2><strong>Welcome to ABSS - <a href="#" style="color: #55acee;"> Amii Businsess Support Solution Pvt Ltd.</a></strong></h2>
        <p>We are a leading provider of business support solutions, offering a wide range of services to businesses of all sizes. Our team of experienced professionals is dedicated to providing you with the best possible support, so you can focus on growing your business.

Whether you need help with administrative tasks, IT support, or marketing, we can help. We also offer a variety of other services, such as bookkeeping, payroll, and customer service.</p>
    </div>

    <!-- Add JavaScript for pop-up -->
    <script>
        // Delay in milliseconds before showing the pop-up (3 seconds in this example)
        var delayInMilliseconds = 3000;
        // Show the pop-up with animation on page load
        window.onload = function() {
            var popup = document.getElementById("popupContainer");
            popup.style.display = "block";
        }

        // Close the pop-up with animation
        function closePopup() {
            var popup = document.getElementById("popupContainer");
            popup.style.animation = "fade-out 0.5s ease-out";
            setTimeout(function() {
                popup.style.display = "none";
            }, 500);
        }
    </script>
   <?php include "header.php"; ?>
    
    <!-- Hidden Sidebar -->
    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="content-wrapper">
                <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                <div class="text-widget sidebar-widget">
                    <div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></div>
                    <div class="text">Demoralized by the charms of pleasure of the moment so blinded by desire that they cannot foresees the pain.</div>
                </div>
                <!-- PDF Widget -->
                <div class="pdf-widget sidebar-widget">
                    <div class="row">
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                    </div>                            
                </div>
                <!-- Contact Widget -->
                <div class="contact-widget">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-cursor"></span></div>
                        <div class="text">Tower no 4, 6th floor, <br> Office No 601 CBD Belapur Railway Sation Complex,<break> C.B.D Belapur, Navi Mumbai - 400614</div>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-calling"></span></div>
                        <div class="text"><strong>Phone</strong><a href="tel:(+91)9819894951">(+91) 9819894951 </a></div>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-mail"></span></div>
                        <div class="text"><strong>Email</strong><a href="tel:(+91)9819894951">contact@abss.co.in</a></div>
                    </div>
                </div>
                <!-- Link Btn -->
                <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i class="flaticon-up-arrow"></i>Purchase Our Theme </span></a></div>
            </div>
        </div>
    </section>
    


    <!-- Bnner Section -->
    <section class="banner-section">
        
    <!-- Slide Item 1...-->
    <section class="banner-slider">
        <div class="swiper-wrapper">
            <!-- Slide Item -->
            <div class="swiper-slide">
                <div class="content-outer">
                    <div class="content-box">
                        <div class="inner text-center">
                            <!--<h4>ABSS</h4>-->
                            <h1>Amii Business Support Solutions Pvt Ltd</h1>
                            <div class="text">Empowering Businesses with <a href="#" style="color: #55acee;"> BPO Solutions.</a></div>
                            <div class="link-box">
                                <a href="#about-section" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>More Details</span></a>
                            </div>
                        </div>
                        </div>
                        
                    <div class="gif-container">
                        <img src="assets/images/slider/1.gif" alt="GIF">
                    </div>
                </div>

            </div>


            <!--Slide Item 2....-->

             <div class="swiper-slide">
                <div class="content-outer">
                    <div class="content-box">
                        <div class="inner text-center">
                            
                            <h1>Operate <a href="#" style="color: #55acee;"> Services</a></h1>
                            <div class="text">Operating core business services and functions to embed continuous advantage.</div>
                            <div class="link-box">
                                <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>More Details</span></a>
                            </div>
                        </div>
                        </div>
                        
                    <div class="gif-container">
                        <img src="assets/images/slider/2.gif" alt="GIF">
                    </div>
                </div>
            </div>
            
            <!--Slide Item 3...-->
            <div class="swiper-slide">
                <div class="content-outer">
                    <div class="content-box">
                        <div class="inner text-center">
                            
                            <h1>We Make Digital <a href="" style="color: #55acee;">Human</a></h1>
                            <div class="text">To take a trivial example, which of us ever undertakes laborious.</div>
                            <div class="link-box">
                                <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>More Details</span></a>
                            </div>
                        </div>
                        </div>
                        
                    <div class="gif-container">
                        <img src="assets/images/slider/3.gif" alt="GIF">
                    </div>
                </div>
            </div>

            <!--Slide Item 4....-->
            <div class="swiper-slide">
                <div class="content-outer">
                    <div class="content-box">
                        <div class="inner text-center">
                            
                            <h1>We make Digital <a href="" style="color: #55acee;">Human</a></h1>
                            <div class="text">To take a trivial example, which of us ever undertakes laborious.</div>
                            <div class="link-box">
                                <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>More Details</span></a>
                            </div>
                        </div>
                        </div>
                        
                    <div class="gif-container">
                        <img src="assets/images/slider/4.gif" alt="GIF">
                    </div>
                </div>
            </div>

            <!--Slide Item 5.... -->
            <div class="swiper-slide">
                <div class="content-outer">
                    <div class="content-box">
                        <div class="inner text-center">
                            
                            <h1>Agility and Control:<a href="" style="color: #55acee;">Moving Beyond Conventional Outsourcing</a></h1>
                            <div class="text">Move Beyond Conventional Outsourcing for <strong style="color: #55acee;"> Agility and Control</strong></div>
                            <div class="link-box">
                                <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>More Details</span></a>
                            </div>
                        </div>
                        </div>
                        
                    <div class="gif-container">
                        <img src="assets/images/slider/5.gif" alt="GIF">
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="banner-slider-nav style-two">
            <div class="banner-slider-control banner-slider-button-prev"><span><i class="far fa-angle-left"></i>Prev</span></div>
            <div class="banner-slider-control banner-slider-button-next"><span>Next<i class="far fa-angle-right"></i></span> </div>
        </div>
        <style>/*styling for next & prev buttons*/
            .banner-slider-nav.style-two {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background-color: #f0f0f0;
                padding: 5px;
                border-radius: 5px;
            }

            .banner-slider-control {
                cursor: pointer;
                color: #555;
                font-size: 12px;
                font-weight: bold;
                padding: 3px 5px;
                margin: 0 5px;
                border-radius: 3px;
                background-color: #ccc;
                transition: background-color 0.3s;
            }

            .banner-slider-control:hover {
                background-color: #aaa;
            }

            .banner-slider-button-prev {
                margin-right: 5px;
            }

            .banner-slider-button-next {
                margin-left: 5px;
            }

            .banner-slider-button-prev span,
            .banner-slider-button-next span {
                display: flex;
                align-items: center;
            }

            .banner-slider-button-prev i,
            .banner-slider-button-next i {
                margin-right: 3px;
            }
        </style>
    </section>
    <!-- End Bnner Section -->

    <!-- Pop Up Function-->
    
  <!-- pop up end-->
<!-- About Section -->
<section class="about-section" style="background-image: url(assets/images/background/bg21.jpg);">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <div class="sub-title">Company</div>
                        <h3><b>Outsource your Challenges,<br> Grow Your Business With<br><h3 style= "color: #000080;">Amii Bussiness Support Solution Pvt Ltd. </b></h3></h3>
                        <div class="text">ABSS, <strong style ="color: #000080">Established in 1995</strong>, is a leading provider of business support solutions. With a focus on BPO/BPM and Background Verification services, we are dedicated to creating job opportunities in the domestic market.</div>
                        
                        <a href="about.php" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                                <div class="icon"><span class="fa fa-users"></span></div>
                                <div class="content">
                                    <span><h4>Customer Services</h4></span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                                <div class="icon"><span class="fa fa-wrench"></span></div>
                                <div class="content">
                                    <span><h4>Technical Support</h4></span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1700ms">
                            <div class="icon"><span class="fa fa-users"></span></div>
                                <div class="content">
                                    <span><h4>Human Resource</h4></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1900ms">
                            <div class="icon"><span class="fa fa-exchange"></span></div>
                                <div class="content">
                                    <span><h4>In & Outbound Process</h4></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image wow fadeInRight" data-wow-duration="1500ms"><img src="assets/images/gif/about.jpg" alt="about us"></div>
                </div>
            </div>
        </div>
    </section>
    <!--About end-->

    
<!-- Whychooseus Section -->
<section class="Whychooseus-section">
  <div class="auto-container">
    <div class="sec-title text-center">
      <div class="sub-title text-center">Why Choose Us</div>
      <h2>Let ABSS Help You Take Your Business to the Next Level</h2>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 why-choose-block">
        <div class="inner-box">
          <div class="icon"><span class="count">01</span><i class="fas fa-lock"></i></div>
          <div class="content">
            <h4>High Information Security Standards</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 why-choose-block">
        <div class="inner-box">
        <div class="icon"><span class="count">02</span><i class="fas fa-tasks"></i></div>
          <div class="content">
            <h4>Proven Track Record of Handling Key Data Processing Projects</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 why-choose-block">
        <div class="inner-box">
        <div class="icon"><span class="count">03</span><i class="fas fa-dollar-sign"></i></div>
          <div class="content">
            <h4>Low Cost & High Accuracy Services</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 why-choose-block">
        <div class="inner-box">
          <div class="icon"><span class="count">04</span><i class="fas fa-clock"></i></div>
          <div class="content">
            <h4>Quick Turnaround Time</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- Work-process Section -->
    <section class="work-process-section">
        <div class="bg" style="background-image: url(assets/images/background/peakpx.jpg);"></div>
        
        <div class="auto-container">
            <div class="sec-title text-center light">
                <div class="sub-title text-center" style="color: #000080;"><b> Our Servcies </b></div>
                <h2 style="color: #000080;">We offer Everything from Customer Service to <br> Technical Support to Marketing. </h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="count">01</div>
                        <div class="icon"><span class="fa fa-cogs"></span></div>
                        <h4>BPO / Data Center <br> Management</h4>
                        
                    </div>
                    
                </div>
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInDwon" data-wow-duration="1500ms">
                        <div class="count">02</div>
                        <div class="icon"><span class="fa fa-check-circle"></span></div>
                        <h4>Background <br> Verifications</h4>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="count">03</div>
                        <div class="icon"><span class="fas fa-money-bill-alt"></span></div>
                        <h4>Retail Banking <br> Operations </h4>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                        <div class="count">04</div>
                        <div class="icon"><span class="fa fa-money-check"></span></div>
                        <h4>Cheque Clearance<br> Process</h4>
                        
                    </div>
                </div>
            </div>
            <div class="bottom-text">Reach Out to ABSS for a Free Consultation. We'll Show You How We Can Help.<a href="contact.php" class="get-in-touch"><u>Get In Touch</u></a></div>
            <style>
                .bottom-text .get-in-touch {
                    font-size: 25px;
                }

                .bottom-text .get-in-touch:hover {
                    color: lightblue;
                    text-decoration: underline;
                }
            </style>
        </div>
    </section>


    <!-- Testimonials Section --
    <section class="testimonials-section">
  <div class="auto-container">
    <div class="sec-title text-center">
      <div class="sub-title text-center">Testimonials</div>
      <h2>1000+ Happy Customers Said</h2>
    </div>
    <div class="theme_carousel owl-theme owl-carousel">
      <?php
        while($row=mysqli_fetch_array($testi)){
      ?>
        <div class="testimonial-block">
          <div class="inner-box">
            <div class="text"><?php echo $row['descrip']; ?></div>
            <div class="author-thumb">
              <img src="admin/images/testimonial/<?php echo $row['img']; ?>" alt="">
              <div class="quote"><span class="flaticon-right-quote"></span></div>
            </div>
            <h4><?php echo $row['title']; ?></h4>
            <div class="designation"><?php echo $row['designation']; ?></div>
            <div class="rating">
              <span class="flaticon-star-1"></span>
              <span class="flaticon-star-1"></span>
              <span class="flaticon-star-1"></span>
              <span class="flaticon-star-1"></span>
              <span class="flaticon-star-1"></span>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>-->


    

    <!-- Map Section -->
  <section class="map-section">
        <div class="contact-map">
            <div style="width: 100%">
                <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Tower%204%20belapur+(ABSS%20Amii%20Business%20Support%20Solutions%20Pvt%20Ltd)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    <a href="https://www.maps.ie/population/">Population calculator map</a>
                </iframe>
            </div>
        </div>
    </section> 



    <?php include "footer.php"; ?>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/lazyload.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.polyglot.language.switcher.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>
<script src="path/to/script.js"></script>
<script src="assets/js/script.js"></script>


</body>

</html>


<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
</head>
    <!-- Newsletter --
    <section class="newsletter-section style-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-5">
                    <h3><span class="flaticon-email"></span> Subscribe Our Newsletter <br> & Get Updates.</h3>
                </div>
                <div class="col-lg-7">
                    <div class="newsletter-form">
                        <form action="subscribe.php" method="post">
                            <div class="form-group">
                                <i class="far fa-envelope-open"></i>
                                <input type="email" placeholder="Enter Your Email Address..."  name="email">
                                <button type="submit" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow" name="submit"></i>Subscribe</span></button>
                                <label class="subscription-label" for="subscription-email"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        
    </section>-->
    <section class="newsletter-section style-two">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-5">
                <h3><span class="flaticon-email"></span> Subscribe Our Newsletter <br> & Get Updates.</h3>
            </div>
            <div class="col-lg-7">
                <div class="newsletter-form">
                    <form action="subscribe.php" method="post" id="newsletter-form">
                        <div class="form-group">
                            <i class="far fa-envelope-open"></i>
                            <input type="email" placeholder="Enter Your Email Address..."  name="email" required>
                            <button type="submit" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow" name="submit"></i>Subscribe</span></button>
                            <label class="subscription-label" for="subscription-email"></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Listen for form submission
    document.getElementById("newsletter-form").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form from submitting

        // Display the pop-up message
        alert("Thank you for subscribing to our newsletter!");

        // You can also customize the appearance of the pop-up message using a modal or other UI element.
    });
</script>
<!--Main Footer-->
    <footer class="main-footer">
        <div class="upper-box">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="widget contact-widget style-two">
                            <h4>Do You Have Any Question? Please <br> Contact Our Team</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="wrapper-box">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-calling"></span></div>
                                            <div class="text"><strong>Phone</strong><a href="tel:<?php echo $setting['phone']; ?>"><?php echo $setting['phone']; ?></a></div>
                                        </div>
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text"><strong>Email</strong><a href="mailto:<?php echo $setting['email']; ?>"><?php echo $setting['email']; ?></a></div>
                                        </div>
                                        <ul class="social-icon">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <!--<li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="icon-box">
                                        <div class="icon"><span class="flaticon-mail"></span></div>
                                        <div>
                                            <div class="text"><strong>Working Hrs</strong>09:30am - 06:30pm</div>
                                            
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget links-widget">
                                    <h4 class="widget_title">Useful Links</h4>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="about.php">About Company</a></li>
                                            <li><a href="contact.php">Get In Touch</a></li>
                                           <!--<li><a href="service.php">Our Services</a></li>-->
                                            <li><a href="blog.php">Carrers</a></li>
                                            <li><a href="privacy.php">Privacy Policies</a></li>
                                            <li><a href="terms.php">Terms & Conditions</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget instagram-widget">
                                    <h4 class="widget_title">Our Gallery</h4>
                                    <!-- gallery-wrapper -->
                                    <div class="wrapper-box">
                                        <div class="image">
                                            <img src="assets/images/gallery/1.jpg" alt="">
                                            <div class="overlay-link">
                                                <a href="assets/images/gallery/1.svg" class="lightbox-image" data-fancybox="gallery">
                                                        <span class="fa fa-eye"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/gallery/2.jpg" alt="">
                                            <div class="overlay-link">
                                                <a href="assets/images/gallery/2.svg" class="lightbox-image" data-fancybox="gallery">
                                                    <span class="fa fa-eye"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/gallery/3.jpg" alt="">
                                            <div class="overlay-link">
                                                <a href="assets/images/gallery/3.svg" class="lightbox-image" data-fancybox="gallery">
                                                    <span class="fa fa-eye"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/gallery/4.jpg" alt="">
                                            <div class="overlay-link">
                                                <a href="assets/images/gallery/4.svg" class="lightbox-image" data-fancybox="gallery">
                                                    <span class="fa fa-eye"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/gallery/5.jpg" alt="">
                                            <div class="overlay-link">
                                                <a href="assets/images/gallery/5.svg" class="lightbox-image" data-fancybox="gallery">
                                                    <span class="fa fa-eye"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/gallery/6.jpg" alt="">
                                            <div class="overlay-link">
                                                <a href="assets/images/gallery/6.svg" class="lightbox-image" data-fancybox="gallery">
                                                    <span class="fa fa-eye"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        $(document).ready(function() {
                                            $('.lightbox-image').fancybox({
                                                openEffect: 'fade',
                                                closeEffect: 'fade'
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>               
    </footer>
    <!--End Main Footer-->

    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row m-0 align-items-center justify-content-between">
                <div class="copyright-text">Copyright © 2023 <?php echo $setting['site_name']; ?> | Amii Business Support Solutions Pvt Ltd. All Right Reserved</a></div>
                <ul class="menu">
                    <li><a href="privacy.php">Privacy Policies</a></li>
                    <li><a href="terms.php">Terms & Conditions </a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>            
        </div>
    </div>
	
</div>
<!--End pagewrapper-->
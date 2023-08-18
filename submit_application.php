<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'php-cms';
    $conn = new mysqli($host, $username, $password, $database);
  
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Get the form data
  $name = $_POST["name"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $job_position = $_POST["job_position"];
    $cover_letter = $_POST["cover_letter"];
    
  // Insert the form data into the database
  $sql = "INSERT INTO applicant (fullname, Email, phone, category, cover) VALUES ('$name', '$email', '$contact', '$job_position', '$cover_letter')";
  
  if ($conn->query($sql) === TRUE) {
    echo "Application submitted successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  // Close the database connection
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Our Services - <?php echo $setting['site_name']; ?></title>
<meta name="description" content="We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business.">
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="assets/css/color.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=601e75803d01430011c105c8&product=image-share-buttons' async='async'></script>

</head>

<body>
    <!-- End Main Header -->
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
           
                <!-- Link Btn -->
                <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i class="flaticon-up-arrow"></i>Purchase Our Theme </span></a></div>
            </div>
        </div>
    </section>
    
 
    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg12.jpg);">
        <!--<div class="background-text">
            <div data-parallax='{"x": 100}'>
                <div class="text-1">transida</div>
                <div class="text-2">transida</div>
            </div>                
        </div> -->
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Application</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Career</li>
                    </ul>
                </div>                    
            </div>
        </div>
    </section>
    <div class="container">
        <h1>Recruitment Application Form</h1>
        <!--<form action="submit_application.php" method="post">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="tel" class="form-control" id="contact" name="contact" placeholder="Enter your contact number" required>
            </div>
            <div class="form-group">
                <label for="job_position">Job Position</label>
                <select class="form-control" id="job_position" name="job_position">
                    <option value="Software Engineer">Software Engineer</option>
                    <option value="Data Scientist">Data Scientist</option>
                    <option value="Web Developer">Web Developer</option>
                    <option value="UI/UX Designer">UI/UX Designer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cover_letter">Cover Letter</label>
                <textarea class="form-control" id="cover_letter" name="cover_letter" rows="5"></textarea>
            </div>
            <button type="submit" name="publise" class="btn btn-primary">Submit</button>
</form>-->
<form action="submit_application.php" method="post">
    <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
        <!--<span class="validation-message">Please enter your full name.</span>-->
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
        <!--<span class="validation-message">Please enter a valid email address.</span>-->
    </div>
    <div class="form-group">
        <label for="contact">Contact</label>
        <input type="tel" class="form-control" id="contact" name="contact" placeholder="Enter your contact number" required>
        <!--<span class="validation-message">Please enter a valid phone number.</span>-->
    </div>
    <div class="form-group">
        <label for="job_position">Job Position</label>
        <select class="form-control" id="job_position" name="job_position" required>
            <option value="Customer Service Executive">Customer Service Executive</option>
            <option value="Operations Team Leader">Operations Team Leader</option>
            <option value="Operations Assistant Manager">Operations Assistant Manager</option>
            <option value="Operations Manager">Operations Manager</option>
            <option value="Quality Analyst">Quality Analyst</option>
            <option value="Trainer">Trainer</option>
            <option value="Hr Recruiter">Hr Recruiter</option>
            <option value="Hr Operations">Hr Operations</option>
            <option value="IT">IT</option>
            <option value="Other">Other</option>
        </select>
    </div>
    <div class="form-group">
        <label for="cover_letter">Cover Letter</label>
        <textarea class="form-control" id="cover_letter" name="cover_letter" rows="5" required></textarea>
        <!--<span class="validation-message">Please enter your cover letter.</span>-->
    </div>
    <button type="submit" name="publise" class="btn btn-primary">Submit</button>
</form>
  </body>
</html>
<?php
include('conn.php');
session_start();

if(isset($_POST['submit'])){
    $ad_email = mysqli_real_escape_string($con, $_POST['ad_email']);
    $ad_pass = mysqli_real_escape_string($con, $_POST['ad_pass']);
    $check = mysqli_query($con, "SELECT * FROM admin WHERE ad_email='$ad_email' AND ad_password='$ad_pass'");
    
    if(mysqli_num_rows($check) > 0){
        $check_fetch = mysqli_fetch_array($check);
        
        if(isset($check_fetch['ad_id']) && $check_fetch['ad_id'] !== ''){
            $_SESSION['ad_id'] = $check_fetch['ad_id'];
            header('location:index.php');
            exit();
        }
    }
  // Display error message for incorrect email or password
  $error = "Invalid email or password";

}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="robots" content="noindex" />
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Custom Styles -->
  <style>
    body {
      background-image: url('/assets/images/logo/abslogo.png');
      background-size: cover;
      background-repeat: no-repeat;
      font-family: 'Source Sans Pro', sans-serif;
    }

    .login-box {
      margin: 100px auto;
      max-width: 360px;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      animation: fadeIn 1s ease-in-out;
    }

    .login-logo {
      text-align: center;
      margin-bottom: 20px;
    }

    .login-logo img {
      width: 150px;
      animation: fadeInUp 1s ease-in-out;
    }

    .login-card-body {
      padding: 0px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-control {
      border-radius: 3px;
    }

    .btn-primary {
      background-color: #55acee;
      border-color: #55acee;
      border-radius: 3px;
      padding: 10px 20px;
      font-size: 16px;
      font-weight: bold;
      animation: fadeInUp 1s ease-in-out;
    }

    .btn-primary:hover {
      background-color: #000080;
      border-color: #000080;
    }

    .forgot-password {
      text-align: right;
      margin-top: 10px;
      animation: fadeInUp 1s ease-in-out;
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
<div class="login-box">
  <div class="login-logo">
    <img src="logo.png" alt="Logo">
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <h3 class="text-center" >Welcome Back!</h3>

      <form method="post">
        <div class="form-group">
          <input type="email" name="ad_email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
          <input type="password" name="ad_pass" class="form-control" placeholder="Password" required>
        </div>
        <div class="row">
          <div class="col-12">
          <button type="submit" name="submit" class="btn btn-primary btn-block" style="color: whitesmoke;">Sign In</button>
          </div>
        </div>
        <div class="row forgot-password">
          <div class="col-12 text-right">
            <a href="forgot-password.php">Forgot Password?</a>
          </div>
        </div>
      </form>
      <?php if(!empty($error)): ?>
        <p><?php echo $error; ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Custom JavaScript -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const loginBox = document.querySelector(".login-box");
    const logo = document.querySelector(".login-logo img");
    const form = document.querySelector("form");
    const buttons = document.querySelectorAll("button");

    loginBox.classList.add("animated");
    logo.classList.add("animated");
    buttons.forEach(button => button.classList.add("animated"));

    loginBox.classList.add("fadeIn");
    logo.classList.add("fadeInUp");
    buttons.forEach(button => button.classList.add("fadeInUp"));
  });
</script>
</body>
</html>
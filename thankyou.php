<?php

// Check if the user is coming from the contact form
if (isset($_GET['from_contact_form'])) {

  // Set the thank you message
  $message = "Thank you for your message. We will be in touch shortly.";

} else {

  // Redirect to the home page
  header('Location: index.php');

}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Thank You</title>
</head>
<body>
  <h1>Thank You</h1>
  <p><?php echo $message; ?></p>
</body>
</html>

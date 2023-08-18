<?php
// Database configuration
require_once 'config.php';

// Check if image file was uploaded successfully
if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
    $imageAlt = $_POST["alt"];
    $imageName = $_FILES["image"]["name"];
    $imageTmp = $_FILES["image"]["tmp_name"];
    $imagePath = "uploads/" . $imageName;

    // Save image to the "uploads" folder
    move_uploaded_file($imageTmp, $imagePath);

    // Insert image data into the database
    $query = "INSERT INTO img (image_url, image_alt)
              VALUES ('$imagePath', '$imageAlt')";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Error uploading image: " . mysqli_error($conn);
    } else {
        echo "Image uploaded successfully!";
    }
}

mysqli_close($conn);
header("Location: imp.php"); // Redirect to the gallery page
exit;
?>

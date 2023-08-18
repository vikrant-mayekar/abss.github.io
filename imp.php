<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .gallery-item {
            margin: 10px;
        }

        .gallery-item img {
            width: 300px;
            height: 200px;
            object-fit: cover;
        }

        .admin-section {
            margin: 20px 0;
            text-align: center;
        }

        .admin-form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Gallery</h1>

    <div class="gallery">
        <?php
        // Fetch and display images from the database
        require_once 'config.php';

        $query = "SELECT * FROM images";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="gallery-item">';
                echo '<img src="' . $row['image_url'] . '" alt="' . $row['image_alt'] . '">';
                echo '</div>';
            }
        } else {
            echo '<p>No images found.</p>';
        }

        mysqli_close($conn);
        ?>
    </div>

    <div class="admin-section">
        <h2>Admin Section</h2>

        <form class="admin-form" action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image" id="image">
            <input type="text" name="alt" placeholder="Image Alt Text">
            <input type="submit" name="Upload" value="Upload">
        </form>

        <!-- Additional admin functionality (e.g. delete images) can be added here -->
    </div>

</body>
</html>
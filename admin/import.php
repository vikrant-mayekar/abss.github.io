<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "php-cms";

// Create database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection is successful
if (!$conn) {
    die("Error connecting to the database: " . mysqli_connect_error());
}

// Function to execute database queries
function executeQuery($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    return $result;
}

// Function to create the table in the database
function createTable()
{
    $query = "CREATE TABLE IF NOT EXISTS csv_data (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        phone VARCHAR(20) NOT NULL
    )";

    return executeQuery($query);
}

// Function to insert CSV data into the database
function insertData($name, $email, $phone)
{
    $query = "INSERT INTO csv_data (name, email, phone)
              VALUES ('$name', '$email', '$phone')";

    return executeQuery($query);
}

// CSV import logic
if (isset($_POST["Import"])) {
    $filename = $_FILES["file"]["tmp_name"];

    if ($_FILES["file"]["size"] > 0) {
        $file = fopen($filename, "r");
        $header = true; // Skip header row

        // Create the table in the database
        createTable();

        while (($data = fgetcsv($file, 10000, ",")) !== FALSE) {
            if ($header) {
                $header = false;
                continue;
            }
            
            $name = mysqli_real_escape_string($conn, $data[0]);
            $email = mysqli_real_escape_string($conn, $data[1]);
            $phone = mysqli_real_escape_string($conn, $data[2]);
            
            // Insert data into the database
            insertData($name, $email, $phone);
        }

        fclose($file);
        //echo "CSV data imported successfully!";
    }
}

// Pagination logic
$page = isset($_GET['page']) ? $_GET['page'] : 1; // Current page number
$limit = 10; // Records to display per page
$start = ($page - 1) * $limit; // Offset of the first record to display

// Count total number of records
$totalData = mysqli_num_rows(executeQuery("SELECT * FROM csv_data"));

// Get records for the current page
$query = "SELECT * FROM csv_data LIMIT $start, $limit";
$result = executeQuery($query);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php include "title.php"; ?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">
 <!-- Navbar -->
 <?php include "topbar.php"; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include "sidebar.php"; ?>

  <div class="content-wrapper"><br/>
    <h2>CSV Data Import</h2>

    <!-- HTML form to upload CSV file -->
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" name="Import" value="Import">
    </form>

    <?php
    // Display the imported CSV data in a table format
    if (mysqli_num_rows($result) > 0) {
        echo "<h3>Imported Data:</h3>";

        // Table filter
        echo '<input type="text" id="myInput" onkeyup="filterTable()" placeholder="Search for names.."><br>';

        echo "<table id='myTable'>";
        echo "<thead><tr><th>id</id><th>Name</th><th>Email</th><th>Phone</th></tr></thead>";
        echo "<tbody>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";

        // Pagination
        $totalPages = ceil($totalData / $limit);
        echo "<br>";
        echo "<ul class='pagination'>";
        if ($page > 1) {
            echo "<li class='page-item'><a class='page-link' href='?page=" . ($page - 1) . "'>Previous</a></li>";
        }
        for ($i = 1; $i <= $totalPages; $i++) {
            echo "<li class='page-item ";
            if ($i == $page) echo "active";
            echo "'><a class='page-link' href='?page=" . $i . "'>" . $i . "</a></li>";
        }
        if ($page != $totalPages) {
            echo "<li class='page-item'><a class='page-link' href='?page=" . ($page + 1) . "'>Next</a></li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No data available.</p>";
    }

    mysqli_close($conn);
    ?>

    <script>
        // Table filter function
        function filterTable() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Filter by name column
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
  </div>
  <style>
    table {
  border-collapse: collapse;
  width: 100%;
}

table td, table th {
  border: 1px solid black;
  padding: 10px;
}

table th {
  background-color: #ddd;
}

.pagination {
  margin: 20px 0;
}

.pagination li {
  display: inline-block;
  padding: 5px 10px;
  border: 1px solid #ddd;
  margin-right: 5px;
}

.pagination li.active {
  background-color: #008000;
  color: white;
}
  </style>
</div>

</body>
</html>
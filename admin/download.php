<?php
// Replace these variables with your actual database connection details
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'php-cms';

// Connect to the database
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from the database
$query = "SELECT * FROM applicant"; // Replace 'your_table_name' with your actual table name
$result = mysqli_query($conn, $query);

// Create a file pointer for the CSV file
$filename = "applications_data.csv";
$file = fopen($filename, "w");

// Write the column headers to the CSV file
$headers = array("Id", "Full_Name", "E-Mail", "Contact", "Job_Position", "Cover_Letter"); // Replace with your actual column names
fputcsv($file, $headers);

// Write data rows to the CSV file
while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($file, $row);
}

// Close the file pointer and database connection
fclose($file);
mysqli_close($conn);

// Download the CSV file
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');
readfile($filename);
unlink($filename); // Delete the temporary CSV file after download

exit;
?>
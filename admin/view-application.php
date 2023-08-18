<?php
// Connect syntax
$connect = mysqli_connect("localhost", "root", "", "php-cms");

// Display data from geeksdata table
$query = "SELECT * FROM applicant";

// Storing it in result variable
$result = mysqli_query($connect, $query);

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
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
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

    <div class="content-wrapper"><br />
      <h2 class="col-sm-6" align="left">All Applications</h2><br />
      <div class="card-title" style="text-align:right;">
        <a class="btn btn-primary" href="download.php" align="left">
          <i class="fa fa-plus" aria-hidden="true"></i> Download CSV</a><br />
      </div>

      <div class="card-body p-0">
        <div class="table-responsive">
          <table id="myTable" class="table table-bordered table-hover table-striped">
            <thead>
              <tr>
                <th width="5%">ID</th>
                <th width="20%">Name</th>
                <th width="10%">E-mail</th>
                <th width="10%">Contact</th>
                <th width="10%">Job_Position</th>
                <th width="25%">Cover Letter</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (mysqli_num_rows($result) > 0) {
                $counter = 0;
                while ($row = mysqli_fetch_array($result)) {
                  if ($counter == 10) {
                    break;
                  }
                  $counter++;
              ?>
                  <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["fullname"]; ?></td>
                    <td><?php echo $row["Email"]; ?></td>
                    <td><?php echo $row["phone"]; ?></td>
                    <td><?php echo $row["category"]; ?></td>
                    <td><?php echo $row["cover"]; ?></td>
                  </tr>
              <?php
                }
              } else {
                echo "<tr><td colspan='6'>No data found</td></tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script>
          $(document).ready(function() {
            $('#myTable').DataTable({
              "lengthMenu": [10, 25, 50, 75, 100],
              "pageLength": 10
            });
          });
        </script>
      </div>
    </div>
  </div>
</body>

</html>
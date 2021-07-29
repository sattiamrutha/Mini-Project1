<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/tabs.css">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
    <font color="#007bff"><center><h3><img src="assets/img/vishnu logo.png" align="left" height="100" width="100"></img>SHRI VISHNU ENGINEERING COLLEGE FOR WOMEN(Autonomous)</h3></center></font>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span>Circulars</span></a></h1>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="register.php">Register</a></li>
          <li><a href="adminlogin.php">Admin Login</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  
  <main id="main">

    <div class="container">
      <div class="column">
        <div class="tab">
          <button class="tablinks" onclick="openType(event, 'Faculty')">Faculty</button>
          <button class="tablinks" onclick="openType(event, 'Student')">Student</button>
          <button class="tablinks" onclick="openType(event, 'Events')">Events</button>
          <button class="tablinks" onclick="openType(event, 'Exams')">Exams</button>
        </div>
        <?php
            include "db_connection.inc.php";

            $con = dbConnect();

            if(!$con){
                die("error in data base connection!");
            }
        ?>
        <div id="Faculty" class="tabcontent" active>
          <?php 
            $query = "select * from circulartable where category = 'Faculty'";
            $rs = mysqli_query($con, $query);
            if(!$rs){
              echo "Query not executed";
            }
            $output = "<ul>";
            while($row = mysqli_fetch_row($rs)) {
              $output = $output."<li>".$row[5]." ".$row[4]."</li>";
            }
            $output = $output."</ul>";
            echo $output;
          ?>
        </div>
        <div id="Student" class="tabcontent">
          <?php 
            $query = "select * from circulartable where category = 'Student'";
            $rs = mysqli_query($con, $query);
            if(!$rs){
              echo "Query not executed";
            }
            $output = "<ul>";
            while($row = mysqli_fetch_row($rs)) {
              $output = $output."<li>".$row[5]." ".$row[4]."</li>";
            }
            $output = $output."</ul>";
            echo $output;
          ?> 
        </div>
        <div id="Events" class="tabcontent">
          <?php 
            $query = "select * from circulartable where circular_type = 'Events'";
            $rs = mysqli_query($con, $query);
            if(!$rs){
              echo "Query not executed";
            }
            $output = "<ul>";
            while($row = mysqli_fetch_row($rs)) {
              $output = $output."<li>".$row[5]." ".$row[4]."</li>";
            }
            $output = $output."</ul>";
            echo $output;
          ?> 
        </div> 
        <div id="Exams" class="tabcontent">
          <?php 
            $query = "select * from circulartable where circular_type = 'Exams'";
            $rs = mysqli_query($con, $query);
            if(!$rs){
              echo "Query not executed";
            }
            $output = "<ul>";
            while($row = mysqli_fetch_row($rs)) {
              $output = $output."<li>".$row[5]." ".$row[4]."</li>";
            }
            $output = $output."</ul>";
            echo $output;
          ?> 
        </div> 
      </div>
    </div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>IT</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
        Designed by <a href="">Information Technology Department</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script type="text/javascript" src="assets/js/tabs.js"></script>

</body>

</html>
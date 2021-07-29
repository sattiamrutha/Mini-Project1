
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Circular</title>
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
    <font color="#007bff"><center><h3><img src="assets/img/vishnu logo.png" align="left" height="100" width="100"></img>SHRI VISHNU ENGINEERING COLLEGE FOR WOMEN(Autonomous)</h3><br>
    	<h4>CIRCULAR FORM</h4></center></font>
    </div>
  </section>
	<link rel="stylesheet" type="text/css" href="assets/css/circular.css">
	<style type="text/css">
		* {
	box-sizing: border-box;
}
input[type=text],input[type=textarea], select, textarea {
 width: 100%;
 padding: 12px;
 border: 5px solid #ccc;
 border-radius: 100px;
 resize: vertical;
}
	input[type=submit],input[type=button],input[type=reset] {
 background-color: #007bff;
 margin: 20px;
 color: white;
 padding: 12px 20px;
 border: none;
 border-radius: 100px;
 cursor: pointer;
 float: left;
}
input[type=submit]:hover,input[type=button]:hover,input[type=reset]:hover {
 background-color: purple;
}
</style>
</head>
<body>	

	<center>
		<form name="circularform" method="post" action="circularform.php">
		<table><tr><br>
      <td style="color: #007bff">Academic Year</td><td>
    <select name = "academicyear">
      <option value="">Year</option>
      <option value="2016-2017">2016-2017</option>
      <option value="2017-2018">2017-2018</option>
      <option value="2018-2019">2018-2019</option>
      <option value="2019-2020">2019-2020</option>
    </select><br><br></td></tr>
		<td style="color: #007bff">Circular Type</td><td>
		<select name = "ctype">
			<option value="">Type</option>
			<option value="Hostel">Hostel</option>
			<option value="Holiday">Holiday</option>
			<option value="Exams">Exams</option>
      <option value="Events">Events</option>
			<option value="Others">Others</option>
		</select><br><br></td></tr>
		<tr><td style="color: #007bff">Circular Category</td><td>
		<select name = "ccategory">
			<option value="">Category</option>
			<option value="Faculty">Faculty</option>
			<option value="Student">Student</option>
			<option value="Both">Both</option>
		</select><br><br></td></tr>
		<tr>
		<td style="color: #007bff">Circular Name / Subject</td><td>
		<input type="textarea" name="csub" value=""><br><br>
		</td></tr>
		<tr><td style="color: #007bff">File</td><td>
		<input type="file" name="fileToUpload">
		</td></tr>
		<tr align="center">
			<td align="center" style="color: #007bff" colspan="2">
				<center><input type="submit" value="Submit"></center>
			</td>
		</tr>	
		</table>	
		</form>
	</center>
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

<!DOCTYPE html> 
<html lang="en"> 
<head> 
	<title>Register</title>
	<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
    <h4>REGISTER FORM</h4></center></font>
    </div>
  </section>
	<style>   
		* {     
			box-sizing: border-box;   
			}      
			input[type=text], select, textarea,input[type=password] {     
				width: 100%;     
				padding: 12px;     
				border: 5px 
				solid #ccc;     
				border-radius: 100px;     
				resize: vertical;   
			}   
			input[type=radio],input[type=checkbox]{          
				padding: 4px;     
				height: 15px;     
				width: 15px;        
			}   
			label {     
				padding: 12px 12px 12px 0;     
				display: inline-block;     
				color: black;   
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
<script type="text/javascript"> 
	function getData(){  
		var firstname = document.forms["f1"].elements["firstname"].value;
		if(firstname == "") {
			alert("Please fill regno");
		}
		else { 
			alert(firstname);
		}
  		var lastname = document.forms["f1"].elements["lastname"].value;  
  		if(lastname == "") {
			alert("Please fill name");
		}
		else { 
  			alert(lastname); 
  		} 
  		var email = document.forms["f1"].elements["email"].value;
  		if(email == "") {
  			alert("Please fill email");
  		}
  		else {
  			alert(email);
  		}
  		var facultyid = document.form["f1"].elements[0].value;
  		if(facultyid == "") {
  			alert("Please fill facultyId");
  		}
  		else {
  			alert(facultyid)
  		}
  		var password = document.getElementById("password").value;  
  		if(password == "") { 
  			alert("Please fill password");
  		}
  		else {
  			alert(password); 
  		}
  		var department = document.f1.department.value;  
  		alert(department);  
  		var l1 = document.f1.l1;  
  		var l2 = document.f1.l2;  
  		var l3 = document.f1.l3;  
  		if(l1.checked){   
  			alert(l1.value);  
  		}  
  		if(l2.checked){   
  			alert(l2.value);  
  		}  
  		if(l3.checked){   
  			alert(l3.value);  
  		}  
  		document.f1.password.disabled=true; 
  		} 
  	</script>
</head>  
<body> 
  	<center>  
  		<form name="f1" method="post" action="register_form.php">  
  			<table> 
        <tr>
            <td style="color: #007bff" colspan="2">Faculty-id</td>
            <td><input type="text" name="facultyid" required></td>
          </tr>  
  				<tr>    
  					<td style="color: #007bff" colspan="2">FullName</td>    
  					<td><input type="text" name="fullname" required></td>   
  				</tr>
  				<tr>
  					<td style="color: #007bff" colspan="2">Email</td>
  					<td><input type="text" name="email" required></td>   
  				</tr>
  				<tr>
  					<td style="color: #007bff" colspan="2">Type</td>
  					<td>
  						<select name="type" required>
  							<option value="-1">Type</option>
  							<option value="faculty">Faculty</option>
  							<option value="hod">HOD</option>
  							<option value="principal">Principal</option>
  						</select>
  					</td>
  				</tr>	
				<tr>
					<td style="color: #007bff" colspan="2">Department</td>
					<td><select name="branch" required>
						<option value="-1">Select Department</option>
							<option value="CSE">CSE</option>
							<option value="IT">IT</option>
							<option value="ECE">ECE</option>
							<option value="EEE">EEE</option>
							<option value="CE">CIVIL ENGINEERING</option>
							<option value="MECH">MECHANICAL</option>
					</select></td>
				</tr>
        <tr>    
            <td style="color: #007bff" colspan="2">MobileNo</td>    
            <td><input type="text" name="mobileno" required></td>   
          </tr>
        <tr>    
            <td style="color: #007bff" colspan="2">Password</td>    
            <td><input type="password" name="password" id="password" required></td>   
          </tr>
				<tr>
					<td colspan="4" style="color: #007bff">
						<input type="submit" value="Submit" onclick="getData()">
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
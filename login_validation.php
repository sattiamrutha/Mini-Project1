<?php
include "db_connection.inc.php";

$con = dbConnect();

if(!$con){
		die("error in data base connection!");
}
if(!isset($_POST["uname"])){
		header("Location:./login.php");
}

$username = $_POST["uname"];
$password = $_POST["psw"];	

$query = "select fullname,type from login where username='".$username."' and password ='".$password."'";

$rs = mysqli_query($con,$query);

if(!$rs){
	header("Location:./login.php");
}

if($row = mysqli_fetch_array($rs)){
		session_start();
		$_SESSION["name"]=$row["fullname"];
		$_SESSION["type"]=$row["type"];
		
}
if($_SESSION["type"]=="faculty"){
	header("Location:faculty_home.php");
}
else if($_SESSION["type"]=="hod"){
	header("Location:faculty_home.php");
}
else if($_SESSION["type"]=="principal"){
	header("Location:faculty_home.php");
}


?>
<?php
function dbConnect(){
	$host = "localhost";
	$port = "3306";
	$username = "root";
	$password = "";
	$db ="project";
	$con = mysqli_connect($host,$username,$password,$db);
	return $con;
}
?>
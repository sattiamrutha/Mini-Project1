<?php
include "db_connection.inc.php";

$con = dbConnect();

if(!$con){
		die("error in data base connection!");
}
$academicyear = $_POST["academicyear"];
$circulartype = $_POST["ctype"];
$circularcategory = $_POST["ccategory"];
$circularsubject = $_POST["csub"];
$inserteddate = date("Y-m-d");
$file_path = $_POST["fileToUpload"];
$query = "insert into circulartable values('$academicyear', '$circulartype', '$circularcategory', '$circularsubject','$inserteddate','$file_path')";
$rs = mysqli_query($con, $query);
if(!$rs){
	header("Location:./circular.php");
}
echo "Successfully Uploaded";
?>
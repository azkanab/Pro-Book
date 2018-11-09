<?php
	$name= $_POST['name'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$username=$_COOKIE['nameofuser'];
	

	//$pic = $_FILES["profpic"]["tmp_name"];

	$servername = "127.0.0.1";
	$uname = "root";
	$pass = "";
	$dbname = "bookStore";

	require 'upload.php';

	try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $uname, $pass);

	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$que= "UPDATE user SET name= '$name', address='$address', phone='$phone', link_pict='$renamed_file' WHERE (username='$username')";

	$stmt = $conn->prepare($que);
	$stmt->execute();
	
	header('Location: profile.php');
	die();	

	}
	catch(PDOException $e)
	{
	echo "<title>error</title>Error: " . $e->getMessage();
	}

	$conn = null;
?>
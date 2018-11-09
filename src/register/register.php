<?php

$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$address = $_POST['address'];
$phone = $_POST['phone'];	

$servername = "127.0.0.1";
$uname = "root";
$pass = "";
$dbname = "bookStore";

try
{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $uname, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT max(user_id) AS maxid FROM User");
	$stmt->execute();


	$id = $stmt->fetchAll();
	$id = $id[0]['maxid'] + 1;

	$stmt = $conn->prepare("INSERT INTO User(user_id, username, name, email, password, address, phone, link_pict) VALUES ('$id', '$username', '$name', '$email', '$password', '$address', '$phone', '../upload/default.jpg')");

	$stmt->execute();

	header("Location: ../login/login.html");
}

catch(PDOException $e)
{
	echo "Error: " . $e->getMessage();
}

$conn = null;

?>
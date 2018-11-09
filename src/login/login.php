<?php

$username = $_POST['username'];
$password = $_POST['password'];

$servername = "127.0.0.1";
$uname = "root";
$pass = "";
$dbname = "bookStore";

try
{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $uname, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT * FROM User WHERE (username = '$username') AND (password = '$password')");
	$stmt->execute();

	$data = $stmt->fetchAll();
	if (count($data) != 0)
	{
		setcookie('nameofuser', $username,time()+3600, '/');
		header("Location: ../pages/browse.php");
		die();
	}
	else
	{
		header("Location: login.html");
	}
}

catch(PDOException $e)
{
	echo "Error: " . $e->getMessage();
}

$conn = null;

?>
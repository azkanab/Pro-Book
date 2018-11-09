<?php

$inputusername = $_GET["username"];
$servername = "127.0.0.1";
$uname = "root";
$pass = "";
$dbname = "bookStore";

try
{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $uname, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT * FROM User WHERE (username = '$inputusername')");
	$stmt->execute();

	$data = $stmt->fetchAll();
	if (count($data) != 0)
	{
		echo "ADA";
	}
	else
	{
		echo "TAKADA";
	}
}


catch(PDOException $e)
{
	echo "Error: " . $e->getMessage();
}

?>
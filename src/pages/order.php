<?php
	$data = json_decode(file_get_contents('php://input'), true);
	$data['order_date'] = date('Y-m-d');
	$user_id = (int)$data['user_id'];
	$book_id = (int)$data['book_id'];
	$jumlah_order = (int)$data['jumlah_order'];
	$date = $data['order_date'];

	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$myDB = "bookStore";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	     $query = "INSERT INTO Orders (user_id,book_id, jumlah_order,order_date) VALUES($user_id,$book_id,$jumlah_order, '$date')";
	    $stmt = $conn->prepare($query);
	    $stmt->execute();

	    $query2 = "SELECT LAST_INSERT_ID()";
	    $getlastid = $conn->prepare($query2);
	    $getlastid->execute();
	    $lastid = $getlastid->fetch();
	    $orderid = array("order_id" => $lastid);
	    echo json_encode($orderid);

	}
	catch(PDOException $e)
	{
	    echo "Connection failed: " . $e->getMessage();
	}
?>
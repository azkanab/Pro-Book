<?php
		$servername = "127.0.0.1";
		$usernamesql = "root";
		$password = "";
		$myDB = "bookStore";
		$rating = $_POST['rating'];
		$comment = $_POST['comment'];
		$username = $_COOKIE['nameofuser'];
		$bookid = $_POST['book-id'];
		$orderid = $_POST['order-id'];
		try {
		    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $usernamesql, $password);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $getuserid = $conn->prepare("SELECT user_id FROM User WHERE username='$username'");
		    $getuserid->execute();
		    $user = $getuserid->fetch();
		    $userid = $user['user_id'];

		    $query = "INSERT INTO Review (rating, description, book_id, user_id) VALUES ($rating,'$comment',$bookid, $userid)";

		    $stmt = $conn->prepare($query);
		    $stmt->execute();

		    $stmt2 = $conn->prepare('SELECT review_id FROM Review ORDER BY review_id DESC LIMIT 1');
		    $stmt2->execute();
		    $review = $stmt2->fetch();
		    $reviewid = $review['review_id'];

		    $stmt3 = $conn->prepare("UPDATE Orders SET review_id=$reviewid WHERE order_id='$orderid'");
		    $stmt3->execute();

		    $getaverage = $conn->prepare("SELECT AVG(Review.rating) AS rating FROM Book JOIN Review ON (Review.book_id = Book.book_id) WHERE Book.book_id=".$bookid." GROUP BY Book.book_id");
		    $getaverage->execute();
		    $getavrg = $getaverage->fetch();
		    $average = $getavrg['rating'];
		    $query = $conn->prepare("UPDATE Book SET rating=".$average." WHERE book_id=".$bookid."");
		    $query->execute();

		    header("Location: history.php");
			die();
		}
		catch(PDOException $e)
		{
		    echo "<title> ERROR </title>Connection failed: " . $e->getMessage();
		}
?>
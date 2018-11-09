<?php
		include '../component/header.php';
		$servername = "127.0.0.1";
		$uname = "root";
		$pass = "";
		$myDB = "bookStore";

		try {
		    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $uname, $pass);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $que = "SELECT * FROM user WHERE username = \"" . $_COOKIE['nameofuser'] . "\"";
		    echo $que;
		    $stmt = $conn->prepare($que);
		
		    $stmt->execute();
		    // set the resulting zarray to associative
    		$row = $stmt->fetchAll();
    		foreach ($row as $item) {
    			$name = $item["name"];
    			$email = $item["email"];
    			$phone = $item["phone"];
    			$address = $item["address"];
    			$link_pict = $item["link_pict"];
    		}
    	
		}
		catch(PDOException $e)
		    {
		    echo "Connection failed: " . $e->getMessage();
		    }
	?>
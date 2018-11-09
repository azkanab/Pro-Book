<!DOCTYPE html>
<html>
	<style>
		<?php
			include '../component/header.css';
		?>
	</style>
	<head>
		<title>Pro-Book | Your History</title>
  		<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  		<link rel="stylesheet" type="text/css" href="history.css">
 	</head>
	 <?php
		include '../component/header.php';
		$servername = "127.0.0.1";
		$username = "root";
		$password = "";
		$myDB = "bookStore";
		try {
		    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare('SELECT book_title, jumlah_order, order_id, link_picture, order_date FROM Orders NATURAL JOIN Book WHERE user_id=(SELECT user_id FROM User WHERE username="'.$_COOKIE['nameofuser'].'") ORDER BY order_id DESC');
		    $stmt->execute();
		    // set the resulting array to associative
    		$row = $stmt->fetchAll();
    		$count = 0;
    		//var_dump($row);
    		foreach ($row as $item) {
    			$count++;
    		}
		}
		catch(PDOException $e)
		    {
		    echo "Connection failed: " . $e->getMessage();
		    }
	?>
	<div class="section">
		<h1 class="history2">History</h1>
		<div class="container">
			<table class="tablehistory detail-book">
				<?php
					$index = 1;
					if ($count == 0) {
						echo "<tr>
					<td class='not-found'>Make some history!</td>
						</tr>";
					}
					foreach ($row as $items) {
						$isreviewed = $conn->prepare('SELECT review_id FROM Orders WHERE order_id='.$items['order_id'].'');
						$isreviewed->execute();
						$reviewed = $isreviewed->fetch();
						$date = explode("-", $items['order_date']);
						$year = $date[0];
						if ($date[1] == 1) {
							$month = "January";
						}
						elseif ($date[1] == 2) {
							$month = "February";
						}
						elseif ($date[1] == 3) {
							$month = "March";

						}
						elseif ($date[1] == 4) {
							$month = "April";
						}
						elseif ($date[1] == 5) {
							$month = "May";
						}
						elseif ($date[1] == 6) {
							$month = "June";
						}
						elseif ($date[1] == 7) {
							$month = "July";
						}
						elseif ($date[1] == 8) {
							$month = "August";
						}
						elseif ($date[1] == 9) {
							$month = "September";
						}
						elseif ($date[1] == 10) {
							$month = "October";
						}
						elseif ($date[1] == 11) {
							$month = "November";
						}
						elseif ($date[1] == 12) {
							$month = "December";
						}
						$maindate = $date[2];
						echo "<tr>
								<td class='cellhistory1'>
									<img border='1' class='book-pict' src='".$items['link_picture']."' alt='judul".$index."'>
								</td>
								<td class='cellhistory2'>
									<h1 class='judul'>".$items['book_title']."</h1>
						<p><span class='history-det'>Jumlah :&nbsp;</span><span class='history-det'>".$items['jumlah_order']."</span></p>
						<span class='history-det'>".($reviewed['review_id']==TRUE ? "Anda sudah memberikan review" : "Belum direview").
						"</span>
					</td>
					<td align='right' class='cellhistory3'>
						<p class='keterangan'>".$maindate." ".$month." ".$year."</p>
						<p class='keterangan'><span>Nomor order : #</span><span id='o".$index."'>".$items['order_id']."</span></p>".($reviewed['review_id']==TRUE ? "" :
							"<a id='".$index."' onclick='goToReview(this.id)'>
							<button class='review-button'>Review</button>
							</a>")
					."</td>								

							</tr>";
					$index++;
					}
				?>
			</table>
		</div>
	</div>

	<script>
		document.getElementById('historyOpen').style.backgroundColor = "#FF6029";
		function goToReview(clicked_id) {
			var idurl = 'o'+clicked_id;
			console.log(clicked_id, 'ID');
			console.log(idurl, 'URL');
			var order_id = document.getElementById(idurl).innerText;
			console.log(order_id, 'Nomor order');
			location.href = "review.php?order_id="+order_id;
		}
	</script>
</html>
<!DOCTYPE html>
<html>
	<style>
		<?php
			include '../component/header.css';
		?>
	</style>
	<head>
		<title>Pro-Book |&nbsp;</title>
  		<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  		<link rel="stylesheet" type="text/css" href="browse.css">
 	</head>

 	<?php
		include '../component/header.php';
		$servername = "127.0.0.1";
		$username = "root";
		$password = "";
		$myDB = "bookStore";
		$keyword = $_GET['bookid'];

		try {
		    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare('SELECT book_title, Book.book_id, author, rating, book_description, link_picture FROM Book WHERE book_id='.$keyword.' GROUP BY book_id');
		    $stmt->execute();
		    $result = $conn->prepare('SELECT description, username, link_pict, rating FROM Review NATURAL JOIN User WHERE book_id='.$keyword.'');
		    $vote = $conn->prepare('SELECT COUNT(review_id) AS voting FROM Review WHERE book_id='.$keyword.'');
		    $vote->execute();
		    $votefetch = $vote->fetch();
		    $result->execute();
		    // set the resulting array to associative
    		$row = $stmt->fetch();
    		$review = $result->fetchAll();
    		$count = 0;

    		$getuserid = $conn->prepare('SELECT user_id FROM User WHERE username="'.$_COOKIE['nameofuser'].'"');
    		$getuserid->execute();
    		$getui = $getuserid->fetch();
    		$userid = $getui['user_id'];

    		foreach ($review as $item) {
    			$count++;
    		}

    		$vote = $row['vating'];
    		$title = $row['book_title'];
    		$id = $row['book_id'];
    		$author = $row['author'];
    		$rating = $row['rating'];
    		$description = $row['book_description'];
    		$picture = $row['link_picture'];
    	}
		catch(PDOException $e)
		{
		    echo "Connection failed: " . $e->getMessage();
		}
	?>

<p class="bookid" id='user-id'><?php echo $userid;?></p>

	<div class="book-det">
		<table>
			<tr class="row">
				<td class="cell-detail">
					<h1 class="judul-desc">
						<?php
							echo $title;
						?>
					</h1>
					<strong class="book-desc">
						<?php
							echo $author." - ".number_format($rating,1)."/5.0 (".$votefetch['voting']." votes)";
						?>
					</strong>
					<p>
						<?php
							echo $description;
						?>
					</p>
				</td>
				<td align="center">
					<?php
						echo "<img border='1' class='book-pict' src='".$picture."' alt='judul'>";
					?>
					<div id="rating" class="ratesize"></div>
					<span class="rating-size"><strong>
						<?php
							echo number_format($rating,1)." / 5.0";
						?>
					</strong></span>
					<?php
						echo "<h1 class='bookid' id='rate'>".$rating."</h1>";
					?>
				</td>
			</tr>
		</table>
	</div>

	<div class="orderbox">
		<p class="ordertext"><strong style="font-size: 40px;">Order</strong></p>
		<span class="jumlah">Jumlah:&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<select class="classic" name="count" id="jumlah-order" onchange="validateamount()">
			<option value="0">0</option>
  			<option value="1">1</option>
  			<option value="2">2</option>
  			<option value="3">3</option>
  			<option value="4">4</option>
  			<option value="5">5</option>
  			<option value="6">6</option>
  			<option value="7">7</option>
  			<option value="8">8</option>
  			<option value="9">9</option>
  			<option value="10">10</option>
		</select>
		<?php
			echo "<p class='bookid' id='bookid' value=".$keyword."> </p>";
		?>
		<button class="order-button" id="myBtn" onclick="addToOrder(document.getElementById('jumlah-order').value,document.getElementById('user-id').innerHTML, <?php echo $keyword; ?>)">Order</button>
	</div>

	<div class="reviewbox">
		<p class="reviewtext"><strong class="reviewsize">Reviews</strong></p>
		<table class="tablereview review">
			<?php
				$index = 1;
					if ($count == 0) {
						echo "<tr>
					<td class='not-found'>Be the first to review</td>
						</tr>";
					}
				foreach ($review as $items) {
					echo "<tr class='rowreview'>
							<td class='columnreview'>
								<img class='profpicreview prof-pict' src='".$items['link_pict']."' border='1.5' alt='profpic".$index."'>
							</td>
							<td class='columnreview2'>
								<p class='uname'><strong>@".$items['username']."</strong></p>
								<p class='review-desc'>".$items['description']."</p>
							</td>
							<td align='center' class='ratingreview'>
								<img src='fullstar.png' class='icon2'>
								<p align='center' class='ratinginreview'><strong>".number_format($items['rating'], 1)." / 5.0</strong></p>
							</td>
						</tr>";
					$index++;
				}
			?>
		</table>
	</div>

	<div id="myModal" class="modal">
	  <div class="modal-content">
	    <span class="close" onclick="closeModal()">&times;</span>
	    <table>
	    	<tr>
	    		<td>
	    			<img src="check.png" class="check-image" alt="check">
	    		</td>
	    		<td>
	    			<p class="success"><strong>Pemesanan Berhasil!</strong></p>
	    			<span class="transaction">Nomor Transaksi : </span><span class="transaction" id='idtransaksi'></span>
	    		</td>
	    	</tr>
	    </table>
	  </div>

	</div>

	<script>
		document.getElementById('defaultOpen').style.backgroundColor = "#FF6029";
		document.getElementById('myBtn').disabled = true;

		function validateamount() {
			console.log(document.getElementById('jumlah-order').value)
			if (document.getElementById('jumlah-order').value !== "0") {
				console.log('hehe');
				document.getElementById('myBtn').disabled = false;
			} else if (document.getElementById('jumlah-order').value === "0"){
				document.getElementById('myBtn').disabled = true;
			}
		}

		var url_string = location.href;
		var initialize = url_string.split('booktitle=');
		var title = initialize[1];
		console.log(title,'hey');
		var book_title = title.replace(/%20/g, ' ', -1);
		console.log(book_title, 'REPLACE SPACE');
		var book_title1 = book_title.replace(/%27/g, "'", -1);
		console.log(book_title1, 'REPLACE SPACE');
		var book_title_final = book_title1.replace(/&amp;/g, '&', -1);
		console.log(book_title_final, 'REPLACE &');
		document.title += book_title_final;

		var x = "";
		var rate = document.getElementById('rate').innerHTML;
		for (i=1; i<=5; i++) {
			if (i<=rate) {
				x = x + "<img src='fullstar.png' class='icon'>";
			}
			else {
				x = x + "<img src='emptystar.png' class='icon'>";	
			}
		}
		document.getElementById("rating").innerHTML = x;

		var modal = document.getElementById('myModal');
		var btn = document.getElementById("myBtn");
		var span = document.getElementsByClassName("close")[0];

		function popModal(idtransaksi) {
		    modal.style.display = "block";
		    document.getElementById('idtransaksi').innerText = idtransaksi;
		}

		function closeModal() {
		    modal.style.display = "none";
		}

		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}

		function addToOrder(jumlah_order, userid, book_id) {
			console.log(jumlah_order);
			console.log(userid);
			console.log(book_id);
			let headers = {'Content-Type': 'application/json'};
			body = {
				'user_id': userid,
				'book_id': book_id,
				'jumlah_order': jumlah_order
			};
			let postData = {
				method: 'POST',
				body: JSON.stringify(body),
				headers: headers
			};
			fetch('order.php', postData)
			.then((resp) => resp.json())
			.then(function(data) {
				popModal(data['order_id'][0]);
			})
			.catch(function(error) {
				console.log(error);
			})
		}

	</script>
</html>
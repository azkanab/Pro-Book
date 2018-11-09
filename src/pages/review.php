<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$myDB = "bookStore";
	$keyword = $_GET['order_id'];
	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $avail = $conn->prepare('SELECT user_id FROM Orders WHERE order_id='.$keyword);
	    $avail->execute();
	    $availa = $avail->fetch();
	    if (!isset($availa['user_id'])) {
	    	header("Location: history.php");
	    	die();
	    }
	    $available = $availa['user_id'];
	    $rev = $conn->prepare('SELECT review_id FROM Orders WHERE order_id='.$keyword.'');
	    $rev->execute();
	    $revi = $rev->fetch();
	    $reviewed = $revi['review_id'];
	    $getuname = $conn->prepare('SELECT username FROM User WHERE user_id='.$available);
	    $getuname->execute();
	    $uname = $getuname->fetch();
	    $un = $uname['username'];
	    // var_dump($available);
	    // var_dump($reviewed);
	    if ($reviewed || ($un!=$_COOKIE['nameofuser'])) {
	    	header("Location: history.php");
			die();
	    }
	  
	    $stmt = $conn->prepare('SELECT book_title, author, link_picture, book_id FROM Orders NATURAL JOIN Book WHERE order_id='.$keyword.'');
	    $stmt->execute();
	    // set the resulting array to associative
		$row = $stmt->fetch();
		$title = $row['book_title'];
		$author = $row['author'];
		$pict = $row['link_picture'];
		$bookid = $row['book_id'];
	}
	catch(PDOException $e)
	    {
	    echo "Connection failed: " . $e->getMessage();
	    }
?>
<!DOCTYPE html>
<html>
	<style>
		<?php
			include '../component/header.css';
		?>
	</style>
	<?php
		include '../component/header.php';
	?>
	<head>
		<title>Pro-Book | Give Review on&nbsp;</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
	  	<link rel="stylesheet" type="text/css" href="history.css">
	</head>
	<div class="containerreview">
		<table>
			<tr class="rowreview">
				<td class="cellreview">
					<h1 class="judul-desc" id="joedoel">
						<?php
							echo $title;
						?>
					</h1>
					<strong class="book-desc">
						<?php
							echo $author;
						?>
					</strong>
				</td>
				<td align="center">
					<?php
						echo "<img border='1' class='book-pict' src='".$pict."' alt='judul'>";
					?>
				</td>
			</tr>
		</table>
	</div>

	<div class="sectionreview">
		<p class="add-rating">
			Add Rating
		</p>
		<div align="center">
			<form class="rating">
			  <label>
			    <img src="emptystar.png"class="icon space" value="1" id="1" onclick="giveRate(this.getAttribute('value'))" onmouseover="changeRate(this.id)" onmouseout="backtoRate()">
			    <img src="emptystar.png" class="icon space" value="2" id="2" onclick="giveRate(this.getAttribute('value'))" onmouseover="changeRate(this.id)" onmouseout="backtoRate()">
			    <img src="emptystar.png" class="icon space" value="3" id="3" onclick="giveRate(this.getAttribute('value'))" onmouseover="changeRate(this.id)" onmouseout="backtoRate()">
			    <img src="emptystar.png" class="icon space" value="4" id="4"  onclick="giveRate(this.getAttribute('value'))" onmouseover="changeRate(this.id)"onmouseout="backtoRate()" >
			    <img src="emptystar.png" class="icon" value="5" id="5" onclick="giveRate(this.getAttribute('value'))" onmouseover="changeRate(this.id)"  onmouseout="backtoRate()">
			  </label>
			</form>
		</div>
	</div>

	<div class="sectioncomment">
		<p class="add-rating">
			Add Comment
		</p>
		<form action='submitreview.php' method="POST">
			<input name="rating" id='rating' class='rating-hidden' value=0>
			<input name="book-id" class='rating-hidden' value=<?php echo $bookid?>>
			<input name="order-id" class='rating-hidden' value=<?php echo $keyword?>>
			<textarea onkeyup="validateform()" class="commentbox" rows="6" cols="50" name="comment" id="comment"></textarea>
			<input id="submit" type="submit" class="submitbut submit-button">
		</form>
		<a href="history.php">
			<button class="back-button">Back</button>
		</a>
	</div>

	<script>
		document.getElementById('submit').disabled= true;
		function validateform() {
			if (document.getElementById('comment').value == "") {
				document.getElementById('comment').style.borderColor = 'red';
				document.getElementById('submit').disabled = true;
			}
			else if (document.getElementById('comment').value != "" && document.getElementById('rating').value != 0){
				document.getElementById('comment').style.borderColor = '#262626';
				document.getElementById('submit').disabled = false;
			}
			else {
				document.getElementById('comment').style.borderColor = '#262626';
			}
		}

		document.getElementById('historyOpen').style.backgroundColor = "#FF6029";
		var judul = document.getElementById('joedoel').innerText;
		document.title += judul;
		var finalrate = 0;
		console.log(finalrate, 'initialize rate');
		function giveRate(rating) {
			finalrate = rating;
			console.log(finalrate,'giveRate');
			document.getElementById('rating').value=finalrate;
			console.log(document.getElementById('rating').value, 'final');
			validateform();
		}
		function changeRate(id) {
			for (i=1; i<=5; i++) {
				if (i<=id) {
					document.getElementById(i).src = 'fullstar.png';
				}		
				else {
					document.getElementById(i).src = 'emptystar.png';					
				}		
			}
		}
		function backtoRate() {
			for (i=1; i<=5; i++) {
				if (i<=finalrate) {
					document.getElementById(i).src = 'fullstar.png';
				}		
				else {
					document.getElementById(i).src = 'emptystar.png';					
				}		
			}
		}

	</script>
</html>
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
		$keyword = $_GET['booktitle'];

		try {
		    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare('SELECT book_title, book_id, author, book_description, link_picture, rating FROM Book WHERE book_title LIKE "'.'%'.$keyword.'%" GROUP BY book_id');
		    $stmt->execute();
		    // set the resulting array to associative
    		$row = $stmt->fetchAll();
    		//var_dump($row);
    		$count = 0;
    		foreach ($row as $item) {
    			$count++;
    		}
		}
		catch(PDOException $e)
		    {
		    echo "Connection failed: " . $e->getMessage();
		    }
	?>

	<h1 class="search-book"><strong>Search Result</strong></h1>
	<div class="result-count">
		<span>Found&nbsp;</span><span><strong><u>
			<?php
				echo "$count";
			?>
		</u></strong></span><span>&nbsp;result(s)</span>
	</div>

	<div class="search-result">
		<table class="detail-book">
			<?php
				if ($count == 0) {
					echo "<tr>
					<td class='not-found'>Items you are searching is not available</td>
						</tr>";
				}
				$index = 1;
				foreach ($row as $items) {
					$vote = $conn->prepare('SELECT COUNT(review_id) AS voting FROM Review WHERE book_id='.$items['book_id'].'');
		    		$vote->execute();
		    		$votefetch = $vote->fetch();
				 	echo "<tr>
				 			<td class='cell'>
				 				<img border='1' class='book-pict' src='".$items['link_picture']."' alt='".$items['book_title']."'>
				 				<p class='bookid' id='i".$index."'>".$items['book_id']."</p>
				 			</td>
				 			<td>
				 				<h1 class='judul' id='j".$index."'>".$items['book_title']."</h1>
				 				<strong class='book-desc'>".$items['author']." - ".number_format($items['rating'],1)." / 5.0 (".$votefetch['voting']." votes)</strong>
				 				<p>".$items['book_description']."</p>
				 				<a id='".$index."' onclick='goToDetail(this.id)'>
				 					<button class='detail-button'>Detail</button>
				 				</a>
				 			</td> 
				 		</tr>";
				 	$index++;
				}
			?>
		</table>
	</div>

	<script>
		document.getElementById('defaultOpen').style.backgroundColor = "#FF6029";
		function goToDetail(clicked_id) {
			var idurl = 'j'+clicked_id;
			console.log(clicked_id);
			var booktitle = document.getElementById(idurl).innerHTML;
			console.log(booktitle);
			var idurl2 = 'i'+clicked_id;
			var book_id = document.getElementById(idurl2).innerHTML;
			location.href = "browsedetail.php?bookid="+book_id+"&booktitle="+booktitle;
		}
		var url_string = location.href;
		var url = new URL(url_string);
		var keyword = url.searchParams.get("booktitle");
		console.log(keyword);
		document.title += keyword;
	</script>

 </html>
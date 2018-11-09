<!DOCTYPE html>
<html>
	<style>
		<?php
			include '../component/header.css';
		?>
	</style>
	<head>
		<title>Pro-Book | Search</title>
  		<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  		<link rel="stylesheet" type="text/css" href="browse.css">
 	</head>

	<?php
		include '../component/header.php';
	?>

	<h1 class="search-book"><strong>Search Book</strong></h1>
	<br>
	<br>
	<br>
	<form>
		<input id="box" class="searchbox" type="text" name="booktitle" placeholder="Input search terms..." value="" onkeyup="validateform()">
		<div class="forbutton">
			<button id="searchbutton" class="search-button" type="submit" onclick="form.action='browseresult.php';">
				Search
			</button>
		</div>
	</form>

	<script>
		document.getElementById('defaultOpen').style.backgroundColor = "#FF6029";
		document.getElementById('searchbutton').disabled = true;
		function validateform() {
			if (document.getElementById('box').value == "") {
				document.getElementById('box').style.borderColor = "red";
				document.getElementById('searchbutton').disabled = true;
			}
			else {
				document.getElementById('box').style.borderColor = "#7c7c7c";
				document.getElementById('searchbutton').disabled = false;
			}
		}
	</script>
</html>
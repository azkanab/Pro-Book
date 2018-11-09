<?php
	if (!isset($_COOKIE['nameofuser']))
	{
		header("Location: ../login/login.html");
	}
?>

<!DOCTYPE html>
<html>
	<head>
  		<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  		<link rel="stylesheet" type="text/css" href="header.css">
 	</head>
 	<div class="contain">
		<div class="probookbox">
			<div class="probookbox-title">
				<strong><span class="pro">Pro</span><span class="book"> - Book</span></strong>	
			</div>
			<div class="username">
				Hi, <?php echo $_COOKIE['nameofuser']; ?>
			</div>
			<div class="probookbox-login">
				<img class="loginbutton" src="powerbutton.png" alt="Power" id="powerbutton">
			</div>			
		</div>
		<div>
			<a href="browse.php">
				<button class="tablink browse" id="defaultOpen">
					<span class="capital-big">B</span><span>ROWSE</span>
				</button>
			</a>
			<a href="history.php">
				<button class="tablink history" id="historyOpen">
					<span class="capital-big">H</span><span>ISTORY</span>
				</button>
			</a>
			<a href="profile.php">
				<button class="tablink profile" id="profileOpen">
					<span class="capital-big">P</span><span>ROFILE</span>
				</button>
			</a>
		</div>
	</div>

	<script type="text/javascript">
		function setCookie(cname, cvalue, exdays) 
		{
		    var expires = "expires="+ exdays.toUTCString();
		    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
		}

		function getCookie(name) 
		{
		  var value = "; " + document.cookie;
		  var parts = value.split("; " + name + "=");
		  if (parts.length == 2) return parts.pop().split(";").shift();
		}

		let powerbutton = document.getElementById("powerbutton");
		powerbutton.addEventListener("click", function()
		{
			var d = new Date();
			d.setHours(d.getHours() - 1);
			var username = getCookie('nameofuser');
			setCookie('nameofuser', username, d);
			window.location="../login/login.html";
		});
	</script>

</html>
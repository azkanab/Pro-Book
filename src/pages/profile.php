<!DOCTYPE html>
<html>
	<style>
		<?php
 			include '../component/header.css';
		?>
	</style>

	<head>
		<title>Pro-Book | 
			<?php
				echo $_COOKIE['nameofuser'];
			?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
	  	<link rel="stylesheet" type="text/css" href="profile.css">
	</head>
	
 	<?php
		include '../pages/user_data.php';
	?>

	<div class="main-header">
		<div class="header-flex">
			<div class="section-flex"></div>
			<div class="section-flex">
				<img class= "thumbnails profpic " src=
				<?php
	  				echo "\"".$link_pict."\"";
	  			?>>
			</div>
			<div class="header-right">
				
				<div>
					<a href="editprofile.php">
						<img src="edit-button.png" class="edit-button">
					</a>
				</div>
			</div>
		</div>
		<div>
			<?php echo $name;?>
		</div>
	</div>	
	<div class="header-profile">
    	<div class="title-profile"> My Profile </div>         
  		<div class="profile-body">
  			<table >
	  			<tr>
	  				<td class="biodata-row">
	  					<img class="profile-icon" src="user-shape.png">
	  				</td>
	  				<td class="procile_c2" class="biodata-row">
	  					<div class="biodata"> Username
	  					 </div>
	  				</td>
	  				<td class="biodata-row">
	  					<div class="biodata"> 
	  						@<?php 
	  							echo $_COOKIE['nameofuser'];
	  						?>
	  					 </div>
	  				</td>
	  			</tr>
	  			<tr class="biodata-row">
	  				<td>
	  					<img class="profile-icon" src="email.png">
	  				</td>
	  				<td class="procile_c2">
	  					<div class="biodata"> Email </div>
	  				</td>
	  				<td >
	  					<div class="biodata"> 
	  						<?php 
	  							echo $email;
	  						?>
  						</div>
	  				</td>
	  			</tr>
	  			<tr class="biodata-row">
	  				<td>
	  					<img class="profile-icon" src="home.png">
	  				</td>
	  				<td class="procile_c2">
	  					<div class="biodata"> Address </div>
	  				</td>
	  				<td class="profile_c3">
	  					<div class="biodata"> 
	  					<?php
	  						echo $address;
	  						?>
	  					 </div>
	  				</td>
	  			</tr>
	  			<tr class="biodata-row">
	  				<td>
	  					<img class="profile-icon" src= "phone.png"
	  					>
	  				</td>
	  				<td class="procile_c2">
	  					<div class="biodata"> Phone Number </div>
	  				</td>
	  				<td class="profile_c3">
	  					<div class="biodata">
	  						<?php 
	  							echo $phone;
	  						?>
	  					</div>
	  				</td>
	  			</tr>
	  			
	  			
	  		</table>
	  	</div>

	</div>

	<script>
		document.getElementById('profileOpen').style.backgroundColor = "#FF6029";
	</script> 
</html>


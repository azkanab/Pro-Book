<!DOCTYPE html>
<html>
	<style>
		<?php
			include '../component/header.css';
		?>
	</style>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
	  	<link rel="stylesheet" type="text/css" href="editprofile.css">
	  	<title>Pro-Book | Edit Profile</title>
	</head>

	<?php
		include '../pages/user_data.php';
	?>

	
	<div class="header">
		<h1 class="edit-profile">
			Edit Profile
		</h1>
	</div>
	<div  class="edit-table">
		<form name= "myForm"  method="POST" action="update.php" enctype="multipart/form-data" >
			<table class="tablestyle">
				<tr>
					<td class="tdstyle">
						<img class="profpic" src=
							<?php
				  				echo "\"".$link_pict."\"";
				  			?>
	  					>
					</td>
					<td>
						<div class="data-font">
							 Update profile picture
						</div>
						<div class="flexdisplay">
							<div class="width100">
								<input type="text" id="input-image" class="data-input1">
							</div>
							<div style="labelstyle">
									<label for="profpic" class="browse-button"> Browse ...
								</label>
								<input id="profpic" name="fileToUpload" type="file"/>
							</div>
						</div>
					</td> 
				</tr>
				<tr class="row-style">
					<td class="data-font">
						Name
					</td>
					<td>

						<input onkeyup="return validateForm()" type="text" class="data-input" id="name" name="name" value=<?php

					//	<input onkeyup="validateForm(this.id)" type="text" class="data-input" id="name" name="name" value=<?php

	  							echo"\"".$name."\"";
	  						?>
	  					>					
	  				</td>
				</tr>
				<tr>
					<td class="data-font">
						Address
					</td>
					<td >

						<textarea onkeyup="return validateForm()" class="data-input text-address"  rows="6" cols="50"  name="address" id="address"><?php echo $address;?></textarea>

<!--						<textarea onkeyup="validateForm(this.id)" class="data-input text-address"  rows="6" cols="50"  name="address" id="address">--><?php //echo $address;?><!--</textarea>-->
					</td>


				</tr>
				<tr>
					<td class="data-font">
						Phone Number
					</td>
					<td>

						<input onkeyup="return validateForm()" type="text" class="data-input" name="phone" id="phone" value=<?php

//						<input onkeyup="validateForm(this.id)" type="text" class="data-input" name="phone" id="phone" value=<?php

	  							echo"\"".$phone."\"";
	  						?>
	  					>
					</td>
				</tr>
			</table>
			<div class="button-footer">
				<div class="button-flex">
					<a class="unlined" href="profile.php">
						<div class="button-style">
						 Back</div>
					</a>

				</div>
				<div class="flex-button">
					<button type= "submit" id="submit" class="button-style2"> Save </button>
				</div>
			</div>
		</form>
	</div>
	
	<script type="text/javascript">
		document.getElementById('profileOpen').style.backgroundColor = "#FF6029";

		document.getElementById('profpic').onchange=function(){
			document.getElementById('input-image').value=this.value;
		}


        function validateForm() {
		    var x = document.getElementById('name').value;
            if ((x == "")||(x.length>20)) {
                document.getElementById('name').style.borderColor='red';
              //  document.getElementById('submit').disabled=true;
                a= 0;
            } else {
                document.getElementById('name').style.borderColor='#808080';
               // document.getElementById('submit').disabled=false;
                a=1;
            }

            var y = document.getElementById('address').value;
            if (y == ""){
                document.getElementById('address').style.borderColor='red';
                //document.getElementById('submit').disabled=true;
                b=0;
            } else {
                document.getElementById('address').style.borderColor='#808080';
               // document.getElementById('submit').disabled=false;
                b=1;
            }

            var z = document.getElementById('phone').value;
            if ((z == "")||(z.length<9)||(z.length>20)) {
                document.getElementById('phone').style.borderColor='red';
                console.log("masuk ga nih");
                // document.getElementById('submit').disabled=true;
                c=0;
            } else {
                document.getElementById('phone').style.borderColor='gray';
               // document.getElementById('submit').disabled=false;
                c=1;
            }

                console.log("zleng=", z.length);

        // function validateForm(id) {
        // 	var x = document.getElementById('name').value;
        //     var y = document.getElementById('address').value;
        //     console.log(y, 'alamat');
        //     var z = document.getElementById('phone').value;
        //     console.log(z, 'nopon');
        // 	if ((x != "")&&(y != "")&&(z != "")){
        //     	console.log('hehe');
        //         document.getElementById('submit').disabled=false;
        //         document.getElementById('name').style.borderColor='gray';
        //         document.getElementById('address').style.borderColor='gray';
        //         document.getElementById('phone').style.borderColor='gray';
        //    	} else {
        //    		if (id == "name") {
        //    			if (x == "") {
		//             	console.log('nama kosong');
		//                 document.getElementById('name').style.borderColor='red';
		//                 document.getElementById('submit').disabled=true;
		//             } else {
		//             	document.getElementById('name').style.borderColor='gray';
	    //         	}
	    //     	} else if (id == "address") {
	    //     		if (y == "") {
		//             	console.log('alamat kosong');
		//                 document.getElementById('address').style.borderColor='red';
		//                 document.getElementById('submit').disabled=true;
	    //         	} else {
	    //         		document.getElementById('address').style.borderColor='gray';
	    //         	}
	    //     	} else if (id == "phone") {
		//         	if (z == "") {
		//             	console.log('nomor telepon kosong');
		//                 document.getElementById('phone').style.borderColor='red';
		//                 document.getElementById('submit').disabled=true;
		//             } else {
		//             	document.getElementById('phone').style.borderColor='gray';
		//             }
	    //         }
	    //   }

            console.log(a+b+c);
            if ((a+b+c)==3){
                 document.getElementById('submit').disabled=false;
                document.getElementById('submit').style.backgroundColor='#0094cc';
                console.log('valid')
             }else{
                 document.getElementById('submit').disabled=true;
                document.getElementById('submit').style.backgroundColor='gray';
                console.log('notvalid')
            }
             console.log(document.getElementById('submit').disabled);
        }

	</script>
</html>
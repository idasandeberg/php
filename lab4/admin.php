
<body>
	<!---Secure and allow begränsa---->
	<img id="plogo" src="images/primarylogo.png">
		<div id="bodyTwo">
			<?php include ('header.php'); ?>

			<h1>Hey</h1>
				<div class="text">
					<div class="text1">
						<p>
							This is your login page
						</p>

					</div>
					<div class="form1">
						
						<form class="uploadform" method="post" enctype="multipart/form-data"> <!--gör förfrågan till kod-->
							<h3>Upload file:</h3>
							<input id="uploadfile" type="file" name="uploadfile"><br/>
							<input class="uploadbutton" type="submit" name="submitupload"  value="Upload">
						</form>

			<?php
				if (isset($_FILES["uploadfile"])){

					$uploadOK=0;
					$target_dir = "uploaded/";
					$target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);
					$extension = strtolower(substr($_FILES['uploadfile']['name'], strrpos($_FILES['uploadfile']['name'], '.') + 1)); //kollar namn och filformat

					//check size and format. if wrong
					if ($_FILES['uploadfile']['size'] > 2000000){
						echo "The image is too big";
						$uploadOK = 0; //filstorlek är fel = 0
						
						}else if($extension != 'jpg' && $extension != 'jpeg' && $extension != 'gif' && $extension != 'png' && $extension != 'pdf') {
						echo "You can only upload files in the formats: jpg, jpeg, gif, png and pdf";
						$uploadOK = 0;
						
						} else{
						$uploadOK = 1;
					}
					
					if ($uploadOK == 0) {
			    		echo "Your file was not uploaded.";
					// if everything is ok, try to upload file
					} else{
						if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $target_file)){
							header("location: gallery.php");
					}
					}
				}
			?>

					</div>
				</div>
			</div>


			<?php include ('footer.php');?>
</body>
<body>
	
	<img id="plogo" src="images/primarylogo.png">
		<div id="bodyTwo">
			<?php include ('header.php'); ?>
			<?php ?>
			<h2>Gallery</h2>
		
		<div class="galleryimages">

			<?php

				$dir = "uploaded/*.*"; //alla filnamn och alla filtyper
				$pictures = glob($dir);
				foreach($pictures as $picture){
					echo "<div> <img class='pics' src='" . $picture . "'/></div>";
				}
				
			?>

		</div>




		</div>






		<?php include ('footer.php') ?>


</body>
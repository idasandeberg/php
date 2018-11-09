
<body>

	<img id="plogo" src="images/primarylogo.png">
		<div id="bodyTwo">

			<?php include ('header.php'); ?>
			<h2>My books</h2>



			<?php 
			#open the db

		@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

		#able to connect?

		if($db -> connect_error){

			echo "Sorry couldn't connect. This is why:" . $db->connect_error;
			exit();
		}
		if (isset($_GET["reserve"])){
			$bookID = $_GET["reserve"];
			$query = "UPDATE books SET Reserve = '0' WHERE id= '$bookID'";
			$stmt = $db->prepare($query);
			$stmt->execute();
		}

/*
SELECT * FROM books
JOIN book_author ON books.id = book_author.bookID
JOIN authors ON authors.id = book_author.authorID
WHERE books.title LIKE '%'
*/
		$query = "SELECT books.Reserve, books.id, books.title, authors.first_name, authors.last_name, books.isbn FROM books
				JOIN book_author ON books.id = book_author.bookID
				JOIN authors ON authors.id = book_author.authorID
				AND Reserve=1";



	

		$stmt = $db->prepare($query);
		$stmt -> bind_result($Reserve, $bookID, $title, $authorf, $authorl, $isbn);
		$stmt -> execute();	


	


				
				while($stmt -> fetch()){
					echo $Reserve. ' ';
					echo $bookID. ' ';
					echo $title. ' ';
					echo $authorf. ' ';
					echo $authorl. ' ';
					echo $isbn. ' ';
					echo "<form id='formReserve' method='get'> 
						<button name='reserve' value='".$bookID."' id='".$bookID."'>Return</button> </form>". "</br>";
				}
			?>
		</div>
		<?php include ('footer.php'); ?>


</body>


<body>
	<img id="plogo" src="images/primarylogo.png">
	<div id="bodyTwo">
	<?php include ('header.php'); ?>
	
	
	<?php

		#open the db
		@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

		#able to connect?

		if($db -> connect_error){

			echo "Sorry couldn't connect. This is why:" . $db->connect_error;
			exit();
		}

		$searchauthor = ""; //Sparar det som skrivs i form. Undefined variable
		$searchtitle = "";

		if (isset($_GET["reserve"])){  //hämtar information om button reserve
			$bookID = $_GET["reserve"]; //BookID när man klickar reserve
			$query = "UPDATE books SET Reserve = '1' WHERE id= '$bookID'"; //kollar i table books och set reserve till 1 i det ID
			$stmt = $db->prepare($query);
			$stmt->execute();
		}


		if (isset($_POST) && !empty($_POST)) { //är post aktiverad? strunta i whitespace

			$searchauthor = trim($_POST['author']);	
			$searchtitle = trim($_POST['title']);


		}

/*
SELECT * FROM books
JOIN book_author ON books.id = book_author.bookID
JOIN authors ON authors.id = book_author.authorID
WHERE books.title LIKE '%'
*/
		$query = "SELECT books.Reserve, books.id, books.title, authors.first_name, authors.last_name, books.isbn 
				FROM books
				JOIN book_author ON books.id = book_author.bookID
				JOIN authors ON authors.id = book_author.authorID AND Reserve=0"; //tar bara om det är reserve=0. när böckerna ligger i browsesidan

		//visar det man söker på
		if ($searchtitle && !$searchauthor) {
			$query = $query . " WHERE books.title LIKE '%" . $searchtitle . "%' ";
		}

		if (!$searchtitle && $searchauthor){
			$query = $query . " WHERE authors.first_name LIKE '%" . $searchauthor . "%' OR authors.last_name LIKE '%" . $searchauthor . "%' ";
		}

		if ($searchtitle && $searchauthor) {
			$query = $query . " WHERE books.title LIKE '%" . $searchtitle . "%' AND authors.first_name LIKE '%" . $searchauthor . "%' OR authors.last_name LIKE '%" . $searchauthor . "%' ";
		}

	


		$stmt = $db->prepare($query);
		$stmt -> bind_result($Reserve, $bookID, $title, $authorf, $authorl, $isbn); //tar select och gör till variablar
		$stmt -> execute();	

		?>




			
			
			<h2>Browse Books</h2>
				<div id="browseText">
					<form id="browseForm" method="post">
						<input type="text" id="author" name="author" placeholder="Author">
						<input type="text" id="title" name="title" placeholder="Title of book">
						<input type="submit" value="Submit">
					</form>
				</div>

		

			<?php

				echo "<table id='table'>
				
				<th class='rubrik'>Title</th>
				<th class='rubrik2'>Author</th>
				<th class='rubrik3'>ISBN</th>"; 
			
				
				
			while($stmt -> fetch()){
				echo "
					<div class='tabelcontent'>
					<td class='tabletitle'>$title</td>
					<td class='tableauthor'>$authorf</td>
					
					<td class='tableisbn'>$isbn<td/>
					</div></table>";
				echo $Reserve. ' ';
				echo $bookID. ' ';
				


				echo "<form id='formReserve' method='get'> 
						<button name='reserve' value='".$bookID."'>Reserve</button> </form>";
					}

					
			?>
		</div>



	<?php include ('footer.php'); ?>


</body>

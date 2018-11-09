<?php

		#open the db
		@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

		#able to connect?

		if($db -> connect_error){

			echo "Sorry couldn't connect. This is why:" . $db->connect_error;
			exit();
		}

		$username = ""; //Sparar det som skrivs i form. Undefined variable
		$password = "";


		if (isset($_POST) && !empty($_POST)) { 

			$username = trim($_POST['user']);	//strunta i whitespace och gör '' till variabel
			$password = $_POST['pass'];
			
			//Secure the form! Escape special characters in a string
			$username = mysqli_real_escape_string($db, $username);
			$password = mysqli_real_escape_string($db, $password);
			
			//converts characters to HTML entities. <p></p> = %&€"
			/* FÖRMEREDELSE XSS
			$user= htmlentities($username);
			$password= htmlentities($password);
			*/
			
			$query = "SELECT username, password 
							FROM users 
							WHERE username = '".$username."' 
							AND password = '".$password."'";

			$stmt = $db->prepare($query);
			$stmt -> bind_result($user, $pass);
			$stmt -> execute();

			$stmt->fetch();			

			if ($user && $pass){
				header("Location: admin.php");
			}else{
				echo "Wrong username or password!";
			}
				
			
		}
?>


			

		

		


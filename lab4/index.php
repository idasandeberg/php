
<body>
	<img id="plogo" src="images/primarylogo.png">
		<div id="bodyTwo">

			<?php include ('header.php'); ?>
			
			
			<h1>Welcome to the book club</h1>
				<div class="text">
					<div class="text1">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					<div class="form1">
						<form id="login"method="post">
							<h3>LOGIN</h3>
							<input class="userbox" type="text" name="user" placeholder="Enter username"></br>
							<input class="passbox" type="password" name="pass" placeholder="Enter password" ></br>
							<button class="logbutton" name="loginbtn">Login</button></br>
							<?php include ('login.php'); ?>
						</form>
					</div>
				</div> 






		</div>

		<?php include ('footer.php'); ?>
	

</body>

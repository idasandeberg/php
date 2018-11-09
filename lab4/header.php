
<!DOCTYPE html>
<html>
<head>
	<title>Book Club</title>
	<link rel="stylesheet" type="text/css" href="main.css?v=<?php echo time(); ?>">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
	<?php include ('config.php'); ?>
</head>



<header>
		<div id="menudiv">
			
			<nav id="mainmenu">
				<li> 

					<a
						class="<?php echo ($current_page == 'index.php' || 
						$current_page == '') ? 'active' : NULL ?>" 
						href="index.php"
					>Home</a>
				</li>
				<li> 
					<a 
						class="<?php echo ($current_page == 'about.php' || 
						$current_page == '') ? 'active' : NULL ?>"href="about.php"
					>About Us</a>
				</li>
				<li> 
					<a 
						class="<?php echo ($current_page == 'browse.php' || 
						$current_page == '') ? 'active' : NULL ?>"href="browse.php"
					>Browse Books</a>
				</li>
				<li> 
					<a 
						class="<?php echo ($current_page == 'mybooks.php' || 
						$current_page == '') ? 'active' : NULL ?>"href="mybooks.php"
					>My Books</a>
				</li>
				<li> 
					<a 
						class="<?php echo ($current_page == 'contact.php' || 
						$current_page == '') ? 'active' : NULL ?>"href="contact.php"
					>Contact</a>
				</li>
				<li> 
					<a 
						class="<?php echo ($current_page == 'gallery.php' || 
						$current_page == '') ? 'active' : NULL ?>"href="gallery.php"
					>Gallery</a>
				</li>
			</nav>

		</div>
</header>
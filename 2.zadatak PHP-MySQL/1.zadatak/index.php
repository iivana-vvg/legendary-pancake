<?php 
print '
<!DOCTYPE html>
<html>
	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="Web stranica">
        <meta name="keywords" content="HTML,CSS">
		
		<title>Rentals</title>
	</head>
<body>
	<header>
		<div'; if ($_GET['menu'] > 1) { print ' class="hero-subimage"'; } else { print ' class="hero-image"'; }  print '></div>
		<nav>
			<ul>
				<li><a href="index.php?menu=1">Home</a></li>
				<li><a href="index.php?menu=2">Apartments</a></li>
				<li><a href="index.php?menu=2">Hotels</a></li>
				<li><a href="index.php?menu=3">Contact</a></li>
				<li><a href="index.php?menu=4">About us</a></li>
				<li><a href="index.php?menu=4">Gallery</a></li>
			</ul>
		</nav>
	</header>
	<main>';
		
	# Homepage
	if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("home.php"); }
	
	# Apartments
	else if ($_GET['menu'] == 2) { include("apartments.php"); }
	
	# Hotels
	else if ($_GET['menu'] == 3) { include("hotels.php"); }
	
	# Contact
	else if ($_GET['menu'] == 4) { include("contact.php"); }
	
	# About
	else if ($_GET['menu'] == 5) { include("about.php"); }
	
	# Gallery
	else if ($_GET['menu'] == 6) { include("gallery.php"); }
	
	print '
	</main>
	<footer>
		<p>Copyright &copy; ' . date("Y") . ' Ivana Ivković. <a href="https://github.com/iivana-vvg/legendary-pancake.git"><img src="img/GitHub-Mark-Light-32px.png" title="Github" alt="Github"></a></p>
	</footer>
</body>
</html>';
?>
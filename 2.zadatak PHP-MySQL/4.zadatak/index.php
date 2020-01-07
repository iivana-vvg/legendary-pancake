<?php 
	# Stop Hacking attempt
	define('__APP__', TRUE);
	
	# Start session
    session_start();
	
	# Database connection
	include ("dbconn.php");
	
	# Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	# Variables MUST BE STRINGS A-Z
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	
	# Classes & Functions
    include_once("functions.php");
	
print '
<!DOCTYPE html>
<html>
	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="web stranica">
		<meta name="keywords" content="HTML,CSS, PHP">
		
		<!-- Schema.org markup for Google+ -->
		<meta itemprop="name" content="Hello Example">
		<meta itemprop="description" content="for Google+">
		<meta itemprop="image" content="Your URL"> 
		
		<!-- Open Graph data -->
		<meta property="og:title" content="Hello">
		<meta property="og:type" content="article">
		<meta property="og:url" content="http://Rentals.com/">
		<meta property="og:image" content="Your URL">
		<meta property="og:description" content="Opis">
		<meta property="article:tag" content="HTML,CSS">
		
		<!-- Twitter Card data -->
		<meta name="twitter:title" content="Twitter 365">
		<meta name="twitter:description" content="za twitter">
		<meta name="twitter:site" content="@MyCroatia365 ">
		
        <meta name="author" content="iivkov1@vvg.hr">
		<!-- favicon meta -->
		<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
		<!-- end favicon meta -->
		<!-- end meta elements -->
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<!-- End Google Fonts -->
		<title>Rentals</title>
	</head>
<body>
	<header>
		<div'; if ($menu > 1) { print ' class="hero-subimage"'; } else { print ' class="hero-image"'; }  print '></div>
		<nav>';
			include("menu.php");
		print '</nav>
	</header>
	<main>';
		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}
	
	# Homepage
	if (!isset($menu) || $menu == 1) { include("home.php"); }
	
	# Apartments
	else if ($menu == 2) { include("apartments.php"); }
	
	# Hotels
	else if ($menu == 3) { include("hotels.php"); }
	
	# Contact
	else if ($menu == 4) { include("contact.php"); }
	
	# About
	else if ($menu == 5) { include("about.php"); }
	
	# Gallery
	else if ($menu == 6) { include("gallery.php"); }
	
	# Register
	else if ($menu == 7) { include("register.php"); }
	
	# Signin
	else if ($menu == 8) { include("signin.php"); }
	
	# Admin webpage
	else if ($menu == 9) { include("admin.php"); }
	
	print '
	</main>
	<footer>
	
		<p>Copyright &copy; ' . date("Y") . ' Ivana Ivkovic. <a href="https://github.com/iivana-vvg/legendary-pancake">Link GitHub</a></p>
	</footer>
</body>
</html>';
?>

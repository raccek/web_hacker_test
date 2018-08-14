<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: gra.php');
		exit();
	}

	session_destroy();
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>HiR Soft</title>
	
	<meta name="description" content="Stworzę dla Ciebie wyjątkową stronę www! Zatrudnij programistę webowego: PHP, JavaScript, HTML, CSS, MySQL, WordPress, Joomla, Drupal." />
	<meta name="keywords" content="zamów, stronę, tworzenie, www, programista, portfolio, php, javascript, html, css, WordPress, Joomla, Drupal" />
	<meta name="theme-color" content="#303030">
	
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lato|Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	<script src="timer.js"></script>
		
</head>

<body onload="odliczanie();">
	
	<div id="container">
	
		<div class="rectangle">
			<div id="logo"><a href="index.php" class="tilelinkhtml5">HiR Soft</a></div>
			<div id="zegar">12:00:00</div>
			<div style="clear: both;"></div>
		</div>
		
		<div class="square">
			<div class="tile1">
				<a href="kimjestesmy.php" class="tilelink"><i class="icon-user"></i><br />Who Am I?</a>
			</div>
			<a href="oferta.php" class="tilelinkhtml5">
				<div class="tile1">
					<i class="icon-laptop"></i><br />Oferta
				</div>
			</a>
			<div style="clear:both;"></div>
			
			<div class="tile2">
				<a href="logowanie.php" class="tilelink"><i class="icon-graduation-cap"></i><br />Sign in</a>
			</div>
			<div class="tile3">
				<a href="kontakt.php" class="tilelink"><i class="icon-mail"></i><br />Contact Us</a>
			</div>
			<div style="clear:both;"></div>
			
			<div class="tile4">
				<i>Talk is cheap. Show me the code!</i><br />- Linus Torvalds, twórca Linuxa
			</div>
		</div>
		<div class="square">
			<div class="tile5">
				Witaj!<br /><br />
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pulvinar ipsum mauris, ac elementum felis convallis non. Duis aliquam felis vel dignissim tincidunt. In tellus mauris, tempor rutrum blandit in, efficitur ac quam. Mauris eu orci scelerisque, placerat eros id, condimentum justo. Suspendisse ac mattis orci, at mollis orci. 
			</div>
			<div class="yt">
				<a href="http://youtube.com" target="_blank" class="sociallink"><i class="icon-youtube"></i></a>
			</div>
			<div class="fb">
				<a href="http://facebook.com" target="_blank" class="sociallink"><i class="icon-facebook"></i></a>
			</div>
			<div class="gplus">
				<a href="http://plus.google.com" target="_blank" class="sociallink"><i class="icon-gplus"></i></a>
			</div>
			<div class="tw">
				<a href="http://twitter.com" target="_blank" class="sociallink"><i class="icon-twitter"></i></a>			
			</div>
			<div style="clear:both;"></div>
		</div>
		<div style="clear: both;"></div>
		
		<div class="rectangle"> <?php echo date("Y"); ?> &copy; HiR Soft </div>
	
	</div>
	
</body>
</html>
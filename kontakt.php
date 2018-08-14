<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>HiR Soft</title>
	
	<meta name="description" content="Stworzę dla Ciebie wyjątkową stronę www! Zatrudnij programistę webowego: PHP, JavaScript, HTML, CSS, MySQL, WordPress, Joomla, Drupal." />
	<meta name="keywords" content="zamów, stronę, tworzenie, www, programista, portfolio, php, javascript, html, css, WordPress, Joomla, Drupal" />
	
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="login.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<link href='http://fonts.googleapis.com/css?family=Lato|Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	<script src="timer.js"></script>
		
</head>

<body onload="odliczanie();">
	
	<div id="container">
	
		<div class="rectangle">
			<div id="logo">
				<div class="logo1">
					<p>AllSafe</p>				
					
				</div>
				<div class="logo2">
					
				</div>
				<div style="clear:both;"></div>
			</div>
			<div id="zegar">
				<div id="zegar2"> 12:00:00</div>
			</div>
			<div style="clear: both;"></div>
		</div>
		
		<div class="square">
			<div class="tile1">
				<a href="kimjestesmy.php" class="tilelink"><i class="icon-user-secret"></i><br />Who Am I?</a>
			</div>
			<a href="oferta.php" class="tilelinkhtml5">
				<div class="tile1">
					<i class="icon-file-code"></i><br />Oferta
				</div>
			</a>
			<div style="clear:both;"></div>
			
			<div class="tile2">
				<a href="index.php" class="tilelink"><i class="icon-off"></i><br />Sign in</a>
			</div>
			<div class="tile3">
				<a href="kontakt.php" class="tilelink"><i class="icon-mail-alt"></i><br />Contact Us</a>
			</div>
			<div style="clear:both;"></div>
			
			<div class="tile4">
				<i>Talk is cheap. Show me the code!</i><br />- Linus Torvalds, author Linuxa
			</div>
		</div>
		<div class="square">
			<div class="tile5">
				Kontakt<br /><br />
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pulvinar ipsum mauris, ac elementum felis convallis non. Duis aliquam felis vel dignissim tincidunt. In tellus mauris, tempor rutrum blandit in, efficitur ac quam. Mauris eu orci scelerisque, placerat eros id, condimentum justo. Suspendisse ac mattis orci, at mollis orci.	
			</div>
			<div class="yt">
				<a href="https://www.kali.org/" target="_blank" class="sociallink"><i class="icon-linux"></i></a>
			</div>
			<div class="fb">
				<a href="https://www.w3schools.com/" target="_blank" class="sociallink"><i class="icon-html5"></i></a>
			</div>
			<div class="gplus">
				<a href="https://stackoverflow.com/" target="_blank" class="sociallink"><i class="icon-stackoverflow"></i></a>
			</div>
			<div class="tw">
				<a href="http://www.hbo.com/silicon-valley" target="_blank" class="sociallink"><i class="icon-pied-piper-squared"></i></a>			
			</div>
			<div style="clear:both;"></div>
		</div>
		<div style="clear: both;"></div>
		
		<div class="rectangle"> <?php echo date("Y"); ?> &copy; HiR Soft </div>
	
	</div>
	



</body>
</html>
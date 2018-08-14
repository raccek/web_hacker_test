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
	
	<title>HiR Soft - strona główna</title>
	
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
					<a href="index.php" class="tilelink">AllSafe</a>				
					
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
				<i>Talk is cheap. Show me the code!</i><br />- Linus Torvalds, author Linuxa
			</div>
		</div>
		<div class="square">
			<div class="tile5">
				




				<div class="container">
			        <div class="user-text">
			        	<p style="margin-top: 0px;">Sign in to Dark Net!</p>
			        </div>
		        	<form action="zaloguj.php" method="post">
		        		<div class="form-input">
			                <input type="text" name="login" placeholder="Enter username"/>
			            </div>
			            <div class="form-input">
		                	<input type="password" name="haslo" placeholder="Enter password"/>
		            	</div>
		            	<?php if(isset($_SESSION['blad']))	echo $_SESSION['blad'] .'<br />'; ?>
		            	<input type="submit" value="Login" class="btn-login"/>
					</form>
			   	</div>



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
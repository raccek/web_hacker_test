<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	

?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Welcome to Dark Net</title>

	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="login.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<link href='http://fonts.googleapis.com/css?family=Lato|Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	<script src="timer.js"></script>

</head>

<body onload="odliczanie();" background="img/tlo.gif">
	

	<div id="container">
	
		<div class="rectangle">
			<div id="logo">
				<div class="logo1">
					<p>Welcome, to Dark Net</p>				
					
				</div>
				
					<?php
						echo '<div class="logo2">';
						echo '<p>Witaj <br /><br />'.$_SESSION['name'];
						echo '</div>';			
					?>
				
				
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
				
				<?php
					echo '<a href="logout.php" class="tilelink"><i class="icon-gamepad"></i><br />[ Wyloguj się! ]</a>';
				?>

			</div>
			<div class="tile3">
				<a href="kontakt.php" class="tilelink"><i class="icon-mail-alt"></i><br />Contact Us</a>
			</div>
			<div style="clear:both;"></div>
			
			<div class="tile4a">
				<i>Wasz czas jest ograniczony, więc nie marnujcie go, żyjąc cudzym życiem. Nie wpadajcie w pułapkę dogmatów, żyjąc poglądami innych ludzi</i><br />- Steve Jobs
			</div>
		</div>
		<div class="square">
			<div class="tile5">
				
				<p>Udało ci się zalogować do Dark Net</p>
	
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
				<a href="http://www.hbo.com/silicon-valley" target="_blank" class="sociallink"><i class="icon-pied-piper-alt"></i></a>			
			</div>
			<div style="clear:both;"></div>
		</div>
		<div style="clear: both;"></div>
		
		<div class="rectangle"> <?php echo date("Y"); ?> &copy; HiR Soft </div>
	
	</div>
</body>
</html>
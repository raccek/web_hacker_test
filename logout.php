<?php

	session_start();
	
	session_unset();
	
	header('Location: index.php');

	echo "<p>Zostałeś wylogowany </p>";

?>
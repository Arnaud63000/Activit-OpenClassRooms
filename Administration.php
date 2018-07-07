<?php

	$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');

$membres = $bdd->query('SELECT * FROM membres ORDER BY id DESC')
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Administration</title>
</head>
<body>
	

</body>
</html>	
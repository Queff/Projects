<?php
	include ('BDD.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test BDD</title>
</head>
<body>
	<h1> Inscription </h1>

	<form action="login.php" method="POST"> <!-- action pour savoir sur quelle page tu te redirige -->


		<p><input type="text" name="prenom" value="prenom" placeholder="Ex : Zozor" size="30" ></p>
		<p><input type="text" name="nom" value="nom" placeholder="Ex : Zozor" size="30"></p>
		<p><input type="text" name="email" value="email"></p>
		<p><input type="submit" value="Enregistrer"></p>

	</form>

	
		<?php
			echo $nom ." ". $prenom ." ". $age; //on affiche le nom prenom et age
		?>
	
</body>
</html>
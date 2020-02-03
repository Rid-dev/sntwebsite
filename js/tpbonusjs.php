<?php $error = false;
// mdp = tacos ; avec le chiffrement par ordre alphabetique : 20 1 3 15 19
if(isset($_POST["mdp"])){
	if ($_POST["mdp"]=="20131519"){
		header("Location: tp_bonus_js.pdf");
		die();
	} else{
		$error = true;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mot de passe</title>
	<style type="text/css">body{font-family: sans-serif;}</style>
</head>
<body>
	<h1>Bonjour ! </h1>
	<p><img src="tacos.jpg" alt="TACOS"></p>
	<form method="POST" action="tpbonusjs.php">
		<p>Pour accéder au contenu demandé : </p>
		<label for="mdp">Entrer le mot de passe</label> <input type="password" name="mdp"> <button type="submit">Valider</button>
		<?php if($error): ?>
		<p style="color: red;">Le mot de passe n'est pas correct !</p>
		<?php endif ?>
	</form>
	<p style="display: none;">A=1, B=2, C=3, D=4, ....</p>
</body>
</html>
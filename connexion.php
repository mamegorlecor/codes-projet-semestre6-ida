<?php 

include('configsunu.php');
$message="";
if(isset($_POST['email']) && isset($_POST['password'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	try{
	$selection=('SELECT * FROM utilisateurs WHERE email= :email');
	$sth = $connexion->prepare($selection);
	$sth->execute(['email'=>$email]);
	$utilisateurs = $sth->fetch();
	if($utilisateurs && password_verify($password,$utilisateurs['password'])){
		session_start();
		$_SESSION['email_utilisateur']=$utilisateurs['email'];
		header('Location:ajouterproduit.php');

	}
	else{
		$message="adresse email ou mot de passe incorrect";
	}
}
catch(PDOException $e){
		echo "erreur".$e->getMessage();
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="connexion.css">
	<title>page de connexion</title>
</head>
<body>

    <?php if (!empty($message)): ?>
        <p class="message"><?php echo $message ?></p>
    <?php endif; ?>
    <h1>Connexion</h1>
    	<div class="block">
	<form action="connexion.php" method="POST">
		<label for="email">Adresse email :</label><br>
		<input type="email" name="email" id="email"><br>
		<label for="password">mot de passe :</label><br>
		<input type="password" name="password" id="password"><br>
		<input type="submit" value="se connecter">
	</form>
	<a href="#" >Créer un compte </a>
</div>
</body>
</html>
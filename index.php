<?php include 'php_action/init.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php if (isset($_SESSION['mensagem'])): ?>
		<h3><?= $_SESSION['mensagem'] ?></h3>
	<?php endif ?>

		<h3>Ainda não tem conta? Então cadastre-se</h3>
		<form action="php_action/add.php" method="POST">
			<input type="text" name="nome" placeholder="Digite seu nome">
			<input type="text" name="user" placeholder="Digite um usuario">
			<input type="password" name="pass1" placeholder="Crie uma senha">
			<input type="password" name="pass2" placeholder="Confirme a senha">
			<input type="email" name="email" placeholder="Digite seu email">
			<input type="submit" name="enviar">
		</form>

		<h3>Já tem conta? entao clique para fazer o <button><a href="login.php">login</a></button></h3>

</body>
</html>
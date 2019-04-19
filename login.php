<?php include 'php_action/init.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="php_action/login.php" method="POST">
		<input type="email" name="email" placeholder="Digite seu email">
		<input type="password" name="senha" placeholder="Digite sua senha">
		<input type="submit" name="login">
	</form>

	<h3>Ainda nao tem cadastro? clique para cadastrar <button><a href="index.php">Cadastrar</a></button></h3>
	
</body>
</html>
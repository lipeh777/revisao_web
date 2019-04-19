<?php 
include 'php_action/init.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- pegando o nome do "user" e colocando como titulo -->
	<title><?= $_SESSION['user'] ?></title>
</head>
<body>
	<?php if (ta_logado()): ?>
		
	<h1>Olá <?= $_SESSION['user'] ?></h1>
	<h5>Se quiser sair, só clicar em <a href="php_action/logout.php">Sair</a></h5>

	<form action="php_action/add_status.php" method="POST">
		<input type="text" name="status" placeholder="o que quer postar?">
		<button><input type="submit" name="postar"></button>
	</form>
	
	<table>
		<tr>
			<th>Usuarios</th>
			<th>Postagens</th>
		</tr>
		<?php $status = file('files/status.csv');
		foreach($status as $post): $arrayStatus = explode('||', $post);?>
			<tr>

				 <td><?= $arrayStatus[0] ?></td>
				 <td><?= $arrayStatus[1] ?></td>

			</tr>
		<?php endforeach; ?>
	</table>

	<?php else: header('location: index.php'); endif; ?>
</body>
</html>
<?php 
 ?>
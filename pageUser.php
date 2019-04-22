<?php include 'php_action/init.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php if (isset($_GET['pageuser'])): $usuario = $_GET['pageuser']; ?>

	<h1>Dados de <?= $usuario ?></h1>
	<table>
		<tr>
			<th>Nome</th>
			<th>Email</th>
		</tr>
		<?php 

			$usersData = openFile('files/users.csv');
			foreach ($usersData as $user) {
				$usr = explode('||', $user);

				if ($usr[0] == $_GET['pageuser']) {
					?>
						<tr>
							<td><?= $usr[1] ?></td>
							<td><?= $usr[3] ?></td>
						</tr>
					<?php
					break;
				}
			}

		 ?>
	</table>
<?php endif ?>
	
</body>
</html>

<?php 
	include 'init.php';

	$email = post('email');
	$senha = post('senha');
	$users = file('../files/users.csv');

	

	foreach($users as $user){
		$arrayUers = explode('||', $user);
		if (trim($arrayUers[3]) == $email && trim($arrayUers[2]) == $senha) {
			//função criada em init.php
			login($arrayUers[3], $arrayUers[0]);
			header('location: ../user.php');
		}
	}


 ?>
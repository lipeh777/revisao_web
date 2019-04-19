<?php 
	include_once 'init.php';

	// função "empty" testa se uma variavel esta vazia/existir ou nao.
	// testando se todos os dados do formulario foram inseridos/existem.
	if (empty($_POST['user'] || $_POST['nome'] || $_POST['pass1'] || $_POST['pass2'] || $_POST['email'])) {
		$_SESSION['mensagem'] = "insira todos os dados";
		header('location: ../index.php');
		exit();
	}

		// pegando os dados do formulario
		$user = post('user');
		$nome = post('nome');
		$senha1 = post('pass1');
		$senha2 = post('pass2');
		$email = post('email');
		$file = "../files/users.csv";

		// verificação das senhas, se estao iguais
		if($senha1 !== $senha2){
			header('location: ../index.php');
			$_SESSION['mensagem'] = "Senhas nao coincidem";
			exit();
		}

		// cadastro
		// função cadastrar criada em init.php
		//		  os dados que eu quero salvar;  arquivo onde eu quero salvar 
		cadastrar($user, $nome, $senha1, $email, $file);
		$_SESSION['mensagem'] = "Usuario cadastrado";
		header('location: ../index.php');
	

 ?>
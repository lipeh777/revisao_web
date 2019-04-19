<?php 
	session_start();

	// essa função recebe um valor como parametro que é colocado como indice da superglobal $_POST.
	function post($parametro){
		return $_POST[$parametro];
	}

	// essa função faz o implode do array que é passado como parametro, dividindo seus elementos com '||'.
	function juntar($array){
		// pega os elementos do array e separa usando o separador '§§§', com a função join
		return join('||' ,$array);
	}

	// essa função ja faz o cadastro automaticamente, so precisa inserir os dados.
	function cadastrar($user, $nome, $senha, $email, $file){
		$arraySalve = juntar([$user, $nome, $senha, $email]) . "\n";
		$handle = fopen($file, 'a');
    	fwrite($handle, $arraySalve);
	}

	// essa função é bem parecida com a de cima, so que com menos parametros. mas utiliza a mesma ideia.
	function cadastrarStatus($user, $status, $file){
		$arraySalve = juntar([$user, $status]) . "\n";
		$handle = fopen($file, 'a');
    	fwrite($handle, $arraySalve);
	}

	// essa função faz o login, utilizando apenas o email e o user, a verificação de senha é feita pelo arquivo php_action/login.php
	function login($email, $user){
		$_SESSION['logado'] = true;
		$_SESSION['user'] = $user;
		$_SESSION['email'] = $email;
	}

	// essa função faz o logout do usuario tornado o indice 'logado' da superglobal $_SESSION, 'false', e tirando os indices 'user' e 'email', com o 'unset'.
	function logout() {
    	$_SESSION['logado'] = false;
    	unset($_SESSION['user']);
    	unset($_SESSION['email']);
	}

	// essa função so diz que o usuario ta logado. pra dizer que não esta é so colocar o "!" na frente, desta forma: !ta_logado(){}.
	function ta_logado() {
    	return $_SESSION['logado'] ?? false;
	}

 ?>

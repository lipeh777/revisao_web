<?php 
include 'init.php';

$status = post('status');
$file = "../files/status.csv";

if (ta_logado()) {
	cadastrarStatus($_SESSION['user'], $status, $file);
	header('location: ../user.php');
}


 ?>
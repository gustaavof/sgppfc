<?php
session_start();
include('config.php');

// se o campo usuario ou senha estiver vazio, redireciona para a página index.php
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}
// real scape string serve para fugir de sql injection
$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

// busca na base de dados o usuario e o md5 da senha e guarda na variavel query
$query = "select usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conn, $query);

// guarda na variável row o numero de linhas que retornou pela consulta
$row = mysqli_num_rows($result);

// caso for UMA linha, quer dizer que deu certo
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: menu.php');
	exit();
	// diferente de UMA linha, tem algo errado aí
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
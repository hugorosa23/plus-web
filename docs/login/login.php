<?php

// inclui o arquivo de inicialização
require '../vendor/init.php';

// resgata variáveis do formulário
$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

if (empty($email) || empty($senha)) {
    echo "Informe email e senha";
    exit;
}

$PDO = db_connect();

$sql = "SELECT * FROM usuarios WHERE us_email = :email AND us_senha = :senha";
$stmt = $PDO->prepare($sql);

$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', md5($senha));

$stmt->execute();

$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($usuarios) <= 0) {
    echo "Email ou senha incorretos";
    exit;
}

// pega o primeiro usuário
$usuario = $usuarios[0];

session_start();
$_SESSION['logged_in'] = true;
$_SESSION['us_id'] = $usuario['id'];
$_SESSION['us_nome_full'] = $usuario['nome'];
$_SESSION['us_login'] = $usuario['login'];
$_SESSION['us_email'] = $usuario['email'];

header('Location: ../home/home.php');

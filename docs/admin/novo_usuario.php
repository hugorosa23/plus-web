<?php
 
require_once '../vendor/init.php';
 
// pega os dados do formuário
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$login = isset($_POST['login']) ? $_POST['login'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;
 
 
// validação (bem simples, só pra evitar dados vazios)
if (empty($nome) || empty($login) || empty($email) || empty($senha))
{
    echo "Volte e preencha todos os campos";
    exit;
}
 
// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO usuarios(us_nome_full, us_login, us_email, us_senha) VALUES(:nome, :login, :email, :senha)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':login', $login);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', md5($senha));
 
 
if ($stmt->execute())
{
    header('Location: index.php');
}
else
{
    echo "Erro ao cadastrar usuario!";
    print_r($stmt->errorInfo());
}
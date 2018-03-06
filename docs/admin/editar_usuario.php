<?php
 
require_once '../vendor/init.php';
 
// resgata os valores do formulário
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$login = isset($_POST['login']) ? $_POST['login'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;
$permissao = isset($_POST['permissao']) ? $_POST['permissao'] : null;
$status = isset($_POST['status']) ? $_POST['status'] : null;
$id = isset($_POST['id']) ? $_POST['id'] : null;

// validação (bem simples, mais uma vez)
if (empty($nome) || empty($login) || empty($email) || empty($senha) || empty($permissao) || empty($status))
{
    echo "Volte e preencha todos os campos";
    exit;
}
 
// atualiza o banco
$PDO = db_connect();
$sql = "UPDATE usuarios SET us_nome_full = :nome, us_login = :login, us_email = :email, us_senha = :senha, us_permissao = :permissao, us_status = :status WHERE us_id = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':login', $login);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', md5 ($senha));
$stmt->bindParam(':permissao', $permissao);
$stmt->bindParam(':status', $status);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
 
if ($stmt->execute())
{
    header('Location: index.php');
}
else
{
    echo "Erro ao alterar cadastro de usuario";
    print_r($stmt->errorInfo());
}
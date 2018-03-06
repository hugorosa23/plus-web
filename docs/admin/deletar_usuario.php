<?php
 
require_once '../vendor/init.php';
 
// pega o ID da URL
$id = isset($_GET['id']) ? $_GET['id'] : null;
 
// valida o ID
if (empty($id))
{
    echo "ID não informado";
    exit;
}
 
// remove do banco
$PDO = db_connect();
$sql = "DELETE FROM usuarios WHERE us_id = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
 
if ($stmt->execute())
{
    header('Location: index.php');
}
else
{
    echo "Erro ao remover cadastro de usuario";
    print_r($stmt->errorInfo());
}

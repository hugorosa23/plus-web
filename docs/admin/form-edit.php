<?php
require '../vendor/init.php';
 
// pega o ID da URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
 
// valida o ID
if (empty($id))
{
    echo "ID para alteração não definido";
    exit;
}
 
// busca os dados du usuário a ser editado
$PDO = db_connect();
$sql = "SELECT us.us_nome_full, us.us_login, us.us_email, us.us_senha, pe.pe_permissao, us.us_status FROM usuarios us, permissoes pe WHERE us.us_id = :id and us.us_permissao = pe.pe_id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
 
$stmt->execute();
 
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);
 
// se o método fetch() não retornar um array, significa que o ID não corresponde a um usuário válido
if (!is_array($usuario))
{
    echo "Nenhum usuário encontrado";
    exit;
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Edição de Usuário - PLUS WEB</title>
    </head>
 
    <body>
 
        <h1>Sistema de Cadastro - PLUS WEB</h1>
 
        <h2>Edição de Usuário</h2>
         
        <form action="editar_usuario.php" method="post">
            <label for="nome">Nome: </label>
            <br>
            <input type="text" name="nome" id="nome" value="<?php echo $usuario['us_nome_full'] ?>">
 
            <br><br>
 
            <label for="login">login: </label>
            <br>
            <input type="text" name="login" id="login" value="<?php echo $usuario['us_login'] ?>">
 
            <br><br>
            
            <label for="email">Email: </label>
            <br>
            <input type="text" name="email" id="email" value="<?php echo $usuario['us_email'] ?>">
 
            <br><br>
            
            <label for="senha">senha: </label>
            <br>
            <input type="password" name="senha" id="senha" value="<?php echo $usuario['us_senha'] ?>">
 
            <br><br>
            
            <label for="permissao">Nivel de acesso: </label>
            <br>
            <select id="permissao" name="permissao">
                <option value="1">Usuario</option>
                <option value="2">Administrador</option>
            </select>
 
            <br><br>
            
            <label for="status">Status: </label>
            <br>
            <input type="text" name="status" id="status" value="<?php echo $usuario['us_status'] ?>">
 
            <br><br>
 
            <input type="hidden" name="id" value="<?php echo $id ?>">
 
            <input type="submit" value="Alterar">
        </form>
 
    </body>
</html>
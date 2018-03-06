<?php
require_once '../vendor/init.php';
 
// abre a conexão
$PDO = db_connect();
 
// SQL para contar o total de registros
$sql_count = "SELECT COUNT(*) AS total FROM usuarios ORDER BY us_nome_full ASC";
 
// SQL para selecionar os registros
$sql = "SELECT us.us_id, us.us_nome_full, us.us_login, us.us_email, pe.pe_permissao FROM usuarios us, permissoes pe WHERE us.us_permissao = pe.pe_id ORDER BY us.us_nome_full ASC";
 
// conta o toal de registros
$stmt_count = $PDO->prepare($sql_count);
$stmt_count->execute();
$total = $stmt_count->fetchColumn();
 
// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Sistema de Cadastro - PLUS WEB</title>
    </head>
 
    <body>
         
        <h1>Sistema de Cadastro - PLUS WEB</h1>
         
        <p><a href="form-add.php">Adicionar Usuário</a></p>
 
        <h2>Lista de Usuários</h2>
 
        <p>Total de usuários: <?php echo $total ?></p>
 
        <?php if ($total > 0): ?>
 
        <table width="50%" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Login</th>
                    <th>E-mail</th>
                    <th>Nivel de Acesso</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($usuario = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $usuario['us_id'] ?></td>
                    <td><?php echo $usuario['us_nome_full'] ?></td>
                    <td><?php echo $usuario['us_login'] ?></td>
                    <td><?php echo $usuario['us_email'] ?></td>
                    <td><?php echo $usuario['pe_permissao'] ?></td>
                    <td>
                        <a href="form-edit.php?id=<?php echo $usuario['us_id'] ?>">Editar</a>
                        <a href="deletar_usuario.php?id=<?php echo $usuario['us_id'] ?>" onclick="return confirm('Tem certeza de que deseja remover?');">Remover</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
 
        <?php else: ?>
 
        <p>Nenhum usuário registrado</p>
 
        <?php endif; ?>
    </body>
</html>
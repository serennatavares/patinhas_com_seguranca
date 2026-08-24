<?php 
include("infra/conexao.php");

$sql = "SELECT * FROM clientes";
$clientes = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">    
        <title>AuMigos</title>
        <link rel="stylesheet" href="style/style.css">
    </head>

    <body>

    <h1>Bem-vindo ao AuMigos!</h1>
    <h2> Cadastre-se aqui:</h2>

    <div>

        <form action="public/cadastrar_clientes.php" method="POST">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <button type="submit">Cadastrar</button>
        </form>

        <a href="public/listar_animais.php">Listar Animais</a>

    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>


        <?php while ($cliente = $clientes->fetch_assoc()) { ?>

            <tr>
                <td><?php echo $cliente['id']; ?></td>
                <td><?php echo $cliente['nome']; ?></td>
                <td><?php echo $cliente['email']; ?></td>

                <td>
                    <a href="public/cadastrar_animais.php?id=<?php echo $cliente['id']; ?>">Cadastrar Animal</a>
                    <a href="public/listar_animais_usuario.php?id=<?php echo $cliente['id']; ?>">Listar Animais do Usuário</a>
                </td>

            </tr>

        <?php } ?>
    </table>

</body>
</html>

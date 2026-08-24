<?php 
include("infra/conexao.php");
?>

<DOCTYPE!html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AuMigos</title>
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>

    <h1>Bem-vindo ao AuMigos!</h1>
    <h2> Cadastre-se aqui:<h2>

    <div>

        <form action=public/cadastrar_clientes.php method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <button type=submit>Cadastrar</button>
        </form>

        <a href="public/listar_clientes.php">Listar Clientes</a>

    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>

    <?php

        $sql = "SELECT * FROM clientes";

        $clientes = $conn->query($sql);

        while ($clientes = $clientes->fetch_assoc($clientes)) { ?>

        ?>

            <tr>
                <td><?php echo $clientes['id']; ?></td>
                <td><?php echo $clientes['nome']; ?></td>
                <td><?php echo $clientes['email']; ?></td>
                <td>
                    <a href="public/cadastrar_animais.php?id=<?php echo $clientes['id']; ?>">Cadastrar Animal</a>
                    <a href="public/listar_animais.php?id=<?php echo $clientes['id']; ?>">Listar Animais</a>
                </td>
            </tr>

    <?php } ?>

</body>
</html>

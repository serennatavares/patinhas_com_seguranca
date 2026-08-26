<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listar Clientes</title>
</head>
<body>

<h1>Clientes Cadastrados!</h1>

<?php 
include("../infra/conexao.php");

$sql = "SELECT * FROM clientes";
$clientes = $conn->query($sql);

while ($cliente = $clientes->fetch_assoc()) {
?>

    <table>
        <tr>
            <td>ID: <?php echo $cliente['id']; ?> |</td>
            <td>Nome: <?php echo $cliente['nome']; ?> |</td>
            <td>E-mail: <?php echo $cliente['email']; ?> |</td>
            <td><a href="excluir_clientes.php?id=<?php echo $cliente["id"]; ?>">Excluir</a>
</td>
        </tr>
    </table>

<?php } ?>

<a href="../index.php"><button type="button">Voltar</button></a>

</body>
</html>

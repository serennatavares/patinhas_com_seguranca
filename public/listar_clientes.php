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
            <td><?php echo $cliente['id']; ?></td>
            <td><?php echo $cliente['nome']; ?></td>
            <td><?php echo $cliente['email']; ?></td>
        </tr>
    </table>

<?php } ?>

</body>
</html>

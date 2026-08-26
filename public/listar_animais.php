<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listar Clientes</title>
</head>
<body>

<h1>Animais Cadastrados!</h1>

<?php 

include("../infra/conexao.php");

$sql = "SELECT * FROM animais";
$animais = $conn->query($sql);

while ($animal = $animais->fetch_assoc()) {

    $cliente_id = $animal["cliente_id"];

    $sql_cliente = "SELECT nome FROM clientes WHERE id = ?";
    $stmt = $conn->prepare($sql_cliente);
    $stmt->bind_param("i", $cliente_id);
    $stmt->execute();

    $resultado = $stmt->get_result();
    $cliente = $resultado->fetch_assoc();
?>

    <table>
    <tr>
        <td>ID: <?php echo $animal['id']; ?> |</td>
        <td>Nome: <?php echo $animal['nome']; ?> |</td>
        <td>Espécie: <?php echo $animal['especie']; ?> |</td>
        <td>Raça: <?php echo $animal['raca']; ?> |</td>
        <td>Idade: <?php echo $animal['idade']; ?> |</td>
        <td>Dono: <?php echo $cliente['nome']; ?> |</td>
        <td><a href="excluir_animal.php?id=<?php echo $animal["id"]; ?>">Excluir</a>
        </td>
    </tr>
</table>

<?php } ?>

<a href="../index.php"><button type="button">Voltar</button></a>

</body>
</html>
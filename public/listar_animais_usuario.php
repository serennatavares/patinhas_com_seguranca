<?php

include("../infra/conexao.php");

$id = $_GET["id"];

$sql = "SELECT * FROM animais WHERE cliente_id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$animais = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Animais do Usuário</title>
</head>

<body>

    <h1>Animais do Usuário</h1>

    <?php while ($animal = $animais->fetch_assoc()) { ?>

        <tr>
            <td>ID: <?php echo $animal["id"]; ?> |</td>
            <td>Nome: <?php echo $animal["nome"]; ?> |<td>
            <td>Espécie: <?php echo $animal["especie"]; ?> |</td>
            <td>Raça: <?php echo $animal["raca"]; ?> |</td>
            <td>Idade: <?php echo $animal["idade"]; ?></td>
            <td><a href="excluir_animal.php?id=<?php echo $animal["id"]; ?>">Excluir</a>
        </tr>

    <br>

    <?php } ?>

    <br>
    <a href="../index.php"><button type="button">Voltar</button></a>

</body>

</html>
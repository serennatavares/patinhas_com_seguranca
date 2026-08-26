<?php

include("../infra/conexao.php");

$id = $_GET["id"];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Animal</title>
</head>

<body>

    <h1>Cadastrar Animal</h1>

    <form action="cadastrar_animais.php" method="POST">

        <input type="hidden" name="cliente_id" value="<?php echo $id; ?>">

        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Espécie:</label>
        <input type="text" name="especie" required>

        <label>Raça:</label>
        <input type="text" name="raca" required>

        <label>Idade:</label>
        <input type="number" name="idade" required>

        <button type="submit">Cadastrar</button>
        <a href="../index.php"> <button type="submit">Voltar</button></a>

    </form>

</body>
</html>
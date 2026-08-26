<?php 

include("../infra/conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM clientes WHERE id= ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$resultado = $stmt->get_result();
$cliente = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Clientes</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>Editar Cliente<h1>
    </header>

<main>
    <h2>Editando o cliente <?php echo $cliente["nome"]?>!<h2>

        <form action="atualizar_clientes.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $cliente["id"]?>">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo $cliente["nome"]?>">
            <br>

            <label for="email">E-mail</label>
            <input type="text" name="email" value="<?php echo $cliente["email"]?>">
            <br>

            <button type="submit">Atualizar</button>
        </form>

</main>

</body>
</html>
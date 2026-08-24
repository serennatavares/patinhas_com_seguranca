<?php

include("../infra/conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];

$sql = "INSERT INTO clientes (nome,email) VALUES (?, ?)";

$stmt = $conn->prepare($sql);
$stmt -> bind_param("ss", $nome, $email);
$stmt->execute();

header("Location: ../index.php");
exit;

?>
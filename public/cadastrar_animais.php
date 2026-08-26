<?php

include("../infra/conexao.php");

$cliente_id = $_POST["cliente_id"];
$nome = $_POST["nome"];
$especie = $_POST["especie"];
$raca = $_POST["raca"];
$idade = $_POST["idade"];

$sql = "INSERT INTO animais (cliente_id, nome, especie, raca, idade)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("isssi", $cliente_id, $nome, $especie, $raca, $idade);

$stmt->execute();

header("Location: ../index.php");
exit;

?>
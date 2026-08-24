<?php

include("../infra/conexao.php");

$id = $_GET['id'];

$sql = "DELETE FROM clientes WHERE id= ?";

$stmt= $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: ../index.php");
exit;

?>
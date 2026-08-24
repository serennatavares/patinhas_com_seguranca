<?php 

include("../infra/conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM clientes WHERE id= ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
?>
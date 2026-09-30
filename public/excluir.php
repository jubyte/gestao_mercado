<?php
require_once "../infra/conexao.php";

$id = $_GET["id"];
$sql = "DELETE FROM produtos WHERE id = ?";
$stmt = $conexao->prepare($sql);
$stmt->execute([$id]);

header("Location: ../index.php");
exit;
?>
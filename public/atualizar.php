<?php
require_once "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$quantidade_estoque = $_POST["quantidade_estoque"];
$data_validade = $_POST["data_validade"];

$sql = "UPDATE produtos SET nome = ?, categoria = ?, descricao = ?, preco = ?, quantidade_estoque = ?, data_validade = ? WHERE id = ?";
$stmt = $conexao->prepare($sql);

$stmt->execute([
    $nome,
    $categoria,
    $descricao,
    $preco,
    $quantidade_estoque,
    $data_validade,
    $id
]);

header("Location: ../index.php");
exit;
?>
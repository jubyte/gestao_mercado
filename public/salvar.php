<?php
require_once "../infra/conexao.php";

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$quantidade_estoque = $_POST["quantidade_estoque"];
$data_validade = $_POST["data_validade"];

$sql = "INSERT INTO produtos (nome, categoria, descricao, preco, quantidade_estoque, data_validade) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conexao->prepare($sql);
$stmt->execute([
    $nome,
    $categoria,
    $descricao,
    $preco,
    $quantidade_estoque,
    $data_validade
]);

header("Location: ../index.php");
exit;
?>
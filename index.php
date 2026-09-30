<?php
require_once "infra/conexao.php";

$sql = "SELECT * FROM produtos";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
</head>

<body>
    <h1>PRODUTOS</h1>

    <a href="public/cadastrar.php">Cadastrar produto</a>
    
    <br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Validade</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?= $produto["id"] ?></td>
                <td><?= $produto["nome"] ?></td>
                <td><?= $produto["categoria"] ?></td>
                <td><?= $produto["descricao"] ?></td>
                <td>R$ <?= number_format($produto["preco"], 2, ",", ".") ?></td>
                <td><?= $produto["quantidade_estoque"] ?></td>
                <td><?= $produto["data_validade"] ?></td>

                <td>
                    <a href="public/editar.php?id=<?= $produto["id"] ?>">Editar</a>
                    <a href="public/excluir.php?id=<?= $produto["id"] ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
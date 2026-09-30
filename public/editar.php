<?php
require_once "../infra/conexao.php";
$id = $_GET["id"];

$sql = "SELECT * FROM produtos WHERE id = ?";
$stmt = $conexao->prepare($sql);
$stmt->execute([$id]);
$produto = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar produto</title>
</head>

<body>
    <h1>Editar produto</h1>

    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?= $produto["id"] ?>">

        <label>Nome:</label>
        <input type="text" name="nome" value="<?= $produto["nome"] ?>" required>

        <br><br>

        <label>Categoria:</label>
        <input type="text" name="categoria" value="<?= $produto["categoria"] ?>" required>

        <br><br>

        <label>Descrição:</label>
        <textarea name="descricao" required><?= $produto["descricao"] ?></textarea>

        <br><br>

        <label>Preço:</label>
        <input type="number" name="preco" step="0.01" min="0" value="<?= $produto["preco"] ?>" required>

        <br><br>

        <label>Quantidade em estoque:</label>
        <input type="number" name="quantidade_estoque" min="0" value="<?= $produto["quantidade_estoque"] ?>" required>

        <br><br>

        <label>Data de validade:</label>
        <input type="date" name="data_validade" value="<?= $produto["data_validade"] ?>" required>

        <br><br>

        <button type="submit">Atualizar</button>
    </form>

    <br>

    <a href="../index.php">Voltar</a>
</body>

</html>
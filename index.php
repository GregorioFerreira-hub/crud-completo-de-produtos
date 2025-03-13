<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produtos</title>
</head>
<body>
    <h1>Adicionar Produtos</h1>
    <form action="submit.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required></textarea><br><br>
        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" required><br><br>
        <input type="submit" value="Adicionar">
    </form>
    <br>
    <a href="listar_contactos.php">Ver Lista de Contactos</a>
</body>
</html>

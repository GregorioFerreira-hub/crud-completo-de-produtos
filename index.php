<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Adicionar Produtos</title>
</head>
<body>
    <h1>Adicionar Produtos</h1>
    <form action="submit.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" required>
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required></textarea>
        
        <input type="submit" value="Adicionar" id="button">
    </form>
    
    <a href="listar_produtos.php">Ver Lista de Produtos</a>
</body>
</html>

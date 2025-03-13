<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "produtos";
// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
// Verificar se o codigo_produto foi passado via URL
if (isset($_GET['codigo_produto'])) {
    $codigo_produto = $_GET['codigo_produto'];
    // Consulta para selecionar o produto pelo codigo_produto
    $sql = "SELECT codigo_produto, nome, descricao, preco FROM tabelaprodutos WHERE codigo_produto = $codigo_produto";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nome = $row["nome"];
        $descricao = $row["descricao"];
        $preco = $row["preco"];
    } else {
        echo "Produto não encontrado.";
        exit;
    }
} else {
    echo "Código do produto não fornecido.";
    exit;
}
// Fechar conexão
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar Produtos</title>
</head>
<body>
    <h1>Editar Produtos</h1>
    <form action="atualizar_produtos.php" method="post">
        <input type="hidden" name="codigo_produto" value="<?php echo $codigo_produto; ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" required><br><br>
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required><?php echo $descricao; ?></textarea><br><br>
        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" value="<?php echo $preco; ?>"  required><br><br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>

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
// Coletar dados do formulário
$codigo_produto = $_POST['codigo_produto'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
// Atualizar os dados no banco de dados
$sql = "UPDATE tabelaprodutos SET nome='$nome', descricao='$descricao', preco='$preco' WHERE codigo_produto=$codigo_produto";
if ($conn->query($sql) === TRUE) {
    echo "Produto atualizado com sucesso!";
} else {
    echo "Erro ao atualizar Produto: " . $conn->error;
}

// Fechar conexão
$conn->close();
// Redirecionar de volta para a lista de contactos
header("Location: listar_produtos.php");
?>

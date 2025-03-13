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
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
// Inserir dados no banco de dados
$sql = "INSERT INTO tabelaprodutos (nome, descricao, preco) VALUES ('$nome', '$descricao', '$preco')";
if ($conn->query($sql) === TRUE) {
    echo "Produto adicionado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}
// Fechar conexão
$conn->close();
// Redirecionar de volta para a lista de contactos
header("Location: listar_produtos.php");
?>

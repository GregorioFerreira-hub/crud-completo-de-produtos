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
    // Consulta para eliminar o Produto
    $sql = "DELETE FROM tabelaprodutos WHERE codigo_produto = $codigo_produto";
    if ($conn->query($sql) === TRUE) {
        echo "Produto eliminado com sucesso!";
    } else {
        echo "Erro ao eliminar Produto: " . $conn->error;
    }
} else {
    echo "Código do produto não fornecido.";
}

// Fechar conexão
$conn->close();
// Redirecionar de volta para a lista de contactos
header("Location: listar_produtos.php");
?>

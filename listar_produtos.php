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
// Consulta para selecionar todos os produtos
$sql = "SELECT codigo_produto, nome, descricao, preco FROM tabelaprodutos";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<h1>Lista de Produtos</h1>";
    echo "<table border='1'>";
    echo "<tr><th>Código</th><th>Nome</th><th>Descrição</th><th>Preço</th><th>Ações</th></tr>";
    // Exibir cada contacto
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["codigo_produto"] . "</td>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["descricao"] . "</td>";
        echo "<td>" . $row["preco"] . "</td>";
        echo "<td>
                <a href='editar_produtos.php?codigo_produto=" . $row["codigo_produto"] . "'>Editar</a> | 
                <a href='eliminar_produtos.php?codigo_produto=" . $row["codigo_produto"] . "' onclick='return confirm(\"Tem certeza que deseja eliminar este produto?\")'>Eliminar</a>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum produto encontrado.";
}
// Fechar conexão
$conn->close();
?>
<br>
<a href="index.php">Adicionar Novo Produto</a>

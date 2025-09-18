<?php
// verificar_dados.php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost';
$dbname = 'zippa';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    echo "<h3>Dados na tabela motoristas:</h3>";
    
    $result = $pdo->query("SELECT * FROM motoristas");
    
    if ($result->rowCount() > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nome</th><th>Telefone</th><th>Email</th><th>Cidade</th></tr>";
        
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['telefone'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['cidade'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum dado encontrado na tabela motoristas.";
    }
    
} catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
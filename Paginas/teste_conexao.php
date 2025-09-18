<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost';
$dbname = 'zippa';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "✅ Conexão com MySQL OK!<br>";
    
    // Verificar se tabela existe
    $tabela = $pdo->query("SELECT COUNT(*) FROM motoristas");
    echo "✅ Tabela 'motoristas' existe!<br>";
    
    // Contar registros
    $registros = $pdo->query("SELECT COUNT(*) as total FROM motoristas")->fetch();
    echo "📊 Total de motoristas: " . $registros['total'];
    
} catch(PDOException $e) {
    echo "❌ Erro: " . $e->getMessage();
}
?>
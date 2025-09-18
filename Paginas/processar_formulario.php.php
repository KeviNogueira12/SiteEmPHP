<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // CONFIGURAÇÕES DO BANCO
    $host = 'localhost';
    $dbname = 'zippa';
    $username = 'root';
    $password = '';
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // COLETAR DADOS
        $nome = $_POST['nomeCompleto'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $cidade = $_POST['cidade'];
        $cnh = $_POST['cnh'];
        
        // INSERIR NO BANCO
        $stmt = $pdo->prepare("INSERT INTO motoristas (nome, telefone, email, cpf, cnh, cidade) 
                              VALUES (:nome, :telefone, :email, :cpf, :cnh, :cidade)");
        
        $stmt->execute([
            ':nome' => $nome,
            ':telefone' => $telefone,
            ':email' => $email,
            ':cpf' => $cpf,
            ':cnh' => $cnh,
            ':cidade' => $cidade
        ]);
        
        echo "sucesso";
        
    } catch(PDOException $e) {
        echo "Erro no banco: " . $e->getMessage();
    }
} else {
    echo "Método não permitido";
}
?>
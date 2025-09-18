<?php
// motorista_simples.php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Dados do banco
$host = 'localhost';
$dbname = 'zippa';
$username = 'root';
$password = '';

// Conectar ao banco
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}

// Processar formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $stmt = $pdo->prepare("INSERT INTO motoristas (nome, telefone, email, cpf, cnh, cidade) 
                              VALUES (?, ?, ?, ?, ?, ?)");
        
        $stmt->execute([
            $_POST['nomeCompleto'],
            $_POST['telefone'],
            $_POST['email'],
            $_POST['cpf'],
            $_POST['cnh'],
            $_POST['cidade']
        ]);
        
        echo "<script>alert('✅ Cadastro realizado!'); window.location.href = 'motorista_simples.php';</script>";
        
    } catch(PDOException $e) {
        echo "<script>alert('❌ Erro: " . addslashes($e->getMessage()) . "');</script>";
    }
}

// Buscar dados para tabela
$motoristas = $pdo->query("SELECT * FROM motoristas ORDER BY data_cadastro DESC")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZIPPA - Motorista (Versão Simples)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center text-primary">Cadastro de Motoristas - ZIPPA</h1>
        
        <!-- Formulário Simples -->
        <form method="POST" class="mb-5">
            <div class="row g-3">
                <div class="col-md-6">
                    <label>Nome Completo</label>
                    <input type="text" name="nomeCompleto" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label>Telefone</label>
                    <input type="text" name="telefone" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label>CPF</label>
                    <input type="text" name="cpf" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label>CNH</label>
                    <input type="text" name="cnh" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label>Cidade</label>
                    <select name="cidade" class="form-control" required>
                        <option value="ARARUNA">ARARUNA</option>
                        <option value="CAMPO MOURÃO">CAMPO MOURÃO</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Cadastrar Motorista</button>
                </div>
            </div>
        </form>

        <!-- Tabela Simples -->
        <h2 class="text-center">Motoristas Cadastrados</h2>
        <?php if (!empty($motoristas)): ?>
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Cidade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($motoristas as $m): ?>
                    <tr>
                        <td><?= htmlspecialchars($m['nome']) ?></td>
                        <td><?= htmlspecialchars($m['telefone']) ?></td>
                        <td><?= htmlspecialchars($m['email']) ?></td>
                        <td><?= htmlspecialchars($m['cidade']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-center text-muted">Nenhum motorista cadastrado ainda.</p>
        <?php endif; ?>
    </div>
</body>
</html>
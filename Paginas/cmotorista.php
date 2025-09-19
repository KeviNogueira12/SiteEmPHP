<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost';
$dbname = 'zippa';
$username = 'root';
$password = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $pdo->beginTransaction();
        
        $stmt_motorista = $pdo->prepare("INSERT INTO motoristas (nome, telefone, email, cpf, cnh, cidade) 
                                      VALUES (:nome, :telefone, :email, :cpf, :cnh, :cidade)");
        
        $dados_motorista = [
            ':nome' => $_POST['nomeCompleto'],
            ':telefone' => $_POST['telefone'],
            ':email' => $_POST['email'],
            ':cpf' => $_POST['cpf'],
            ':cnh' => $_POST['cnh'],
            ':cidade' => $_POST['cidade']
        ];
        
        $stmt_motorista->execute($dados_motorista);
        $motorista_id = $pdo->lastInsertId(); 
        
        $stmt_veiculo = $pdo->prepare("INSERT INTO veiculos (motorista_id, marca, placa, cor) 
                                     VALUES (:motorista_id, :marca, :placa, :cor)");
        
        $dados_veiculo = [
            ':motorista_id' => $motorista_id,
            ':marca' => $_POST['marca'],
            ':placa' => $_POST['placa'],
            ':cor' => $_POST['cor']
        ];
        
        $stmt_veiculo->execute($dados_veiculo);
        
      
        $pdo->commit();
        
        $mensagem_sucesso = "✅ Cadastro realizado com sucesso! Motorista e veículo cadastrados.";
        
    } catch(PDOException $e) {
       
        $pdo->rollBack();
        $mensagem_erro = "❌ Erro: " . $e->getMessage();
    }
}
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $motoristas = $pdo->query("
        SELECT m.*, v.marca, v.placa 
        FROM motoristas m 
        LEFT JOIN veiculos v ON m.id = v.motorista_id 
        ORDER BY m.data_cadastro DESC
    ")->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    $motoristas = [];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" href="../imagens/LOGO.webp" type="image/x-icon">
    <link href="../Css/style.css" rel="stylesheet">
    <title>ZIPPA | Motorista</title>
</head>
<body> 
    <?php include "../Include/header.php" ?>

    <main>
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-1 order-2">
                        <h1 class="display-4 fw-bold mb-4 text-zippa-orange">Ganhe dinheiro com seu veículo</h1>
                        <p class="lead mb-4">O ZIPPA conecta você a passageiros que precisam de uma carona. Tenha flexibilidade de horários e aumente sua renda.</p>
                        <a href="#form-section" class="btn btn-zippa-primary btn-lg scroll-to-form">Cadastre-se agora</a>
                    </div>
                    <div class="col-lg-4 order-lg-2 order-1 mb-4 mb-lg-0">
                        <img id="bannerpassageiro" src="../imagens/banner4.jpg" alt="Motorista ZIPPA" class="img-fluid rounded shadow-lg">
                    </div>
                </div>
            </div>
        </section>

        <!-- Form Section -->
        <section id="form-section" class="py-5 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-header text-center mb-5">
                            <h2 class="section-title">Torne-se um motorista ZIPPA</h2>
                            <p class="section-subtitle">Preencha o formulário abaixo para iniciar seu cadastro</p>
                        </div>
                        
                        <form class="row g-4 needs-validation custom-form" novalidate action="" method="POST">
                            <div class="col-md-6">
                                <label for="nomeCompleto" class="form-label">NOME COMPLETO</label>
                                <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto" placeholder="Digite seu Nome Completo" required>
                                <div class="valid-feedback">Tudo certo!</div>
                                <div class="invalid-feedback">Por favor, informe um Nome válido.</div>
                            </div>

                            <div class="col-md-6">
                                <label for="telefone" class="form-label">TELEFONE</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="telefone" 
                                    name="telefone"
                                    maxlength="15" 
                                    pattern="\(\d{2}\)\s\d{5}-\d{4}" 
                                    placeholder="(99) 99999-9999" 
                                    required>
                                <div class="valid-feedback">Tudo certo!</div>
                                <div class="invalid-feedback">Por favor, informe um Telefone válido.</div>
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">E-MAIL</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@gmail.com" required aria-describedby="inputGroupPrepend">
                                    <div class="invalid-feedback">Por favor, informe um e-mail válido.</div>
                                    <div class="valid-feedback">Tudo certo!</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cpf" class="form-label">CPF</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="cpf" 
                                    name="cpf"
                                    required 
                                    maxlength="14"
                                    pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
                                    placeholder="000.000.000-00"
                                    oninput="formatCPF(this)">
                                <div class="invalid-feedback">Por favor, informe um CPF válido.</div>
                                <div class="valid-feedback">Tudo certo!</div>
                            </div>

                            <div class="col-md-6">
                                <label for="cnh" class="form-label">CNH</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="cnh" 
                                    name="cnh"
                                    pattern="\d{11}" 
                                    maxlength="11" 
                                    placeholder="Apenas números" 
                                    inputmode="numeric" 
                                    oninput="this.value = this.value.replace(/\D/g, '')" 
                                    required>
                                <div class="invalid-feedback">Por favor, informe uma CNH válida (11 dígitos).</div>
                                <div class="valid-feedback">Tudo certo!</div>
                            </div>
                            <!-- Campos do Veículo -->
<div class="col-md-6">
    <label for="marca" class="form-label">MARCA DO VEÍCULO</label>
    <input type="text" class="form-control" id="marca" name="marca" placeholder="Ex: Chevrolet, Ford, Volkswagen" required>
</div>

<div class="col-md-6">
    <label for="placa" class="form-label">PLACA DO VEÍCULO</label>
    <input type="text" class="form-control" id="placa" name="placa" placeholder="Ex: ABC1D23" required>
</div>

<div class="col-md-6">
    <label for="cor" class="form-label">COR DO VEÍCULO</label>
    <input type="text" class="form-control" id="cor" name="cor" placeholder="Ex: Preto, Branco, Prata" required>
</div>

                            <div class="col-md-6">
                                <label for="cidade" class="form-label">CIDADE</label>
                                <select class="form-select" id="cidade" name="cidade" required>
                                    <option selected disabled value="">Escolha</option>
                                    <option value="ARARUNA">ARARUNA</option>
                                    <option value="CAMPO MOURÃO">CAMPO MOURÃO</option>
                                </select>
                                <div class="invalid-feedback">Por favor, selecione uma cidade.</div>
                                <div class="valid-feedback">Tudo certo!</div>
                            </div>

                            <div class="col-md-6">
                                <label for="senha" class="form-label">CRIE UMA SENHA</label>
                                <div class="password-wrapper">
                                    <input type="password" class="form-control" id="senha" name="senha" required>
                                    <button type="button" class="password-toggle" aria-label="Mostrar senha">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <div class="invalid-feedback">Por favor, crie uma senha válida.</div>
                                <div class="valid-feedback">Tudo certo!</div>
                            </div>

                            <div class="col-md-6">
                                <label for="confirmarSenha" class="form-label">CONFIRMAR SENHA</label>
                                <div class="password-wrapper">
                                    <input type="password" class="form-control" id="confirmarSenha" name="confirmarSenha" required>
                                    <button type="button" class="password-toggle" aria-label="Mostrar senha">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <div class="invalid-feedback">As senhas não coincidem.</div>
                                <div class="valid-feedback">Tudo certo!</div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="termosCheck" required>
                                    <label class="form-check-label" for="termosCheck">
                                        Concordo com os <a href="#" data-bs-toggle="modal" data-bs-target="#termosModal">termos e condições</a>
                                    </label>
                                    <div class="invalid-feedback">Você deve concordar antes de enviar.</div>
                                </div>
                            </div>

                            <div class="col-12 text-center mt-4">
                                <button class="btn btn-zippa-primary btn-lg px-5" type="submit">
                                    <span class="submit-text">Enviar formulário</span>
                                    <div class="spinner-border spinner-border-sm d-none" role="status">
                                        <span class="visually-hidden">Carregando...</span>
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mensagens de Status -->
        <div class="container mt-4">
            <?php if (isset($mensagem_sucesso)): ?>
            <div class="alert alert-success alert-dismissible fade show">
                <?php echo $mensagem_sucesso; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <?php endif; ?>
            
            <?php if (isset($mensagem_erro)): ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <?php echo $mensagem_erro; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <?php endif; ?>
        </div>

        <!-- Tabela de Motoristas Cadastrados -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4 text-zippa-orange">Motoristas e Veículos Cadastrados</h2>
        
        <?php if (!empty($motoristas)): ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th>Cidade</th>
                            <th>Veículo</th>
                            <th>Placa</th>
                            <th>Data Cadastro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($motoristas as $motorista): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($motorista['nome']); ?></td>
                            <td><?php echo htmlspecialchars($motorista['telefone']); ?></td>
                            <td><?php echo htmlspecialchars($motorista['email']); ?></td>
                            <td><?php echo htmlspecialchars($motorista['cidade']); ?></td>
                            <td>
                                <?php if (!empty($motorista['marca'])): ?>
                                    <?php echo htmlspecialchars($motorista['marca']); ?>
                                    
                                <?php else: ?>
                                    <span class="text-muted">Nenhum veículo</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo !empty($motorista['placa']) ? htmlspecialchars($motorista['placa']) : '---'; ?></td>
                            <td><?php echo date('d/m/Y', strtotime($motorista['data_cadastro'])); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="alert alert-info text-center">
                📝 Nenhum motorista cadastrado ainda. Preencha o formulário acima!
            </div>
        <?php endif; ?>
    </div>
</section>

        <!-- Vantagens -->
        <section class="vantagens-section py-5">
            <div class="container">
                <div class="section-header text-center mb-5">
                    <h2 class="section-title">Vantagens de dirigir com o ZIPPA</h2>
                    <p class="section-subtitle">Descubra por que milhares de motoristas escolhem nossa plataforma</p>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="vantagem-card text-center h-100">
                            <div class="vantagem-icon">
                                <i class="fas fa-money-bill-wave"></i>
                            </div>
                            <h4>Lucro atrativo</h4>
                            <p>Fique com a maior parte do valor da corrida e receba semanalmente</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="vantagem-card text-center h-100">
                            <div class="vantagem-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4>Passageiros verificados</h4>
                            <p>Todos os usuários são cadastrados e avaliados na plataforma</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="vantagem-card text-center h-100">
                            <div class="vantagem-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h4>Flexibilidade total</h4>
                            <p>Escolha seus horários e dias de trabalho</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Como funciona -->
        <section class="como-funciona-section bg-light py-5">
            <div class="container">
                <div class="section-header text-center mb-5">
                    <h2 class="section-title">Como funciona?</h2>
                    <p class="section-subtitle">4 passos simples para começar a dirigir com o ZIPPA</p>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="passo-card text-center">
                            <div class="passo-numero">1</div>
                            <h5 class="mt-3">Baixe o app</h5>
                            <p>Disponível para iOS e Android</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="passo-card text-center">
                            <div class="passo-numero">2</div>
                            <h5 class="mt-3">Cadastre-se</h5>
                            <p>Envie seus documentos e informações do veículo</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="passo-card text-center">
                            <div class="passo-numero">3</div>
                            <h5 class="mt-3">Aprovação rápida</h5>
                            <p>Nossa equipe analisa em até 48h</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="passo-card text-center">
                            <div class="passo-numero">4</div>
                            <h5 class="mt-3">Comece a dirigir</h5>
                            <p>Ative o modo online e aceite corridas</p>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <a href="#form-section" class="btn btn-zippa-outline scroll-to-form">Quero me cadastrar</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Modal Termos -->
    <div class="modal fade" id="termosModal" tabindex="-1" aria-labelledby="termosModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="termosModalLabel">Termos e Condições</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Termos de Condição de Uso</p>
                    <!-- Conteúdo dos termos aqui -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-zippa-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <?php include "../Include/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Formatação de telefone
        document.getElementById('telefone').addEventListener('input', function() {
            let valor = this.value.replace(/\D/g, ''); 
            if (valor.length > 11) valor = valor.substring(0, 11); 
            if (valor.length > 6) {
                this.value = valor.replace(/^(\d{2})(\d{5})(\d{0,4}).*/, '($1) $2-$3');
            } else if (valor.length > 2) {
                this.value = valor.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
            } else {
                this.value = valor.replace(/^(\d*)/, '($1');
            }
        });

        // Formatação de CPF
        function formatCPF(input) {
            let value = input.value.replace(/\D/g, '');
            if (value.length > 11) value = value.substring(0, 11);
            if (value.length > 9) {
                input.value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
            } else if (value.length > 6) {
                input.value = value.replace(/(\d{3})(\d{3})(\d{1,3})/, '$1.$2.$3');
            } else if (value.length > 3) {
                input.value = value.replace(/(\d{3})(\d{1,3})/, '$1.$2');
            } else {
                input.value = value;
            }
        }

        // Toggle de visibilidade de senha
        document.querySelectorAll('.password-toggle').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.previousElementSibling;
                const icon = this.querySelector('i');
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });
        });

        // Scroll suave para o formulário
        document.querySelectorAll('.scroll-to-form').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
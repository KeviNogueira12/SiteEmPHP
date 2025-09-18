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
    <title>ZIPPA | Passageiro</title>
</head>
<body>
    
    <?php include "../Include/header.php" ?>

    <main>
        <!-- Hero Section -->
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <h1 class="display-4 fw-bold mb-4 text-zippa-orange">Viaje com conforto e segurança</h1>
                    <p class="lead mb-4">O ZIPPA leva você a qualquer lugar com motoristas verificados e veículos confortáveis.</p>
                    <a href="#form-section" class="btn btn-zippa-primary btn-lg scroll-to-form">Cadastre-se agora</a>
                </div>
                <div class="col-lg-4 order-lg-2 order-1 mb-4 mb-lg-0">
                    <img id="bannerpassageiro" src="../imagens/banner44.png" alt="Passageiro ZIPPA" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>

        <!-- Form Section -->
        <section id="form-section" class="py-5 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-header text-center mb-5">
                            <h2 class="section-title">Torne-se um passageiro ZIPPA</h2>
                            <p class="section-subtitle">Preencha o formulário abaixo para iniciar seu cadastro</p>
                        </div>
                        
                        <form class="row g-4 needs-validation custom-form" novalidate>
                            <div class="col-md-6">
                                <label for="nomeCompleto" class="form-label">NOME COMPLETO</label>
                                <input type="text" class="form-control" id="nomeCompleto" name="NomeCompleto" placeholder="Digite seu Nome Completo" required>
                                <div class="valid-feedback">Tudo certo!</div>
                                <div class="invalid-feedback">Por favor, informe um Nome válido.</div>
                            </div>

                            <div class="col-md-6">
                                <label for="telefone" class="form-label">TELEFONE</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="telefone" 
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
                                    <input type="email" class="form-control" id="email" placeholder="exemplo@gmail.com" required aria-describedby="inputGroupPrepend">
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
                                    required 
                                    maxlength="14"
                                    pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
                                    placeholder="000.000.000-00"
                                    oninput="formatCPF(this)">
                                <div class="invalid-feedback">Por favor, informe um CPF válido.</div>
                                <div class="valid-feedback">Tudo certo!</div>
                            </div>

                            <div class="col-md-6">
                                <label for="cidade" class="form-label">CIDADE</label>
                                <select class="form-select" id="cidade" required>
                                    <option selected disabled value="">Escolha</option>
                                </select>
                                <div class="invalid-feedback">Por favor, selecione uma cidade.</div>
                                <div class="valid-feedback">Tudo certo!</div>
                            </div>

                            <div class="col-md-6">
                                <label for="senha" class="form-label">CRIE UMA SENHA</label>
                                <div class="password-wrapper">
                                    <input type="password" class="form-control" id="senha" required>
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
                                    <input type="password" class="form-control" id="confirmarSenha" required>
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

             <!-- Tabela de Passageiros Cadastrados -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4 text-zippa-orange">Passageiros Cadastrados</h2>
            
            <?php
            try {
                $pdo = new PDO("mysql:host=localhost;dbname=zippa_db", "root", "");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $stmt = $pdo->query("SELECT nome, telefone, cidade, data_cadastro 
                                    FROM passageiros ORDER BY data_cadastro DESC");
                $passageiros = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
            } catch(PDOException $e) {
                $passageiros = [];
            }
            ?>
            
            <div class="table-responsive">
                <table class="table table-striped table-hover table-zippa">
                    <thead class="table-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Cidade</th>
                            <th>Data Cadastro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($passageiros) > 0): ?>
                            <?php foreach ($passageiros as $passageiro): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($passageiro['nome']); ?></td>
                                <td><?php echo htmlspecialchars($passageiro['telefone']); ?></td>
                                <td><?php echo htmlspecialchars($passageiro['cidade']); ?></td>
                                <td><?php echo date('d/m/Y', strtotime($passageiro['data_cadastro'])); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="text-center text-muted">
                                    Nenhum passageiro cadastrado ainda.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
        </section>

        <!-- Vantagens -->
        <section class="vantagens-section py-5">
            <div class="container">
                <div class="section-header text-center mb-5">
                    <h2 class="section-title">Por que escolher o ZIPPA?</h2>
                    <p class="section-subtitle">Descubra por que milhares de passageiros escolhem nossa plataforma</p>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="vantagem-card text-center h-100">
                            <div class="vantagem-icon">
                                <i class="fas fa-money-bill-wave"></i>
                            </div>
                            <h4>Preços acessíveis</h4>
                            <p>Viagens econômicas com o mesmo conforto de um táxi</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="vantagem-card text-center h-100">
                            <div class="vantagem-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4>Segurança garantida</h4>
                            <p>Todos os motoristas são verificados e as rotas rastreadas</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="vantagem-card text-center h-100">
                            <div class="vantagem-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h4>Disponível 24h</h4>
                            <p>Solicite seu veículo a qualquer hora, em qualquer lugar</p>
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
                    <p class="section-subtitle">4 passos simples para começar a viajar com o ZIPPA</p>
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
                            <p>Leva menos de 2 minutos</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="passo-card text-center">
                            <div class="passo-numero">3</div>
                            <h5 class="mt-3">Solicite sua viagem</h5>
                            <p>Escolha seu destino</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="passo-card text-center">
                            <div class="passo-numero">4</div>
                            <h5 class="mt-3">Acompanhe em tempo real</h5>
                            <p>Veja quando seu motorista chegará</p>
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
                    <!-- Conteúdo dos termos igual à página original -->
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
        // Form Validation
        document.querySelector('form.needs-validation').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const senha = document.getElementById('senha');
            const confirmarSenha = document.getElementById('confirmarSenha');
            
            if (senha.value !== confirmarSenha.value) {
                confirmarSenha.setCustomValidity('As senhas não coincidem');
            } else {
                confirmarSenha.setCustomValidity('');
            }
            
            if (!this.checkValidity()) {
                e.stopPropagation();
                this.classList.add('was-validated');
            } else {
                const submitBtn = this.querySelector('button[type="submit"]');
                const submitText = submitBtn.querySelector('.submit-text');
                const spinner = submitBtn.querySelector('.spinner-border');
                
                submitText.classList.add('d-none');
                spinner.classList.remove('d-none');
                submitBtn.disabled = true;
                
                setTimeout(() => {
                    alert('Formulário enviado com sucesso! Em breve entraremos em contato.');
                    submitText.classList.remove('d-none');
                    spinner.classList.add('d-none');
                    submitBtn.disabled = false;
                    this.reset();
                    this.classList.remove('was-validated');
                }, 2000);
            }
        });

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
                    icon.classList.replace('fa-eye', 'fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.replace('fa-eye-slash', 'fa-eye');
                }
            });
        });

        // Preencher select de cidades
        const cidades = ["ARARUNA", "CAMPO MOURÃO"];
        const selectCidade = document.getElementById('cidade');
        cidades.forEach(cidade => {
            const option = document.createElement('option');
            option.value = cidade.toLowerCase();
            option.textContent = cidade;
            selectCidade.appendChild(option);
        });

        // Scroll suave
        document.querySelectorAll('.scroll-to-form').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
            });
        });
    </script>
</body>
</html

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

        <!-- Parte dos card -->
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

    <div class="modal fade" id="termosModal" tabindex="-1" aria-labelledby="termosModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="termosModalLabel">Termos e Condições</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    TERMOS DE USO DO PASSAGEIRO

Zippa

 

1. INTRODUÇÃO E DISPOSIÇÕES GERAIS

Bem-vindo à Zippa! Estes são os Termos de Uso (“Termos”) que regem o acesso e uso, como pessoa física, dentro do Brasil, dos serviços prestados através de aplicação tecnológica (“Aplicativo”), sítios da Internet e conteúdos relacionados (“Serviço(s)”), disponibilizados por 59.708.950 KEVIN ENRIQUE NOGUEIRA, inscrita no CNPJ nº 59.708.950/0001-18, estabelecida à 10 R FLORIANOPOLIS, nº 201, no bairro JARDIM SANTA CATARINA 2, na cidade de ARARUNA - PR, CEP 87260000, ou qualquer de seus afiliados, daqui em diante denominado pelo aplicativo “Zippa”, e do outro lado qualquer pessoa que utilize os Serviços na qualidade de passageiro, a seguir denominado simplesmente “Usuário(s)”.

POR FAVOR, LEIA COM ATENÇÃO ESTES TERMOS ANTES DE ACESSAR OU USAR OS SERVIÇOS.

ACEITAÇÃO DOS TERMOS E CONDIÇÕES DE USO. AO SE CADASTRAR E UTILIZAR CONTINUAMENTE OS SERVIÇOS, O USUÁRIO ESTARÁ DECLARANDO TER LIDO, ENTENDIDO E ACEITO OS TERMOS. CASO, A QUALQUER TEMPO, O USUÁRIO NÃO CONCORDE COM OS TERMOS, DEVERÁ CESSAR IMEDIATAMENTE A UTILIZAÇÃO DO APLICATIVO E DESINSTALÁ-LO DE SEU APARELHO.

Termos Adicionais poderão se aplicar a determinados Serviços, tais como condições para eventos, regulamentos, atividades ou promoções em particular, e esses Termos Adicionais serão divulgados em relação aos respectivos Serviços (“Termos Adicionais”). Os Termos Adicionais são complementares e considerados parte integrante destes Termos para os efeitos dos respectivos Serviços. Os Termos Adicionais prevalecerão sobre estes Termos em caso de conflito somente com relação àquilo que forem específicos.

Comunicação com o Usuário. O Usuário autoriza a “Zippa” a enviar notificações administrativas no Aplicativo (“push”), por e-mail, SMS, em uma publicação em seu site ou por qualquer outro meio de comunicação disponível (“Meios de Comunicação”) com conteúdo de natureza informativa e promocional relacionados aos Serviços.

Alteração dos Termos. A “Zippa” se resguarda ao direito de realizar alterações e atualizações nos Termos, a qualquer momento, sem a necessidade de aviso prévio. Em caso de alterações dos Termos que restrinjam direitos dos Usuários, a “Zippa” comunicará tal alteração, ao seu critério, através dos Meios de Comunicação. Todavia, esta liberalidade não afasta a responsabilidade do Usuário de verificar periodicamente os Termos. Caso o Usuário não concorde com as alterações dos Termos, deverá cancelar sua conta, cessar toda e qualquer utilização dos Serviços e desinstalar o Aplicativo do seu aparelho. O fato do Usuário continuar a acessar ou usar os Serviços após essa postagem representa seu consentimento em vincular-se aos Termos alterados.

 

2. DADOS DO USUÁRIO E PRIVACIDADE

A “Zippa” POSSUI UMA POLÍTICA EXPRESSA SOBRE PRIVACIDADE. AS INFORMAÇÕES DE REGISTRO E OUTRAS INFORMAÇÕES SOBRE O USUÁRIO ESTÃO SUJEITAS AO TRATAMENTO REFERIDO EM TAL POLÍTICA DE PRIVACIDADE. O USUÁRIO ENTENDE E CONCORDA QUE O SEU USO E A PRESTAÇÃO DO SERVIÇO ENVOLVEM A COLETA E UTILIZAÇÃO DE INFORMAÇÕES E DADOS SOBRE O USUÁRIO (CONFORME DEFINIDO NA POLÍTICA DE PRIVACIDADE APLICÁVEL), INCLUINDO A TRANSFERÊNCIA DESTAS INFORMAÇÕES E DADOS PARA OUTROS TERRITÓRIOS, PARA FINS DE ARMAZENAMENTO, PROCESSAMENTO E UTILIZAÇÃO PELA “Zippa”, SUA CONTROLADORA E DEMAIS EMPRESAS DO MESMO GRUPO ECONÔMICO, PARA AS FINALIDADES DA PRESTAÇÃO DO SERVIÇO E DEMAIS PREVISTAS NA POLÍTICA DE PRIVACIDADE. FAVOR CONSULTAR A POLÍTICA DE PRIVACIDADE DA “Zippa” NO SEGUINTE LINK: https://paineladmin3.azurewebsites.net/zippa/politicadeprivacidadecliente. A POLÍTICA DE PRIVACIDADE DA “Zippa” CONSTITUI PARTE INTEGRANTE DOS TERMOS.

 

3. CADASTRO

Para utilizar grande parte dos Serviços, o Usuário deve registrar-se e manter uma conta pessoal de Usuário de Serviços (“Conta”). O Usuário deve ter capacidade civil, tendo idade mínima de 18 anos de idade para criar seu perfil, a menos que seja emancipado ou tenha obtido plena capacidade civil nos termos da legislação civil em vigor. Pais e responsáveis legais são responsáveis por avaliar a adequação da utilização de dispositivos móveis e dos Serviços para menores de 18 anos de idade. O Usuário que desejar utilizar o Serviço deverá obrigatoriamente preencher os campos de cadastro exigidos e responderá pela veracidade das informações declaradas, obrigando-se a manter informações válidas, atualizadas e corretas. O perfil do Usuário é exclusivo e intransferível. Em caso de não confirmação de seus dados, o acesso do Usuário ao Serviço poderá ser bloqueado, a exclusivo critério da “Zippa”.

As informações da Conta são de exclusiva responsabilidade de quem as inseriu. No caso de acarretarem danos ou prejuízo de qualquer espécie, as medidas cabíveis podem ser tomadas pela “Zippa” a fim de resguardar seus interesses e a integridade dos demais Usuários do Aplicativo.

 

4. SERVIÇOS

Serviços prestados pela “Zippa”. Os Serviços consistem na disponibilização de uma aplicação tecnológica que possibilita ao Usuário devidamente cadastrado localizar e contatar prestadores de diferentes modalidades de serviços de transporte de pessoas (como, por exemplo, motoristas privados) (“Motorista(s) Parceiro(s)”). O Serviço não deve ser utilizado para qualquer finalidade que não as expressamente autorizadas por estes Termos.

O uso dos Serviços pelos Usuários é, em geral, gratuito. A “Zippa” informará previamente o Usuário sobre funcionalidades e condutas que possam gerar cobranças e/ou pagamentos pelo Usuário de forma específica pelos Meios de Comunicação e/ou por atualização dos Termos. A “Zippa” se reserva o direito de passar a cobrar pelo Serviço ou parte dele a qualquer tempo. O Usuário será previamente informado caso isso ocorra e terá a oportunidade de consentir com tais cobranças pelo Serviço ou cessar o uso do mesmo.

Modificação ou Encerramento do Serviço. A “Zippa” se reserva o direito de, a qualquer tempo, modificar ou descontinuar, temporariamente ou permanentemente, o Serviço ou parte dele, com ou sem notificação. O Usuário concorda que a “Zippa” não será responsabilizada, nem terá qualquer obrigação adicional, implícita ou explícita, para com o Usuário ou terceiros em razão de qualquer modificação, suspensão ou desativação do Serviço.

SERVIÇO DE TRANSPORTE PRESTADO PELOS MOTORISTAS PARCEIROS. O USUÁRIO ENTENDE E DECLARA QUE A “NOMEAPP” NÃO PRESTA E NÃO ASSEGURA A PRESTAÇÃO DE QUALQUER SERVIÇO DE TRANSPORTE DE PESSOAS. A “NOMEAPP” NÃO POSSUI FROTA DE VEÍCULOS, PRESTANDO EXCLUSIVAMENTE UM SERVIÇO DE INTERMEDIAÇÃO VOLTADO À FACILITAÇÃO DA CONTRATAÇÃO DE SERVIÇO DE TRANSPORTE DE PASSAGEIROS PERANTE UM MOTORISTA PARCEIRO CADASTRADO EM NOSSO APLICATIVO.

RESPONSABILIDADE PELOS SERVIÇOS DE TRANSPORTE. A CONTRATAÇÃO DOS SERVIÇOS DE TRANSPORTE DE PESSOAS É FEITA DIRETAMENTE ENTRE OS USUÁRIOS E OS MOTORISTAS PARCEIROS, TERCEIROS INDEPENDENTES QUE NÃO POSSUEM QUALQUER FORMA DE VÍNCULO EMPREGATÍCIO, SOCIETÁRIO OU DE SUBORDINAÇÃO COM A “Zippa”, NEM DE QUALQUER DE SUAS AFILIADAS E SUA CONTROLADORA. A “Zippa” NÃO SE RESPONSABILIZA POR QUAISQUER PERDAS, PREJUÍZOS OU DANOS DECORRENTES OU RELATIVOS AOS SERVIÇOS DE TRANSPORTE DE PESSOAS, CONFORME PREVISTO NA CLÁUSULA 8.2., ABAIXO.

Danos e prejuízos causados aos Motoristas Parceiros. O Usuário será responsável por quaisquer danos ou prejuízos que causar ao prestador de serviço de transporte de pessoas e concorda em indenizar e manter a “Zippa” indene em relação a quaisquer demandas, perdas, prejuízos ou danos direta ou indiretamente relacionados a atos ou fatos causados pelo Usuário em face do prestador de serviço de transporte de pessoas.

O Usuário é o único integral responsável pelo conteúdo de bagagens transportadas durante a corrida, sendo expressamente vedado o transporte de armas de fogo, munições; materiais perigosos, explosivos, inflamáveis ou combustíveis; drogas e entorpecentes; e quaisquer outros materiais cujo transporte seja proibido pela legislação ou atente contra os bons costumes e a moralidade, respondendo o Usuário por qualquer infração à legislação em vigor e em qualquer âmbito.

A “Zippa” disponibiliza ao Usuário a opção de avaliar e comentar qualitativamente o serviço de transporte realizado pelos Motoristas Parceiros, sendo vedada, sob pena de suspensão do uso do Aplicativo e dos Serviços, nos termos da Cláusula 10, a publicação de comentários de caráter difamatório, calunioso, violento, obsceno, pornográfico, racista, homofóbico, ilegal ou de qualquer outra forma ofensivo, assim entendido pela “Zippa” a seu exclusivo critério.

O conteúdo publicado pelo Usuário é de sua única e exclusiva responsabilidade civil e penal e para todos os efeitos legais, inclusive em relação aos comentários e opiniões acerca de determinado conteúdo.

Acesso à Rede e Equipamentos. O Usuário entende e concorda que a utilização do Serviço demanda a aquisição de dispositivos de telefonia móvel e a contratação de serviços de telecomunicação, e que a utilização do Serviço poderá gerar cobranças por parte de tais prestadores de serviço de telecomunicação para conexão com a Internet, por exemplo. O Usuário é o responsável exclusivo por contratar e arcar com todo e qualquer custo e ônus relacionados à aquisição de seu dispositivo de telefonia móvel e a contratação de seu serviço de telecomunicação. A “Zippa” não é responsável pela disponibilidade, qualidade e manutenção de tais serviços de telecomunicação e o Usuário entende que as condições do serviço de telecomunicações poderão afetar a experiência do Serviço. A “Zippa” não será responsabilizada por qualquer problema relacionado ao Serviço decorrente direta ou indiretamente de inconsistências ou falhas nos dispositivos de telefonia móvel e/ou nos serviços de telecomunicação.

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

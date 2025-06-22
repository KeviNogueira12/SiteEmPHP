<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zippa - Seu transporte rápido e seguro. Motoristas particulares e corridas compartilhadas.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="style.css" rel="stylesheet">

    <link rel="icon" href="imagens/banner1.jpg" type="image/x-icon">

    <title>Zippa | Transporte Rápido e Seguro</title>
</head>
<body>

    <?php include "paginas/header.php" ?>

    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="#footer">
                    <img id="bannermotora" src="imagens/2.png" class="d-block w-100" alt="Zippa - Transporte rápido e seguro">
                </a>
            </div>
        </div>
    </div>

    <!-- Diferenciais -->
    <section class="como_funciona" id="how-it-works">
        <div class="container">
            <div class="section-title">
                <h2 class="titulo">
                    Nossos Diferenciais <i class="fa-solid fa-down-long" style="color: #ed5e0c;"></i>
                </h2>
                <p>Descubra o que torna o Zippa único no mercado de mobilidade urbana</p>
            </div>
            <div data-aos="fade-up">
                <div class="features">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3>Velocidade</h3>
                        <p>Motoristas próximos de você em menos de 5 minutos em média nas principais cidades.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h3>Segurança</h3>
                        <p>Verificação rigorosa de motoristas e monitoramento 24/7 de todas as viagens.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-tag"></i>
                        </div>
                        <h3>Preços Justos</h3>
                        <p>Tarifas transparentes sem taxas ocultas. Você sempre sabe quanto vai pagar.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-car-side"></i>
                        </div>
                        <h3>Frota Diversa</h3>
                        <p>Desde econômicos até premium, temos o veículo ideal para cada necessidade.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h3>Sustentável</h3>
                        <p>Opções elétricas e compartilhadas para reduzir seu Impacto Ambiental.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h3>Experiência Premium</h3>
                        <p>Atendimento exclusivo e benefícios para usuários frequentes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5 my-4">
        <div class="row g-4">
            
            <div class="col-md-6">
                <div class="card card-zippa card-passenger p-4 text-center h-100">
                    <i class="fas fa-user-friends card-icon"></i>
                    <h2 class="card-title">Seu caminho com conforto e confiança</h2>
                    <h3 class="mb-3">Seja um Passageiro</h3>
                    <p class="mb-4">Cadastre-se como passageiro e aproveite viagens rápidas, seguras e confortáveis com a Zippa.</p>
                    <a href="cpassageiro.html" class="btn btn-zippa btn-passenger">Cadastrar como Passageiro</a>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card card-zippa card-driver p-4 text-center h-100">
                    <i class="fas fa-car-alt card-icon"></i>
                    <h2 class="card-title">Seu carro pode virar renda</h2>
                    <h3 class="mb-3">Seja um Motorista</h3>
                    <p class="mb-4">Cadastre-se como motorista e comece a ganhar dinheiro dirigindo com a Zippa.</p>
                    <a href="cmotorista.html" class="btn btn-zippa btn-driver">Cadastrar como Motorista</a>
                </div>
            </div>
        </div>
    </div>

     <?php include "paginas/footer.php" ?>
    
</body>
</html>
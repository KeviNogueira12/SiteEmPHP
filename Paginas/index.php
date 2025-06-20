<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
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

    <!-- links para o CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="style.css" rel="stylesheet">

    <link rel="icon" href="imagens/banner1.jpg" type="image/x-icon">

    <title>Zippa | Transporte Rápido e Seguro</title>
</head>
<body>
    <?php include "paginas/header.php"; ?>

    <main>
        <?php
        // Inicializa o array para evitar warnings
        $p = [];

        // Obtém o parâmetro da URL
        if (isset($_GET["param"])) {
            $param = $_GET["param"];
            $p = explode("/", $param);
        }

        // Página padrão
        $page = $p[0] ?? "index";

        // Lista de páginas permitidas (adicione as páginas que existem)
        $permitidas = ['index', 'sobre', 'contato', 'erro']; // Exemplo

        // Validação da página
        $page = in_array($page, $permitidas) ? $page : 'erro';

        $paginas = "paginas/{$page}.php";

        if (file_exists($paginas)) {
            include $paginas;
        } else {
            include "paginas/erro.php";
        }
        ?>
    </main>

    <footer id="footer" class="footer" style="background-color: #000000; color: white; padding: 40px 0; border-top: 3px solid #FF8C00;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-center text-lg-start mb-4 mb-lg-0">
                    <h3 class="zippa-logo mb-3" style="font-weight: 700; letter-spacing: 1px;">
                        <i class="fas fa-bolt" style="color: #FF8C00;"></i> ZIPPA
                    </h3>
                    <p style="opacity: 0.8; font-size: 0.9rem;">Seu caminho com conforto e confiança</p>
                </div>
                <div class="col-lg-4 text-center mb-4 mb-lg-0">
                    <div class="d-flex justify-content-center flex-wrap" style="gap: 20px;">
                        <a href="#" style="color: white; text-decoration: none; transition: 0.3s;"
                           onmouseover="this.style.color='#FF8C00'" onmouseout="this.style.color='white'">
                            Sobre a Empresa
                        </a>
                        <a href="#how-it-works" style="color: white; text-decoration: none; transition: 0.3s;"
                           onmouseover="this.style.color='#FF8C00'" onmouseout="this.style.color='white'">
                            Como funciona
                        </a>
                        <a href="#" style="color: white; text-decoration: none; transition: 0.3s;"
                           onmouseover="this.style.color='#FF8C00'" onmouseout="this.style.color='white'">
                            Contato
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="social-icons mb-3" style="font-size: 1.5rem;">
                        <a href="#" class="me-3" style="color: white; transition: 0.3s;"
                           onmouseover="this.style.color='#e9077f'" onmouseout="this.style.color='white'">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="me-3" style="color: white; transition: 0.3s;"
                           onmouseover="this.style.color='#25D366'" onmouseout="this.style.color='white'">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#" class="me-3" style="color: white; transition: 0.3s;"
                           onmouseover="this.style.color='#1877F2'" onmouseout="this.style.color='white'">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>
                    <p class="mb-0" style="opacity: 0.7; font-size: 0.8rem;">
                        <i class="fas fa-map-marker-alt me-1" style="color: #FF8C00;"></i> R. Rocha Pombo, 416-518 - Araruna<br>
                        © 2025 Zippa - lidercwb@gmail.com. Todos os direitos reservados.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <?php include "paginas/scripts.php"; ?>
</body>
</html>
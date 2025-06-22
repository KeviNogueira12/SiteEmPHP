<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Seja um motorista Zippa e aumente sua renda!">

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

    <title>Seja Motorista | Zippa</title>
</head>
<body>
    <?php include "Include/header.php"; ?>

    <main class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card p-4 shadow">
                    <h2 class="mb-4 text-center">Seja um Motorista Zippa</h2>
                    <p class="mb-4 text-center">Cadastre-se para dirigir com a Zippa e aumente sua renda fazendo seu próprio horário!</p>
                    <form>
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="telefone" name="telefone" required>
                        </div>
                        <div class="mb-3">
                            <label for="cidade" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" required>
                        </div>
                        <div class="mb-3">
                            <label for="carro" class="form-label">Modelo do carro</label>
                            <input type="text" class="form-control" id="carro" name="carro" required>
                        </div>
                        <button type="submit" class="btn btn-zippa w-100">Quero ser motorista</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include "Include/footer.php"; ?>
</body>
</html>
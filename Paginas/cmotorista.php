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

    <div class="hero-section" style="background-color: #f8f9fa;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4" style="color: #ED5E0C;">Ganhe dinheiro com seu veículo</h1>
                    <p class="lead mb-4">O ZIPPA conecta você a passageiros que precisam de uma carona. Tenha flexibilidade de horários e aumente sua renda.</p>  
                </div>
                <div class="col-lg-6">
                    <img id="bannerpassageiro" src="../imagens/banner4.jpg" alt="Passageiro ZIPPA" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </div>

<!-- formulario -->
<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="nomeCompleto" class="form-label">NOME COMPLETO</label>
    <input type="text" class="form-control" id="nomeCompleto" required>
    <div class="valid-feedback">Tudo certo!</div>
    <div class="invalid-feedback">Por favor, informe um Nome.</div>
  </div>

<div class="col-md-4">
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

  <div class="col-md-4">
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
    maxlength="11"
    pattern="\d{11}"
    placeholder="Apenas números"
    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,11)">
    
  <div class="invalid-feedback">
    Por favor, informe um CPF válido (11 números).
  </div>
  <div class="valid-feedback">
    Tudo certo!
  </div>
</div>

  <div class="col-md-6">
    <label for="cnh" class="form-label">CNH</label>
    <input type="text" class="form-control" id="cnh" pattern="\d{11}" maxlength="11" placeholder="Apenas números" required>
    <div class="invalid-feedback">Por favor, informe uma CNH válida (11 dígitos).</div>
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

  <div class="col-md-3">
    <label for="tipoUsuario" class="form-label">TIPO DE USUÁRIO</label>
    <select class="form-select" id="tipoUsuario" required>
      <option selected disabled value="">Escolha</option>
    </select>
    <div class="invalid-feedback">Por favor, selecione o tipo de usuário.</div>
    <div class="valid-feedback">Tudo certo!</div>
  </div>

  <div class="col-md-3">
    <label for="senha" class="form-label">CRIE UMA SENHA</label>
    <input type="password" class="form-control" id="senha" required>
    <div class="invalid-feedback">Por favor, crie uma senha válida.</div>
    <div class="valid-feedback">Tudo certo!</div>
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Concordo com os termos e condições
      </label>
      <div class="invalid-feedback">Você deve concordar antes de enviar.</div>
    </div>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar formulário</button>
  </div>
</form>


<!-- SCRIPTS -->

<script>
document.querySelector('form.needs-validation').addEventListener('submit', function(e) {
  if (!this.checkValidity()) {
    e.preventDefault();
    e.stopPropagation();
    this.classList.add('was-validated');
  } else {
    alert('Formulário enviado com sucesso!');
  }
});
</script>

<script>
document.getElementById('telefone').addEventListener('input', function() {
  let valor = this.value.replace(/\D/g, ''); 

  if (valor.length > 11) {
    valor = valor.substring(0, 11); 
  }

  if (valor.length > 6) {
    this.value = valor.replace(/^(\d{2})(\d{5})(\d{0,4}).*/, '($1) $2-$3');
  } else if (valor.length > 2) {
    this.value = valor.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
  } else {
    this.value = valor.replace(/^(\d*)/, '($1');
  }
});
</script>

<script>
const cidades = ["ARARUNA", "CAMPO MOURÃO"];
const tiposUsuario = ["MOTORISTA", "PASSAGEIRO"];

document.getElementById('cidade').innerHTML += cidades.map(cidade => `<option>${cidade}</option>`).join('');
document.getElementById('tipoUsuario').innerHTML += tiposUsuario.map(tipo => `<option>${tipo}</option>`).join('');
</script>

<!-- vantagens -->
    <div class="container my-5 py-4">
        <h2 class="text-center mb-5 fw-bold" style="color: #ED5E0C;">Vantagens de dirigir com o ZIPPA</h2>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 text-center border rounded h-100">
                    <i class="fas fa-money-bill-wave mb-3" style="font-size: 2rem; color: #ED5E0C;"></i>
                    <h4>Lucro atrativo</h4>
                    <p>Fique com a maior parte do valor da corrida e receba semanalmente</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="p-4 text-center border rounded h-100">
                    <i class="fas fa-shield-alt mb-3" style="font-size: 2rem; color: #ED5E0C;"></i>
                    <h4>Passageiros verificados</h4>
                    <p>Todos os usuários são cadastrados e avaliados na plataforma</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="p-4 text-center border rounded h-100">
                    <i class="fas fa-clock mb-3" style="font-size: 2rem; color: #ED5E0C;"></i>
                    <h4>Flexibilidade total</h4>
                    <p>Escolha seus horários e dias de trabalho</p>
                </div>
            </div>
        </div>
    </div>

    
    <div class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold" style="color: #ED5E0C;">Como funciona?</h2>
            
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="text-center">
                        <div class="step-number mb-3" style="background-color: #ED5E0C; color: white; width: 50px; height: 50px; line-height: 50px; border-radius: 50%; margin: 0 auto; font-weight: bold;">1</div>
                        <h5 class="mt-2">Baixe o app</h5>
                        <p>Disponível para iOS e Android</p>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="text-center">
                        <div class="step-number mb-3" style="background-color: #ED5E0C; color: white; width: 50px; height: 50px; line-height: 50px; border-radius: 50%; margin: 0 auto; font-weight: bold;">2</div>
                        <h5 class="mt-2">Cadastre-se</h5>
                        <p>Envie seus documentos e informações do veículo</p>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="text-center">
                        <div class="step-number mb-3" style="background-color: #ED5E0C; color: white; width: 50px; height: 50px; line-height: 50px; border-radius: 50%; margin: 0 auto; font-weight: bold;">3</div>
                        <h5 class="mt-2">Aprovação rápida</h5>
                        <p>Nossa equipe analisa em até 48h</p>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="text-center">
                        <div class="step-number mb-3" style="background-color: #ED5E0C; color: white; width: 50px; height: 50px; line-height: 50px; border-radius: 50%; margin: 0 auto; font-weight: bold;">4</div>
                        <h5 class="mt-2">Comece a dirigir</h5>
                        <p>Ative o modo online e aceite corridas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php include "../Include/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
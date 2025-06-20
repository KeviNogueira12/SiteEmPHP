<?php include "Paginas/header.php"; ?>
<body>  
    <div class="hero-section" style="background-color: #f8f9fa; padding-top: 80px;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4" style="color: #ED5E0C;">Ganhe dinheiro com seu veículo</h1>
                    <p class="lead mb-4">O ZIPPA conecta você a passageiros que precisam de uma carona. Tenha flexibilidade de horários e aumente sua renda.</p>
                    <button class="btn btn-orange btn-lg rounded-pill px-5 fw-bold">
                        <i class="fas fa-user-plus me-2"></i> Cadastre-se agora
                    </button>
                </div>
                <div class="col-lg-6">
                    <img src="imagens/bannerpassageiro.png" alt="Passageiro ZIPPA" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </div>

    <form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="nomeCompleto" class="form-label">NOME COMPLETO</label>
    <input type="text" class="form-control" id="nomeCompleto" required>
    <div class="valid-feedback">
      Tudo certo!
    </div>
  </div>
  <div class="col-md-4">
    <label for="telefone" class="form-label">TELEFONE</label>
    <input type="text" class="form-control" id="telefone" required>
    <div class="valid-feedback">
      Tudo certo!
    </div>
  </div>
  <div class="col-md-4">
    <label for="email" class="form-label">E-MAIL</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="email" class="form-control" id="email" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Por favor, informe um e-mail válido.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="cidade" class="form-label">CIDADE</label>
    <select class="form-select" id="cidade" required>
      <option selected disabled value="">Escolha</option>
      <option>ARARUNA</option>
      <option>CAMPO MOURÃO</option>
    </select>
    <div class="invalid-feedback">
      Por favor, selecione uma cidade.
    </div>
  </div>
  <div class="col-md-3">
    <label for="tipoUsuario" class="form-label">TIPO DE USUÁRIO</label>
    <select class="form-select" id="tipoUsuario" required>
      <option selected disabled value="">Escolha</option>
      <option>MOTORISTA</option>
      <option>PASSAGEIRO</option>
    </select>
    <div class="invalid-feedback">
      Por favor, selecione o tipo de usuário.
    </div>
  </div>
  <div class="col-md-3">
    <label for="senha" class="form-label">CRIE UMA SENHA</label>
    <input type="password" class="form-control" id="senha" required>
    <div class="invalid-feedback">
      Por favor, crie uma senha válida.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Concordo com os termos e condições
      </label>
      <div class="invalid-feedback">
        Você deve concordar antes de enviar.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar formulário</button>
  </div>
</form>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php include "Paginas/footer.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Página Restrita</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .logo {
      max-width: 70px;
      height: auto;
    }
    .footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      height: 40px;
      background-color: #f75;
    }
    .footer p {
      line-height: 60px;
      text-align: center;
      margin-bottom: 0;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">GM VAGABD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="cadastro pessoas.html">Cadastrar Pessoa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listar_pessoas.php">Listar Pessoas</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="lista_controle.php">Listar Controle</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title text-center">Bem-vindo à Área Restrita</h2>
          <?php
          // ... (Código PHP para exibir informações do usuário continua aqui)
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="container">
    <p>&copy; <?php echo date("Y"); ?> Desenvolvido por um Guarda. Todos os direitos reservados.</p>
  </div>
</footer>
<!-- Bootstrap JS e dependências opcionais -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

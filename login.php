<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Página de Login</title>
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

<div class="container mt-5">
  <div class="text-center mb-4">
    <img src="brasao.png" class="logo" alt="Brasão">
  </div>
  <div class="card">
    <div class="card-body">
      <h2 class="card-title text-center">Login</h2>
      <form action="processar_login.php" method="POST">
        <div class="form-group">
          <label for="usuario">Usuário:</label>
          <input type="text" class="form-control" id="usuario" name="usuario" required>
        </div>
        <div class="form-group">
          <label for="senha">Senha:</label>
          <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
      </form>
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

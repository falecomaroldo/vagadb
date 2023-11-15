<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Criar Usuário</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2>Cadastro de Usuário</h2>
  <form action="processar_formulario.php" method="POST">
        <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
      <label for="usuario">Usuário:</label>
      <input type="text" class="form-control" id="usuario" name="usuario" required>
    </div>
        <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control" id="senha" name="senha" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="perfil">Perfil:</label>
      <select class="form-control" id="perfil" name="perfil">
        <option value="Operador">Operador</option>
        <option value="Gerencial">Gerencial</option>
        <option value="Administrador">Administrador</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Criar Usuário</button>
  </form>
</div>

</body>
</html>

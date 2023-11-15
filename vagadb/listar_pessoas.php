<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registros de Pessoas</title>
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
  <h2>Registros de Pessoas</h2>
  <div class="row">
    <?php
    // Conexão com o banco de dados (substitua pelos seus próprios detalhes de conexão)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vagabd";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar a conexão
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Consulta para obter os registros das pessoas
    $sql = "SELECT nome, apelido, foto FROM pessoas";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exibir os registros das pessoas
        while($row = $result->fetch_assoc()) {
            echo '<div class="col-md-4 mb-3">';
            echo '<div class="card">';
            echo '<img src="img/' . $row["foto"] . '" class="card-img-top" alt="' . $row["nome"] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row["nome"] . '</h5>';
            echo '<p class="card-text">Apelido: ' . $row["apelido"] . '</p>';
            echo '</div></div></div>';
        }
    } else {
        echo "Nenhum registro encontrado.";
    }

    $conn->close();
    ?>
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

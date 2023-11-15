<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Listagem de Pessoas</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card {
      width: 150px;
      height: 350px;
    }
    .card img {
      height: 250px; /* Ajuste a altura da imagem conforme necessário */
      object-fit: cover;
    }
  </style>
</head>
<body>

<div class="container mt-4">
  <h2>Listagem de Pessoas</h2>

  <!-- PHP para exibir lista de pessoas (com cards) -->
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
        while($row = $result->fetch_assoc()) {
            echo "<div class='col-sm-3 mb-3'>";
            echo "<div class='card'>";
            // Exibir a foto da pasta 'img' - ajuste o campo 'foto' conforme sua estrutura
            echo "<a href='#' class='card-img-link' data-toggle='modal' data-target='#imagemModal'>";
            echo "<img class='card-img-top' src='img/".$row["foto"]."' alt='Foto da pessoa'>";
            echo "</a>";
            echo "<div class='card-body'>";
            // Exibir os dados abaixo da foto
            echo "<h5 class='card-title'>".$row["nome"]."</h5>";
            echo "<p class='card-text'>".$row["apelido"]."</p>";
            // Adicione mais campos se necessário
            echo "</div></div></div>";
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }
    ?>
  </div>

</div>

<!-- Modal para exibir a foto em tela cheia -->
<div class="modal fade" id="imagemModal" tabindex="-1" role="dialog" aria-labelledby="imagemModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img id="imagemModalFoto" src="" class="img-fluid" alt="Foto em tela cheia">
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS e dependências opcionais -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Script para exibir a foto em tela cheia -->
<script>
$(document).ready(function(){
  $('.card-img-link').click(function(){
    var foto = $(this).find('img').attr('src');
    $('#imagemModalFoto').attr('src', foto);
  });
});
</script>

</body>
</html>

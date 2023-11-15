<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["cadastrar"])) {
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

    // Recuperar os dados do formulário
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $observacao = $_POST['observacao'];

    // Upload da imagem
    $diretorio_img = "img/";
    $nome_arquivo = $apelido . "_" . basename($_FILES["imagem"]["name"]);
    $caminho_arquivo = $diretorio_img . $nome_arquivo;

    if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho_arquivo)) {
        // Preparar e executar a query de inserção
        $sql = "INSERT INTO pessoas (nome, apelido, observacao, foto) VALUES ('$nome', '$apelido', '$observacao', '$nome_arquivo')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Cadastro realizado com sucesso!";
            header("Location: page_restrita.php");
            exit();
        } else {
            echo "Erro ao cadastrar pessoa: " . $conn->error;
        }
    } else {
        echo "Falha no upload da imagem.";
    }

    $conn->close();
}
?>

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

// Recuperar os dados do formulário
$usuario = $_POST['usuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$perfil = $_POST['perfil'];

// Criptografar a senha
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

// Preparar e executar a query de inserção
$sql = "INSERT INTO usuario (usuario, nome, email, senha, perfil) VALUES ('$usuario', '$nome', '$email', '$senha_hash', '$perfil')";

// Restante do código permanece igual...
if ($conn->query($sql) === TRUE) {
    echo "Usuário criado com sucesso!";
} else {
    echo "Erro ao criar usuário: " . $conn->error;
}

$conn->close();
?>

<?php
session_start();

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
$senha = $_POST['senha'];

// Consulta para verificar se as credenciais são válidas
$sql = "SELECT id, usuario, senha FROM usuario WHERE usuario = '$usuario'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($senha, $row['senha'])) {
        $_SESSION['usuario_id'] = $row['id'];
        $_SESSION['usuario_nome'] = $row['usuario'];
        header("Location: page_restrita.php");
        exit();
    } else {
        echo "Senha incorreta. <a href='login.php'>Tente novamente</a>.";
    }
} else {
    echo "Usuário não encontrado. <a href='login.php'>Tente novamente</a>.";
}

$conn->close();
?>

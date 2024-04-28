<?php
session_start();
include("conexao.php");

$email = $_POST['email'];
$senha = md5($_POST['senha']);

// Usando prepared statements para prevenir SQL Injection
$stmt = $conexao->prepare("SELECT * FROM users WHERE email = ? AND senha = ?");
$stmt->bind_param("ss", $email, $senha);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $_SESSION['usuario'] = $email;
    // Redirecionar para a tela de PDV
    header("Location: PDV.html");
    exit;
} else {
    // Armazenar a mensagem de erro na sessão
    $_SESSION['error'] = "Email ou senha inválidos!";
    // Redirecionar de volta para a página de login
    header("Location: login.php");
    exit;
}
$stmt->close();
mysqli_close($conexao);
?>

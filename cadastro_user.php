<?php
    include("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = md5($_POST['senha']);

    $sql="INSERT INTO users (nome, email, telefone, senha) VALUES ('$nome', '$email', '$telefone', '$senha')";

    if(mysqli_query($conexao, $sql)){
        echo ("Usuário cadastrado com sucesso");
    } 
    else{ 
        echo ("Error: ".$sql."<br>".mysqli_error($conexao));
    }
    mysqli_close($conexao);
?>

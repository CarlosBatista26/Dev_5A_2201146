<?php
    include("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);  

       $stmt = $conexao->prepare("INSERT INTO users (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha);

    if($stmt->execute()){
        echo "Usuário cadastrado com sucesso";
        header("Location: index.html");
        exit();  
    } 
    else{ 
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conexao->close();
?>

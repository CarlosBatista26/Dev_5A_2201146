<?php
    include("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['EAN'];

    $sql="INSERT INTO products (nome, EAN, ) VALUES ('$nome', '$EAN')";

    if(mysqli_query($conexao, $sql)){
        echo ("Produto cadastrado com sucesso");
    } 
    else{ 
        echo ("Error: ".$sql."<br>".mysqli_error($conexao));
    }
    mysqli_close($conexao);
?>

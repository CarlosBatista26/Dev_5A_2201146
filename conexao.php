<?php
    $server = "localhost:3306";
    $user = "root";
    $pass = "";
    $db = "cadastro_user";

    $conexao=mysqli_connect($server, $user, $pass, $db);
   
    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_erro());
    }
 ?>
<?php

    session_start();
    include('conexao.php');

    $email = $_POST["email-login"];
    $password = hash('sha256', $_POST["password-login"]);

    $query = "SELECT id FROM usuarios WHERE email = '$email' AND password = '$password'";
    $resultado = mysqli_query($conexao, $query);

    if(mysqli_num_rows($resultado) > 0){

        $row = mysqli_fetch_row($resultado);
        $id = $row[0];
        $_SESSION['id'] = $id;
        header("Location: /experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/php/situacaoUsuario.php");
        exit();

    }
    else{
        $_SESSION['usuario-logado'] = false;
    }

    mysqli_close($conexao);
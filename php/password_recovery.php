<?php

    include("mysql_connection.php");
    include("email_sender.php");
    include("mysql_select.php");

    $email = $_POST["email"];
    $subject = "Mudança de senha - Mad Monkey";
    $link = "localhost/mad-monkey/pages/password_change/index.html";
    $content = "<a href='$link'>Clique aqui para alterar sua senha</a>";

    sendEmail($email, $subject, $content);

    $query = "SELECT id FROM users WHERE email = '$email'";
    $row = selectUser($connection, $query);
    $userID = $row[0];
    
    session_start();
    $_SESSION["user-id"] = $userID;
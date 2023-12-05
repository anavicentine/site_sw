<?php
    session_start();
    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true)){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        header('Location: ../index.html');
    }
    require('conecta.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $senha = md5($senha);

    $sql = "INSERT INTO usuarios (nome,email,senha) VALUES
    ('$nome','$email','$senha')";

    $conexao->query($sql);

    header('Location: index.php')
?>

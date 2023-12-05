<?php
session_start();
    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true)){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        header('Location: ../index.html');
    }
    require('conecta.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>  
        resposta = confirm("Você tem certeza que quer apagar esse cliente?")
        console.log(resposta)
        if(resposta == true){
            document.write(<?php apagar();?>)
        }else{
            document.write(<?php nada();?>)
        }
    </script>
    <?php 
        function apagar(){
            $id_cliente = $_GET['id']; //Pega da URL
            $sql = "DELETE FROM cadastro WHERE id_cliente = '$id_cliente' ";
            $conexao->query($sql);
            header('Location: index.php');}

        function nada(){
            header('Location: index.php');}
    ?>
    
</body>
</html>

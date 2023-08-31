<?php
    include("conecta.php");

    $nome  = $_POST["nome"];
    $cpf      = $_POST["cpf"];
    $telefone     = $_POST["telefone"];
    $email     = $_POST["email"];
    $senha      = $_POST["senha"];

    $comando = $pdo->prepare("INSERT INTO cadastro VALUES('$nome','$cpf','$telefone', '$email','$senha', null)" );
    $resultado = $comando->execute();

    // Para voltar no formulário:
    header("Location: vitima.html");
?>
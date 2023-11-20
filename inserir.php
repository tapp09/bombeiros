<?php
    include("conecta.php");


    $nome  = $_POST["nome"];
    $cpf      = $_POST["cpf"];
    $idade     = $_POST["idade"];
    $telefone     = $_POST["telefone"];
    $genero     = $_POST["genero"];
    $nomeacompanhante  = $_POST["nome-acompanhante"];
    $idadeacompanhante     = $_POST["idade-acompanhante"];

    if (isset($_POST['enviar'])) {
        $comando = $pdo->prepare("INSERT INTO paciente VALUES('$nome','$cpf','$idade', '$telefone','$genero', '$nomeacompanhante','$idadeacompanhante', null)" );
        $resultado = $comando->execute();
    }
    

    // Para voltar no formulário:
    header("Location: hospital.php");
?>
<?php
    include("conecta.php");

    $_SESSION["id"] = $pacienteexisteId;
    session_start();
    $id = $_SESSION["id_paciente"];

    $hospital  = $_POST["hospital"];
    $local  = $_POST["local"];
    $data     = $_POST["data"];


    if (isset($_POST['Próximo'])) {
        $comando = $pdo->prepare("INSERT INTO hospital VALUES('$hospital','$local', '$data')" );
        $resultado = $comando->execute();
    }
    

    // Para voltar no formulário:
    header("Location: hospital.php");
?>
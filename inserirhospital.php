<?php
    session_start();
    include("conecta.php");
    $id = $_SESSION["id_paciente"];


    if (isset($_POST["Proximo"])) {

        $hospital  = $_POST["hospital"];
        $local  = $_POST["local"];
        $data     = $_POST["data"];

        $comando = $pdo->prepare("INSERT INTO hospital(hospital, local, data, id_paciente) VALUES('$hospital', $local, $data, $id)");
        $resultado = $comando->execute();
        $pacienteexisteId = $pdo->lastInsertId(); 
        $_SESSION["id_paciente"] = $pacienteexisteId;
        

    }
    

    // Para voltar no formulário:
    header("Location: index.php");
?>
<?php
      $nome      = $_POST["nome"];    
      $matricula = $_POST["matricula"];


      $empregados = []; 


      $resposta = 
            [
               "nome"      => $nome,
               "matricula" => $matricula
            ];


      array_push($empregados, $resposta);


      include("conecta.php"); 
      $comando = $pdo->prepare("INSERT INTO alunos VALUES($matricula,'$nome')");
      $comando->execute();  
      
      $json_texto = json_encode(["empregados" => $empregados]);


      echo($json_texto);  
?>

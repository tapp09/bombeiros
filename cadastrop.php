<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/bombeiros/css/cadastrop.css">
<title>Bombeiros Voluntários</title>

</head>
<body>
<header>
   <img src="/bombeiros/images/logo_medicina.png" alt="Logo dos Bombeiros Voluntários">
   <h1>Bombeiros Voluntários</h1>
</header>
<div class="container">
  <form action="inserir.php" method="POST">
  <div class="form-group">
    <label for="nome">NOME PACIENTE</label>
    <input type="text" id="nome" name="nome" required>
  </div>
  <div class="form-group">
    <label for="cpf">CPF/RG</label>
    <input type="text" id="cpf" name="cpf" required>
  </div>
  <div class="form-group">
    <label for="idade">IDADE</label>
    <input type="text" id="idade" name="idade" required>
  </div>
  <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="text" id="telefone" name="telefone" required>
  </div>
  <div class="form-group checkbox-group">
    <label for="genero">SEXO</label>
    <input type="radio" name="genero" value="masculino"> M
    <input type="radio" name="genero" value="feminino"> F
    <div class="clear"></div>
  </div>
  <div class="separator"></div>
  <div class="form-group">
    <label for="nome-acompanhante">NOME ACOMPANHANTE </label>
    <input type="text" id="nome-acompanhante" name="nome-acompanhante">
  </div>
  <div class="form-group">
    <label for="idade-acompanhante">IDADE </label>
    <input type="text" id="idade-acompanhante" name="idade-acompanhante">
  </div>
</div>
<footer>
    <input type="submit" value="enviar">
</footer>
</form>
</body>
</html>

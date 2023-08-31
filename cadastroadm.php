<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/teste/css/cadastroadm.css">
<title>Bombeiros Voluntários</title>
</head>
<body>
<header>
   <img src="/teste/images/logo_medicina.png" alt="Logo dos Bombeiros Voluntários">
   <h1>Bombeiros Voluntários</h1>
</header>
<div class="container">
    <h2>CADASTRO BOMBEIROS</h2>
    
    <form action="inserir.php" method="POST" class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
    
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="123.456.789-00" required><br><br>
    
        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" pattern="\d{2} \d{5}-\d{4}" placeholder="12 12345-6789" required><br><br>
    
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
    
        <label for="senha">Senha:</label> 
        <input type="password" id="senha" name="senha" required><br><br>
    
        <br><br><br><br>
        <input type="submit" value="Cadastrar">
    </form>
       
</div>

</body>
</html>

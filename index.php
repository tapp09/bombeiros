<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/teste/css/index.css"> <!-- Certifique-se de incluir seu arquivo CSS correto -->
<title>Bombeiros Voluntários - Login</title>
</head>
<body>
<header>
   <img src="/teste/images/logo_medicina.png" alt="Logo dos Bombeiros Voluntários">
   <h1>Bombeiros Voluntários</h1>
</header>
<div class="container">
    <h2>LOGIN</h2>
    <br><br>
    
    <form action="entrar.php" method="POST" class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
    
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        
        <input type="submit" value="Entrar" >
  
    </form>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
   
</div>

</body>
</html>

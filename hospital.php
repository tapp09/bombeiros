<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bombeiros/css/hospital.css">
    <title>Hospital</title>
</head>
<body>
    <header>
       <img src="/bombeiros/images/logo_medicina.png" alt="Logo dos Bombeiros Voluntários">
       <h1>Bombeiros Voluntários</h1>
    </header>
    <div class="container">
    <form action="inserir.php" method="POST">
     <br>
      <div class="form-group">
        <label for="hospital">HOSPITAL</label>
        <input type="text" id="hospital" name="hospital" required>
      </div>
      <br>
      <div class="form-group">
        <label for="local">LOCAL OCORRÊNCIA</label>
        <textarea rows="4" cols="50" id="local" name="local" required class="lo"></textarea>
      </div>
      <br>
      <div class="form-group">
        <label for="data">DATA</label>
        <input type="date" id="data" name="data" required class="data">
      </div>
      <br><br>  <br><br>  <br><br>  <br><br><br>
    </div>
    <footer>
        <input type="submit" value="Próximo" />
    </footer>
    </form>
    </body>
    </html>
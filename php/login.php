<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar sesión</title>
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>

<div class="login-container">
<div class="image"><img src="../images/logo1.png"></div>
  <h2>Iniciar sesión</h2>
  <form action="validar.php" method="post">
    <div class="form-group">
      <label for="usuario">Usuario:</label>
      <input type="text" id="usuario" name="nombre" required>
    </div>
    <div class="form-group">
      <label for="contrasena">Contraseña:</label>
      <input type="password" id="contrasena" name="contraseña" required>
    </div>
    <input type="submit" value="Entrar">

    
  </form>
</div>

</body>
</html>

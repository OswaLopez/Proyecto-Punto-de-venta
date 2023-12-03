<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>inicio</title>
  <link rel="stylesheet" href="../css/inicio.css">
</head>
<body>

<!-- Encabezado -->
<header>
  <!-- Menú superior -->
  <nav class="top-menu">
    <ul>
      <li><img src="../images/setting.png" alt="ajustes"><a href="#">Ajustes</a></li>
      <li><img src="../images/usuario.png" alt="usuario"><a href="#">Usuario</a></li>
      <li class="date"><img src="../images/calendario.png" alt="fecha">Fecha: <?php echo date("d/m/Y"); ?></li>
      <li><img src="../images/logout.png" alt="logout"><a href="../php/login.php">Logout</a></li>
    </ul>
  </nav>
</header>

<!-- Sidebar (menú lateral izquierdo) -->
<aside class="sidebar">
  <div class="logo">
    <img src="../images/logo1.png" alt="Logo">
  </div>
  
  <!-- Menú lateral -->
  <nav class="side-menu">
    <ul>
      <li><img src="../images/home.png" alt="home"><a href="#">Inicio</a></li>
      <li><img src="../images/ventas.png" alt="ventas"><a href="#">Ventas</a></li>
      <li><img src="../images/productos.png" alt="productos"><a href="../php/productos.php">Productos</a></li>
      <li><img src="../images/clientes.png" alt="clientes"><a href="#">Clientes</a></li>
      <li><img src="../images/proveedores.png" alt="proveedores"><a href="#">Proveedores</a></li>
      <li><img src="../images/reportes.png" alt="reportes"><a href="#">Reportes</a></li>
      <li><img src="../images/usuarios.png" alt="usuarios"><a href="#">Usuarios</a></li>
      <li><img src="../images/compras.png" alt="compras"><a href="#">Compras</a></li>
    </ul>
  </nav>
</aside>

<!-- Contenido principal -->
<main class="main-content">
  <!-- Menú principal -->
  <nav class="main-menu">
    <ul>
      <li>
        <img src="../images/home.png" alt="home">
        <a href="../php/inicio.php">Inicio</a>
      </li>
      <li>
        <img src="../images/ventas.png" alt="ventas">
        <a href="#">Ventas</a>
      </li>
      <li>
        <img src="../images/productos.png" alt="productos">
        <a href="../php/productos.php">Productos</a>
      </li>
      <li>
        <img src="../images/clientes.png" alt="clientes">
        <a href="#">Clientes</a>
      </li>
      <li>
        <img src="../images/proveedores.png" alt="proveedores">
        <a href="#">Proveedores</a>
      </li>
      <li>
        <img src="../images/reportes.png" alt="reportes">
        <a href="#">Reportes</a>
      </li>
      <li>
        <img src="../images/usuarios.png" alt="usuarios">
        <a href="#">Usuarios</a>
      </li>
      <li>
        <img src="../images/compras.png" alt="compras">
        <a href="#">Compras</a>
      </li>
    </ul>
  </nav>
  
</main>

</body>
</html>

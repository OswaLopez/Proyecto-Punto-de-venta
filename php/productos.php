<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Productos</title>
  <link rel="stylesheet" href="../css/inicio.css">
  <link rel="stylesheet" href="../css/productos.css">
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
      <li><img src="../images/home.png" alt="home"><a href="../php/inicio.php">Inicio</a></li>
      <li><img src="../images/ventas.png" alt="ventas"><a href="#">Ventas</a></li>
      <li><img src="../images/productos.png" alt="productos"><a href="../php/productos.php">Productos</a></li>
      <li><img src="../images/clientes.png" alt="clientes"><a href="../php/clientes.php">Clientes</a></li>
      <li><img src="../images/proveedores.png" alt="proveedores"><a href="../php/proveedores.php">Proveedores</a></li>
      <li><img src="../images/reportes.png" alt="reportes"><a href="#">Reportes</a></li>
      <li><img src="../images/usuarios.png" alt="usuarios"><a href="../php/usuariosregis.php">Usuarios</a></li>
      <li><img src="../images/compras.png" alt="compras"><a href="#">Compras</a></li>
    </ul>
  </nav>
</aside>

<!-- Contenido principal -->
<main class="main-content">
  <div class="submenu-container">
  <div class="clie"><h2>Productos</h2></div>
    <ul class="submenu">
      <li><img src="../images/agregar.png" alt="icono"><a href="../php/productos.php"><button>Agregar</button></a></li>
      <li><img src="../images/editar.png" alt="icono"><button>Editar</button></li>
      <li><img src="../images/actualizar.png" alt="icono"><a href="../php/productoactualiza.php"><button>Actualizar</a></button></li>
      <li><img src="../images/eliminar.png" alt="icono"><a href="../php/eliminaproducto.php"><button>Eliminar</a></button></li>
    </ul>
  </div>

  <div class="form-container">
  <?php
        include("config.php");
        include("registro.php");
        ?>
    <form action="" method="post">
    <div class="form-row">
        <label for="clave">Clave:</label>
        <input type="text" id="clave" name="clave">
      </div>

      <div class="form-row">
        <label for="descripcion">Descripción:</label>
        <input type="text" id="descripcion" name="descripcion">
      </div>

      <div class="form-row-three">
        <label for="categoria">Categoría:</label>
        <input type="text" id="categoria" name="categoria">

        <label for="unidad-compra">Unidad de compra:</label>
        <input type="text" id="unidad-compra" name="unidad-compra">

        <label for="precio-compra">Precio de compra $:</label>
        <input type="text" id="precio-compra" name="precio-compra">
      </div>

      <div class="form-row">
        <label for="precio-menudeo">Precio venta menudeo $:</label>
        <input type="text" id="precio-menudeo" name="precio-menudeo">
      </div>

      <div class="form-row">
        <label for="precio-mayoreo">Precio venta mayoreo $:</label>
        <input type="text" id="precio-mayoreo" name="precio-mayoreo">
      </div>

      <div class="form-buttons">
        <input class="boton" type="submit" value="Guardar" name="guardar">
        <button type="button" name="cancelar" onclick='cancelar()'>Cancelar</button>
      </div>
    </form>
  </div>
  <script>
    function cancelar() {
      window.history.back();
    }
  </script>
</main>


</body>
</html>

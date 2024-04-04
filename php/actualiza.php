<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Actualizaproductos</title>
  <link rel="stylesheet" href="../css/inicio.css">
  <link rel="stylesheet" href="../css/productos.css">
  <link rel="stylesheet" href="../css/prodactualiza.css">
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
    <ul class="submenu">
      <li><img src="../images/agregar.png" alt="icono"><a href="../php/productos.php"><button>Agregar</button></a></li>
      <li><img src="../images/editar.png" alt="icono"><button>Editar</button></li>
      <li><img src="../images/actualizar.png" alt="icono"><button>Actualizar</button></li>
      <li><img src="../images/eliminar.png" alt="icono"><button>Eliminar</button></li>
    </ul>
  </div>

  <div class="form-container">
  <?php
    // ... (código PHP para buscar y mostrar los resultados)
    include("config.php");
          // Comprueba si se ha recibido un ID de producto válido
           if (isset($_GET['idproducto'])) {
            
            $idproducto = $_GET['idproducto'];

            // Aquí puedes realizar una consulta a la base de datos con el ID del producto seleccionado
            // y mostrar los datos del artículo en las etiquetas correspondientes

            // Ejemplo de cómo mostrar el nombre del producto
            echo "<h2>Detalle del Producto</h2>";
            echo "<p>Nombre del Producto Seleccionado</p>";

            // Formulario para actualizar la existencia del producto
            echo "<form action='actualizar_existencia.php' method='post'>";
            echo "<div class='form-row'>";
            echo "<label for='existencia'>Existencia:</label>";
            echo "<p>100</p>"; // Muestra la existencia actual del producto (sustituye con el valor real)
            echo "</div>";

            echo "<div class='form-row'>";
            echo "<label for='entrada'>Entrada:</label>";
            echo "<input type='radio' id='entrada' name='accion' value='entrada'>";
            echo "<label for='entrada'>Entrada</label>";
            echo "<input type='text' id='texto_entrada' name='texto_entrada' placeholder='Cantidad de entrada'>";
            echo "</div>";

            echo "<div class='form-row'>";
            echo "<label for='salida'>Salida:</label>";
            echo "<input type='radio' id='salida' name='accion' value='salida'>";
            echo "<label for='salida'>Salida</label>";
            echo "<input type='text' id='texto_salida' name='texto_salida' placeholder='Cantidad de salida'>";
            echo "</div>";

            // Botones para aplicar o cancelar los cambios
            echo "<div class='form-buttons'>";
            echo "<button type='submit' name='aplicar'>Aplicar</button>";
            echo "<button type='button' onclick='cancelar()'>Cancelar</button>";
            echo "</div>";

            echo "</form>";
          } else {
            echo "No se ha seleccionado ningún producto para actualizar";
          }
        ?>

  </div>
  <script>
    function cancelar() {
      window.history.back();
    }
  </script>
</main>


</body>
</html>
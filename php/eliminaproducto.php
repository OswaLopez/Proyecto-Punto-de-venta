<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Elimina producto</title>
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
  <div class="clie"><h2>Eliminar Producto</h2></div>
    <ul class="submenu">
      <li><img src="../images/agregar.png" alt="icono"><button><a href="../php/productos.php">Agregar</a></button></li>
      <li><img src="../images/editar.png" alt="icono"><button>Editar</button></li>
      <li><img src="../images/actualizar.png" alt="icono"><button>Actualizar</button></li>
      <li><img src="../images/eliminar.png" alt="icono"><a href="../php/productos.php"><button>Eliminar</button></a></li>
    </ul>
  </div>

  <div class="form-container">
  <?php
        include("config.php");  
        ?>
    <form action="" method="post">
        <div class="search-container">
        <img src="../images/busqueda.png" alt="Buscar"><input type="text" id="buscar" name="buscar" placeholder="Buscar...">
        </div>
        <?php
        if (isset($_POST['buscar'])) {
        $buscar = $_POST['buscar'];

        // Consulta SQL para buscar en la base de datos
        $sql = "SELECT * FROM productos WHERE idproducto LIKE '%$buscar%'";
       
        // Ejecutar la consulta
        $result = mysqli_query($conn, $sql);
       
       
        // Mostrar los resultados si existen
        if ($result->num_rows > 0) {
            echo "<table border='1'>
            <tr>
              <th>Clave</th>
              <th>Descripción</th>
              <th>Categoria</th>
              <th>Precio Menudeo</th>
              <th>Precio Mayoreo</th>
            </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                  echo "<td>" . $row['idproducto'] . "</td>";
                  echo "<td><a href='elimina.php?idproducto=" . $row['idproducto'] . "'>" . $row['descripcion'] . "</a></td>";
                  //echo "<td>" . $row['descripcion'] . "</td>";
                  echo "<td>" . $row['categoria'] . "</td>";
                  echo "<td>" . $row['menudeo'] . "</td>";
                  echo "<td>" . $row['mayoreo'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No se encontraron resultados";
        }
      }else{}
        // Cerrar conexión
        $conn->close();
       
       ?>
        <!-- Repite esta estructura <tr>...</tr> con los datos de tu base de datos 
        </table>

        <div class="form-buttons">
        <input class="boton" type="submit" value="Guardar" name="guardar">
        <button type="button" name="cancelar">Cancelar</button>-->
  </div>        
  </form>
</main>


</body>
</html>
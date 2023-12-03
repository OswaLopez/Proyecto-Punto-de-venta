<?php

include("config.php");

 // Obtener el valor enviado por el formulario
 $buscar = $_POST['buscar'];

 // Consulta SQL para buscar en la base de datos
 $sql = "SELECT * FROM productos WHERE idproducto LIKE '%$buscar%'";  // Cambiar "tu_tabla" y "columna" por tus valores reales

 // Ejecutar la consulta
 $result = mysqli_query($conn, $sql);


 // Mostrar los resultados si existen
 if ($result->num_rows > 0) {
     echo "<table border='1'>
     <tr>
     <th>Clave</th>
     <th>Descripción</th>
     <th>Categoria</th>
     <th>Unidad de compra</th>
     
     </tr>";
     while ($row = $result->fetch_assoc()) {
         echo "<tr>";
         echo "<td>" . $row['idproducto'] . "</td>";  // Cambiar "id" por el nombre de tu columna ID
         echo "<td>" . $row['descripcion'] . "</td>";  // Cambiar "columna" por el nombre de tu columna de búsqueda
         echo "</tr>";
     }
     echo "</table>";
 } else {
     echo "No se encontraron resultados";
 }

 // Cerrar conexión
 $conn->close();

?>
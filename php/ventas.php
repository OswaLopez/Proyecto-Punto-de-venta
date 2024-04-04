<!DOCTYPE html>
<html>
<head>
  <title>Tabla de tareas</title>
  <style>
    /* Estilos para la tabla */
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    /* Estilos para los botones */
    .boton {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 8px 16px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }

    .boton-cancelar {
      background-color: #f44336;
    }
  </style>
</head>
<body>

  <h1>Tabla de tareas</h1>

  <table>
    <tr>
      <th>Título</th>
      <th>Descripción</th>
      <th>Fecha de vencimiento</th>
      <th>Prioridad</th>
      <th>Estado</th>
      <th>Plantilla</th>
    </tr>
    <tr>
      <td>Completar informe</td>
      <td>Completar el informe trimestral de ventas</td>
      <td>2023-12-31</td>
      <td>Alta</td>
      <td>En progreso</td>
      <td>Plantilla 1</td>
    </tr>
    <tr>
      <td>Revisar diseño</td>
      <td>Revisar el diseño del nuevo sitio web</td>
      <td>2024-01-15</td>
      <td>Media</td>
      <td>Pendiente</td>
      <td>Plantilla 2</td>
    </tr>
    <tr>
      <td>Actualizar base de datos</td>
      <td>Actualizar la base de datos de clientes</td>
      <td>2024-01-31</td>
      <td>Baja</td>
      <td>Completado</td>
      <td>Plantilla 3</td>
    </tr>
  </table>

  <button class="boton boton-cancelar">Cancelar</button>
  <button class="boton">Aceptar</button>

</body>
</html>

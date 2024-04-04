<?php

include("config.php");
//Elimina Producto
if (isset($_GET['idproducto'])) {
    $idproducto = $_GET['idproducto'];
// Obtener el ID del producto a eliminar desde el formulario
//$id_producto = $_POST['idproducto'];

// Consulta para eliminar el producto
$sql = "DELETE FROM productos WHERE idproducto = '$idproducto'";

// Ejecutar la consulta de eliminación
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Producto eliminado correctamente');</script>";
} else {
    echo "<script>alert('Error al eliminar el producto: " . $conn->error . "');</script>";
}
}

// Cerrar la conexión
$conn->close();

//Elimina Cliente
include("config.php");
if (isset($_GET['idcliente'])) {
    $idcliente = $_GET['idcliente'];
// Obtener el ID del producto a eliminar desde el formulario
//$id_producto = $_POST['idproducto'];

// Consulta para eliminar el producto
$sql = "DELETE FROM clientes WHERE idcliente = '$idcliente'";

// Ejecutar la consulta de eliminación
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Cliente eliminado correctamente');</script>";
} else {
    echo "<script>alert('Error al eliminar el cliente: " . $conn->error . "');</script>";
}
}

// Cerrar la conexión
$conn->close();

//Elimina Proveedor
include("config.php");
if (isset($_GET['idproveedor'])) {
    $idproveedor = $_GET['idproveedor'];
// Obtener el ID del producto a eliminar desde el formulario
//$id_producto = $_POST['idproducto'];

// Consulta para eliminar el producto
$sql = "DELETE FROM proveedores WHERE idproveedor = '$idproveedor'";

// Ejecutar la consulta de eliminación
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Proveedor eliminado correctamente');</script>";
} else {
    echo "<script>alert('Error al eliminar el proveedor: " . $conn->error . "');</script>";
}
}

// Cerrar la conexión
$conn->close();
?>
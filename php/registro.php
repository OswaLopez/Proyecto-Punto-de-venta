<?php

include("config.php");

if (isset($_POST['registro'])){
    if(strlen($_POST['nombre']) >= 1  && strlen($_POST['apellidos']) >= 1 && strlen($_POST['contraseña']) >= 1){
        $nombre = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellidos']);
        $contraseña = trim($_POST["contraseña"]);
        $consulta = "INSERT INTO usuarios(nombre, apellidos, contraseña) VALUES ('$nombre','$apellidos', '$contraseña')";
        
        $resultado = mysqli_query($conn, $consulta);

        if($resultado) {
            echo "¡Te has suscrito exitosamente!";
        }
        else{
            echo "Error al suscribirse: " . $conn->error;
        }
    } else{
        echo "¡Por favor complete los campos";
    }
}

if (isset($_POST['guardar'])){
    if(strlen($_POST['clave']) >= 1  && strlen($_POST['descripcion']) >= 1 && strlen($_POST['categoria']) >= 1 &&
       strlen($_POST['unidad-compra']) >= 1 && strlen($_POST['precio-compra']) >= 1 && strlen($_POST['precio-menudeo']) >= 1 && 
       strlen($_POST['precio-mayoreo']) >= 1)
       {
        $clave = trim($_POST['clave']);
        $descripcion = trim($_POST['descripcion']);
        $categoria = trim($_POST['categoria']);
        $unidadcompra = trim($_POST['unidad-compra']);
        $preciocompra = trim($_POST['precio-compra']);
        $preciomenudeo = trim($_POST['precio-menudeo']);
        $preciomayoreo = trim($_POST['precio-mayoreo']);
        $registraproducto = "INSERT INTO productos(idproducto, descripcion, categoria, unidadCompra, precioCompra, menudeo, mayoreo) VALUES ('$clave','$descripcion','$categoria','$unidadcompra','$preciocompra','$preciomenudeo','$preciomayoreo')";
        
        $resultado2 = mysqli_query($conn, $registraproducto);

        if($resultado2) {
            echo "¡Producto agregado correctamente!";
        }
        else{
            echo "Error en la solicituda: " . $conn->error;
        }
    } else{
        echo "¡Por favor complete los campos";
    }
}

?>

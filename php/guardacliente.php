<?php

include("config.php");

if (isset($_POST['guardar'])){
    if(strlen($_POST['clave']) >= 1  && strlen($_POST['nombre']) >= 1 && strlen($_POST['direccion']) >= 1 &&
       strlen($_POST['tel']) >= 1 && strlen($_POST['cell']) >= 1 && strlen($_POST['apellidos']) >= 1 && 
       strlen($_POST['email']) >= 1 && strlen($_POST['rfc']) >= 1)
       {
        $clave = trim($_POST['clave']);
        $nombre = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellidos']);
        $tel = trim($_POST['tel']);
        $cell = trim($_POST['cell']);
        $email = trim($_POST['email']);
        $direccion = trim($_POST['direccion']);
        $rfc = trim($_POST['rfc']);

        $registracliente = "INSERT INTO clientes(idcliente, nombre, apellidos, direccion, telefono, celular, email, rfc) VALUES ('$clave','$nombre','$apellidos','$direccion','$tel','$cell','$email', '$rfc')";
        
        $resultado2 = mysqli_query($conn, $registracliente);

        if($resultado2) {
            echo "¡Cliente agregado correctamente!";
        }
        else{
            echo "Error en la solicituda: " . $conn->error;
        }
    } else{
        echo "¡Por favor complete los campos";
    }
}

?>
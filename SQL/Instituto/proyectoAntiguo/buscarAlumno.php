<?php

if(isset($_POST)){
    
    require_once 'includes/conexion.php';
    
    //var_dump($_POST);
    
    $idCliente = $_POST['idCliente'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono= $_POST['telefono'];
    $direccion= $_POST['direccion'];
    
    // Validación
    $errores = array();
    
    if(empty($nombre)){
        $errores['nombre'] = 'El nombre no es v&aacutelido.';
    }
    
    if(empty($apellidos)){
        $errores['apellidos'] = 'Los apellidos no son v&aacutelidos.';
    }
    
    if(empty($idCliente) || !is_numeric($idCliente)){
        $errores['idCliente'] = 'El ID del cliente no es v&aacutelido.';
        
    }
    
    if(empty($telefono) || !is_numeric($idCliente)){
        $errores['telefono'] = 'El n&uacutemero de tel&eacutefono no es v&aacutelido.';
    }
    
    if(empty($direccion)){
        $errores['direccion'] = 'La direcci&oacuten no es v&aacutelida.';
    }
    
    
    if(count($errores) == 0){
        
        $sql = "(SELECT * from clientes WHERE idCliente = $idCliente);";
        
        
        $obtenerClientesporid = mysqli_query($db, $sql);
        
        //var_dump($guardar);
        
        
    }else{
        
        $_SESSION["errores_entrada"] = $errores;
        var_dump($_SESSION);
        
    }
    
    header("Location: buscaclienteporid.php");
}
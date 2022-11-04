<?php

// Muestra los errores que nos devuelven en la sesión.

function mostrarError($errores, $campo){
	$alerta = '';
	if(isset($errores[$campo]) && !empty($campo)){
		$alerta = "<div class='alerta alerta-error'>".$errores[$campo].'</div>';
	}
	
	return $alerta;
}

// Elimina los errores de la sesión

function borrarErrores(){
	$borrado = false;
	
	if(isset($_SESSION['errores'])){
		$_SESSION['errores'] = null;
		$borrado = true;
	}
	
	if(isset($_SESSION['errores_entrada'])){
		$_SESSION['errores_entrada'] = null;
		$borrado = true;
	}
	
	
	return $borrado;
}

// Obtiene todos los alumnos de la BBDD

function obtenerClientes($conexion){
    
    $sql = "SELECT * FROM clientes ORDER BY idCliente ASC;";
    $clientes = mysqli_query($conexion, $sql);
    
    $resultado = [];
    
    if($clientes && mysqli_num_rows($clientes) >= 1){
        $resultado = $clientes;
    }
    
    return $resultado;
    
}

function obtenerClientesporid($conexion, $idCliente){
    
    $sql = "SELECT * from clientes WHERE idCliente ='$idCliente";
    $clientes = mysqli_query($conexion, $sql);
    
    $resultado = [];
    
    if($clientes && mysqli_num_rows($clientes) >= 1){
        $resultado = $clientes;
    }
    
    return $resultado;
    
}


function obtenerAverias($conexion){
    
    $sql = "SELECT * FROM averias ORDER BY idAveria ASC;";
    $averias = mysqli_query($conexion, $sql);
    
    $resultado = [];
    
    if($averias && mysqli_num_rows($averias) >= 1){
        $resultado = $averias;
    }
    
    return $resultado;
    
}

function obtenerTrabajadores($conexion){
    
    $sql = "SELECT * FROM trabajadores ORDER BY idTrabajador ASC;";
    $trabajadores = mysqli_query($conexion, $sql);
    
    $resultado = [];
    
    if($trabajadores && mysqli_num_rows($trabajadores) >= 1){
        $resultado = $trabajadores;
    }
    
    return $resultado;
    
}
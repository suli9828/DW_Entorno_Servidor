<?php


function mostrarError($errores, $campo){
	$alerta = '';
	if(isset($errores[$campo]) && !empty($campo)){
		$alerta = "<div class='alerta alerta-error'>".$errores[$campo].'</div>';
	}
	
	return $alerta;
}


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

function obtenerAlumnos($conexion){
    
    $sql = "SELECT * FROM alumnos ORDER BY idAlumno ASC;";
    $alumnos = mysqli_query($conexion, $sql);
    
    $resultado = [];
    
    if($alumnos && mysqli_num_rows($alumnos) >= 1){
        $resultado = $alumnos;
    }
    
    return $resultado;
    
}

function obtenerGrupos($conexion){
    
    $sql = "SELECT * FROM grupos ORDER BY idGrupo ASC;";
    $grupos = mysqli_query($conexion, $sql);
    
    $resultado = [];
    
    if($grupos && mysqli_num_rows($grupos) >= 1){
        $resultado = $grupos;
    }
    
    return $resultado;
    
}

function obtenerProfesores($conexion){
    
    $sql = "SELECT * FROM profesores ORDER BY idProfesor ASC;";
    $profesores = mysqli_query($conexion, $sql);
    
    $resultado = [];
    
    if($profesores && mysqli_num_rows($profesores) >= 1){
        $resultado = $profesores;
    }
    
    return $resultado;
    
}
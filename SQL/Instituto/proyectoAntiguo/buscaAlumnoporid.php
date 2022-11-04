<?php
setCookie('sulaiman','PHP');
require_once 'includes/cabecera.php'; ?>
		
		

<div id="principal">
	 <h2> Clientes:</h2>

	<form action="buscaclienteporid.php" method="POST">
		<label for="idCliente"></label>
		<label for="nombre"></label>

		<input type="number" name="idCliente" placeholder="ID del cliente" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'idCliente') : ''; ?>
		<input type="text" name="nombre" placeholder="Nombre" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'nombre') : ''; ?>
		<input type="submit" value="Buscar" />
	</form>
	 
	
	<table class="styled-table">
	 <tr>
	 <th>ID del cliente </th>
	 <th>Nombre </th>
	 <th>Apellidos </th>
	 <th>Tel&eacutefono </th>
	 <th>Direcci&oacuten </th>

	 </tr>
	 
	<?php 
	$errores = array();
	
	$idCliente = $_POST['idCliente'];
	$nombre = $_POST['nombre'];
	
	$sql = "SELECT * FROM clientes WHERE idCliente LIKE '%$idCliente%' AND nombre LIKE '%$nombre%' ORDER BY idCliente ASC;";
	
	//echo $sql;
	
	$clientes = mysqli_query($db, $sql);
	
	$resultado = [];
	
	if ($clientes && mysqli_num_rows($clientes) >= 1) {
	    $resultado = $clientes;
	} else {
	    
	    $_SESSION["errores_entrada"] = $errores;
        echo "No se ha encontrado el cliente";	
	}
		$clientes = obtenerClientes($db);
		if(!empty($clientes)){
		    while($cliente = mysqli_fetch_assoc($resultado)){
	?>
				  <tr>
					
					<td><?=$cliente['idCliente']?></td>
					<td><?=$cliente['nombre']?></td>
					<td><?=$cliente['apellidos']?></td>
					<td><?=$cliente['telefono']?></td>
					<td><?=$cliente['direccion']?></td>

					
					
					
				</tr>
				
	<?php
		} //Fin while
		} //Fin if
	?>
	
	</table>
	
</div> 



		</div>
		
	</body>
</html>

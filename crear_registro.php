<<<<<<< HEAD
<?php 
	require_once('bd/conexion.php');
	$nombre    =$_POST['nombre'];
	$ubicacion =$_POST['ubicacion'];
	$padre     =$_POST['padre'];

	try {
		//Conexión
		$conexion = mysql_connect($server,$username,$password);
		mysql_select_db($database);

		//Verificar que el Nombre del Registro no Exista en la BD
		$query= "SELECT rgo_nombre FROM registros WHERE rgo_nombre='$nombre'";
		$resultado = mysql_query($query,$conexion);
		$num_filas = mysql_num_rows($resultado);
		    /*$row = mysql_fetch_array($resultado);*/
		    
		    if($num_filas>0){
		/*if($row['rgo_nombre']==$nombre){*/
			echo"2";
		}else{
			//Convertir a Mayusculas
				$nombre    = mb_convert_case($nombre, MB_CASE_UPPER, "UTF-8");
				$ubicacion = mb_convert_case($ubicacion, MB_CASE_UPPER, "UTF-8");

				
				
				$query = "INSERT INTO registros(rgo_nombre,rgo_ubicacion,rgo_estado,rgo_cod_padre) VALUES('$nombre','$ubicacion','1','$padre')" or die("Error in the consult.." . mysqli_error($query)); 
			    $resultado = mysql_query($query,$conexion);
			//ejecutar query. 
			    $query = null;
			    $query = "INSERT INTO padres(pad_nombre) VALUES('$nombre')" or die("Error in the consult.." . mysqli_error($query)); 
			    $result    = mysql_query($query,$conexion);
			    echo"1";
		}
	} catch (Exception $e) {
		echo $e;		
	}
=======
<?php 
	require_once('bd/conexion.php');
	$nombre    =$_POST['nombre'];
	$ubicacion =$_POST['ubicacion'];
	$padre     =$_POST['padre'];

	try {
		//Conexión
		$conexion = mysql_connect($server,$username,$password);
		mysql_select_db($database);

		//Verificar que el Nombre del Registro no Exista en la BD
		$query= "SELECT rgo_nombre FROM registros WHERE rgo_nombre='$nombre'";
		$resultado = mysql_query($query,$conexion);
		$num_filas = mysql_num_rows($resultado);
		    /*$row = mysql_fetch_array($resultado);*/
		    
		    if($num_filas>0){
		/*if($row['rgo_nombre']==$nombre){*/
			echo"2";
		}else{
			//Convertir a Mayusculas
				$nombre    = mb_convert_case($nombre, MB_CASE_UPPER, "UTF-8");
				$ubicacion = mb_convert_case($ubicacion, MB_CASE_UPPER, "UTF-8");

				
				
				$query = "INSERT INTO registros(rgo_nombre,rgo_ubicacion,rgo_estado,rgo_cod_padre) VALUES('$nombre','$ubicacion','1','$padre')" or die("Error in the consult.." . mysqli_error($query)); 
			    $resultado = mysql_query($query,$conexion);
			//ejecutar query. 
			    $query = null;
			    $query = "INSERT INTO padres(pad_nombre) VALUES('$nombre')" or die("Error in the consult.." . mysqli_error($query)); 
			    $result    = mysql_query($query,$conexion);
			    echo"1";
		}
	} catch (Exception $e) {
		echo $e;		
	}
>>>>>>> origin/master
?>
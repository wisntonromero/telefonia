<?php 
	require_once('bd/conexion.php');
	$nombre     =$_POST['nombre'];
	$num_puertos=$_POST['num_puertos'];
	$padre      =$_POST['padre'];
	try {
		//Convertir a Mayusculas
			$nombre = mb_convert_case($nombre, MB_CASE_UPPER, "UTF-8");
		//Conexión
			$conexion = mysql_connect($server,$username,$password);
		    mysql_select_db($database);

		    $query="SELECT rgt_nombre, rgo_id FROM regletas,registros WHERE id_registro=rgo_id AND rgt_nombre='$nombre' AND rgo_id='$padre'";
		    $resultado = mysql_query($query,$conexion);
		    $num_filas = mysql_num_rows($resultado);
		    /*$row = mysql_fetch_array($resultado);*/
		    
		    if($num_filas>0){
		    /*if($row['rgt_nombre']==$nombre && $row['rgo_id']==$padre){*/
				echo"2";
		    }else{
				$query = "INSERT INTO regletas(id_registro,rgt_nombre,rgt_estado,rgt_num_puertos) VALUES('$padre','$nombre','1','$num_puertos')" or die("Error in the consult.." . mysqli_error($query)); 

			//ejecutar query. 
			    $resultado = mysql_query($query,$conexion);
			    echo"1";
		    }
	} catch (Exception $e) {
		echo $e;
	}

?>
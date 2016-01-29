<?php
	include("bd/conexion.php");
	require_once('adodb5/adodb.inc.php');

	$extension = $_POST['extension'];
	$con = ADONewConnection('mysql');
	$con->PConnect($server,$username,$password,$database);

	$query    = "SELECT apellido,nombre,alveolo,placa_interfaz,direccion_equipo,tipo_terminal,centro_de_costos,cubiculo,activo,direccion_ip,mac
	FROM info
	WHERE extension='$extension'";
	$rs       = $con->Execute($query);

	if(!$rs->EOF){
   		$vec = array('nombre'          =>$rs->fields['nombre'],
		   			 'apellido'		   =>$rs->fields['apellido'],
		   			 'alveolo'         =>$rs->fields['alveolo'],
			   		 'placa_interfaz'  =>$rs->fields['placa_interfaz'],
			   		 'direccion_equipo'=>$rs->fields['direccion_equipo'],
			   		 'tipo_terminal'   =>$rs->fields['tipo_terminal'],
			   		 'activo'          =>$rs->fields['activo'],
			   		 'dir_ip'          =>$rs->fields['direccion_ip'],
			   		 'centro_de_costos'   =>$rs->fields['centro_de_costos'],
			   		 'mac'			   =>$rs->fields['mac'],		   		 
			   		 'cubiculo'        =>$rs->fields['cubiculo']);
   	}
    	$con->Close();
		echo json_encode($vec);

?>
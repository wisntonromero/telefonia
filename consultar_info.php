<?php
	include("bd/conexion.php");
	require_once('adodb5/adodb.inc.php');

	$extension = $_POST['extension'];
	$con = ADONewConnection('mysql');
	$con->PConnect($server,$username,$password,$database);

	$query    = "SELECT MAX(pue_salto)
				 FROM puerto
				 WHERE pue_extension = '$extension'";
	$rs = $con->Execute($query);

	$salto = $rs->fields['MAX(pue_salto)'];
	$rs=null;

	$query    = "SELECT ter_nombre,centro_de_costos,direccion_ip,mac,nombre,apellido,alveolo,placa_interfaz,direccion_equipo,ter_id,ter_nombre,activo,cubiculo,rgo_nombre,rgt_nombre,pue_salida
				 FROM info, puerto,regletas,registros,tipos_terminal
				 WHERE extension=pue_extension AND ter_id=tipo_terminal AND rg_salida=rgt_id AND id_registro=rgo_id AND pue_salto=$salto AND extension='$extension'";
	$rs       = $con->Execute($query);

	if(!$rs->EOF){
   		$vec = array('registro'        =>$rs->fields['rgo_nombre'],
   					 'regleta'         =>$rs->fields['rgt_nombre'],
   					 'puerto'          =>$rs->fields['pue_salida'],
   					 'nombre'          =>$rs->fields['nombre'],
		   			 'apellido'		   =>$rs->fields['apellido'],
		   			 'alveolo'         =>$rs->fields['alveolo'],
			   		 'placa_interfaz'  =>$rs->fields['placa_interfaz'],
			   		 'direccion_equipo'=>$rs->fields['direccion_equipo'],
			   		 'tipo_terminal'   =>$rs->fields['ter_id'],
			   		 'activo'          =>$rs->fields['activo'],
			   		 'dir_ip'          =>$rs->fields['direccion_ip'],
			   		 'centro_costos'   =>$rs->fields['centro_de_costos'],
			   		 'direccion_ip'    =>$rs->fields['direccion_ip'],
			   		 'mac'			   =>$rs->fields['mac'],
			   		 'terminal'        =>$rs->fields['ter_nombre'],
			   		 'cubiculo'        =>$rs->fields['cubiculo']);
   	}
    	$con->Close();
		echo json_encode($vec);

?>
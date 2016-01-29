<?php 

include("bd/conexion.php");

	require_once('adodb5/adodb.inc.php');

	$extension = $_POST['extension'];

	$con = ADONewConnection('mysql');
	$con->PConnect($server,$username,$password,$database);
	$query    = "SELECT * FROM registros, puertos, regletas, tipos WHERE rgo_id = id_registro AND rgt_id = id_regleta AND pue_extension =  $extension AND tip_id = pue_tipo";
	$rs       = $con->Execute($query);

	$i=0;
	   if(!$rs->EOF)
	   {
		   	$arrayDetInv[$i] =array('registro'=>$rs->fields['rgo_codigo'],'regleta'=>$rs->fields['rgt_nombre']);
		   	$rs->MoveNext();
		   	$i++;
	   }
	    echo json_encode($arrayDetInv);
	   $con->Close();
 ?>
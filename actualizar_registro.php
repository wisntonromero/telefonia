<?php 
	include("bd/conexion.php");
	require_once('adodb5/adodb.inc.php');
	$id          = $_POST['padre'];
	$ubicacion   = $_POST['ubicacion'];
	$padre       = $_POST['regpadre'];
	$estado      = $_POST['estado'];

		$con = ADONewConnection('mysql');
		$con->PConnect($server,$username,$password,$database);
		$con->SetFetchMode(ADODB_FETCH_ASSOC);
		
		$query    = "UPDATE registros,padres 
					 SET rgo_ubicacion='$ubicacion',rgo_estado='$estado',rgo_cod_padre='$padre' 
					 WHERE rgo_id= '$id'";
		$rs       = $con->Execute($query);
    	$con->Close();
	
 ?>
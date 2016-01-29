<?php 
	include("bd/conexion.php");
	require_once('adodb5/adodb.inc.php');

	$regleta = $_POST['regleta'];
	$con = ADONewConnection('mysql');
	$con->PConnect($server,$username,$password,$database);

	$query    = "SELECT rgt_num_puertos FROM regletas WHERE rgt_id = $regleta";
	$rs = $con->Execute($query);
	$vec = array('cant_puertos'=>$rs->fields['rgt_num_puertos']);
	$rs=null;

	$query    = "SELECT pue_salida FROM puerto WHERE rg_salida = $regleta";
	$rs = $con->Execute($query);




	echo json_encode($vec);
 ?>
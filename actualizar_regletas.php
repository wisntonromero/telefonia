<?php 

include("bd/conexion.php");
	require_once('adodb5/adodb.inc.php');
	$id      = $_POST['padre'];
	$puertos = $_POST['puertos'];
	$padre   = $_POST['regpadre'];
	$estado  = $_POST['estado'];
	if($estado==1){
		$estado="Activo";
	}else{
		$estado="Inactivo";
	};
		$con = ADONewConnection('mysql');
		$con->PConnect($server,$username,$password,$database);
		$con->SetFetchMode(ADODB_FETCH_ASSOC);
		$query    = "UPDATE regletas SET rgt_num_puertos='$puertos',rgt_estado='$estado',id_registro='$padre' WHERE rgt_id= '$id'";
		$rs       = $con->Execute($query);
    	$con->Close();

?>
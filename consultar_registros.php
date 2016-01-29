<?php 
	include("bd/conexion.php");
	require_once('adodb5/adodb.inc.php');
	$id = $_POST['regpadre'];
	try{
		$con = ADONewConnection('mysql');
		$con->PConnect($server,$username,$password,$database);
		$con->SetFetchMode(ADODB_FETCH_ASSOC);
		$query    = "SELECT * FROM registros, padres WHERE rgo_id = '$id' and pad_id = rgo_cod_padre";
		$rs       = $con->Execute($query);
		if(!$rs->EOF){
		   	$reg = array('padre' => $rs->fields['pad_id'],'codigo' => $rs->fields['rgo_id'],'nombre' => $rs->fields['rgo_nombre'],'ubicacion' => $rs->fields['rgo_ubicacion'],'estado' => $rs->fields['rgo_estado']);
		   	$rs->MoveNext();
		   }
		   $con->Close();
		   echo json_encode($reg);
	}catch (Exception $e){
			echo $e;
	}
 ?>
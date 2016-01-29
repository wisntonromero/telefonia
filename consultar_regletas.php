<?php 
	include("bd/conexion.php");
	require_once('adodb5/adodb.inc.php');
	$id = $_POST['regleta'];
	try{
		$con = ADONewConnection('mysql');
		$con->PConnect($server,$username,$password,$database);
		$con->SetFetchMode(ADODB_FETCH_ASSOC);
		$query    = "SELECT rgo_id, rgt_id,rgt_nombre,rgt_num_puertos,rgt_estado FROM regletas,registros WHERE rgt_id = '$id' AND rgo_id = id_registro";
		$rs       = $con->Execute($query);
		if(!$rs->EOF){
		   	$reg = array('padre' => $rs->fields['rgo_id'],'codigo' => $rs->fields['rgt_id'],'nombre' => $rs->fields['rgt_nombre'],'puertos' => $rs->fields['rgt_num_puertos'],'estado' => $rs->fields['rgt_estado']);
		   	$rs->MoveNext();
		   }
		   $con->Close();
		   echo json_encode($reg);
	}catch (Exception $e){
			echo $e;
	}
 ?>
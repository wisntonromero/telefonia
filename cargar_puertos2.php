<?php 
	require_once('bd/conexion.php');
	require_once('adodb5/adodb.inc.php');
	$regleta = $_POST['regleta'];
	try 
	{
	   $con = ADONewConnection('mysql');
	   $con->debug=false;
	   $con->PConnect($server,$username,$password,$database);
	   $con->SetFetchMode(ADODB_FETCH_ASSOC);
	   $query = "SELECT rgt_num_puertos FROM regletas WHERE rgt_id = $regleta";
	   $rs=$con->Execute($query);
	   $regleta = $rs->fields['rgt_num_puertos'];
	   $con->Close();
	   echo json_encode($regleta);
	}catch (Exception $e) 
	{
		echo $e;
	}
?>
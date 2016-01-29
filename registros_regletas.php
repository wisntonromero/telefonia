<?php
	require_once('bd/conexion.php');
	require_once('adodb5/adodb.inc.php');
	try 
	{
	   $con = ADONewConnection('mysql');
	   $con->debug=false;
	   $con->PConnect($server,$username,$password,$database);
	   $con->SetFetchMode(ADODB_FETCH_ASSOC);
	   $query = "SELECT rgt_id, rgt_nombre,rgo_nombre FROM regletas,registros WHERE id_registro=rgo_id ORDER BY rgo_nombre ASC";
	   $rs=$con->Execute($query);
	   $i=0;
	   while(!$rs->EOF)
	   {
	   	$arrayDetInv[$i] =array('registro'=>$rs->fields['rgo_nombre'],'codigo'=>$rs->fields['rgt_id'],'regleta'=>$rs->fields['rgt_nombre']);
	   	$rs->MoveNext();
	   	$i++;
	   }
	   $con->Close();
	   echo json_encode($arrayDetInv);
	}catch (Exception $e) 
	{
		echo $e;
	}
?>
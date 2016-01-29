<?php
	require_once('bd/conexion.php');
	require_once('adodb5/adodb.inc.php');
	try 
	{
	   $con = ADONewConnection('mysql');
	   $con->debug=false;
	   $con->PConnect($server,$username,$password,$database);
	   $con->SetFetchMode(ADODB_FETCH_ASSOC);
	   $query = "SELECT rgo_id, rgo_nombre FROM registros order by rgo_nombre";
	   $rs=$con->Execute($query);
	   $i=0;
	   while(!$rs->EOF)
	   {
	   	$arrayDetInv[$i] = array('codigo'=>$rs->fields['rgo_id'],'registro'=>$rs->fields['rgo_nombre']);
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
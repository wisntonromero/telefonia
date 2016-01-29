<?php 
	require_once('bd/conexion.php');
	require_once('adodb5/adodb.inc.php');

	try 
	{
	   $con = ADONewConnection('mysql');
	   $con->debug=false;
	   $con->PConnect($server,$username,$password,$database);
	   $con->SetFetchMode(ADODB_FETCH_ASSOC);
	   $query = "SELECT ter_id,ter_nombre FROM tipos_terminal order by ter_nombre";
	   $rs=$con->Execute($query);
	   $i=0;
	   while(!$rs->EOF)
	   {
	   	$terminal[$i] =array('codigo'=>$rs->fields['ter_id'],'nombre'=>$rs->fields['ter_nombre']);
	   	$rs->MoveNext();
	   	$i++;
	   }
	   $con->Close();
	   echo json_encode($terminal);

	}catch (Exception $e) 
	{
		echo $e;
	}


 ?>
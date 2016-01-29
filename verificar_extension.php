<?php 
	include("bd/conexion.php");
	require_once('adodb5/adodb.inc.php');
	$ext  = $_POST['extension'];

		$con = ADONewConnection('mysql');
		$con->PConnect($server,$username,$password,$database);
		$con->SetFetchMode(ADODB_FETCH_ASSOC);
		$query    = "SELECT extension FROM info WHERE extension='$ext'";
		$rs       = $con->Execute($query);
		$i=0;
		if(!$rs->EOF){
	   		$vec = $rs->fields['extension'];
	   	}else{
	   		$vec = null;
	   	}
    	$con->Close();
		echo json_encode($vec);
 ?>
<?php 
	include("bd/conexion.php");
	require_once('adodb5/adodb.inc.php');
	$ext  = $_POST['extension'];

		$con = ADONewConnection('mysql');
		$con->PConnect($server,$username,$password,$database);
		$con->SetFetchMode(ADODB_FETCH_ASSOC);
		$query    = "SELECT pue_extension FROM puerto WHERE pue_extension='$ext' AND pue_salto='1'";
		$rs       = $con->Execute($query);
		$i=0;
		if(!$rs->EOF){
	   		$vec[0] =array('extension'=>$rs->fields['pue_extension']);
	   	}else{
	   		$vec[0] =array('extension'=>null);
	   	}
    	$con->Close();
		echo json_encode($vec);
 ?>
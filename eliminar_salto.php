<?php
	require_once('bd/conexion.php');
	require_once('adodb5/adodb.inc.php');
	$extension  = $_POST['extension'];
	$salto  = $_POST['salto'];

	$con = ADONewConnection('mysql');
    $con->debug=false;
    $con->PConnect($server,$username,$password,$database);
    $con->SetFetchMode(ADODB_FETCH_ASSOC);

	$query = "DELETE FROM puerto WHERE pue_extension=$extension AND pue_salto=$salto";
   	$rs=$con->Execute($query);


	echo"";

?>
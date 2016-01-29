<?php
	require_once('bd/conexion.php');
	require_once('adodb5/adodb.inc.php');
	$extension = $_POST['extension'];
	$saltos    = $_POST['salto'];

	$rg = $_POST['rg'];
	$rgs= $_POST['rgs'];
	$pt = $_POST['pt'];
	$pts= $_POST['pts'];

	$con = ADONewConnection('mysql');
	$con->debug=false;
	$con->PConnect($server,$username,$password,$database);
	$con->SetFetchMode(ADODB_FETCH_ASSOC);

	if($rg!='-1'&&$rgs!='-1'&&$pt!=''&&$pt!='0'&&$pts!=''&&$pts!='0'){
		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES($extension,$rg,$rgs,$pt,$pts,'1','1',$saltos)";
   		$rs=$con->Execute($query);
   		$mensaje = 1;
   		echo $mensaje;
   	}else{
   		$mensaje = 2;
		echo $mensaje;
   	};

?>
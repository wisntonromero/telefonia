 <?php 
 	include("bd/conexion.php");
 	require_once('adodb5/adodb.inc.php');

 	$regleta = $_POST['regleta'];
	$con = ADONewConnection('mysql');
 	$con->PConnect($server,$username,$password,$database);
	$con->SetFetchMode(ADODB_FETCH_ASSOC);

	$query = "SELECT COUNT(pue_salida) FROM puerto WHERE rg_salida = $regleta";
	$rs=$con->Execute($query);
	$contar = array('total'=>$rs->fields['COUNT(pue_salida)']);

	$query = "SELECT pue_salida FROM puerto WHERE rg_salida = $regleta";
	$rs=$con->Execute($query);
	$i = 0;
    while (!$rs->EOF) {
		$puertos[$i] = array('puerto'=> $rs->fields['pue_salida']);
		$rs->MoveNext();
		$i++;
	};
	$contar += array('puertos'=>$puertos);
	echo json_encode($contar);


?>
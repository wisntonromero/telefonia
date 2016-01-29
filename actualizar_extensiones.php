<?php  
require_once('bd/conexion.php');
require_once('adodb5/adodb.inc.php');
$extension  = $_POST['extension'];
$max        = $_POST['saltos'];

$rt1  = $_POST['rt1'];
$rt2  = $_POST['rt2'];
$rt3  = $_POST['rt3'];
$rt4  = $_POST['rt4'];
$rt5  = $_POST['rt5'];
$rt6  = $_POST['rt6'];
$rt7  = $_POST['rt7'];
$rt8  = $_POST['rt8'];
$rt9  = $_POST['rt9'];
$rt10 = $_POST['rt10'];

$rg_in1  = $_POST['rg_in1'];
$txtin1  = $_POST['txtin1'];
$es_in1  = $_POST['es_in1'];
$rg_out1 = $_POST['rg_out1'];
$txtout1 = $_POST['pt_out1'];
$es_out1 = $_POST['es_out1'];

$rg_in2  = $_POST['rg_in2'];
$txtin2  = $_POST['txtin2'];
$es_in2  = $_POST['es_in2'];
$rg_out2 = $_POST['rg_out2'];
$txtout2 = $_POST['pt_out2'];
$es_out2 = $_POST['es_out2'];

$rg_in3  = $_POST['rg_in3'];
$txtin3  = $_POST['txtin3'];
$es_in3  = $_POST['es_in3'];
$rg_out3 = $_POST['rg_out3'];
$txtout3 = $_POST['pt_out3'];
$es_out3 = $_POST['es_out3'];

$rg_in4  = $_POST['rg_in4'];
$txtin4  = $_POST['txtin4'];
$es_in4  = $_POST['es_in4'];
$rg_out4 = $_POST['rg_out4'];
$txtout4 = $_POST['pt_out4'];
$es_out4 = $_POST['es_out4'];

$rg_in5  = $_POST['rg_in5'];
$txtin5  = $_POST['txtin5'];
$es_in5  = $_POST['es_in5'];
$rg_out5 = $_POST['rg_out5'];
$txtout5 = $_POST['pt_out5'];
$es_out5 = $_POST['es_out5'];

$rg_in6  = $_POST['rg_in6'];
$txtin6  = $_POST['txtin6'];
$es_in6  = $_POST['es_in6'];
$rg_out6 = $_POST['rg_out6'];
$txtout6 = $_POST['pt_out6'];
$es_out6 = $_POST['es_out6'];

$rg_in7  = $_POST['rg_in7'];
$txtin7  = $_POST['txtin7'];
$es_in7  = $_POST['es_in7'];
$rg_out7 = $_POST['rg_out7'];
$txtout7 = $_POST['pt_out7'];
$es_out7 = $_POST['es_out7'];

$rg_in8  = $_POST['rg_in8'];
$txtin8  = $_POST['txtin8'];
$es_in8  = $_POST['es_in8'];
$rg_out8 = $_POST['rg_out8'];
$txtout8 = $_POST['pt_out8'];
$es_out8 = $_POST['es_out8'];

$rg_in9  = $_POST['rg_in9'];
$txtin9  = $_POST['txtin9'];
$es_in9  = $_POST['es_in9'];
$rg_out9 = $_POST['rg_out9'];
$txtout9 = $_POST['pt_out9'];
$es_out9 = $_POST['es_out9'];

$rg_in10  = $_POST['rg_in10'];
$txtin10  = $_POST['txtin10'];
$es_in10  = $_POST['es_in10'];
$rg_out10 = $_POST['rg_out10'];
$txtout10 = $_POST['pt_out10'];
$es_out10 = $_POST['es_out10'];

$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$dir_alveolo = $_POST['dir_alveolo'];
$placa_interfaz = $_POST['placa_interfaz'];
$dir_equipo = $_POST['dir_equipo'];
$tipo_terminal = $_POST['tipo_terminal'];
$activo = $_POST['activo'];
$cubiculo = $_POST['cubiculo'];
$ip = $_POST['ip'];
$mac = $_POST['mac'];
$centro_costo = $_POST['centro_costo'];





      $con = ADONewConnection('mysql');
	   $con->debug=false;
	   $con->PConnect($server,$username,$password,$database);
	   $con->SetFetchMode(ADODB_FETCH_ASSOC);
	   switch ($max) {
	   	case '1':
	   	if($txtin1!=0 && $txtin1!=''&& $txtout1!=0 && $txtout1!='' && $rg_in1!='-1' && $rg_out1!='-1'&&$rt1!='-1'){
	   		   $query = "UPDATE puerto SET rg_entrada='$rg_in1',rg_salida='$rg_out1',pue_entrada='$txtin1',pue_salida='$txtout1',pue_est_entrada='$es_in1',pue_est_salida='$es_out1' WHERE pue_extension = '$extension' AND pue_salto=1";
   	   		$rs=$con->Execute($query);
   	   		$mensaje=1;
	   	}else
	   	$mensaje = 2;
	   		break;

	   	case '2':
	   	if($txtin1!=0 && $txtin1!=''&& $txtout1!=0 && $txtout1!=''&&$txtin2!=0 && $txtin2!=''&& $txtout2!=0 && $txtout2!=''&& $rg_in2!='-1' && $rg_out2!='-1'&& $rg_in1!='-1' && $rg_out1!='-1'&&$rt1!='-1'&&$rt2!='-1'){
	   		   $query = "UPDATE puerto SET rg_entrada='$rg_in1',rg_salida='$rg_out1',pue_entrada='$txtin1',pue_salida='$txtout1',pue_est_entrada='$es_in1',pue_est_salida='$es_out1' WHERE pue_extension = '$extension' AND pue_salto=1";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in2',rg_salida='$rg_out2',pue_entrada='$txtin2',pue_salida='$txtout2',pue_est_entrada='$es_in2',pue_est_salida='$es_out2' WHERE pue_extension = '$extension' AND pue_salto=2";
   	   		$rs=$con->Execute($query);
   	   		$mensaje=1;

	   	}else
	   	$mensaje = 2;
	   		break;

	   	case '3':
	   	if($txtin1!='0' && $txtin1!=''&& $txtout1!='0' && $txtout1!=''&&$txtin2!=0 && $txtin2!=''&& $txtout2!=0 && $txtout2!=''&&$txtin3!=0 && $txtin3!=''&& $txtout3!=0 && $txtout3!=''&& $rg_in1!='-1' && $rg_out1!='-1'&& $rg_in2!='-1' && $rg_out2!='-1'&& $rg_in3!='-1' && $rg_out3!='-1'&& $rt1!='-1'&&$rt2!='-1'&&$rt3!='-1'){
	   		   $query = "UPDATE puerto SET rg_entrada='$rg_in1',rg_salida='$rg_out1',pue_entrada='$txtin1',pue_salida='$txtout1',pue_est_entrada='$es_in1',pue_est_salida='$es_out1' WHERE pue_extension = '$extension' AND pue_salto=1";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in2',rg_salida='$rg_out2',pue_entrada='$txtin2',pue_salida='$txtout2',pue_est_entrada='$es_in2',pue_est_salida='$es_out2'  WHERE pue_extension = '$extension' AND pue_salto=2";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in3',rg_salida='$rg_out3',pue_entrada='$txtin3',pue_salida='$txtout3',pue_est_entrada='$es_in3',pue_est_salida='$es_out3'  WHERE pue_extension = '$extension' AND pue_salto=3";
   	   		$rs=$con->Execute($query);
   	   		$mensaje=1;
	   	}else
	   	$mensaje = 2;
	   		break;

	   	case '4':
	   	if($txtin1!=0 && $txtin1!=''&&$txtin2!=0 && $txtin2!=''&&$txtin3!=0 && $txtin3!=''&&$txtin4!=0 && $txtin4!=''&& $rg_in1!='-1' && $rg_out1!='-1'&& $rg_in2!='-1' && $rg_out2!='-1'&& $rg_in3!='-1' && $rg_out3!='-1'&& $rg_in4!='-1' && $rg_out4!='-1'&&$rt1!='-1'&&$rt2!='-1'&&$rt3!='-1'&&$rt4!='-1'){
	   		   $query = "UPDATE puerto SET rg_entrada='$rg_in1',rg_salida='$rg_out1',pue_entrada='$txtin1',pue_salida='$txtout1',pue_est_entrada='$es_in1',pue_est_salida='$es_out1' WHERE pue_extension = '$extension' AND pue_salto=1";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in2',rg_salida='$rg_out2',pue_entrada='$txtin2',pue_salida='$txtout2',pue_est_entrada='$es_in2',pue_est_salida='$es_out2' WHERE pue_extension = '$extension' AND pue_salto=2";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in3',rg_salida='$rg_out3',pue_entrada='$txtin3',pue_salida='$txtout3',pue_est_entrada='$es_in3',pue_est_salida='$es_out3' WHERE pue_extension = '$extension' AND pue_salto=3";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in4',rg_salida='$rg_out4',pue_entrada='$txtin4',pue_salida='$txtout4',pue_est_entrada='$es_in4',pue_est_salida='$es_out4' WHERE pue_extension = '$extension' AND pue_salto=4";
   	   		$rs=$con->Execute($query);
   	   		$mensaje=1;
	   	}else
	   	$mensaje = 2;
	   		break;

	   	case '5':
	   	if($txtin1!=0 && $txtin1!=''&&$txtin2!=0 && $txtin2!=''&&$txtin3!=0 && $txtin3!=''&&$txtin4!=0 && $txtin4!=''&&$txtin5!=0 && $txtin5!=''&& $rg_in1!='-1' && $rg_out1!='-1'&& $rg_in2!='-1' && $rg_out2!='-1'&& $rg_in3!='-1' && $rg_out3!='-1'&& $rg_in4!='-1' && $rg_out4!='-1'&& $rg_in5!='-1' && $rg_out5!='-1'&&$rt1!='-1'&&$rt2!='-1'&&$rt3!='-1'&&$rt4!='-1'&&$rt5!='-1'){
	   		   $query = "UPDATE puerto SET rg_entrada='$rg_in1',rg_salida='$rg_out1',pue_entrada='$txtin1',pue_salida='$txtout1',pue_est_entrada='$es_in1',pue_est_salida='$es_out1' WHERE pue_extension = '$extension' AND pue_salto=1";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in2',rg_salida='$rg_out2',pue_entrada='$txtin2',pue_salida='$txtout2',pue_est_entrada='$es_in2',pue_est_salida='$es_out2' WHERE pue_extension = '$extension' AND pue_salto=2";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in3',rg_salida='$rg_out3',pue_entrada='$txtin3',pue_salida='$txtout3',pue_est_entrada='$es_in3',pue_est_salida='$es_out3' WHERE pue_extension = '$extension' AND pue_salto=3";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in4',rg_salida='$rg_out4',pue_entrada='$txtin4',pue_salida='$txtout4',pue_est_entrada='$es_in4',pue_est_salida='$es_out4' WHERE pue_extension = '$extension' AND pue_salto=4";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in5',rg_salida='$rg_out5',pue_entrada='$txtin5',pue_salida='$txtout5',pue_est_entrada='$es_in5',pue_est_salida='$es_out5' WHERE pue_extension = '$extension' AND pue_salto=5";
   	   		$rs=$con->Execute($query);
   	   		$mensaje=1;
	   	}else
	   	$mensaje = 2;
	   		break;

	   	case '6':
	   	if($txtin1!=0 && $txtin1!=''&&$txtin2!=0 && $txtin2!=''&&$txtin3!=0 && $txtin3!=''&&$txtin4!=0 && $txtin4!=''&&$txtin5!=0 && $txtin5!=''&&$txtin6!=0 && $txtin6!=''&& $rg_in1!='-1' && $rg_out1!='-1'&& $rg_in2!='-1' && $rg_out2!='-1'&& $rg_in3!='-1' && $rg_out3!='-1'&& $rg_in4!='-1' && $rg_out4!='-1'&& $rg_in5!='-1' && $rg_out5!='-1'&& $rg_in6!='-1' && $rg_out6!='-1'&&$rt1!='-1'&&$rt2!='-1'&&$rt3!='-1'&&$rt4!='-1'&&$rt5!='-1'&&$rt6!='-1'){
	   		   $query = "UPDATE puerto SET rg_entrada='$rg_in1',rg_salida='$rg_out1',pue_entrada='$txtin1',pue_salida='$txtout1',pue_est_entrada='$es_in1',pue_est_salida='$es_out1' WHERE pue_extension = '$extension' AND pue_salto=1";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in2',rg_salida='$rg_out2',pue_entrada='$txtin2',pue_salida='$txtout2',pue_est_entrada='$es_in2',pue_est_salida='$es_out2' WHERE pue_extension = '$extension' AND pue_salto=2";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in3',rg_salida='$rg_out3',pue_entrada='$txtin3',pue_salida='$txtout3',pue_est_entrada='$es_in3',pue_est_salida='$es_out3' WHERE pue_extension = '$extension' AND pue_salto=3";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in4',rg_salida='$rg_out4',pue_entrada='$txtin4',pue_salida='$txtout4',pue_est_entrada='$es_in4',pue_est_salida='$es_out4' WHERE pue_extension = '$extension' AND pue_salto=4";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in5',rg_salida='$rg_out5',pue_entrada='$txtin5',pue_salida='$txtout5',pue_est_entrada='$es_in5',pue_est_salida='$es_out5' WHERE pue_extension = '$extension' AND pue_salto=5";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in6',rg_salida='$rg_out6',pue_entrada='$txtin6',pue_salida='$txtout6',pue_est_entrada='$es_in6',pue_est_salida='$es_out6' WHERE pue_extension = '$extension' AND pue_salto=6";
   	   		$rs=$con->Execute($query);
   	   		$mensaje=1;
	   	}else
	   	$mensaje = 2;
	   		break;

	   	case '7':
	   	if($txtin1!=0 && $txtin1!=''&&$txtin2!=0 && $txtin2!=''&&$txtin3!=0 && $txtin3!=''&&$txtin4!=0 && $txtin4!=''&&$txtin5!=0 && $txtin5!=''&&$txtin6!=0 && $txtin6!=''&&$txtin7!=0 && $txtin7!=''&& $rg_in1!='-1' && $rg_out1!='-1'&& $rg_in2!='-1' && $rg_out2!='-1'&& $rg_in3!='-1' && $rg_out3!='-1'&& $rg_in4!='-1' && $rg_out4!='-1'&& $rg_in5!='-1' && $rg_out5!='-1'&& $rg_in6!='-1' && $rg_out6!='-1'&& $rg_in7!='-1' && $rg_out6!='-1'&& $rg_in7!='-1' && $rg_out7!='-1'&&$rt1!='-1'&&$rt2!='-1'&&$rt3!='-1'&&$rt4!='-1'&&$rt5!='-1'&&$rt6!='-1'&&$rt7!='-1'){
	   		   $query = "UPDATE puerto SET rg_entrada='$rg_in1',rg_salida='$rg_out1',pue_entrada='$txtin1',pue_salida='$txtout1',pue_est_entrada='$es_in1',pue_est_salida='$es_out1' WHERE pue_extension = '$extension' AND pue_salto=1";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in2',rg_salida='$rg_out2',pue_entrada='$txtin2',pue_salida='$txtout2',pue_est_entrada='$es_in2',pue_est_salida='$es_out2' WHERE pue_extension = '$extension' AND pue_salto=2";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in3',rg_salida='$rg_out3',pue_entrada='$txtin3',pue_salida='$txtout3',pue_est_entrada='$es_in3',pue_est_salida='$es_out3' WHERE pue_extension = '$extension' AND pue_salto=3";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in4',rg_salida='$rg_out4',pue_entrada='$txtin4',pue_salida='$txtout4',pue_est_entrada='$es_in4',pue_est_salida='$es_out4' WHERE pue_extension = '$extension' AND pue_salto=4";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in5',rg_salida='$rg_out5',pue_entrada='$txtin5',pue_salida='$txtout5',pue_est_entrada='$es_in5',pue_est_salida='$es_out5' WHERE pue_extension = '$extension' AND pue_salto=5";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in6',rg_salida='$rg_out6',pue_entrada='$txtin6',pue_salida='$txtout6',pue_est_entrada='$es_in6',pue_est_salida='$es_out6' WHERE pue_extension = '$extension' AND pue_salto=6";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in7',rg_salida='$rg_out7',pue_entrada='$txtin7',pue_salida='$txtout7',pue_est_entrada='$es_in7',pue_est_salida='$es_out7' WHERE pue_extension = '$extension' AND pue_salto=7";
   	   		$rs=$con->Execute($query);
   	   		$mensaje=1;
	   	}else
	   	$mensaje = 2;
	   		break;

	   	case '8':
	   	if($txtin1!=0 && $txtin1!=''&&$txtin2!=0 && $txtin2!=''&&$txtin3!=0 && $txtin3!=''&&$txtin4!=0 && $txtin4!=''&&$txtin5!=0 && $txtin5!=''&&$txtin6!=0 && $txtin6!=''&&$txtin7!=0 && $txtin7!=''&&$txtin8!=0 && $txtin8!=''&& $rg_in1!='-1' && $rg_out1!='-1'&& $rg_in2!='-1' && $rg_out2!='-1'&& $rg_in3!='-1' && $rg_out3!='-1'&& $rg_in4!='-1' && $rg_out4!='-1'&& $rg_in5!='-1' && $rg_out5!='-1'&& $rg_in6!='-1' && $rg_out6!='-1'&& $rg_in7!='-1' && $rg_out7!='-1'&& $rg_in8!='-1' && $rg_out8!='-1'&&$rt1!='-1'&&$rt2!='-1'&&$rt3!='-1'&&$rt1!='-1'&&$rt2!='-1'&&$rt3!='-1'&&$rt4!='-1'&&$rt5!='-1'&&$rt6!='-1'&&$rt7!='-1'&&$rt8!='-1'){
	   		   $query = "UPDATE puerto SET rg_entrada='$rg_in1',rg_salida='$rg_out1',pue_entrada='$txtin1',pue_salida='$pt_out1',pue_est_entrada='$es_in1',pue_est_salida='$es_out1' WHERE pue_extension = '$extension' AND pue_salto=1";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in2',rg_salida='$rg_out2',pue_entrada='$txtin2',pue_salida='$pt_out2',pue_est_entrada='$es_in2',pue_est_salida='$es_out2' WHERE pue_extension = '$extension' AND pue_salto=2";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in3',rg_salida='$rg_out3',pue_entrada='$txtin3',pue_salida='$pt_out3',pue_est_entrada='$es_in3',pue_est_salida='$es_out3' WHERE pue_extension = '$extension' AND pue_salto=3";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in4',rg_salida='$rg_out4',pue_entrada='$txtin4',pue_salida='$pt_out4',pue_est_entrada='$es_in4',pue_est_salida='$es_out4' WHERE pue_extension = '$extension' AND pue_salto=4";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in5',rg_salida='$rg_out5',pue_entrada='$txtin5',pue_salida='$pt_out5',pue_est_entrada='$es_in5',pue_est_salida='$es_out5' WHERE pue_extension = '$extension' AND pue_salto=5";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in6',rg_salida='$rg_out6',pue_entrada='$txtin6',pue_salida='$pt_out6',pue_est_entrada='$es_in6',pue_est_salida='$es_out6' WHERE pue_extension = '$extension' AND pue_salto=6";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in7',rg_salida='$rg_out7',pue_entrada='$txtin7',pue_salida='$pt_out7',pue_est_entrada='$es_in7',pue_est_salida='$es_out7' WHERE pue_extension = '$extension' AND pue_salto=7";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in8',rg_salida='$rg_out8',pue_entrada='$txtin8',pue_salida='$pt_out8',pue_est_entrada='$es_in8',pue_est_salida='$es_out8' WHERE pue_extension = '$extension' AND pue_salto=8";
   	   		$rs=$con->Execute($query);
   	   		$mensaje=1;
	   	}else
	   	$mensaje = 2;
	   		break;

	   	case '9':
	   	if($txtin1!=0 && $txtin1!=''&&$txtin2!=0 && $txtin2!=''&&$txtin3!=0 && $txtin3!=''&&$txtin4!=0 && $txtin4!=''&&$txtin5!=0 && $txtin5!=''&&$txtin6!=0 && $txtin6!=''&&$txtin7!=0 && $txtin7!=''&&$txtin8!=0 && $txtin8!=''&&$txtin9!=0 && $txtin9!=''&& $rg_in1!='-1' && $rg_out1!='-1'&& $rg_in2!='-1' && $rg_out2!='-1'&& $rg_in3!='-1' && $rg_out3!='-1'&& $rg_in4!='-1' && $rg_out4!='-1'&& $rg_in5!='-1' && $rg_out5!='-1'&& $rg_in6!='-1' && $rg_out6!='-1'&& $rg_in7!='-1' && $rg_out7!='-1'&& $rg_in8!='-1' && $rg_out8!='-1'&& $rg_in9!='-1' && $rg_out9!='-1'&&$rt1!='-1'&&$rt2!='-1'&&$rt3!='-1'&&$rt4!='-1'&&$rt5!='-1'&&$rt6!='-1'&&$rt7!='-1'&&$rt8!='-1'&&$rt9!='-1'){
	   		   $query = "UPDATE puerto SET rg_entrada='$rg_in1',rg_salida='$rg_out1',pue_entrada='$txtin1',pue_salida='$txtout',pue_est_entrada='$es_in1',pue_est_salida='$es_out1' WHERE pue_extension = '$extension' AND pue_salto=1";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in2',rg_salida='$rg_out2',pue_entrada='$txtin2',pue_salida='$txtout2',pue_est_entrada='$es_in2',pue_est_salida='$es_out2' WHERE pue_extension = '$extension' AND pue_salto=2";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in3',rg_salida='$rg_out3',pue_entrada='$txtin3',pue_salida='$txtout3',pue_est_entrada='$es_in3',pue_est_salida='$es_out3' WHERE pue_extension = '$extension' AND pue_salto=3";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in4',rg_salida='$rg_out4',pue_entrada='$txtin4',pue_salida='$txtout4',pue_est_entrada='$es_in4',pue_est_salida='$es_out4' WHERE pue_extension = '$extension' AND pue_salto=4";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in5',rg_salida='$rg_out5',pue_entrada='$txtin5',pue_salida='$txtout5',pue_est_entrada='$es_in5',pue_est_salida='$es_out5' WHERE pue_extension = '$extension' AND pue_salto=5";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in6',rg_salida='$rg_out6',pue_entrada='$txtin6',pue_salida='$txtout6',pue_est_entrada='$es_in6',pue_est_salida='$es_out6' WHERE pue_extension = '$extension' AND pue_salto=6";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in7',rg_salida='$rg_out7',pue_entrada='$txtin7',pue_salida='$txtout7',pue_est_entrada='$es_in7',pue_est_salida='$es_out7' WHERE pue_extension = '$extension' AND pue_salto=7";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in8',rg_salida='$rg_out8',pue_entrada='$txtin8',pue_salida='$txtout8',pue_est_entrada='$es_in8',pue_est_salida='$es_out8' WHERE pue_extension = '$extension' AND pue_salto=8";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in9',rg_salida='$rg_out9',pue_entrada='$txtin9',pue_salida='$txtout9',pue_est_entrada='$es_in9',pue_est_salida='$es_out9' WHERE pue_extension = '$extension' AND pue_salto=9";
   	   		$rs=$con->Execute($query);
   	   		$mensaje=1;
	   	}else
	   	$mensaje = 2;
	   		break;

	   	case '10':
	   	if($txtin1!=0 && $txtin1!=''&&$txtin2!=0 && $txtin2!=''&&$txtin3!=0 && $txtin3!=''&&$txtin4!=0 && $txtin4!=''&&$txtin5!=0 && $txtin5!=''&&$txtin6!=0 && $txtin6!=''&&$txtin7!=0 && $txtin7!=''&&$txtin8!=0 && $txtin8!=''&&$txtin9!=0 && $txtin9!=''&&$txtin10!=0 && $txtin10!=''&& $rg_in1!='-1' && $rg_out1!='-1'&& $rg_in2!='-1' && $rg_out2!='-1'&& $rg_in3!='-1' && $rg_out3!='-1'&& $rg_in4!='-1' && $rg_out4!='-1'&& $rg_in5!='-1' && $rg_out5!='-1'&& $rg_in6!='-1' && $rg_out6!='-1'&& $rg_in7!='-1' && $rg_out7!='-1'&& $rg_in8!='-1' && $rg_out8!='-1'&& $rg_in9!='-1' && $rg_out9!='-1'&& $rg_in10!='-1' && $rg_out10!='-1'&&$rt1!='-1'&&$rt2!='-1'&&$rt3!='-1'&&$rt1!='-1'&&$rt2!='-1'&&$rt3!='-1'&&$rt4!='-1'&&$rt5!='-1'&&$rt6!='-1'&&$rt7!='-1'&&$rt8!='-1'&&$rt9!='-1'&&$rt10!='-1'){
	   		   $query = "UPDATE puerto SET rg_entrada='$rg_in1',rg_salida='$rg_out1',pue_entrada='$txtin1',pue_salida='$txtout1',pue_est_entrada='$es_in1',pue_est_salida='$es_out1' WHERE pue_extension = '$extension' AND pue_salto=1";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in2',rg_salida='$rg_out2',pue_entrada='$txtin2',pue_salida='$txtout2',pue_est_entrada='$es_in2',pue_est_salida='$es_out2' WHERE pue_extension = '$extension' AND pue_salto=2";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in3',rg_salida='$rg_out3',pue_entrada='$txtin3',pue_salida='$txtout3',pue_est_entrada='$es_in3',pue_est_salida='$es_out3' WHERE pue_extension = '$extension' AND pue_salto=3";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in4',rg_salida='$rg_out4',pue_entrada='$txtin4',pue_salida='$txtout4',pue_est_entrada='$es_in4',pue_est_salida='$es_out4' WHERE pue_extension = '$extension' AND pue_salto=4";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in5',rg_salida='$rg_out5',pue_entrada='$txtin5',pue_salida='$txtout5',pue_est_entrada='$es_in5',pue_est_salida='$es_out5' WHERE pue_extension = '$extension' AND pue_salto=5";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in6',rg_salida='$rg_out6',pue_entrada='$txtin6',pue_salida='$txtout6',pue_est_entrada='$es_in6',pue_est_salida='$es_out6' WHERE pue_extension = '$extension' AND pue_salto=6";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in7',rg_salida='$rg_out7',pue_entrada='$txtin7',pue_salida='$txtout7',pue_est_entrada='$es_in7',pue_est_salida='$es_out7' WHERE pue_extension = '$extension' AND pue_salto=7";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in8',rg_salida='$rg_out8',pue_entrada='$txtin8',pue_salida='$txtout8',pue_est_entrada='$es_in8',pue_est_salida='$es_out8' WHERE pue_extension = '$extension' AND pue_salto=8";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in9',rg_salida='$rg_out9',pue_entrada='$txtin9',pue_salida='$txtout9',pue_est_entrada='$es_in9',pue_est_salida='$es_out9' WHERE pue_extension = '$extension' AND pue_salto=9";
   	   		$rs=$con->Execute($query);
   	   		$query = "UPDATE puerto SET rg_entrada='$rg_in10',rg_salida='$rg_out10',pue_entrada='$txtin10',pue_salida='$txtout10',pue_est_entrada='$es_in10',pue_est_salida='$es_out10' WHERE pue_extension = '$extension' AND pue_salto=10";
   	   		$rs=$con->Execute($query);
   	   		$mensaje=1;
	   	}else
	   	$mensaje = 2;
	   		break;
	   	
	   	default:
	   		$mensaje = 0;
	   		break;
	   }
      $rs=null;
      if ($mensaje==1){
         $query = "UPDATE info 
                   SET apellido='$apellido',nombre='$nombre',alveolo='$dir_alveolo',placa_interfaz='$placa_interfaz',direccion_equipo='$dir_equipo',tipo_terminal='$tipo_terminal',activo='$activo',cubiculo='$cubiculo',centro_de_costos='$centro_costo',direccion_ip='$ip',mac='$mac'
                   WHERE extension = '$extension'";
         $rs=$con->Execute($query);
      };
	   
echo $mensaje;




?>
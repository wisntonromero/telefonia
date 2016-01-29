<<<<<<< HEAD
<?php
	require_once('bd/conexion.php');
	require_once('adodb5/adodb.inc.php');
	$saltos = $_POST['saltos'];
	$ext    = $_POST['ext'];
	$rt1    = $_POST['rt1'];
	$rt2    = $_POST['rt2'];
	$rt3    = $_POST['rt3'];
	$rt4    = $_POST['rt4'];
	$rt5    = $_POST['rt5'];
	$rt6    = $_POST['rt6'];
	$rt7    = $_POST['rt7'];
	$rt8    = $_POST['rt8'];
	$rt9    = $_POST['rt9'];
	$rt10   = $_POST['rt10'];

	$rg1    = $_POST['rg1'];
	$rg2    = $_POST['rg2'];
	$rg3    = $_POST['rg3'];
	$rg4    = $_POST['rg4'];
	$rg5    = $_POST['rg5'];
	$rg6    = $_POST['rg6'];
	$rg7    = $_POST['rg7'];
	$rg8    = $_POST['rg8'];
	$rg9    = $_POST['rg9'];
	$rg10   = $_POST['rg10'];

	$rgs1   = $_POST['rg11'];
	$rgs2   = $_POST['rg22'];
	$rgs3   = $_POST['rg33'];
	$rgs4   = $_POST['rg44'];
	$rgs5   = $_POST['rg55'];
	$rgs6   = $_POST['rg66'];
	$rgs7   = $_POST['rg77'];
	$rgs8   = $_POST['rg88'];
	$rgs9   = $_POST['rg99'];
	$rgs10  = $_POST['rg100'];

	$pt1    = $_POST['pt1'];
	$pt2    = $_POST['pt2'];
	$pt3    = $_POST['pt3'];
	$pt4    = $_POST['pt4'];
	$pt5    = $_POST['pt5'];
	$pt6    = $_POST['pt6'];
	$pt7    = $_POST['pt7'];
	$pt8    = $_POST['pt8'];
	$pt9    = $_POST['pt9'];
	$pt10   = $_POST['pt10'];

	$pts1   = $_POST['pt11'];
	$pts2   = $_POST['pt22'];
	$pts3   = $_POST['pt33'];
	$pts4   = $_POST['pt44'];
	$pts5   = $_POST['pt55'];
	$pts6   = $_POST['pt66'];
	$pts7   = $_POST['pt77'];
	$pts8   = $_POST['pt88'];
	$pts9   = $_POST['pt99'];
	$pts10  = $_POST['pt100'];

	$ape_dir       = utf8_encode($_POST['ape_dir']);
	$nom_dir       = utf8_encode($_POST['nom_dir']);
	$dir_alveolo   = $_POST['dir_alveolo'];
	$dir_placa     = $_POST['dir_placa'];
	$dir_equipo    = utf8_encode($_POST['dir_equipo']);
	$tipo_terminal = $_POST['tipo_terminal'];
	$activo        = $_POST['activo'];
	$cubiculo      = utf8_encode($_POST['cubiculo']);
	$ip            = $_POST['ip'];
	$centro_costo  = utf8_encode($_POST['centro_costo']);
	$mac           = $_POST['mac'];
	$mensaje;

	

	try 
	{
	   $con = ADONewConnection('mysql');
	   $con->debug=false;
	   $con->PConnect($server,$username,$password,$database);
	   $con->SetFetchMode(ADODB_FETCH_ASSOC);
	   switch ($saltos) {
	   	case '1':
		    if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$pt1!='0'&&$pts1!=''&&$pts1!='0'){
	   		 	if($ape_dir!=''&&$nom_dir!=''&&$dir_alveolo!=''&&$tipo_terminal!='-1'&&$dir_alveolo!=''&&$dir_placa!=''){
			   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
	   	   			$rs=$con->Execute($query);
		   	   		$mensaje = 1;
		   	   		echo $mensaje;
		   	   	}else{
		   	   		$mensaje = 2;
		   			echo $mensaje;
		   	   	}
		   	}else{
		   		$mensaje = 2;
		   		echo $mensaje;
		   	}
	   		break;
	   	case '2':
	   		 if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$pt1!='0'&&$rt2!='-1'&&$rg2!=''&&$rg2!='-1'&&$pt2!=''&&$pts1!=''&&$pts1!='0'&&$pts2!=''&&$pts2!='0'){
	   		 /*	if($ape_dir!=''&&$ape_dir!=0&&$nom_dir!=''&&$nom_dir!=0&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>0&&$dir_placa!=''&&$dir_placa!=0){ */
	   		 	if($ape_dir!=''&&$nom_dir!=''&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>=0&&$dir_placa!=''&&$dir_placa>=0){
			   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
		   	   		$rs=$con->Execute($query);
		   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg2,$rgs2,$pt2,$pts2,'1','1','2')";
		   	   		$rs=$con->Execute($query);
			   	   		$mensaje = 1;
	   	   			echo $mensaje;
   	   			}else{
	   	   			$mensaje = 2;
	   				echo $mensaje;
	   	   	}
   	   		}else{
		   		$mensaje = 2;
		   		echo $mensaje;
	   		}
	   		break;
	   	case '3':
	   	if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$rt2!='-1'&&$rg2!='null'&&$rg2!='-1'&&$pt2!=''&&$rt3!='-1'&&$rg3!='null'&&$rg3!='-1'&&$pt3!=''&&$pts1!=''&&$pts1!='0'&&$pts2!=''&&$pts2!='0'&&$pts3!=''&&$pts3!='0'){
	   		/*if($ape_dir!=''&&$ape_dir!=0&&$nom_dir!=''&&$nom_dir!=0&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>0&&$dir_placa!=''&&$dir_placa!=0){*/ 
   			if($ape_dir!=''&&$nom_dir!=''&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>=0&&$dir_placa!=''&&$dir_placa>=0){
		   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg2,$rgs2,$pt2,$pts2,'1','1','2')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg3,$rgs3,$pt3,$pts3,'1','1','3')";
	   	   		$rs=$con->Execute($query);
	   	   		$mensaje = 1;
	   	   		echo $mensaje;
	   	   	}else{
	   	   		$mensaje = 2;
		   		echo $mensaje;
	   	   	}
	   	}else{
	   		$mensaje = 2;
	   		echo $mensaje;
	   	}
	   		break;
	   	case '4':
	   	if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$rt2!='-1'&&$rg2!='null'&&$rg2!='-1'&&$pt2!=''&&$rt3!='-1'&&$rg3!='null'&&$rg3!='-1'&&$pt3!=''&&$rt4!='-1'&&$rg4!='null'&&$rg4!='-1'&&$pt4!=''&&$pts1!=''&&$pts1!='0'&&$pts2!=''&&$pts2!='0'&&$pts3!=''&&$pts3!='0'&&$pts4!=''&&$pts4!='0'){
	   		/*if($ape_dir!=''&&$ape_dir!=0&&$nom_dir!=''&&$nom_dir!=0&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>0&&$dir_placa!=''&&$dir_placa!=0){ */
	   		if($ape_dir!=''&&$nom_dir!=''&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>=0&&$dir_placa!=''&&$dir_placa>=0){
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg2,$rgs2,$pt2,$pts2,'1','1','2')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg3,$rgs3,$pt3,$pts3,'1','1','3')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg4,$rgs4,$pt4,$pts4,'1','1','4')";
	   	   		$rs=$con->Execute($query);
	   	   		$mensaje = 1;
	   	   		echo $mensaje;
	   	   	}else{
	   	   		$mensaje = 2;
		   		echo $mensaje;
	   	   	}
	   	}else{
	   		$mensaje = 2;
	   		echo $mensaje;
	   	}
	   		break;
	   	case '5':
	   	if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$rt2!='-1'&&$rg2!='null'&&$rg2!='-1'&&$pt2!=''&&$rt3!='-1'&&$rg3!='null'&&$rg3!='-1'&&$pt3!=''&&$rt4!='-1'&&$rg4!='null'&&$rg4!='-1'&&$pt4!=''&&$rt5!='-1'&&$rg5!='null'&&$rg5!='-1'&&$pt5!=''&&$pts1!=''&&$pts1!='0'&&$pts2!=''&&$pts2!='0'&&$pts3!=''&&$pts3!='0'&&$pts4!=''&&$pts4!='0'&&$pts5!=''&&$pts5!='0'){
	   		/*if($ape_dir!=''&&$ape_dir!=0&&$nom_dir!=''&&$nom_dir!=0&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>0&&$dir_placa!=''&&$dir_placa!=0){*/
	   		if($ape_dir!=''&&$nom_dir!=''&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>=0&&$dir_placa!=''&&$dir_placa>=0){
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg2,$rgs2,$pt2,$pts2,'1','1','2')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg3,$rgs3,$pt3,$pts3,'1','1','3')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg4,$rgs4,$pt4,$pts4,'1','1','4')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg5,$rgs5,$pt5,$pts5,'1','1','5')";
	   	   		$rs=$con->Execute($query);
	   	   		$mensaje = 1;
	   	   		echo $mensaje;
	   	   	}else{
	   	   		$mensaje = 2;
	   		echo $mensaje;
	   	   	}
	   	}else{
	   		$mensaje = 2;
	   		echo $mensaje;
	   	}
	   	break;
	   	case '6':
	   	if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$rt2!='-1'&&$rg2!='null'&&$rg2!='-1'&&$pt2!=''&&$rt3!='-1'&&$rg3!='null'&&$rg3!='-1'&&$pt3!=''&&$rt4!='-1'&&$rg4!='null'&&$rg4!='-1'&&$pt4!=''&&$rt5!='-1'&&$rg5!='null'&&$rg5!='-1'&&$pt5!=''&&$pts1!=''&&$pts1!='0'&&$pts2!=''&&$pts2!='0'&&$pts3!=''&&$pts3!='0'&&$pts4!=''&&$pts4!='0'&&$pts5!=''&&$pts5!='0'&&$rt6!='-1'&&$rg6!='null'&&$rg6!='-1'&&$pt6!=''&&$pts6!=''&&$pts6!='0'){
	   		/*if($ape_dir!=''&&$ape_dir!=0&&$nom_dir!=''&&$nom_dir!=0&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>0&&$dir_placa!=''&&$dir_placa!=0){*/
	   		if($ape_dir!=''&&$nom_dir!=''&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>=0&&$dir_placa!=''&&$dir_placa>=0){
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg2,$rgs2,$pt2,$pts2,'1','1','2')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg3,$rgs3,$pt3,$pts3,'1','1','3')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg4,$rgs4,$pt4,$pts4,'1','1','4')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg5,$rgs5,$pt5,$pts5,'1','1','5')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg6,$rgs6,$pt6,$pts6,'1','1','6')";
	   	   		$rs=$con->Execute($query);
	   	   		$mensaje = 1;
	   	   		echo $mensaje;
	   	   	}else{
	   	   		$mensaje = 2;
	   			echo $mensaje;
	   	   	}
	   	}else{
	   		$mensaje = 2;
	   		echo $mensaje;
	   	}
	   	break;
	   	case '7':
	   	if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$rt2!='-1'&&$rg2!='null'&&$rg2!='-1'&&$pt2!=''&&$rt3!='-1'&&$rg3!='null'&&$rg3!='-1'&&$pt3!=''&&$rt4!='-1'&&$rg4!='null'&&$rg4!='-1'&&$pt4!=''&&$rt5!='-1'&&$rg5!='null'&&$rg5!='-1'&&$pt5!=''&&$pts1!=''&&$pts1!='0'&&$pts2!=''&&$pts2!='0'&&$pts3!=''&&$pts3!='0'&&$pts4!=''&&$pts4!='0'&&$pts5!=''&&$pts5!='0'&&$rt7!='-1'&&$rg7!='null'&&$rg7!='-1'&&$pt7!=''&&$pts7!=''&&$pts7!='0'){
	   		/*if($ape_dir!=''&&$ape_dir!=0&&$nom_dir!=''&&$nom_dir!=0&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>0&&$dir_placa!=''&&$dir_placa!=0){*/
	   		if($ape_dir!=''&&$nom_dir!=''&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>=0&&$dir_placa!=''&&$dir_placa>=0){
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg2,$rgs2,$pt2,$pts2,'1','1','2')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg3,$rgs3,$pt3,$pts3,'1','1','3')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg4,$rgs4,$pt4,$pts4,'1','1','4')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg5,$rgs5,$pt5,$pts5,'1','1','5')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg6,$rgs6,$pt6,$pts6,'1','1','6')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg7,$rgs7,$pt7,$pts7,'1','1','7')";
	   	   		$rs=$con->Execute($query);
	   	   		$mensaje = 1;
	   	   		echo $mensaje;
	   	   	}else{
	   	   		$mensaje = 2;
	   			echo $mensaje;
	   	   	}
	   	}else{
	   		$mensaje = 2;
	   		echo $mensaje;
	   	}
	   	break;
	   	case '8':
	   	if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$rt2!='-1'&&$rg2!='null'&&$rg2!='-1'&&$pt2!=''&&$rt3!='-1'&&$rg3!='null'&&$rg3!='-1'&&$pt3!=''&&$rt4!='-1'&&$rg4!='null'&&$rg4!='-1'&&$pt4!=''&&$rt5!='-1'&&$rg5!='null'&&$rg5!='-1'&&$pt5!=''&&$pts1!=''&&$pts1!='0'&&$pts2!=''&&$pts2!='0'&&$pts3!=''&&$pts3!='0'&&$pts4!=''&&$pts4!='0'&&$pts5!=''&&$pts5!='0'&&$rt6!='-1'&&$rg6!='null'&&$rg6!='-1'&&$pt6!=''&&$pts6!=''&&$pts6!='0'&&$rt7!='-1'&&$rg7!='null'&&$rg7!='-1'&&$pt7!=''&&$pts7!=''&&$pts7!='0'&&$rt8!='-1'&&$rg8!='null'&&$rg8!='-1'&&$pt8!=''&&$pts8!=''&&$pts8!='0'){
	   		/*if($ape_dir!=''&&$ape_dir!=0&&$nom_dir!=''&&$nom_dir!=0&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>0&&$dir_placa!=''&&$dir_placa!=0){*/
	   		if($ape_dir!=''&&$nom_dir!=''&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>=0&&$dir_placa!=''&&$dir_placa>=0){
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg2,$rgs2,$pt2,$pts2,'1','1','2')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg3,$rgs3,$pt3,$pts3,'1','1','3')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg4,$rgs4,$pt4,$pts4,'1','1','4')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg5,$rgs5,$pt5,$pts5,'1','1','5')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg6,$rgs6,$pt6,$pts6,'1','1','6')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg7,$rgs7,$pt7,$pts7,'1','1','7')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg8,$rgs8,$pt8,$pts8,'1','1','8')";
	   	   		$rs=$con->Execute($query);
	   	   		$mensaje = 1;
	   	   		echo $mensaje;
	   	   	}else{
	   	   		$mensaje = 2;
	   			echo $mensaje;
	   	   	}
	   	}else{
	   		$mensaje = 2;
	   		echo $mensaje;
	   	}
	   	break;
	   	case '9':
	   	if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$rt2!='-1'&&$rg2!='null'&&$rg2!='-1'&&$pt2!=''&&$rt3!='-1'&&$rg3!='null'&&$rg3!='-1'&&$pt3!=''&&$rt4!='-1'&&$rg4!='null'&&$rg4!='-1'&&$pt4!=''&&$rt5!='-1'&&$rg5!='null'&&$rg5!='-1'&&$pt5!=''&&$pts1!=''&&$pts1!='0'&&$pts2!=''&&$pts2!='0'&&$pts3!=''&&$pts3!='0'&&$pts4!=''&&$pts4!='0'&&$pts5!=''&&$pts5!='0'&&$rt6!='-1'&&$rg6!='null'&&$rg6!='-1'&&$pt6!=''&&$pts6!=''&&$pts6!='0'&&$rt7!='-1'&&$rg7!='null'&&$rg7!='-1'&&$pt7!=''&&$pts7!=''&&$pts7!='0'&&$rt8!='-1'&&$rg8!='null'&&$rg8!='-1'&&$pt8!=''&&$pts8!=''&&$pts8!='0'&&$rt9!='-1'&&$rg9!='null'&&$rg9!='-1'&&$pt9!=''&&$pts9!=''&&$pts9!='0'){
	   		/*if($ape_dir!=''&&$ape_dir!=0&&$nom_dir!=''&&$nom_dir!=0&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>0&&$dir_placa!=''&&$dir_placa!=0){*/
	   		if($ape_dir!=''&&$nom_dir!=''&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>=0&&$dir_placa!=''&&$dir_placa>=0){
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg2,$rgs2,$pt2,$pts2,'1','1','2')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg3,$rgs3,$pt3,$pts3,'1','1','3')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg4,$rgs4,$pt4,$pts4,'1','1','4')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg5,$rgs5,$pt5,$pts5,'1','1','5')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg6,$rgs6,$pt6,$pts6,'1','1','6')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg7,$rgs7,$pt7,$pts7,'1','1','7')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg8,$rgs8,$pt8,$pts8,'1','1','8')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg9,$rgs9,$pt9,$pts9,'1','1','9')";
	   	   		$rs=$con->Execute($query);
	   	   		$mensaje = 1;
	   	   		echo $mensaje;
	   	   	}else{
	   	   		$mensaje = 1;
	   	   		echo $mensaje;
	   	   	}
	   	}else{
	   		$mensaje = 2;
	   		echo $mensaje;
	   	}
	   	break;
	   	case '10':
	   	if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$rt2!='-1'&&$rg2!='null'&&$rg2!='-1'&&$pt2!=''&&$rt3!='-1'&&$rg3!='null'&&$rg3!='-1'&&$pt3!=''&&$rt4!='-1'&&$rg4!='null'&&$rg4!='-1'&&$pt4!=''&&$rt5!='-1'&&$rg5!='null'&&$rg5!='-1'&&$pt5!=''&&$pts1!=''&&$pts1!='0'&&$pts2!=''&&$pts2!='0'&&$pts3!=''&&$pts3!='0'&&$pts4!=''&&$pts4!='0'&&$pts5!=''&&$pts5!='0'&&$rt6!='-1'&&$rg6!='null'&&$rg6!='-1'&&$pt6!=''&&$pts6!=''&&$pts6!='0'&&$rt7!='-1'&&$rg7!='null'&&$rg7!='-1'&&$pt7!=''&&$pts7!=''&&$pts7!='0'&&$rt8!='-1'&&$rg8!='null'&&$rg8!='-1'&&$pt8!=''&&$pts8!=''&&$pts8!='0'&&$rt9!='-1'&&$rg9!='null'&&$rg9!='-1'&&$pt9!=''&&$pts9!=''&&$pts9!='0'&&$rt10!='-1'&&$rg10!='null'&&$rg10!='-1'&&$pt10!=''&&$pts10!=''&&$pts10!='0'){
	   		/*if($ape_dir!=''&&$ape_dir!=0&&$nom_dir!=''&&$nom_dir!=0&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>0&&$dir_placa!=''&&$dir_placa!=0){*/
	   		if($ape_dir!=''&&$nom_dir!=''&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>=0&&$dir_placa!=''&&$dir_placa>=0){
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg2,$rgs2,$pt2,$pts2,'1','1','2')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg3,$rgs3,$pt3,$pts3,'1','1','3')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg4,$rgs4,$pt4,$pts4,'1','1','4')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg5,$rgs5,$pt5,$pts5,'1','1','5')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg6,$rgs6,$pt6,$pts6,'1','1','6')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg7,$rgs7,$pt7,$pts7,'1','1','7')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg8,$rgs8,$pt8,$pts8,'1','1','8')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg9,$rgs9,$pt9,$pts9,'1','1','9')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg10,$rgs10,$pt10,$pts10,'1','1','10')";
	   	   		$rs=$con->Execute($query);
	   	   		$mensaje = 1;
	   	   		echo $mensaje;
	   	   	}else{
	   	   		$mensaje = 2;
	   			echo $mensaje;
	   	   	}
	   	}else{
	   		$mensaje = 2;
	   		echo $mensaje;
	   	}
	   		break;
	   	
	   	default:
	   		echo "error";
	   		break;
	    }

	    if($mensaje==1){
			$query = "INSERT INTO info(extension,nombre,apellido,alveolo,placa_interfaz,direccion_equipo,tipo_terminal,activo,cubiculo,centro_de_costos,direccion_ip,mac) 
					  VALUES('$ext','$nom_dir','$ape_dir','$dir_alveolo','$dir_placa','$dir_equipo','$tipo_terminal','$activo','$cubiculo','$centro_costo','$ip','$mac')";
   			$rs=$con->Execute($query);
	    };
	
	    
	    $con->Close();

	}catch (Exception $e) 
	{
		echo $e;
	}
=======
<?php
	require_once('bd/conexion.php');
	require_once('adodb5/adodb.inc.php');
	$saltos = $_POST['saltos'];
	$ext    = $_POST['ext'];
	$rt1    = $_POST['rt1'];
	$rt2    = $_POST['rt2'];
	$rt3    = $_POST['rt3'];
	$rt4    = $_POST['rt4'];
	$rt5    = $_POST['rt5'];
	$rt6    = $_POST['rt6'];
	$rt7    = $_POST['rt7'];
	$rt8    = $_POST['rt8'];
	$rt9    = $_POST['rt9'];
	$rt10   = $_POST['rt10'];

	$rg1    = $_POST['rg1'];
	$rg2    = $_POST['rg2'];
	$rg3    = $_POST['rg3'];
	$rg4    = $_POST['rg4'];
	$rg5    = $_POST['rg5'];
	$rg6    = $_POST['rg6'];
	$rg7    = $_POST['rg7'];
	$rg8    = $_POST['rg8'];
	$rg9    = $_POST['rg9'];
	$rg10   = $_POST['rg10'];

	$rgs1   = $_POST['rg11'];
	$rgs2   = $_POST['rg22'];
	$rgs3   = $_POST['rg33'];
	$rgs4   = $_POST['rg44'];
	$rgs5   = $_POST['rg55'];
	$rgs6   = $_POST['rg66'];
	$rgs7   = $_POST['rg77'];
	$rgs8   = $_POST['rg88'];
	$rgs9   = $_POST['rg99'];
	$rgs10  = $_POST['rg100'];

	$pt1    = $_POST['pt1'];
	$pt2    = $_POST['pt2'];
	$pt3    = $_POST['pt3'];
	$pt4    = $_POST['pt4'];
	$pt5    = $_POST['pt5'];
	$pt6    = $_POST['pt6'];
	$pt7    = $_POST['pt7'];
	$pt8    = $_POST['pt8'];
	$pt9    = $_POST['pt9'];
	$pt10   = $_POST['pt10'];

	$pts1   = $_POST['pt11'];
	$pts2   = $_POST['pt22'];
	$pts3   = $_POST['pt33'];
	$pts4   = $_POST['pt44'];
	$pts5   = $_POST['pt55'];
	$pts6   = $_POST['pt66'];
	$pts7   = $_POST['pt77'];
	$pts8   = $_POST['pt88'];
	$pts9   = $_POST['pt99'];
	$pts10  = $_POST['pt100'];

	$ape_dir       = utf8_encode($_POST['ape_dir']);
	$nom_dir       = utf8_encode($_POST['nom_dir']);
	$dir_alveolo   = $_POST['dir_alveolo'];
	$dir_placa     = $_POST['dir_placa'];
	$dir_equipo    = utf8_encode($_POST['dir_equipo']);
	$tipo_terminal = $_POST['tipo_terminal'];
	$activo        = $_POST['activo'];
	$cubiculo      = utf8_encode($_POST['cubiculo']);
	$ip            = $_POST['ip'];
	$centro_costo  = utf8_encode($_POST['centro_costo']);
	$mac           = $_POST['mac'];
	$mensaje;

	

	try 
	{
	   $con = ADONewConnection('mysql');
	   $con->debug=false;
	   $con->PConnect($server,$username,$password,$database);
	   $con->SetFetchMode(ADODB_FETCH_ASSOC);
	   switch ($saltos) {
	   	case '1':
		    if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$pt1!='0'&&$pts1!=''&&$pts1!='0'){
	   		 	if($ape_dir!=''&&$nom_dir!=''&&$dir_alveolo!=''&&$tipo_terminal!='-1'&&$dir_alveolo!=''&&$dir_placa!=''){
			   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
	   	   			$rs=$con->Execute($query);
		   	   		$mensaje = 1;
		   	   		echo $mensaje;
		   	   	}else{
		   	   		$mensaje = 2;
		   			echo $mensaje;
		   	   	}
		   	}else{
		   		$mensaje = 2;
		   		echo $mensaje;
		   	}
	   		break;
	   	case '2':
	   		 if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$pt1!='0'&&$rt2!='-1'&&$rg2!=''&&$rg2!='-1'&&$pt2!=''&&$pts1!=''&&$pts1!='0'&&$pts2!=''&&$pts2!='0'){
	   		 	if($ape_dir!=''&&$ape_dir!=0&&$nom_dir!=''&&$nom_dir!=0&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>0&&$dir_placa!=''&&$dir_placa!=0){
			   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
		   	   		$rs=$con->Execute($query);
		   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg2,$rgs2,$pt2,$pts2,'1','1','2')";
		   	   		$rs=$con->Execute($query);
			   	   		$mensaje = 1;
	   	   			echo $mensaje;
   	   			}else{
	   	   			$mensaje = 2;
	   				echo $mensaje;
	   	   	}
   	   		}else{
		   		$mensaje = 2;
		   		echo $mensaje;
	   		}
	   		break;
	   	case '3':
	   	if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$rt2!='-1'&&$rg2!='null'&&$rg2!='-1'&&$pt2!=''&&$rt3!='-1'&&$rg3!='null'&&$rg3!='-1'&&$pt3!=''&&$pts1!=''&&$pts1!='0'&&$pts2!=''&&$pts2!='0'&&$pts3!=''&&$pts3!='0'){
	   		if($ape_dir!=''&&$ape_dir!=0&&$nom_dir!=''&&$nom_dir!=0&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>0&&$dir_placa!=''&&$dir_placa!=0){
		   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg2,$rgs2,$pt2,$pts2,'1','1','2')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg3,$rgs3,$pt3,$pts3,'1','1','3')";
	   	   		$rs=$con->Execute($query);
	   	   		$mensaje = 1;
	   	   		echo $mensaje;
	   	   	}else{
	   	   		$mensaje = 2;
		   		echo $mensaje;
	   	   	}
	   	}else{
	   		$mensaje = 2;
	   		echo $mensaje;
	   	}
	   		break;
	   	case '4':
	   	if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$rt2!='-1'&&$rg2!='null'&&$rg2!='-1'&&$pt2!=''&&$rt3!='-1'&&$rg3!='null'&&$rg3!='-1'&&$pt3!=''&&$rt4!='-1'&&$rg4!='null'&&$rg4!='-1'&&$pt4!=''&&$pts1!=''&&$pts1!='0'&&$pts2!=''&&$pts2!='0'&&$pts3!=''&&$pts3!='0'&&$pts4!=''&&$pts4!='0'){
	   		if($ape_dir!=''&&$ape_dir!=0&&$nom_dir!=''&&$nom_dir!=0&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>0&&$dir_placa!=''&&$dir_placa!=0){
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg2,$rgs2,$pt2,$pts2,'1','1','2')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg3,$rgs3,$pt3,$pts3,'1','1','3')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg4,$rgs4,$pt4,$pts4,'1','1','4')";
	   	   		$rs=$con->Execute($query);
	   	   		$mensaje = 1;
	   	   		echo $mensaje;
	   	   	}else{
	   	   		$mensaje = 2;
		   		echo $mensaje;
	   	   	}
	   	}else{
	   		$mensaje = 2;
	   		echo $mensaje;
	   	}
	   		break;
	   	case '5':
	   	if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$rt2!='-1'&&$rg2!='null'&&$rg2!='-1'&&$pt2!=''&&$rt3!='-1'&&$rg3!='null'&&$rg3!='-1'&&$pt3!=''&&$rt4!='-1'&&$rg4!='null'&&$rg4!='-1'&&$pt4!=''&&$rt5!='-1'&&$rg5!='null'&&$rg5!='-1'&&$pt5!=''&&$pts1!=''&&$pts1!='0'&&$pts2!=''&&$pts2!='0'&&$pts3!=''&&$pts3!='0'&&$pts4!=''&&$pts4!='0'&&$pts5!=''&&$pts5!='0'){
	   		if($ape_dir!=''&&$ape_dir!=0&&$nom_dir!=''&&$nom_dir!=0&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>0&&$dir_placa!=''&&$dir_placa!=0){
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg2,$rgs2,$pt2,$pts2,'1','1','2')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg3,$rgs3,$pt3,$pts3,'1','1','3')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg4,$rgs4,$pt4,$pts4,'1','1','4')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg5,$rgs5,$pt5,$pts5,'1','1','5')";
	   	   		$rs=$con->Execute($query);
	   	   		$mensaje = 1;
	   	   		echo $mensaje;
	   	   	}else{
	   	   		$mensaje = 2;
	   		echo $mensaje;
	   	   	}
	   	}else{
	   		$mensaje = 2;
	   		echo $mensaje;
	   	}
	   	break;
	   	case '6':
	   	if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$rt2!='-1'&&$rg2!='null'&&$rg2!='-1'&&$pt2!=''&&$rt3!='-1'&&$rg3!='null'&&$rg3!='-1'&&$pt3!=''&&$rt4!='-1'&&$rg4!='null'&&$rg4!='-1'&&$pt4!=''&&$rt5!='-1'&&$rg5!='null'&&$rg5!='-1'&&$pt5!=''&&$pts1!=''&&$pts1!='0'&&$pts2!=''&&$pts2!='0'&&$pts3!=''&&$pts3!='0'&&$pts4!=''&&$pts4!='0'&&$pts5!=''&&$pts5!='0'&&$rt6!='-1'&&$rg6!='null'&&$rg6!='-1'&&$pt6!=''&&$pts6!=''&&$pts6!='0'){
	   		if($ape_dir!=''&&$ape_dir!=0&&$nom_dir!=''&&$nom_dir!=0&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>0&&$dir_placa!=''&&$dir_placa!=0){
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg2,$rgs2,$pt2,$pts2,'1','1','2')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg3,$rgs3,$pt3,$pts3,'1','1','3')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg4,$rgs4,$pt4,$pts4,'1','1','4')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg5,$rgs5,$pt5,$pts5,'1','1','5')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg6,$rgs6,$pt6,$pts6,'1','1','6')";
	   	   		$rs=$con->Execute($query);
	   	   		$mensaje = 1;
	   	   		echo $mensaje;
	   	   	}else{
	   	   		$mensaje = 2;
	   			echo $mensaje;
	   	   	}
	   	}else{
	   		$mensaje = 2;
	   		echo $mensaje;
	   	}
	   	break;
	   	case '7':
	   	if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$rt2!='-1'&&$rg2!='null'&&$rg2!='-1'&&$pt2!=''&&$rt3!='-1'&&$rg3!='null'&&$rg3!='-1'&&$pt3!=''&&$rt4!='-1'&&$rg4!='null'&&$rg4!='-1'&&$pt4!=''&&$rt5!='-1'&&$rg5!='null'&&$rg5!='-1'&&$pt5!=''&&$pts1!=''&&$pts1!='0'&&$pts2!=''&&$pts2!='0'&&$pts3!=''&&$pts3!='0'&&$pts4!=''&&$pts4!='0'&&$pts5!=''&&$pts5!='0'&&$rt7!='-1'&&$rg7!='null'&&$rg7!='-1'&&$pt7!=''&&$pts7!=''&&$pts7!='0'){
	   		if($ape_dir!=''&&$ape_dir!=0&&$nom_dir!=''&&$nom_dir!=0&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>0&&$dir_placa!=''&&$dir_placa!=0){
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg2,$rgs2,$pt2,$pts2,'1','1','2')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg3,$rgs3,$pt3,$pts3,'1','1','3')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg4,$rgs4,$pt4,$pts4,'1','1','4')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg5,$rgs5,$pt5,$pts5,'1','1','5')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg6,$rgs6,$pt6,$pts6,'1','1','6')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg7,$rgs7,$pt7,$pts7,'1','1','7')";
	   	   		$rs=$con->Execute($query);
	   	   		$mensaje = 1;
	   	   		echo $mensaje;
	   	   	}else{
	   	   		$mensaje = 2;
	   			echo $mensaje;
	   	   	}
	   	}else{
	   		$mensaje = 2;
	   		echo $mensaje;
	   	}
	   	break;
	   	case '8':
	   	if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$rt2!='-1'&&$rg2!='null'&&$rg2!='-1'&&$pt2!=''&&$rt3!='-1'&&$rg3!='null'&&$rg3!='-1'&&$pt3!=''&&$rt4!='-1'&&$rg4!='null'&&$rg4!='-1'&&$pt4!=''&&$rt5!='-1'&&$rg5!='null'&&$rg5!='-1'&&$pt5!=''&&$pts1!=''&&$pts1!='0'&&$pts2!=''&&$pts2!='0'&&$pts3!=''&&$pts3!='0'&&$pts4!=''&&$pts4!='0'&&$pts5!=''&&$pts5!='0'&&$rt6!='-1'&&$rg6!='null'&&$rg6!='-1'&&$pt6!=''&&$pts6!=''&&$pts6!='0'&&$rt7!='-1'&&$rg7!='null'&&$rg7!='-1'&&$pt7!=''&&$pts7!=''&&$pts7!='0'&&$rt8!='-1'&&$rg8!='null'&&$rg8!='-1'&&$pt8!=''&&$pts8!=''&&$pts8!='0'){
	   		if($ape_dir!=''&&$ape_dir!=0&&$nom_dir!=''&&$nom_dir!=0&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>0&&$dir_placa!=''&&$dir_placa!=0){
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg2,$rgs2,$pt2,$pts2,'1','1','2')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg3,$rgs3,$pt3,$pts3,'1','1','3')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg4,$rgs4,$pt4,$pts4,'1','1','4')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg5,$rgs5,$pt5,$pts5,'1','1','5')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg6,$rgs6,$pt6,$pts6,'1','1','6')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg7,$rgs7,$pt7,$pts7,'1','1','7')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg8,$rgs8,$pt8,$pts8,'1','1','8')";
	   	   		$rs=$con->Execute($query);
	   	   		$mensaje = 1;
	   	   		echo $mensaje;
	   	   	}else{
	   	   		$mensaje = 2;
	   			echo $mensaje;
	   	   	}
	   	}else{
	   		$mensaje = 2;
	   		echo $mensaje;
	   	}
	   	break;
	   	case '9':
	   	if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$rt2!='-1'&&$rg2!='null'&&$rg2!='-1'&&$pt2!=''&&$rt3!='-1'&&$rg3!='null'&&$rg3!='-1'&&$pt3!=''&&$rt4!='-1'&&$rg4!='null'&&$rg4!='-1'&&$pt4!=''&&$rt5!='-1'&&$rg5!='null'&&$rg5!='-1'&&$pt5!=''&&$pts1!=''&&$pts1!='0'&&$pts2!=''&&$pts2!='0'&&$pts3!=''&&$pts3!='0'&&$pts4!=''&&$pts4!='0'&&$pts5!=''&&$pts5!='0'&&$rt6!='-1'&&$rg6!='null'&&$rg6!='-1'&&$pt6!=''&&$pts6!=''&&$pts6!='0'&&$rt7!='-1'&&$rg7!='null'&&$rg7!='-1'&&$pt7!=''&&$pts7!=''&&$pts7!='0'&&$rt8!='-1'&&$rg8!='null'&&$rg8!='-1'&&$pt8!=''&&$pts8!=''&&$pts8!='0'&&$rt9!='-1'&&$rg9!='null'&&$rg9!='-1'&&$pt9!=''&&$pts9!=''&&$pts9!='0'){
	   		if($ape_dir!=''&&$ape_dir!=0&&$nom_dir!=''&&$nom_dir!=0&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>0&&$dir_placa!=''&&$dir_placa!=0){
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg2,$rgs2,$pt2,$pts2,'1','1','2')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg3,$rgs3,$pt3,$pts3,'1','1','3')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg4,$rgs4,$pt4,$pts4,'1','1','4')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg5,$rgs5,$pt5,$pts5,'1','1','5')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg6,$rgs6,$pt6,$pts6,'1','1','6')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg7,$rgs7,$pt7,$pts7,'1','1','7')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg8,$rgs8,$pt8,$pts8,'1','1','8')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg9,$rgs9,$pt9,$pts9,'1','1','9')";
	   	   		$rs=$con->Execute($query);
	   	   		$mensaje = 1;
	   	   		echo $mensaje;
	   	   	}else{
	   	   		$mensaje = 1;
	   	   		echo $mensaje;
	   	   	}
	   	}else{
	   		$mensaje = 2;
	   		echo $mensaje;
	   	}
	   	break;
	   	case '10':
	   	if($rt1!='-1'&&$rg1!='null'&&$rg1!='-1'&&$pt1!=''&&$rt2!='-1'&&$rg2!='null'&&$rg2!='-1'&&$pt2!=''&&$rt3!='-1'&&$rg3!='null'&&$rg3!='-1'&&$pt3!=''&&$rt4!='-1'&&$rg4!='null'&&$rg4!='-1'&&$pt4!=''&&$rt5!='-1'&&$rg5!='null'&&$rg5!='-1'&&$pt5!=''&&$pts1!=''&&$pts1!='0'&&$pts2!=''&&$pts2!='0'&&$pts3!=''&&$pts3!='0'&&$pts4!=''&&$pts4!='0'&&$pts5!=''&&$pts5!='0'&&$rt6!='-1'&&$rg6!='null'&&$rg6!='-1'&&$pt6!=''&&$pts6!=''&&$pts6!='0'&&$rt7!='-1'&&$rg7!='null'&&$rg7!='-1'&&$pt7!=''&&$pts7!=''&&$pts7!='0'&&$rt8!='-1'&&$rg8!='null'&&$rg8!='-1'&&$pt8!=''&&$pts8!=''&&$pts8!='0'&&$rt9!='-1'&&$rg9!='null'&&$rg9!='-1'&&$pt9!=''&&$pts9!=''&&$pts9!='0'&&$rt10!='-1'&&$rg10!='null'&&$rg10!='-1'&&$pt10!=''&&$pts10!=''&&$pts10!='0'){
	   		if($ape_dir!=''&&$ape_dir!=0&&$nom_dir!=''&&$nom_dir!=0&&$dir_alveolo!=''&&$tipo_terminal!=0&&$dir_alveolo>0&&$dir_placa!=''&&$dir_placa!=0){
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg1,$rgs1,$pt1,$pts1,'1','1','1')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg2,$rgs2,$pt2,$pts2,'1','1','2')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg3,$rgs3,$pt3,$pts3,'1','1','3')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg4,$rgs4,$pt4,$pts4,'1','1','4')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg5,$rgs5,$pt5,$pts5,'1','1','5')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg6,$rgs6,$pt6,$pts6,'1','1','6')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg7,$rgs7,$pt7,$pts7,'1','1','7')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg8,$rgs8,$pt8,$pts8,'1','1','8')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg9,$rgs9,$pt9,$pts9,'1','1','9')";
	   	   		$rs=$con->Execute($query);
	   	   		$query = "INSERT INTO puerto(pue_extension,rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_est_salida,pue_salto) VALUES('$ext',$rg10,$rgs10,$pt10,$pts10,'1','1','10')";
	   	   		$rs=$con->Execute($query);
	   	   		$mensaje = 1;
	   	   		echo $mensaje;
	   	   	}else{
	   	   		$mensaje = 2;
	   			echo $mensaje;
	   	   	}
	   	}else{
	   		$mensaje = 2;
	   		echo $mensaje;
	   	}
	   		break;
	   	
	   	default:
	   		echo "error";
	   		break;
	    }

	    if($mensaje==1){
			$query = "INSERT INTO info(extension,nombre,apellido,alveolo,placa_interfaz,direccion_equipo,tipo_terminal,activo,cubiculo,centro_de_costos,direccion_ip,mac) 
					  VALUES('$ext','$nom_dir','$ape_dir','$dir_alveolo','$dir_placa','$dir_equipo','$tipo_terminal','$activo','$cubiculo','$centro_costo','$ip','$mac')";
   			$rs=$con->Execute($query);
	    };
	
	    
	    $con->Close();

	}catch (Exception $e) 
	{
		echo $e;
	}
>>>>>>> origin/master
?>
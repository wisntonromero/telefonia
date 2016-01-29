<?php 
	include("bd/conexion.php");
	require_once('adodb5/adodb.inc.php');
	$id = $_POST['extension'];
		$con = ADONewConnection('mysql');
		$con->PConnect($server,$username,$password,$database);
		$con->SetFetchMode(ADODB_FETCH_ASSOC);

		$query    = "SELECT MAX(pue_salto)
					 FROM puerto 
					 WHERE pue_extension = '$id'";
		$rs       = $con->Execute($query);
		if(!$rs->EOF){
		   	$salto = array('max_salto' => $rs->fields['MAX(pue_salto)']);
			$rs=NULL;
			$i=1;
			$query    = "SELECT rg_entrada,rg_salida,pue_entrada,pue_salida,pue_est_entrada,pue_salida,pue_est_salida,id_registro,pue_salto
						 FROM puerto,registros,regletas 
						 WHERE rg_entrada = rgt_id AND rgo_id = id_registro AND pue_extension = '$id' 
						 ORDER BY pue_salto";
			$rs       = $con->Execute($query);
		
			while (!$rs->EOF) {
				$reg[$i] = array('registro'   => $rs->fields['id_registro'],
								 'entrada'     => $rs->fields['rg_entrada'],
								 'salida'     => $rs->fields['rg_salida'],
								 'p_in'       => $rs->fields['pue_entrada'],
								 'p_out'      => $rs->fields['pue_salida'],
								 'estadoin'   => $rs->fields['pue_est_entrada'],
								 'p_out'      => $rs->fields['pue_salida'],
								 'estado_out' => $rs->fields['pue_est_salida'],
								 'salto'      => $rs->fields['pue_salto']);

				$rs->MoveNext();
				$i++;
			};
			    $con->Close();
			    $salto += array('reg'=>$reg);
			    echo json_encode($salto);
		}else{
			echo "<strong style='color:#FF0000;'>Extensión Inexistente.</strong>";
		};
		
 ?>
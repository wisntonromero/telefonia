<?php
	include("bd/conexion.php");

	require_once('adodb5/adodb.inc.php');

	$extension = $_POST['extension'];
	$entrada;
	$salida;
	$con = ADONewConnection('mysql');
	$con->PConnect($server,$username,$password,$database);
	
	$query    = "SELECT rgt_nombre FROM puerto,regletas WHERE rgt_id=rg_salida AND pue_extension = '$extension' order by pue_salto";
	$rs       = $con->Execute($query);

if(!$rs->EOF){
	$i=0;
	echo"<script>$('#informacion').show();</script>";
	echo"<script>
		$(':text').each(function(){	
			$($(this)).val('');
	</script>";
   while(!$rs->EOF)
   {
   	$regletas[$i] =array($rs->fields['rgt_nombre']);
   	$rs->MoveNext();
   	$i++;
   }
	$rs=NULL;

	$query    = "SELECT rgo_nombre,pue_extension,pue_extension,rgt_nombre,pue_entrada,pue_est_entrada,rg_salida,pue_salida,pue_est_salida,rgo_ubicacion,pue_salto FROM registros,puerto,regletas WHERE rgo_id=id_registro AND rg_entrada= rgt_id AND  pue_extension = '$extension' order by pue_salto";
	$rs       = $con->Execute($query);
	echo "<table  class='table table-bordered table-stripered'>
	<thead>
		<tr>
			<th>Salto</th>
			<th>Registro</th>
			<th>Ubicación</th>
			<th>Extensión</th>
			<th>RG Entrada</th>
			<th>No. Puerto</th>
			<th>Estado</th>
			<th>RG Salida</th>
			<th>No. Puerto</th>
			<th>Estado</th>
		</tr>
	</thead>
	<tbody>";
	$i=0;
	foreach($rs as $k => $row) {
	if($row['pue_est_entrada']=='1')
		{$entrada = 'Activo';}
	else{$entrada = 'Inactivo';}
	if($row['pue_est_salida']=='1')
		{$salida = 'Activo';}
	else{$salida = 'Inactivo';}
		echo "<tr>
				<td>".$row['pue_salto']."</td>
				<td>".$row['rgo_nombre']."</td>
				<td>".$row['rgo_ubicacion']."</td>
				<td>".$row['pue_extension']."</td>
				<td>".$row['rgt_nombre']."</td>
				<td>".$row['pue_entrada']."</td>
				<td>".$entrada."</td>
				<td>".implode($regletas[$i])."</td>
				<td>".$row['pue_salida']."</td>
				<td>".$salida."</td>
			</tr>";
			$i++;
	}
	echo "</tbody>";
}else{
	echo"<script>
			$('#informacion').hide();
			$('#txtextension').select();
		 </script>";
	echo "<strong style='color:#FF0000;'>Extensión Inexistente.</strong>";
};
   
?>
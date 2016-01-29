<html>
<head>
	<title>Importar CSV</title>
</head>
<body>
	<?php

	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$database = 'ejemplop';

	$conexion = new mysqli("localhost", "root", "", "ejemplop");

	if (isset($_POST['submitFileUpload'])) {

    $file_import = 'import/'.$_FILES['file']['name'];

    if ($_FILES["file"]["type"] == "text/comma-separated-values") {
        if (@move_uploaded_file($_FILES['file']['tmp_name'], $file_import)) {
            $fp = fopen($file_import, 'r');
            $contador = 0;
            $users_edited = 0;
            $users_added = 0;
            while (($data = fgetcsv($fp, 9999, ";")) !== FALSE) {
                if ($contador > 0) {
                    if (empty($data[0])) {
                        $insert = "INSERT INTO 'datos' ('name', 'last_name', 'email', 'points') 
                        VALUES ('".$data[1]."', '".$data[2]."', '".$data[3]."', ".$data[4].")";
                        $conexion->query($insert);
                        $users_added++;
                    }
                    else {
                        $update = "UPDATE 'datos' SET 'name'='".$data[1]."', 'last_name'='".$data[2]."', 'email'='".$data[3]."', 'points'=".$data[4]." WHERE id_user=".$data[0];
                        $conexion->query($update);
                        $users_edited++;
                    }
                }
                $contador++;
            }
        }
        $message_import = '<p>La importacion se ha realizado con exito!<br/>Se han actualizado '.$users_edited.' registros.<br/>Se han insertar '.$users_added.' usuarios nuevos.</p>';
    }

    else {
        $message_import = '<p>El archivo subido no es correcto!</p>';
    }
}
	?>
	<fieldset>
    <legend>Importador de usuarios</legend>
    <?php if (!empty($message_import)) echo $message_import; ?>
    <form enctype="multipart/form-data" method="POST" action="importar_exportar.php">
        <label>Selecciona un archivo .csv </label>
        <input type="file" name="file">
        <input type="submit" value="Upload" name="submitFileUpload">
    </form>
</fieldset>
</body>
</html>
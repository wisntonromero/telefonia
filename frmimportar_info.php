<!doctype html>
<html>
<head>
	<title>Importar CSV</title>
      <link rel="SHORTCUT ICON" href="uninorte.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/importar.css" />
    <!-- <link rel="stylesheet" href="css/foundation.css" /> -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/jquery-filestyle.min.css" />
    <img style="width: 303px; height: 146px margin: -55px -216px -112px -140px;" src="images/jpg/logo.jpg" alt="Logo Universidad del Norte."/>
</head>
<body>
	<nav class="top-bar" data-topbar>

    <section class="top-bar-section">
      <!-- Right Nav Section  menu lado derecho-->
      <ul class="left">
        <li><a href="#" text-decoration="none"><strong>IMPORTANDO ARCHIVO CSV<strong></a></li>
      </ul>
    </section>

    <section class="top-bar-section">
      <!-- Right Nav Section  menu lado derecho-->
      <ul class="right">
        <li><a href="index.html"><strong>INICIO<strong></a></li>
      </ul>
    </section>
  </nav><br><br>


  <h1>Seleccione archivo CSV</h1>

 <form action='<?php echo $_SERVER["PHP_SELF"];?>' method='post' enctype="multipart/form-data">
   <input type="file" name='sel_file' size='20' class="jfilestyle" data-theme="green">
   <script src="js/jquery-filestyle.min.js"></script>
   <br>
   <a href="img/Formato CSV Tabla Informacion.xlsx" class="button">Descargar Formato</a>
  <input type='submit' name='submit' value='Importar CSV' class='button'>
 </form>
 </body>
</html>

<?php
 require_once('bd/conexion.php');
//conexiones, conexiones everywhere
/*ini_set('display_errors', 1);
error_reporting(E_ALL);*/
$db_host = 'localhost';
$db_user = 'root';
$db_pass = ' ';
$database = 'telefonia';

if(!mysql_connect($server,$username,$password)){
    die("No se pudo establecer conexión a la base de datos");
}

 
if(!mysql_select_db($database))
    die("base de datos no existe");
    if(isset($_POST['submit']))
    {
        //Aquí es donde seleccionamos nuestro csv
         $fname = $_FILES['sel_file']['name'];
         echo 'Cargando nombre del archivo: '.$fname.' ';
         $chk_ext = explode(".",$fname);
         
         if(strtolower(end($chk_ext)) == "csv")
         {
             //si es correcto, entonces damos permisos de lectura para subir
             $filename = $_FILES['sel_file']['tmp_name'];
             $handle = fopen($filename, "r");
        
             while (($data = fgetcsv($handle, 1000, ";")) !== FALSE)
             {
               //Insertamos los datos con los valores...
                $sql = "INSERT into informacion(extension,apellido,nombre,alveolo,placa_interfaz,direccion_equipo,tipo_terminal,activo,cubiculo,centro_de_costos,direccion_ip,mac) values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[11]')";
                mysql_query($sql) or die(mysql_error());
             }
             //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
             fclose($handle);
             echo "Importación exitosa!";
             
         }
         else
         {
            //si aparece esto es posible que el archivo no tenga el formato adecuado, inclusive cuando es cvs, revisarlo para             //ver si esta separado por " , "
             echo "Archivo invalido!";
         }   
    }
     
    ?>
</body>
</html>
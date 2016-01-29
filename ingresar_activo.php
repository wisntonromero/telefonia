<?php
include_once("config.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ingresar activo</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <!-- <Link href="css/estilo_maestro.css" type="text/css" rel="stylesheet"> -->
  <script src="js/vendor/modernizr.js"></script>
  <img style="width: 303px; height: 146px margin: -55px -216px -112px -140px;" src="images/jpg/logo.jpg" alt="Logo Universidad del Norte."/>
 </head>
<body>
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name">
        <!-- Titulo del Menu -->
        <h1><a href="#">Inventario de Hardware</a></h1>
      </li>
        <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
    </ul>

    <section class="top-bar-section">
      <!-- Right Nav Section  menu lado derecho-->
      <ul class="right">
        <li><a href="inicio.php">Inicio</a></li>
      </ul>
    </section>
  </nav>

  <br>
   <!-- *************************************************************************  SCRIP DE JAVA ***************************************************** -->
        <script language="Javascript">
            function confirmar(){
             confirmar=confirm("Activo no existe. ¿Deseas ingresar un nuevo activo al sistema?");
            if (confirmar){
             // si pulsamos en aceptar
                alert('Elegiste adicinonar un nuevo activo, pulsa Aceptar para continuar.');
            }else{
            // si pulsamos en cancelar
            alert('Por favor verifica la informacion y vuelve a intentarlo.');
            document.location.href ="ingresar_activo.php";
           }
        }

          function confirmar_punto_de_red()
          {
             confirmar=confirm("Punto de red no existe. ¿Deseas ingresar un nuevo punto de red al sistema?");
            if (confirmar)
            {
             // si pulsamos en aceptar
              alert('Elegiste adicinonar un nuevo punt de red al sistema, pulsa Aceptar para continuar.');
              document.location.href ="ingresar_puntos_de_red.php";
            }else
            {
              // si pulsamos en cancelar
              alert('Por favor verifica la informacion y vuelve a intentarlo.');
              document.location.href ="ingresar_activo.php";
            }
        }

          function limpiar_forma()
          {
            location.href='ingresar_activo.php';
          }

          function myFunction()
          {
            alert("$dir_ip");
          }

          function revisar_ip_duplicada()
          {
            $.post('comprobar_ip.php',
              {
                dir_ip: $('#dir_ip').val(),
                activo_equipo: $('#activo_equipo').val()
              },
              function (data){
                if (data != 'no'){
                  alert(data);
                }
              }
            );
          }
        </script>
<!--  ********************************************************************** FIN SCRIPT DE JAVA **************************************************** -->

<!-- ******************************************************************** INICIO INGRESAR ACTVIO ************************************************************** -->

  <div class="row">
    <div class="columns large-12">
    <?php
      if( isset($_POST['ingresar']) ) {

        $conexion = mysql_connect($server,$username,$password);
        mysql_select_db($database);

        $activo_equipo = $_POST['activo_equipo'];
        $tipo_equipo = $_POST['tipo_equipo'];
        $marca_equipo = $_POST['marca_equipo'];
        $modelo_equipo = $_POST['modelo_equipo'];
        $activo_mon = $_POST['activo_mon'];
        $estado_equipo = $_POST['estado_equipo'];

        $dir_ip = $_POST['dir_ip'];
        $dir_mac = $_POST['dir_mac'];
        $punto_de_red = $_POST['punto_de_red'];
        $vlan_puerto_sw = $_POST['vlan_puerto_sw'];
        $dir_ip_sw = $_POST['dir_ip_sw'];
        $puerto_sw = $_POST['puerto_sw'];
        $f_ult_actualiza = $_POST['f_ult_actualiza'];

        $bloque = $_POST['bloque'];
        $piso = $_POST['piso'];
        $departamento = $_POST['departamento'];
        $cubiculo = $_POST['cubiculo'];
        $responsable = $_POST['responsable'];
        $usuario = $_POST['usuario'];
        $ext_tel = $_POST['ext_tel'];
        $observaciones = $_POST['observaciones'];

        $query = "INSERT INTO hardware(activo_equipo, tipo_equipo, marca_equipo, modelo_equipo, activo_mon, estado_equipo, dir_ip, dir_mac, punto_de_red, vlan_puerto_sw, dir_ip_sw,
        puerto_sw, f_ult_actualiza, bloque, piso, departamento, cubiculo, responsable, usuario, ext_tel, observaciones) VALUES ('$activo_equipo', '$tipo_equipo',
        '$marca_equipo', '$modelo_equipo', '$activo_mon', '$estado_equipo', '$dir_ip', '$dir_mac', '$punto_de_red', '$vlan_puerto_sw','$dir_ip_sw','$puerto_sw', '$f_ult_actualiza',
        '$bloque', '$piso', '$departamento', '$cubiculo', '$responsable', '$usuario', '$ext_tel', '$observaciones') ";
        $resultado = mysql_query($query,$conexion);

        if( $resultado )
       {
          ?>
          <div data-alert class="alert-box success radius">
            Activo agregado al sistema
            <a href="#" class="close">&times;</a>
          </div>
            <?php
        }else{
              echo mysql_error();
             }

            mysql_close($conexion);
        }
    ?>

<!-- ******************************************************************** FIN INGRESAR ACTVIO ************************************************************** -->

<!-- ******************************************************* INICIO MODIFICAR ACTIVO ********************************************************************************* -->
    <?php
      if( isset($_POST['modificar']) ) {

        $conexion = mysql_connect($server,$username,$password);
        mysql_select_db($database);

        $activo_equipo = $_POST['activo_equipo'];
        $tipo_equipo = $_POST['tipo_equipo'];
        $marca_equipo = $_POST['marca_equipo'];
        $modelo_equipo = $_POST['modelo_equipo'];
        $activo_mon = $_POST['activo_mon'];
        $estado_equipo = $_POST['estado_equipo'];

        $dir_ip = $_POST['dir_ip'];
        $dir_mac = $_POST['dir_mac'];
        $punto_de_red = $_POST['punto_de_red'];
        $vlan_puerto_sw = $_POST['vlan_puerto_sw'];
        $dir_ip_sw = $_POST['dir_ip_sw'];
        $puerto_sw = $_POST['puerto_sw'];
        $f_ult_actualiza = $_POST['f_ult_actualiza'];

        $bloque = $_POST['bloque'];
        $piso = $_POST['piso'];
        $departamento = $_POST['departamento'];
        $cubiculo = $_POST['cubiculo'];
        $responsable = $_POST['responsable'];
        $usuario = $_POST['usuario'];
        $ext_tel = $_POST['ext_tel'];
        $observaciones = $_POST['observaciones'];


        $query = "UPDATE hardware SET tipo_equipo='$tipo_equipo', marca_equipo='$marca_equipo', modelo_equipo='$modelo_equipo', activo_mon='$activo_mon', estado_equipo='$estado_equipo',
        dir_ip='$dir_ip', dir_mac='$dir_mac', punto_de_red='$punto_de_red', vlan_puerto_sw='$vlan_puerto_sw', dir_ip_sw='$dir_ip_sw', puerto_sw='$puerto_sw', f_ult_actualiza='$f_ult_actualiza',
        bloque='$bloque', piso='$piso', departamento='$departamento', cubiculo='$cubiculo', responsable='$responsable', usuario='$usuario', ext_tel='$ext_tel', observaciones='$observaciones' WHERE activo_equipo='$activo_equipo' ";
        $resultado = mysql_query($query,$conexion);

         if( $resultado )
        {
          ?>
          <div data-alert class="alert-box success radius">
            Activo  modificado en el sistema
            <a href="#" class="close">&times;</a>
          </div>
              <?php
        }else{
              echo mysql_error();
            }

            mysql_close($conexion);
        }
    ?>
<!-- ******************************************************* FIN MODIFICAR ACTIVO ****************************************************************************************** -->

<!-- ******************************************************* INICIO MODIFICAR PUNTO DE RED ********************************************************************************* -->

    <?php
          if( isset($_POST['modificar_punto_de_red']) ) {

            $conexion = mysql_connect($server,$username,$password);
            mysql_select_db($database);

            $punto_de_red = $_POST['punto_de_red'];
            $dir_ip_sw = $_POST['dir_ip_sw'];
            $puerto_sw = $_POST['puerto_sw'];
            $vlan_puerto_sw = $_POST['vlan_puerto_sw'];
            $ubicacion_p_red = $_POST['ubicacion_p_red'];

            $query = "UPDATE puntos_de_red SET punto_de_red='$punto_de_red', dir_ip_sw='$dir_ip_sw', puerto_sw='$puerto_sw', vlan_puerto_sw='$vlan_puerto_sw', ubicacion_p_red='$ubicacion_p_red' WHERE punto_de_red='$punto_de_red' ";
            $resultado = mysql_query($query,$conexion);

            if( $resultado ){
              ?>
              <div data-alert class="alert-box success radius">
                Punto de red modificado en el sistema
                <a href="#" class="close">&times;</a>
              </div>
                  <?php
            }else{
                  echo mysql_error();
                }

                mysql_close($conexion);
            }
        ?>

<!-- ******************************************************* FIN MODIFICAR PUNTO DE RED ************************************************************************************ -->

<!--  ********************************************************* CONSULTA O SELECT ACTIVO ************************************* -->
    <?php
      ##$detalle = false;

      if( isset($_POST['consultar']) ) {

        $conexion = mysql_connect($server,$username,$password);
        mysql_select_db($database);

        $activo_equipo = $_POST['activo_equipo'];

        $query = "SELECT activo_equipo, tipo_equipo, marca_equipo, modelo_equipo, activo_mon, estado_equipo,
        dir_ip, dir_mac, punto_de_red, vlan_puerto_sw, dir_ip_sw, puerto_sw, f_ult_actualiza,
        bloque, piso, departamento, cubiculo, responsable, usuario, ext_tel, observaciones FROM hardware WHERE activo_equipo='$activo_equipo'";

        $resultado = mysql_query($query,$conexion);
        $datos = mysql_num_rows($resultado);

        if( $datos != 0){

          $detalle = false;

          $registro = mysql_fetch_array($resultado);

          $activo_equipo = $registro['activo_equipo'];
          $tipo_equipo = $registro['tipo_equipo'];
          $marca_equipo = $registro['marca_equipo'];
          $modelo_equipo = $registro['modelo_equipo'];
          $activo_mon = $registro['activo_mon'];
          $estado_equipo = $registro['estado_equipo'];

          $dir_ip = $registro['dir_ip'];
          $dir_mac = $registro['dir_mac'];
          $punto_de_red = $registro['punto_de_red'];
          $vlan_puerto_sw = $registro['vlan_puerto_sw'];
          $dir_ip_sw = $registro['dir_ip_sw'];
          $puerto_sw = $registro['puerto_sw'];
          $f_ult_actualiza = $registro['f_ult_actualiza'];

          $bloque = $registro['bloque'];
          $piso = $registro['piso'];
          $departamento = $registro['departamento'];
          $cubiculo = $registro['cubiculo'];
          $responsable = $registro['responsable'];
          $usuario = $registro['usuario'];
          $ext_tel = $registro['ext_tel'] ;
          $observaciones = $registro['observaciones'];
          }
          else {
            echo "<script>confirmar(\"\")</script>";
            $detalle = false;
          }

          mysql_close($conexion);
        }

          if ($activo_equipo == "") $activo_equipo = $_POST['activo_equipo'];
          if ($tipo_equipo == "") $tipo_equipo = $_POST['tipo_equipo'];
          if ($marca_equipo == "") $marca_equipo = $_POST['marca_equipo'];
          if ($modelo_equipo == "") $modelo_equipo = $_POST['modelo_equipo'];
          if ($activo_mon == "") $activo_mon = $_POST['activo_mon'];
          if ($estado_equipo == "") $estado_equipo = $_POST['estado_equipo'];

          if ($dir_ip == "") $dir_ip = $_POST['dir_ip'];
          if ($dir_mac == "") $dir_mac = $_POST['dir_mac'];
          if ($punto_de_red == "") $punto_de_red = $_POST['punto_de_red'];
          if ($vlan_puerto_sw == "") $vlan_puerto_sw = $_POST['vlan_puerto_sw'];
          if ($dir_ip_sw == "") $dir_ip_sw = $_POST['dir_ip_sw'];
          if ($puerto_sw == "")  $puerto_sw = $_POST['puerto_sw'];
          if ($f_ult_actualiza == "") $f_ult_actualiza = $_POST['f_ult_actualiza'];

          if ($bloque == "") $bloque = $_POST['bloque'];
          if ($piso == "") $piso = $_POST['piso'];
          if ($departamento == "") $departamento = $_POST['departamento'];
          if ($cubiculo == "") $cubiculo = $_POST['cubiculo'];
          if ($responsable == "") $responsable = $_POST['responsable'];
          if ($usuario == "") $usuario = $_POST['usuario'];
          if ($ext_tel == "") $ext_tel = $_POST['ext_tel'];
          if ($observaciones == "") $observaciones = $_POST['observaciones'];
      ?>


<!--  ********************************************************* FIN CONSULTA O SELECT ACTIVO ************************************************************** -->

<!-- ******************************************************************* INICIO CONSULTAR PUNTO DE RED ************************************************************************* -->
      <?php
          if( isset($_POST['consultar_punto_de_red']) ) {

            $conexion = mysql_connect($server,$username,$password);
            mysql_select_db($database);

            $punto_de_red = $_POST['punto_de_red'];

            $query = "SELECT punto_de_red,dir_ip_sw,puerto_sw,vlan_puerto_sw,ubicacion_p_red FROM puntos_de_red WHERE punto_de_red='$punto_de_red'";
            $resultado = mysql_query($query,$conexion);
            $datos_punto_de_red = mysql_num_rows($resultado);

            if( $datos_punto_de_red != 0){

              $detalle = false;

              $registro = mysql_fetch_array($resultado);

              $punto_de_red = $registro['punto_de_red'];
              $dir_ip_sw = $registro['dir_ip_sw'];
              $puerto_sw = $registro['puerto_sw'];
              $vlan_puerto_sw = $registro['vlan_puerto_sw'];
              $ubicacion_p_red = $registro['ubicacion_p_red'];
              }
              else {
              echo "<script>confirmar_punto_de_red(\"\")</script>";
              $detalle = false;
              }
            }
            if ($punto_de_red == "") $punto_de_red = $_POST['punto_de_red'];
            if ($dir_ip_sw == "") $dir_ip_sw = $_POST['dir_ip_sw'];
            if ($puerto_sw == "") $puerto_sw = $_POST['puerto_sw'];
            if ($vlan_puerto_sw == "") $vlan_puerto_sw = $_POST['vlan_puerto_sw'];
            if ($ubicacion_p_red == "") $ubicacion_p_red = $_POST['ubicacion_p_red'];
      ?>
<!--  ********************************************************* FIN DE CONSULTA PUNTO DE RED  ************************************************************** -->

<!-- ********************************************************** INICIO ENVIAR CORREO EQUIPO REUBICADO ****************************************************** -->
      <?php
          if( isset($_POST['enviar_correo_equipo_reubicado']) ) {
          $conexion = mysql_connect($server,$username,$password);
          mysql_select_db($database);

          $activo_equipo = $_POST['activo_equipo'];

          $query = "SELECT activo_equipo, tipo_equipo, marca_equipo, modelo_equipo, activo_mon, estado_equipo,
          dir_ip, dir_mac, punto_de_red, vlan_puerto_sw, dir_ip_sw, puerto_sw, f_ult_actualiza,
          bloque, piso, departamento, cubiculo, responsable, usuario, ext_tel, observaciones FROM hardware WHERE activo_equipo='$activo_equipo'";

          $resultado = mysql_query($query,$conexion);
          $datos = mysql_num_rows($resultado);
          $registro = mysql_fetch_array($resultado);

          $activo_equipo = $registro['activo_equipo'];
          $tipo_equipo = $registro['tipo_equipo'];
          $dir_ip = $registro['dir_ip'];
          $dir_mac = $registro['dir_mac'];
          $punto_de_red = $registro['punto_de_red'];
          $vlan_puerto_sw = $registro['vlan_puerto_sw'];
          $dir_ip_sw = $registro['dir_ip_sw'];
          $puerto_sw = $registro['puerto_sw'];

          $bloque = $registro['bloque'];
          $piso = $registro['piso'];
          $departamento = $registro['departamento'];
          $cubiculo = $registro['cubiculo'];
          $usuario = $registro['usuario'];

              $para = 'linea123@uninorte.edu.co' .',';
              $para .= 'weromero@uninorte.edu.co'.',';
              $para .= 'achalela@uninorte.edu.co';
              $titulo = 'Configuracion de punto de red por REUBICACIÓN DE EQUIPO :  ' . "$activo_equipo";
              $mensaje = 'Favor configurar punto de red a este equipo por cambio de ubicación : '. "\r\n" . "\r\n" .
                        'Activo del equipo        : '. "$activo_equipo"."\r\n" .
                        'Tipo de equipo           : '. "$tipo_equipo" . "\r\n" .
                        'Dirección IP             : '. "$dir_ip". "\r\n" .
                        'Dirección Mac            : '. "$dir_mac". "\r\n" .
                        'Punto de red             : '. "$punto_de_red". "\r\n" .
                        'Usuario del equipo       : '. "$usuario". "\r\n" .
                        'departamento             : '. "$departamento". "\r\n" .
                        'Bloque                   : '. "$bloque". "\r\n" .
                        'Piso                     : '. "$piso". "\r\n" .
                        'Ubicación                : '. "$cubiculo". "\r\n" .
                        'Dirección ip sw          : '. "$dir_ip_sw". "\r\n" .
                        'Puerto en el sw          : '. "$puerto_sw". "\r\n" .
                        'Vlan Puerto en el sw     : '. "$vlan_puerto_sw". "\r\n" . "\r\n" .
                        'Este E-mail es enviado automáticamente desde el sistema de inventario de equipos.' ;//Mensaje de 2 lineas
              $cabeceras = 'From: Sistema de invientario de equipos <weromero@uninorte.edu.co>'. "\r\n" . //La direccion de correo desde donde supuestamente se envió 'From: weromero@uninorte.edu.co'
              'Reply-To: weromero@uninorte.edu.co' . "\r\n" . //La direccion de correo a donde se responderá (cuando el recepto haga click en RESPONDER)
              'X-Mailer: PHP/' . phpversion();  //información sobre el sistema de envio de correos, en este caso la version de PHP
              mail($para, $titulo, utf8_decode($mensaje), $cabeceras);
          }
      ?>
<!-- *********************************************************** FIN ENVIAR CORREO EQUIPO  REUBICADO************************************************************************************ -->

<!-- ******************************************************************** INICIO ENVIAR EQUIPO NUEVO *********************************************************************** -->
      <?php
          if( isset($_POST['enviar_correo_equipo_nuevo']) ) {
          $conexion = mysql_connect($server,$username,$password);
          mysql_select_db($database);

          $activo_equipo = $_POST['activo_equipo'];

          $query = "SELECT activo_equipo, tipo_equipo, marca_equipo, modelo_equipo, activo_mon, estado_equipo,
          dir_ip, dir_mac, punto_de_red, vlan_puerto_sw, dir_ip_sw, puerto_sw, f_ult_actualiza,
          bloque, piso, departamento, cubiculo, responsable, usuario, ext_tel, observaciones FROM hardware WHERE activo_equipo='$activo_equipo'";

          $resultado = mysql_query($query,$conexion);
          $datos = mysql_num_rows($resultado);
          $registro = mysql_fetch_array($resultado);

          $activo_equipo = $registro['activo_equipo'];
          $tipo_equipo = $registro['tipo_equipo'];
          $dir_ip = $registro['dir_ip'];
          $dir_mac = $registro['dir_mac'];
          $punto_de_red = $registro['punto_de_red'];
          $vlan_puerto_sw = $registro['vlan_puerto_sw'];
          $dir_ip_sw = $registro['dir_ip_sw'];
          $puerto_sw = $registro['puerto_sw'];

          $bloque = $registro['bloque'];
          $piso = $registro['piso'];
          $departamento = $registro['departamento'];
          $cubiculo = $registro['cubiculo'];
          $usuario = $registro['usuario'];

              $para = 'linea123@uninorte.edu.co' .',';
              $para .= 'weromero@uninorte.edu.co'.',';
              $para .= 'achalela@uninorte.edu.co';
              $titulo = 'Reserva de ip EQUIPO NUEVO :  ' . "$activo_equipo";
              $mensaje = 'Favor hacer reserva de ip a este equipo NUEVO : '. "\r\n" . "\r\n" .
                        'Activo del equipo        : '. "$activo_equipo"."\r\n" .
                        'Tipo de equipo           : '. "$tipo_equipo" . "\r\n" .
                        'Dirección IP             : '. "$dir_ip". "\r\n" .
                        'Dirección Mac            : '. "$dir_mac". "\r\n" .
                        'Punto de red             : '. "$punto_de_red". "\r\n" .
                        'Usuario del equipo       : '. "$usuario". "\r\n" .
                        'departamento             : '. "$departamento". "\r\n" .
                        'Bloque                   : '. "$bloque". "\r\n" .
                        'Piso                     : '. "$piso". "\r\n" .
                        'Ubicación                : '. "$cubiculo". "\r\n" .
                        'Dirección ip sw          : '. "$dir_ip_sw". "\r\n" .
                        'Puerto en el sw          : '. "$puerto_sw". "\r\n" .
                        'Vlan Puerto en el sw     : '. "$vlan_puerto_sw". "\r\n" . "\r\n" .
                        'Este E-mail es enviado automáticamente desde el sistema de inventario de equipos.' ;//Mensaje de 2 lineas
              $cabeceras = 'From: Sistema de invientario de equipos <weromero@uninorte.edu.co>'. "\r\n" . //La direccion de correo desde donde supuestamente se envió 'From: weromero@uninorte.edu.co'
              'Reply-To: weromero@uninorte.edu.co' . "\r\n" . //La direccion de correo a donde se responderá (cuando el recepto haga click en RESPONDER)
              'X-Mailer: PHP/' . phpversion();  //información sobre el sistema de envio de correos, en este caso la version de PHP
              mail($para, $titulo, utf8_decode($mensaje), $cabeceras,$Cc);
          }
      ?>
<!-- ******************************************************************** FIN ENVIAR CORREO EQUIPO NUEVO **************************************************************************** -->

<!-- ******************************************************************** INICIO ENVIAR EQUIPO NUEVO A WINSTON ********************************************************************** -->
      <?php
          if( isset($_POST['enviar_correo_a_mi']) ) {
          $conexion = mysql_connect($server,$username,$password);
          mysql_select_db($database);

          $activo_equipo = $_POST['activo_equipo'];

          $query = "SELECT activo_equipo, tipo_equipo, marca_equipo, modelo_equipo, activo_mon, estado_equipo,
          dir_ip, dir_mac, punto_de_red, vlan_puerto_sw, dir_ip_sw, puerto_sw, f_ult_actualiza,
          bloque, piso, departamento, cubiculo, responsable, usuario, ext_tel, observaciones FROM hardware WHERE activo_equipo='$activo_equipo'";

          $resultado = mysql_query($query,$conexion);
          $datos = mysql_num_rows($resultado);
          $registro = mysql_fetch_array($resultado);

          $activo_equipo = $registro['activo_equipo'];
          $tipo_equipo = $registro['tipo_equipo'];
          $dir_ip = $registro['dir_ip'];
          $dir_mac = $registro['dir_mac'];
          $punto_de_red = $registro['punto_de_red'];
          $vlan_puerto_sw = $registro['vlan_puerto_sw'];
          $dir_ip_sw = $registro['dir_ip_sw'];
          $puerto_sw = $registro['puerto_sw'];

          $bloque = $registro['bloque'];
          $piso = $registro['piso'];
          $departamento = $registro['departamento'];
          $cubiculo = $registro['cubiculo'];
          $usuario = $registro['usuario'];

              $para .= 'weromero@uninorte.edu.co'.',';
              $titulo = 'Reserva de ip EQUIPO NUEVO :  ' . "$activo_equipo";
              $mensaje = 'Favor hacer reserva de ip a este equipo NUEVO : '. "\r\n" . "\r\n" .
                        'Activo del equipo        : '. "$activo_equipo"."\r\n" .
                        'Tipo de equipo           : '. "$tipo_equipo" . "\r\n" .
                        'Dirección IP             : '. "$dir_ip". "\r\n" .
                        'Dirección Mac            : '. "$dir_mac". "\r\n" .
                        'Punto de red             : '. "$punto_de_red". "\r\n" .
                        'Usuario del equipo       : '. "$usuario". "\r\n" .
                        'departamento             : '. "$departamento". "\r\n" .
                        'Bloque                   : '. "$bloque". "\r\n" .
                        'Piso                     : '. "$piso". "\r\n" .
                        'Ubicación                : '. "$cubiculo". "\r\n" .
                        'Dirección ip sw          : '. "$dir_ip_sw". "\r\n" .
                        'Puerto en el sw          : '. "$puerto_sw". "\r\n" .
                        'Vlan Puerto en el sw     : '. "$vlan_puerto_sw". "\r\n" . "\r\n" .
                        'Este E-mail es enviado automáticamente desde el sistema de inventario de equipos.' ;//Mensaje de 2 lineas
              $cabeceras = 'From: Sistema de invientario de equipos <weromero@uninorte.edu.co>'. "\r\n" . //La direccion de correo desde donde supuestamente se envió 'From: weromero@uninorte.edu.co'
              'Reply-To: weromero@uninorte.edu.co' . "\r\n" . //La direccion de correo a donde se responderá (cuando el recepto haga click en RESPONDER)
              'X-Mailer: PHP/' . phpversion();  //información sobre el sistema de envio de correos, en este caso la version de PHP
              mail($para, $titulo, utf8_decode($mensaje), $cabeceras,$Cc);
          }
      ?>
<!-- ******************************************************************** FIN ENVIAR CORREO EQUIPO NUEVO **************************************************************************** -->

<!--  **************************************************** INFORMACION DEL EQUIPO  ***************************************************************************************** -->
    <?php
      if( $detalle == false){
    ?>
      <form method="post" action="">
          <div class="row">
            <h4>Informacion del equipo</h4>
            <div class="columns large-2">
              <label for="activo_equipo">Activo CPU</label>
              <input type="text" name="activo_equipo" id="activo_equipo" style="height: auto; font-size:20px; font-weight:bold; width: 100%;" autofocus=true value="<?php echo $activo_equipo; ?>" placeholder="Obligatorio activo equipo">
            </div>

            <div class="columns large-2">
              <label for="activo_equipo">Activo CPU</label>
              <input type="submit" name="consultar" id="consultar" value="Consultar" class="button">
            </div>

            <div class="columns large-4">
              <label for="tipo_equipo">Tipo de equipo. Pc / Impresora / Mac</label>
              <input type="text" name="tipo_equipo" id="tipo_equipo" value="<?php echo $tipo_equipo;?>" placeholder="Obligatorio tipo de equipo" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>

            <div class="columns large-4">
              <label for="marca_equipo">Marca del equipo.</label>
              <input type="text" name="marca_equipo" id="marca_equipo" value="<?php echo $marca_equipo; ?>" placeholder="Obligatorio marca del equipo" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>
          </div>

          <div class="row">
            <div class="columns large-4">
              <label for="modelo_equipo">Modelo del equipo.</label>
              <input type="text" name="modelo_equipo" id="modelo_equipo" value="<?php echo $modelo_equipo; ?>" placeholder="Obligatorio modelo del equipo" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>

            <div class="columns large-4">
              <label for="activo_mon">Activo del monitor.</label>
              <input type="text" name="activo_mon" id="activo_mon" value="<?php echo $activo_mon; ?>">
            </div>

            <div class="columns large-4">
              <label for="activo_equipo">Estado del equipo (Activo - De baja) </label>
              <input type="text"; name="estado_equipo" id="estado_equipo" value="<?php echo $estado_equipo; ?>" placeholder="Obligatorio estado del equipo" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>
          </div>
<!--  ******************************************* FIN DE INFORMACION DEL EQUIPO  **************************************************************************** -->

<!-- ******************************************** INFORMACION DE RED DEL EQUIPO *********************************************************** 68-5b-35-97-ad-fd -->
          <div class="row">
            <h4> Información de red del equipo. Ip - Mac - Punto de red.</h4>
            <div class="columns large-2">
              <label for="dir_ip">Dirección Ip el pc</label>
              <input type="text" name="dir_ip" id="dir_ip" style="height: auto; color: red; font-size:16px; font-weight:bold; width: 100%;" pattern="^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$" value="<?php echo $dir_ip; ?>" placeholder="Obligatorio ip del equipo">
            </div>

            <div class="columns large-3">
              <label for="dir_mac">Dirección Mac del pc</label>
              <input type="text" name="dir_mac" id="dir_mac" style="text-transform:uppercase;" style="height: auto; color: red; font-size:16px; font-weight:bold; width: 100%;" value="<?php echo $dir_mac; ?>" placeholder="Obligatorio Mac" style="text-transform:uppercase;">

                <?php

                    $dir_mac = $_POST["dir_mac"];
                    $activo_equipo = $_POST["activo_equipo"];

                    $conexion = mysql_connect($server,$username,$password);
                    mysql_select_db($database);

                    $query = "SELECT activo_equipo, tipo_equipo, marca_equipo, modelo_equipo, activo_mon, estado_equipo,
                                     dir_ip, dir_mac, punto_de_red, vlan_puerto_sw, dir_ip_sw, puerto_sw, f_ult_actualiza,
                                     bloque, piso, departamento, cubiculo, responsable, usuario, ext_tel, observaciones FROM hardware WHERE dir_mac='$dir_mac' and activo_equipo <> '$activo_equipo' and dir_mac <> '' and dir_mac <> 'NO TIENE' ";
                    $resultado = mysql_query($query,$conexion);
                    $datos = mysql_num_rows($resultado);
                    $registro = mysql_fetch_array($resultado);

                    if(mysql_num_rows($resultado)>=1 and 'activo_equipo' <> $activo_equipo)
                    {

                      //  echo $datos;
                      //  echo "$registro[activo_equipo] <br>";
                      //  echo "$registro[dir_ip] <br>";
                        echo '<script language="javascript">alert("Dirección Mac duplicada, ya esta registrada en el sistema. con el activo : '.$registro[activo_equipo].'");</script>';
                        //echo '<script language="javascript">javascript:history.go(-1);</script>';

                    }
              ?>

            </div>

            <div class="columns large-2">
              <label for="punto_red">Punto de red.</label>
              <input type="text" name="punto_de_red" id="punto_de_red" value="<?php echo $punto_de_red;?>" placeholder="Obligatorio punto de red" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">

                <?php

                    $punto_de_red = $_POST["punto_de_red"];
                    $activo_equipo = $_POST["activo_equipo"];

                    $conexion = mysql_connect($server,$username,$password);
                    mysql_select_db($database);

                    $query = "SELECT activo_equipo, tipo_equipo, marca_equipo, modelo_equipo, activo_mon, estado_equipo,
                                     dir_ip, dir_mac, punto_de_red, vlan_puerto_sw, dir_ip_sw, puerto_sw, f_ult_actualiza,
                                     bloque, piso, departamento, cubiculo, responsable, usuario, ext_tel, observaciones FROM hardware WHERE punto_de_red='$punto_de_red' and activo_equipo <> '$activo_equipo' and punto_de_red <> '' and punto_de_red <> 'NO TIENE'";
                    $resultado = mysql_query($query,$conexion);
                    $datos = mysql_num_rows($resultado);
                    $registro = mysql_fetch_array($resultado);

                    if(mysql_num_rows($resultado)>=1 and 'activo_equipo' <> $activo_equipo)
                    {

                      //  echo $datos;
                      //  echo "$registro[activo_equipo] <br>";
                      //  echo "$registro[dir_ip] <br>";
                        echo '<script language="javascript">alert("Punto de red duplicado, ya esta registrado en el sistema. con el activo : '.$registro[activo_equipo].'");</script>';
                        //echo '<script language="javascript">javascript:history.go(-1);</script>';

                    }
                  ?>
            <!--  <input type="submit" name="consultar_punto_de_red" id="consultar_punto_de_red" value="Consultar" class="button">  -->
            </div>

            <div class="columns large-2">
              <label for="punto_red">Consultar</label>
              <input type="submit" name="consultar_punto_de_red" id="consultar_punto_de_red" value="Consultar" class="button">
            </div>

            <div class="columns large-3">
              <label for="dir_ip_sw">Dirección Ip del sw.</label>
              <input type="text" name="dir_ip_sw" id="dir_ip_sw" value="<?php echo $dir_ip_sw; ?>" placeholder="Suministrada por el sistema">
            </div>
          </div>

          <div class="row">
            <div class="columns large-2">
              <label for="puerto_sw">Puerto del sw.</label>
              <input type="text" name="puerto_sw" id="puerto_sw" value="<?php echo $puerto_sw; ?>"  placeholder="Suministrado por el sistema" style="text-transform:uppercase;">
            </div>

            <div class="columns large-2">
              <label for="vlan">Vlan.</label>
              <input type="text" name="vlan_puerto_sw" id="vlan_puerto_sw" value="<?php echo $vlan_puerto_sw;?>" placeholder="Suministrada por el sistema">
            </div>

            <div class="columns large-3">
              <label for="ubicacion_p_red">Ubicación punto de red</label>
              <input type="text" name="ubicacion_p_red" id="ubicacion_p_red" value="<?php echo $ubicacion_p_red;?>" placeholder="Suministrada por el sistema" style="text-transform:uppercase;">
            </div>

            <div class="columns large-2">
              <label for="modificar_punto_de_red">Modificar</label>
              <input type="submit" name="modificar_punto_de_red" id="modificar_punto_de_red" value="Modificar" class="button">
            </div>

            <div class="columns large-3">
              <label for="f_ult_actualiza">F. Ult. Actualización.(dd/mm/aaaa)</label>
              <input type="date" name="f_ult_actualiza" id="f_ult_actualiza" value="<?php echo $f_ult_actualiza; ?>" placeholder="Suministrada por el sistema">
            </div>
          </div>
<!-- ******************************************** INFORMACION DE RED DEL EQUIPO ****************************** -->

<!-- ******************************************** UBICACION DEL EQUIPO ************************************ -->

          <div class="row">
            <h4>Informacion de la ubicación del equipo - Cubiculo</h4>
            <div class="columns large-3">
              <label for="bloque">Bloque</label>
              <input type="text" name="bloque" id="bloque" value="<?php echo $bloque; ?>" placeholder="Obligatorio bloque " style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>

            <div class="columns large-2">
              <label for="piso">Piso</label>
              <input type="text" name="piso" id="piso"  value="<?php echo $piso; ?>" placeholder="Obligatorio piso" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>

            <div class="columns large-3">
              <label for="departamento">Departamento</label>
              <input type="text" name="departamento" id="departamento" value="<?php echo $departamento; ?>" placeholder="Obligatorio departamento" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>

            <div class="columns large-4">
              <label for="cubiculo">Cubiculo</label>
              <input type="text" name="cubiculo" id="cubiculo" value="<?php echo $cubiculo; ?>" placeholder="Obligatorio cubiculo" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>
          </div>

          <div class="row">
            <div class="columns large-4">
              <label for="responsable">Responsable</label>
              <input type="text" name="responsable" id="responsable" value="<?php echo $responsable; ?>" placeholder="Obligatorio responsable del equipo" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>

            <div class="columns large-4">
              <label for="usuario">Usuario</label>
              <input type="text" name="usuario" id="usuario" value="<?php echo $usuario; ?>" placeholder="Obligatorio usuario del equipo" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>

            <div class="columns large-4">
              <label for="ext_tel">Extension telefónica </label>
              <input type="text" name="ext_tel" id="ext_tel" value="<?php echo $ext_tel; ?>" placeholder="Obligatorio ext telefonica">
            </div>

            <div class="columns large-12">
              <label for="observaciones">Observaciones </label>
              <input type="text" name="observaciones" id="observaciones" value="<?php echo $observaciones; ?>" style="text-transform:uppercase;">
            </div>
          </div>

          <input type="submit" name="ingresar" id="ingresar" value="Ingresar nuevo equipo" class="button">
          <input type="submit" name="modificar" id="modificar" value="Guardar modificación" class="button">
          <input type="submit" name="enviar_correo_equipo_reubicado" id="enviar_correo_equipo_reubicado" value="Enviar correo a Linea 123 por reubicacion" class="button">
          <input type="submit" name="enviar_correo_equipo_nuevo" id="enviar_correo_equipo_nuevo" value="Enviar correo a Linea 123 por equipo nuevo" class="button">
          <input type="submit" name="enviar_correo_a_mi" id="enviar_correo_a_mi" value="Enviar correo a Winston." class="button">
          <input type="button" name="limpiar_forma" id="limpiar_forma" onClick="limpiar_forma()" value="Consultar otro equipo" class="button">
        </form>


      <!--******************************************** FIN DE TODOS CAMPOS DE LA CONSULTA DEL ACTIVO ************************************* -->
    <?php
      }
    ?>

    </div>
  </div>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();

    $('#dir_ip').keypress(function(e){
      if (e.which==13){
        e.preventDefault();
        revisar_ip_duplicada();
      }
    });

  </script>
</body>
</html>
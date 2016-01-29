<!doctype html>
<!doctype html>
<head>
  <LINK REL="SHORTCUT ICON" HREF="uninorte.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Consultar Estado Equipo</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/consultar.js"></script>
</head>
<!-- <html class="no-js" lang="en">
 --><img style="width: 303px; height: 146px margin: -55px -216px -112px -140px;" src="images/jpg/logo.jpg" alt="Logo Universidad del Norte."/>
  <body>
  <nav class="top-bar" data-topbar>

    <section class="top-bar-section">
      <!-- Right Nav Section  menu lado derecho-->
      <ul class="left">
        <li><a href="#" text-decoration="none"><strong>INFORMACIÓN UBICACIÓN DEL EQUIPO<strong></a></li>
      </ul>
    </section>

    <section class="top-bar-section">
      <!-- Right Nav Section  menu lado derecho-->
      <ul class="right">
        <li><a href="index.html"><strong>INICIO<strong></a></li>
      </ul>
    </section>
  </nav>

  <br>

  <body>
    <br><br><br>
        <div class="centrado large-2" id="centrado">
          <input type="tel" name="telefono" id="txtextension" placeholder="Digitar Extensión" class="restringir columns solonum centrado" required><br><br>
          <input type="button" name="btnconsultar" id="btnconsultar" value="Consultar Extensión" class="button">
        </div>
      <br>
        <div id="informacion" class="container hide">
          <div id="capaf">
            &nbsp;
          </div>
          <div class="inputs">
            <strong>Punto de Voz</strong><br>
            <input id="txtpunto_de_voz" type="text" placeholder="Número de Directorio" class="centrado large-2 mayusculas">
            <strong>Dirección Alveolo</strong><br>
            <input id="txtdir_alveolo" type="text" placeholder="Dirección Alveolo" class="centrado columns large-3">
            <strong>Tipo de Terminal</strong><br>
            <input id="txttipo_terminal" type="text" placeholder="Tipo de Terminal" class="centrado columns large-3">
          </div>
          <div class="inputs">
            <strong>Apellido de Directorio</strong><br>
            <input id="txtapellido_directorio" type="text" placeholder="Apellido Directorio" class="centrado columns large-3 mayusculas">
            <strong>Placa de Interfaz</strong><br>
            <input id="txtdir_placa_interfaz" type="text" placeholder="Dirección Placa Interfaz" class="centrado columns large-3">
            <strong>Activo</strong><br>
            <input id="txtactivo" type="text" placeholder="Número de Activo" class="centrado columns large-3">
          </div>
          <div class="inputs">
            <strong>Nombre de Directorio</strong><br>
            <input id="txtnombre_directorio" type="text" placeholder="Nombre Directorio" class="centrado columns large-3 mayusculas">
            <strong>Dirección del Equipo</strong><br>
            <input id="txtdir_equipo" type="text" placeholder="Dirección Equipo" class="centrado columns large-3 mayusculas">
            <strong>Ubicación</strong><br>
            <input id="txtcubiculo" type="text" placeholder="Cubículo" class="centrado columns large-3 mayusculas">
          </div>
          <div class="inputs">
            <strong>Centro de Costos</strong><br>
            <input id="txtcentro_de_costos" type="text" placeholder="Centro de Informacón" class="centrado columns large-3 mayusculas">
            <strong>Dirección IP</strong><br>
            <input id="txtdireccion_ip" type="text" placeholder="Dirección IP" class="centrado columns large-3">
            <strong>MAC</strong><br>
            <input id="txtmac" type="text" placeholder="MAC" class="centrado columns large-3">
          </div>
        </div>
      <br><br><br>
    <div id="tabla" class="row">

    </div>
  </body>
</html>
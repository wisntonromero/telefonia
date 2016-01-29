<!doctype html>
<head>
  <LINK REL="SHORTCUT ICON" HREF="uninorte.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Consultar Estado Equipo</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/crear_registro.js"></script>
</head>
<body>
	<img style="width: 303px; height: 146px margin: -55px -216px -112px -140px;" src="images/jpg/logo.jpg" alt="Logo Universidad del Norte."/>
  <body>
  <nav class="top-bar" data-topbar>

    <section class="top-bar-section">
      <!-- Right Nav Section  menu lado derecho-->
      <ul class="left">
        <li><a href="#" text-decoration="none"><strong>AGREGAR REGISTRO/REGLETA<strong></a></li>
      </ul>
    </section>

    <section class="top-bar-section">
      <ul class="right">
        <li><a href="index.html"><strong>INICIO<strong></a></li>
      </ul>
    </section>
  </nav><br>

   <div id="radiobuttons">
      <input type="radio" id="r1" name="rbneditar" value="registro">&nbsp;<strong>Crear Registro<strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" id="r2" name="rbneditar" value="regleta">&nbsp;Crear Regleta
   </div>
	   
  <div id="crear_registro" class="centrado large-2 hide">
    <form>
      <h5><strong>Crear Nuevo Registro</strong></h5>
      <input type="text" id="txtnombre"  class="centrado  mayusculas" placeholder="Nombre de Registro" required autofocus>
      <select id="cbxpadre" class="registros"><option value="-1">-Seleccione Registro Padre-</option></select>
      <input type="text" id="txtubicacion"  class="centrado mayusculas" placeholder="Ubicacion de Registro" required>
      <input type="button" id="btncrear_registro" class="button" value="Crear Registro">
    </form>

  </div>

  <div id="crear_regleta" class="centrado large-2 hide">
    <form>
      <h5><strong>Crear Nueva Regleta</strong></h5>
      <input type="text" id="txtnom_regleta"  class="centrado  mayusculas" placeholder="Nombre de Regleta" required autofocus>
      <select id="cbxregistro_padre" class="registros"><option value="-1">-Seleccione Registro Padre-</option></select>
      <input type="text" id="txtnum_puertos"  class="solonum centrado" placeholder="NÚMERO DE PUERTOS" required>
      <input type="button" id="btncrear_regleta" class="button" value="Crear Regleta">
    </form>

  </div>
  <h5 id="msj" class="error"></h5>
</body>
</html>
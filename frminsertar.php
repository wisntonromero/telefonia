<html>
<head>
  <link rel="SHORTCUT ICON" href="uninorte.ico" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Agregar Extensión</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <script src="js/jquery.js"></script>
 <script src="js/insertar.js"></script> 
  <img style="width: 303px; height: 146px margin: -55px -216px -112px -140px;" src="images/jpg/logo.jpg" alt="Logo Universidad del Norte."/>
  <body>
    <nav class="top-bar" data-topbar>

    <section class="top-bar-section">
      <!-- Right Nav Section  menu lado derecho-->
      <ul class="left">
        <li><a href="#" text-decoration="none"><strong>AGREGAR NUEVA EXTENSIÓN<strong></a></li>
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
  </head>
</head>
<body>
<br><br>
      <div id="divsaltos" class="centrado large-2 hide">
        <input type="text" id="txtsaltos" placeholder="Digitar Cantidad de Saltos" class="solonum centrado">
        <input type="button" id="btnsaltos" class="button" value="Agregar Saltos">
      </div>  
        <div class="centrado large-2 hide" id="centrado">
          <input type="text" name="txtextension1" id="txtextension1" placeholder="Digitar Extensión" class="restringir columns centrado solonum large-2"><!-- <br><br><br><br> -->
          <input type="button" name="btninsertar1" id="btninsertar1" value="Agregar Extensión" class="button">
          <p></p>
        </div>
  
        <div id="informacion" class="container hide">
          <div id="capaf">
            &nbsp;
          </div>
          <div class="inputs">
            <input id="txtnumero_directorio" type="text" placeholder="Número de Directorio" class="centrado large-2 solonum" required>
            <input id="txtdir_alveolo" type="text" placeholder="Dirección Alveolo" class="centrado columns large-3 solonum" required>
            <select id="cbxtipo_terminal" ></select>
          </div>
          <div class="inputs">
            <input id="txtapellido_directorio" type="text" placeholder="Apellido Directorio" class="centrado columns large-3" required>
            <input id="txtdir_placa_interfaz" type="text" placeholder="Dirección Placa Interfaz" class="centrado columns large-3 solonum" required>
            <input id="txtactivo" type="text" placeholder="Número de Activo" class="centrado columns large-3 solonum" required>
          </div>
          <div class="inputs">
            <input id="txtnombre_directorio" type="text" placeholder="Nombre Directorio" class="centrado columns large-3" required>
            <input id="txtdir_equipo" type="text" placeholder="Dirección Equipo" class="centrado columns large-3 solonum" required>
            <input id="txtcubiculo" type="text" placeholder="Cubículo" class="centrado columns large-3" required> 
          </div>
          <div class="inputs">
            <input id="txtdireccion_ip" type="text" placeholder="Dirección IP" class="centrado columns large-3" required>
            <input id="txtmac" type="text" placeholder="MAC" class="centrado columns large-3" required>
            <input id="txtcentro_de_costo" type="text" placeholder="Centro de Costos" class="centrado columns large-3" required> 
          </div>
        </div>

        <div id="capa3" class="cap hide">
          <div id="salto1" class="saltos">
            <h3><strong>Salto 1</strong></h3>
            <label>Nombre del Registro</label>
            <select id="cbxregistro1" class="registros">
              <option value="-1">-Seleccione Registro-</option>
            </select>
            <label>Regleta de Entrada</label>
            <select id="cbxregletas1">
            </select>
            <label>Puerto de Entrada</label>
           <select id="cbxpuerto_in1"></select> 
            <label>Regleta de Salida</label>
            <select id="cbxregletas11" class="caja ">
            </select>
              <label>Puerto de Salida</label>
           <select id="cbxpuerto_out1"></select> 
          </div>

          <div id="salto2" class="saltos">
            <h3><strong>Salto 2</strong></h3>
            <label>Nombre del Registro</label>
            <select id="cbxregistro2" class="registros">
              <option value="-1">-Seleccione Registro-</option>
            </select>
            <label>Regleta de Entrada</label>
            <select id="cbxregletas2" class="caja ">
            </select>
              <label>Puerto de Entrada</label>
           <select id="cbxpuerto_in2"></select> 
          <label>Regleta de Salida</label>
            <select id="cbxregletas22" class="caja ">
            </select>
              <label>Puerto de Salida</label>
           <select id="cbxpuerto_out2"></select> 
          </div>

          <div id="salto3" class="saltos">
            <h3><strong>Salto 3</strong></h3>
            <label>Nombre del Registro</label>
            <select id="cbxregistro3" class="registros">
              <option value="-1">-Seleccione Registro-</option>
            </select>
            <label>Regleta de Entrada</label>
            <select id="cbxregletas3" class="caja ">
            </select>
              <label>Puerto de Entrada</label>
           <select id="cbxpuerto_in3"></select> 
          <label>Regleta de Salida</label>
            <select id="cbxregletas33" class="caja ">
            </select>
              <label>Puerto de Salida</label>
           <select id="cbxpuerto_out3"></select> 
          </div>

          <div id="salto4" class="saltos">
            <h3><strong>Salto 4</strong></h3>
            <label>Nombre del Registro</label>
            <select id="cbxregistro4" class="registros">
              <option value="-1">-Seleccione Registro-</option>
            </select>
            <label>Regleta de Entrada</label>
            <select id="cbxregletas4" class="caja ">
            </select>
              <label>Puerto de Entrada</label>
           <select id="cbxpuerto_in4"></select> 
          <label>Regleta de Salida</label>
            <select id="cbxregletas44" class="caja ">
            </select>
              <label>Puerto de Salida</label>
           <select id="cbxpuerto_out4"></select> 
          </div>

          <div id="salto5" class="saltos">
            <h3><strong>Salto 5</strong></h3>
            <label>Nombre del Registro</label>
            <select id="cbxregistro5" class="registros">
              <option value="-1">-Seleccione Registro-</option>
            </select>
            <label>Regleta de Entrada</label>
            <select id="cbxregletas5" class="caja ">
            </select>
              <label>Puerto de Entrada</label>
           <select id="cbxpuerto_in5"></select> 
          <label>Regleta de Salida</label>
            <select id="cbxregletas55" class="caja ">
            </select>
              <label>Puerto de Salida</label>
           <select id="cbxpuerto_out5"></select> 
          </div>
            
        </div>

        <div id="capa4" class="cap hide">
          <div id="salto6" class="saltos">
            <h3><strong>Salto 6</strong></h3>
            <label>Nombre del Registro</label>
            <select id="cbxregistro6" class="registros">
              <option value="-1">-Seleccione Registro-</option>
            </select>
            <label>Regleta de Entrada</label>
            <select id="cbxregletas6">
            </select>
            <label>Puerto de Entrada</label>
           <select id="cbxpuerto_in6"></select> 
            <label>Regleta de Salida</label>
            <select id="cbxregletas66" class="caja ">
            </select>
              <label>Puerto de Salida</label>
           <select id="cbxpuerto_out6"></select> 

          </div>

          <div id="salto7" class="saltos">
            <h3><strong>Salto 7</strong></h3>
            <label>Nombre del Registro</label>
            <select id="cbxregistro7" class="registros">
              <option value="-1">-Seleccione Registro-</option>
            </select>
            <label>Regleta de Entrada</label>
            <select id="cbxregletas7" class="caja ">
            </select>
              <label>Puerto de Entrada</label>
           <select id="cbxpuerto_in7"></select> 
          <label>Regleta de Salida</label>
            <select id="cbxregletas77" class="caja ">
            </select>
              <label>Puerto de Salida</label>
           <select id="cbxpuerto_out7"></select> 
          </div>

          <div id="salto8" class="saltos">
            <h3><strong>Salto 8</strong></h3>
            <label>Nombre del Registro</label>
            <select id="cbxregistro8" class="registros">
              <option value="-1">-Seleccione Registro-</option>
            </select>
            <label>Regleta de Entrada</label>
            <select id="cbxregletas8" class="caja ">
            </select>
              <label>Puerto de Entrada</label>
           <select id="cbxpuerto_in8"></select> 
          <label>Regleta de Salida</label>
            <select id="cbxregletas88" class="caja ">
            </select>
              <label>Puerto de Salida</label>
           <select id="cbxpuerto_out8"></select> 
          </div>

          <div id="salto9" class="saltos">
            <h3><strong>Salto 9</strong></h3>
            <label>Nombre del Registro</label>
            <select id="cbxregistro9" class="registros">
              <option value="-1">-Seleccione Registro-</option>
            </select>
            <label>Regleta de Entrada</label>
            <select id="cbxregletas9" class="caja ">
            </select>
              <label>Puerto de Entrada</label>
           <select id="cbxpuerto_in9"></select> 
          <label>Regleta de Salida</label>
            <select id="cbxregletas99" class="caja ">
            </select>
              <label>Puerto de Salida</label>
           <select id="cbxpuerto_out9"></select> 
          </div>

          <div id="salto10" class="saltos">
            <h3><strong>Salto 10</strong></h3>
            <label>Nombre del Registro</label>
            <select id="cbxregistro10" class="registros">
              <option value="-1">-Seleccione Registro-</option>
            </select>
            <label>Regleta de Entrada</label>
            <select id="cbxregletas10" class="caja ">
            </select>
              <label>Puerto de Entrada</label>
           <select id="cbxpuerto_in10"></select> 
          <label>Regleta de Salida</label>
            <select id="cbxregletas100" class="caja ">
            </select>
              <label>Puerto de Salida</label>
           <select id="cbxpuerto_out10"></select> 
          </div>
            
        </div>
        <div id="boton" class="container hide">
            <input type="button" id="guardar" class="button" value="Guardar">
        </div>


<strong><h5 class="error"></h4></strong>
</body>
</html>
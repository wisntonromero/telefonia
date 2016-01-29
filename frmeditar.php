<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Editar Información Telefonía</title>
    <LINK REL="SHORTCUT ICON" HREF="uninorte.ico" />
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/editar.js"></script>
    <img style="width: 303px; height: 146px margin: -55px -216px -112px -140px;" src="images/jpg/logo.jpg" alt="Logo Universidad del Norte."/>
  </head>
  <body>
    <nav class="top-bar" data-topbar>

    <section class="top-bar-section">
      <!-- Right Nav Section  menu lado derecho-->
      <ul class="left">
        <li><a href="#" text-decoration="none"><strong>EDITAR INFORMACIÓN TELEFONIA<strong></a></li>
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
      <br>
      <div id="radiobuttons">
          <input type="radio" id="r1" name="rbneditar" value="registro">&nbsp;<strong>Editar Registro<strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" id="r2" name="rbneditar" value="regleta">&nbsp;Editar Regleta  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" id="r3" name="rbneditar" value="extension">&nbsp;Editar Extensión
      </div>

      <div id="centrado1" class="centrado large-2 hide">
        <div id="capa11">
            <select id="padre" class="caja registros mayusculas">
              <option value="-1">-Seleccione Registro-</option>
          </select>
          <input type="button" id="btnconsulta_registro" class="button" value="Consultar Registro">
        </div>
        <div id="capa22">
            <select id="regletas" class="mayusculas">
          </select>
          <input type="button" id="btnconsulta_regleta" class="button" value="Consultar Regleta">
        </div>
          <div id="capa33">
            <input type="tel" name="telefono" id="txtconEditar" class="restringir solonum centrado columns large-3" placeholder="Digitar Extensión">
            <input type="button" id="btnconsulta_extension" class="button" value="Consultar Extensión">
          </div>
          
          <h4 id="msj" class= "error"></h4>
      </div>

      <div id="capas" class="hide">
        <div id="capa1" class="capas">
            <label>Nombre del Registro</label>
            <input id="txtnomregistro" type="text" class="informulario columns large-3">
              <label>Ubicación del Registro</label>
            <input id="txtubiregistro" type="text" class="informulario columns large-3">
              <label>Nombre del Registro Padre</label>
            <select id="cbxregistroeditar" class="registros"></select>
              <label>Estado</label>
            <select id="estado_registro">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
            <input type="button" id="btnActualizarRegistro" class="button" value="Actualizar Registro">
        </div>
        
        <div id="capa2" class="capas">
              <label>Nombre de la Regleta</label>
            <input id="txtnomregleta" type="text" class="informulario columns large-3">
              <label>Nombre del Registro Padre</label>
            <select id="cbxregistros" class="registros"></select>
              <label>Número de Puertos</label>
            <input id="txtnumpuertos" type="text" class="informulario columns large-3 solonum">
              <label>Estado</label>
            <select id="estado_regleta">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
            <input type="button" id="btnActualizarRegleta" class="button" value="Actualizar Regleta">
        </div>

          <div id="informacion" class="container hide">
          <div id="capaf">
            &nbsp;
          </div>
          <div class="inputs">
            <strong>Punto de Voz</strong><br>
            <input id="txtpunto_de_voz" type="text" placeholder="Número de txtpunto_de_voz" class="centrado large-2" required>
            <strong>Dirección Alveolo</strong><br>
            <input id="txtdir_alveolo" type="text" placeholder="Dirección Alveolo" class="centrado columns large-3 solonum" required>
            <strong>Tipo de Terminal</strong><br>
             <select id="cbxtipo_terminal" ></select>
           </div>
          <div class="inputs">
            <strong>Apellido de Directorio</strong><br>
            <input id="txtapellido_directorio" type="text" placeholder="Apellido Directorio" class="centrado columns large-3" required>
            <strong>Placa de Interfaz</strong><br>
            <input id="txtdir_placa_interfaz" type="text" placeholder="Dirección Placa Interfaz" class="centrado columns large-3 solonum" required>
            <strong>Activo</strong><br>
            <input id="txtactivo" type="text" placeholder="Número de Activo" class="centrado columns large-3 solonum" required>
          </div>
          <div class="inputs">
            <strong>Nombre de Directorio</strong><br>
            <input id="txtnombre_directorio" type="text" placeholder="Nombre Directorio" class="centrado columns large-3" required>
            <strong>Dirección del Equipo</strong><br>
            <input id="txtdir_equipo" type="text" placeholder="Dirección Equipo" class="centrado columns large-3" required>
            <strong>Ubicación</strong><br>
            <input id="txtcubiculo" type="text" placeholder="Cubículo" class="centrado columns large-3" required> 
          </div>
          <div class="inputs">
            <strong>Centro de Costos</strong><br>
            <input id="txtcentro_de_costos" type="text" placeholder="Centro de Informacón" class="centrado columns large-3" required> 
            <strong>Dirección IP</strong><br>
            <input id="txtdireccion_ip" type="text" placeholder="Dirección IP" class="centrado columns large-3" required>
            <strong>MAC</strong><br>
            <input id="txtmac" type="text" placeholder="MAC" class="centrado columns large-3" required>
          </div>
        </div>

        <div id="capa3" class="cap">
          <div id="salto1" class="saltos">
            <h3><strong>Salto 1</strong></h3>
            <label>Registro</label>
            <select id="cbxRT1" class="registros"></select>
            <label>Regleta de Entrada</label>
            <select id="cbxRG_in1" ></select>
              <label>Número de Puerto</label>
            <select id="puerto_in1"></select>  
              <label>Estado</label>
            <select id="estado_rg_in1">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
            <label>Regleta de Salida</label>
            <select id="cbxRG_out1" ></select>
              <label>Número de Puerto</label>
            <select id="puerto_out1"></select>
              <label>Estado</label>
            <select id="estado_rg_out1">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
          </div>
          <div id="salto2" class="saltos">
            <h3><strong>Salto 2</strong></h3>
            <label>Registro</label>
            <select id="cbxRT2" class="registros"></select>
            <label>Regleta de Entrada</label>
            <select id="cbxRG_in2" ></select>
              <label>Número de Puerto</label>
              <select id="puerto_in2"></select>
              <label>Estado</label>
            <select id="estado_rg_in2">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
            <label>Regleta de Salida</label>
            <select id="cbxRG_out2" ></select>
              <label>Número de Puerto</label>
            <select id="puerto_out2"></select>
              <label>Estado</label>
            <select id="estado_rg_out2">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
          </div>
          <div id="salto3" class="saltos">
            <h3><strong>Salto 3</strong></h3>
            <label>Registro</label>
            <select id="cbxRT3" class="registros"></select>
            <label>Regleta de Entrada</label>
            <select id="cbxRG_in3" ></select>
              <label>Número de Puerto</label>
            <select id="puerto_in3"></select>
              <label>Estado</label>
            <select id="estado_rg_in3">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
            <label>Regleta de Salida</label>
            <select id="cbxRG_out3" ></select>
              <label>Número de Puerto</label>
            <select id="puerto_out3"></select>
              <label>Estado</label>
            <select id="estado_rg_out3">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
          </div>
          <div id="salto4" class="saltos">
            <h3><strong>Salto 4</strong></h3>
            <label>Registro</label>
            <select id="cbxRT4" class="registros"></select>
            <label>Regleta de Entrada</label>
            <select id="cbxRG_in4" ></select>
              <label>Número de Puerto</label>
            <select id="puerto_in4"></select>
              <label>Estado</label>
            <select id="estado_rg_in4">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
            <label>Regleta de Salida</label>
            <select id="cbxRG_out4" ></select>
              <label>Número de Puerto</label>
            <select id="puerto_out4"></select>
              <label>Estado</label>
            <select id="estado_rg_out4">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
          </div>
          <div id="salto5" class="saltos">
            <h3><strong>Salto 5</strong></h3>
            <label>Registro</label>
            <select id="cbxRT5" class="registros"></select>
            <label>Regleta de Entrada</label>
            <select id="cbxRG_in5" ></select>
              <label>Número de Puerto</label>
              <select id="puerto_in5"></select>
              <label>Estado</label>
            <select id="estado_rg_in5">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
            <label>Regleta de Salida</label>
            <select id="cbxRG_out5" ></select>
              <label>Número de Puerto</label>
              <select id="puerto_out5"></select>
              <label>Estado</label>
            <select id="estado_rg_out5">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
          </div>
        </div>

         <div id="capa4" class="cap">
          <div id="salto6" class="saltos">
            <h3><strong>Salto 6</strong></h3>
            <label>Registro</label>
            <select id="cbxRT6" class="registros"></select>
            <label>Regleta de Entrada</label>
            <select id="cbxRG_in6" ></select>
              <label>Número de Puerto</label>
              <select id="puerto_in6"></select>
              <label>Estado</label>
            <select id="estado_rg_in6">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
            <label>Regleta de Salida</label>
            <select id="cbxRG_out6" ></select>
              <label>Número de Puerto</label>
              <select id="puerto_out6"></select>
              <label>Estado</label>
            <select id="estado_rg_out6">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
          </div>

          <div id="salto7" class="saltos">
            <h3><strong>Salto 7</strong></h3>
            <label>Registro</label>
            <select id="cbxRT7" class="registros"></select>
            <label>Regleta de Entrada</label>
            <select id="cbxRG_in7" ></select>
              <label>Número de Puerto</label>
              <select id="puerto_in7"></select>
              <label>Estado</label>
            <select id="estado_rg_in7">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
            <label>Regleta de Salida</label>
            <select id="cbxRG_out7" ></select>
              <label>Número de Puerto</label>
              <select id="puerto_out7"></select>
              <label>Estado</label>
            <select id="estado_rg_out7">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
          </div>

          <div id="salto8" class="saltos">
            <h3><strong>Salto 8</strong></h3>
            <label>Registro</label>
            <select id="cbxRT8" class="registros"></select>
            <label>Regleta de Entrada</label>
            <select id="cbxRG_in8" ></select>
              <label>Número de Puerto</label>
              <select id="puerto_in8"></select>
              <label>Estado</label>
            <select id="estado_rg_in8">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
            <label>Regleta de Salida</label>
            <select id="cbxRG_out8" ></select>
              <label>Número de Puerto</label>
              <select id="puerto_out8"></select>
              <label>Estado</label>
            <select id="estado_rg_out8">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
          </div>

          <div id="salto9" class="saltos">
            <h3><strong>Salto 9</strong></h3>
            <label>Registro</label>
            <select id="cbxRT9" class="registros"></select>
            <label>Regleta de Entrada</label>
            <select id="cbxRG_in9" ></select>
              <label>Número de Puerto</label>
              <select id="puerto_in9"></select>
              <label>Estado</label>
            <select id="estado_rg_in9">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
            <label>Regleta de Salida</label>
            <select id="cbxRG_out9"></select>
              <label>Número de Puerto</label>
              <select id="puerto_out9"></select>
              <label>Estado</label>
            <select id="estado_rg_out9">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
          </div>

          <div id="salto10" class="saltos">
            <h3><strong>Salto 10</strong></h3>
            <label>Registro</label>
            <select id="cbxRT10" class="registros"></select>
            <label>Regleta de Entrada</label>
            <select id="cbxRG_in10" ></select>
              <label>Número de Puerto</label>
              <select id="puerto_in10"></select>
              <label>Estado</label>
            <select id="estado_rg_in10">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
            <label>Regleta de Salida</label>
            <select id="cbxRG_out10" ></select>
              <label>Número de Puerto</label>
              <select id="puerto_out10"></select>
              <label>Estado</label>
            <select id="estado_rg_out10">
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>
            </select>
          </div>
      </div>
    
      <div id="boton" class="container hide">
        <input type="button" id="btnborrar_salto" class="button" value="Eliminar Salto">
        <input type="button" id="btnActualizarExtension" class="button" value="Actualizar Extensión">
        <input type="button" id="btnagregar_salto" class="button" value="Agregar Salto">
      </div>
    </div>
      <h5 class="error"></h5>
      
  </body>
</html>
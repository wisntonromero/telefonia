$(document).ready(function(){
  $("#centrado").show();
  $("#txtextension1").focus();
	var click=0;
  $(document).keydown(function(event){
    if(event.keyCode==13  && click==0){
      verificar();
    }else if(event.keyCode==13 && click==1){
      saltos();
    }else if(event.keyCode==13 && click==2){
      guardar();
    };
  });

$(".solonum").keypress(function(tecla) {
   if(tecla.charCode < 35 || ((tecla.charCode > 35 && tecla.charCode < 42) || (tecla.charCode > 42 && tecla.charCode < 48)) || tecla.charCode > 57) return false;
 });

  //Validar que el campo txtextension no este vacio
        $('#btninsertar1').click(function(){
          verificar();
        });

//Verifica Cantidad de Saltos 
        $('#btnsaltos').click(function(){
          saltos();
        });

//Botón para Guardar Información de las Extensiones.

        $('#guardar').click(function(){
         guardar();
        });

        //Regresar Todos Campos a sus Valores Iniciales. 
        function limpiar_extensiones(){
          $('#cbxregistro1').val('-1');
          $('#cbxregistro2').val('-1');
          $('#cbxregistro3').val('-1');
          $('#cbxregistro4').val('-1');
          $('#cbxregistro5').val('-1');
          $('#cbxregistro6').val('-1');
          $('#cbxregistro7').val('-1');
          $('#cbxregistro8').val('-1');
          $('#cbxregistro9').val('-1');
          $('#cbxregistro10').val('-1');
          $('#cbxregletas1').find('option').remove();
          $('#cbxregletas2').find('option').remove();
          $('#cbxregletas3').find('option').remove();
          $('#cbxregletas4').find('option').remove();
          $('#cbxregletas5').find('option').remove();
          $('#cbxregletas6').find('option').remove();
          $('#cbxregletas7').find('option').remove();
          $('#cbxregletas8').find('option').remove();
          $('#cbxregletas9').find('option').remove();
          $('#cbxregletas10').find('option').remove();
          $('#cbxregletas11').find('option').remove();
          $('#cbxregletas22').find('option').remove();
          $('#cbxregletas33').find('option').remove();
          $('#cbxregletas44').find('option').remove();
          $('#cbxregletas55').find('option').remove();
          $('#cbxregletas66').find('option').remove();
          $('#cbxregletas77').find('option').remove();
          $('#cbxregletas88').find('option').remove();
          $('#cbxregletas99').find('option').remove();
          $('#cbxregletas100').find('option').remove();
          $('#puerto_in1').find('option').remove();
          $('#puerto_in2').find('option').remove();
          $('#puerto_in3').find('option').remove();
          $('#puerto_in4').find('option').remove();
          $('#puerto_in5').find('option').remove();
          $('#puerto_in6').find('option').remove();
          $('#puerto_in7').find('option').remove();
          $('#puerto_in8').find('option').remove();
          $('#puerto_in9').find('option').remove();
          $('#puerto_in10').find('option').remove();
          $('#puerto_out1').find('option').remove();
          $('#puerto_out2').find('option').remove();
          $('#puerto_out3').find('option').remove();
          $('#puerto_out4').find('option').remove();
          $('#puerto_out5').find('option').remove();
          $('#puerto_out6').find('option').remove();
          $('#puerto_out7').find('option').remove();
          $('#puerto_out8').find('option').remove();
          $('#puerto_out9').find('option').remove();
          $('#puerto_out10').find('option').remove();
          $('#txtnumero_directorio').val('');
          $('#txtapellido_directorio').val('');
          $('#txtnombre_directorio').val('');
          $('#txtdir_alveolo').val('');
          $('#txtdir_placa_interfaz').val('');
          $('#txtdir_equipo').val('');
          $('#cbxtipo_terminal').val('-1');
          $('#txtactivo').val('');
          $('#txtcubiculo').val('');
        };

        function guardar(){
            $.ajax({
                url     : "insertar_extensiones1.php",
                dataType: "text",
                type    : 'post',
                data:{ 
                  saltos   : $('#txtsaltos').val(),
                  ext      : $('#txtextension1').val(),
                    rt1    : $('#cbxregistro1').val(),
                    rt2    : $('#cbxregistro2').val(),
                    rt3    : $('#cbxregistro3').val(),
                    rt4    : $('#cbxregistro4').val(),
                    rt5    : $('#cbxregistro5').val(),
                    rt6    : $('#cbxregistro6').val(),
                    rt7    : $('#cbxregistro7').val(),
                    rt8    : $('#cbxregistro8').val(),
                    rt9    : $('#cbxregistro9').val(),
                    rt10   : $('#cbxregistro10').val(),
                    rg1    : $('#cbxregletas1').val(),
                    rg2    : $('#cbxregletas2').val(),
                    rg3    : $('#cbxregletas3').val(),
                    rg4    : $('#cbxregletas4').val(),
                    rg5    : $('#cbxregletas5').val(),
                    rg6    : $('#cbxregletas6').val(),
                    rg7    : $('#cbxregletas7').val(),
                    rg8    : $('#cbxregletas8').val(),
                    rg9    : $('#cbxregletas9').val(),
                    rg10   : $('#cbxregletas10').val(),
                    rg11   : $('#cbxregletas11').val(),
                    rg22   : $('#cbxregletas22').val(),
                    rg33   : $('#cbxregletas33').val(),
                    rg44   : $('#cbxregletas44').val(),
                    rg55   : $('#cbxregletas55').val(),
                    rg66   : $('#cbxregletas66').val(),
                    rg77   : $('#cbxregletas77').val(),
                    rg88   : $('#cbxregletas88').val(),
                    rg99   : $('#cbxregletas99').val(),
                    rg100  : $('#cbxregletas100').val(),
                    pt1    : $('#cbxpuerto_in1').val(),
                    pt2    : $('#cbxpuerto_in2').val(),
                    pt3    : $('#cbxpuerto_in3').val(),
                    pt4    : $('#cbxpuerto_in4').val(),
                    pt5    : $('#cbxpuerto_in5').val(),
                    pt6    : $('#cbxpuerto_in6').val(),
                    pt7    : $('#cbxpuerto_in7').val(),
                    pt8    : $('#cbxpuerto_in8').val(),
                    pt9    : $('#cbxpuerto_in9').val(),
                    pt10   : $('#cbxpuerto_in10').val(),
                    pt11   : $('#cbxpuerto_out1').val(),
                    pt22   : $('#cbxpuerto_out2').val(),
                    pt33   : $('#cbxpuerto_out3').val(),
                    pt44   : $('#cbxpuerto_out4').val(),
                    pt55   : $('#cbxpuerto_out5').val(),
                    pt66   : $('#cbxpuerto_out6').val(),
                    pt77   : $('#cbxpuerto_out7').val(),
                    pt88   : $('#cbxpuerto_out8').val(),
                    pt99   : $('#cbxpuerto_out9').val(),
                    pt100  : $('#cbxpuerto_out10').val(),

                    num_dir: $('#txtnumero_directorio').val(),
                    ape_dir: $('#txtapellido_directorio').val(),
                    nom_dir: $('#txtnombre_directorio').val(),
                    dir_alveolo: $('#txtdir_alveolo').val(),
                    dir_placa: $('#txtdir_placa_interfaz').val(),
                    dir_equipo: $('#txtdir_equipo').val(),
                    tipo_terminal: $('#cbxtipo_terminal').val(),
                    activo: $('#txtactivo').val(),
                    cubiculo: $('#txtcubiculo').val(),
                    ip: $('#txtdireccion_ip').val(),
                    mac: $('#txtmac').val(),
                    centro_costo: $('#txtcentro_de_costo').val(),
                    
                },
                success:function(datos) {
                   if(datos==1){
                    $('h5').removeClass('error');
                    $('h5').addClass('success');
                    $('h5').html("Extensión Guardada Exitosamente.");
                    $('#capa3').hide();
                    $('#capa4').hide();
                    $('#divsaltos').hide();
                    $('#boton').hide();
                    $('#informacion').hide();
                    $('#centrado').show();
                    $('#txtsaltos').val('');
                    $('#txtextension1').val('');
                    $('#txtextension1').prop('disabled', false);
                    $('#txtextension1').focus();
                    $('#btninsertar1').attr("disabled", false);
                    click = 0;
                   }else{
                    $('h5').removeClass('success');
                    $('h5').addClass('error');
                    $('h5').html("Verifique que Todos los Campos estén Llenos.");
                   }
                },
                error:function() {
                  alert("El servidor no se encuentra disponible.");
                }
              });
          
}

        function tipo_terminal(s){
          $.ajax({
            url     :"importar_tipo_terminal.php",
            type    :'post',
            dataType:"json",
            success:function(data) {
              if(s==1){
                $('#cbxtipo_terminal').append("<option value=-1>-Selecccione Tipo de Terminal-</option>");
              };
                for (var i = 0; i <= data.length - 1; i++) {
                    $('#cbxtipo_terminal').append("<option value="+data[i].codigo+">"+data[i].nombre+"</option>");
                };
            },
            error:function() {
              console.log('Something went wrong', status, err );
            }
          });
        };


        


      function cargar_puertos(campo1,campo2){
        $.ajax({
          url     :"cargar_puertos.php",
          dataType:"json",
          type    :"post",
          data:{ 
           regleta: campo1,
           
          },
          success:function(datos) {
            $("#"+campo2+"").append("<option value='-1'>-Seleccione Puerto-</option>");
            for (var i = 1; i <= datos; i++) {
               $("#"+campo2+"").append("<option value="+i+">"+i+"</option>");
            };
          },
          error:function() {
            
            $("#"+campo2+"").append("<option value='-1'>-Regleta Vacia-</option>");
            
          }
        });
      };








      function puertos(campo1,campo2){
        $.ajax({
          url     :"puertos.php",
          dataType:"json",
          type    :"post",
          data:{ 
           regleta: campo1,
          },
          success:function(datos) {
            for (var i = 1; i < datos.total; i++) {
                $("#"+campo2+" option[value="+datos.puertos[i].puerto+"]").remove();
            };
          },
          error:function() {
            
            console.log('Something went wrong', status, err );
            
          }
        });
      };








//Función Combo Registros.
        function cargar_registros(){
          $.ajax({
            url:"importar_registros.php",
            dataType:"json",
            success:function(data) {
                for (var i = 0; i <= data.length - 1; i++) {
                    $('.registros').append("<option value="+data[i].codigo+" >"+data[i].registro+"</option>");
                };
            },
            error:function() {
              console.log('Something went wrong', status, err );
            }
          });
        };


        function cargar_combo_regletas(campo1,campo2,campo3,sn){
          campo2.find('option').remove();
          $.ajax({
              url:"combo_regletas.php",
              type    : 'post',
              dataType:"json",
              data:{ 
                  registro: campo1,
                  },
              success:function(data) {
                if(sn==1){
                  campo2.append("<option value='-1'>-Seleccione Regleta-</option>");  
                }
                  for (var i = 0; i <= data.length - 1; i++) {
                      campo2.append("<option value="+data[i].codigo+">"+data[i].regleta+"</option>");
                  };
                if(sn!=1){  
                  campo2.val(campo3);
                }
              },
              error:function() {
                campo2.append("<option value='-1'>-Registro Vacio-</option>");
              }
          });
        }
        
        /*function verificar(){
          ext = $('#txtextension1').val();
            if($("#txtextension1").val().length == 0) {
               $('h5').removeClass('success');
               $('h5').addClass('error');
               $('h5').html("<strong>Digite una extensiòn.</strong>");
               $('#txtextension1').val('');
               $('#txtextension1').focus();
                return false;  
            }else{
              $('h5').html("");
                $.ajax({
                    url     :"verificar.php",
                    dataType:"json",
                    type    :'post',
                    data:{extension:$('#txtextension1').val(),},
                    success:function(datos) {
                       varia=datos[0].extension;
                      if(ext==varia){
                        $('h5').removeClass('success');
                        $('h5').addClass('error');
                        $('h5').html("<strong>Extensión Existente.</strong>");
                        $('#txtextension1').val('');
                        $('#txtextension1').focus();
                      }else if($('#txtextension1').val().length>3){
                        $('h5').html("");
                        $('#centrado').hide();
                        $('#divsaltos').show();
                        $('#txtsaltos').focus();
                        click+=1;
                      }else{
                        $('h5').removeClass('success');
                        $('h5').addClass('error');
                        $('h5').html("<strong>Número no Válido.  Digite Mínimo 4 Números.</strong>");
                        $('#txtextension1').val('');
                        $('#txtextension1').focus();
                      }
                    },
                    error:function() {console.log('Something went wrong', status, err );}
                  });
            }
        };*/


        function verificar(){
          if($("#txtextension1").val().length == 0) {
               $('h5').removeClass('success');
               $('h5').addClass('error');
               $('h5').html("<strong>Digite una extensiòn.</strong>");
               $('#txtextension1').val('');
               $('#txtextension1').focus();
                return false;  
            }else{
                 $('h5').html("");
              var ext = $('#txtextension1').val();
              //Verificar si existe la extensiòn en la tabla info
                $.ajax({
                    url     :"verificar_extension.php",
                    dataType:"json",
                    type    :'post',
                    data:{extension: $('#txtextension1').val(),},
                    success:function(data) {
                      //verificar si existe la extensiòn en la tabla puertos
                       $.ajax({
                              url     :"verificar.php",
                              dataType:"json",
                              type    :'post',
                              data:{extension:$('#txtextension1').val(),},
                              success:function(datos) {
                                 varia=datos[0].extension;
                                if(data==varia && data == ext && varia == ext){
                                  $('h5').removeClass('success');
                                  $('h5').addClass('error');
                                  $('h5').html("<strong>Extensión Existente.</strong>");
                                  $('#txtextension1').val('');
                                  $('#txtextension1').focus();
                                }else if($('#txtextension1').val().length>3){
                                  $('h5').html("");
                                  $('#centrado').hide();
                                  $('#divsaltos').show();
                                  $('#txtsaltos').focus();
                                  consultar();
                                  click+=1;
                                }else{
                                  $('h5').removeClass('success');
                                  $('h5').addClass('error');
                                  $('h5').html("<strong>Número no Válido.  Digite Mínimo 4 Números.</strong>");
                                  $('#txtextension1').val('');
                                  $('#txtextension1').focus();
                                }
                              },
                              error:function() {console.log('Something went wrong', status, err );}
                            });
                    },
                    error:function() {console.log('Something went wrong', status, err );}
                  });
             
            }
        }


        function consultar(){
            $.ajax({
            url:   "consultar_info2.php",
            dataType:"json",
            type:  'post',
            data:{ 
             extension: $('#txtextension1').val(),
            },
            success:function(datos) {
               $('#txtapellido_directorio').val(datos['apellido']);
               $('#txtnombre_directorio').val(datos['nombre']);
               $('#txtdir_alveolo').val(datos['alveolo']);
               $('#txtdir_placa_interfaz').val(datos['placa_interfaz']);
               $('#txtdir_equipo').val(datos['direccion_equipo']);
               $('#cbxtipo_terminal').val(datos['tipo_terminal']);
               $('#txtactivo').val(datos['activo']);
               $('#txtcubiculo').val(datos['cubiculo']);
               $('#txtdireccion_ip').val(datos['dir_ip']);
               $('#txtmac').val(datos['mac']);
               $('#txtcentro_de_costo').val(datos['centro_de_costos']);

            },
            error:function() {
              console.log('Something went wrong', status, err );
            }
          });
        }




        function saltos(){
          cantsaltos = $('#txtsaltos').val();
          limpiar_extensiones();
          if(cantsaltos!=0){
            if (cantsaltos<=10 && cantsaltos>0){
              for(var j=1;j<=10;j++)
                {$('#salto'+j).hide();};
                for (var i =1;i<=cantsaltos;i++) 
                  {$('#salto'+i).show();};
                  click +=1;
                  $('h5').html("");
                  $('#capa3').show();
                  $('#txtnumero_directorio').val($('#txtextension1').val());
                  $('#txtnumero_directorio').attr("disabled", true);
                  if(cantsaltos>5){
                    $('#capa4').show();
                    $('#boton').removeClass('boton3');
                    $('#boton').addClass('boton4');
                  }else{
                    $('#boton').removeClass('boton4');
                    $('#boton').addClass('boton3');
                  };
                  $('#informacion').show();
                  $('#txtapellido_directorio').focus();
                  $('#boton').show();
                  $('#forms').show();
                  $('#txtextension1').attr('disabled','-1')
                  $('#centrado').show();
                  $('#divsaltos').hide();
                  $('#btninsertar1').attr("disabled", true);
                  consultar();

            }else{
              $('h5').removeClass('success');
              $('h5').addClass('error');
              $('h5').html("<strong>Digite Número de 1 a 10.</strong>");
              $('#txtsaltos').val('');
              $('#txtsaltos').focus();
            }
          }else{
            $('h5').removeClass('success');
            $('h5').addClass('error');
            $('h5').html("<strong>Verifique que los Campos estén Llenos.</strong>");
            $('#txtsaltos').focus();
          };
        }

        $(".restringir").keydown(function(event) {
            if(event.shiftKey){event.preventDefault();}
            if($(".restringir").val().length > 4) {
              if(event.keyCode!=8){
                event.preventDefault();
              }
            };
          });

        //Funcion Solo Numeros
        /*$(".solonum").keydown(function(event) {
           if(event.shiftKey){event.preventDefault();}
           if(event.keyCode==46||event.keyCode==8||event.keyCode==42||event.keyCode==35){
           }else{if(event.keyCode!=42||event.keyCode!=35){}if(event.keyCode<95){
                if(event.keyCode<48||event.keyCode>57){event.preventDefault();}
              }else{if(event.keyCode<96||event.keyCode>105){event.preventDefault();}}}});
*/





        //Cargar Regletas cuando cambie el combo Registro 1
          $('#cbxregistro1').change(function(){
            $('#cbxregletas1 option').remove();
            $('#cbxregletas11 option').remove();
            cargar_combo_regletas($('#cbxregistro1').val(),$('#cbxregletas1'),1,1);
            cargar_combo_regletas($('#cbxregistro1').val(),$('#cbxregletas11'),1,1);
          });

           //Cargar Regletas cuando cambie el combo Registro 2
          $('#cbxregistro2').change(function(){
            $('#cbxregletas2 option').remove();
            $('#cbxregletas22 option').remove();
            cargar_combo_regletas($('#cbxregistro2').val(),$('#cbxregletas2'),1,1);
            cargar_combo_regletas($('#cbxregistro2').val(),$('#cbxregletas22'),1,1);
          });

           //Cargar Regletas cuando cambie el combo Registro 3
          $('#cbxregistro3').change(function(){
            $('#cbxregletas3 option').remove();
            $('#cbxregletas33 option').remove();            
            cargar_combo_regletas($('#cbxregistro3').val(),$('#cbxregletas3'),1,1);
            cargar_combo_regletas($('#cbxregistro3').val(),$('#cbxregletas33'),1,1);
          });

           //Cargar Regletas cuando cambie el combo Registro 4
          $('#cbxregistro4').change(function(){
            $('#cbxregletas4 option').remove();
            $('#cbxregletas44 option').remove();
            cargar_combo_regletas($('#cbxregistro4').val(),$('#cbxregletas4'),1,1);
            cargar_combo_regletas($('#cbxregistro4').val(),$('#cbxregletas44'),1,1);
          });

           //Cargar Regletas cuando cambie el combo Registro 5
          $('#cbxregistro5').change(function(){
            $('#cbxregletas5 option').remove();
            $('#cbxregletas55 option').remove();
            cargar_combo_regletas($('#cbxregistro5').val(),$('#cbxregletas5'),1,1);
            cargar_combo_regletas($('#cbxregistro5').val(),$('#cbxregletas55'),1,1);
          });

           //Cargar Regletas cuando cambie el combo Registro 5
          $('#cbxregistro6').change(function(){
            $('#cbxregletas6 option').remove();
            $('#cbxregletas66 option').remove();
            cargar_combo_regletas($('#cbxregistro6').val(),$('#cbxregletas6'),1,1);
            cargar_combo_regletas($('#cbxregistro6').val(),$('#cbxregletas66'),1,1);
          });

          //Cargar Regletas cuando cambie el combo Registro 7
          $('#cbxregistro7').change(function(){
            $('#cbxregletas7 option').remove();
            $('#cbxregletas77 option').remove();
            cargar_combo_regletas($('#cbxregistro7').val(),$('#cbxregletas7'),1,1);
            cargar_combo_regletas($('#cbxregistro7').val(),$('#cbxregletas77'),1,1);
          });

          //Cargar Regletas cuando cambie el combo Registro 8
          $('#cbxregistro8').change(function(){
            $('#cbxregletas8 option').remove();
            $('#cbxregletas88 option').remove();
            cargar_combo_regletas($('#cbxregistro8').val(),$('#cbxregletas8'),1,1);
            cargar_combo_regletas($('#cbxregistro8').val(),$('#cbxregletas88'),1,1);
          });

          //Cargar Regletas cuando cambie el combo Registro 9
          $('#cbxregistro9').change(function(){
            $('#cbxregletas9 option').remove();
            $('#cbxregletas99 option').remove();
            cargar_combo_regletas($('#cbxregistro9').val(),$('#cbxregletas9'),1,1);
            cargar_combo_regletas($('#cbxregistro9').val(),$('#cbxregletas99'),1,1);
          });

          //Cargar Regletas cuando cambie el combo Registro 10
          $('#cbxregistro10').change(function(){
            $('#cbxregletas10 option').remove();
            $('#cbxregletas100 option').remove();
            cargar_combo_regletas($('#cbxregistro10').val(),$('#cbxregletas10'),1,1);
            cargar_combo_regletas($('#cbxregistro10').val(),$('#cbxregletas100'),1,1);
          });




          $('#cbxregletas1').change(function(){
            $('#cbxpuerto_in1 option').remove();
            cargar_puertos($('#cbxregletas1').val(),'cbxpuerto_in1');
            puertos($('#cbxregletas1').val(),'cbxpuerto_in1');
          });

          $('#cbxregletas11').change(function(){
            $('#cbxpuerto_out1 option').remove();
            cargar_puertos($('#cbxregletas1').val(),'cbxpuerto_out1');
            puertos($('#cbxregletas1').val(),'cbxpuerto_out1');
          });

          $('#cbxregletas2').change(function(){
            $('#cbxpuerto_in2 option').remove();
            cargar_puertos($('#cbxregletas2').val(),'cbxpuerto_in2');
            puertos($('#cbxregletas2').val(),'cbxpuerto_in2');
          });

          $('#cbxregletas22').change(function(){
            $('#cbxpuerto_out2 option').remove();
            cargar_puertos($('#cbxregletas2').val(),'cbxpuerto_out2');
            puertos($('#cbxregletas2').val(),'cbxpuerto_out2');
          });

          $('#cbxregletas3').change(function(){
            $('#cbxpuerto_in3 option').remove();
            cargar_puertos($('#cbxregletas3').val(),'cbxpuerto_in3');
            puertos($('#cbxregletas3').val(),'cbxpuerto_in3');
          });

          $('#cbxregletas33').change(function(){
            $('#cbxpuerto_out3 option').remove();
            cargar_puertos($('#cbxregletas3').val(),'cbxpuerto_out3');
            puertos($('#cbxregletas3').val(),'cbxpuerto_out3');
          });

          $('#cbxregletas4').change(function(){
            $('#cbxpuerto_in4 option').remove();
            cargar_puertos($('#cbxregletas4').val(),'cbxpuerto_in4');
            puertos($('#cbxregletas4').val(),'cbxpuerto_in4');
          });

          $('#cbxregletas44').change(function(){
            $('#cbxpuerto_out4 option').remove();
            cargar_puertos($('#cbxregletas4').val(),'cbxpuerto_out4');
            puertos($('#cbxregletas4').val(),'cbxpuerto_out4');
          });

          $('#cbxregletas5').change(function(){
            $('#cbxpuerto_in5 option').remove();
            cargar_puertos($('#cbxregletas5').val(),'cbxpuerto_in5');
            puertos($('#cbxregletas5').val(),'cbxpuerto_in5');
          });

          $('#cbxregletas55').change(function(){
            $('#cbxpuerto_out5 option').remove();
            cargar_puertos($('#cbxregletas5').val(),'cbxpuerto_out5');
            puertos($('#cbxregletas5').val(),'cbxpuerto_out5');
          });

          $('#cbxregletas6').change(function(){
            $('#cbxpuerto_in6 option').remove();
            cargar_puertos($('#cbxregletas6').val(),'cbxpuerto_in6');
            puertos($('#cbxregletas6').val(),'cbxpuerto_in6');
          });

          $('#cbxregletas66').change(function(){
            $('#cbxpuerto_out6 option').remove();
            cargar_puertos($('#cbxregletas6').val(),'cbxpuerto_out6');
            puertos($('#cbxregletas6').val(),'cbxpuerto_out6');
          });

          $('#cbxregletas7').change(function(){
            $('#cbxpuerto_in7 option').remove();
            cargar_puertos($('#cbxregletas7').val(),'cbxpuerto_in7');
            puertos($('#cbxregletas7').val(),'cbxpuerto_in7');
          });

          $('#cbxregletas77').change(function(){
            $('#cbxpuerto_out7 option').remove();
            cargar_puertos($('#cbxregletas7').val(),'cbxpuerto_out7');
            puertos($('#cbxregletas7').val(),'cbxpuerto_out7');
          });

          $('#cbxregletas8').change(function(){
            $('#cbxpuerto_in8 option').remove();
            cargar_puertos($('#cbxregletas8').val(),'cbxpuerto_in8');
            puertos($('#cbxregletas8').val(),'cbxpuerto_in8');
          });

          $('#cbxregletas88').change(function(){
            $('#cbxpuerto_out8 option').remove();
            cargar_puertos($('#cbxregletas8').val(),'cbxpuerto_out8');
            puertos($('#cbxregletas8').val(),'cbxpuerto_out8');
          });

          $('#cbxregletas9').change(function(){
            $('#cbxpuerto_in9 option').remove();
            cargar_puertos($('#cbxregletas9').val(),'cbxpuerto_in9');
            puertos($('#cbxregletas9').val(),'cbxpuerto_in9');
          });

          $('#cbxregletas99').change(function(){
            $('#cbxpuerto_out9 option').remove();
            cargar_puertos($('#cbxregletas9').val(),'cbxpuerto_out9');
            puertos($('#cbxregletas9').val(),'cbxpuerto_out9');
          });

          $('#cbxregletas10').change(function(){
            $('#cbxpuerto_in10 option').remove();
            cargar_puertos($('#cbxregletas10').val(),'cbxpuerto_in10');
            puertos($('#cbxregletas10').val(),'cbxpuerto_in10');
          });

          $('#cbxregletas100').change(function(){
            $('#cbxpuerto_out10 option').remove();
            cargar_puertos($('#cbxregletas10').val(),'cbxpuerto_out10');
            puertos($('#cbxregletas10').val(),'cbxpuerto_out10');
          });










          
cargar_registros();
tipo_terminal(1);
});
$(document).on('ready',function(){

        var cont = 0;
        var cantsaltos;
        var saltos=0;
        var click=0;
        var y=0;

        $(document).keydown(function(){
          if(event.keyCode==13 && click==1){
            consultar_registro();
          }else if(event.keyCode==13 && click==2){
            actualizar_registro();
          }else if(event.keyCode==13 && click==3){
            consultar_extension();
            $( "#txtconEditar" ).blur();
            $('#informacion').show();
            cargar_info();
          }else if(event.keyCode==13 && click==4){
            actualizar_extension();
          };
        });

        $('#padre').on('change',function(){
          $('#capas').removeAttr();
          $('#capas').hide('slow');
          $('h5').html('');
          click=1;
        });

        $('#regletas').on('change',function(){
          $('#capas').removeAttr();
          $('#capas').hide('slow');
          $('h5').html('');

        });

        //Mostrar Formulario Si Se va a Modificar Registro
        $("#r1").on("click",function(){
            ocultarcapas();
            llenar('Digitar Registro','#capa1');
            ocultarcapas2();
            $('#capa11').show('slow');
            capaoculta();
            limpiar();
            click = 1;
        });

        //Mostrar Formulario Si Se va a Modificar Regleta
        $("#r2").on("click",function(){
          ocultarcapas();
          llenar('Digitar Regleta','#capa2');
          ocultarcapas2();
          $('#capa22').slideToggle('slow');
          capaoculta();
          limpiar();
          $('#informacion').hide();
          click = 2;
        });

          //Mostrar Formulario Si Se va a Modificar Extension
         $("#r3").on("click",function(){
          click = 3;
            ocultarcapas();
            llenar('Digitar Extensión','#capa3');
            ocultarcapas2();
          $('#capa33').slideToggle('slow');
          capaoculta();
          $('#informacion').hide();
          $('#txtconEditar').focus();
          limpiar();
        });

         $('#txtconEditar').focus(function(){
          click=3;
         });

              $.ajax({
              url:"registros_regletas.php",
              dataType:"json",
              success:function(data) {
                  $('#regletas').append("<option value='-1'>-Seleccione Regleta-</option>");
                  for (var i = 0; i <= data.length - 1; i++) {
                      $('#regletas').append("<option value="+data[i].codigo+">"+data[i].registro+' - '+data[i].regleta+"</option>");
                  };
              },
              error:function() {
                console.log('Something went wrong', status, err );
                alert("El servidor no se encuentra disponible.");
              }
          });
            
            $('#btninsertar1').click(function(){
                ext = $('#txtextension1').val();
                if($("#txtextension1").val().length == 0) {
                   $('h5').html("<strong>Verifique que los Campos estén Llenos.</strong>");
                   $('#txtextension1').focus();
                    return false;  
                }else{
                $('h5').html("");
                $.ajax({
                  url     :"verificar.php",
                  dataType:"json",
                  type    :'post',
                  data:{ 
                    extension:$('#txtextension1').val(),
                  },
                  success:function(datos) { 
                    varia=datos[0].extension;
                    if(ext==varia){
                      $('h5').removeClass('success');
                      $('h5').addClass('error');
                      $('h5').html("<strong>Extensión Existente.</strong>");
                      $('#txtextension1').val('');
                    }else if(ext>999){
                      $('h5').html("");
                      $('#msjerror').hide();
                      $('#centrado').hide();
                      $('#divsaltos').show();
                      $('#txtsaltos').focus();
                    }else{
                      $('h5').removeClass('success');
                      $('h5').addClass('error');
                      $('h5').html("<strong>Número no Válido.  Digite Mínimo 4 Números.</strong>");
                      $('#txtextension1').val('');
                    }
                    },
                  error:function() {
                    console.log('Something went wrong', status, err );
                  }
                });
          }
        });

    //Reestablece los valores iniciales de todos los campos
         function limpiar(){
            $('#txtextension1').removeAttr('disabled');
            $('#txtextension1').focus();;
            $('h5').html('');
         }

         function cargar_regletas(){
          $.ajax({
              url:"importar_regletas.php",
              dataType:"json",
              success:function(data) {
                $('.regleta').append("<option value='-1'>-Seleccione Regleta-</option>");
                  for (var i = 0; i <= data.length - 1; i++) {
                      $('.regleta').append("<option value="+data[i].codigo+">"+data[i].regleta+"</option>");
                  };
              },
              error:function() {
                console.log('Something went wrong', status, err );
              }
          });
        }

         //Función Combo Registros.
        function cargar_registros(){
          $.ajax({
            url:"importar_registros.php",
            dataType:"json",
            success:function(data) {
              /*$('.registros').append("<option value='-1'>"+"-Seleccione Registro-"+"</option>");*/
                for (var i = 0; i <= data.length - 1; i++) {
                    $('.registros').append("<option value="+data[i].codigo+" >"+data[i].registro+"</option>");
                };
            },
            error:function() {
              console.log('Something went wrong', status, err );
            }
          });
        }

        //Actualizar Regletas en BD
        $('#btnActualizarRegleta').click(function(){
             $.ajax({
                url:   "actualizar_regletas.php",
                dataType:"text",
                type:  'post',
                data:{ 
                 nombre    : $('#txtnomregleta').val(),
                 regpadre  : $('#cbxregistros').val(),
                 puertos   : $('#txtnumpuertos').val(),
                 estado    : $('#estado_regleta').val(),
                 padre     : $('#regletas').val(),
                },
                success:function(datos) {
                   $('h5').html('');
                   $('h5').removeClass('error');
                   $('h5').addClass('success');
                   $('#capas').hide('fast');
                   $('h5').html('<strong>Regleta Actualizada.</strong>');
                },
                error:function() {
                  console.log('Something went wrong', status, err );
                }
              });
           });

        //Traer Información de Extensiones
        $('#btnconsulta_extension').click(function(){
          consultar_extension();
          $( "#txtconEditar" ).blur();
          $('#informacion').show();
          $('#txtpunto_de_voz').attr("disabled",true);
          cargar_info();

        });

          function consultar_extension(){
            $('#txtconEditar').focus();
            $.ajax({
                  url:   "consultar_extension.php",
                  dataType:"json",
                  type:  'post',
                  data:{ 
                   extension: $('#txtconEditar').val(),
                  },
                  success:function(datos) {

                    if($('#txtconEditar').val()!=''){
                      $('#capas').show();
                      $('h5').html('');
                      click = 4;
                    }else{
                       $('#capas').hide();
                       $('h5').removeClass('success');
                       $('h5').addClass('error');
                       $('h5').html('Complete Todos Los Campos.');
                      $('#txtextension1').val('');
                    }
                      saltos = 0;
                      saltos = datos['max_salto'];
                      for(var j=1;j<=10;j++){
                        $('#salto'+j).hide();
                      };
                      $('#capa3').show();
                      if(saltos>5){
                        $('#boton').removeClass('boton1');
                        $('#boton').addClass('boton2');
                        $('#capa4').show();
                      }else{
                        $('#boton').removeClass('boton2');
                        $('#boton').addClass('boton1');
                      };
                      $('#boton').show();
                      for (var i =1;i<=saltos;i++) {
                        $('#salto'+i).show();
                        $('#cbxRT'+i).val(datos.reg[i].registro);
                        cargar_combo_regletas(datos.reg[i].registro,$('#cbxRG_in'+i),datos.reg[i].entrada);
                        cargar_combo_regletas(datos.reg[i].registro,$('#cbxRG_out'+i),datos.reg[i].salida);
                        cargar_puertos(datos.reg[i].entrada,'puerto_in'+i,datos.reg[i].p_in);
                        cargar_puertos(datos.reg[i].salida,'puerto_out'+i,datos.reg[i].p_out);
                        puertos(datos.reg[i].entrada,'puerto_in'+i,datos.reg[i].p_in);
                        puertos(datos.reg[i].salida,'puerto_out'+i,datos.reg[i].p_out);
                        $('#estado_rg_in'+i).val(datos.reg[i].estadoin);
                        $('#estado_rg_out'+i).val(datos.reg[i].estado_out);
                      };
                      
                  },
                  error:function(datos) {
                    $('#capas').hide();
                    $('h5').removeClass('success');
                    $('h5').addClass('error');
                    $('h5').html('Extensión Inexistente.');
                    $('#txtextension1').val('');
                    $('#txtextension1').select();
                  }
                });            
          };

  function cargar_puertos(campo1,campo2,campo3){
    $.ajax({
        url     :"cargar_puertos.php",
        dataType:"json",
        type    :"post",
        data:{ 
         regleta: campo1,
         
        },
        success:function(datos) {
          for (var i = 1; i <= datos; i++) {
             $("#"+campo2+"").append("<option value="+i+">"+i+"</option>");
          };
         
         $("#"+campo2+"").val(campo3);
        },
        error:function() {
          
          console.log('Something went wrong', status, err );
          
        }
      });
  };


  function cargar_puertos2(campo1,campo2){
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


/**/

function puertos(campo1,campo2,campo3){
  $.ajax({
        url     :"puertos.php",
        dataType:"json",
        type    :"post",
        data:{ 
         regleta: campo1,
        },
        success:function(datos) {
          for (var i = 0; i < datos.total; i++) {
            if(campo3!=datos.puertos[i].puerto){
              $("#"+campo2+" option[value="+datos.puertos[i].puerto+"]").remove();
            }
          };
        },
        error:function() {
          
          console.log('Something went wrong', status, err );
          
        }
      });
};



        $('#btnagregar_salto').click(function(){
          $('h5').html('');
          if(y==0){
            $('#btnagregar_salto').attr('value','Guardar Nuevo Salto');
            if(saltos<10){
              saltos++;
              if(saltos==6){
                $('#capa4').show();
                $('#boton').removeClass('boton1');
                $('#boton').addClass('boton2');
              };
              $('#salto'+saltos).show();
              $('#cbxRG_in'+saltos).append("<option value='-1'>-Seleccione Registro-</option>");
              $('#cbxRG_out'+saltos).append("<option value='-1'>-Seleccione Registro-</option>");
            }
            y=1;
          }else{
            var sum = 0;
            for (var i = 1; i <= saltos; i++) {
              if($('#cbxRT'+i).val()!='-1' && $('#cbxRG_in'+i).val()!='-1' && $('#cbxRG_out'+i).val()!='-1' && $('#puerto_in'+i).val()!='0' && $('#puerto_in'+i).val()!='' && $('#puerto_out'+i).val()!='0' && $('#puerto_out'+i).val()!=''){
                sum = sum +1;
              }
            };
            if(sum == saltos){
              $.ajax({
               url     :"agregar_salto.php",
               dataType:"json",
               type    :"post",
               data:{ 
               extension: $('#txtconEditar').val(),
               salto : saltos,
               rg    : $('#cbxRG_in'+saltos).val(),
               rgs   : $('#cbxRG_out'+saltos).val(),
               pt    : $('#puerto_in'+saltos).val(),
               pts   : $('#puerto_out'+saltos).val(),
              },
              success:function(datos) {
                $('h5').removeClass('error');
                $('h5').addClass('success');
                alert('Salto Agregado Exitosamente');
                $('#btnagregar_salto').attr('value','Agregar Salto');
                y=0;
              },
              error:function() {
                console.log('Something went wrong', status, err );
              }
            });
            }else{

              alert('verifique que todos los campos esten llenos');

            }
            
            
          };
        });

        $('#btnborrar_salto').click(function(){
          $('h5').html('');
          var x;
            if (confirm("Seguro que quiere eliminar el salto?") == true) {
              $.ajax({
                 url     :"eliminar_salto.php",
                 dataType:"json",
                 type    :"post",
                 data:{ 
                 extension: $('#txtconEditar').val(),
                 salto : saltos,
                }
              });
              if(saltos==6){
                    $('#capa4').hide();
                    $('#boton').removeClass('boton2');
                    $('#boton').addClass('boton1');
                  };
                  $('#cbxRT'+saltos).val('-1');
                  $("#cbxRG_in"+saltos+" option").remove();
                  $("#cbxRG_out"+saltos+" option").remove();
                  $('#estado_rg_in'+saltos).val('1');
                  $('#estado_rg_out'+saltos).val('1');
                  $('#puerto_in'+saltos).val('');
                  $('#puerto_out'+saltos).val('');
                  $('#salto'+saltos).hide();
                   saltos--;
            };
          $('#btnagregar_salto').attr('value','Agregar Salto');
          y=0;
          
        });



          function cargar_info(){
            $.ajax({
          url:   "consultar_info.php",
          dataType:"json",
          type:  'post',
          data:{ 
           extension: $('#txtconEditar').val(),
           salto    : saltos,
          },
          success:function(datos) {
             $('#txtpunto_de_voz').val(datos['registro']+' - '+datos['regleta']+' - '+datos['puerto']);
             $('#txtapellido_directorio').val(datos['apellido']);
             $('#txtnombre_directorio').val(datos['nombre']);
             $('#txtdir_alveolo').val(datos['alveolo']);
             $('#txtdir_placa_interfaz').val(datos['placa_interfaz']);
             $('#txtdir_equipo').val(datos['direccion_equipo']);
             $('#cbxtipo_terminal').val(datos['tipo_terminal']);
             $('#txtactivo').val(datos['activo']);
             $('#txtcubiculo').val(datos['cubiculo']);
             $('#txtdireccion_ip').val(datos['direccion_ip']);
             $('#txtmac').val(datos['mac']);
             $('#txtcentro_de_costos').val(datos['centro_costos']);
          },
          error:function() {
            console.log('Something went wrong', status, err );
          }
        })
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
                $("#cbxRG_in"+saltos+" option").remove();
                $("#cbxRG_out"+saltos+" option").remove();
                $('#cbxRG_in'+saltos).append("<option value='-1'>-Seleccione Registro-</option>");
                $('#cbxRG_out'+saltos).append("<option value='-1'>-Seleccione Registro-</option>");
                console.log('Something went wrong', status, err );
              }
          });
        }

        $('#btnActualizarExtension').click(function(){
          actualizar_extension();
        });

          function actualizar_extension(){
            $.ajax({
                  url     : "actualizar_extensiones.php",
                  dataType: "text",
                  type    : 'post',
                  data:{ 
                    extension : $('#txtconEditar').val(),
                    saltos    : saltos,
                    rt1       : $('#cbxRT1').val(),
                    rt2       : $('#cbxRT2').val(),
                    rt3       : $('#cbxRT3').val(),
                    rt4       : $('#cbxRT4').val(),
                    rt5       : $('#cbxRT5').val(),
                    rt6       : $('#cbxRT6').val(),
                    rt7       : $('#cbxRT7').val(),
                    rt8       : $('#cbxRT8').val(),
                    rt9       : $('#cbxRT9').val(),
                    rt10      : $('#cbxRT10').val(),
                    txtin1    : $('#puerto_in1').val(),
                    rg_in1    : $('#cbxRG_in1').val(),
                    es_in1    : $('#estado_rg_in1').val(),
                    pt_out1   : $('#puerto_out1').val(),
                    rg_out1   : $('#cbxRG_out1').val(),
                    es_out1   : $('#estado_rg_out1').val(),
                    txtin2    : $('#puerto_in2').val(),
                    rg_in2    : $('#cbxRG_in2').val(),
                    es_in2    : $('#estado_rg_in2').val(),
                    pt_out2   : $('#puerto_out2').val(),
                    rg_out2   : $('#cbxRG_out2').val(),
                    es_out2   : $('#estado_rg_out2').val(),
                    txtin3    : $('#puerto_in3').val(),
                    rg_in3    : $('#cbxRG_in3').val(),
                    es_in3    : $('#estado_rg_in3').val(),
                    pt_out3   : $('#puerto_out3').val(),
                    rg_out3   : $('#cbxRG_out3').val(),
                    es_out3   : $('#estado_rg_out3').val(),
                    txtin4    : $('#puerto_in4').val(),
                    rg_in4    : $('#cbxRG_in4').val(),
                    es_in4    : $('#estado_rg_in4').val(),
                    pt_out4   : $('#puerto_out4').val(),
                    rg_out4   : $('#cbxRG_out4').val(),
                    es_out4   : $('#estado_rg_out4').val(),
                    txtin5    : $('#puerto_in5').val(),
                    rg_in5    : $('#cbxRG_in5').val(),
                    es_in5    : $('#estado_rg_in5').val(),
                    pt_out5   : $('#puerto_out5').val(),
                    rg_out5   : $('#cbxRG_out5').val(),
                    es_out5   : $('#estado_rg_out5').val(),
                    txtin6    : $('#puerto_in6').val(),
                    rg_in6    : $('#cbxRG_in6').val(),
                    es_in6    : $('#estado_rg_in6').val(),
                    pt_out6   : $('#puerto_out6').val(),
                    rg_out6   : $('#cbxRG_out6').val(),
                    es_out6   : $('#estado_rg_out6').val(),
                    txtin7    : $('#puerto_in7').val(),
                    rg_in7    : $('#cbxRG_in7').val(),
                    es_in7    : $('#estado_rg_in7').val(),
                    pt_out7   : $('#puerto_out7').val(),
                    rg_out7   : $('#cbxRG_out7').val(),
                    es_out7   : $('#estado_rg_out7').val(),
                    txtin8    : $('#puerto_in8').val(),
                    rg_in8    : $('#cbxRG_in8').val(),
                    es_in8    : $('#estado_rg_in8').val(),
                    pt_out8   : $('#puerto_out8').val(),
                    rg_out8   : $('#cbxRG_out8').val(),
                    es_out8   : $('#estado_rg_out8').val(),
                    txtin9    : $('#puerto_in9').val(),
                    rg_in9    : $('#cbxRG_in9').val(),
                    es_in9    : $('#estado_rg_in9').val(),
                    pt_out9   : $('#puerto_out9').val(),
                    rg_out9   : $('#cbxRG_out9').val(),
                    es_out9   : $('#estado_rg_out9').val(),
                    txtin10    : $('#puerto_in10').val(),
                    rg_in10    : $('#cbxRG_in10').val(),
                    es_in10    : $('#estado_rg_in10').val(),
                    pt_out10   : $('#puerto_out10').val(),
                    rg_out10   : $('#cbxRG_out10').val(),
                    es_out10   : $('#estado_rg_out10').val(),

                    apellido   : $('#txtapellido_directorio').val(),
                    nombre   : $('#txtnombre_directorio').val(),
                    dir_alveolo: $('#txtdir_alveolo').val(),
                    placa_interfaz: $('#txtdir_placa_interfaz').val(),
                    dir_equipo: $('#txtdir_equipo').val(),
                    tipo_terminal: $('#cbxtipo_terminal').val(),
                    activo: $('#txtactivo').val(),
                    cubiculo: $('#txtcubiculo').val(),
                    ip: $('#txtdireccion_ip').val(),
                    mac: $('#txtmac').val(),
                    centro_costo: $('#txtcentro_de_costos').val(),

                  },
                  success:function(datos) {
                     if(datos==1){
                      $('#capas').hide('fast');
                      $('#txtsaltos').val('');
                      $('#txtextension1').val('');
                      $('#txtextension1').prop('disabled', false);
                      $('#txtconEditar').val('');
                      $('#txtconEditar').focus();
                      ocultarcapas();
                      $('#boton').hide();
                      $('#capa33').show('slow');
                      $('h5').removeClass('error');
                      $('h5').addClass('success');
                      $('h5').html('<strong>Extensión Actualizada.</strong>');
                      click = 3;
                     }else{
                      $('h5').removeClass('success');
                      $('h5').addClass('error');
                      $('h5').html('Error al Actualizar Extensión.');
                     }
                  },
                  error:function() {
                    console.log('Something went wrong', status, err );
                  }
                });
          }
        

      //Traer información de registros
        $('#btnconsulta_registro').click(function(){
            consultar_registro();
          });

          function consultar_registro(){
            verificar($('#padre'),'-1');
            $.ajax({
              url     :"consultar_registros.php",
              dataType:"json",
              type    :'post',
              data    :{regpadre     : $('#padre').val(),},
              success:function(datos) {
                $('#informacion').hide();
                $('#boton').hide();
                $('h5').html('');
                $('#txtnomregistro').attr('disabled','-1')
                $('#txtnomregistro').val(datos['nombre']);
                $('#txtubiregistro').val(datos['ubicacion']);
                $("#estado_registro option[value="+datos['estado']+"]").attr("selected",true);
                $("#cbxregistroeditar option[value="+datos['padre']+"]").attr("selected",true);
                click=2;
              },
              error:function() {
                console.log('Something went wrong', status, err );
              }
            });
          };
        

       //Traer información de regletas
        $('#btnconsulta_regleta').click(function(){
          verificar($('#regletas'),'-1');
          $.ajax({
                url:   "consultar_regletas.php",
                dataType:"json",
                type:  'post',
                data:{
                 regleta: $('#regletas').val(),
                },
                success:function(datos) {
                  $('h5').html('');
                   $('#txtnomregleta').attr('disabled','-1')
                   $('#txtnomregleta').val(datos['nombre']);
                   $('#txtnumpuertos').val(datos['puertos']);
                   $("#estado_regleta option[value="+datos['estado']+"]").attr("selected",true);
                   $("#cbxregistros option[value="+datos['padre']+"]").attr("selected",true);
                   $('#informacion').hide();
                   $('#boton').hide();
                },
                error:function() {
                    console.log('Something went wrong', status, err );
                }
              });
        });

       //Actualizar Registros en BD
          $('#btnActualizarRegistro').click(function(){
              actualizar_registro();
            });

            function actualizar_registro(){
               $.ajax({
                  url:   "actualizar_registro.php",
                  dataType:"text",
                  type:  'post',
                  data:{ 
                   ubicacion      : $('#txtubiregistro').val(),
                   regpadre       : $('#cbxregistroeditar').val(),
                   estado         : $('#estado_registro').val(),
                   padre          : $('#padre').val(),
                  },
                  success:function(datos) {
                     $('#capas').hide('fast');
                     $('h5').removeClass('error');
                     $('h5').addClass('success');
                     $('h5').html('<strong>Registro Actualizado</strong>');
                     /*$('#capa1').hide();*/
                  },
                  error:function() {
                    console.log('Something went wrong', status, err );
                  }
                });
              
            }
          

      //Función para ocultar las capas.
         function ocultarcapas(){
            $('#capa1').hide('fast');
            $('#capa2').hide('fast');
            $('#capa3').hide('fast');
            $('#extensioneditar').hide('fast');
            $('#unselected').hide('fast');
            $('#unexist').hide('fast');
         }

         //Función para cambiar contenido de los inputs.
         function llenar(textocampo,mostrar){
            $('#txtextension1').attr('placeholder',textocampo);
            $('#extensioneditar').slideToggle('fast');
            $(mostrar).slideToggle('fast');
            $('#txtextension1').focus();
         }

        $(".solonum").keypress(function(tecla) {
         if(tecla.charCode < 35 || ((tecla.charCode > 35 && tecla.charCode < 42) || (tecla.charCode > 42 && tecla.charCode < 48)) || tecla.charCode > 57) return false;
       });

         //Funcion Solo Numeros
       /* $(".solonum").keydown(function(event) {
           if(event.shiftKey){event.preventDefault();}
           if(event.keyCode==46||event.keyCode==8||event.keyCode==42||event.keyCode==35){
           }else{if(event.keyCode!=42||event.keyCode!=35){}
              if(event.keyCode<95){
                if(event.keyCode<48||event.keyCode>57){event.preventDefault();}
              }else{if(event.keyCode<96||event.keyCode>105){event.preventDefault();}}
          }
        });*/
      
          $(".restringir").keydown(function(event) {
            if(event.shiftKey){event.preventDefault();}
            if($(".restringir").val().length > 4) {
              if(event.keyCode!=8){
                event.preventDefault();
              }
            };
          });

         function ocultarcapas2(){
            $('#capa11').hide('fast');
            $('#capa22').hide('fast');
            $('#capa33').hide('fast');
            $('#capas').hide('fast');
         }

         function capaoculta(){
          if(cont==0){
            $('#centrado1').slideToggle('slow');
            cont+=1;
          }
         };

         function verificar(campo,valor){
          if($(campo).val()!=valor){
            $('#capas').show();
          }
        };

        //Reestablece los valores iniciales de todos los campos
         function limpiar(){
            $('#txtextension1').removeAttr('disabled');
            $('#txtextension1').focus();
            $('#forms').hide();
            $('#tipopuerto').val('-1');
            $('#regletas').val('-1');
              $('#padre').val('-1');
            $('#txtpuerto').val('');
            $('#txtconEditar').val('');
            $('h5').html('');
         }

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
          $('#txtpuerto1').val('');
          $('#txtpuerto2').val('');
          $('#txtpuerto3').val('');
          $('#txtpuerto4').val('');
          $('#txtpuerto5').val('');
          $('#txtpuerto6').val('');
          $('#txtpuerto7').val('');
          $('#txtpuerto8').val('');
          $('#txtpuerto9').val('');
          $('#txtpuerto10').val('');
          $('#txtpuerto11').val('');
          $('#txtpuerto22').val('');
          $('#txtpuerto33').val('');
          $('#txtpuerto44').val('');
          $('#txtpuerto55').val('');
          $('#txtpuerto66').val('');
          $('#txtpuerto77').val('');
          $('#txtpuerto88').val('');
          $('#txtpuerto99').val('');
          $('#txtpuerto100').val('');
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
        };


        /*$('#cbxRG_out1').change(function(){*/

         
/*        });*/

        function tipo_terminal(s){
          $.ajax({
            url:"importar_tipo_terminal.php",
            type    : 'post',
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
        tipo_terminal();



         //Cargar Regletas cuando cambie el combo Registro 1
          $('#cbxRT1').change(function(){
            $('#cbxRG_in1 option').remove();
            $('#cbxRG_out1 option').remove();
            cargar_combo_regletas($('#cbxRT1').val(),$('#cbxRG_in1'),1,1);
            cargar_combo_regletas($('#cbxRT1').val(),$('#cbxRG_out1'),1,1);
          });

           //Cargar Regletas cuando cambie el combo Registro 2
          $('#cbxRT2').change(function(){
            $('#cbxRG_in2 option').remove();
            $('#cbxRG_out2 option').remove();
            cargar_combo_regletas($('#cbxRT2').val(),$('#cbxRG_in2'),1,1);
            cargar_combo_regletas($('#cbxRT2').val(),$('#cbxRG_out2'),1,1);
          });

           //Cargar Regletas cuando cambie el combo Registro 3
          $('#cbxRT3').change(function(){
            $('#cbxRG_in3 option').remove();
            $('#cbxRG_out3 option').remove();            
            cargar_combo_regletas($('#cbxRT3').val(),$('#cbxRG_in3'),1,1);
            cargar_combo_regletas($('#cbxRT3').val(),$('#cbxRG_out3'),1,1);
          });

           //Cargar Regletas cuando cambie el combo Registro 4
          $('#cbxRT4').change(function(){
            $('#cbxRG_in4 option').remove();
            $('#cbxRG_out4 option').remove();
            cargar_combo_regletas($('#cbxRT4').val(),$('#cbxRG_in4'),1,1);
            cargar_combo_regletas($('#cbxRT4').val(),$('#cbxRG_out4'),1,1);
          });

           //Cargar Regletas cuando cambie el combo Registro 5
          $('#cbxRT5').change(function(){
            $('#cbxRG_in5 option').remove();
            $('#cbxRG_out5 option').remove();
            cargar_combo_regletas($('#cbxRT5').val(),$('#cbxRG_in5'),1,1);
            cargar_combo_regletas($('#cbxRT5').val(),$('#cbxRG_out5'),1,1);
          });

           //Cargar Regletas cuando cambie el combo Registro 5
          $('#cbxRT6').change(function(){
            $('#cbxRG_in6 option').remove();
            $('#cbxRG_out6 option').remove();
            cargar_combo_regletas($('#cbxRT6').val(),$('#cbxRG_in6'),1,1);
            cargar_combo_regletas($('#cbxRT6').val(),$('#cbxRG_out6'),1,1);
          });

          //Cargar Regletas cuando cambie el combo Registro 7
          $('#cbxRT7').change(function(){
            $('#cbxRG_in7 option').remove();
            $('#cbxRG_out7 option').remove();
            cargar_combo_regletas($('#cbxRT7').val(),$('#cbxRG_in7'),1,1);
            cargar_combo_regletas($('#cbxRT7').val(),$('#cbxRG_out7'),1,1);
          });

          //Cargar Regletas cuando cambie el combo Registro 8
          $('#cbxRT8').change(function(){
            $('#cbxRG_in8 option').remove();
            $('#cbxRG_out8 option').remove();
            cargar_combo_regletas($('#cbxRT8').val(),$('#cbxRG_in8'),1,1);
            cargar_combo_regletas($('#cbxRT8').val(),$('#cbxRG_out8'),1,1);
          });

          //Cargar Regletas cuando cambie el combo Registro 9
          $('#cbxRT9').change(function(){
            $('#cbxRG_in9 option').remove();
            $('#cbxRG_out9 option').remove();
            cargar_combo_regletas($('#cbxRT9').val(),$('#cbxRG_in9'),1,1);
            cargar_combo_regletas($('#cbxRT9').val(),$('#cbxRG_out9'),1,1);
          });

          //Cargar Regletas cuando cambie el combo Registro 10
          $('#cbxRT10').change(function(){
            $('#cbxRG_in10 option').remove();
            $('#cbxRG_out10 option').remove();
            cargar_combo_regletas($('#cbxRT10').val(),$('#cbxRG_in10'),1,1);
            cargar_combo_regletas($('#cbxRT10').val(),$('#cbxRG_out10'),1,1);
          });


          





          $('#cbxRG_in1').change(function(){
            $('#puerto_in1 option').remove();
            cargar_puertos2($('#cbxRG_in1').val(),'puerto_in1');
            puertos($('#cbxRG_in1').val(),'puerto_in1');
          });


          $('#cbxRG_in2').change(function(){
            $('#puerto_in2 option').remove();
            cargar_puertos2($('#cbxRG_in2').val(),'puerto_in2');
            puertos($('#cbxRG_in2').val(),'puerto_in2');
          });


          $('#cbxRG_in3').change(function(){
            $('#puerto_in3 option').remove();
            cargar_puertos2($('#cbxRG_in3').val(),'puerto_in3');
            puertos($('#cbxRG_in3').val(),'puerto_in3');
          });


          $('#cbxRG_in4').change(function(){
            $('#puerto_in4 option').remove();
            cargar_puertos2($('#cbxRG_in4').val(),'puerto_in4');
            puertos($('#cbxRG_in4').val(),'puerto_in4');
          });

          $('#cbxRG_in5').change(function(){
            $('#puerto_in5 option').remove();
            cargar_puertos2($('#cbxRG_in5').val(),'puerto_in5');
            puertos($('#cbxRG_in5').val(),'puerto_in5');
          });


          $('#cbxRG_in6').change(function(){
            $('#puerto_in6 option').remove();
            cargar_puertos2($('#cbxRG_in6').val(),'puerto_in6');
            puertos($('#cbxRG_in6').val(),'puerto_in6');
          });


          $('#cbxRG_in7').change(function(){
            $('#puerto_in7 option').remove();
            cargar_puertos2($('#cbxRG_in7').val(),'puerto_in7');
            puertos($('#cbxRG_in7').val(),'puerto_in7');
          });


          $('#cbxRG_in8').change(function(){
            $('#puerto_in8 option').remove();
            cargar_puertos2($('#cbxRG_in8').val(),'puerto_in8');
            puertos($('#cbxRG_in8').val(),'puerto_in8');
          });


          $('#cbxRG_in9').change(function(){
            $('#puerto_in9 option').remove();
            cargar_puertos2($('#cbxRG_in9').val(),'puerto_in9');
            puertos($('#cbxRG_in9').val(),'puerto_in9');
          });


          $('#cbxRG_in10').change(function(){
            $('#puerto_in10 option').remove();
            cargar_puertos2($('#cbxRG_in10').val(),'puerto_in10');
            puertos($('#cbxRG_in10').val(),'puerto_in10');
          });


          $('#cbxRG_out1').change(function(){
            $('#puerto_out1 option').remove();
            cargar_puertos2($('#cbxRG_out1').val(),'puerto_out1');
            puertos($('#cbxRG_out1').val(),'puerto_out1');
          });


          $('#cbxRG_out2').change(function(){
            $('#puerto_out2 option').remove();
            cargar_puertos2($('#cbxRG_out2').val(),'puerto_out2');
            puertos($('#cbxRG_out2').val(),'puerto_out2');
          });


          $('#cbxRG_out3').change(function(){
            $('#puerto_out3 option').remove();
            cargar_puertos2($('#cbxRG_out3').val(),'puerto_out3');
            puertos($('#cbxRG_out3').val(),'puerto_out3');
          });


          $('#cbxRG_out4').change(function(){
            $('#puerto_out4 option').remove();
            cargar_puertos2($('#cbxRG_out4').val(),'puerto_out4');
            puertos($('#cbxRG_out4').val(),'puerto_out4');
          });

          $('#cbxRG_out5').change(function(){
            $('#puerto_out5 option').remove();
            cargar_puertos2($('#cbxRG_out5').val(),'puerto_out5');
            puertos($('#cbxRG_out5').val(),'puerto_out5');
          });


          $('#cbxRG_out6').change(function(){
            $('#puerto_out6 option').remove();
            cargar_puertos2($('#cbxRG_out6').val(),'puerto_out6');
            puertos($('#cbxRG_out6').val(),'puerto_out6');
          });


          $('#cbxRG_out7').change(function(){
            $('#puerto_out7 option').remove();
            cargar_puertos2($('#cbxRG_out7').val(),'puerto_out7');
            puertos($('#cbxRG_out7').val(),'puerto_out7');
          });


          $('#cbxRG_out8').change(function(){
            $('#puerto_out8 option').remove();
            cargar_puertos2($('#cbxRG_out8').val(),'puerto_out8');
            puertos($('#cbxRG_out8').val(),'puerto_out8');
          });


          $('#cbxRG_out9').change(function(){
            $('#puerto_out9 option').remove();
            cargar_puertos2($('#cbxRG_out9').val(),'puerto_out9');
            puertos($('#cbxRG_out9').val(),'puerto_out9');
          });


          $('#cbxRG_out10').change(function(){
            $('#puerto_out10 option').remove();
            cargar_puertos2($('#cbxRG_out10').val(),'puerto_out10');
            puertos($('#cbxRG_out10').val(),'puerto_out10');
          });






        cargar_registros();
        cargar_regletas();
         $('#capa33').slideToggle('slow');
})
$(document).on('ready',function(){

        $("#txtextension").focus();
      $(document).keydown(function(event){

       

        if(event.keyCode==13 && $('#txtextension').val()!= ''){

          consultar();


        };
      });


      $('#btnconsultar').click(function(e){
        consultar();

        /*if($('#txtextension').length>=4 && $('#txtextension').length<=5){
          $.post('consulta_extension.php',
          {extension: $('#txtextension').val(),},
          function (data){
            $('#tabla').html(data);
          });
        }else{
          $('#txtextension').focus();
        };*/
      });



        $(".solonum").keypress(function(tecla) {
         if(tecla.charCode < 35 || ((tecla.charCode > 35 && tecla.charCode < 42) || (tecla.charCode > 42 && tecla.charCode < 48)) || tecla.charCode > 57) return false;
       });




      $(".restringir").keydown(function(event) {
        if(event.shiftKey){event.preventDefault();}
        if($(".restringir").val().length > 4) {
          if(event.keyCode!=8){
            event.preventDefault();
          }
        };
    });


        

   $('#txtpunto_de_voz').attr('disabled',true);
   $('#txtapellido_directorio').attr('disabled',true);
   $('#txtnombre_directorio').attr('disabled',true);
   $('#txtdir_alveolo').attr('disabled',true);
   $('#txtdir_placa_interfaz').attr('disabled',true);
   $('#txtdir_equipo').attr('disabled',true);
   $('#txttipo_terminal').attr('disabled',true);
   $('#txtactivo').attr('disabled',true);
   $('#txtcubiculo').attr('disabled',true);
   $('#txtcentro_de_costos').attr('disabled',true);
   $('#txtdireccion_ip').attr('disabled',true);
   $('#txtmac').attr('disabled',true);
   


   function consultar(){
            $.ajax({
            url:   "consultar_info.php",
            dataType:"json",
            type:  'post',
            data:{ 
             extension: $('#txtextension').val(),
            },
            success:function(datos) {
               $('#txtpunto_de_voz').val(datos['registro']+' - '+datos['regleta']+' - '+datos['puerto']);
               $('#txtapellido_directorio').val(datos['apellido']);
               $('#txtnombre_directorio').val(datos['nombre']);
               $('#txtdir_alveolo').val(datos['alveolo']);
               $('#txtdir_placa_interfaz').val(datos['placa_interfaz']);
               $('#txtdir_equipo').val(datos['direccion_equipo']);
               $('#txttipo_terminal').val(datos['terminal']);
               $('#txtactivo').val(datos['activo']);
               $('#txtcubiculo').val(datos['cubiculo']);
               $('#txtdireccion_ip').val(datos['direccion_ip']);
               $('#txtmac').val(datos['mac']);
               $('#txtcentro_de_costos').val(datos['centro_costos']);

            },
            error:function() {
              console.log('Something went wrong', status, err );
            }
          });


            $.post('consulta_extension.php',
            {extension: $('#txtextension').val(),},
            function (data){
              $('#tabla').html(data);
            });
            
          };
});
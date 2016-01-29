$(document).ready(function(){

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


	$("#btncrear_registro").click(function(){
		if($('#cbxpadre').val()!='-1' && $('txtnombre')!='' && $('#txtubicacion')!=''){
			$.ajax({
	          url     :"crear_registro.php",
	          dataType:"json",
	          type    :"post",
	          data:{ 
	           nombre   : $('#txtnombre').val(),
	           ubicacion: $('#txtubicacion').val(),
	           padre    : $('#cbxpadre').val(),           
	          },
	          success:function(datos) {
	          	if(datos==1){
	           		$('#msj').html('<strong>Registro Creado Exitosamente.</strong>');
		           	$('#msj').removeClass('error');
	                $('#msj').addClass('success');
	          	}else{
	          		$('#msj').html('<strong>Registro Existente.</strong>');
		           	$('#msj').removeClass('success');
	                $('#msj').addClass('error');
	          	}
	          },
	          error:function() {
	           alert('Error al Crear Registro');
	          }
	        });
		}else{
			$('#msj').html('<strong>Complete Todos los Campos.</strong>');
			$('#msj').removeClass('success');
			$('#msj').addClass('error');
		}
	});



	$('#btncrear_regleta').click(function(){
		if($('#cbxregistro_padre').val()!='-1' && $('#txtnombre_regleta')!='' && $('#txtnum_puertos')!=''){
			$.ajax({
	          url     :"crear_regleta.php",
	          dataType:"json",
	          type    :"post",
	          data:{ 
	           nombre      : $('#txtnom_regleta').val(),
	           padre       : $('#cbxregistro_padre').val(),
	           num_puertos : $('#txtnum_puertos').val(),           
	          },
	          success:function(datos) {
	           if(datos==1){
		           	$('#msj').html('<strong>Regleta Creada Exitosamente.</strong>');
		           	$('#msj').removeClass('error');
	                $('#msj').addClass('success');
	          	}else{
	          		$('#msj').html('<strong>Regleta Existente.</strong>');
		           	$('#msj').removeClass('success');
	                $('#msj').addClass('error');
	          	}
	          },
	          error:function() {
	           alert('Error al Crear Regleta');
	          }
	        });
		}else{
			$('#msj').html('<strong>Complete Todos los Campos.</strong>');
			$('#msj').removeClass('success');
			$('#msj').addClass('error');
		}
	});

	$("#r1").change(function () {
		$('#crear_registro').show('slow');
		$('#txtnombre').focus();
		$('#crear_regleta').hide('fast');
		$('#txtnom_regleta').val('');
		$('#txtnum_puertos').val('');
		$('#cbxregistro_padre').val('-1');
		$('#msj').html('');
	});

	$("#r2").change(function () {
		$('#crear_regleta').show('slow');
		$('#txtnombre_regleta').focus();
		$('#crear_registro').hide('fast');
		$('#txtnombre').val('');
		$('#txtubicacion').val('');
		$('#cbxpadre').val('-1');
		$('#msj').html('');
	});

	$(".solonum").keypress(function(tecla) {
      if(tecla.charCode < 35 || ((tecla.charCode > 35 && tecla.charCode < 42) || (tecla.charCode > 42 && tecla.charCode < 48)) || tecla.charCode > 57) return false;
    });
});
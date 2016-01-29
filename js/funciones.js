$(document).on('ready',function(){

	$(".restringir").keydown(function(event) {
        if(event.shiftKey){event.preventDefault();}
        if($(".restringir").val().length > 4) {
          if(event.keyCode!=8){
            event.preventDefault();
          }
        };
    });

	$(".solonum").keydown(function(event) {
           if(event.shiftKey){
            event.preventDefault();
           }
           if(event.keyCode==46||event.keyCode==8||event.keyCode==42||event.keyCode==35){
           }else{
            if(event.keyCode!=42||event.keyCode!=35){

            }
              if(event.keyCode<95){
                if(event.keyCode<48||event.keyCode>57){
                event.preventDefault();
                }
              }else{
                if(event.keyCode<96||event.keyCode>105){
                  event.preventDefault();
                }
              }
            }
          });

	function limpiar(){
		$(":text").each(function(){	
			$($(this)).val('');
	});
	};


});
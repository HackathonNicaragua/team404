$(document).ready(function(){
		listarforo();
});

var listarforo = function(){
	$.ajax({
		type:'get',
		url:'/listar-foro',
		success:function(data){
			$('.listar-foros').empty().html(data);
		}
	});
}
$("#guardar").click(function(event){
		var tematica = $("#tematica").val();
	    var pregunta = $("#pregunta1").val();
	  	//console.log(tematica,pregunta);
  		var token = $("input[name=_token]").val();
  		//la ruta donde se envia la informacion del formulario
  		var route = "/foro";
  		
     $.ajax({
      		url:route,
      		headers:{'X-CSRF-TOKEN':token},
      		type:'post',
      		datatype:'json',
      		data:{tematica:tematica,pregunta:pregunta},

      			success:function(data){
			          	if(data.success=='true'){
			          		//listarforo();
							$("#pregunta").modal('toggle');
							//pintamos un mensaje
							$("#message-save").fadeIn();
							$("#message-save").show().delay(3000).fadeOut(3);
							

			                
			            }
        		}
     });
});


function mostrarPublicacion(id){
    var route = "foro/"+id+"/edit";
        $.get(route, function(data){
        //console.log(data);
        $("#id").val(data.id);
        $("#tematica_id").val(data.tematica);
        $("#pregunta1_id").val(data.pregunta);
    });
}

$("#editar").click(function(event){
		var id = $("#id").val();
        var tematica = $("#tematica_id").val();
	    var pregunta = $("#pregunta1_id").val();
	    console.log(tematica,pregunta);

        var route = "/foro/"+id+"";

        var token = $("#token").val();
        
     $.ajax({
            url:route,
                headers:{'X-CSRF-TOKEN':token},
                type:'PUT',
                dataType:'json',
                data:{tematica:tematica,pregunta:pregunta},
                success:function(data){
                        if(data.success=='true'){
                            listarforo();
                            $("#editarPost").modal('toggle');
                            //pintamos un mensaje
                            $("#message-update").fadeIn();
                            $("#message-update").show().delay(3000).fadeOut(3);
                            

                            
                        }
                }
     });
});

var Eliminar = function(id){
	$.alertable.confirm("<span>Estas seguro de eliminar esta publicacion?</span>",{
		html:true
	}).then(function(){
		var route = "/foro/"+id+"";
		var token = $("#token").val();

		$.ajax({
      		url:route,
				headers:{'X-CSRF-TOKEN':token},
				type:'Delete',
				dataType:'json',
      			success:function(data){
			          	if(data.success=='true')
			          	{
			          		listarforo();
							$("#message-delete").fadeIn();
							$("#message-delete").show().delay(3000).fadeOut(3);   
			            }
        		}
    	});
		

	});
}

//comentarios
function foroid(id)
  {
    var foro_id=id;
    //console.log(foro_id);

    $("#guardarComentario").click(function(event){
        var comentario = $("#comentario").val();
        //console.log(comentario,foro_id);
        var token = $("input[name=_token]").val();
        
          var route = "/comentarios";
          
         $.ajax({
              url:route,
              headers:{'X-CSRF-TOKEN':token},
              type:'post',
              datatype:'json',
              data:{foro_id:foro_id,comentario:comentario},

                success:function(data){
                      if(data.success=='true'){
                        //listarforo();
                  $("#modalComentario").modal('toggle');
                  //pintamos un mensaje
                  $("#message-save").fadeIn();
                  $("#message-save").show().delay(3000).fadeOut(3);
                  

                          
                      }
                }
         });
    });

}

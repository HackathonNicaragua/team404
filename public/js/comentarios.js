$(document).ready(function(){
		listarComentarios();
});

var listarComentarios = function(){
	$.ajax({
		type:'get',
		url:'/listar-comentarios/'+foro_id,
		success:function(data){
			$('#comentarios').empty().html(data);
		}
	});
}
var foro_id=  $('#foroComent').val();
console.log(foro_id);
    $("#guardarComentario").click(function(event){

        var comentario = $("#comentario").val();
        console.log(comentario,foro_id);
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

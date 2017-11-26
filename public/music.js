var notas = $('.sonido');
$('.note').click(function() {
  var num = parseInt(this.id);
  tocar(num);
});

//funcion para pausar y reproducir sonidos
function tocar(num){
  notas[num].pause();
  notas[num].currentTime =0;
  notas[num].play();
  //colocamos una sobra al precionar una tecla
  $('#'+num).css("box-shadow","0px 0px 10px black");
  //para que la sobra desapersca despues de pulsar una notas
  setTimeout(function(){
    $('#'+num).css("box-shadow","none");
  },300)
}
//melodia para reproducir
//var notes = [0,1,2,3,4,5,6,7];
//var tiempos = [1,2,3,4,4,3,2,1];
var notes = [9, 2, 2, 2, 2, 2, 2, 2, 4, 0, 1, 2, 3, 3, 3, 3, 2, 2, 2, 1, 1, 2, 1, 4, 2, 2, 2, 2, 2, 2, 2, 4, 0, 1, 2, 3, 3, 3, 3, 2, 2, 4, 4, 3, 1, 0];

var tiempos = [4, 1, 1, 2, 1, 1, 2, 1, 1, 1, 1, 4, 1, 1, 2, 1, 1, 2, 1, 1, 1, 1, 2, 2, 1, 1, 2, 1, 1, 2, 1, 1, 1, 1, 4, 1, 1, 2, 1, 1, 2, 1, 1, 1, 1, 4];

$('.boton').click(function() {
  for (var x = 0, ln = notes.length; x < ln; x++) {
    setTimeout(function(y) {
      tocar(notes[y]);
    }, ritmo(x) * 350, x);
  }
});
function ritmo(num) {
  suma = 0;
  for (c = 0; c < num ; c++) {
    suma = suma + tiempos[c];
  }
  return suma;
}

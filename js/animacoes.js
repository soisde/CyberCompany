$('.banner').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  prevArrow: false,
  nextArrow: false,
});

/*  show 1 - hide 1  */

$('.show-1-yes').click(function() {
  $('#target-1').show(500);
  $('.show-1-yes').hide(0);
  $('.hide-1-yes').show(0);
});
$('.hide-1-yes').click(function() {
  $('#target-1').hide(500);
  $('.show-1-yes').show(0);
  $('.hide-1-yes').hide(0);
});

/*  show 2 - hide 2 */

$('.show-2-yes').click(function() {
  $('#target-2').show(500);
  $('.show-2-yes').hide(0);
  $('.hide-2-yes').show(0);
});
$('.hide-2-yes').click(function() {
  $('#target-2').hide(500);
  $('.show-2-yes').show(0);
  $('.hide-2-yes').hide(0);
});

$('.show-3-yes').click(function() {
  $('#target-3').show(500);
  $('.show-3-yes').hide(0);
  $('.hide-3-yes').show(0);
});

$('.hide-3-yes').click(function() {
  $('#target-3').hide(500);
  $('.show-3-yes').show(0);
  $('.hide-3-yes').hide(0);
})

// Menu Mobile

document.querySelector(".abrir-menu").onclick = function (){
  document.documentElement.classList.add("menu-ativo");
}
document.querySelector(".fechar-menu").onclick = function (){
  document.documentElement.classList.remove("menu-ativo");
}


AOS.init();

window.onscroll = function(){
  var top = window.scrollY || document.documentElement.scrollTop;
  if(top > 800){
    //console.log("adicionar meu menu fixo " + top)
    document.getElementById('topoFixo').classList.add('menu-fixo');
    document.getElementById('topoFixo').classList.remove('site');
  }else{
    //console.log("remover meu menu fixo " + top)
    document.getElementById('topoFixo').classList.remove('menu-fixo');
    document.getElementById('topoFixo').classList.add('site');
  }
}

function formWhats(){

  var nome = '*Nome: *'+ document.getElementById('nome').value;
  var email = '*Email: *'+ document.getElementById('email').value;
  var tel = document.getElementById('tel').value;
  var mens = '*Mensagem: *'+ document.getElementById('mens').value;

  var agencia = 'Agencia TIPI'
  var assunto = 'Mensagem do site'

  var numfone = '5511973118790'
  var quebraDeLinha = '%0A'

  if(tel == ''){
    alert("o campo do celular e obrigatorio")
    return;
  }else{
    var tel = '*Fone: *' + document.getElementById('tel').value;
  }

window.open('https://api.whatsapp.com/send?phone=' + 
numfone + '&text=' +
assunto + '-' + agencia + quebraDeLinha + quebraDeLinha +
nome + quebraDeLinha +
email + quebraDeLinha +
tel + quebraDeLinha +
mens, '_blank');

form.reset();



}
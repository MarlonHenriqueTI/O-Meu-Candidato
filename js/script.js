jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});


   
   
});


function deletar(id, tabela){
  if(confirm("Tem certeza que deseja remover este registro? Esta ação não tem volta.")){
    window.location.href="http://omeucandidato.com/functions.php?deletar=sim&id="+id+"&tabela="+tabela;
  }
}

$(document).ready(function(){
    $('[name=telefone]').mask('(00) 00000-000#');
    $('[name=cpf]').mask('000.000.000-00');
});


$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      navigation : true, // Show next and prev buttons
 
      slideSpeed : 300,
      paginationSpeed : 400,
 
      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false,
      autoPlay: true,
      goToFirst: true
 
  });
 
});

$(document).ready(function() {
 
  $("#owl-cidades").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 4,
      itemsDesktop : [1199,4],
      itemsDesktopSmall : [979,3],
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : [0,1] // itemsMobile disabled - inherit from itemsTablet option
 
  });
 
});

$(document).ready(function() {
 
  $("#owl-pesquisa").owlCarousel({
 
      navigation : true, // Show next and prev buttons
 
      slideSpeed : 300,
      paginationSpeed : 400,
 
      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false,
      autoPlay: true,
      goToFirst: true
 
  });
 
});

$(document).ready(function() {
 
  $("#owl-politicos").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});


$(document).ready(function() {
 
  $("#owl-leis").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 5,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});


$(document).ready(function() {
 
$('.owl-carousel').owlCarousel({
    items: 1,
    loop: true,
    video: true,
    lazyLoad: true
}); 
 
});


$(document).ready(function() {
 
  $("#owl-slider-politico").owlCarousel({
 
      navigation : true, // Show next and prev buttons
 
      slideSpeed : 300,
      paginationSpeed : 400,
 
      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false,
      autoPlay: true,
      goToFirst: true
 
  });
 
});


function validacaoEmail() {
  var email = document.getElementById('campoemail');
usuario = email.value.substring(0, email.value.indexOf("@"));
dominio = email.value.substring(email.value.indexOf("@")+ 1, email.value.length);

if (!((usuario.length >=1) &&
    (dominio.length >=3) &&
    (usuario.search("@")==-1) &&
    (dominio.search("@")==-1) &&
    (usuario.search(" ")==-1) &&
    (dominio.search(" ")==-1) &&
    (dominio.search(".")!=-1) &&
    (dominio.indexOf(".") >=1)&&
    (dominio.lastIndexOf(".") < dominio.length - 1))) {
  alert("E-mail invalido, por favor corrija seu e-mail antes de continuar...");
}
}
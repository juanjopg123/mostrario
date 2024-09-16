$(document).ready(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#btn-ir-arriba').fadeIn();
    } else {
      $('#btn-ir-arriba').fadeOut();
    }
  });

  $('#btn-ir-arriba').click(function() {
    $('html, body').animate({scrollTop : 0}, 800);
    return false;
  });


  $('.img2').click(function() {
    var imagenGrande = $('#img').attr('src');
    var imagenPequena = $(this).attr('src');
    $('#img').attr('src', imagenPequena);
    $(this).attr('src', imagenGrande);
    //$('#img').fadeIn();
  });



  $(document).ready(function() {
    $(".menu-movil").hide();
  
    $(".logo-movil .logo-hambur").click(function() {
      $(".menu-movil").slideToggle("li");
      $(".logo-movil .logo-hambur").toggle();
      $(".logo-movil .logo-error").toggle();
    });
  
    $(".logo-movil .logo-error").click(function() {
      $(".menu-movil").slideToggle("li");
      $(".logo-movil .logo-hambur").toggle();
      $(".logo-movil .logo-error").toggle();
    });
  });
  

$("li a").hover(
  function() {
    $(this).addClass("hover");
  },
  function() {
    $(this).removeClass("hover");
  }
);

$("#login").submit(function(e){    
  e.preventDefault();
  var user = $("#userr").val();
  var pass = $("#psss").val();
  $.ajax({
      data: {user: user, pass: pass},
      url: 'php/login_panel.php',
      type: 'post',
      success: function(response){
          if(response == 2){
              window.location.href = 'formulario.php';
          } else {
              alert(response);
          }
      }
  });
});
});

function mostrarScroll() {
  let animado = document.querySelectorAll("#animado");
  let scrollTop = document.documentElement.scrollTop;
  for (var i = 0; i < animado.length; i++) {
    let alturaAnimado = animado[i].offsetTop;
    if (alturaAnimado - 600 < scrollTop) {
      animado[i].style.opacity = 1;
      animado[i].classList.add("mostrarArriba");
    }
  }
}

window.addEventListener('scroll', mostrarScroll);
$(document).ready(function() {
  $('#mobile').click( function(event){
        $('#minimenu')
          .css('display', 'block')
          .animate({opacity: 1, top: '0%'}, 200);
      });
  });
  /* Зaкрытие*/
  $('#miniclose').click( function(){
    $('#minimenu')
      .animate({opacity: 0, top: '45%'}, 200,
        function(){ // пoсле aнимaции
          $(this).css('display', 'none');
          $('#overlay').fadeOut(400);
          $('.content-item').css('height','auto');
        }
);
});

$("a.grouped_elements").fancybox();
$('a.callback').fancybox();
$('a.fancybox').fancybox();


     new ScrollMagic.Scene({triggerElement: ".trigger-0"})
    .setClassToggle(".header", "zipped").addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-7", duration: 700})
    .setTween(".fifteenth .title", {transform: "translateX(-20%)"}).addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-7", duration: 300})
    .setTween(".fifteenth i.line", {transform: "translateX(0)"}).addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".lamps", duration: 300})
    .setTween(".lamps img", {opacity: "1"}).addTo(controller);

    $(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
      $('#eye1').click( function(event){ // лoвим клик пo ссылки
        event.preventDefault(); // выключaем стaндaртную рoль элементa
        $('#overlay').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
          function(){ // пoсле выпoлнения предъидущей aнимaции
            $('.modal_wrap')
              .css('display', 'block');
            $('#modal_popup')
              .css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
              .animate({opacity: 1, top: '-1400px'}, 200);
              $('.content-item').css('height','1500px'); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
        });
      });
      /* Зaкрытие мoдaльнoгo oкнa*/
      $('#close, #overlay').click( function(){ // лoвим клик пo крестику или пoдлoжке
        $('#modal_popup')
          .animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
            function(){ // пoсле aнимaции
              $(this).css('display', 'none');
              $('#overlay').fadeOut(400);
              $('.content-item').css('height','auto'); // скрывaем пoдлoжку
            }
    );
});


});
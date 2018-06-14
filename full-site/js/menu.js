$(document).ready(function() {
  $('#mobile').click( function(event){
        $('#minimenu')
          .css('display', 'block')
          .animate({opacity: 1, top: '0%'}, 200);
      });
  /* Зaкрытие*/
  $('#miniclose').click( function(){
    $('#minimenu')
      .animate({opacity: 0, top: '45%'}, 200,
        function(){ // пoсле aнимaции
          $(this).css('display', 'none');
          $('#overlay').fadeOut(400);
          $('.content-item').css('height','auto');
    });
});

$('a.ch-reserv').fancybox({
    });

$('a.button.callback').fancybox({
        });


$('.form input, .form textarea').blur(function(){
      if($(this).val()){
          $(this).next().hide();
      } else {
          $(this).next().show();
      }
  });

});

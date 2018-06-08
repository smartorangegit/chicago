$('g').hover(function(){
  var level = this.dataset.level; var app = this.dataset.app; var sale = this.dataset.sale;
  $('span#level').html(level);  $('span#appart').html(app);  $('span#sale').html(sale);
});

// $('#g11').addClass('active');

$('g.g100').mouseover(function(){
  $(this).addClass('active');
  $('g#g11').removeClass('active');
  $('#strelka').fadeOut("slow");
});
$('g.g100').mouseleave(function(){
  $(this).removeClass('active');
});



$('g#g11').mouseover(function(){
  $(this).addClass('active');
});
$('g#g11').mouseleave(function(){
  $(this).removeClass('active');
});

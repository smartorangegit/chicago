<ul id="minimenu">
  <li id="miniclose" class="mobile">
    <li class="language"><?php /*Google Tag Manager*/ include_once('includes/lang_m.php'); ?></li>
    <li><a href="index.php" class="separate">Будинок</a></li>
    <li><a href="index.php#place" class="separate">Розташування</a></li>
    <li><a href="choise.php" class="separate">Квартири</a></li>
    <li><a href="index.php#builder" class="separate">Забудовник</a></li>
    <li><a href="progress.php" class="separate">Будівництво</a></li>
    <li><a href="index.php#contact" class="separate">Зв'язок</a></li>
  </li>
</ul>
<script>
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
</script>

<?php
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pieces = explode("/", $actual_link);
//print_r($pieces);
//echo $pieces[0]."//".$pieces[2]."/".$pieces[4]."/";
if($pieces[3] == "ru"){
$url_r = "$pieces[0]//$pieces[2]/$pieces[3]/$pieces[4]/";
$url_a = "$pieces[0]//$pieces[2]/$pieces[4]/";;
}
else{
$uRa = "https://$_SERVER[HTTP_HOST]"."$_SERVER[REQUEST_URI]";
$uRr = "https://$_SERVER[HTTP_HOST]".'/ru'."$_SERVER[REQUEST_URI]";
}
?>
<style media="screen">
  #budinok_open, #uwf_open{
    position: relative;
    color: white;
    text-transform: uppercase;
    cursor: pointer;
    font-size: 14px;
  }
  #budinok, #uwf_active{
    position: absolute;
    height: 0px;
    box-sizing: border-box;
    overflow: hidden;
    background: #EF2732;
    margin-top: 10px;
    margin-left: -8px;
    transition: 0.35s;
    -webkit-transition: 0.35s;
  }
  #uwf_active{
    padding: 0 15px;
    margin-left: -1px;
    margin-top: 8px;
  }
  #budinok li, #uwf_active li{
    display: block;
    border: none;
    padding: 10px;

  }
</style>
<header class="header">
  <div class="wrapper">
    <a href="/" class="logo">
      <img src="/img/chicago-logo.png" alt="Житловий комплекс CHICAGO Central House м. Київ" title="Житловий комплекс CHICAGO Central House м. Київ">
    </a>
    <ul class="header-nav">
      <li id="mobile" class="mobile">
        <ul id="minimenu">
          <li id="miniclose" class="mobile">
            <li class="language"><?php /*Google Tag Manager*/ include_once('../includes/lang_m.php'); ?></li>
            <li><a href="/kub/" class="separate">куб</a></li>
            <li><a href="/#place" class="separate">Розташування</a></li>
            <li><a href="/choice/" class="separate">Квартири</a></li>
			      <li><a href="/torgovie-pomescheniya/" class="separate">Комерційна нерухомість</a></li>
            <li><a href="/news/" class="separate">Новини</a></li>
            <li><a href="/#builder" class="separate">Забудовник</a></li>
            <li><a href="/progress/" class="separate">Будівництво</a></li>
            <li><a href="/#contact" class="separate">Зв'язок</a></li>
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
      <li><a href="/kub/" class="separate">куб</a></li>
      <li><a href="/#place" class="separate">Розташування</a></li>
            <li><span id="budinok_open">Будинок &#9660;</span>
        <ul id="budinok">
          <li><a href="/choice/" class="separate">Квартири</a></li>
          <li><a href="/torgovie-pomescheniya/" class="separate">Комерційна<br>нерухомість</a></li>
        </ul></li>
      <li><a href="/#builder" class="separate">Забудовник</a></li>
      <li><a href="/news/" id="uwf_open" class="separate">Новини &#9660;</a>
        <ul id="uwf_active">
          <li><a href="/fashion/">UFW</a></li>
        </ul>
      </li>
      <li><a href="/progress/" class="separate">Будівництво</a></li>
      <li><a href="/#contact" class="separate">Зв'язок</a></li>
    </ul>
    <div class="header-callback">
      Телефон відділу продажу <em class="em_phone" style="display:none;">(044) 22-77-244</em><p class="phone_display"><a href="tel:(044) 22-77-244">(044) 22-77-244</a></p>
      <div class="header-button"><a href="#callback" class="button callback">Замовити дзвінок</a></div>
    </div>
    <?php /*Google Tag Manager*/ include_once($_SERVER['DOCUMENT_ROOT'].'/includes/lang.php'); ?>
  </div>
</header>
<script>
function telephone(queryClass) {
	var elem = $(queryClass);
	var phoneNumber = elem.html();
	var href = 'tel:' + phoneNumber;
	var phoneDisplay = elem.siblings('.phone_display');
	var phoneDisplayLink = phoneDisplay.find('a');
	phoneDisplayLink.attr('href', href);
	phoneDisplayLink.html(phoneNumber);
}
setTimeout(function(){
	telephone('.em_phone');
}, 2000);

$('#budinok_open, #budinok').hover(
  function(){
  $('#budinok').css('height','95px');
},function(){
  $('#budinok').css('height','0');
});

$('#uwf_open, #uwf_active').hover(
  function(){
  $('#uwf_active').css('height','35px');
},function(){
  $('#uwf_active').css('height','0');
});

</script>

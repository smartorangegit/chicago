<?php
session_start();
/*Utm 01.02.2018*/
if ($_GET)
{
    $utm=array(
        'utm_source' ,
        'utm_medium',
        'utm_campaign' ,
        'utm_term',
        'utm_content'
    );
    foreach($_GET as $key=>$t)
    {
        $metka= array_search($key,$utm);
        if ($metka!==FALSE)
        {
            $_SESSION[$utm[$metka]]=$t;
        }
    }
}
/*Utm End*/
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
  #budinok_open, #uwf_open, #ctc_open{
    position: relative;
    color: white;
    text-transform: uppercase;
    cursor: pointer;
    font-size: 14px;
  }
  #budinok, #uwf_active, #ctc_active{
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
  #budinok li, #uwf_active li, #ctc_active li{
    display: block;
    border: none;
    padding: 10px;
  }
</style>
<? include('preloader_new.php');  ?>

<header class="header">
  <div class="wrapper">
    <a href="/" class="logo">
      <img src="/img/chicago-logo.png" alt="Житловий комплекс CHICAGO Central House м. Київ" title="Житловий комплекс CHICAGO Central House м. Київ">
    </a>
    <ul class="header-nav">
      <li id="mobile" class="mobile">
        <ul id="minimenu">
          <li id="miniclose" class="mobile">
            <li class="language"><?php /*Google Tag Manager*/ if ($_SERVER[REQUEST_URI] != '/atmosfera/'){include($_SERVER['DOCUMENT_ROOT'].'/includes/lang_m.php');} ?></li>
			<li class="menu-close">
              <svg style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M437.5,386.6L306.9,256l130.6-130.6c14.1-14.1,14.1-36.8,0-50.9c-14.1-14.1-36.8-14.1-50.9,0L256,205.1L125.4,74.5  c-14.1-14.1-36.8-14.1-50.9,0c-14.1,14.1-14.1,36.8,0,50.9L205.1,256L74.5,386.6c-14.1,14.1-14.1,36.8,0,50.9  c14.1,14.1,36.8,14.1,50.9,0L256,306.9l130.6,130.6c14.1,14.1,36.8,14.1,50.9,0C451.5,423.4,451.5,400.6,437.5,386.6z"/></svg>
            </li>
            <li><a href="/kub/" class="separate">куб</a></li>
            <li><a href="/#place" class="separate">Розташування</a></li>
            <li><a href="/choice/" class="separate">Квартири</a></li>
			<li><a href="/kvartiri-s-remontom/" class="separate">Квартири з ремонтом</a></li>
			      <li><a href="/torgovie-pomescheniya/" class="separate">Комерційна нерухомість</a></li>
				  <li><a href="/atmosfera/" class="separate">SFERA Living System</li>
				  
            <li><a href="/news/" class="separate">Новини</a></li>
            <li><a href="/#builder" class="separate">Забудовник</a></li>
            <li><a href="/progress/" class="separate">Будівництво</a></li>
			<li><a href="/ctc/" class="separate">Client Technical Control</a></li>
            <li><a href="/#contact" class="separate">Зв'язок</a></li>
            <li>
              <a href="/progress/#webcam" class="separate">
              <img class="webcam_svg" src="/img/webcam.svg" alt="Webcam">
              </a>
            </li>
        </li>
      </ul>
	  <style>
.menu-close {
  position: absolute;
  top: 5px;
  right: 5px;
  width: 50px;
  fill: #fff;
}

.menu-icon_left {
  float: left;
  clear: both;
  padding-left: 5px;
}

.nav__item_margin-top {
  margin-top: 40px;
}
	  </style>
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
  
         $('.menu-close').click( function(){
        $('#minimenu').animate({opacity: 0, top: '45%'}, 200, function(){
               // пoсле aнимaции
                $(this).css('display', 'none');
                $('#overlay').fadeOut(400);
                $('.content-item').css('height','auto');
        });
       });
    </script>
      <li><a href="/kub/" class="separate">куб</a></li>
      <li><a href="/#place" class="separate">Розташування</a></li>
            <li><span id="budinok_open">Будинок &#9660;</span>
        <ul id="budinok">
          <li><a href="/choice/" class="separate">Квартири</a></li>
		  <li><a href="/kvartiri-s-remontom/" class="separate">Квартири з ремонтом</a></li>
          <li><a href="/torgovie-pomescheniya/" class="separate">Комерційна<br>нерухомість</a></li>
		  <li><a href="/atmosfera/" class="separate">SFERA Living System</li>
		  
        </ul></li>
      <li><a href="/#builder" class="separate">Забудовник</a></li>
      <li><a href="/news/" id="uwf_open" class="separate">Новини &#9660;</a>
        <ul id="uwf_active">
          <li><a href="/fashion/" class="separate">UFW</a></li>
        </ul>
      </li>
      <li><a href="/progress/" id="ctc_open" class="separate">Будівництво &#9660;</a>
        <ul id="ctc_active">
          <li><a href="/ctc/" class="separate">Client Technical Control</a>
          </li>
        </ul>
      </li>
      <li><a href="/#contact" class="separate">Зв'язок</a></li>
      <li>
        <a href="/progress/#webcam" class="separate">
        <img class="webcam_svg" src="/img/webcam.svg" alt="Webcam">
        </a>
      </li>
    </ul>
    <div class="header-callback">
      Телефон відділу продажу <em class="em_phone" style="display:none;">(044) 49-80-400</em><p class="phone_display"><a href="tel:(044) 49-80-400">(044) 49-80-400</a></p>
      <div class="header-button"><a href="#callback" class="button callback">Замовити дзвінок</a></div>
    </div>
    <?php /*Google Tag Manager*/ if ($_SERVER[REQUEST_URI] != '/atmosfera/'){include_once($_SERVER['DOCUMENT_ROOT'].'/includes/lang.php');} ?>
			<a href="http://saga-development.com.ua/" class="saga-logo <?if(count(explode("/", $_SERVER['REQUEST_URI']))>2){echo 'saga_logo_off';}?>" target="_blank">
			<img src="/img/saga-logo.svg">
		</a>
		<style>
		.saga-logo {
		    position: fixed;
		    top: 138px;
		    right: 125px;
		    display: block;
		    width: 60px;
		    transition: 0.6s;
				-webkit-transition: 0.6s;
		}
		.zipped .saga-logo {
			top: 65px;
			right: 5px;

		}
    .menu-close {
      position: absolute;
      top: 5px;
      right: 5px;
      width: 50px;
      fill: #fff;
    }
		@media screen and (max-width: 768px){
			.saga-logo {
				right: 30px;
				top: 128px;
			}
			.zipped .saga-logo {
				top: 84px;
				right: 5px;

		}
			.saga_logo_off {display:none;}
		}
		</style>
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
  $('#budinok').css('height','170px');
},function(){
  $('#budinok').css('height','0');
});

$('#uwf_open, #uwf_active').hover(
  function(){
  $('#uwf_active').css('height','35px');
},function(){
  $('#uwf_active').css('height','0');
});
$('#ctc_open, #ctc_active').hover(
  function(){
  $('#ctc_active').css('height','35px');
},function(){
  $('#ctc_active').css('height','0');
});
</script>

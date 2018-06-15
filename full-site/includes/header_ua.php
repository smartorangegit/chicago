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
    margin-left: 0px;
  }
  #budinok li, #uwf_active li{
    display: block;
    border: none;
    padding: 10px;

  }
  .webcam_svg {
    display: inline-block;
    vertical-align: bottom;
  }
  .header li a {
    -webkit-font-smoothing: antialiased;
    font-weight: 400;
  }
  @media screen and (max-width: 856px) {
    .webcam_svg{
      vertical-align: middle;
    }
  }
</style>
<? include('preloader.php'); ?>

<header class="header ">
  <div class="wrapper clearfix">
    <a href="/" class="logo">
      <img src="/img/chicago-logo.png" alt="Житловий комплекс CHICAGO Central House м. Київ" title="Житловий комплекс CHICAGO Central House м. Київ">
    </a>
    <ul class="header-nav">
      <li id="mobile" class="mobile">
        <ul id="minimenu">
          <li id="miniclose" class="mobile menu-icon_left" style="margin-left: 5px;">
            <li class="language">
              <?php /*Google Tag Manager*/ include_once('../includes/lang_m.php'); ?>
            </li>
            <li class="menu-close">
              <svg style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M437.5,386.6L306.9,256l130.6-130.6c14.1-14.1,14.1-36.8,0-50.9c-14.1-14.1-36.8-14.1-50.9,0L256,205.1L125.4,74.5  c-14.1-14.1-36.8-14.1-50.9,0c-14.1,14.1-14.1,36.8,0,50.9L205.1,256L74.5,386.6c-14.1,14.1-14.1,36.8,0,50.9  c14.1,14.1,36.8,14.1,50.9,0L256,306.9l130.6,130.6c14.1,14.1,36.8,14.1,50.9,0C451.5,423.4,451.5,400.6,437.5,386.6z"/></svg>
            </li>
            <li class="nav__item_margin-top"><a href="/kub/" class="separate">куб</a></li>
            <li><a href="/#place" class="separate">Розташування</a></li>
            <li><a href="/choice/" class="separate">Квартири</a></li>
			      <li><a href="/torgovie-pomescheniya/" class="separate">Комерційна нерухомість</a></li>
				    <li><a href="/atmosfera/" class="separate">SFERA Living System</li>
            <li><a href="/news/" class="separate">Новини</a></li>
            <li><a href="/#builder" class="separate">Забудовник</a></li>
            <li><a href="/progress/" class="separate">Будівництво</a></li>
            <li><a href="/#contact" class="separate">Зв'язок</a></li>
            <li>
              <a href="/progress/#webcam" class="separate">
              <svg class="webcam_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.810135 40" width="20" height="20" fill="#ffffff">
              <g transform="matrix(.5655 0 0 .56326 -8.34 -8.44)">
                <path d="M69.502 78.115l-11.656-11.43a29.247 29.247 0 0 1-14.974 4.105c-5.465 0-10.586-1.5-14.975-4.108L16.105 78.247a4.526 4.526 0 0 0-.363 6.058 4.525 4.525 0 0 0 5.99.967c2.9-1.88 12.227-6.758 20.458-6.758 11.184 0 21.72 6.694 21.825 6.762a4.51 4.51 0 0 0 2.452.724h.123a4.525 4.525 0 0 0 2.912-7.885z"/>
                <circle r="7.599" cy="41.373" cx="42.872"/>
                <path d="M42.872 14.985C28.268 14.985 16.364 26 15.792 41h16.204c.548-6 5.216-9.843 10.876-9.843C48.532 31.157 53.2 35 53.747 41h16.205c-.57-15-12.477-26.015-27.08-26.015zm0 9.447a2.66 2.66 0 1 1 0-5.322 2.66 2.66 0 0 1 0 5.322zM42.872 52.304c-5.66 0-10.328-4.325-10.876-9.843H15.793c.572 14.465 12.475 26.016 27.08 26.016 14.602 0 26.508-11.55 27.08-26.015H53.745c-.547 5.52-5.215 9.844-10.874 9.844z"/>
              </g>
              </svg>
              </a>
            </li>
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
          <li><a href="/kvartiri-s-remontom/" class="separate">Квартири з ремонтом</li>
          <li><a href="/torgovie-pomescheniya/" class="separate">Комерційна<br>нерухомість</a></li>
          <li><a href="/atmosfera/" class="separate">SFERA Living System</li>
        </ul></li>
      <li><a href="/#builder" class="separate">Забудовник</a></li>
      <li><a href="/news/" id="uwf_open" class="separate">Новини &#9660;</a>
        <ul id="uwf_active">
          <li><a href="/fashion/">UFW</a></li>
        </ul>
      </li>
      <li><a href="/progress/" class="separate">Будівництво</a></li>
      <li><a href="/#contact" class="separate">Зв'язок</a></li>
      <li>
        <a href="/progress/#webcam" class="separate">
          <svg class="webcam_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.810135 40" width="20" height="20" fill="#ffffff">
          <g transform="matrix(.5655 0 0 .56326 -8.34 -8.44)">
            <path d="M69.502 78.115l-11.656-11.43a29.247 29.247 0 0 1-14.974 4.105c-5.465 0-10.586-1.5-14.975-4.108L16.105 78.247a4.526 4.526 0 0 0-.363 6.058 4.525 4.525 0 0 0 5.99.967c2.9-1.88 12.227-6.758 20.458-6.758 11.184 0 21.72 6.694 21.825 6.762a4.51 4.51 0 0 0 2.452.724h.123a4.525 4.525 0 0 0 2.912-7.885z"/>
            <circle r="7.599" cy="41.373" cx="42.872"/>
            <path d="M42.872 14.985C28.268 14.985 16.364 26 15.792 41h16.204c.548-6 5.216-9.843 10.876-9.843C48.532 31.157 53.2 35 53.747 41h16.205c-.57-15-12.477-26.015-27.08-26.015zm0 9.447a2.66 2.66 0 1 1 0-5.322 2.66 2.66 0 0 1 0 5.322zM42.872 52.304c-5.66 0-10.328-4.325-10.876-9.843H15.793c.572 14.465 12.475 26.016 27.08 26.016 14.602 0 26.508-11.55 27.08-26.015H53.745c-.547 5.52-5.215 9.844-10.874 9.844z"/>
          </g>
          </svg>
        </a>
      </li>
    </ul>
    <div class="header-callback">
      Телефон відділу продажу <em class="em_phone" style="display:none;">(044) 22-77-244</em><p class="phone_display"><a href="tel:(044) 22-77-244">(044) 22-77-244</a></p>
      <div class="header-button"><a href="#callback" class="button callback">Замовити дзвінок</a></div>
    </div>
 <!--   <a href="http://saga-development.com.ua/" class="saga-logo" target="_blank" title="Saga">
      <img src="/img/saga-logo.svg" alt="Saga">
    </a>
    <style>
    .saga-logo {
        position:absolute;
        top: 39%; /* 50 */
        right:-75px;
        width: 54px;
        transform: translateY(-50%);
      }
      .saga-logo img{
        width: 100%;
        height: auto;
      }
    @media screen and (max-width: 768px){
    	.saga-logo {
    		right: 30px;
    	}
    }
    </style>-->
    <?php /*Google Tag Manager*/ include_once($_SERVER['DOCUMENT_ROOT'].'/includes/lang.php'); ?>
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
  $('#budinok').css('height','162px');
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

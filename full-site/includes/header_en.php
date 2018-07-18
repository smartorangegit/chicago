<?php
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pieces = explode("/", $actual_link);
//print_r($pieces);
//echo $pieces[0]."//".$pieces[2]."/".$pieces[4]."/";

		if($pieces[3] == "en"){
$ua =  str_replace('/en/', "/",$actual_link);
$ru = str_replace('/en/', "/ru/",$actual_link);

		}
		else{
			$uRa = "https://$_SERVER[HTTP_HOST]"."$_SERVER[REQUEST_URI]";

			$lRr = "https://$_SERVER[HTTP_HOST]".'/ru'."$_SERVER[REQUEST_URI]";

			$uRn = "https://$_SERVER[HTTP_HOST]".'/en'."$_SERVER[REQUEST_URI]";
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
    padding: 0 8px;
    margin-left: -4px;
    margin-top: 8px;
  }
  #budinok li, #uwf_active li{
    display: block;
    border: none;
    padding: 10px;

  }
</style>
<? include('preloader.php'); ?>
<style>
/* Preloader start */
.preloader-container {
  width: 100%;
  height: 100vh;
  background-color: #405174;
  position: fixed;
  top: 0;
  z-index: 999999999;
}

/* Circle start */
@keyframes svg-circle {
  from { stroke-width: 0; }
  to { stroke-width: 550; }
}
.svg-circle {
  stroke: #ffffff;
  stroke-linecap: round;
  stroke-width: 550;
  animation: svg-circle 2s;
  animation-fill-mode: both;
}
/* Circle end */

/* Letters start */
.svg-letters {
  fill: #405174;
}
@keyframes svg-letters_upper {
  from { opacity: 0; }
  to { opacity: 1; }
}

.svg-letters_upper path{
  opacity: 0;
  animation-name: svg-letters_upper;
  animation-fill-mode: forwards;
  animation-duration: 1s;
}

.svg-Saga {animation-delay: 1.6s;}
.svg-sAga {animation-delay: 1.8s;}
.svg-saGa {animation-delay: 2s;}
.svg-sagA {animation-delay: 2.2s;}


.svg-letters_lower {
  opacity: 0;
  animation-name: svg-letters_upper;
  animation-fill-mode: forwards;
  animation-duration: 1s;
  animation-delay: 2.8s;
}
/* Letters end */

/* Loading circle start */
@keyframes svg-loading-cirlce {
  from {stroke-dashoffset: 435;}
  to {stroke-dashoffset: 0;}
}

.svg-loading-circle {
  stroke:#b5b5b5;
  stroke-width: 2px;
  fill: none;
  stroke-dasharray: 435;
  stroke-dashoffset: 435;
  animation-name: svg-loading-cirlce;
  animation-fill-mode: forwards;
  animation-duration: 7s;
}

.svg-loading-circle__text {
  font-family: sans-serif;
  font-size: 30px;
  font-weight: bold;
  fill: #b5b5b5;
}
/* Loading circle end */

/* Outer lines start */
@keyframes svg-outer-lines {
  0% {stroke-dashoffset: 2684;}
  50% {opacity:1;}
  100% {stroke-dashoffset: 0; opacity: 0;}
}
.svg-outer-lines path {
  stroke: #ffffff;
  stroke-width: 2;
  stroke-dasharray: 2684;
  stroke-dashoffset: 2684;
  animation-name: svg-outer-lines;
  animation-duration: 1s;
  animation-delay: 3s;
  animation-fill-mode: forwards;
}
path.svg-outer_s {animation-delay: 3s;}
path.svg-outer_a_1_3 {animation-delay: 3.2s;}
path.svg-outer_a_2 {animation-delay: 3.4s;}
path.svg-outer_a_1_1 {animation-delay: 3.6;}
path.svg-outer_g {animation-delay: 3.8s;}
path.svg-outer_a_1_2 {animation-delay: 4s;}
/* Outer lines end */

/* Inner lines start */
@keyframes svg-inner-lines {
  from {stroke-dashoffset: 185;}
  to {stroke-dashoffset: 0;}
}

.svg-inner-lines path {
  stroke:#405174;
  stroke-width: 2;
  stroke-dasharray: 185;
  stroke-dashoffset: 185;
  animation-name: svg-inner-lines;
  animation-duration: 1s;
  animation-delay: 3.1s;
  animation-fill-mode: forwards;
}

path.svg-inner_s {animation-delay: 3.1s;}
path.svg-inner_a_1_3 {animation-delay: 3.3s;}
path.svg-inner_a_2 {animation-delay: 3.5s;}
path.svg-inner_a_1_1 {animation-delay: 3.7;}
path.svg-inner_g {animation-delay: 3.9s;}
path.svg-inner_a_1_2 {animation-delay: 4.1s;}
/* Inner lines end */

/* Svg remove content start */

@keyframes removeCircle {
  15% {transform: translateY(20px);opacity:1}
  100%{transform: translateY(-400px);opacity:0;}
}

.remove-svg .svg-circle {
  animation-name: removeCircle;
  animation-duration: 1s;
  animation-fill-mode: forwards;
}

.remove-svg .svg-loading-circle-container {
  animation-name: removeCircle;
  animation-duration: 1s;
  animation-delay: .5s;
  animation-fill-mode: forwards;
}

.preloader-container {
  transition: all 1s 1.2s;
}

.remove-svg.preloader-container {
  opacity: 0;
  transform: translateY(-100%);
}

/* Svg remove content end */

/* Responsive svg start */
@media only screen and (max-width: 870px) {
  .svg-all-content {
      transform: translate(-20%, 35%) scale(1.5);
  }
}
@media only screen and (max-width: 500px) {
  .svg-all-content {
      transform: translate(-45%, 35%) scale(2);
  }
}
/* Responsive svg end */
/* Preloader end */
</style>
<header class="header">
  <div class="wrapper">
    <a href="/en/" class="logo">
      <img src="/img/chicago-logo.png" alt="Жилой комплекс CHICAGO Central House г. Киев" title="Жилой комплекс CHICAGO Central House г. Киев">
    </a>
    <ul class="header-nav">
      <li id="mobile" class="mobile">
        <ul id="minimenu">
          <li id="miniclose" class="mobile">

            <li class="language">
              <div class="lang_m">
<a class="separate" href="<?php echo $ua;?>">UA</a>
<a class="separate" href="<?php echo $ru;?>">RU</a>
<a class="separate" href="<?php echo $actual_link?>">EN</a>
              </div>
            </li>
			<li class="menu-close">
              <svg style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M437.5,386.6L306.9,256l130.6-130.6c14.1-14.1,14.1-36.8,0-50.9c-14.1-14.1-36.8-14.1-50.9,0L256,205.1L125.4,74.5  c-14.1-14.1-36.8-14.1-50.9,0c-14.1,14.1-14.1,36.8,0,50.9L205.1,256L74.5,386.6c-14.1,14.1-14.1,36.8,0,50.9  c14.1,14.1,36.8,14.1,50.9,0L256,306.9l130.6,130.6c14.1,14.1,36.8,14.1,50.9,0C451.5,423.4,451.5,400.6,437.5,386.6z"/></svg>
            </li>
            <li><a href="/en/kub/" class="separate">cube</a></li>
            <li><a href="/en/#place" class="separate">Location</a></li>
            <li><a href="/en/choice/" class="separate">flats</a></li>
			<li><a href="/en/torgovie-pomescheniya/" class="separate">commercial premises</a></li>
            <li><a href="/en/news/" class="separate">news</a></li>
            <li><a href="/en/#builder" class="separate">developer</a></li>
            <li><a href="/en/progress/" class="separate">construction</a></li>
            <li><a href="/en/#contact" class="separate">contact us</a></li>
            <li>
              <a href="en/progress/#webcam" class="separate">
              <img class="webcam_svg" src="/img/webcam.svg" alt="Webcam">
              </a>
            </li>
        </ul>
      </li>

      <li><a href="/en/kub/" class="separate">cube</a></li>
      <li><a href="/en/#place" class="separate">Location</a></li>
      <li><span id="budinok_open">house &#9660;</span>
        <ul id="budinok">
          <li><a href="/en/choice/" class="separate">flats</a></li>
          <li><a href="/en/torgovie-pomescheniya/" class="separate">commercial <br> premises</a></li>
        </ul></li>
			<li><a href="/en/#builder" class="separate">developer</a></li>
      <li><a href="/en/news/" id="uwf_open" class="separate">news  &#9660;</a>
				<ul id="uwf_active">
					<li><a href="/en/fashion/" class="separate">UFW</a></li>
				</ul>
			</li>
      <li><a href="/en/progress/" class="separate">construction</a></li>
      <li><a href="/en/#contact" class="separate">contact us</a></li>
      <li>
        <a href="/en/progress/#webcam" class="separate">
        <img class="webcam_svg" src="/img/webcam.svg" alt="Webcam">
        </a>
      </li>
    </ul>
    <div class="header-callback">
      Sales department telephone number <em class="em_phone" style="display:none;">(044) 49-80-400</em><p class="phone_display"><a href="tel:(044) 49-80-400">(044) 49-80-400</a></p>
      <div class="header-button"><a href="#callback" class="button callback">callback</a></div>
    </div>
    <div class="lang">
<a href="<?php echo $ua;?>">UA</a>
<a href="<?php echo $ru;?>">RU</a>
<a href="<?php echo $actual_link?>">EN</a>
    </div>
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
<style media="screen">
  .lang_m {
    /*position: absolute;*/
    right: -70px;
    top: 8px;
  }
    .lang_m a {
      /*display: inline-block;*/
      height: 14px;
      color: white;
      padding-right: 3px;
      font-size: 10px;
      text-transform: uppercase;
    }
    li.language .lang_m{
      position: static;
      line-height: 36px;
      padding-top: 12px;
    }
    li.language .lang_m a{
      display: inline-block!important;
    }
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
         $('.menu-close').click( function(){
        $('#minimenu').animate({opacity: 0, top: '45%'}, 200, function(){
               // пoсле aнимaции
                $(this).css('display', 'none');
                $('#overlay').fadeOut(400);
                $('.content-item').css('height','auto');
        });
       });
</script>

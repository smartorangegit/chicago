<?php
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pieces = explode("/", $actual_link);
//print_r($pieces);
//echo $pieces[0]."//".$pieces[2]."/".$pieces[4]."/";
if($pieces[3] == "ru" || $pieces[3] == "en"){
$urllang = str_replace('/ru', "",$actual_link);
$urllang_n = str_replace('/ru', "/en",$actual_link);

$url_r = "https://$_SERVER[HTTP_HOST]"."$_SERVER[REQUEST_URI]";
$url_a = $urllang;
$url_n = $urllang_n;
}
else{
$uRa = "https://$_SERVER[HTTP_HOST]"."$_SERVER[REQUEST_URI]";
$uRr = "https://$_SERVER[HTTP_HOST]".'/ru'."$_SERVER[REQUEST_URI]";
$uRn = "https://$_SERVER[HTTP_HOST]".'/en'."$_SERVER[REQUEST_URI]";
}
//echo $uRa ;
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
    padding: 0 19.5px;
    margin-left: 0px;
    margin-top: 8px;
  }
  #budinok li, #uwf_active li{
    display: block;
    border: none;
    padding: 10px;

  }
</style>
<? include('preloader.php'); ?>

<header class="header">
  <div class="wrapper clearfix">
    <a href="/ru/" class="logo">
      <img src="/img/chicago-logo.png" alt="Жилой комплекс CHICAGO Central House г. Киев" title="Жилой комплекс CHICAGO Central House г. Киев">
    </a>
    <ul class="header-nav">
      <li id="mobile" class="mobile">
        <ul id="minimenu">
          <li id="miniclose" class="mobile">

            <li class="language">
              <div class="lang_m">
               <a href="<?if(!empty($url_a)){ echo $url_a;}else{ echo $uRa;}?>">UA</a>
               <a href="<?if(!empty($url_r)){ echo $url_r;}else{ echo $uRr;}?>">RU</a>
               <a href="<?if(!empty($url_n)){ echo $url_n;}else{ echo $uRn;}?>">EN</a>
              </div>
            </li>
            <li><a href="/ru/kub/" class="separate">куб</a></li>
            <li><a href="/ru/#place" class="separate">расположение</a></li>
            <li><a href="/ru/choice/" class="separate">Квартиры</a></li>
			      <li><a href="/ru/torgovie-pomescheniya/" class="separate">Коммерческая недвижимость</a></li>
            <li><a href="/ru/news/"class="separate">новости</a></li>
            <li><a href="/ru/#builder" class="separate">Застройщик</a></li>
            <li><a href="/ru/progress/" class="separate">строительство</a></li>
            <li><a href="/ru/#contact" class="separate">связь</a></li>
        </ul>
      </li>

      <li><a href="/ru/kub/" class="separate">куб</a></li>
      <li><a href="/ru/#place" class="separate">расположение</a></li>
            <li><span id="budinok_open">Дом &#9660;</span>
        <ul id="budinok">
          <li><a href="/ru/choice/" class="separate">Квартиры</a></li>
          <li><a href="/ru/torgovie-pomescheniya/" class="separate">Коммерческая <br> недвижимость</a></li>
        </ul></li>
        <li><a href="/ru/#builder" class="separate">Застройщик</a></li>
        <li><a href="/ru/news/" id="uwf_open" class="separate">новости &#9660;</a>
          <ul id="uwf_active">
            <li><a href="/ru/fashion/">UFW</a></li>
          </ul>
        </li>
      <li><a href="/ru/progress/" class="separate">строительство</a></li>
      <li><a href="/ru/#contact" class="separate">связь</a></li>
    </ul>
    <div class="header-callback">

				Телефон отдела продаж <em class="em_phone" style="display:none;">(044) 22-77-244</em><p class="phone_display"><a href="tel:(044) 22-77-244">(044) 22-77-244</a></p>
				<a href="#callback" class="button callback">заказать звонок</a>
			</div>
<!--	<a href="http://saga-development.com.ua/" class="saga-logo" target="_blank" title="Saga">
      <img src="/img/saga-logo.svg" alt="Saga">
    </a>
    <style>
    .saga-logo {
        position:absolute;
        top: 50%; /* 50 */
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
    </style> -->
			<a href="http://saga-development.com.ua/" class="saga-logo <?if(count(explode("/", $_SERVER['REQUEST_URI']))>3){echo 'saga_logo_off';}?>" target="_blank">
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
    <div class="lang">
     <a href="<?if(!empty($url_a)){ echo $url_a;}else{ echo $uRa;}?>">UA</a>
     <a href="<?if(!empty($url_r)){ echo $url_r;}else{ echo $uRr;}?>">RU</a>
     <a href="<?if(!empty($url_n)){ echo $url_n;}else{ echo $uRn;}?>">EN</a>
    </div>
  </div>
</header>
<style media="screen">
.header-callback{
  margin-right: 20px;
}
.lang {
  position: absolute;
  right: -14px;
  top: 8px;
}
.lang a {
  display: block;
  height: 18px;
  line-height: 20px;
  color: white;
  padding-right: 3px;
  font-size: 10px;
  text-transform: uppercase;
}
@media only screen and (max-width:768px){
  .lang {
    display: none;
  }
}
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
    @media only screen and (min-width:769px) {
      .header .logo {
        width: 250px;
      }
      .header .logo img {
        max-width: 100%;
      }
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
</script>

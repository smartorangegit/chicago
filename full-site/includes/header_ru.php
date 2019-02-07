<?php
session_start();
/*Utm 01.02.2018*/
if ($_GET) {
    $utm = array(
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'utm_term',
        'utm_content'
    );
    foreach ($_GET as $key => $t) {
        $metka = array_search($key, $utm);
        if ($metka !== FALSE) {
            $_SESSION[$utm[$metka]] = $t;
        }
    }
}
/*Utm End*/

$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pieces = explode("/", $actual_link);
//print_r($pieces);
//echo $pieces[0]."//".$pieces[2]."/".$pieces[4]."/";
if ($pieces[3] == "ru" || $pieces[3] == "en") {
    $urllang = str_replace('/ru', "", $actual_link);
    $urllang_n = str_replace('/ru', "/en", $actual_link);

    $url_r = "https://$_SERVER[HTTP_HOST]" . "$_SERVER[REQUEST_URI]";
    $url_a = $urllang;
    $url_n = $urllang_n;
} else {
    $uRa = "https://$_SERVER[HTTP_HOST]" . "$_SERVER[REQUEST_URI]";
    $uRr = "https://$_SERVER[HTTP_HOST]" . '/ru' . "$_SERVER[REQUEST_URI]";
    $uRn = "https://$_SERVER[HTTP_HOST]" . '/en' . "$_SERVER[REQUEST_URI]";
}
//echo $uRa ;
?>
<? /* include('preloader.php');  */ ?>
<? /* include('preloader_new.php');  */ ?>
<? include($_SERVER['DOCUMENT_ROOT'] . '/includes/preloader_new/preloader_newYear.php'); ?>

<header class="header">
    <div class="wrapper">
        <a href="/ru/" class="logo">
            <img src="/img/chicago-logo.png" alt="Жилой комплекс CHICAGO Central House г. Киев"
                 title="Жилой комплекс CHICAGO Central House г. Киев">
        </a>
        <div id="mobile_menu_open" class="burger mobile">
          <span></span>
          <p>меню</p>
        </div>
        <div class="header-nav">
          <ul class="nav-list flex">
            <li><a href="/ru/kub/" class="separate">куб</a></li>
            <li><a href="/ru/#place" class="separate">расположение</a></li>
            <li><span id="budinok_open">Дом &#9660;</span>
              <ul id="budinok">
                <li><a href="/ru/choice/" class="separate">Квартиры</a></li>
                <li><a href="/ru/kvartiri-s-remontom/" class="separate">Квартиры с ремонтом</a></li>
                <li><a href="/ru/torgovie-pomescheniya/" class="separate">Коммерческая <br> недвижимость</a></li>
                <!--<li><a href="/ru/atmosfera/" class="separate">SFERA Living System</li>-->
                <li><a href="/ru/service-department/" class="separate">ДЛЯ ТЕХ КТО ПРИОБРЕЛ</li>
              </ul>
              </li>
              <li><a href="/ru/#builder" class="separate">Застройщик</a></li>
              <li><a href="/ru/news/" id="uwf_open" class="separate">новости &#9660;</a>
                <ul id="uwf_active">
                  <li><a href="/ru/fashion/" class="separate">UFW</a></li>
                </ul>
              </li>
              <li><a href="/ru/progress/" id="ctc_open" class="separate">строительство ▼</a>
                <ul id="ctc_active">
                  <li><a href="/ru/ctc/" class="separate">Client Technical Control</a></li>
                </ul>
              </li>
              <li><a href="/ru/#contact" class="separate">связь</a></li>
              <li>
                <a href="/ru/progress/#webcam" class="separate">
                  <img class="webcam_svg" src="/img/webcam.svg" alt="Webcam">
                </a>
              </li>
              <li>
                <div class="lang">
                    <a  class="separate" href="<? if (!empty($url_a)) {
                        echo $url_a;
                    } else {
                        echo $uRa;
                    } ?>">UA</a>
                    <a class="separate"  href="<? if (!empty($url_r)) {
                        echo $url_r;
                    } else {
                        echo $uRr;
                    } ?>">RU</a>
                    <a class="separate"  href="<? if (!empty($url_n)) {
                        echo $url_n;
                    } else {
                        echo $uRn;
                    } ?>">EN</a>
                </div>
              </li>
          </ul>
        </div>
        <div class="header-callback">
            Телефон отдела продаж <em class="em_phone" style="display:none;">(044) 49-80-400</em>
            <p class="phone_display"><a href="tel:(044) 49-80-400">(044) 49-80-400</a></p>
            <div class="header-button"><a href="#callback" class="button callback">заказать звонок</a></div>
        </div>

        <a href="http://saga-development.com.ua/"
           class="saga-logo <? if (count(explode("/", $_SERVER['REQUEST_URI'])) > 2) {
               echo 'saga_logo_off';
           } ?>" target="_blank">
            <img src="/img/saga-logo.svg">
        </a>
        <div class="promotions_btn">
            <a href="/ru/service-department/" class="promotions_btn__link" id="promotions_btn__link">Отдел Пост Сервиса</a>
        </div>
        <div class="promotions_btn reklama">
            <a href="/news/december/" class="promotions_btn__link">Акционные предложения</a>
        </div>
    </div>
</header>

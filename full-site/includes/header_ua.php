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
if ($pieces[3] == "ru") {
    $url_r = "$pieces[0]//$pieces[2]/$pieces[3]/$pieces[4]/";
    $url_a = "$pieces[0]//$pieces[2]/$pieces[4]/";
} else {
    $uRa = "https://$_SERVER[HTTP_HOST]" . "$_SERVER[REQUEST_URI]";
    $uRr = "https://$_SERVER[HTTP_HOST]" . '/ru' . "$_SERVER[REQUEST_URI]";
}
?>
<? /* include('preloader.php');  */ ?>
<? /* include('preloader_new.php');  */ ?>
<? include($_SERVER['DOCUMENT_ROOT'] . '/includes/preloader_new/preloader_newYear.php'); ?>

<header class="header">
    <div class="wrapper">
        <a href="/" class="logo">
            <img src="/img/chicago-logo.png" alt="Житловий комплекс CHICAGO Central House м. Київ"
                 title="Житловий комплекс CHICAGO Central House м. Київ">
        </a>
        <div id="mobile_menu_open" class="burger mobile">
          <span></span>
          <p>меню</p>
        </div>
        <div class="header-nav">
          <ul class="nav-list flex">
            <li><a href="/kub/" class="separate">Куб</a></li>
            <li><a href="/#place" class="separate">Розташування</a></li>
            <li><span id="budinok_open">Будинок &#9660;</span>
                <ul id="budinok">
                    <li><a href="/choice/" class="separate">Квартири</a></li>
                    <li><a href="/kvartiri-s-remontom/" class="separate">Квартири з ремонтом</a></li>
                    <li><a href="/torgovie-pomescheniya/" class="separate">Комерційна нерухомість</a></li>
                    <li><a href="/atmosfera/" class="separate">SFERA Living System</a></li>
                    <li><a href="/service-department/" class="separate">ДЛЯ ТИХ ХТО ПРИДБАВ</a></li>
                </ul>
            </li>
            <li><a href="/#builder" class="separate">Забудовник</a></li>
            <li><a href="/news/" id="uwf_open" class="separate">Новини &#9660;</a>
                <ul id="uwf_active">
                    <li><a href="/fashion/" class="separate">UFW</a></li>
                </ul>
            </li>
            <li><a href="/progress/" id="ctc_open" class="separate">Будівництво &#9660;</a>
                <ul id="ctc_active">
                    <li><a href="/ctc/" class="separate">Client Technical Control</a></li>
                </ul>
            </li>
            <li><a href="/#contact" class="separate">Зв'язок</a></li>
            <li>
                <a href="/progress/#webcam" class="separate">
                    <img class="webcam_svg" src="/img/webcam.svg" alt="Webcam">
                </a>
            </li>
            <li>
              <?php /*Google Tag Manager*/
              if ($_SERVER[REQUEST_URI] != '/atmosfera/') {
                  include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/lang.php');
              } ?>
            </li>
          </ul>
        </div>
        <div class="header-callback">
            Телефон відділу продажу <em class="em_phone" style="display:none;">(044) 49-80-400</em>
            <p class="phone_display"><a href="tel:(044) 49-80-400">(044) 49-80-400</a></p>
            <div class="header-button"><a href="#callback" class="button callback">Замовити дзвінок</a></div>
        </div>

        <a href="http://saga-development.com.ua/"
           class="saga-logo <? if (count(explode("/", $_SERVER['REQUEST_URI'])) > 2) {
               echo 'saga_logo_off';
           } ?>" target="_blank">
            <img src="/img/saga-logo.svg">
        </a>
        <div class="promotions_btn">
            <a href="/service-department/" class="promotions_btn__link" id="promotions_btn__link">Відділ Пост Сервісу</a>
        </div>
        <div class="promotions_btn reklama">
            <a href="/news/december/" class="promotions_btn__link">Акційні пропозиції</a>
        </div>
    </div>
</header>

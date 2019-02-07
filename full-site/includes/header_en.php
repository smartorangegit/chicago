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

if ($pieces[3] == "en") {
    $ua = str_replace('/en/', "/", $actual_link);
    $ru = str_replace('/en/', "/ru/", $actual_link);

} else {
    $uRa = "https://$_SERVER[HTTP_HOST]" . "$_SERVER[REQUEST_URI]";

    $lRr = "https://$_SERVER[HTTP_HOST]" . '/ru' . "$_SERVER[REQUEST_URI]";

    $uRn = "https://$_SERVER[HTTP_HOST]" . '/en' . "$_SERVER[REQUEST_URI]";
}


?>
<? /* include('preloader.php');  */ ?>
<? /* include('preloader_new.php'); */ ?>
<? include($_SERVER['DOCUMENT_ROOT'] . '/includes/preloader_new/preloader_newYear.php'); ?>

<header class="header">
    <div class="wrapper">
        <a href="/en/" class="logo">
            <img src="/img/chicago-logo.png" alt="Жилой комплекс CHICAGO Central House г. Киев"
                 title="Жилой комплекс CHICAGO Central House г. Киев">
        </a>
        <div  id="mobile_menu_open" class="burger mobile">
          <span></span>
          <p>menu</p>
        </div>
        <div class="header-nav">
          <ul class="nav-list flex">
            <li><a href="/en/kub/" class="separate">cube</a></li>
            <li><a href="/en/#place" class="separate">Location</a></li>
            <li><span id="budinok_open">house &#9660;</span>
              <ul id="budinok">
                <li><a href="/en/choice/" class="separate">flats</a></li>
                <li><a href="/en/kvartiri-s-remontom/" class="separate">Apartments with repair</a></li>
                <li><a href="/en/torgovie-pomescheniya/" class="separate">commercial <br> premises</a></li>
                <!--<li><a href="/en/atmosfera/" class="separate">SFERA Living System</li>-->
                <li><a href="/en/service-department/" class="separate">FOR THOSE WHO BOUGHT</a></li>
                </ul>
              </li>
              <li><a href="/en/#builder" class="separate">developer</a></li>
              <li><a href="/en/news/" id="uwf_open" class="separate">news &#9660;</a>
                <ul id="uwf_active">
                  <li><a href="/en/fashion/" class="separate">UFW</a></li>
                </ul>
              </li>
              <li><a href="/en/progress/" id="ctc_open" class="separate">construction ▼</a>
                <ul id="ctc_active">
                  <li><a href="/en/ctc/" class="separate">Client Technical Control</a>
                  </li>
                </ul>
              </li>
              <li><a href="/en/#contact" class="separate">contact us</a></li>
              <li>
                <a href="/en/progress/#webcam" class="separate">
                  <img class="webcam_svg" src="/img/webcam.svg" alt="Webcam">
                </a>
              </li>
              <li>
                <div class="lang">
                  <a class="separate" href="<?php echo $ua; ?>">UA</a>
                  <a class="separate" href="<?php echo $ru; ?>">RU</a>
                  <a class="separate" href="<?php echo $actual_link ?>">EN</a>
                </div>
              </li>
          </ul>
        </div>
        <div class="header-callback">
            Sales department telephone number <em class="em_phone" style="display:none;">(044) 49-80-400</em>
            <p class="phone_display"><a href="tel:(044) 49-80-400">(044) 49-80-400</a></p>
            <div class="header-button"><a href="#callback" class="button callback">callback</a></div>
        </div>
        <a href="http://saga-development.com.ua/"
           class="saga-logo <? if (count(explode("/", $_SERVER['REQUEST_URI'])) > 2) {
               echo 'saga_logo_off';
           } ?>" target="_blank">
            <img src="/img/saga-logo.svg">
        </a>
        <div class="promotions_btn">
            <a href="/en/service-department/" class="promotions_btn__link" id="promotions_btn__link">Post Service Department</a>
        </div>
        <div class="promotions_btn reklama">
            <a href="/news/december/" class="promotions_btn__link">Promotional offers</a>
        </div>
    </div>
</header>

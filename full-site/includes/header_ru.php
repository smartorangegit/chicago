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
<style media="screen">
    #budinok_open, #uwf_open, #ctc_open {
        position: relative;
        color: white;
        text-transform: uppercase;
        cursor: pointer;
        font-size: 14px;
    }

    #budinok, #uwf_active, #ctc_active {
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

    #uwf_active {
        padding: 0 19.5px;
        margin-left: 0px;
        margin-top: 8px;
    }

    #budinok li, #uwf_active li, #ctc_active li {
        display: block;
        border: none;
        padding: 10px;
    }
</style>
<? /* include('preloader_new.php');  */ ?>
<? include($_SERVER['DOCUMENT_ROOT'] . '/includes/preloader_new/preloader_newYear.php'); ?>

<header class="header">
    <div class="wrapper">
        <a href="/ru/" class="logo">
            <img src="/img/chicago-logo.png" alt="Жилой комплекс CHICAGO Central House г. Киев"
                 title="Жилой комплекс CHICAGO Central House г. Киев">
        </a>
        <ul class="header-nav">
            <li id="mobile" class="mobile">
                <ul id="minimenu">
                    <li id="miniclose" class="mobile">

                        <? /*<li class="language">
              <div class="lang_m">
               <a href="<?if(!empty($url_a)){ echo $url_a;}else{ echo $uRa;}?>">UA</a>
               <a href="<?if(!empty($url_r)){ echo $url_r;}else{ echo $uRr;}?>">RU</a>
               <a href="<?if(!empty($url_n)){ echo $url_n;}else{ echo $uRn;}?>">EN</a>
              </div>
              <?php include_once('../includes/lang_m.php'); ?>
            </li>*/ ?>
                    <li class="language">
                        <?php include_once('lang_m.php'); ?>
                    </li>
                    <li class="menu-close">
                        <svg style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512"
                             width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"><path
                                    d="M437.5,386.6L306.9,256l130.6-130.6c14.1-14.1,14.1-36.8,0-50.9c-14.1-14.1-36.8-14.1-50.9,0L256,205.1L125.4,74.5  c-14.1-14.1-36.8-14.1-50.9,0c-14.1,14.1-14.1,36.8,0,50.9L205.1,256L74.5,386.6c-14.1,14.1-14.1,36.8,0,50.9  c14.1,14.1,36.8,14.1,50.9,0L256,306.9l130.6,130.6c14.1,14.1,36.8,14.1,50.9,0C451.5,423.4,451.5,400.6,437.5,386.6z"/></svg>
                    </li>
                    <li><a href="/ru/kub/" class="separate">куб</a></li>
                    <li><a href="/ru/#place" class="separate">расположение</a></li>
                    <li><a href="/ru/choice/" class="separate">Квартиры</a></li>
                    <li><a href="/ru/kvartiri-s-remontom/" class="separate">Квартиры с ремонтом</a></li>
                    <li><a href="/ru/torgovie-pomescheniya/" class="separate">Коммерческая недвижимость</a></li>
                    <!--<li><a href="/ru/atmosfera/" class="separate">SFERA Living System</li>-->
                    <li><a href="/ru/service-department/" class="separate">ДЛЯ ТЕХ КТО ПРИОБРЕЛ</li>
                    <li><a href="/ru/news/" class="separate">новости</a></li>
                    <li><a href="/ru/#builder" class="separate">Застройщик</a></li>
                    <li><a href="/ru/progress/" class="separate">строительство</a></li>
                    <li><a href="/ru/ctc/" class="separate">Client Technical Control</a></li>
                    <li><a href="/ru/#contact" class="separate">связь</a></li>
                    <li>
                        <a href="/ru/progress/#webcam" class="separate">
                            <img class="webcam_svg" src="/img/webcam.svg" alt="Webcam">
                        </a>
                    </li>
                </ul>
            </li>

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
                    <li><a href="/ru/ctc/" class="separate">Client Technical Control</a>
                    </li>
                </ul>
            </li>
            <li><a href="/ru/#contact" class="separate">связь</a></li>
            <li>
                <a href="/ru/progress/#webcam" class="separate">
                    <img class="webcam_svg" src="/img/webcam.svg" alt="Webcam">
                </a>
            </li>
        </ul>
        <div class="header-callback">

            Телефон отдела продаж <em class="em_phone" style="display:none;">(044) 49-80-400</em>
            <p class="phone_display"><a href="tel:(044) 49-80-400">(044) 49-80-400</a></p>
            <a href="#callback" class="button callback">заказать звонок</a>
        </div>
        <div class="lang">
            <a href="<? if (!empty($url_a)) {
                echo $url_a;
            } else {
                echo $uRa;
            } ?>">UA</a>
            <a href="<? if (!empty($url_r)) {
                echo $url_r;
            } else {
                echo $uRr;
            } ?>">RU</a>
            <a href="<? if (!empty($url_n)) {
                echo $url_n;
            } else {
                echo $uRn;
            } ?>">EN</a>
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
<style media="screen">
    .promotions_btn {
        color: red;
        background-color: #EF2732;
        position: fixed;
        z-index: 1000;
        top: calc(50% - 130px);
        left: -110px;
        padding: 8px;
        line-height: 12px;
        text-align: center;
        transform: rotate(-90deg) translateY(50%);
        border-radius: 2px;
        width: 220px;
    }

    .promotions_btn:before {
        content: '';
        width: 0;
        height: 0;
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        border-top: 8px solid #EF2732;
        position: absolute;
        top: 0px;
        right: -4px;
    }

    .promotions_btn:after {
        content: '';
        width: 0;
        height: 0;
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        border-top: 8px solid #EF2732;
        position: absolute;
        top: 0px;
        left: -4px;
    }

    .promotions_btn__link {
        color: white;
        text-decoration: none;
    }

    #promotions_btn__link:hover {
        color: #CECCC9;
    }

    @media screen and (max-width: 768px) {
        .promotions_btn {
            padding: 4px;
        }
    }
</style>
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
    .reklama {
        top: calc(50% + 130px);
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

    @media screen and (max-width: 768px) {
        .saga-logo {
            right: 30px;
            top: 128px;
        }

        .zipped .saga-logo {
            top: 84px;
            right: 5px;

        }

        .saga_logo_off {
            display: none;
        }
    }
</style>
<style media="screen">
    .header-callback {
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

    @media only screen and (max-width: 768px) {
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

    li.language .lang_m {
        position: static;
        line-height: 36px;
        padding-top: 12px;
    }

    li.language .lang_m a {
        display: inline-block !important;
    }

    @media only screen and (min-width: 769px) {
        .header .logo {
            width: 250px;
        }

        .header .logo img {
            max-width: 100%;
        }
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

  setTimeout(function () {
    telephone('.em_phone');
  }, 2000);

  $('#budinok_open, #budinok').hover(
    function () {
      $('#budinok').css('height', '160px');
    }, function () {
      $('#budinok').css('height', '0');
    });

  $('#uwf_open, #uwf_active').hover(
    function () {
      $('#uwf_active').css('height', '35px');
    }, function () {
      $('#uwf_active').css('height', '0');
    });
  $('.menu-close').click(function () {
    $('#minimenu').animate({opacity: 0, top: '45%'}, 200, function () {
      // пoсле aнимaции
      $(this).css('display', 'none');
      $('#overlay').fadeOut(400);
      $('.content-item').css('height', 'auto');
    });
  });
  $('#ctc_open, #ctc_active').hover(
    function () {
      $('#ctc_active').css('height', '35px');
    }, function () {
      $('#ctc_active').css('height', '0');
    });
</script>

<?php
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0');
session_start();
include ("../../../admin/bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
$uri = explode("/",$_SERVER['PHP_SELF']);
//print_r($uri);
$kod = $uri[3];
$sel = $DB->query("SELECT * FROM `news` WHERE `news_code`='$kod'");
while ($myrow = mysqli_fetch_array($sel))
{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <?php /*Google Tag Manager*/ include_once('../../../includes/gtm_head.php'); ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">

        <title><?=$myrow['title_en'];?></title>
        <meta property="og:title" content="<?=$myrow['title_en'];?>" />
        <meta property="og:description" content="<?=$myrow['description_en'];?>" />
        <meta property="og:image" content="https://chicago.kiev.ua<?=$myrow['img_path']."/".$myrow['img_name'];?>" />
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
        <meta name="description" content="<?=$myrow['description_en'];?>">

		<? $rel_url = explode("/", $_SERVER['REQUEST_URI']); ?>
		<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua<?php echo '/ru/news/'.$rel_url[3].'/';?>" />
        <link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua<?php echo '/news/'.$rel_url[3].'/';?>" />
        <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua<?php echo $_SERVER['REQUEST_URI'];?>" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/normalize.css" />
        <!-- <link rel="stylesheet" type="text/css" href="css/demo.css" /> -->
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="/css/slider-style.css">
        <link rel="stylesheet" href="/css/jquery.fancybox.css">
        <link rel="stylesheet" href="/css/jquery.fancybox-thumbs.css">
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/progress.css">
        <link rel="stylesheet" href="/css/news.css">
        <script type="text/javascript" src="/js/lib/greensock/TweenMax.min.js"></script>
        <script src="/js/lib/scrollmagic/ScrollMagic.min.js"></script>
        <script type="text/javascript" src="/js/lib/scrollmagic/plugins/animation.gsap.js"></script>
        <script src="/js/lib/plugins/debug.addIndicators.min.js"></script>
        
    </head>

    <body>
    <?php /*Google Tag Manager*/ include_once('../../../includes/gtm_body.php'); ?>
    <script>
        var controller = new ScrollMagic.Controller();
    </script>

    <?php /*Google Tag Manager*/ include_once('../../../includes/header_en.php'); ?>


    <section class="fifteenth newsdet" id="builder">
        <span class="trigger-7"></span>
        <h1 class="title" style="transform: translate3d (20px, 0, 0)"><?=$myrow['name_news_en'];?></h1>
        <i class="line"></i>
    </section>

    <section class="third light">
        <div class="lamps wrapper">
            <img src="/img/icons/lamp.png" alt="lamp" />
            <img src="/img/icons/lamp.png" alt="lamp" />
            <img src="/img/icons/lamp.png" alt="lamp" />
        </div>
        <div class="wrapper">
            <span class="trigger-0"></span>

            <div class="news_det clearfix">

                <div class="news_content">
                    <div class="news_date">
                        <?
                        $dt = $myrow['date'];
                        russian_date($dt);?>
                    </div>
                    <div class="news_text">

                        <img src="<?=$myrow['img_path']."/".$myrow['img_name'];?>?v=1.1" alt="news">
                        <?=$myrow['full_text_en'];?>
                        <?=$myrow['video'];?>
                    </div>
                    <a class="button button-red" href="/en/news/">Go back to the news</a>
                </div>
            </div>

            <div class="news_other">
                <div class="other_name">READ MORE</div>
                <div class="other_news_item">
                    <a href="/en/kvartira-center/">APARTMENT IN THE CITY CENTRE</a>
                    <span class="other_news_date"></span>
                </div>
                <div class="other_news_item">
                    <a href="/en/svobodnaya-planirovka/">SHELL AND CORE APARTMENTS</a>
                    <span class="other_news_date"></span>
                </div>
                <div class="other_news_item">
                    <a href="/en/rassrochka/">PAY THE REAL ESTATE DEVELOPER IN INSTALMENTS</a>
                    <span class="other_news_date"></span>
                </div>
                <div class="other_news_item">
                    <a href="/en/parking/">CAR PARK NEXT TO THE HOUSING ESTATE “CHICAGO Central House”</a>
                    <span class="other_news_date"></span>
                </div>
                <div class="other_news_item">
                    <a href="/en/torgovie-pomescheniya/">RETAIL SPACE</a>
                    <span class="other_news_date"></span>
                </div>

            </div>

    </section>
    <style media="screen">
        body{
            background: #fff;
            color: black;
        }
        h3, h4, .news_text p, .button, .other_name, .other_news_item a {
            color: black;
        }
        .fifteenth.newsdet {
            background: white;;
        }
        .fifteenth h1.title{
            font-size: 34px;
            transform: none!important;
            line-height: normal;
            padding-top: 130px;
            color: black;
        }
        footer {
            background: #f2f2f2;
        }
        .news_content{
            color:black;
        }
        @media only screen and (max-width: 768px) {
            .fifteenth h1.title{
                font-size: 24px;
            }
        }
    </style>


    <?php include('../../../includes/form_callback_en.php'); ?>

    <?php include('../../../includes/footer_en.php'); ?>
    <script src="/js/scripts.js"></script>
    <script src="/js/lib/snap.svg-min.js"></script>
    <script src="/js/lib/slider.js"></script>
    <script src="/js/jquery.fancybox.pack.js"></script>
    <script src="/js/jquery.fancybox-thumbs.js"></script>
    <script src="/js/lib/wow.min.js"></script>
    <script src="/js/progres.js"></script>
    <!-- <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBqnmzNAzHojSwaOiHXbpTETnKMQgnsos&callback=initMap">
    </script> -->
    <!-- <script src="js/scripts.js"> -->
    <script>
        new ScrollMagic.Scene({triggerElement: ".trigger-0"})
            .setClassToggle(".header", "zipped").addTo(controller);
        var scene = new ScrollMagic.Scene({triggerElement: ".trigger-7", duration: 700})
            .setTween(".fifteenth .title", {transform: "translateX(-20%)"}).addTo(controller);
        var scene = new ScrollMagic.Scene({triggerElement: ".trigger-7", duration: 300})
            .setTween(".fifteenth i.line", {transform: "translateX(0)"}).addTo(controller);
        var scene = new ScrollMagic.Scene({triggerElement: ".lamps", duration: 300})
            .setTween(".lamps img", {opacity: "1"}).addTo(controller);


    </script>
    </body>
    </html>
<?}
function russian_date($dt){
    $date=explode("-",$dt);
    switch ($date[1]){
        case 1: $m='January'; break;
        case 2: $m='February'; break;
        case 3: $m='March'; break;
        case 4: $m='April'; break;
        case 5: $m='May'; break;
        case 6: $m='June'; break;
        case 7: $m='July'; break;
        case 8: $m='August'; break;
        case 9: $m='September'; break;
        case 10: $m='October'; break;
        case 11: $m='November'; break;
        case 12: $m='December'; break;
    }
    echo $date[2].'&nbsp;'.$m.'&nbsp;'.$date[0];
}?>
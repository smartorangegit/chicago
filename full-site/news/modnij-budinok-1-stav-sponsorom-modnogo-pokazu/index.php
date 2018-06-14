<?php
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0');
session_start();
include ("../../admin/bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
$uri = explode("/",$_SERVER['PHP_SELF']);
//print_r($uri);
$kod = $uri[2];

$sel = $DB->query("SELECT * FROM `news` WHERE `news_code`='$kod'");
while ($myrow = mysqli_fetch_array($sel))
{
    ?>
    <!DOCTYPE html>
    <html lang="uk">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/news/mediaskulptura/" />
        <link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/news/mediaskulptura/" />
        <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/news/mediaskulptura/" />
        <title><?=$myrow['title_ua'];?></title>
        <meta name="robots" content="index, follow">


        <meta property="og:title" content="<?=$myrow['title_ua'];?>" />
        <meta property="og:description" content="<?=$myrow['description_ua'];?>" />
        <meta property="og:image" content="https://chicago.kiev.ua<?=$myrow['img_path']."/".$myrow['img_name'];?>" />


        <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
        <meta name="description" content="<?=$myrow['description_ua'];?>">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../css/normalize.css" />
        <link rel="stylesheet" href="../../css/animate.css">
        <link rel="stylesheet" href="../../css/slider-style.css">
        <link rel="stylesheet" href="../../css/jquery.fancybox.css">
        <link rel="stylesheet" href="../../css/jquery.fancybox-thumbs.css">
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/progress.css">
        <link rel="stylesheet" href="../../css/news.css">
        <script type="text/javascript" src="../../js/lib/greensock/TweenMax.min.js"></script>
        <script src="../../js/lib/scrollmagic/ScrollMagic.min.js"></script>
        <script type="text/javascript" src="../../js/lib/scrollmagic/plugins/animation.gsap.js"></script>
        <script src="../../js/lib/plugins/debug.addIndicators.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
    </head>

    <body>
    <?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
    <script>
        var controller = new ScrollMagic.Controller();
    </script>

    <?php /*Google Tag Manager*/ //require "/includes/header_ua.php";
    include("../../includes/header_ua.php"); ?>


    <section class="fifteenth newsdet" id="builder">
        <span class="trigger-7"></span>
        <h1 class="title" style="transform: translate3d (20px, 0, 0)"><?=$myrow['name_news_ua'];?></h1>
        <i class="line"></i>
    </section>

    <section class="third light">
        <div class="lamps wrapper">
            <img src="../../img/icons/lamp.png" alt="lamp" />
            <img src="../../img/icons/lamp.png" alt="lamp" />
            <img src="../../img/icons/lamp.png" alt="lamp" />
        </div>
        <div class="wrapper">
            <span class="trigger-0"></span>

            <div class="news_det clearfix">

                <div class="news_content">
                    <div class="news_date">
                        <?
                        $dt = $myrow['date'];
                        russian_date($dt);
                        ?>
                    </div>
                    <div class="news_text">

                        <img src="<?=$myrow['img_path']."/".$myrow['img_name'];?>" alt="news">
                        <?=$myrow['full_text_ua'];?>
                        <?=$myrow['video'];?>
                    </div>
                    <div class="gal-wrapper">
                        <a class="news_gal" rel="gal1" href="/img/2018-02-20_12:29:34/news_img_gal/Cosmopolitan2.jpg" title="Фото: Cosmopolitan">
                            <img <?LazyLoad("/img/2018-02-20_12:29:34/news_img_gal/Cosmopolitan2s.jpg");?> alt="">
                        </a>
                        <a class="news_gal" rel="gal1" href="/img/2018-02-20_12:29:34/news_img_gal/Cosmopolitan3.jpg" title="Фото: Cosmopolitan">
                            <img <?LazyLoad("/img/2018-02-20_12:29:34/news_img_gal/Cosmopolitan3s.jpg");?> alt="">
                        </a>
                        <a class="news_gal" rel="gal1" href="/img/2018-02-20_12:29:34/news_img_gal/Cosmopolitan4.jpg" title="Фото: Cosmopolitan">
                            <img <?LazyLoad("/img/2018-02-20_12:29:34/news_img_gal/Cosmopolitan4s.jpg");?> alt="">
                        </a>
                        <a class="news_gal" rel="gal1" href="/img/2018-02-20_12:29:34/news_img_gal/Cosmopolitan5.jpg" title="Фото: Cosmopolitan">
                            <img <?LazyLoad("/img/2018-02-20_12:29:34/news_img_gal/Cosmopolitan5s.jpg");?> alt="">
                        </a>
                        <a class="news_gal" rel="gal1" href="/img/2018-02-20_12:29:34/news_img_gal/Cosmopolitan6.jpg" title="Фото: Cosmopolitan">
                            <img <?LazyLoad("/img/2018-02-20_12:29:34/news_img_gal/Cosmopolitan6s.jpg");?> alt="">
                        </a>
                        <a class="news_gal" rel="gal1" href="/img/2018-02-20_12:29:34/news_img_gal/JetSetter.jpg" title="Фото: JetSetter">
                            <img <?LazyLoad("/img/2018-02-20_12:29:34/news_img_gal/JetSetters.jpg");?> alt="">
                        </a>    
                        <a class="news_gal" rel="gal1" href="/img/2018-02-20_12:29:34/news_img_gal/7.jpg" title="">
                            <img <?LazyLoad("/img/2018-02-20_12:29:34/news_img_gal/7s.jpg");?> alt="">
                        </a>
                    </div>
                    <a class="button button-red" href="/news/">повернутися до новин</a>
                </div>
            </div>

            <div class="news_other">
                <div class="other_name">читати далі</div>
                <div class="other_news_item">
                    <a href="/kvartira-center/">Квартира у центрі</a>
                    <span class="other_news_date"></span>
                </div>
                <div class="other_news_item">
                    <a href="/svobodnaya-planirovka/">Вільне планування квартир</a>
                    <span class="other_news_date"></span>
                </div>
                <div class="other_news_item">
                    <a href="/rassrochka/">Розстрочка від забудовника</a>
                    <span class="other_news_date"></span>
                </div>
                <div class="other_news_item">
                    <a href="/parking/">Паркінг у ЖК CHICAGO Central House</a>
                    <span class="other_news_date"></span>
                </div>
                <div class="other_news_item">
                    <a href="/torgovie-pomescheniya/">Торгові приміщення</a>
                    <span class="other_news_date"></span>
                </div>
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
        .gal-wrapper {
            text-align:center;
            max-height: 65px;
            overflow: hidden;
        }
        .gal-wrapper img{
            width: auto;
            vertical-align: top;
        }
    </style>
    <?php include('../../includes/form_callback.php'); ?>

    <?php include('../../includes/footer_ua.php'); ?>
    <script src="/js/scripts.js"></script>
    <script src="../../js/lib/snap.svg-min.js"></script>
    <script src="../../js/lib/slider.js"></script>
    <script src="../../js/jquery.fancybox.pack.js"></script>
    <script src="../../js/jquery.fancybox-thumbs.js"></script>
    <script src="../../js/lib/wow.min.js"></script>
    <script src="../../js/progres.js"></script>
    <!-- <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBqnmzNAzHojSwaOiHXbpTETnKMQgnsos&callback=initMap">
    </script> -->
    <!-- <script src="../../js/scripts.js"> -->
    <script>
        $("a.news_gal").fancybox({
          helpers: {
              title : {
                  type : 'float'
              }
          }
      });
    </script>
    </body>
    </html>
<?}
function russian_date($dt){
    $date=explode("-",$dt);
    switch ($date[1]){
        case 1: $m='січня'; break;
        case 2: $m='лютого'; break;
        case 3: $m='березня'; break;
        case 4: $m='квітня'; break;
        case 5: $m='травня'; break;
        case 6: $m='червня'; break;
        case 7: $m='липня'; break;
        case 8: $m='серпня'; break;
        case 9: $m='вересня'; break;
        case 10: $m='жовтня'; break;
        case 11: $m='листопада'; break;
        case 12: $m='грудня'; break;
    }
    echo $date[2].'&nbsp;'.$m.'&nbsp;'.$date[0];
}?>
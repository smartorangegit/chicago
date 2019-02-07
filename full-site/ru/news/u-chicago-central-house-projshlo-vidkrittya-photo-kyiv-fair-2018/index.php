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
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">

        <title><?=$myrow['title_ru'];?></title>
        <meta property="og:title" content="<?=$myrow['title_ru'];?>" />
        <meta property="og:description" content="<?=$myrow['description_ru'];?>" />
        <meta property="og:image" content="https://chicago.kiev.ua<?=$myrow['img_path']."/".$myrow['img_name'];?>" />
        <meta name="robots" content="index, follow">
        <meta name="description" content="<?=$myrow['description_ru'];?>">

		<? $rel_url = explode("/", $_SERVER['REQUEST_URI']); ?>
		<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua<?php echo $_SERVER['REQUEST_URI'];?>" />
        <link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua<?php echo '/news/'.$rel_url[3].'/';?>" />
        <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua<?php echo '/en/news/'.$rel_url[3].'/';?>" />
        <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
        <script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/full.css">
        <link rel="stylesheet" href="/css/style.css">
        
        <link rel="stylesheet" href="/css/news.css">
        
        
        
        
        <link rel="stylesheet" href="/css/style.css">
        
        <link rel="stylesheet" href="/css/news.css">
        
        
        
        
        
        <?php /*Google Tag Manager*/ include_once('../../../includes/gtm_head.php'); ?>
    </head>

    <body>
    <?php /*Google Tag Manager*/ include_once('../../../includes/gtm_body.php'); ?>
    <script>
        
    </script>

    <?php /*Google Tag Manager*/ include_once('../../../includes/header_ru.php'); ?>



    <section class="third light">
        <div class="lamps wrapper">
            <img src="/img/icons/lamp.png" alt="lamp" />
            <img src="/img/icons/lamp.png" alt="lamp" />
            <img src="/img/icons/lamp.png" alt="lamp" />
        </div>
        <div class="wrapper wrapper_content">
            

            <div class="news_det clearfix">

                <div class="news_content">
	<section class="fifteenth newsdet" id="">
        
        <h1 class="wow fadeInLeft"><?=$myrow['name_news_ru'];?></h1>
        
    </section>
                    <div class="news_date">
                        <?
                        $dt = $myrow['date'];
                        russian_date($dt);?>
                    </div>
                    <div class="news_text">

                        <img src="<?=$myrow['img_path']."/".$myrow['img_name'];?>" alt="news">
                        <?=$myrow['full_text_ru'];?>
                        <?=$myrow['video'];?>
                    </div>
                    <a class="button button-red" href="/ru/news/">вернуться к новостям</a>
                </div>

                <div class="news_other">
                    <div class="other_name">читать далее</div>
                    <div class="other_news_item">
                        <a href="/ru/kvartira-center/">Квартира в центре</a>
                        <span class="other_news_date"></span>
                    </div>
                    <div class="other_news_item">
                        <a href="/ru/svobodnaya-planirovka/">Свободная планировка квартир</a>
                        <span class="other_news_date"></span>
                    </div>
                    <div class="other_news_item">
                        <a href="/ru/rassrochka/">Рассрочка от застройщика</a>
                        <span class="other_news_date"></span>
                    </div>
                    <div class="other_news_item">
                        <a href="/ru/parking/">Паркинг у ЖК CHICAGO Central House</a>
                        <span class="other_news_date"></span>
                    </div>
                    <div class="other_news_item">
                        <a href="/ru/torgovie-pomescheniya/">торговые помещения</a>
                        <span class="other_news_date"></span>
                    </div>
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
            background: #ef2732;
        }
        .news_content{
            color:black;
        }
        @media only screen and (max-width: 768px) {
            .fifteenth h1.title{
                font-size: 24px;
            }
        }
		/* тестові стилі для нового шаблону новин */
		.wrapper_content {
			max-width: 1060px;
		}
    </style>


    <?php include('../../../includes/form_callback_ru.php'); ?>

    <?php include('../../../includes/footer_ru.php'); ?>
    <script src="/js/snapSliderFancy.js"></script>
    <script src="/js/scripts.js"></script>
    
    
    
    
    
    <!-- <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBqnmzNAzHojSwaOiHXbpTETnKMQgnsos&callback=initMap">
    </script> -->
    <!-- <script src="js/scripts.js"> -->
    <script>
        
            
      
            
        
            
        
            


    </script>
    </body>
    </html>
<?}
function russian_date($dt){
    $date=explode("-",$dt);
    switch ($date[1]){
        case 1: $m='января'; break;
        case 2: $m='февраля'; break;
        case 3: $m='марта'; break;
        case 4: $m='апреля'; break;
        case 5: $m='мая'; break;
        case 6: $m='июня'; break;
        case 7: $m='июля'; break;
        case 8: $m='августа'; break;
        case 9: $m='сентября'; break;
        case 10: $m='октября'; break;
        case 11: $m='ноября'; break;
        case 12: $m='декабря'; break;
    }
    echo $date[2].'&nbsp;'.$m.'&nbsp;'.$date[0];
}?>
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
        <script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         
        
        
        
        
        
        
        
        <link rel="stylesheet" href="/css/full.css">
<link rel="stylesheet" href="/css/style.css">
        
        <link rel="stylesheet" href="../../css/news.css">
        
        
        
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
    </head>

    <body>
    <?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
    <script>
        
    </script>

    <?php /*Google Tag Manager*/ //require "/includes/header_ua.php";
    include("../../includes/header_ua.php"); ?>


<?/* 	<section class="newsdet">
        
        <h1 class="wow fadeInLeft"><?=$myrow['name_news_ua'];?></h1>
        
    </section>  */?>

    <section class="third light">
        <div class="lamps wrapper">
            <img src="../../img/icons/lamp.png" alt="lamp" />
            <img src="../../img/icons/lamp.png" alt="lamp" />
            <img src="../../img/icons/lamp.png" alt="lamp" />
        </div>
        <div class="wrapper wrapper_content">
            

            <div class="news_det clearfix">

                <div class="news_content">
	<section class="fifteenth newsdet" id="">
        
        <h1 class="wow fadeInLeft"><?=$myrow['name_news_ua'];?></h1>
        
    </section>
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
    <?php include('../../includes/form_callback.php'); ?>

    <?php include('../../includes/footer_ua.php'); ?>
    <script src="/js/scripts.js"></script>
    <script src="/js/snapSliderFancy.js"></script>
    
    
    
    
    
    
      
    
    
    <script>
        $("a.news_gal").fancybox();
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
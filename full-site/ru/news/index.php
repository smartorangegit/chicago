<?php include_once('../../includes/utm.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ ЖК Чикаго 》 Новости, акции, скидки | CHICAGO Central House</title>
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="【Новости, события, акции, скидки】 Самая свежая информация о жилом комплексе CHICAGO Central House Киев - объявления, графики работы отдела продаж, акции, скидки и.... ✅【ЖК Чикаго】 Адрес расположения: Киев, ул. Антоновича 44 (Горького). Карта проезда... ✅【CHICAGO】 Обращайтесь в отдел продаж - успейте купить квартиру мечты!">
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/news/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/news/" />
    <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/news/" />
		<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="/css/full.css">
		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href="/css/news.css?v=1.1">
	  <link href="/css/news_list.css?v=1.4" rel="stylesheet">
  <?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
  <?php /*Google Tag Manager*/ include_once('../../includes/header_ru.php'); ?>

	<section class="h1_wrapper">
        <h1>новости</h1>
	</section>
    <?php
    include ("../../admin/bd.php");
    ?>
         <div class="section_news">
            <div class="wrapper">
                <div class="news_block clearfix">
                    <ul class="news__list">

                    </ul>
                     <ul class="news__pagination">
                        <?
                        $news_per_page = 8;
                        $sel = $DB->query("SELECT COUNT(id) FROM `news` WHERE `isActive`='0' ORDER BY `date`");
                        $number_of_news = $sel->fetch_row();
                        $total_pages = ceil($number_of_news[0] / $news_per_page);
                        for($i = 1; $i <= $total_pages; $i++) { ?>
                            <li class="news__pagination-item">
                                <a class="news__pagination-item-link" data-page="<?=$i?>"><?=$i?></a>
                            </li>
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
    }
                        ?>

                     </ul>
                  </div>
                </div>
              </div>
 <section class="third light">
 <div class="wrapper">
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
					<a href="/ru/parking/">Паркинг у ЖК Chicago Central House</a>
					<span class="other_news_date"></span>
				</div>
				 <div class="other_news_item">
					<a href="/ru/torgovie-pomescheniya/">торговые помещения</a>
					<span class="other_news_date"></span>
				</div>
	</div>
	</div>
	<style>
	.news_other {
    margin-top: 0;
   }

   [data-name="interer-holiv-u-chicago-central-house"] {
       background-position: right;
   }
      [data-name="december"] {
		background-size: contain;
		background-repeat: no-repeat;
   }
	</style>
</section>




	<?php include('../../includes/form_callback_ru.php'); ?>
	<?php include('../../includes/footer_ru.php'); ?>

	<script src="/js/snapSliderFancy.js"></script>
	<script src="/js/snapSliderFancy.js"></script>
  <script type="text/javascript" src="/js/news.js?v=1.1"></script>

</body>
</html>

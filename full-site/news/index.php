<?php include_once('../includes/utm.php'); ?>
<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ ЖК Чикаго 》Новини, акції, знижки | CHICAGO Central House</title>
	<meta name="description" content="【Новини, події, акції, знижки】 Найсвіжіша інформація про житловий комплекс CHICAGO Central House Київ - оголошення, графіки роботи відділу продажів, акції, знижки, цікаві події.... ✅ 【ЖК Чикаго】 Адреса розташування: Київ, вул. Антоновича 44 (Горького). Карта проїзду... ✅ 【CHICAGO】 Звертайтеся до відділу продажів - встигніть купити квартиру мрії!">
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/news/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/news/" />
  <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/news/" />
	<meta name="robots" content="index, follow">
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/full.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/news.css?v=1.1">
  <link href="/css/news_list.css?v=1.4" rel="stylesheet">
  <?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php'); ?>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_body.php'); ?>
  <?php /*Google Tag Manager*/ include_once('../includes/header_ua.php'); ?>
    <?php include ("../admin/bd.php"); ?>

	<section class="h1_wrapper">
        <h1>новини</h1>
	</section>
	<div class="section_news">
    <div class="wrapper">
        <!-- <div class="section_name"><h1>Новини</h1></div>-->
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
                        }
                        ?>

                     </ul>
                  </div>
                </div>
              </div>
 <section class="third light">
 <div class="wrapper">
	<div class="news_other">
				<div class="other_name">ЧИТАТИ ДАЛІ</div>
				<div class="other_news_item">
					<a href="/kvartira-center/">КВАРТИРА У ЦЕНТРІ</a>
					<span class="other_news_date"></span>
				</div>
				<div class="other_news_item">
					<a href="/svobodnaya-planirovka/">ВІЛЬНЕ ПЛАНУВАННЯ КВАРТИР</a>
					<span class="other_news_date"></span>
				</div>
				<div class="other_news_item">
					<a href="/rassrochka/">РОЗСТРОЧКА ВІД ЗАБУДОВНИКА</a>
					<span class="other_news_date"></span>
				</div>
				<div class="other_news_item">
					<a href="/parking/">ПАРКІНГ У ЖК CHICAGO CENTRAL HOUSE</a>
					<span class="other_news_date"></span>
				</div>
				 <div class="other_news_item">
					<a href="/torgovie-pomescheniya/">ТОРГОВІ ПРИМІЩЕННЯ</a>
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




<?php include('../includes/form_callback.php'); ?>
<?php include('../includes/footer_ua.php'); ?>

<script src="../js/snapSliderFancy.js"></script>
<script src="../js/scripts.js"></script>
<script type="text/javascript" src="/js/news.js?v=1.1"></script>
</body>
</html>

<?php include_once('../../includes/utm.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ CHICAGO Central House 》News</title>
	<meta name="robots" content="index, follow">
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="【News, events, promotions, discounts】 The latest information about the residential complex CHICAGO Central House Kiev - announcements, sales schedules, promotions, discounts ✅ 【CHICAGO】 Contact the sales team - you can buy a dream apartment!">
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
	<?php /*Google Tag Manager*/ include_once('../../includes/header_en.php'); ?>
	<?php include ("../../admin/bd.php");	?>

	<section class="h1_wrapper">
				<h1>The news</h1>
	</section>
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
    }
                        ?>

                     </ul>
                  </div>
                </div>
              </div>
<section class="third light">
 <div class="wrapper">
	<div class="news_other">
				<div class="other_name">read more</div>
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
					<a href="/en/parking/">CAR PARK NEXT TO THE HOUSING ESTATE “CHICAGO CENTRAL HOUSE”</a>
					<span class="other_news_date"></span>
				</div>
				 <div class="other_news_item">
					<a href="/en/torgovie-pomescheniya/">RETAIL SPACE </a>
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

<?php include('../../includes/form_callback_en.php'); ?>
<?php include('../../includes/footer_en.php'); ?>
	<script src="/js/snapSliderFancy.js"></script>
	<script type="text/javascript" src="/js/news.js?v=1.1"></script>
  <script src="js/scripts.js"></script>

</body>
</html>

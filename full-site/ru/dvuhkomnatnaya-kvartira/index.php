<?php include_once('../../includes/utm.php');
include('../../db.php');
$check = mysql_query("SELECT * FROM kvartity where character_code RLIKE '^2'" ,$db);
$myrow = mysql_fetch_array ($check);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/dvuhkomnatnaya-kvartira/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/dvuhkomnatnaya-kvartira/" />
	<link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/dvuhkomnatnaya-kvartira/" />
	<meta name="viewport" content="width=device-width">
	<title>≡ 2 комнатные квартиры в ЖК Чикаго 》Купить двухкомнатную квартиру в CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="【Двухкомнатные квартиры в CHICAGO Central House в самом центре Киева】Продажа 2-комнатных квартир бизнес класса в жилом комплексе Чикаго Централ Хаус. Цена кв. метра.. ✅【ЖК CHICAGO Central House】 ул. Владимира Антоновича (Горького), 44. Расположение... ✅【CHICAGO】 Успейте купить квартиру мечты!">
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/css/full.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/select.css">
<?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
	<meta property="og:title" content="≡ 2 комнатные квартиры в ЖК Чикаго 》Купить двухкомнатную квартиру в CHICAGO Central House" />
	<meta property="og:description" content="【Двухкомнатные квартиры в CHICAGO Central House в самом центре Киева】Продажа 2-комнатных квартир бизнес класса в жилом комплексе Чикаго Централ Хаус. Цена кв. метра.. ✅【ЖК CHICAGO Central House】 ул. Владимира Антоновича (Горького), 44. Расположение... ✅【CHICAGO】 Успейте купить квартиру мечты!" />
	<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
  <?php /*Google Tag Manager*/ include_once('../../includes/header_ru.php'); ?>

	<section class="h1_wrapper">
    <h1>Двухкомнатные квартиры в <br>ЖК CHICAGO Central House</h1>
  </section>

  <section class="light section_select">

    <div class="wrapper">

			<div class="select-info">
				<p>
					2-комнатные квартиры сегодня не менее популярны, чем 1-комнатные. Все дело в площади и планировке такого жилья, которое является оптимальным вариантом для пары или семьи с детьми.
				</p>
			</div>
			<div class="select_tabs">
				<ul>
					<li><a id="tab1" href="/ru/odnokomnatnaya-kvartira/">1-комнатные квартиры</a></li>
					<li><a class="active" id="tab2" href="/ru/dvuhkomnatnaya-kvartira/">2-комнатные квартиры</a></li>
					<li><a id="tab3" href="/ru/trehkomnatnaya-kvartira/">3-комнатные квартиры</a></li>
					<li><a id="tab4" href="/ru/dvuhurovnevaya-kvartira/">двухуровневые квартиры</a></li>
					<!-- <li><a id="tab5" href="#">торговые помещения</a></li> -->
				</ul>
			</div>
			<div class="select_box flex">
				<?php
				do {

				printf (	"<div class='room_item'>
						<div class='room_item_inner'>
							<div class='room_item_img'>
								<img src='/img/choice/app/%s' alt='Планировка квартиры'>
							</div>
							<table class='rooms_table'>
							<tbody>
							<tr>  <td>Этаж</td> <td>%s</td></tr>
							<tr>  <td>Общая площадь, м<sup>2</sup></td><td>%s</td></tr>
							<tr>  <td>Жилая площадь, м<sup>2</sup></td><td>%s</td></tr>
							</tbody></table>
							</div>
						<a class='button' href='/ru//appart/?type=%s'>Смотреть квартиру</a>
					</div> ", $myrow['imgPlan1'], $myrow['floor'], $myrow['houseroom'], $myrow['square'], $myrow['character_code']);
				}

				while ($myrow = mysql_fetch_array ($check));
				?>

			</div>

				<div class="select-info">
				<h2>Достоинства 2-комнатных квартир в ЖК CHICAGO Central House</h2>
				<p>ЖК CHICAGO Central House предлагает купить 2-к квартиру в Киеве. Она обладает несомненными преимуществами перед однокомнатной недвижимостью. </p>
				<ul>
				 <li>Прежде всего, это универсальное жилье. Оно подойдет как одному человеку, так и паре с более, чем одним ребенком. </li>
				 <li>На 2-комнатную квартиру всегда найдется покупатель и прибыль от ее продажи может быть очень неплохой. </li>
				 <li>2-комнатные квартиры жилого комплекса имеют свободную планировку, что позволит вам создать жилье мечты. Вы также можете выбрать планировку из предложенных нами. </li>
				</ul>
				<h2>Почему стоит купить двухкомнатную квартиру в ЖК CHICAGO Central House</h2>
				<p>Площадь 2-к квартир в ЖК CHICAGO Central House стартует с 63 м2. Ощущение пространства усиливают панорамные окна, которые улучшают освещение. </p>
				<p>Превосходно подойдет 2-комнатная квартира молодоженам и небольшим семьям. Такое жилье станет райским уголком для спокойной и счастливой жизни. К тому же, в комплексе превосходная звукоизоляция благодаря использованию высококачественных материалов. </p>
				<p>Если вы ищете лучшее жилье в Киеве &minus; смело выбирайте ЖК CHICAGO Central House. Квартира здесь станет вашей крепостью, творческим пространством, местом для отдыха, приятных встреч и счастливой семейной жизни. Звоните нам прямо сейчас и записывайтесь на экскурсию в удобный для вас день.</p>
				</div>

			</div>

  </section>

	<?php include('../../includes/form_main_ru.php'); ?>
	<?php include('../../includes/form_callback_ru.php'); ?>
	<?php include('../../includes/footer_ru.php'); ?>

	<script src="/js/snapSliderFancy.js"></script>
	<script src="/js/scripts.js"></script>

  </body>
</html>

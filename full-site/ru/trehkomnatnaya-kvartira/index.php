<?php include_once('../../includes/utm.php');
include('../../db.php');
$check = mysql_query("SELECT * FROM kvartity where character_code RLIKE '^3'" ,$db);
$myrow = mysql_fetch_array ($check);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/trehkomnatnaya-kvartira/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/trehkomnatnaya-kvartira/" />
  <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/trehkomnatnaya-kvartira/" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ 3 комнатные квартиры в ЖК Чикаго 》Купить трехкомнатную квартиру в CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="【Трехкомнатные квартиры в CHICAGO Central House в самом центре Киева】Продажа 3-комнатных квартир бизнес класса в жилом комплексе Чикаго Централ Хаус. Цена кв. метра.. ✅【ЖК CHICAGO Central House】 ул. Владимира Антоновича (Горького), 44. Расположение... ✅【CHICAGO】 Успейте купить квартиру мечты!">
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/css/full.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/select.css">
  <?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
  <meta property="og:title" content="≡ 3 комнатные квартиры в ЖК Чикаго 》Купить трехкомнатную квартиру в CHICAGO Central House" />
	<meta property="og:description" content="【Трехкомнатные квартиры в CHICAGO Central House в самом центре Киева】Продажа 3-комнатных квартир бизнес класса в жилом комплексе Чикаго Централ Хаус. Цена кв. метра.. ✅【ЖК CHICAGO Central House】 ул. Владимира Антоновича (Горького), 44. Расположение... ✅【CHICAGO】 Успейте купить квартиру мечты!" />
	<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
  <?php /*Google Tag Manager*/ include_once('../../includes/header_ru.php'); ?>

	<section class="h1_wrapper">
    <h1 class="wow fadeInLeft">Трехкомнатные квартиры в <br>ЖК CHICAGO Central House</h1>
  </section>
  <section class=" light section_select">
    <div class="wrapper">
			<div class="select-info">
				<p>
					Покупка 3-комнатной квартиры в новостройке &minus; выбор не только очень популярного типа жилья, но и грамотная инвестиция. Многофункциональность и прочие достоинства таких квартир делают такую покупку лучшим решением для семьи.
				</p>
			</div>
			<div class="select_tabs">
				<ul>
          <li><a id="tab1" href="/ru/odnokomnatnaya-kvartira/">1-комнатные квартиры</a></li>
					<li><a id="tab2" href="/ru/dvuhkomnatnaya-kvartira/">2-комнатные квартиры</a></li>
					<li><a class="active" id="tab3" href="/ru/trehkomnatnaya-kvartira/">3-комнатные квартиры</a></li>
					<li><a id="tab4" href="/ru/dvuhurovnevaya-kvartira/">двухуровневые квартиры</a></li>
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
				<h2>Достоинства 3-комнатных квартир в ЖК CHICAGO Central House</h2>
				<p>Если вы решили приобрести жилье, обратите внимание на 3-комнатные квартиры. Они имеют массу достоинств.</p>
				<ul>
				 <li>Вместительность. В 3-комнатной квартире жилого комплекса CHICAGO Central House комфортно разместится семья из пяти и более людей. Такое жилье станет идеальным вариантом для многодетной семейной пары. Если вы любите животных, то вашим питомцам здесь будет не скучно. </li>
				 <li>Выгодность. Прежде всего, 3-комнатная квартира не обесценивается. Даже если вы собираетесь жить сами, то в будущем, когда вы обзаведетесь семьей, вам не придется покупать более просторное жилье. Вы также можете сдавать квартиру в аренду и получать ежемесячный стабильный доход. </li>
				 <li>Многофункциональность. 3-к квартира в ЖК CHICAGO Central House &minus; находка для творческих людей, бизнесменов и фрилансеров, привыкших работать дома. Большая площадь позволяет обустроить в квартире студии, мастерские и кабинеты. </li>
				</ul>
				<h2>Почему стоит купить трехкомнатную квартиру в ЖК CHICAGO Central House</h2>
				<p>Разница в стоимости 3-комнатных и 2-комнатных квартир невелика. Именно поэтому трехкомнатная квартира в ЖК CHICAGO Central House &minus; это разумный и выгодный выбор.</p>
				<p>Трехкомнатные квартиры ЖК CHICAGO Central House имеют лоджии и террасы. Самый большой плюс &minus; свободная планировка. Только вы решаете, где разместится спальня, а где кухня с кладовой. Мы также приготовили для вас большое количество вариантов планировки жилья &minus; от стандартных до ультрасовременных.</p>
				<p>Если у вас большая семья, и вы устали тесниться под одной крышей &minus; ЖК CHICAGO Central House есть, что вам предложить. 3-комнатная квартира в новом комплексе &minus; это не предмет роскоши, а комфортное жилье, которое может стать вашим уже сегодня.</p>
				</div>

			</div>
    </div>
  </section>
  <?php include('../../includes/form_main_ru.php'); ?>
	<?php include('../../includes/form_callback.php'); ?>
	<?php include('../../includes/footer_ru.php'); ?>
	
<script src="/js/snapSliderFancy.js"></script>
<script src="/js/scripts.js"></script>
  </body>
</html>

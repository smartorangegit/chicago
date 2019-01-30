<?php include_once('../includes/utm.php');
include('../db.php');
$check = mysql_query("SELECT * FROM kvartity where character_code RLIKE '^2'" ,$db);
$myrow = mysql_fetch_array ($check);
?>

<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/dvuhkomnatnaya-kvartira/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/dvuhkomnatnaya-kvartira/" />
  <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/dvuhkomnatnaya-kvartira/" />
	<meta name="viewport" content="width=device-width">
	<title>≡ 2 кімнатні квартири в ЖК Чикаго 》Купити двокімнатну квартиру в CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="【Двокімнатні квартири в CHICAGO Central House в самому центрі Києва】 Продаж 2-кімнатних квартир бізнес класу в житловому комплексі Чикаго Централ Хаус. Ціна кв. метра... ✅ 【ЖК CHICAGO Central House】 Адреса розташування: вул. Володимира Антоновича, 44... ✅ 【CHICAGO】 Встигніть купити квартиру мрії!">
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/full.css">
	<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/select.css">
  <?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php'); ?>
  <meta property="og:title" content="≡ 2 кімнатні квартири в ЖК Чикаго 》Купити двокімнатну квартиру в CHICAGO Central House" />
	<meta property="og:description" content="【Двокімнатні квартири в CHICAGO Central House в самому центрі Києва】 Продаж 2-кімнатних квартир бізнес класу в житловому комплексі Чикаго Централ Хаус. Ціна кв. метра... ✅ 【ЖК CHICAGO Central House】 Адреса розташування: вул. Володимира Антоновича, 44... ✅ 【CHICAGO】 Встигніть купити квартиру мрії!" />
	<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_body.php'); ?>
  <?php /*Google Tag Manager*/ include_once('../includes/header_ua.php'); ?>

	<section class="h1_wrapper">
			<h1>Двокімнатні квартири в <br>ЖК CHICAGO Central House</h1>
  </section>

  <section class="light section_select">

    <div class="wrapper">

			<div class="select-info">
				<p>
					2-кімнатні квартири нині не менш популярні, ніж 1-кімнатні. Чимала площа та гарне планування такого житла є оптимальним варіантом для пари або сім&prime;ї з дітьми.
				</p>
			</div>
			<div class="select_tabs">
				<ul>
					<li><a id="tab1" href="/odnokomnatnaya-kvartira/">1-кімнатні квартири</a></li>
					<li><a class="active" id="tab2" href="/dvuhkomnatnaya-kvartira/">2-кімнатні квартири</a></li>
					<li><a id="tab3" href="/trehkomnatnaya-kvartira/">3-кімнатні квартири</a></li>
					<li><a id="tab4" href="/dvuhurovnevaya-kvartira/">дворівневі квартири</a></li>
					<!-- <li><a id="tab5" href="#">торгові приміщення</a></li> -->
				</ul>
			</div>
			<div class="select_box flex">
				<?php
				do {

				printf (	"<div class='room_item'>
						<div class='room_item_inner'>
							<div class='room_item_img'>
								<img src='../img/choice/app/%s' alt='Планировка квартиры'>
							</div>
							<table class='rooms_table'>
							<tbody>
							<tr>  <td>Поверх</td> <td>%s</td></tr>
							<tr>  <td>Общая площадь, м<sup>2</sup></td><td>%s</td></tr>
							<tr>  <td>Жилая площадь, м<sup>2</sup></td><td>%s</td></tr>
							</tbody></table>
							</div>
						<a class='button' href='/appart/?type=%s'>Смотреть квартиру</a>
					</div> ", $myrow['imgPlan1'], $myrow['floor'], $myrow['houseroom'], $myrow['square'], $myrow['character_code']);
				}

				while ($myrow = mysql_fetch_array ($check));
				?>

			</div>

				<div class="select-info">
				<h2>Переваги 2-кімнатних квартир в ЖК CHICAGO Central House</h2>
				<p>ЖК CHICAGO Central House пропонує купити 2-к квартиру в Києві. Вона має суттєві переваги перед однокімнатною нерухомістю.</p>
				<ul>
				<li> Перш за все, це універсальне житло. Воно підійде як одній людині, так і парі, що має більше однієї дитини.</li>
				<li> На 2-кімнатну квартиру завжди знайдеться покупець і прибуток з її продажу буде суттєвий. </li>
				<li>2-кімнатні квартири житлового комплексу мають вільні планування, що дасть вам змогу створити житло своєї мрії. Ви також можете обрати будь-який варіант планування, який ми запропонуємо.</li>

				</ul>
				<h2>Чому варто купити двокімнатну квартиру в ЖК CHICAGO Central House</h2>
				<p>
				Площа 2-к квартир в ЖК CHICAGO Central House стартує з 63 м2. Відчуття простору посилюють панорамні вікна, які покращують освітлення.
				</p>
				<p>Чудово підійде 2-кімнатна квартира молодятам та невеликим сім’ям. Таке житло стане райським куточком для спокійного й щасливого життя. До того ж у житловому комплексі чудова звукоізоляція завдяки використанню високоякісних матеріалів.</p>
				<p>Якщо ви шукаєте краще житло в Києві, сміливо обирайте ЖК CHICAGO Central House. Квартира тут стане вашою фортецею, творчим простором, а також місцем для відпочинку, приємних зустрічей і щасливого сімейного життя. Телефонуйте нам зараз, щоб отримати консультацію наших менеджерів і записатися на екскурсію в зручний для вас день і час.</p>
				</div>

			</div>

    <!-- </div> -->

  </section>
	<?php include('../includes/form_main_ua.php'); ?>
	<?php include('../includes/form_callback.php'); ?>
	<?php include('../includes/footer_ua.php'); ?>

	<script src="../js/snapSliderFancy.js"></script>
	<script src="../js/scripts.js"></script>

</body>
</html>

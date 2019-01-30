<?php include_once('../includes/utm.php');
include('../db.php');
$check = mysql_query("SELECT * FROM kvartity where floor = '23-24'" ,$db);
$myrow = mysql_fetch_array ($check);
?>

<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<title>≡ 2 рівневі квартири в ЖК Чикаго 》Купити дворівневу квартиру в CHICAGO Central House</title>
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="【Дворівневі квартири в CHICAGO Central House в самому центрі Києва】 Продаж 2-рівневих квартир бізнес класу в житловому комплексі Чикаго Централ Хаус. Ціна квадратного метра... ✅ 【ЖК CHICAGO Central House】 Адреса розташування: вул. Володимира Антоновича, 44... ✅ 【CHICAGO】 Встигніть купити квартиру мрії!">
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/dvuhurovnevaya-kvartira/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/dvuhurovnevaya-kvartira/" />
  <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/dvuhurovnevaya-kvartira/" />
	<meta name="robots" content="index, follow">
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/full.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/select.css">
  <?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php'); ?>
  <meta property="og:title" content="≡ 2 рівневі квартири в ЖК Чикаго 》Купити дворівневу квартиру в CHICAGO Central House" />
	<meta property="og:description" content="【Дворівневі квартири в CHICAGO Central House в самому центрі Києва】 Продаж 2-рівневих квартир бізнес класу в житловому комплексі Чикаго Централ Хаус. Ціна квадратного метра... ✅ 【ЖК CHICAGO Central House】 Адреса розташування: вул. Володимира Антоновича, 44... ✅ 【CHICAGO】 Встигніть купити квартиру мрії!" />
	<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_body.php'); ?>
  <?php /*Google Tag Manager*/ include_once('../includes/header_ua.php'); ?>

	<section class="h1_wrapper">
		<h1>Дворівневі квартири в <br> ЖК CHICAGO Central House</h1>
  </section>

  <section class="light section_select">

    <div class="wrapper">

			<div class="select-info">
				<p>
					Дворівневі квартири в міських будинках стають все популярнішими. І не випадково: проживання на двох рівнях приносить масу задоволення, а власник такого житла підкреслює свій статус і вишуканий смак. На сучасному ринку дворівневі квартири представлені як в елітному сегменті, так і в бізнес-класі, зокрема, у ЖК CHICAGO Central House.
				</p>
			</div>
			<div class="select_tabs">
				<ul>
					<li><a id="tab1" href="/odnokomnatnaya-kvartira/">1-кімнатні квартири</a></li>
					<li><a  id="tab2" href="/dvuhkomnatnaya-kvartira/">2-кімнатні квартири</a></li>
					<li><a id="tab3" href="/trehkomnatnaya-kvartira/">3-кімнатні квартири</a></li>
					<li><a class="active" id="tab4" href="/dvuhurovnevaya-kvartira/">двoрівневі квартири</a></li>
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
				<h2>Переваги 2-рівневих квартир в ЖК CHICAGO Central House</h2>
				<p>Перерахуємо основні переваги 2рівневої квартири в житловому комплексі CHICAGO Central House.</p>
				<ul>
				 <li> Звичайно, першою та найважливішою перевагою дворівневої квартири є її велика площа;</li>
				 <li> Дворівневі квартири легко зонуються, а приміщення розподілені за функціональним призначенням. На першому поверсі розташовуються вітальня, кухня, передпокій, а на другому знаходяться кімнати відпочинку, спальні й ванні кімнати. Особливістю дворівневих квартир ЖК CHICAGO Central House є їхні вільні планування, що дають змогу самостійно розподілити простір на зони й приміщення. </li>
				 <li> Така нерухомість відрізняється великим об&prime;ємом відкритого простору. Цей ефект подвоюють панорамні вікна, які завдяки відсутності стель створюють приємне та м&prime;яке друге освітлення.</li>
				 <li> Незмінним атрибутом 2-рівневої квартири є сходи, що додають простору вишуканості й підсилюють атмосферу життя в приватному будинку.</li>
				</ul>
				<h2>Чому варто купити дворівневу квартиру в ЖК CHICAGO Central House</h2>
				<p>2-рівневу квартиру, яка займає в будівлі комплексу два останніх поверхи, можна порівняти з приватним будинком. Тут усе величне, комфортне й дуже просторе. Два рівня й вільне планування житла дають можливість облаштувати квартиру з урахуванням всіх ваших потреб.</p>
				<p>Дворівневі квартири в ЖК CHICAGO Central House &minus; це чудові краєвиди: з 24-го поверху відкриваються видовищні панорами центру Києва. Крім того, вартість такого житла завжди залишатиметься високою. </p>
				<p>Така нерухомість ідеально підійде для тих, хто зацікавлений в придбанні статусного житла і прагне додати до свого життя різноманіття. Якщо це ви, то ЖК CHICAGO Central House чекає на вас. Не втрачайте шанс стати власником квартири «під небом» у центрі Києва вже сьогодні.</p>
			</div>



    </div>

  </section>
	<?php include('../includes/form_main_ua.php'); ?>
	<?php include('../includes/form_callback.php'); ?>
	<?php include('../includes/footer_ua.php'); ?>

	<script src="../js/snapSliderFancy.js"></script>
	<script src="../js/scripts.js"></script>

	</body>
	</html>

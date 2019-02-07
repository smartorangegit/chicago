<?php include_once('../../includes/utm.php');
include('../../db.php');
$check = mysql_query("SELECT * FROM kvartity where floor = '23-24'" ,$db);
$myrow = mysql_fetch_array ($check);
?>

<!DOCTYPE html>
<html lang="ru">
<head>

	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/dvuhurovnevaya-kvartira/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/dvuhurovnevaya-kvartira/" />
  <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/dvuhurovnevaya-kvartira/" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ 2 уровневые квартиры в ЖК Чикаго 》Купить двухуровневую квартиру в CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="【Двухуровневые квартиры в CHICAGO Central House в самом центре Киева】Продажа 2-уровневых квартир бизнес класса в жилом комплексе Чикаго Централ Хаус. Цена кв. метра.. ✅【ЖК CHICAGO Central House】 ул. Владимира Антоновича (Горького), 44. Расположение... ✅【CHICAGO】 Успейте купить квартиру мечты!">
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/css/full.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/select.css">
  <?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
  <meta property="og:title" content="≡ 2 уровневые квартиры в ЖК Чикаго 》Купить двухуровневую квартиру в CHICAGO Central House" />
	<meta property="og:description" content="【Двухуровневые квартиры в CHICAGO Central House в самом центре Киева】Продажа 2-уровневых квартир бизнес класса в жилом комплексе Чикаго Централ Хаус. Цена кв. метра.. ✅【ЖК CHICAGO Central House】 ул. Владимира Антоновича (Горького), 44. Расположение... ✅【CHICAGO】 Успейте купить квартиру мечты!" />
	<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
	<?php /*Google Tag Manager*/ include_once('../../includes/header_ru.php'); ?>

	<section class="h1_wrapper">
        <h1>Двухуровневые квартиры в <br>ЖК CHICAGO Central House</h1>
  </section>

  <section class="light section_select">

    <div class="wrapper">

			<div class="select-info">
				<p>
					Двухуровневые квартиры в городских домах сегодня все более популярны. И это неспроста: проживание на двух уровнях приносит массу удовольствия, а владелец такого жилья подчеркивает свой статус и изысканный вкус. На современном рынке двухуровневые квартиры предлагаются как в элитном сегменте, так и в бизнес-классе, в частности - в ЖК CHICAGO Central House.
				</p>
			</div>
			<div class="select_tabs">
				<ul>
					<li><a id="tab1" href="/ru/odnokomnatnaya-kvartira/">1-комнатные квартиры</a></li>
					<li><a id="tab2" href="/ru/dvuhkomnatnaya-kvartira/">2-комнатные квартиры</a></li>
					<li><a id="tab3" href="/ru/trehkomnatnaya-kvartira/">3-комнатные квартиры</a></li>
					<li><a class="active" id="tab4" href="/ru/dvuhurovnevaya-kvartira/">двухуровневые квартиры</a></li>
					<!-- <li><a id="tab5" href="#">торгові приміщення</a></li> -->
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
							<tr>  <td>Поверх</td> <td>%s</td></tr>
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
						<h2>Достоинства 2-уровневых квартир в ЖК CHICAGO Central House</h2>
						<p>Выделим основные преимущества 2-уровневых квартир в жилом комплексе CHICAGO Central House. </p>
						<ul>
						 <li>Конечно, первым и самым важным преимуществом 2-уровневой квартиры является большая площадь.</li>
						 <li>Двухуровневые квартиры легко зонируются, а помещения разделяются по функциональному назначению. На первом этаже располагаются общие зоны – гостиная, кухня, прихожая, на втором &minus; комнаты отдыха, спальни, ванные. Особенностью 2-х уровневых квартир ЖК CHICAGO Central House являются свободные планировки, позволяющие самостоятельно разделить пространство на зоны и помещения. </li>
						 <li>Такая недвижимость отличается большим объемом открытого пространства. За счет этого, в квартире больше места и света, что усиливается панорамными окнами. Отсутствие же привычных потолков позволяет создать второе освещение &minus; приятное и мягкое. </li>
						 <li>Неизменный атрибут 2-уровневой квартиры &minus; лестница &minus; придает особую изюминку пространству и еще больше усиливает атмосферу жизни в частном доме. </li>
						</ul>
						<h2>Почему стоит купить двухуровневую квартиру в ЖК CHICAGO Central House</h2>
						<p>2-уровневую квартиру, которая занимает в здании комплекса два последних этажа, можно сравнить с частным домом. Здесь необычно, комфортно и очень просторно. Два уровня и свободная планировка дают возможность обустройства квартиры на свой вкус, при этом ни в чем себе не отказывая.  </p>
						<p>Двухуровневые квартиры в ЖК CHICAGO Central House &minus; это превосходные видовые характеристики: с 24-го этажа из панорамных окон открываются захватывающие виды на центр Киева. Кроме того, вне зависимости от ситуации на рынке недвижимости, цены на такое жилье остаются неизменно высокими. Это престижные квартиры, спрос на которые всегда высок.</p>
						<p>Такая недвижимость идеально подойдет для тех, кто заинтересован в покупке статусного жилья, желает вложить средства во что-то оригинальное и внести в свою жизнь приятное разнообразие. Если все это о вас, то ЖК CHICAGO Central House ждет вас. Не упускайте шанс стать владельцем квартиры «под небом» в центре Киева уже сегодня.</p>
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

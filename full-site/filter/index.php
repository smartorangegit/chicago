<?php include_once('../includes/utm.php');
include('../db.php');
$check = mysql_query("SELECT * FROM kvartity" ,$db);
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
	<title>≡ Фільтр ЖК Чикаго 》Обрати за параметрами квартиру в CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="【Обрати за параметрами квартиру в CHICAGO Central House в самому центрі Києва】 Обрати за параметрами квартиру в житловому комплексі Чикаго Централ Хаус. Ціна кв. метра... ✅ 【ЖК CHICAGO Central House】 Адреса розташування: вул. Володимира Антоновича, 44... ✅ 【CHICAGO】 Встигніть купити квартиру мрії!">
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/full.css">
	<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/select.css">
  <?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php'); ?>
  <meta property="og:title" content="≡ Фільтр ЖК Чикаго 》Купити двокімнатну квартиру в CHICAGO Central House" />
	<meta property="og:description" content="【Обрати за параметрами квартиру в CHICAGO Central House в самому центрі Києва】 Обрати за параметрами квартиру в житловому комплексі Чикаго Централ Хаус. Ціна кв. метра... ✅ 【ЖК CHICAGO Central House】 Адреса розташування: вул. Володимира Антоновича, 44... ✅ 【CHICAGO】 Встигніть купити квартиру мрії!" />
	<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_body.php'); ?>
  <?php /*Google Tag Manager*/ include_once('../includes/header_ua.php'); ?>

	<section class="h1_wrapper">
			<h1>Фільтр</h1>
  </section>

  <section class="light section_select">

    <div class="wrapper">

			<section class="range-section">
        <div class="range_inner flex">
            <div class="range__item flex">
                <div class="filter_name">Загальна площа, м<sup>2</sup></div>
                <div class="range_input">
                    <input type="text" class="range-init" id="all_roomRange" data-min="36" data-max="150">
                </div>
            </div>
            <div class="range__item flex">
                <div class="filter_name">Поверх</div>
                <div class="range_input">
                    <input type="text" class="range-init" id="floorRange" data-min="1" data-max="25" >
                </div>
            </div>
            <div class="range__item flex">
                <div class="filter_name">Кількість кімнат</div>
                <div class="range_input">
                    <input type="text" class="range-init" id="roomsRange" data-min="1" data-max="4">
                </div>
            </div>
            <div class="range__item flex">
                <div class="filter_name">Вартість</div>
                <div class="range_input">
                    <input type="text" class="range-init" id="priceRange" data-min="300000" data-max="1620000">
                </div>
            </div>
        </div>
        <div class="range_button flex">
          <div class="checkbox_input flex">
            <div class="filter_name">Дом</div>
                <input id="checkbox__room1" class="checkbox__room filter__checkbox" type="checkbox" value="1"/>
                <label for="checkbox__room1" class="checkbox__text">1</label>
                <input id="checkbox__room2" class="checkbox__room filter__checkbox" type="checkbox" value="2"/>
                <label for="checkbox__room2" class="checkbox__text">2</label>
                <input id="checkbox__room3" class="checkbox__room filter__checkbox" type="checkbox" value="3"/>
                <label for="checkbox__room3" class="checkbox__text">3</label>
                <input id="checkbox__room4" class="checkbox__room filter__checkbox" type="checkbox" value="4"/>
                <label for="checkbox__room4" class="checkbox__text">4</label>
          </div>
          <div id="search" class="button button-red">Искать </div>
          <div id="reset" class="reset_button">Сбросить параметры</div>
        </div>
        <div class="range_info flex">
          <div class="range_info_item">
            Найдено типов квартир: <span id="numResults">0</span>
          </div>
          <div class="range_info_item">
            <a href="/1-rooms.php">1-кімнатні</a>
            <a href="/2-rooms.php">2-кімнатні</a>
            <a href="/3-rooms.php">3-кімнатні</a>
          </div>

        </div>


      </section>

			<!-- так должна віглядеть кварира -->
			<tr class="rows_c" data-href="" data-image="/img/houses/flat2A.png" data-bn="2" data-sn="5" data-floor="3" data-rooms="1" data-square="46.70" data-price="598509">
					<td>2</td>
					<td>5</td>
					<td>3</td>
					<td>1</td>
					<td>46.70</td>
					<td>1-A</td>
					<td>598509</td>
			</tr>











			<div class="select-info">
				<!-- <p>
					2-кімнатні квартири нині не менш популярні, ніж 1-кімнатні. Чимала площа та гарне планування такого житла є оптимальним варіантом для пари або сім&prime;ї з дітьми.
				</p> -->
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

				printf (	"<div class='room_item' data-floor='3' data-rooms='1' data-square='46.70' data-price='598509' data-terace='1'>
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



			</div>

    <!-- </div> -->

  </section>
	<?php include('../includes/form_main_ua.php'); ?>
	<?php include('../includes/form_callback.php'); ?>
	<?php include('../includes/footer_ua.php'); ?>

	<script src="../js/snapSliderFancy.js"></script>
	<script src="../js/scripts.js"></script>
	<script src="/js/ion.rangeSlider.js"></script>
  <script src="/js/range.js"></script>


</body>
</html>

<?php include_once('../includes/utm.php');
include('../db.php');
$check = mysql_query("SELECT * FROM kvartity where character_code RLIKE '^1'" ,$db);
$myrow = mysql_fetch_array ($check);
?>

<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<title>≡ 1 кімнатні квартири в ЖК Чикаго 》Купити однокімнатну квартиру в CHICAGO Central House</title>
	<meta name="viewport" content="width=device-width">
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="【Однокімнатні квартири в CHICAGO Central House в самому центрі Києва】 Продаж 1-кімнатних квартир бізнес класу в житловому комплексі Чикаго Централ Хаус. Ціна кв. метра... ✅ 【ЖК CHICAGO Central House】 Адреса розташування: вул. Володимира Антоновича, 44... ✅ 【CHICAGO】 Встигніть купити квартиру мрії!">
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/odnokomnatnaya-kvartira/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/odnokomnatnaya-kvartira/" />
  <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/odnokomnatnaya-kvartira/" />
	<meta name="robots" content="index, follow">
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/full.css">
	<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/select.css">
  <?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php'); ?>
	<meta property="og:title" content="≡ 1 кімнатні квартири в ЖК Чикаго 》Купити однокімнатну квартиру в CHICAGO Central House" />
	<meta property="og:description" content="【Однокімнатні квартири в CHICAGO Central House в самому центрі Києва】 Продаж 1-кімнатних квартир бізнес класу в житловому комплексі Чикаго Централ Хаус. Ціна кв. метра... ✅ 【ЖК CHICAGO Central House】 Адреса розташування: вул. Володимира Антоновича, 44... ✅ 【CHICAGO】 Встигніть купити квартиру мрії!" />
	<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_body.php'); ?>
  <?php /*Google Tag Manager*/ include_once('../includes/header_ua.php'); ?>

	<section class="h1_wrapper">
			<h1>Однокімнатні квартири в <br>ЖК CHICAGO Central House</h1>
  </section>

  <section class="light section_select">

    <div class="wrapper">

			<div class="select-info">
				<p>
					Уже багато років поспіль 1-кімнатні квартири в новобудовах Києва користуються чималим попитом. У такого житла багато переваг, зокрема, доступність і зручність. Якщо ви хочете стати власником затишної 1-кімнатної квартири, вам варто ознайомитися з пропозицією від ЖК CHICAGO Central House.
				</p>
			</div>
			<div class="select_tabs">
				<ul>
          <li><a class="active" id="tab1" href="/odnokomnatnaya-kvartira/">1-кімнатні квартири</a></li>
					<li><a id="tab2" href="/dvuhkomnatnaya-kvartira/">2-кімнатні квартири</a></li>
					<li><a id="tab3" href="/trehkomnatnaya-kvartira/">3-кімнатні квартири</a></li>
					<li><a id="tab4" href="/dvuhurovnevaya-kvartira/">дворівневі квартири</a></li>
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
					<h2>Переваги 1-кімнатних квартир в ЖК CHICAGO Central House</h2>
					<p>Однокімнатні квартири в житловому комплексі CHICAGO Central House відповідають всім ключовим характеристикам комфортного житла і при цьому мають прийнятну ціну. Якщо ж додати сюди вдале розташування комплексу та близькість до ключових об&prime;єктів столиці, можна впевнено стверджувати, що 1-кімнатні квартири в ЖК CHICAGO Central House є максимально вигідною пропозицією.</p>
					<p>1-кімнатні квартири комплексу доволі просторі. Їхня мінімальна площа &minus; 42 м2. Між іншим, придбання такої нерухомості є ідеальним варіантом для однієї людини або пари без дітей.</p>
					<p>Великим попитом 1-кімнатне житло користується в молоді: часто такі квартири купують батьки своїм дітям-студентам. Додатковий плюс &minus; поряд із ЖК CHICAGO Central House багато престижних вишів, до яких можна дійти навіть пішки. </p>
					<p>Популярні 1-кімнатні квартири і серед приватних інвесторів. Купівля нерухомості в новобудові на ранніх стадіях будівництва та її подальший продаж дуже вигідний: по-перше, квадратні метри щороку дорожчають, а по-друге, таке житло можна здавати в оренду й отримувати непоганий прибуток.</p>
					<h2>Чому варто купити однокімнатну квартиру в ЖК CHICAGO Central House</h2>
					<ol>
					 <li> Доступна ціна й площа, що дає змогу жити з комфортом не тільки одному, але і двом людям.</li>
					 <li> Вільне планування. Ви самостійно вирішуєте, яким буде ваше майбутнє житло. Крім того, ми пропонуємо безліч варіантів готових планувань на будь-який смак і відповідно до потреб власника.</li>
					 <li> Економія грошей. 1-кімнатну квартиру завжди продати легко, а вдале розташування комплексу дає змогу знайти орендаря досить швидко.</li>
					</ol>
					<p>Залиште свій контактний номер телефону, щоб отримати вичерпну інформацію та записатися на екскурсію. Станьте на крок ближче до мрії з ЖК CHICAGO Central House.</p>
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

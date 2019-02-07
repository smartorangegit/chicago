<?php include_once('../includes/utm.php');
include('../db.php');
$check = mysql_query("SELECT * FROM kvartity where character_code RLIKE '^3'" ,$db);
$myrow = mysql_fetch_array ($check);
?>

<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ 3 кімнатні квартири в ЖК Чикаго 》Купити трикімнатну квартиру в CHICAGO Central House</title>
	<meta name="description" content="【Трикімнатні квартири в CHICAGO Central House в самому центрі Києва】 Продаж 3-кімнатних квартир бізнес класу в житловому комплексі Чикаго Централ Хаус. Ціна квадратного метра... ✅ 【ЖК CHICAGO Central House】 Адреса розташування: вул. Володимира Антоновича, 44... ✅ 【CHICAGO】 Встигніть купити квартиру мрії!">
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/trehkomnatnaya-kvartira/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/trehkomnatnaya-kvartira/" />
	<link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/trehkomnatnaya-kvartira/" />
	<meta name="robots" content="index, follow">
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/full.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/select.css">
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php'); ?>
	<meta property="og:title" content="≡ 3 кімнатні квартири в ЖК Чикаго 》Купити трикімнатну квартиру в CHICAGO Central House" />
	<meta property="og:description" content="【Трикімнатні квартири в CHICAGO Central House в самому центрі Києва】 Продаж 3-кімнатних квартир бізнес класу в житловому комплексі Чикаго Централ Хаус. Ціна квадратного метра... ✅ 【ЖК CHICAGO Central House】 Адреса розташування: вул. Володимира Антоновича, 44... ✅ 【CHICAGO】 Встигніть купити квартиру мрії!" />
	<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
</head>
<body>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_body.php'); ?>
  <?php /*Google Tag Manager*/ include_once('../includes/header_ua.php'); ?>

	<section class="h1_wrapper">
	   <h1>3-кімнатні квартири в <br>ЖК CHICAGO Central House</h1>
  </section>

  <section class="light section_select">

    <div class="wrapper">

			<div class="select-info">
				<p>
					Купівля 3-кімнатної квартири в новобудові &minus; вибір не тільки дуже популярного типу житла, але і розумна інвестиція. Багатофункціональність та інші переваги таких квартир зроблять вашу покупку найкращим рішенням для сім&prime;ї.
				</p>
			</div>

			<div class="select_tabs">
				<ul>
          <li><a id="tab1" href="/odnokomnatnaya-kvartira/">1-кімнатні квартири</a></li>
					<li><a id="tab2" href="/dvuhkomnatnaya-kvartira/">2-кімнатні квартири</a></li>
					<li><a class="active" id="tab3" href="/trehkomnatnaya-kvartira/">3-кімнатні квартири</a></li>
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
			<h2>Переваги 3-кімнатних квартир в ЖК CHICAGO Central House</h2>
			<p>Якщо ви вирішили придбати житло, зверніть увагу саме на 3-кімнатні квартири. Вони мають чимало плюсів.</p>
			<ul>
			 <li> Місткість. У трикімнатній квартирі житлового комплексу CHICAGO Central House з комфортом проживатиме велика сім&prime;я. Таке житло стане ідеальним варіантом і для багатодітної сімейної пари. Якщо ж ви любите тварин, то вашим улюбленцям тут 100% сподобається.</li>
			 <li> Вигідність. Перш за все, трикімнатна квартира ніколи не втрачає своєї цінності. Навіть якщо ви хочете жити самі, то в майбутньому, коли у вас з&prime;явиться сім&prime;я, вам не доведеться купувати просторніше житло. Ви також можете здавати квартиру в оренду й отримувати щомісячний стабільний прибуток.</li>
			 <li>Багатофункціональність. 3-к квартира в ЖК CHICAGO Central House &minus; знахідка для творчих людей, бізнесменів та фрілансерів, які звикли працювати вдома. Велика площа дозволяє облаштувати в квартирі студії, майстерні та кабінети.</li>
			 </ul>
			<h2>Чому варто купити трикімнатну квартиру в ЖК CHICAGO Central House</h2>
			<p>Різниця у вартості 3-кімнатних та 2-кімнатних квартир незначна. Саме тому трикімнатна квартира в ЖК CHICAGO Central House &minus; це розумний та вигідний вибір.</p>
			<p>Трикімнатні квартири ЖК CHICAGO Central House мають лоджії й тераси. Однією з додаткових переваг є вільне планування такого житла. Тільки вам вирішувати, де розміститься спальня, а де кухня з вітальнею. Ми також підготували для вас величезну кількість варіантів планування квартир &minus; від стандартних до ультрасучасних.</p>
			<p>Якщо у вас велика сім&prime;я і ви хочете жити комфортно, ЖК CHICAGO Central House є, що вам запропонувати. 3-кімнатна квартира в новому комплексі &minus; це передусім зручне житло, яке може стати вашим уже сьогодні.</p>
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

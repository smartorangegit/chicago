<?php include_once('../includes/utm.php');
include('../db.php');
$check = mysql_query("SELECT * FROM kvartity where character_code RLIKE '^3'" ,$db);
$myrow = mysql_fetch_array ($check);
?>
<!DOCTYPE html>
<html lang="uk">
<head>

<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/trehkomnatnaya-kvartira/" />
<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/trehkomnatnaya-kvartira/" />
<link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/trehkomnatnaya-kvartira/" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>≡ 3 кімнатні квартири в ЖК Чикаго 》Купити трикімнатну квартиру в CHICAGO Central House</title>
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
<meta name="description" content="【Трикімнатні квартири в CHICAGO Central House в самому центрі Києва】 Продаж 3-кімнатних квартир бізнес класу в житловому комплексі Чикаго Централ Хаус. Ціна квадратного метра... ✅ 【ЖК CHICAGO Central House】 Адреса розташування: вул. Володимира Антоновича, 44... ✅ 【CHICAGO】 Встигніть купити квартиру мрії!">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
<link rel="stylesheet" href="../css/animate.css">
<link rel="stylesheet" href="../css/slider-style.css">
<link rel="stylesheet" href="../css/jquery.fancybox.css">
<link rel="stylesheet" href="../css/jquery.fancybox-thumbs.css">
<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="../css/style.css">
<!-- <link rel="stylesheet" href="../css/progress.css">
<link rel="stylesheet" href="../css/news.css"> -->
<link rel="stylesheet" href="../css/select.css">
<script type="text/javascript" src="../js/lib/greensock/TweenMax.min.js"></script>
<script src="../js/lib/scrollmagic/ScrollMagic.min.js"></script>
<script type="text/javascript" src="../js/lib/scrollmagic/plugins/animation.gsap.js"></script>
<script src="../js/lib/plugins/debug.addIndicators.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php'); ?>
</head>
<body>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_body.php'); ?>
    <script>
        var controller = new ScrollMagic.Controller();
    </script>

	<?php /*Google Tag Manager*/ include_once('../includes/header_ua.php'); ?>

	<section class="fifteenth">
		<span class="trigger-7"></span>
        <h1 class="title">3-кімнатні квартири в <br>ЖК CHICAGO Central House</h1>

  </section>

  <section class="third light section_select">
    <div class="wrapper">
			<span class="trigger-0"></span>

			<div class="select-info">Купівля 3-кімнатної квартири в новобудові &minus; вибір не тільки дуже популярного типу житла, але і розумна інвестиція. Багатофункціональність та інші переваги таких квартир зроблять вашу покупку найкращим рішенням для сім&prime;ї.
			</div>
			<div class="select_tabs">
				<ul>
          <li><a id="tab1" href="/odnokomnatnaya-kvartira/">1-кімнатні квартири</a></li>
					<li><a id="tab2" href="/dvuhkomnatnaya-kvartira/">2-кімнатні квартири</a></li>
					<li><a class="active" id="tab3" href="/trehkomnatnaya-kvartira/">3-кімнатні квартири</a></li>
					<li><a id="tab4" href="/dvuhurovnevaya-kvartira/">дворівневі квартири</a></li>
				</ul>
			</div>
			<div id="content" class="select_table">
				<table>
				   <!-- <caption>Таблица</caption> -->
				   <thead>

				   <tr>
				    <th class="content_subname">поверх</th>
				    <th class="content_subname">житлова площа</th>
				    <th class="content_subname">загальна площа</th>
				   </tr>
				 </thead>
				 <tbody>
<?php


       	do {
			printf ( "<tr data-href='/appart/?type=%s' data-img='../img/choice/app/%s'>
				       <td>%s</td>      <td>%s</td>       <td>%s
				         <div class='box-img'>
				           <img src='' alt=''>
				         </div>

				     </td></tr>", $myrow['character_code'], $myrow['imgPlan1'], $myrow['floor'], $myrow['houseroom'], $myrow['square']);
		}
while ($myrow = mysql_fetch_array ($check));
?>
				 </tbody>
				  </table>
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
			  <script type="text/javascript">
			    $('tbody tr[data-href]').addClass('clickable').click( function() {
				      window.location = $(this).attr('data-href');
				    });

				    $('tbody tr').mouseenter(function(){
				      $(this).find('.box-img').fadeIn(100);
				      $(this).find('.box-img img').attr('src', $(this).attr('data-img'));
				      })

				    $('tbody tr').mouseleave(function(){
				      $(this).find('.box-img').fadeOut(100);
				    })
			  </script>
			</div>
    </div>
  </section>
	<?php include('../includes/form_callback.php'); ?>

<?php include('../includes/footer_ua.php'); ?>
	<script src="/js/scripts.js"></script>
    <script src="../js/lib/snap.svg-min.js"></script>
    <script src="../js/lib/slider.js"></script>
    <script src="../js/jquery.fancybox.pack.js"></script>
    <script src="../js/jquery.fancybox-thumbs.js"></script>
    <script src="../js/lib/wow.min.js"></script>
		<script src="../js/progres.js"></script>
  	<!-- <script src="../js/scripts.js"> -->
  </body>
</html>

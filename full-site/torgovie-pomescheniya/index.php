<?php include_once('../includes/utm.php');
include('../db.php');
$check = mysql_query("SELECT * FROM kvartity where character_code RLIKE '^1'" ,$db);
$myrow = mysql_fetch_array ($check);
?>
<!DOCTYPE html>
<html lang="uk">
<head>
	
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/torgovie-pomescheniya/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/torgovie-pomescheniya/" />
    <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/torgovie-pomescheniya/" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ ЖК Чикаго 》Купити комерційну нерухомість в CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="【Продаж торгових приміщень в ЖК CHICAGO】 Нежитлова нерухомість в центрі Києва в житловому комплексі Чикаго Централ Хаус. Вартість і умови придбання комерційних площ... ✅ 【житловий комплекс CHICAGO Central House】 Адреса: вул. Володимира Антоновича, 44 ✅ 【CHICAGO】 Встигніть купити квартиру мрії!">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="../css/slider-style.css">
  <link rel="stylesheet" href="../css/jquery.fancybox.css">
  <link rel="stylesheet" href="../css/jquery.fancybox-thumbs.css">
  <link rel="stylesheet" href="../css/news.css">
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/progress.css">
	<link rel="stylesheet" href="../css/news.css">
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
        <h1 class="title">Комерційна нерухомість в CHICAGO Central House</h1>
        <i class="line"></i>
  </section>

  <section class="third light section_select">
        <div class="lamps wrapper">
            <img src="../img/icons/lamp.png" alt="lamp" />
						<img src="../img/icons/lamp.png" alt="lamp" />
						<img src="../img/icons/lamp.png" alt="lamp" />
        </div>
    <div class="wrapper">
			<span class="trigger-0"></span>

			<div class="select-info"><p>Київ - мегаполіс, що активно розвивається. Незмінним попитом користується комерційна нерухомість, яка розташована на перших поверхах новобудов. Новий житловий комплекс CHICAGO Central House в Голосіївському районі столиці служить символом нової для України концепції життя, і цю цінність ми розділяємо із усіма власниками торгової нерухомості у будинку.</p>
<br>
				
				<div class="img_all">
						<img src="../download_plans/torgovie-pomescheniya.jpg" width="100%" alt="Схема комерційних приміщень в CHICAGO Central House" />

				</div>
			</div>

			<div class="select_tabs">
			<!--	<ul>
          <li><a class="active" id="tab1" href="/odnokomnatnaya-kvartira/">1-кімнатні квартири</a></li>
					<li><a id="tab2" href="/dvuhkomnatnaya-kvartira/">2-кімнатні квартири</a></li>
					<li><a id="tab3" href="/trehkomnatnaya-kvartira/">3-кімнатні квартири</a></li>
					<li><a id="tab4" href="/dvuhurovnevaya-kvartira/">дворівневі квартири</a></li>
				</ul> -->
			</div>
			<div id="content" class="select_table">
				<table>
				   <!-- <caption>Таблица</caption> -->
				   <thead>

				   <tr>
				    <th class="content_subname">приміщення №</th>
				    <th class="content_subname">кількість поверхів</th>
				    <th class="content_subname">загальна площа</th>
				   </tr>
				 </thead>
				 <tbody>
<?php /*


       	do {
			printf ( "<tr data-href='/appart/?type=%s' data-img='../img/choice/app/%s'>
				       <td>%s</td>      <td>%s</td>       <td>%s
				         <div class='box-img'>
				           <img src='' alt=''>
				         </div>

				     </td></tr>", $myrow['character_code'], $myrow['imgPlan1'], $myrow['floor'], $myrow['houseroom'], $myrow['square']);
		}
while ($myrow = mysql_fetch_array ($check)); */
?>
				     <tr data-href="/download_plans/torg2.jpg" onclick="window.open('/download_plans/torg2.jpg'); return false;">
				       <td>2</td>      <td>1</td>       <td>71,82
				         <div class="box-img">
				           <img src="" alt="">
				         </div>

				       </td></tr>

				     <tr data-href="/download_plans/torg3.jpg" onclick="window.open('/download_plans/torg3.jpg'); return false;">
				       <td>3</td>      <td>2</td>       <td>133,78
				         <div class="box-img">
				           <img src="" alt="">
				         </div>
				       </td></tr>

					   <tr data-href="/download_plans/torg4.jpg" onclick="window.open('/download_plans/torg4.jpg'); return false;">
				       <td>4</td>      <td>2</td>       <td>179,24
				         <div class="box-img">
				           <img src="" alt="">
				         </div>

				       </td></tr>

				     <tr data-href="/download_plans/torg5.jpg" onclick="window.open('/download_plans/torg5.jpg'); return false;">
				       <td>5</td>      <td>2</td>       <td>576,5
				         <div class="box-img">
				           <img src="" alt="">
				         </div>
				       </td></tr>

					   <tr data-href="/download_plans/torg6.jpg" onclick="window.open('/download_plans/torg6.jpg'); return false;">
				       <td>6</td>      <td>1</td>       <td>144,86
				         <div class="box-img">
				           <img src="" alt="">
				         </div>

				       </td></tr>

				     <tr data-href="/download_plans/torg7.jpg" onclick="window.open('/download_plans/torg7.jpg'); return false;">
				       <td>7</td>      <td>1</td>       <td>118,79
				         <div class="box-img">
				           <img src="" alt="">
				         </div>
				       </td></tr>

					     <tr data-href="/download_plans/torg8.jpg" onclick="window.open('/download_plans/torg8.jpg'); return false;">
				       <td>8</td>      <td>3</td>       <td>515,5
				         <div class="box-img">
				           <img src="" alt="">
				         </div>
				       </td></tr>

					       <tr data-href="/download_plans/torg9.jpg" onclick="window.open('/download_plans/torg9.jpg'); return false;">
				       <td>8</td>      <td>1</td>       <td>1286,54
				         <div class="box-img">
				           <img src="" alt="">
				         </div>
				       </td></tr>

					       <tr data-href="/download_plans/torg10.jpg" onclick="window.open('/download_plans/torg10.jpg'); return false;">
				       <td>8</td>      <td>1</td>       <td>1286,54
				         <div class="box-img">
				           <img src="" alt="">
				         </div>
				       </td></tr>


				</tbody>



				  </table>

<div class="select-info">



<h2>Вигідна пропозиція від забудовника</h2>
<p>Загальна площа  комерційних об"єктів CHICAGO Central House становить більше ніж 4000 кв.м.</p>
<p>Придбання такої нерухомості значно зменшує операційні витрати та служить найкращим шляхом капіталізації коштів. В умовах стабільного економічного зростання попит на якісні об"єкти нерухомості у центрі міста перевищує пропозицію, що формує постійне зростання їх вартості. </p>
<p>Нежитлова нерухомість у CHICAGO Central House гарантує бізнесу високий статус та впізнаваність.</p>
<p>Придбання комерційної нерухомості у центральній частині столиці забезпечує бізнесу постійний приплив споживачів та динамічне зростання.</p>
<p>Центральна частина міста, враховуючи її історичну цінність, менш схильна до конструктивних змін, що обмежує появу нових якісних об"єктів та забезпечує постійний попит.</p>
<h2>Переваги комерційної нерухомості в ЖК CHICAGO Central House</h2>
<p>Комерційна нерухомість в ЖК CHICAGO Central House – це:</p>
<ol>
 <li>Вигідне розташування. Будівля комплексу знаходиться на вулиці Антоновича з відмінною транспортною доступністю. Недалеко станції метро та зупинки наземного громадського транспорту.</li>
 <li>Зручна прохідність. Входи й виходи комерційних приміщень організовані таким чином, щоб сюди могли заходити не лише мешканці комплексу, а й відвідувачі центральної частини міста.</li>
 <li>Якість споруди. Будівля комплексу побудована за новітніми технологіями з дотриманням всіх норм, тому всі торгівельні приміщення мають гарну звукоізоляцію, що важливо для власників розважальних закладів.</li>
 <li>Широкий вибір. У комплексі пропонується варіативність планування. 
Завдяки приміщенням, що враховують специфіку майбутнього закладу, тут можна відкрити: 
</li>
</ol>
<p>-	Офіс. Для приміщень даного призначення передбачено два поверхи, що складають 2442 кв. м.</p>
<p>-	Бутік. Торгові площі представлені шістьма приміщеннями, забезпеченими великими вітринами, загальною площею <br>майже 740 кв. м. </p>
<p>-	Ресторан. У комплексі передбачено два спеціалізованих об"єкти з можливістю створення літнього майданчика, загальною площею понад 1000 кв. м.
<p>-  Чи реалізувати будь-яку іншу бізнес ідею покупця.</p>
</p>
 <h2>Як купити нежитлове приміщення в ЖК CHICAGO Central House</h2>
<p>Отримати всю інформацію про нерухомість комплексу ви можете у відділі продажу. Залиште свій номер телефону на сайті й менеджери зателефонують вам найближчим часом.</p>
<p>У CHICAGO Central House передбачено оптимальний обсяг комерційної нерухомості, де місцеві жителі зможуть знайти товари й послуги безпосередньо на території комплексу. Це ідеальне середовище не тільки для комфортного проживання, а й для успішного й бізнесу.</p>



</div>
				  <script type="text/javascript">
				  /*  $('tbody tr[data-href]').addClass('clickable').click( function() {
				      window.location = $(this).attr('data-href');
				    });*/

				    $('tbody tr').mouseenter(function(){
				      $(this).find('.box-img').fadeIn(100);
				      $(this).find('.box-img img').attr('src', $(this).attr('data-img'));
				      })

				    $('tbody tr').mouseleave(function(){
				      $(this).find('.box-img').fadeOut(100);
				    })

				  </script>

			</div>

				<div class="news_other">
				<div class="other_name">читати далі</div>
				<div class="other_news_item">
					<a href="/kvartira-center/">Квартира у центрі</a>
					<span class="other_news_date"></span>
				</div>
				<div class="other_news_item">
					<a href="/svobodnaya-planirovka/">Вільне планування квартир</a>
					<span class="other_news_date"></span>
				</div>
				<div class="other_news_item">
					<a href="/rassrochka/">Розстрочка від забудовника</a>
					<span class="other_news_date"></span>
				</div>
				<div class="other_news_item">
					<a href="/parking/">Паркінг у ЖК CHICAGO Central House</a>
					<span class="other_news_date"></span>
				</div>

			</div>

    </div>

  </section>



	<?php include('../includes/form_callback.php'); ?>

    <?php include('../includes/footer_ua.php'); ?>

    <script src="../js/lib/snap.svg-min.js"></script>
    <script src="../js/lib/slider.js"></script>
    <script src="../js/scripts.js"></script>	
    <script src="../js/jquery.fancybox.pack.js"></script>
    <script src="../js/jquery.fancybox-thumbs.js"></script>
    <script src="../js/lib/wow.min.js"></script>
		<script src="../js/progres.js"></script>
    <!-- <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBqnmzNAzHojSwaOiHXbpTETnKMQgnsos&callback=initMap">
    </script> -->
	<!-- <script src="../js/scripts.js"> -->
  <script>
       new ScrollMagic.Scene({triggerElement: ".trigger-0"})
      .setClassToggle(".header", "zipped").addTo(controller);
      var scene = new ScrollMagic.Scene({triggerElement: ".trigger-7", duration: 700})
      .setTween(".fifteenth .title", {transform: "translateX(-20%)"}).addTo(controller);

	</script>
</body>
</html>

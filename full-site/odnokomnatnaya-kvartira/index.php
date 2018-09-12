<?php include_once('../includes/utm.php');
include('../db.php');
$check = mysql_query("SELECT * FROM kvartity where character_code RLIKE '^1'" ,$db);
$myrow = mysql_fetch_array ($check);
?>

<!DOCTYPE html>
<html lang="uk">
<head>
	
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/odnokomnatnaya-kvartira/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/odnokomnatnaya-kvartira/" />
    <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/odnokomnatnaya-kvartira/" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ 1 кімнатні квартири в ЖК Чикаго 》Купити однокімнатну квартиру в CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="【Однокімнатні квартири в CHICAGO Central House в самому центрі Києва】 Продаж 1-кімнатних квартир бізнес класу в житловому комплексі Чикаго Централ Хаус. Ціна кв. метра... ✅ 【ЖК CHICAGO Central House】 Адреса розташування: вул. Володимира Антоновича, 44... ✅ 【CHICAGO】 Встигніть купити квартиру мрії!">
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
  <link rel="stylesheet" href="../css/progress.css">
	<link rel="stylesheet" href="../css/news.css">
	<link rel="stylesheet" href="../css/select.css">
  <script type="text/javascript" src="../js/lib/greensock/TweenMax.min.js"></script>
  <script src="../js/lib/scrollmagic/ScrollMagic.min.js"></script>
  <script type="text/javascript" src="../js/lib/scrollmagic/plugins/animation.gsap.js"></script>
  <script src="../js/lib/plugins/debug.addIndicators.min.js"></script>
  
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php'); ?>
	<style>
		.header-nav {
  		margin: 40px 5px 0;
		}
	</style>
			<meta property="og:title" content="≡ 1 кімнатні квартири в ЖК Чикаго 》Купити однокімнатну квартиру в CHICAGO Central House" />
		<meta property="og:description" content="【Однокімнатні квартири в CHICAGO Central House в самому центрі Києва】 Продаж 1-кімнатних квартир бізнес класу в житловому комплексі Чикаго Централ Хаус. Ціна кв. метра... ✅ 【ЖК CHICAGO Central House】 Адреса розташування: вул. Володимира Антоновича, 44... ✅ 【CHICAGO】 Встигніть купити квартиру мрії!" />
		<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_body.php'); ?>
    <script>
        var controller = new ScrollMagic.Controller();
    </script>

	<?php /*Google Tag Manager*/ include_once('../includes/header_ua.php'); ?>

	<section class="fifteenth">
		<span class="trigger-7"></span>
        <h1 class="title">Однокімнатні квартири в <br>ЖК CHICAGO Central House</h1>
        <i class="line"></i>
  </section>

  <section class="third light section_select">

    <div class="wrapper">
			<span class="trigger-0"></span>

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
				    <!-- <tr data-href="http://google.com" data-img="/img/prog8.jpg">
				       <td>2</td>      <td>1</td>       <td>23,5
				         <div class="box-img">
				           <img src="" alt="">
				         </div>

				       </td></tr>

				     <tr data-href="http://google.com" data-img="/img/prog9.jpg">
				       <td>2</td>      <td>1</td>       <td>23,5
				         <div class="box-img">
				           <img src="" alt="">
				         </div>
				       </td></tr> -->
				 </tbody>



				  </table>

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
<?php include('../includes/form_main_ua.php'); ?>


	<?php include('../includes/form_callback.php'); ?>

<?php include('../includes/footer_ua.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="/js/scripts.js"></script>
    <script src="../js/lib/snap.svg-min.js"></script>
    <script src="../js/lib/slider.js"></script>
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

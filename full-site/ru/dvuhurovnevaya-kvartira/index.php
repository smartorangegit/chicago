<?php
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
	<title>Купить двухуровневую квартиру в ЖК CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="2-уровневые квартиры с свободной планировкой в жилом комплексе CHICAGO Central House">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/normalize.css" />
  <link rel="stylesheet" href="../../css/animate.css">
  <link rel="stylesheet" href="../../css/slider-style.css">
  <link rel="stylesheet" href="../../css/jquery.fancybox.css">
  <link rel="stylesheet" href="../../css/jquery.fancybox-thumbs.css">
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/select.css">
  <script type="text/javascript" src="../../js/lib/greensock/TweenMax.min.js"></script>
  <script src="../../js/lib/scrollmagic/ScrollMagic.min.js"></script>
  <script type="text/javascript" src="../../js/lib/scrollmagic/plugins/animation.gsap.js"></script>
  <script src="../../js/lib/plugins/debug.addIndicators.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
    <script>
        var controller = new ScrollMagic.Controller();
    </script>

	<?php /*Google Tag Manager*/ include_once('../../includes/header_ru.php'); ?>

	<section class="fifteenth">
		<span class="trigger-7"></span>
        <h1 class="title">Двухуровневые квартиры в <br>ЖК CHICAGO Central House</h1>
  </section>
  <section class="third light section_select">

    <div class="wrapper">
			<span class="trigger-0"></span>
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
			<div id="content" class="select_table">
				<table>
				   <thead>
				   <tr>
				    <th class="content_subname">этаж</th>
				    <th class="content_subname">комнат</th>
				    <th class="content_subname">общая площадь</th>
				   </tr>
				 </thead>
				 <tbody>
<?php
       	do {
			printf ( "<tr data-href='/ru/appart/?type=%s' data-img='../../img/choice/app/%s'>
				       <td>%s</td>      <td>%s</td>       <td>%s
				         <div class='box-img'>
				           <img src='' alt=''>
				         </div>

				     </td></tr>", $myrow['character_code'], $myrow['imgPlan1'], $myrow['floor'], $myrow['rooms'], $myrow['square']);
					 	}
				while ($myrow = mysql_fetch_array ($check));
?>
				 </tbody>
			  	</table>
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
	<?php include('../../includes/form_callback.php'); ?>

<?php include('../../includes/footer_ru.php'); ?>
	<script src="/js/scripts.js"></script>
    <script src="../../js/lib/snap.svg-min.js"></script>
    <script src="../../js/lib/slider.js"></script>
    <script src="../../js/jquery.fancybox.pack.js"></script>
    <script src="../../js/jquery.fancybox-thumbs.js"></script>
    <script src="../../js/lib/wow.min.js"></script>
		<script src="../../js/progres.js"></script>
  	<!-- <script src="../../js/scripts.js"> -->
</body>
</html>

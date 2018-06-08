<?php
include('../../db.php');
$check = mysql_query("SELECT * FROM kvartity where character_code RLIKE '^1'" ,$db);
$myrow = mysql_fetch_array ($check);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/odnokomnatnaya-kvartira/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/odnokomnatnaya-kvartira/" />
    <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/odnokomnatnaya-kvartira/" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Купить однокомнатную квартиру в ЖК CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="1-комнатные квартиры с свободной планировкой в жилом комплексе CHICAGO Central House">
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
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
    <script>
        var controller = new ScrollMagic.Controller();
    </script>

	<?php /*Google Tag Manager*/ include_once('../../includes/header_ru.php'); ?>

	<section class="fifteenth">
		  <h1 class="title">Однокомнатные квартиры в</br> ЖК CHICAGO Central House</h1>
  </section>

  <section class="third light section_select">
    <div class="wrapper">
			<span class="trigger-0"></span>
			<div class="select-info">
				<p>
					Уже много лет подряд 1-комнатные квартиры в новостройках Киева пользуются немалым спросом. У такого жилья масса преимуществ: доступность и удобство. Если вы хотите стать обладателем уютной 1-комнатной квартиры, самое время ознакомиться с предложением от ЖК CHICAGO Central House.
				</p>
			</div>
			<div class="select_tabs">
				<ul>
          <li><a class="active" id="tab1" href="/ru/odnokomnatnaya-kvartira/">1-комнатные квартиры</a></li>
					<li><a id="tab2" href="/ru/dvuhkomnatnaya-kvartira/">2-комнатные квартиры</a></li>
					<li><a id="tab3" href="/ru/trehkomnatnaya-kvartira/">3-комнатные квартиры</a></li>
					<li><a id="tab4" href="/ru/dvuhurovnevaya-kvartira/">двухуровневые квартиры</a></li>
				</ul>
			</div>
			<div id="content" class="select_table">
				<table>
				   <thead>
				   	<tr>
				    <th class="content_subname">этаж</th>
				    <th class="content_subname">жилая площадь</th>
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

											     </td></tr>", $myrow['character_code'], $myrow['imgPlan1'], $myrow['floor'], $myrow['houseroom'], $myrow['square']);
									}
							while ($myrow = mysql_fetch_array ($check));
							?>
				 </tbody>
			  </table>
						<div class="select-info">
						<h2>Достоинства 1-комнатных квартир в ЖК CHICAGO Central House</h2>
						<p>Однокомнатные квартиры в жилом комплексе CHICAGO Central House соответствуют всем ключевым характеристикам комфортного жилья и при этом отличаются умеренными ценами. А если добавить сюда удачное расположение комплекса с точки зрения транспортной развязки и близости к ключевым объектам столицы, можно уверенно утверждать, что 1-комнатные квартиры в ЖК CHICAGO Central House &minus; это максимально рациональное предложение.</p>
						<p>1-комнантные квартиры комплекса довольно просторные. Их минимальная площадь &minus; 42 м2. К слову, покупка такой недвижимости является идеальным вариантом для одного человека или пары без детей.</p>
						<p>Большим спросом 1-комнатное жилье пользуется у молодежи: часто именно такие квартиры покупают родители своим детям-студентам. Стоит отметить, что жилье в ЖК CHICAGO Central House для студентов подходит вдвойне, так как недалеко от комплекса расположено множество престижных учебных заведений. </p>
						<p>Популярны 1-комнатные квартиры и среди частных инвесторов. Покупка недвижимости в новостройке на ранних стадиях строительства и ее дальнейшая продажа очень выгодна: во-первых, квадратные метры ежегодно дорожают, а во-вторых, можно сдавать жилье и получать от аренды неплохой доход. </p>
						<h2>Почему стоит купить однокомнатную квартиру в ЖК CHICAGO Central House</h2>
						<ul>
						 <li>Доступная цена и площадь, позволяющая жить с комфортом не только одному, но и двоим.</li>
						 <li>Свободная планировка. Вы сами решаете, каким будет ваше будущее жилье. Кроме того, мы предлагаем множество вариантов готовых планировок на любой вкус и в соответствии с предпочтениями владельца. </li>
						 <li>Экономия денег. 1-комнатную квартиру всегда легче продать. Кроме того, удачное расположение комплекса позволит найти арендатора довольно быстро. </li>
						 </ul>
						 <p>Оставьте свой контактный номер телефона, чтобы получить исчерпывающую информацию и записаться на экскурсию. Станьте на шаг ближе к мечте с ЖК CHICAGO Central House.</p>
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

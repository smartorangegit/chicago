<?php
include('../../db.php');
$check = mysql_query("SELECT * FROM kvartity where character_code RLIKE '^3'" ,$db);
$myrow = mysql_fetch_array ($check);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/trehkomnatnaya-kvartira/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/trehkomnatnaya-kvartira/" />
    <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/trehkomnatnaya-kvartira/" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Купить трехкомнатную квартиру в ЖК CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="3-комнатные квартиры с свободной планировкой в жилом комплексе CHICAGO Central House">
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
        <h1 class="title">Трехкомнатные квартиры в <br>ЖК CHICAGO Central House</h1>
  </section>

  <section class="third light section_select">
    <div class="wrapper">
			<span class="trigger-0"></span>

			<div class="select-info">
				<p>
					Покупка 3-комнатной квартиры в новостройке &minus; выбор не только очень популярного типа жилья, но и грамотная инвестиция. Многофункциональность и прочие достоинства таких квартир делают такую покупку лучшим решением для семьи.
				</p>
			</div>
			<div class="select_tabs">
				<ul>
          <li><a id="tab1" href="/ru/odnokomnatnaya-kvartira/">1-комнатные квартиры</a></li>
					<li><a id="tab2" href="/ru/dvuhkomnatnaya-kvartira/">2-комнатные квартиры</a></li>
					<li><a class="active" id="tab3" href="/ru/trehkomnatnaya-kvartira/">3-комнатные квартиры</a></li>
					<li><a id="tab4" href="/ru/dvuhurovnevaya-kvartira/">двухуровневые квартиры</a></li>
				</ul>
			</div>
			<div id="content" class="select_table">
				<table>
			   <thead>
			   	<tr>
				    <th class="content_subname">этаж</th>
				    <th class="content_subname">жилая площадьт</th>
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
				<h2>Достоинства 3-комнатных квартир в ЖК CHICAGO Central House</h2>
				<p>Если вы решили приобрести жилье, обратите внимание на 3-комнатные квартиры. Они имеют массу достоинств.</p>
				<ul>
				 <li>Вместительность. В 3-комнатной квартире жилого комплекса CHICAGO Central House комфортно разместится семья из пяти и более людей. Такое жилье станет идеальным вариантом для многодетной семейной пары. Если вы любите животных, то вашим питомцам здесь будет не скучно. </li>
				 <li>Выгодность. Прежде всего, 3-комнатная квартира не обесценивается. Даже если вы собираетесь жить сами, то в будущем, когда вы обзаведетесь семьей, вам не придется покупать более просторное жилье. Вы также можете сдавать квартиру в аренду и получать ежемесячный стабильный доход. </li>
				 <li>Многофункциональность. 3-к квартира в ЖК CHICAGO Central House &minus; находка для творческих людей, бизнесменов и фрилансеров, привыкших работать дома. Большая площадь позволяет обустроить в квартире студии, мастерские и кабинеты. </li>
				</ul>
				<h2>Почему стоит купить трехкомнатную квартиру в ЖК CHICAGO Central House</h2>
				<p>Разница в стоимости 3-комнатных и 2-комнатных квартир невелика. Именно поэтому трехкомнатная квартира в ЖК CHICAGO Central House &minus; это разумный и выгодный выбор.</p>
				<p>Трехкомнатные квартиры ЖК CHICAGO Central House имеют лоджии и террасы. Самый большой плюс &minus; свободная планировка. Только вы решаете, где разместится спальня, а где кухня с кладовой. Мы также приготовили для вас большое количество вариантов планировки жилья &minus; от стандартных до ультрасовременных.</p>
				<p>Если у вас большая семья, и вы устали тесниться под одной крышей &minus; ЖК CHICAGO Central House есть, что вам предложить. 3-комнатная квартира в новом комплексе &minus; это не предмет роскоши, а комфортное жилье, которое может стать вашим уже сегодня.</p>
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

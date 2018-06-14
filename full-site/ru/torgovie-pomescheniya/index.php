<?php include_once('../../includes/utm.php');
include('../../db.php');
$check = mysql_query("SELECT * FROM kvartity where character_code RLIKE '^1'" ,$db);
$myrow = mysql_fetch_array ($check);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/torgovie-pomescheniya/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/torgovie-pomescheniya/" />
    <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/torgovie-pomescheniya/" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ ЖК Чикаго 》Купить коммерческую недвижимость в CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="【Продажа торговых помещений в ЖК CHICAGO】Нежилая недвижимость в центре Киева в жилом комплексе Чикаго Централ Хаус. Стоимость и условия приобретения коммерческих... ✅【жилой комплекс CHICAGO Central House】 ул. Владимира Антоновича (Горького), 44.... ✅【CHICAGO】 Успейте купить квартиру мечты!">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/normalize.css" />
  <link rel="stylesheet" href="../../css/animate.css">
  <link rel="stylesheet" href="../../css/slider-style.css">
  <link rel="stylesheet" href="../../css/jquery.fancybox.css">
  <link rel="stylesheet" href="../../css/jquery.fancybox-thumbs.css">
  <link rel="stylesheet" href="/css/news.css">
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/progress.css">
	<link rel="stylesheet" href="../../css/news.css">
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

	<section class="fifteenth" id="builder">
		<span class="trigger-7"></span>
        <h1 class="title">Коммерческая недвижимость в<br> CHICAGO Central House</h1>
        <i class="line"></i>
  </section>

  <section class="third light section_select">
        <div class="lamps wrapper">
            <img src="../../img/icons/lamp.png" alt="lamp" />
						<img src="../../img/icons/lamp.png" alt="lamp" />
						<img src="../../img/icons/lamp.png" alt="lamp" />
        </div>
    <div class="wrapper">
			<span class="trigger-0"></span>

			<div class="select-info"><p>Киев - мегаполис, который активно развивается. Неизменным спросом пользуется коммерческая недвижимость, которая расположена на первых этажах новостроек. Новый жилой комплекс CHICAGO Central House в Голосеевском районе столицы служит символом новой для Украины концепции жизни, и эту ценность мы разделяем со всеми владельцами торговой недвижимости в доме.</p>
				<div class="img_all">
						<img src="/download_plans/torgovie-pomescheniya.jpg" width="100%" alt="Схема торговых помещений в CHICAGO Central House" />

				</div>
			</div>
			<div class="select_tabs">
			<!--	<ul>
          <li><a class="active" id="tab1" href="/ru/odnokomnatnaya-kvartira/">1-комнатные квартиры</a></li>
					<li><a id="tab2" href="/ru/dvuhkomnatnaya-kvartira/">2-комнатные квартиры</a></li>
					<li><a id="tab3" href="/ru/trehkomnatnaya-kvartira/">3-комнатные квартиры</a></li>
					<li><a id="tab4" href="/ru/dvuhurovnevaya-kvartira/">двухуровневые квартиры</a></li>
				</ul> -->
			</div>
			<div id="content" class="select_table">
				<table>
				   <!-- <caption>Таблица</caption> -->
				   <thead>

				   <tr>
				    <th class="content_subname">ПОМЕЩЕНИЕ №</th>
				    <th class="content_subname">количество этажей</th>
				    <th class="content_subname">общая площадь</th>
				   </tr>
				 </thead>
				 <tbody>
<?php /*


       	do {
			printf ( "<tr data-href='/ru/appart/?type=%s' data-img='../../img/choice/app/%s'>
				       <td>%s</td>      <td>%s</td>       <td>%s
				         <div class='box-img'>
				           <img src='' alt=''>
				         </div>

				     </td></tr>", $myrow['character_code'], $myrow['imgPlan1'], $myrow['floor'], $myrow['houseroom'], $myrow['square']);
		}
while ($myrow = mysql_fetch_array ($check));	*/
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
<h2>Выгодное предложение от застройщика</h2>
<p>Общая площадь коммерческих объектов CHICAGO Central House составляет более чем 4000 кв.м. </p>
<p>Приобретение такой недвижимости значительно уменьшает операционные расходы и служит лучшим путем капитализации средств. В условиях стабильного экономического роста спрос на качественные объекты недвижимости в центре города превышает предложение, что формирует постоянное возрастание их стоимости.</p>
<p>Нежилая недвижимость в CHICAGO Central House гарантирует бизнесу высокий статус и узнаваемость.</p>
<p>Приобретение коммерческой недвижимости в центральной части столицы обеспечивает бизнесу постоянный приток потребителей и динамичное развитие.
Центральная часть города, включая ее историческую ценность, менее склонна к конструктивным изменениям, что ограничивает появление новых качественных объектов и обеспечивает постоянный спрос.
</p>

<h2>Преимущества коммерческой недвижимости в ЖК CHICAGO Central House</h2>
<p>Коммерческая недвижимость в ЖК CHICAGO Central House - это:</p>
<ul>
 <li>Выгодное расположение. Здание комплекса находится на улице Антоновича с отличной транспортной доступностью. Недалеко станции метро и остановки наземного общественного транспорта. Коммерческие помещения организованы таким образом, чтобы сюда могли заходить не только жители комплекса, но и посетители центральной части города.</li>
 <li>Качество постройки. Здание комплекса построено по новейшим технологиями с соблюдение всех норм, поэтому все торговые помещения имеют хорошую звукоизоляцию, что важно для владельцев развлекательных заведений. </li>
 <li>Широкий выбор. В комплексе предлагается вариативность планирования.
Благодаря помещениям, которые учитывают специфику будущего заведения, здесь можно открыть:
</li>
</ul>
<p>-	Офис. Для помещений данного назначения предусмотрены два этажа, что составляют 2442 кв. м.</p>
<p>-	Бутик. Торговые площади представлены шестью помещениями, обеспеченными большими витринами, общей площадью почти 740 кв. м.</p>
<p>-	Ресторан. В комплексе предусмотрены два специализированных объекта с возможностью создания летней террасы, общей площадью более 1000 кв. м.
Или реализовать любую другую бизнес идею покупателя.
</p>
 <h2>Как купить нежилое помещение в ЖК CHICAGO Central House</h2>
 <p>Получить всю информацию о недвижимости комплекса вы можете в отделе продаж. Оставьте свой номер телефона на сайте и менеджеры перезвонят вам в ближайшее время.</p>
 <p>В CHICAGO Central House предусмотрен оптимальный объем коммерческой недвижимости, где местные жители смогут найти товары и услуги непосредственно на территории комплекса. Это идеальная среда не только для комфортного проживания, но и для успешного бизнеса.</p>
 </div>

				  <script type="text/javascript">
				 /*   $('tbody tr[data-href]').addClass('clickable').click( function() {
				      window.location = $(this).attr('data-href');
				    }); */

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
				<div class="other_name">читать далее</div>
				<div class="other_news_item">
					<a href="/ru/kvartira-center/">Квартира в центре</a>
					<span class="other_news_date"></span>
				</div>
				<div class="other_news_item">
					<a href="/ru/svobodnaya-planirovka/">Свободная планировка квартир</a>
					<span class="other_news_date"></span>
				</div>
				<div class="other_news_item">
					<a href="/ru/rassrochka/">Рассрочка от застройщика</a>
					<span class="other_news_date"></span>
				</div>
				<div class="other_news_item">
					<a href="/ru/parking/">Паркинг у ЖК CHICAGO Central House</a>
					<span class="other_news_date"></span>
				</div>

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
    <!-- <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBqnmzNAzHojSwaOiHXbpTETnKMQgnsos&callback=initMap">
    </script> -->
	<!-- <script src="../../js/scripts.js"> -->
  <script>
       new ScrollMagic.Scene({triggerElement: ".trigger-0"})
      .setClassToggle(".header", "zipped").addTo(controller);
      var scene = new ScrollMagic.Scene({triggerElement: ".trigger-7", duration: 700})
      .setTween(".fifteenth .title", {transform: "translateX(-20%)"}).addTo(controller);

	</script>
</body>
</html>

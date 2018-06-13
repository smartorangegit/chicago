<?php include_once('../includes/utm.php'); ?>
<!DOCTYPE html>
<html lang="uk">
<head>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php'); ?>
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/select/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/select/" />
	<link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/select/" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>ЖК Chicago Central House - квартири у центрі Києва, вулиця Антоновича (Горького)</title>
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="ЖК Chicago Concept House - житловий комплекс у центрі Києва по вулиці Антоновича (Горького), неповторна атмосфера стилю та комфорту.">
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
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_body.php'); ?>
    <script>
        var controller = new ScrollMagic.Controller();
    </script>

	<?php /*Google Tag Manager*/ include_once('../includes/header_ua.php'); ?>

	<section class="fifteenth news" id="builder">
		<span class="trigger-7"></span>
        <h2 class="title">підібрати квартиру</h2>
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

			<div class="select-info">Ми пропонуємо вільне планування житлового простору &minus; саме ви вирішуєте, як буде влаштована ваша квартира.
				 В в цьому допоможуть досвідчені архітектори, яких ми вам надамо, щоб забезпечити втілення усіх ваших бажань.
				 Наше кредо &minus; уважне ставлення до деталей. Ми приділяємо максимальну увагу опрацюванню  ергономіки проектних рішень,
				 підбору високоякісних матеріалів.
			</div>
			<div class="select_tabs">
				<ul>
					<li><a id="tab1" href="/select/odnokimnatni.php">1-кімнатні квартири</a></li>
					<li><a  id="tab2" href="/select/dvoxkimnatni.php">2-кімнатні квартири</a></li>
					<li><a id="tab3" href="/select/troxkimnatni.php">3-кімнатні квартири</a></li>
					<li><a class="active" id="tab4" href="/select/dvorivnevi.php">двухрівневі квартири</a></li>
					<!-- <li><a id="tab5" href="#">торгові приміщення</a></li> -->
				</ul>
			</div>
			<div id="content" class="select_table">
				<table>
				   <!-- <caption>Таблица</caption> -->
				   <thead>

				   <tr>
				    <th class="content_subname">поверх</th>
				    <th class="content_subname">кімнат</th>
				    <th class="content_subname">площа</th>
				   </tr>
				 </thead>
				 <tbody>
				     <tr data-href="http://google.com" data-img="/img/prog7.jpg">
				       <td>2</td>      <td>1</td>       <td>23,5
				         <div class="box-img">
				           <img src="" alt="">
				         </div>

				     </td></tr>

				     <tr data-href="http://google.com" data-img="/img/prog8.jpg">
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
				       </td></tr>
				 </tbody>



				  </table>


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

	<footer>
        <div class="wrapper">
            <span class="copy">© 2017 CHICAGO Central House</span>
						<span>Відділ маркетингу - marketing@riverside.net.ua</span>
						<span class="smarto"> Розробка сайту <a  class="logo-smart"></a></span>
						<span class="fb-foot"><a href="https://www.facebook.com/Chicago-Central-House-1836472106584585" target="_blank"><img src="../img/icons/Facebook-04.svg" alt="fb" / width="50px" height="50px"></a></span>
        </div>
  </footer>

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

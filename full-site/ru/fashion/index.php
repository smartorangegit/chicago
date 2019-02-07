<?php include_once('../../includes/utm.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
	require("../../adm/includes/conn.php");
$sql = "select * from chika_img WHERE date='2017-02-14'";
$sql2 = "select * from chika_img WHERE date='2017-02-15'";
$result = mysql_query($sql) or die ("Нет соединения с базой данных: " . mysql_error());
$result2 = mysql_query($sql2) or die ("Нет соединения с базой данных: " . mysql_error());
 ?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ ЖК Чикаго 》Ukrainian Fashion Week - партнер ЖК CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="【ЖК CHICAGO Central House】 CHICAGO Central House - это жилой комплекс для людей, которые привыкли всегда быть в центре событий. Именно поэтому мы являемся партнером Ukrainian Fashion Week">
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/fashion/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/fashion/" />
  <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/fashion/" />
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/css/full.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/select.css">
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
	<meta property="og:title" content="≡ ЖК Чикаго 》Ukrainian Fashion Week - партнер ЖК CHICAGO Central House" />
	<meta property="og:description" content="【ЖК CHICAGO Central House】 CHICAGO Central House - это жилой комплекс для людей, которые привыкли всегда быть в центре событий. Именно поэтому мы являемся партнером Ukrainian Fashion Week" />
	<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
</head>
<style media="screen">
	.third .subheader, .fifth .subheader {
	   margin-left: 0px;
	}
	.light:before {
		background: none;
	}
	span.normal.normal--2 {
		font-size: 22px;
    padding: 20px;
    display: block;
    line-height: 1.5;
	}
	.masonry {
	column-count: 7;
	column-gap: 1em;
	-webkit-column-count: 7; -moz-column-count: 7; column-count: 7;
	-webkit-column-gap: 1em; -moz-column-gap: 1em; column-gap: 1em;
}
.item {
    display: inline-block;
    background: #1D2939;
    margin: 0 0 1em;
    width: 100%;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
	}
	.masonry1 {
	column-count: 5;
	column-gap: 1em;
	-webkit-column-count: 5; -moz-column-count: 5; column-count: 5;
	-webkit-column-gap: 1em; -moz-column-gap: 1em; column-gap: 1em;
}
.item1 {
    display: inline-block;
    background: #1D2939;
    margin: 0 0 1em;
    width: 100%;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
	}

.item a, .item1 a {
	display: block;
}
.item img, .item1 img {
	width: 100%;
	display: block;
}
</style>

<body>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
	<?php /*Google Tag Manager*/ include_once('../../includes/header_ru.php'); ?>


	<section class="h1_wrapper">
        <h1>Ukrainian Fashion Week</h1>
  </section>

  <section class="third light">
    <div class="wrapper">
      <h2 class="subheader">
        <p><span>“CHICAGO Central House” как произведение искусства</span>
      </h2>
			<p>
				<span class="normal normal--2">“CHICAGO Central House” воплощает в себе новую для Украины концепцию – дом как произведение искусства. Именно поэтому мы выбрали партнерство с Ukrainian Fashion Week – чтобы обмениваться идеями с теми, кто формирует тренды и создает неповторимый стиль жизни. Люди, которые привыкли всегда находиться в центре событий  – именно для них мы создаем это жилое пространство.
В этом амбициозном концепте объединены яркая чикагская архитектура, комфорт мирового уровня, качество и все преимущества жизни в центре столицы. Ищите себя на фотографиях с события Ukrainian Fashion Week ниже!</span></p>
    </div>
  </section>

	<section class="building">
		<div class="wrapper">
			<div class="masonry">
<?
		while ($row = mysql_fetch_assoc($result))
                { $url="/adm/images/".$row['date']."/min/".$row['name'];
?>
 <div class="item">
  <a class=" fancybox grouped_elements" rel="fashion" href="<? echo'../../adm/images/'.$row['date'].'/'.$row['name'];?>">
					<? echo '<img class="b-lazy" data-src="'.$url.'"  src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" >';
					?>
						 </a>
 </div>
<?}?>
			</div>

			<div class="masonry1">
				<?
		while ($row2 = mysql_fetch_assoc($result2))
                {
?>
 <div class="item1"><a class="fancybox" rel="fashion" href="<? echo'../../adm/images/'.$row2['date'].'/'.$row2['name']?>">
 <? echo "<img src=\"../../adm/images/".$row2['date']."/min/".$row2['name']. "\" >";  ?></a></div>
<?}?>

			</div>
	</div>
	</section>

	<?php include('../../includes/form_callback_ru.php'); ?>
	<?php include('../../includes/footer_ru.php'); ?>

	<script src="/js/snapSliderFancy.js"></script>
	<script src="/js/scripts.js"></script>

<script type="text/javascript">
			$("a.fancybox").fancybox();

  </script>
</body>
</html>

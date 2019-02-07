<?php include_once('includes/utm.php'); ?>
<!DOCTYPE html>
<html lang="ua">
<head>
	<?php /*Google Tag Manager*/ include_once('includes/gtm_head.php'); ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- <meta charset="UTF-8"> -->
	<meta name="viewport" content="width=device-width">
	<title>ЖК Chicago Central House - Success</title>
	<meta name="keywords" content="Chicago, ЖК Chicago, ЖК Чикаго, житловий комплекс, Київ, центр, Антоновича, Горького, купити квартиру, новобудова, апартаменти">
	<meta name="description" content="ЖК Chicago Concept House - житловий комплекс у центрі Києва по вулиці Антоновича (Горького), неповторна атмосфера стилю та комфорту.">
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/full.css" />
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php /*меню*/ include_once('includes/header_ua.php'); ?>


	<section class="main404">
		<div class="Rez" style="display:none;">
			<div id="Lenny">
				<div id="homer"></div>
				<div id="carl" =""="">
					<a id="fiv_tx"><br>
				</div>
			</div>
			<a id="fiv_tx2"></a>
		</div>

		<div>
			<a class="fr_4">
				<?//echo $actual_link;?>
			</a>
					<br>
					<?/*<a id="fiv_tx2">404</a>*/?>
					<br>
					<a class="fr_1"><strong>Ваша заявка успішно відправлена!</strong></a><br>
					<a class="fr_2">Наш менеджер зв'яжеться з вами найближчим часом.</a><br>
					<a href="https://chicago.kiev.ua/" class="fr_3">На головну</a><br>
		</div>


		<style>
		html {
			height: 100%;
		}
		body {
			height: 100%;
			background-color: white;
		}
		section.main404 {
			height: calc(100% - 170px);
			text-align: center;
			padding-top: 80px;

		}
		.Rez{
		    padding: 55px 0px 0px 0; height: 270px;
		    width: 44%;
		    background: #e4202b;
		}
		#fiv{
		    color: white;
		    font-size: 100px;
		    padding: 0 0 0 40px;
		}
		#fiv_tx{
		    color: white;
		    font-size: 20px;
		    padding: 0 0 0 5px;
		}
		#fiv_tx2{
		    color: #e4202b;
		    font-size: 360px;

		}
		#Lenny{
		display: inline-flex;
		padding: 0 0 0 3%;
		}
		#carl{
		padding: 4px 0px 0px 30px;
		}
		.fr_1{
		    font-size: 40px;
				color: black;
		   	}
		.fr_2{
		font-size: 25px;
		color: black;
		}
		.fr_3{
		    font-size: 30px;
		    color: #e4202b;
			text-decoration: none;
		}
		.fr_4{
		font-size: 25px;
		}
		footer {
			background-color: #f1f1F1;
		}
@media only screen and (max-width:768px) {
	#fiv_tx2 {
	    font-size: 150px;
		}
		.fr_1{
		    font-size: 26px;
			}
			.fr_2 {
    font-size: 18px;
    margin: 10px;
	}
}
		</style>
	</section>
	<?php include('includes/form_callback.php'); ?>
	<?php include('includes/footer_ua.php'); ?>

	<script defer src="js/snapSliderFancy.js"></script>
	<script defer src="js/scripts.js?v=1.0"></script>


</body>
</html>

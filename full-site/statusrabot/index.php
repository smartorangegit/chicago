<?php include_once('../includes/utm.php'); ?>
<!DOCTYPE html>
<html lang="uk">
<head>
<?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php'); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/statusrabot/" />
<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/statusrabot/" />
<?php /*	<link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/statusrabot/" /> */ ?>
<title>ЖК CHICAGO Central House | Cтатус робіт</title>
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
<link rel="stylesheet" href="../css/animate.css">
<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/select.css">
<script src="../js/lib/scrollmagic/ScrollMagic.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_body.php'); ?>
    <script>
        var controller = new ScrollMagic.Controller();
    </script>
	<?php include("../includes/header_ua.php"); ?>
<section class="fifteenth light">
  <h1 class="title" >Статус робіт</h1>
</section>
<style media="screen">
	.fifteenth {
		height: auto;
		line-height: normal;
	}
	section.third_status {
		min-height: calc(100% - 390px);
	}
	.status h4{
		color: white;
    font-size: 24px;
    text-transform: uppercase;
    font-weight: bold;
    line-height: 1.5;
	  margin-bottom: 24px;
	}
	.grid__3 p{
		color: white;
    font-size: 24px;
    line-height: 1.2;
		font-weight: 200;
		margin-bottom: 10px;
    margin-top: 10px;
	}
	.status__grid {
		float: left;
		width: 400px;
	}
	.grid__1{
		width: 350px;
		height: 640px;
		margin-bottom: 74px;
		position: relative;

	}
	.grid__1:before{
		content: '';
		position: absolute;
		height: 360px;
		width: 360px;
		top: 50%;
		margin-top: -90px;
		left:50%;
		margin-left: -170px;
		background: rgba(255,255,255,1);
		background: -moz-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,0.32) 25%, rgba(246,246,246,0.1) 45%, rgba(237,237,237,0) 70%);
		background: -webkit-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,0.32) 25%, rgba(246,246,246,0.1) 45%, rgba(237,237,237,0) 70%);
		background: -o-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,0.32) 25%, rgba(246,246,246,0.1) 45%, rgba(237,237,237,0) 70%);
		background: -ms-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,0.32) 25%, rgba(246,246,246,0.1) 45%, rgba(237,237,237,0) 70%);
		background: radial-gradient(ellipse at center, rgba(255,255,255,1) 0%, rgba(246,246,246,0.32) 25%, rgba(246,246,246,0.1) 45%, rgba(237,237,237,0) 70%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed', GradientType=1 );
	}
	.grid__1 img {
		width: 340px;
		padding-top: 40px;
	}
	.grid__2{
		width: 410px;
		padding-top: 160px;
	}
	.grid__3{
		padding-top: 160px;
	}
	.status_round{
		width: 95px;
		height: 95px;
		background-color:#EF2732;
		border-radius: 100%;
		text-align: center;
		color: white;
		padding-top: 5px;
		position: absolute;
    right: -40px;
    bottom: 200px;
		z-index: 1;
	}
	.status_round span{
		font-size: 30px;
	}
	.status_round p{
		font-size: 18px;
		font-family: "HeliosCond";
		font-weight: 200;
	}
	.circle {
		position: relative;
		width: 160px;
		height: 160px;
		float: left;
		background: url(../img/pat.png);
    background-repeat: repeat;
		text-align: -webkit-center;
    /*padding-top: 10px;*/
    border-radius: 100%;
		margin: 30px 10px;
	}
	.circle span {
		position: absolute;
    top: 74px;
    left: 0;
    width: 100%;
    text-align: center;
    line-height: 40px;
    color: white;
		font-size: 24px;
}
.circle p{
	position: absolute;
	top:-44px;
	color: white;
	width: 100%;
	font-size: 24px;
	font-weight: 200;
}
.button.button-red{
	width: 390px;
	font-size: 18px;
  line-height: 50px;
  height: 50px;
  margin: 20px auto;

}
@media only screen and (max-width:768px) {
	.status__grid{
		width: 100%;
		max-width: 380px;
		float: none;
	}
	.grid__1 {
    width: 300px;
    height: auto;
}
.grid__1 img {
    width: 250px;
		display: block;
		margin: 0 auto;
}
.status_round {
  	left: 50%;
    margin-left: -47px;
    bottom: 85px;
}
.grid__2 {
    width: 100%;
    padding-top: 60px;
}
.circle {
	float: none;
  margin: 60px auto 0;
}
.circle p {
  font-size: 20px;
}
.grid__3 {
    padding-top: 60px;
}
.button.button-red {
    width: 290px;
    font-size: 10px;
    line-height: 40px;
    height: 40px;
    margin: 10px auto;
}
}
</style>
<section class="third_status">
  <div class="wrapper">
		<span class="trigger-0"></span>
		<div class="status clearfix">
			<div class="status__grid grid__1">
				<img src="/img/status.png" alt="status">
				<div class="status_round">
					<span>4</span>
					<p>поверхи</p>
					<p>побудовано</p>
				</div>
			</div>
			<div class="status__grid grid__2 clearfix">
				<div class="circle circle_0">
					<span></span>
					<p></p>
				</div>
				<div class="circle circle_1">
					<span></span>
					<p></p>
				</div>
				<div class="circle circle_2">
					<span></span>
					<p></p>
				</div>
				<div class="circle circle_3">
					<span></span>
					<p></p>
				</div>
			</div>
			<div class="status__grid grid__3">
				<!-- <h4>Облаштовуються вертикальні елементи 4-го поверху</h4> -->
				<p>Ми регулярно повідомляємо про етапи виконання робіт, публікуючи фото-звіти.</p>
				<a class="button button-red" href="/progress/">дивитися хід будівництва</a>
				<a class="button button-red" href="/progress/">веб-камера</a>
				<!-- <p>Введення в експлуатацію: &#8545; квартал 2018 року.</p> -->
			</div>
		</div>
  </div>
</section>
	<?php include('../includes/form_callback.php'); ?>

	<footer>
   	<div class="wrapper">
      <span class="copy">© 2017 CHICAGO Central House</span>
			<span>Відділ маркетингу - marketing@riverside.net.ua</span>
			<span><a href="/sitemap/" style="margin: 0 20px;"><img src="/img/home-footer.svg" alt="sitemap" width="30px" style="margin-bottom:-3px;"></a></span>
			<span class="smarto">Розробка сайту<a  class="logo-smart"></a></span>
			<span class="fb-foot"><a href="https://www.facebook.com/Chicago-Central-House-1836472106584585" target="_blank"><img src="../img/icons/Facebook-04.svg" alt="fb" / width="50px" height="50px"></a></span>
    </div>
  </footer>
    <!-- <script src="../js/lib/wow.min.js"></script> -->
		<!-- <script src="../js/progres.js"></script> -->
		<script type="text/javascript">
			new ScrollMagic.Scene({triggerElement: ".first .trigger-0"})
	        .setClassToggle(".header", "zipped").addTo(controller);
		</script>
		<script src="/js/circle-progress.js"></script>
		<script type="text/javascript">


		$('.circle_0').circleProgress({
		    value: 0.0914,
				size: 160,
				thickness: 80,
				fill:{ color: "#EF2732" },
		  }).on('circle-animation-progress', function(event, progress) {
		    $(this).find('span').html(Math.round(100 * 0.0914) + '<i>%</i>');
				$(this).find('p').html('Загально будівельні роботи');
		  });
			$('.circle_1').circleProgress({
			    value: 0.0,
					size: 160,
					thickness: 80,
					fill:{ color: "#EF2732" },
			  }).on('circle-animation-progress', function(event, progress) {
			    $(this).find('span').html(Math.round(100 * 0) + '<i>%</i>');
					$(this).find('p').html('Благоустрій');
			  });

			$('.circle_2').circleProgress({
				    value: 0.0,
						size: 160,
						thickness: 80,
						fill:{ color: "#EF2732" },
				  }).on('circle-animation-progress', function(event, progress) {
						$(this).find('span').html(Math.round(100 * 0) + '<i>%</i>');
						$(this).find('p').html('Фасад');
				  });

			$('.circle_3').circleProgress({
					    value: 0.0,
							size: 160,
							thickness: 80,
							fill:{ color: "#EF2732" },
					  }).on('circle-animation-progress', function(event, progress) {
					    $(this).find('span').html(Math.round(100 * 0) + '<i>%</i>');
							$(this).find('p').html('Мережі');
					  });
		</script>
	<!-- <script src="../js/scripts.js"> -->
</body>
</html>

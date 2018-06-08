<!DOCTYPE html>
<html lang="uk">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Хід будівництва та веб камера ЖК CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="Слідкуйте за будівництвом CHICAGO Central House разом з нами - до ваших послуг цілодобова вебкамера та фотозвіти з будівельного майданчика">
	<link rel="alternate" hreflang="ru" href="http://chicago.kiev.ua/ru/progress/" />
	<link rel="alternate" hreflang="uk" href="http://chicago.kiev.ua/progress/" />
    <link rel="alternate" hreflang="en" href="http://chicago.kiev.ua/en/progress/" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
    <script type="text/javascript" src="../js/lib/greensock/TweenMax.min.js"></script>
    <script src="../js/lib/scrollmagic/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="../js/lib/scrollmagic/plugins/animation.gsap.js"></script>
    <script src="../js/lib/plugins/debug.addIndicators.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php'); ?>
	<style>
		.image-item--18 {
			margin-top: 6px;
		}
		.image-item--19 {
			background: url('../img/18_07_2017/1.jpg');
			background-size: cover;
			margin-top: 6px;	
		}
		.image-item--20 {
			background: url('../img/24_07_2017/1.jpg');
			background-size: cover;
			margin-top: 6px;
		}
		.image-item--21 {
			background: url('../img/28_07_2017/1.jpg');
			background-size: cover;
			margin-top: 6px;
		}
		.image-item--22 {
			background: url('../img/07_08_2017/1.jpg');
			background-size: cover;
			margin-top: 236px;
		}
		.image-item--23 {
			background: url('../img/11_08_2017/1.jpg');
			background-size: cover;
			margin-top: 6px;
		}
	</style>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_body.php'); ?>
    <script>
        var controller = new ScrollMagic.Controller();
    </script>

	<?php /*Google Tag Manager*/ include_once('../includes/header_ua.php'); ?>

	<section class="fifteenth progress-grid" id="builder">
		<span class="trigger-7"></span>
        <h1 class="title" style="transform: name;">Хід будівництва</h1>
        <i class="line"></i>
  </section>

  <section class="third light">
        <div class="lamps wrapper">
            <img <?LazyLoad("/img/icons/lamp.png");?>  alt="lamp" />
						<img  <?LazyLoad("/img/icons/lamp.png");?>   alt="lamp" />
						<img <?LazyLoad("/img/icons/lamp.png");?>  alt="lamp" />
        </div>
    <div class="wrapper">
			<span class="trigger-0"></span>
      <h2 class="subheader">
        <p><span id="building_status" >Статус робіт:</span><span class="normal normal--1">Облаштовуються вертикальні елементи 6-го поверху</span></p>
        <p><span class="plan--1">Запланований термін завершення будівництва:</span><span class="normal normal--2">&Iota;&Iota; квартал 2018 року</span></p>
      </h2>

			<div class="status clearfix">
				<div id="buidling_status" class="status__grid grid__1">
					<img <?LazyLoad("/img/status.png");?>   alt="status">
					<img <?LazyLoad("/img/house_full.png");?>   alt="status" style="clip-path: inset(86% 0 0 0); -webkit-clip-path: inset(86% 0 0 0); width:98%;">
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
					<a class="button button-red" href="#foto">дивитися хід будівництва</a>
					<a class="button button-red" href="#webcam">веб-камера</a>
					<!-- <p>Введення в експлуатацію: &#8545; квартал 2018 року.</p> -->
				</div>
			</div>
			<div id="webcam" class="progres_web">
				<iframe <?LazyLoad("https://macparts.kiev.ua:8402/player.html");?> name="restreamer-player" width="100%" height="100%" scrolling="no" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="true"></iframe>    </div>
			</div>
  </section>

		<section id="foto" class="building">
			<div class="wrapper">
				<div id="building_process" class="content-item">
					<section id="progress-img" class="progress-img">
						<div class="wrapper">
							<div class="container_line">
								<div class="wrap-line">
									<div class="line"></div>
									<!--<div class="mini-line mini-line--1"></div>
									<div class="mini-line mini-line--2"></div>
									<div class="mini-line mini-line--3"></div>
									<div class="mini-line mini-line--4"></div>
									<div class="round round--1"></div>
									<div class="round round--2"></div>
									<div class="round round--3"></div>
									<div class="round round--4"></div>-->
									<div class="round round--1"></div>
								</div>
							</div>

							<div class="container-img">
							<div class="cont-img-left">
							
									<div <?LazyLoad("/img/11_08_2017/1.jpg", array('class'=>'img-item image-item--23'));?>>
										<div class="img-name"><span>Будівельні роботи</span></div>
										<div class="img-date">11 серпня 2017 року</div>
										<div class="img-info" style="line-height:23px;"><span style="line-height:23px;">Облаштування вертикальних елементів 6 поверху, цегляна кладка на рівні 3 поверху.</span></div>
											<a class="eye grouped_elements" rel="group15" href="/img/11_08_2017/1.jpg"><img  <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
											<a class="grouped_elements" rel="group15" href="/img/11_08_2017/2.jpg"></a>
											<a class="grouped_elements" rel="group15" href="/img/11_08_2017/3.jpg"></a>
											<a class="grouped_elements" rel="group15" href="/img/11_08_2017/4.jpg"></a>
											<a class="grouped_elements" rel="group15" href="/img/11_08_2017/5.jpg"></a>
											<a class="grouped_elements" rel="group15" href="/img/11_08_2017/6.jpg"></a>
											<a class="grouped_elements" rel="group15" href="/img/11_08_2017/7.jpg"></a>
											<a class="grouped_elements" rel="group15" href="/img/11_08_2017/8.jpg"></a>
											<a class="grouped_elements" rel="group15" href="/img/11_08_2017/9.jpg"></a>
											<a class="grouped_elements" rel="group15" href="/img/11_08_2017/10.jpg"></a>
											<a class="grouped_elements" rel="group15" href="/img/11_08_2017/11.jpg"></a>
											<a class="grouped_elements" rel="group15" href="/img/11_08_2017/12.jpg"></a>
									</div>

									<div <?LazyLoad("/img/28_07_2017/1.jpg", array('class'=>'img-item image-item--21'));?>>
										<div class="img-name"><span>Будівельні роботи</span></div>
										<div class="img-date">28 липня 2017 року</div>
										<div class="img-info" style="line-height:23px;"><span style="line-height:23px;">Проводятся роботи з облаштування плити перекриття та вертикальних елементів 4-го поверху. Розпочинаються роботи з облаштування плити перекриття 5-го поверху. Завершуються роботи з облаштування ліфтової шахти на 4-му поверсі.</span></div>
											<a class="eye grouped_elements" rel="group15" href="/img/28_07_2017/1.jpg"><img  <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
											<a class="grouped_elements" rel="group15" href="/img/28_07_2017/2.jpg"></a>
											<a class="grouped_elements" rel="group15" href="/img/28_07_2017/3.jpg"></a>
											<a class="grouped_elements" rel="group15" href="/img/28_07_2017/4.jpg"></a>
											<a class="grouped_elements" rel="group15" href="/img/28_07_2017/5.jpg"></a>
											<a class="grouped_elements" rel="group15" href="/img/28_07_2017/6.jpg"></a>
											<a class="grouped_elements" rel="group15" href="/img/28_07_2017/7.jpg"></a>
											<a class="grouped_elements" rel="group15" href="/img/28_07_2017/8.jpg"></a>
											<a class="grouped_elements" rel="group15" href="/img/28_07_2017/9.jpg"></a>
									</div>

									<div <?LazyLoad("/img/18_07_2017/1.jpg", array('class'=>'img-item image-item--19'));?>>
										<div class="img-name"><span>Будівельні роботи</span></div>
										<div class="img-date">18 липня 2017 року</div>
										<div class="img-info" style="line-height:23px;"><span style="line-height:23px;">Проводятся роботи з облаштування плити перекриття та вертикальних елементів 4-го поверху. Розпочинаються роботи з облаштування плити перекриття 5-го поверху. Завершуються роботи з облаштування ліфтової шахти на 4-му поверсі.</span></div>
											<a class="eye grouped_elements" rel="group13" href="/img/18_07_2017/1.jpg"><img  <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
											<a class="grouped_elements" rel="group13" href="/img/18_07_2017/2.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/18_07_2017/3.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/18_07_2017/4.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/18_07_2017/5.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/18_07_2017/6.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/18_07_2017/7.jpg"></a>
									</div>
							
									<div <?LazyLoad("/img/30_06_2017/1.jpg", array('class'=>'img-item image-item--17'));?>>
										<div class="img-name"><span>Будівельні роботи</span></div>
										<div class="img-date">30 червня 2017 року</div>
										<div class="img-info" style="line-height:23px;"><span style="line-height:23px;">Проводятся роботи з облаштування плити перекриття та вертикальних елементів 4-го поверху. Розпочинаються роботи з облаштування плити перекриття 5-го поверху. Завершуються роботи з облаштування ліфтової шахти на 4-му поверсі.</span></div>
											<a class="eye grouped_elements" rel="group13" href="/img/30_06_2017/1.jpg"><img <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
											<a class="grouped_elements" rel="group13" href="/img/30_06_2017/2.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/30_06_2017/3.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/30_06_2017/4.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/30_06_2017/5.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/30_06_2017/6.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/30_06_2017/7.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/30_06_2017/8.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/30_06_2017/9.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/30_06_2017/10.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/30_06_2017/11.jpg"></a>
									</div>
							
	

									<div <?LazyLoad("/img/09_06_2017/1.jpg", array('class'=>'img-item image-item--14'));?>>
										<div class="img-name"><span>Будівельні роботи</span></div>
										<div class="img-date">9 червня 2017 року</div>
										<div class="img-info" style="line-height:23px;"><span style="line-height:23px;">Проводятся роботи з облаштування плити перекриття та вертикальних елементів 4-го поверху. Розпочинаються роботи з облаштування плити перекриття 5-го поверху. Завершуються роботи з облаштування ліфтової шахти на 4-му поверсі.</span></div>
											<a class="eye grouped_elements" rel="group13" href="/img/09_06_2017/1.jpg"><img <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
											<a class="grouped_elements" rel="group13" href="/img/09_06_2017/2.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/09_06_2017/3.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/09_06_2017/4.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/09_06_2017/5.jpg"></a>
									</div>

								<div <?LazyLoad("/img/31052017.jpg'", array('class'=>'img-item image-item--13'));?>>
										<div class="img-name"><span>Будівельні роботи</span></div>
										<div class="img-date">30 травня 2017 року</div>
										<div class="img-info" style="line-height:23px;"><span style="line-height:23px;">Проводятся роботи з облаштування плити перекриття та вертикальних елементів 4-го поверху. Розпочинаються роботи з облаштування плити перекриття 5-го поверху. Завершуються роботи з облаштування ліфтової шахти на 4-му поверсі.</span></div>
											<a class="eye grouped_elements" rel="group13" href="/img/300517_0.jpg"><img <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
											<a class="grouped_elements" rel="group13" href="/img/300517_1.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/300517_2.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/300517_3.jpg"></a>
									</div>

                  <div <?LazyLoad("/img/20170511.jpg", array('class'=>'img-item image-item--11'));?>>
										<div class="img-name"><span>Будівельні роботи</span></div>
										<div class="img-date">11 травня 2017 року</div>
										<div class="img-info" style="line-height:23px;"><span style="line-height:23px;">Проводятся роботи з облаштування плити перекриття між 2-м та 3-м поверхами, облаштовуються вертикальні елементи третього поверху. Проводятся роботи з облаштування ліфтової шахти на третьому поверсі.</span></div>
											<a class="eye grouped_elements" rel="group11" href="/img/20170511_0.jpg"><img <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
											<a class="grouped_elements" rel="group11" href="/img/20170511_1.jpg"></a>
											<a class="grouped_elements" rel="group11" href="/img/20170511_2.jpg"></a>
											<a class="grouped_elements" rel="group11" href="/img/20170511_3.jpg"></a>
											<a class="grouped_elements" rel="group11" href="/img/20170511_1.jpg"></a>

									</div>
									 <div <?LazyLoad("/img/20170227_0.jpg", array('class'=>'img-item image-item--9'));?>>
											<div class="img-name"><span>Будівельні роботи</span></div>
											<div class="img-date">27 лютого 2017 року</div>
											<div class="img-info"><span>Облаштування монолітного каркасу та залиття другого рівня паркінгу.</span></div>
												<a class="eye grouped_elements" rel="group9" href="/img/20170227_01.jpg"><img <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
												<a class="grouped_elements" rel="group9" href="/img/20170227_02.jpg"></a>
												<a class="grouped_elements" rel="group9" href="/img/20170227_03.jpg"></a>
										</div>
                                      <div <?LazyLoad("/img/prog-img9.jpg", array('class'=>'img-item image-item--7'));?>">
											<div class="img-name"><span>Будівельні роботи</span></div>
											<div class="img-date">14 лютого 2017 року</div>
											<div class="img-info"><span>Облаштування монолітного каркасу та залиття другого рівня паркингу.</span></div>
												<a class="eye grouped_elements" rel="group7" href="/img/prog31.jpg"><img <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
												<a class="grouped_elements" rel="group7" href="/img/prog32.jpg"></a>
												<a class="grouped_elements" rel="group7" href="/img/prog33.jpg"></a>
										</div>

										<div <?LazyLoad("/img/prog-img7.jpg", array('class'=>'img-item image-item--5'));?>>
											<div class="img-name"><span>Будівельні роботи</span></div>
											<div class="img-date">31 січня 2017 року</div>
											<div class="img-info"><span>Облаштування монолітного каркасу та залиття другого рівня паркингу.</span></div>
												<a class="eye grouped_elements" rel="group5" href="/img/prog26.jpg"><img <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
												<a class="grouped_elements" rel="group5" href="/img/prog23.jpg"></a>
												<a class="grouped_elements" rel="group5" href="/img/prog24.jpg"></a>
												<a class="grouped_elements" rel="group5" href="/img/prog25.jpg"></a>
										</div>

                  <div <?LazyLoad("/img/prog-img5.jpg", array('class'=>'img-item image-item--2'));?>>
										<div class="img-name"><span>Будівельні роботи</span></div>
										<div class="img-date">5 січня 2017 року</div>
										<div class="img-info"><span>Облаштування свайного поля та армування вертикальних конструкцій цокольного поверху</span></div>
											<a class="eye grouped_elements" rel="group2" href="/img/prog14.jpg"><img <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
											<a class="grouped_elements" rel="group2" href="/img/prog15.jpg"></a>
											<a class="grouped_elements" rel="group2" href="/img/prog16.jpg"></a>
									</div>
									<div <?LazyLoad("/img/prog-img1.jpg", array('class'=>'img-item image-item--1'));?>>
										<div class="img-name"><span>Будівельні роботи</span></div>
										<div class="img-date">4 листопада 2016 року</div>
										<div class="img-info"><span>Початок робіт з облаштування свайного поля та армування вертикальних конструкцій цокольного поверху</span></div>
											<a class="eye grouped_elements" rel="group1" href="/img/prog4.jpg"><img <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
											<a class="grouped_elements" rel="group1" href="/img/prog1.jpg"></a>
											<a class="grouped_elements" rel="group1" href="/img/prog2.jpg"></a>
											<a class="grouped_elements" rel="group1" href="/img/prog3.jpg"></a>
									</div>
	

							</div>

								<div class="cont-img-right">
								
								<div <?LazyLoad("/img/07_07_2017/1.jpg", array('class'=>'img-item image-item--22'));?>>
										<div class="img-name"><span>Будівельні роботи</span></div>
										<div class="img-date">7 серпня 2017 року</div>
										<div class="img-info" style="line-height:23px;"><span style="line-height:23px;">Облаштування вертикальних елементів 6 поверху, цегляна кладка на рівні 3 поверху.</span></div>
											<a class="eye grouped_elements" rel="group14" href="/img/07_08_2017/1.jpg"><img  <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
											<a class="grouped_elements" rel="group14" href="/img/07_08_2017/2.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/07_08_2017/3.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/07_08_2017/4.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/07_08_2017/5.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/07_08_2017/6.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/07_08_2017/7.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/07_08_2017/8.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/07_08_2017/9.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/07_08_2017/10.jpg"></a>
										
								</div>

								<div <?LazyLoad("/img/24_07_2017/1.jpg", array('class'=>'img-item image-item--20'));?>>
										<div class="img-name"><span>Будівельні роботи</span></div>
										<div class="img-date">24 липня 2017 року</div>
										<div class="img-info" style="line-height:23px;"><span style="line-height:23px;">Облаштування вертикальних елементів 6 поверху, цегляна кладка на рівні 3 поверху.</span></div>
											<a class="eye grouped_elements" rel="group14" href="/img/24_07_2017/1.jpg"><img  <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
											<a class="grouped_elements" rel="group14" href="/img/24_07_2017/2.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/24_07_2017/3.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/24_07_2017/4.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/24_07_2017/5.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/24_07_2017/6.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/24_07_2017/7.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/24_07_2017/8.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/24_07_2017/9.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/24_07_2017/10.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/24_07_2017/11.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/24_07_2017/12.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/24_07_2017/13.jpg"></a>
											<a class="grouped_elements" rel="group14" href="/img/24_07_2017/14.jpg"></a>
								</div>
								
								    <div <?LazyLoad("/img/10_07_2017/1.jpg", array('class'=>'img-item image-item--18'));?>>
										<div class="img-name"><span>Будівельні роботи</span></div>
										<div class="img-date">10 липня 2017 року</div>
										<div class="img-info" style="line-height:23px;"><span style="line-height:23px;">Проводятся роботи з облаштування плити перекриття та вертикальних елементів 4-го поверху. Розпочинаються роботи з облаштування плити перекриття 5-го поверху. Завершуються роботи з облаштування ліфтової шахти на 4-му поверсі.</span></div>
											<a class="eye grouped_elements" rel="group13" href="/img/10_07_2017/1.jpg"><img <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
											<a class="grouped_elements" rel="group13" href="/img/10_07_2017/2.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/10_07_2017/3.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/10_07_2017/4.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/10_07_2017/5.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/10_07_2017/6.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/10_07_2017/7.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/10_07_2017/8.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/10_07_2017/9.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/10_07_2017/10.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/10_07_2017/11.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/10_07_2017/12.jpg"></a>
									</div>
								
									<div <?LazyLoad("/img/23_06_2017/1.jpg", array('class'=>'img-item image-item--16'));?>>
										<div class="img-name"><span>Будівельні роботи</span></div>
										<div class="img-date">23 червня 2017 року</div>
										<div class="img-info" style="line-height:23px;"><span style="line-height:23px;">Проводятся роботи з облаштування плити перекриття та вертикальних елементів 4-го поверху. Розпочинаються роботи з облаштування плити перекриття 5-го поверху. Завершуються роботи з облаштування ліфтової шахти на 4-му поверсі.</span></div>
											<a class="eye grouped_elements" rel="group13" href="/img/23_06_2017/1.jpg"><img <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
											<a class="grouped_elements" rel="group13" href="/img/23_06_2017/2.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/23_06_2017/3.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/23_06_2017/4.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/23_06_2017/5.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/23_06_2017/6.jpg"></a>
									</div>
								
								    <div <?LazyLoad("/img/19_06_2017/1.jpg", array('class'=>'img-item image-item--15'));?>>
										<div class="img-name"><span>Будівельні роботи</span></div>
										<div class="img-date">19 червня 2017 року</div>
										<div class="img-info" style="line-height:23px;"><span style="line-height:23px;">Проводятся роботи з облаштування плити перекриття та вертикальних елементів 4-го поверху. Розпочинаються роботи з облаштування плити перекриття 5-го поверху. Завершуються роботи з облаштування ліфтової шахти на 4-му поверсі.</span></div>
											<a class="eye grouped_elements" rel="group13" href="/img/19_06_2017/1.jpg"><img <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
											<a class="grouped_elements" rel="group13" href="/img/19_06_2017/2.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/19_06_2017/3.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/19_06_2017/4.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/19_06_2017/5.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/19_06_2017/6.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/19_06_2017/7.jpg"></a>
											<a class="grouped_elements" rel="group13" href="/img/19_06_2017/8.jpg"></a>
									</div>
									
									<div  <?LazyLoad("/img/19_05_2017/IMG_20170516_200226.jpg", array('class'=>'img-item image-item--12'));?>>
											<div class="img-name"><span>Будівельні роботи</span></div>
											<div class="img-date">19 травня 2017 року</div>
											<div class="img-info" style="line-height:23px;"><span style="line-height:23px;">Проводятся роботи з облаштування плити перекриття між 2-м та 3-м поверхами, облаштовуються вертикальні елементи третього поверху. Проводятся роботи з облаштування ліфтової шахти на третьому поверсі.</span></div>
												<a class="eye grouped_elements" rel="group11" href="/img/19_05_2017/IMG_20170516_200226.jpg"><img <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
												<a class="grouped_elements" rel="group11" href="/img/19_05_2017/IMG_20170516_200308.jpg"></a>
												<a class="grouped_elements" rel="group11" href="/img/19_05_2017/IMG_20170516_200336.jpg"></a>
												<a class="grouped_elements" rel="group11" href="/img/19_05_2017/IMG_20170516_200522_HHT.jpg"></a>
									</div>

                  <div  <?LazyLoad("/img/20170307_0.JPEG", array('class'=>'img-item image-item--10'));?>>
										<div class="img-name"><span>Будівельні роботи</span></div>
										<div class="img-date">7 березня 2017 року</div>
										<div class="img-info"><span>Облаштування монолітного каркасу та залиття другого рівня паркингу.</span></div>
											<a class="eye grouped_elements" rel="group10" href="/img/20170307_01.JPG"><img <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
											<a class="grouped_elements" rel="group10" href="/img/20170307_02.JPG"></a>
											<a class="grouped_elements" rel="group10" href="/img/20170307_03.JPG"></a>
									</div>
									<div  <?LazyLoad("/img/prog-img10.jpg", array('class'=>'img-item image-item--8'));?>>
										<div class="img-name"><span>Будівельні роботи</span></div>
										<div class="img-date">20 лютого 2017 року</div>
										<div class="img-info"><span>Облаштування свайного поля та армування вертикальних конструкцій цокольного поверху</span></div>
										<a class="eye grouped_elements" rel="group8" href="/img/prog34.jpg"><img <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
										<a class="grouped_elements" rel="group8" href="/img/prog35.jpg"></a>
										<a class="grouped_elements" rel="group8" href="/img/prog36.jpg"></a>
										<a class="grouped_elements" rel="group8" href="/img/prog37.jpg"></a>
									</div>
									<div  <?LazyLoad("/img/prog-img8.jpg", array('class'=>'img-item image-item--6'));?>>
										<div class="img-name"><span>Будівельні роботи</span></div>
										<div class="img-date">07 лютого 2017 року</div>
										<div class="img-info"><span>Початок робіт з облаштування свайного поля та армування вертикальних конструкцій цокольного поверху</span></div>
										<a class="eye grouped_elements" rel="group6" href="/img/prog27.jpg"><img <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
										<a class="grouped_elements" rel="group6" href="/img/prog28.jpg"></a>
										<a class="grouped_elements" rel="group6" href="/img/prog29.jpg"></a>
										<a class="grouped_elements" rel="group6" href="/img/prog30.jpg"></a>
									</div>
									<div  <?LazyLoad("/img/prog-img6.jpg", array('class'=>'img-item image-item--4'));?>>
										<div class="img-name"><span>Будівельні роботи</span></div>
										<div class="img-date">23 січня 2017 року</div>
										<div class="img-info"><span>Початок робіт з облаштування свайного поля та армування вертикальних конструкцій цокольного поверху</span></div>
										<a class="eye grouped_elements" rel="group4" href="/img/prog17.jpg"><img <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
										<a class="grouped_elements" rel="group4" href="/img/prog18.jpg"></a>
										<a class="grouped_elements" rel="group4" href="/img/prog19.jpg"></a>
										<a class="grouped_elements" rel="group4" href="/img/prog20.jpg"></a>
										<a class="grouped_elements" rel="group4" href="/img/prog21.jpg"></a>
									</div>  

	               	<div  <?LazyLoad("/img/prog-img4.jpg", array('class'=>'img-item image-item--3'));?>>
										<div class="img-name"><span>Будівельні роботи</span></div>
										<div class="img-date">15 грудня 2016 року</div>
										<div class="img-info"><span>Облаштування свайного поля та армування вертикальних конструкцій цокольного поверху</span></div>
											<a class="eye grouped_elements" rel="group3" href="/img/prog9.jpg"><img <?LazyLoad("/img/prog-eye.png");?>  alt="eye"/></a>
											<a class="grouped_elements" rel="group3" href="/img/prog10.jpg"></a>
											<a class="grouped_elements" rel="group3" href="/img/prog11.jpg"></a>
											<a class="grouped_elements" rel="group3" href="/img/prog12.jpg"></a>
											<a class="grouped_elements" rel="group3" href="/img/prog13.jpg"></a>
									</div>
									
	
				
								</div>
							</div>
						</div>
					</section>
				</div>
	</div>

		<div id="overlay"></div>
	</section>

	<?php include('../includes/form_callback.php'); ?>

	<footer>
         <div class="wrapper">
            <span class="copy">© 2017 CHICAGO Central House</span>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Відділ маркетингу - marketing@riverside.net.ua</span>
			<span><a href="/sitemap/" style="margin: 0 20px;"><img <?LazyLoad("/img/home-footer.svg");?> alt="sitemap" width="30px" style="margin-bottom:-3px;"
				></a></span>
						<span class="smarto">
                Розробка сайту
                  <a  <?LazyLoad("/img/logo-smart.png", $option=array('class'=>'logo-smart'));?>></a>
            </span>
						<span class="fb-foot"><a href="https://www.facebook.com/Chicago-Central-House-1836472106584585" target="_blank"><img src="../img/icons/Facebook-04.svg" alt="fb" / width="50px" height="50px"></a></span>
        </div>
  </footer>

    <script src="../js/lib/snap.svg-min.js"></script>
    <script src="../js/lib/slider.js"></script>
    <script src="../js/jquery.fancybox.pack.js"></script>
    <script src="../js/jquery.fancybox-thumbs.js"></script>
    <script src="../js/lib/wow.min.js"></script>
		<script src="../js/progres.js"></script>
		<script src="../js/circle-progress.js"></script>
    <!-- <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBqnmzNAzHojSwaOiHXbpTETnKMQgnsos&callback=initMap">
    </script> -->
	<script src="../js/scripts.js"></script>
	<script type="text/javascript">
       new ScrollMagic.Scene({triggerElement: ".trigger-0"})
      .setClassToggle(".header", "zipped").addTo(controller);
      var scene = new ScrollMagic.Scene({triggerElement: ".trigger-7", duration: 700})
      .setTween(".fifteenth .title", {transform: "translateX(-20%)"}).addTo(controller);
      var scene = new ScrollMagic.Scene({triggerElement: ".trigger-7", duration: 300})
      .setTween(".fifteenth i.line", {transform: "translateX(0)"}).addTo(controller);
			var scene = new ScrollMagic.Scene({triggerElement: ".lamps", duration: 300})
      .setTween(".lamps img", {opacity: "1"}).addTo(controller);

			$(document).ready(function() {


	$("a.grouped_elements").fancybox();
});




$('.circle_0').circleProgress({
		value: 0.14,
		size: 160,
		thickness: 80,
		fill:{ color: "#EF2732" },
	}).on('circle-animation-progress', function(event, progress) {
		$(this).find('span').html(Math.round(100 * 0.14) + '<i>%</i>');
		$(this).find('p').html('Загально будівельні роботи');
	});
	$('.circle_1').circleProgress({
			value: 0.05,
			size: 160,
			thickness: 80,
			fill:{ color: "#EF2732" },
		}).on('circle-animation-progress', function(event, progress) {
			$(this).find('span').html(Math.round(100 * 0.05) + '<i>%</i>');
			$(this).find('p').html('Благоустрій');
		});

	$('.circle_2').circleProgress({
				value: 0.0015,
				size: 160,
				thickness: 80,
				fill:{ color: "#EF2732" },
			}).on('circle-animation-progress', function(event, progress) {
				$(this).find('span').html(Math.round(100 * 0.0015) + '<i>%</i>');
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
</body>
</html>

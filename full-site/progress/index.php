<?php include_once('../includes/utm.php'); ?>
<!DOCTYPE html>
<html lang="uk">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ ЖК Чикаго 》Хід будівництва і вебкамера CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="【Хід будівництва, вебкамери в CHICAGO Central House】 Слідкуйте за будівництвом ЖК Чикаго Централ Хаус разом з нами - до ваших послуг цілодобова вебкамера і фотозвіти з будівельного майданчика. Запланована дата здачі в експлуатацію, статус робіт, таймлайн..... ✅ 【житловий комплекс CHICAGO】 вул. Володимира Антоновича (Горького), 44">
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/progress/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/progress/" />
    <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/progress/" />
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
  <link rel="stylesheet" href="../css/progress.css?v=2">
    <script type="text/javascript" src="../js/lib/greensock/TweenMax.min.js"></script>
    <script src="../js/lib/scrollmagic/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="../js/lib/scrollmagic/plugins/animation.gsap.js"></script>
    <script src="../js/lib/plugins/debug.addIndicators.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php'); ?>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_body.php'); ?>
    <script>
        var controller = new ScrollMagic.Controller();
    </script>

	<?php /*Google Tag Manager*/ include_once('../includes/header_ua.php'); ?>
    <?include ("../admin/bd.php");?>

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
        <p><span id="building_status" >Статус робіт:</span><span class="normal normal--1">Кладка: тривають роботи на 15-19 поверхах, завершені 12-14 поверхи. Моноліт: перекриття 23-24 поверхів. Триває встановлення ригельної системи фасаду над КУБом. Встановлення вікон по периметру до 15 поверху. Влаштування НВФ бежевого керамограніту зі сторони вул. Жилянська. Внутрішні мережі ОВ, ВК: стояки 14 поверх, горизонтальна розводка – 10 поверх. Внутрішні мережі ЕО: стояки 14 поверх. Стяжка – закінчення 9 поверху.</span></p>
        <p><span class="plan--1">Запланований термін завершення будівництва:</span><span class="normal normal--2">III - ΙV квартал 2018 року</span></p>
      </h2>

			<div class="status clearfix">
				<div id="buidling_status" class="status__grid grid__1">
					<img <?LazyLoad("/img/status.png");?>   alt="status">
					<img <?LazyLoad("/img/house_full.png");?>   alt="status" style="clip-path: inset(52% 0 0 0); -webkit-clip-path: inset(36% 0 0 0); width:98%;">
					<div class="status_round">
						<span>23</span>
						<p>поверхів</p>
						<p>побудовано</p>
					</div>
				</div>
				<div class="status__grid grid__2 clearfix">
					<span class="tooltip tooltip-effect-2"><span class="tooltip-item">
						<div class="circle circle_0"><span></span><p></p>
					</div></span><span class="tooltip-content clearfix">
                            <span class="tooltip-text" id="spTextPers1">Роботи до відм. 0,000 - 100%
                                <br>Каркас -36.04%
                                <br>Цегляна кладка - 9.79%
                                <br>Внутрішнє опорядження - 0%
                            </span></span>
                    </span>

					<div class="circle circle_1"><span></span><p></p></div>

					<span class="tooltip tooltip-effect-2"><span class="tooltip-item">
						<div class="circle circle_2"><span></span><p></p>
					</div></span><span class="tooltip-content clearfix">
                            <span class="tooltip-text" id="spTextPers3">Вікна - 0%<br>Фасад - 2.5%</span>
                        </span>
                    </span>

					<span class="tooltip tooltip-effect-2"><span class="tooltip-item">
						<div class="circle circle_3"><span></span><p></p>
					</div></span><span class="tooltip-content clearfix">
                            <span class="tooltip-text" id="spTextPers4">Внутрішні - 0%
                                <br>Зовнішні - 0%</span>
                        </span>
                    </span>





					<!-- <div class="circle circle_0">
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
					</div> -->
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

									<div class="round round--1"></div>
								</div>
							</div>

							<div class="container-img">

							<div class="cont-img-left">

                                <?
                                $zir=1;
                                $selr = $DB->query("SELECT * FROM `hod_stroy` WHERE (`id` mod 2 != 0)OR(`id`=1) ORDER BY `date` DESC  ");
                                while ($myrowr = mysqli_fetch_array($selr)) {
                                    $piecesr = explode("*/*", $myrowr['ar_imgs']);
                                    //echo "tyt-".count($piecesr);
                                    //print_r($piecesr);
                                    if(count($piecesr)>1) {
                                        $piecesr[1];
                                        $kol_lanr = 0;

                                        $dtr = $myrowr['date'];
                                        $godr = explode("-", $dtr);
                                        //russian_date($dt);
                                        $tmr = $myrowr['time'];
                                        $timer = $dater = explode(":", $tmr);
                                        $cutTime = $timer[0] . ':' . $timer[1];
											
                                        ?>
                                        <div <? LazyLoad($myrowr['path'] . '/' . $piecesr[0], array('class' => 'img-item image-item--' . $myrowr['id'])); ?>>
                                            <div class="img-name"><span><?/*= $myrowr['hod_name_ua']; */?></span></div>
                                            <div class="img-date"><? russian_date($dtr); ?> року</div>
                                            <div class="img-info" style="line-height:23px;"><span
                                                        style="line-height:23px;">
                                                <?= $myrowr['hod_full_ua']; ?>
                                            </span></div>
                                            <a class="eye grouped_elements" rel="group<?= $myrowr['id']; ?>"
                                               href="<?= $myrowr['path'] . '/' . $piecesr[0]; ?>">
                                                <img <? LazyLoad("/img/prog-eye.png"); ?> alt="eye"/>
                                            </a>
                                            <? $ccr = count($piecesr);
                                            for ($nr = 1; $nr < $ccr; $nr++) { ?>
                                                <a class="grouped_elements" rel="group<?= $myrowr['id']; ?>"
                                                   href="<?= $myrowr['path'] . '/' . $piecesr[$nr]; ?>"></a>
                                                <?
                                            }
                                            ?>

                                        </div>
                                        <?
										$zir++;
										
                                    }
                                }?>

							</div>

								<div class="cont-img-right">
                                    <?
                                    $zi=1;
                                    $sel = $DB->query("SELECT * FROM `hod_stroy` WHERE `id` mod 2 = 0 ORDER BY `date` DESC  ");
                                    while ($myrow = mysqli_fetch_array($sel)) {
                                        $pieces = explode("*/*", $myrow['ar_imgs']);
                                        if(count($pieces)>1) {
                                            $pieces[1];
                                            $kol_lan = 0;

                                            $dt = $myrow['date'];
                                            $god = explode("-", $dt);
                                            //russian_date($dt);
                                            $tm = $myrow['time'];
                                            $time = $date = explode(":", $tm);
                                            $cutTime = $time[0] . ':' . $time[1];

                                            ?>
                                            <div <? LazyLoad($myrow['path'] . '/' . $pieces[0], array('class' => 'img-item image-item--' . $myrow['id'])); ?>>
                                                <div class="img-name"><span><?/*= $myrow['hod_name_ua']; */?></span></div>
                                                <div class="img-date"><? russian_date($dt); ?> року</div>
                                                <div class="img-info" style="line-height:23px;"><span
                                                            style="line-height:23px;">
                                                <?= $myrow['hod_full_ua']; ?>
                                            </span></div>
                                                <a class="eye grouped_elements" rel="group<?= $myrow['id']; ?>"
                                                   href="<?= $myrow['path'] . '/' . $pieces[0]; ?>">
                                                    <img <? LazyLoad("/img/prog-eye.png"); ?> alt="eye"/>
                                                </a>
                                                <? $cc = count($pieces);
                                                for ($n = 1; $n < $cc; $n++) { ?>
                                                    <a class="grouped_elements" rel="group<?= $myrow['id']; ?>"
                                                       href="<?= $myrow['path'] . '/' . $pieces[$n]; ?>"></a>
                                                    <?
                                                }
                                                ?>

                                            </div>
                                            <?
                                            $zi++;
                                        }
                                    }
                                    function russian_date($dt){
                                        $date=explode("-",$dt);
                                        switch ($date[1]){
                                            case 1: $m='січня'; break;
                                            case 2: $m='лютого'; break;
                                            case 3: $m='березня'; break;
                                            case 4: $m='квітня'; break;
                                            case 5: $m='травня'; break;
                                            case 6: $m='червня'; break;
                                            case 7: $m='липня'; break;
                                            case 8: $m='серпня'; break;
                                            case 9: $m='вересня'; break;
                                            case 10: $m='жовтня'; break;
                                            case 11: $m='листопада'; break;
                                            case 12: $m='грудня'; break;
                                        }
                                        echo $date[2].'&nbsp;'.$m.'&nbsp;'.$date[0];
                                    }?>

								</div>
							</div>

					</section>
				</div>
	</div>

		<div id="overlay"></div>
	</section>

<?php include('../includes/form_callback.php'); ?>

<?php include('../includes/footer_ua.php'); ?>

	<style media="screen">
	.tooltip {
		display: inline-block;
		position: relative;
		z-index: 999;
	}
	.tooltip-item {
		cursor: pointer;
		display: inline-block;
		font-weight: 700;
		padding: 0 10px;
	}
	.tooltip-item::after {
		content: '';
		position: absolute;
		width: 100%;
		height: 20px;
		bottom: 100%;
		left: 50%;
		pointer-events: none;
		-webkit-transform: translateX(-50%);
		transform: translateX(-50%);
	}

	.tooltip:hover .tooltip-item::after {
		pointer-events: auto;
	}

	/* Tooltip */

	.tooltip-content {
		position: absolute;
		z-index: 9999;
		width: 180px;
		left: 50%;
		margin: 0 0 20px -90px;
		bottom: 80%;
		text-align: left;
		font-size: 18px;
		line-height: 1.4;
		box-shadow: -5px -5px 15px rgba(48,54,61,0.2);
		background: #ef2732;
		box-sizing: border-box;
		padding: 0 8px;
		opacity: 0;
		cursor: default;
		pointer-events: none;
	}

	.tooltip-effect-2 .tooltip-content {
		-webkit-transform-origin: 50% calc(100% + 10px);
		transform-origin: 50% calc(100% + 10px);
		-webkit-transform: perspective(1000px) rotate3d(1,0,0,45deg);
		transform: perspective(1000px) rotate3d(1,0,0,45deg);
		-webkit-transition: opacity 0.4s, -webkit-transform 0.4s;
		transition: opacity 0.4s, transform 0.4s;
	}

	.tooltip:hover .tooltip-content {
		pointer-events: auto;
		opacity: 1;
		-webkit-transform: translate3d(0,0,0) rotate3d(0,0,0,0);
		transform: translate3d(0,0,0) rotate3d(0,0,0,0);
	}

	.tooltip.tooltip-effect-2:hover .tooltip-content {
		-webkit-transform: perspective(1000px) rotate3d(1,0,0,0deg);
		transform: perspective(1000px) rotate3d(1,0,0,0deg);
	}

	.tooltip-content::after {
		content: '';
		top: 100%;
		left: 50%;
		border: solid transparent;
		height: 0;
		width: 0;
		position: absolute;
		pointer-events: none;
		border-color: transparent;
		border-top-color: #ef2732;
		border-width: 10px;
		margin-left: -10px;
	}

	/* Tooltip content*/

	.tooltip-text {
		font-size: 0.68em;
		line-height: 1.35;
		display: block;
		padding: 1.31em 1.21em 1.21em 0;
		color: #fff;
	}
	.image-item--56 {
 margin-top: 6px;
}
.image-item--58 {
margin-top: 160px;	
}
	</style>

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
    <?$perstSelect = $DB->query("SELECT * FROM `pers`");
    while ($rowPers= mysqli_fetch_array($perstSelect)) {
        $v1 = $rowPers['persent_1'];
        $v2 = $rowPers['persent_2'];
        $v3 = $rowPers['persent_3'];
        $v4 = $rowPers['persent_4'];

        $tV[] = $rowPers['perOpis_1'];
        $tV[] = $rowPers['perOpis_2'];
        $tV[] = $rowPers['perOpis_3'];
        $tV[] = $rowPers['perOpis_4'];

        $tV1 = explode("/",$tV[0]);
        $tV3 = explode("/",$tV[2]);
        $tV4 = explode("/",$tV[3]);
        ?>
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
                //Загально будівельні всплывайка
                var stp1_1 = 'Роботи до відм. 0,000 - ';
                var stp1_2 = 'Каркас - ';
                var stp1_3 = 'Цегляна кладка - ';
                var stp1_4 = 'Внутрішнє опорядження - ';
                $('#spTextPers1').html(stp1_1+<?=$tV1[0];?>+'%<br>'+
                stp1_2+<?=$tV1[1];?>+'%<br>'+
                stp1_3+<?=$tV1[2];?>+'%<br>');
                //stp1_4+<?=$tV1[3];?>+'%');

                //Фасад всплывайка
                var stp3_1 = 'Вікна - ';
                var stp3_2 = 'Фасад - ';
                $('#spTextPers3').html(stp3_1+<?=$tV3[0];?>+'%<br>'+
                stp3_2+<?=$tV3[1];?>+'%');

                //Мережі всплывайка
                var stp4_1 = 'Внутрішні - ';
                var stp4_2 = 'Зовнішні - ';
                $('#spTextPers4').html(stp4_1+<?=$tV4[0];?>+'%<br>'+
                stp4_2+<?=$tV4[1];?>+'%');

	$("a.grouped_elements").fancybox();
});


       var v1 = 0.01*(<?=$v1;?>);
       var v2 = 0.01*(<?=$v2;?>);
       var v3 = 0.01*(<?=$v3;?>);
       var v4 = 0.01*(<?=$v4;?>);
       /*
       console.log(v1);
       console.log(v2);
       console.log(v3);
       console.log(v4);
       */
//Загально будівельні
$('.circle_0').circleProgress({
	value: v1,
	size: 160,
	thickness: 80,
	fill:{ color: "#EF2732" },
	}).on('circle-animation-progress', function(event, progress) {
		$(this).find('span').html(<?=$v1;?> + '<i>%</i>');
		$(this).find('p').html('Загально будівельні роботи');
	});

//Благоустрій
$('.circle_1').circleProgress({
	value: v2,
	size: 160,
	thickness: 80,
	fill:{ color: "#EF2732" },
	}).on('circle-animation-progress', function(event, progress) {
		$(this).find('span').html(<?=$v2;?> + '<i>%</i>');
		$(this).find('p').html('Благоустрій');
	});

//Фасад
$('.circle_2').circleProgress({
	value: v3,
	size: 160,
	thickness: 80,
	fill:{ color: "#EF2732" },
	}).on('circle-animation-progress', function(event, progress) {
		$(this).find('span').html(<?=$v3;?> + '<i>%</i>');
		$(this).find('p').html('Фасад');
	});

//Мережі
$('.circle_3').circleProgress({
	value: v4,
	size: 160,
	thickness: 80,
	fill:{ color: "#EF2732" },
	}).on('circle-animation-progress', function(event, progress) {
		$(this).find('span').html(<?=$v4;?> + '<i>%</i>');
		$(this).find('p').html('Мережі');
	});

	</script>
<?}?>
</body>
</html>

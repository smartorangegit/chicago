
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>chikago</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/set1.css" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slider-style.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/jquery.fancybox-thumbs.css">
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="js/lib/greensock/TweenMax.min.js"></script>
    <script src="js/lib/scrollmagic/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="js/lib/scrollmagic/plugins/animation.gsap.js"></script>
    <script src="js/lib/plugins/debug.addIndicators.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<!--Timer-->
<link rel="stylesheet" href="flipclock.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="flipclock.js"></script>

    <!-- MAPS -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { width: 100%; height: 700px; }
      #firstHeading{
            display: block;
    font-size: 2em;
    -webkit-margin-before: 0.67em;
    -webkit-margin-after: 0.67em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    font-weight: bold;
      }
      #siteNotice{
        /*width: 200px;
    background: #fc0;
    padding: 5px;
    border: solid 3px black;
    loat: left;
    position: relative;
    top: 40px;
    left: -70px; */

      }
      #map {
                width: 100%;
                height: 650px;
            }
            #contentt  {
              background: black;
            }
            b{
              /*color: white;*/
            }
            #contentt h3 {

              color: white;
              text-align: center;
            }
            #contentt h2{
              color: white;
              text-align: center;
            }
            #contentt img{
              padding:  5px 5px 0px 5px;
            }
            div.gm-style>div>div>div>div>div{
            /*background: black;*/
            }
            div.gm-style div.gm-style-iw{
              overflow: visible;
            }
            div.gm-style-iw>div>div{
              overflow: visible !important;
            }
            div.gm-style-iw>div{
              overflow: visible !important;
            }
            #styles, #add-tab {
        float: left;
        margin-top: 10px;
        width: 400px;
      }
      #styles label,
      #add-tab label {
        display: inline-block;
        width: 130px;
      }
      .phoney {
        /*background: -webkit-gradient(linear,left top,left bottom,color-stop(0, rgb(112,112,112)),color-stop(0.51, rgb(94,94,94)),color-stop(0.52, rgb(57,57,57)));
        background: -moz-linear-gradient(center top,rgb(112,112,112) 0%,rgb(94,94,94) 51%,rgb(57,57,57) 52%);*/
        background: black;
      }
      h2 {
        text-align: center;
      }
      h3{
        text-align: center;
      }

      .phoneytext {
      	margin: 0 0 0 30px;
        text-shadow: 0 -1px 0 #000;
        color: #fff;
        font-family: Helvetica Neue, Helvetica, arial;
        font-size: 16px;
        line-height: 25px;
        padding: 4px 45px 4px 15px;
        font-weight: bold;
        /*background: url(../images/arrow.png) 95% 50% no-repeat;*/
      }
      .phoneytab {
        text-shadow: 0 -1px 0 #000;
        color: #fff;
        font-family: Helvetica Neue, Helvetica, arial;
        font-size: 18px;
        background: rgb(112,112,112) !important;

      }
      div.gm-style>div>div>div>div>div{
       height: auto !important;
       width: auto !important;
      }
      p.met_1{
        color: green;
      }
    </style>
    <script>
      var script = '<script src="infobubble';
      if (document.location.search.indexOf('compiled') !== -1) {
        script += '-compiled';
      }
      script += '.js"><' + '/script>';
      document.write(script);
    </script>

</head>
<body>
<?
include "base.html"; ?>
        var controller = new ScrollMagic.Controller();
    </script>
	<header class="header">
		<div class="wrapper">
			<a href="" class="logo">
				<img src="img/logo.png" alt="logo">
			</a>
			<ul class="header-nav">
                <li class="mobile"></li>
				<li><a href="#" class="separate">Будинок</a></li>
				<li><a href="#place">Розташування</a></li>
				<li><a href="#aparments">Квартири</a></li>
				<li><a href="#builder">Забудовник</a></li>
				<li><a href="#" class="separate">Будівництво</a></li>
				<li><a href="#contact">Зв'язок</a></li>
			</ul>
			<div class="header-callback">
				Телефон гарячої лінії <em>(093) 32-45-117</em>
				<a href="#callback" class="button callback">зворотній зв`язок</a>
			</div>
		</div>
	</header>
	<section class="first">
        <div class="block1">

</div>
        <div class="block2">

</div>
        <span class="trigger-0"></span>
		<h2 class="wow bounceInLeft">
			Зустрічайте новий житловий комплекс
			<em>від творців “NEW YORK concept house”!</em>
		</h2>
		<span class="subheader wow bounceInRight"><span>Американська</span><span>якість.</span></span><br>
		<span class="subheader wow bounceInRight"><span>Українська </span><span>ціна.</span></span>
        <div class="cd-radial-slider-wrapper slider wow fadeInDown">
            <ul class="cd-radial-slider" data-radius1="60" data-radius2="1364" data-centerx1="110" data-centerx2="1290">
                <li class="visible">
                    <div class="svg-wrapper">
                        <svg viewBox="0 0 1400 800">
                            <title>Animated SVG</title>
                            <defs>
                                <clipPath id="cd-image-1">
                                    <circle id="cd-circle-1" cx="110" cy="400" r="1364"/>
                                </clipPath>
                            </defs>

                            <image height='800px' width="1400px" clip-path="url(#cd-image-1)" xlink:href="img/bg-slider-1.png"></image>
                        </svg>
                    </div> <!-- .svg-wrapper -->

                    <div class="cd-radial-slider-content">
                        <div class="wrapper">
                            <div>
                                <h4>
                                    Місія розробників “CHICAGO central house” – запропонувати киянам американську якість життя за розумною ціною.
                                </h4>
                                <p>
                                    Це стало можливим завдяки застосуванню американського досвіду проектування та будівництва, яким володіють ідеологи проекту, що довгий час проживали у США, а тепер повернулись на історичну Батьківщину – в Україну.
                                </p>
                                <p>
                                    CHICAGO central house” – це амбіційний концепт, який поєднує в собі яскраву чиказьку архітектуру, комфорт світового рівня та всі переваги життя у центрі столиці. Це дійсно унікальний простір для життя, призначений для тих, хто прагне особливого. Для тих, хто хоче завжди перебувати у центрі – у центрі міста, у центрі ділового та культурного життя.
                                </p>
                            </div>
                        </div>
                    </div> <!-- .cd-radial-slider-content -->
                </li>

                <li class="next-slide">
                    <div class="svg-wrapper">
                        <svg viewBox="0 0 1400 800">
                            <title>Animated SVG</title>
                            <defs>
                                <clipPath id="cd-image-2">
                                    <circle id="cd-circle-2" cx="1290" cy="400" r="60"/>
                                </clipPath>
                            </defs>

                            <image height='800px' width="1400px" clip-path="url(#cd-image-2)" xlink:href="img/bg-slider-2.png"></image>
                        </svg>
                    </div> <!-- .svg-wrapper -->

                    <div class="cd-radial-slider-content">
                        <div class="wrapper">
                            <div>
                                 <h4>
                                    Місія розробників “CHICAGO central house” – запропонувати киянам американську якість життя за розумною ціною.
                                </h4>
                                <p>
                                    CHICAGO central house” – це амбіційний концепт, який поєднує в собі яскраву чиказьку архітектуру, комфорт світового рівня та всі переваги життя у центрі столиці. Це дійсно унікальний простір для життя, призначений для тих, хто прагне особливого. Для тих, хто хоче завжди перебувати у центрі – у центрі міста, у центрі ділового та культурного життя.
                                </p>
                            </div>
                        </div>
                    </div> <!-- .cd-radial-slider-content -->
                </li>

                <li>
                    <div class="svg-wrapper">
                        <svg viewBox="0 0 1400 800">
                            <title>Animated SVG</title>
                            <defs>
                                <clipPath id="cd-image-3">
                                    <circle id="cd-circle-3" cx="110" cy="400" r="60"/>
                                </clipPath>
                            </defs>

                            <image height='800px' width="1400px" clip-path="url(#cd-image-3)" xlink:href="img/bg-slider-1.png"></image>
                        </svg>
                    </div> <!-- .svg-wrapper -->

                    <div class="cd-radial-slider-content">
                        <div class="wrapper">
                            <div>
                                 <h4>
                                    Місія розробників “CHICAGO central house” – запропонувати киянам за розумною ціною.
                                </h4>
                                <p>
                                    Це стало можливим завдяки застосуванню американського досвіду проектування та будівництва, яким володіють ідеологи проекту, що довгий час проживали у США, а тепер повернулись на історичну Батьківщину – в Україну.
                                </p>
                                <p>
                                    CHICAGO central house” – це амбіційний концепт, який поєднує в собі яскраву чиказьку архітектуру, комфорт світового рівня та всі переваги життя у центрі столиці. Це дійсно унікальний простір для життя, призначений для тих, хто прагне особливого.
                                </p>
                            </div>
                        </div>
                    </div> <!-- .cd-radial-slider-content -->
                </li>

                <li class="prev-slide">
                    <div class="svg-wrapper">
                        <svg viewBox="0 0 1400 800">
                            <title>Animated SVG</title>
                            <defs>
                                <clipPath id="cd-image-4">
                                    <circle id="cd-circle-4" cx="110" cy="400" r="60"/>
                                </clipPath>
                            </defs>

                            <image height='800px' width="1400px" clip-path="url(#cd-image-4)" xlink:href="img/bg-slider-2.png"></image>
                        </svg>
                    </div> <!-- .svg-wrapper -->

                    <div class="cd-radial-slider-content">
                        <div class="wrapper">
                            <div>
                                 <h4>
                                    Місія американську якість життя за розумною ціною.
                                </h4>
                                <p>
                                    Це стало можливим завдяки застосуванню американського досвіду проектування та будівництва, яким володіють ідеологи проекту, що довгий час проживали у США, а тепер повернулись на історичну Батьківщину – в Україну.
                                </p>
                            </div>
                        </div>
                    </div> <!-- .cd-radial-slider-content -->
                </li>
            </ul> <!-- .cd-radial-slider -->

            <ul class="cd-radial-slider-navigation">
                <li><a href="#0" class="next">Next</a></li>
                <li><a href="#0" class="prev">Prev</a></li>
            </ul> <!-- .cd-radial-slider-navigation -->

            <div class="cd-round-mask">
                <svg viewBox="0 0 1400 800">
                    <defs>
                        <mask id="cd-left-mask" height='800px' width="1400px" x="0" y="0" maskUnits="userSpaceOnUse">
                            <path fill="white" d="M0,0v800h1400V0H0z M110,460c-33.137,0-60-26.863-60-60s26.863-60,60-60s60,26.863,60,60S143.137,460,110,460z"/>
                        </mask>

                        <mask id="cd-right-mask" height='800px' width="1400px" x="0" y="0" maskUnits="userSpaceOnUse">
                            <path fill="white" d="M0,0v800h1400V0H0z M1290,460c-33.137,0-60-26.863-60-60s26.863-60,60-60s60,26.863,60,60S1323.137,460,1290,460z"/>
                        </mask>
                    </defs>
                </svg>
            </div>
        </div> <!-- .cd-radial-slider-wrapper -->
	</section>
	<section class="second" id="place">
        <span class="trigger-1"></span>
		<h2 class="title">Розташування</h2>
        <i class="line"></i>
	</section>
	<section class="third light">
        <span class="lamps wrapper">
            <i></i>
            <i></i>
            <i></i>
        </span>
		<div class="wrapper">
			<h2 class="subheader wow fadeInDown">
				<span>“CHICAGO central house”</span> <span>розташований у самому</span>
                <span>центрі Києва, за адресою:</span><span> вулиця Антоновича, 44</span>
			</h2>
			<p class="more wow fadeInUp">
				Це той самий щасливий випадок, коли життя у історичному центрі столиці поєднується із енергетикою ділових кварталів. Тепер не треба витрачати час, щоб дістатися до роботи, якщо ваш офіс розташований у київському сіті. Також за декілька хвилин пішки ви дістанетесь до головної вулиці міста, а усе, що потрібно для комфортного насиченого життя, знаходиться поряд із вашим будинком.
			</p>
		</div>
	</section>
    <section class="sixth">
        <div id="map">
          <script type="text/javascript">

var map;


function initMap() {



  var SS = {lat: 50.439572,lng: 30.515734};/*{lat:50.406493, lng: 30.519515};*/
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: SS,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,
    styles: [{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","elementType":"all","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"transit","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]}]
  });

 var marker = new google.maps.Marker({
    //icon: 'http://brist.webiart.com.ua/mt-content/uploads/2016/10/logo3.png',
    position: new google.maps.LatLng(50.433464, 30.513194),
    map: map,
    title: 'Мы',
    //animation: google.maps.Animation.BOUNCE,
    //label: 'B',
    //fillColor : 'black'
    icon: 'target.png'

  });

  /*marker.addListener('click', function() {
    infowindow.open(map, marker);

  });*/
  var infoBubble, infoBubble2, infoBubble3, infoBubble4, infoBubble5, infoBubble6, infoBubble7, infoBubble8, infoBubble9,
  infoBubble10, infoBubble11, infoBubble12, infoBubble13, infoBubble15, infoBubble16, infoBubble17, infoBubble18,
  infoBubble19, infoBubble20, infoBubble21, infoBubble22, infoBubble23, infoBubble24, infoBubble25;
  var marker = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.433464, 30.513194),
          //draggable: true,
          icon: 'target.png'

        });
          infoBubble = new InfoBubble({
          map: map,
          content: '<div class="phoneytext"><img  src="http://new.uafm.com.ua/chikago/img/logo.png" alt="альтернативный текст">'+
          '<hr>'+
          '<h2>вулиця Антоновича, 44</h2>'+
          '</div>',
          position: new google.maps.LatLng(50.433464, 30.513194),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2,

        });

        infoBubble.open();
        marker.addListener('click', function() {
        infoBubble.open(map, marker);
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();

        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble.close();
        });

        /*Школа №112*/
var marker2 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.431071, 30.514989),
          //draggable: true,
          icon: 'library.png'

        });
          infoBubble2 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">Школа №112'+
          '<hr>'+
          '<p>вулиця Велика Васильківська</p>'+
          '</div>',
          position: new google.maps.LatLng(50.431071, 30.514989),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker2.addListener('click', function() {
        infoBubble2.open(map, marker2);
        infoBubble.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();

        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble2.close();
        });
/*Медицинский центр*/
var marker3 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.431409, 30.517968),
          //draggable: true,
          icon: 'heart.png'

        });
          infoBubble3 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">Медицинский центр'+
          '<hr>'+
          '<p>вулиця Фізкультури, 1</p>'+
          '</div>',
          position: new google.maps.LatLng(50.431409, 30.517968),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker3.addListener('click', function() {
        infoBubble3.open(map, marker3);
        infoBubble.close();
        infoBubble2.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();

        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble3.close();
        });
/*Мед центр2*/
var marker4 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.437365, 30.520353),
          //draggable: true,
          icon: 'heart.png'

        });
          infoBubble4 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">Медицинский центр'+
          '<hr>'+
          '<p>вулиця Еспланадна, 20</p>'+
          '</div>',
          position: new google.maps.LatLng(50.437365, 30.520353),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker4.addListener('click', function() {
        infoBubble4.open(map, marker4);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();

        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble4.close();
        });
  /*Київський природничо-науковий ліцей № 145*/
var marker5 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.434420, 30.517509),
          //draggable: true,
          icon: 'library.png'

        });
          infoBubble5 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">Київський природничо-науковий ліцей № 145'+
          '<hr>'+
          '<p>вул. Шота Руставелі, 46</p>'+
          '</div>',
          position: new google.maps.LatLng(50.434420, 30.517509),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker5.addListener('click', function() {
        infoBubble5.open(map, marker5);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();

        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble5.close();
        });
/*сш 78*/
var marker6 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.435104, 30.518878),
          //draggable: true,
          icon: 'library.png'

        });
          infoBubble6 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">Школа №78'+
          '<hr>'+
          '<p>вул. Шота Руставелі, 47</p>'+
          '</div>',
          position: new google.maps.LatLng(50.435104, 30.518878),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker6.addListener('click', function() {
        infoBubble6.open(map, marker6);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();

        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble6.close();
        });
/*аптека */
var marker7 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.432204, 30.513893),
         // draggable: true,
          icon: 'heart.png'

        });
          infoBubble7 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">Аптека'+
          '<hr>'+
          '<p>вулиця Антоновича, 47</p>'+
          '</div>',
          position: new google.maps.LatLng(50.432204, 30.513893),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker7.addListener('click', function() {
        infoBubble7.open(map, marker7);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();

        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble7.close();
        });
  /*Фитнес*/
  var marker8 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.432455, 30.509307),
         // draggable: true,
          icon: 'dumbell.png'

        });
          infoBubble8 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">Фітнес-клуб "Гран-Прі"'+
          '<hr>'+
          '<p>вулиця Володимирська, 101</p>'+
          '</div>',
          position: new google.maps.LatLng(50.432455, 30.509307),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker8.addListener('click', function() {
        infoBubble8.open(map, marker8);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();
        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble8.close();
        });
  /*ДНЗ*/
  var marker9 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.435227, 30.510311),
         // draggable: true,
          icon: 'library.png'

        });
          infoBubble9 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">Днз №129 З Яслами (З 2-Х Років)'+
          '<hr>'+
          '<p>вулиця Володимирська, 89А</p>'+
          '</div>',
          position: new google.maps.LatLng(50.435227, 30.510311),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker9.addListener('click', function() {
        infoBubble9.open(map, marker9);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();
        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble9.close();
        });
  /*кон суд*/
  var marker10 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.434428, 30.514355),
         // draggable: true,
          icon: 'department.png'

        });
          infoBubble10 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">Конституційний суд України'+
          '<hr>'+
          '<p>вулиця Жилянська, 14</p>'+
          '</div>',
          position: new google.maps.LatLng(50.434428, 30.514355),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker10.addListener('click', function() {
        infoBubble10.open(map, marker10);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();
        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble10.close();
        });
  /*мед центр3*/
  var marker11 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.434619, 30.514938),
          //draggable: true,
          icon: 'heart.png'

        });
          infoBubble11 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">Мед. центр Інго'+
          '<hr>'+
          '<p>вулиця Велика Васильківська, 54 Б</p>'+
          '</div>',
          position: new google.maps.LatLng(50.434619, 30.514938),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker11.addListener('click', function() {
        infoBubble11.open(map, marker11);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();
        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble11.close();
        });
  /*лікарня*/
  var marker12 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.437462, 30.512832),
          //draggable: true,
          icon: 'heart.png'

        });
          infoBubble12 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">Медичний відділ Представництва МОМ в Україні'+
          '<hr>'+
          '<p>вулиця Антоновича, 16-В</p>'+
          '</div>',
          position: new google.maps.LatLng(50.437462, 30.512832),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker12.addListener('click', function() {
        infoBubble12.open(map, marker12);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();
        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble12.close();
        });
  /*днз*/
  var marker13 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.437188, 30.508384),
         // draggable: true,
          icon: 'library.png'

        });
          infoBubble13 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">ДНЗ №61 Первоцвіт'+
          '<hr>'+
          '<p>вулиця Володимирська, 76</p>'+
          '</div>',
          position: new google.maps.LatLng(50.437188, 30.508384),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker13.addListener('click', function() {
        infoBubble13.open(map, marker13);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();
        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble13.close();
        });
  /*университет Шевченка*/
  var marker14 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.441975, 30.510380),
          //draggable: true,
          icon: 'library.png'

        });
          infoBubble14 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">Киевский національний університет ім. Тараса Шевченка'+
          '<hr>'+
          '<p>вулиця Володимирська, 60</p>'+
          '</div>',
          position: new google.maps.LatLng(50.441975, 30.510380),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker14.addListener('click', function() {
        infoBubble14.open(map, marker14);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();
        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble14.close();
        });
  /*пинчку арт центр*/
  var marker15 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.441902, 30.520968),
         // draggable: true,
          icon: 'department.png'

        });
          infoBubble15 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">PinchukArtCentre'+
          '<hr>'+
          '<p>вул. Велика Васильківська/Басейна, 1/3-2</p>'+
          '</div>',
          position: new google.maps.LatLng(50.441902, 30.520968),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker15.addListener('click', function() {
        infoBubble15.open(map, marker15);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();
        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble15.close();
        });

  /*Бесарабский рынок*/
  var marker16 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.442371, 30.521550),
         // draggable: true,
          icon: 'shop.png'

        });
          infoBubble16 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">Бессарабский ринок'+
          '<hr>'+
          '<p>Бессарабська площа, 2</p>'+
          '</div>',
          position: new google.maps.LatLng(50.442371, 30.521550),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker16.addListener('click', function() {
        infoBubble16.open(map, marker16);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();
        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble16.close();
        });

  /*национальный академический драматическийтеатр им. Ивана Франко*/
  var marker17 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.445601, 30.528247),
         // draggable: true,
          icon: 'department.png'

        });
          infoBubble17 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">Національний академічний драматичний театр ім. Івана Франко'+
          '<hr>'+
          '<p>площа Івана Франка, 3</p>'+
          '</div>',
          position: new google.maps.LatLng(50.445601, 30.528247),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker17.addListener('click', function() {
        infoBubble17.open(map, marker17);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();
        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble17.close();

        });

  /*м Универ*/
   var marker18 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.442966, 30.503661),
         // draggable: true,
          icon: 'subway.png'

        });
          infoBubble18 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">'+
          '<hr>'+
          '(м) Університет'+
          '<hr>'+
          '</div>',
          position: new google.maps.LatLng(50.442966, 30.503661),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker18.addListener('click', function() {
        infoBubble18.open(map, marker18);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();
        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble18.close();
        });
  /*золоті ворота 1*/
  var marker19 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.448402, 30.513525),
         // draggable: true,
          icon: 'subway.png'

        });
          infoBubble19 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">'+
          '<hr>'+
          '(м) Золоті Ворота'+
          '<hr>'+
          '</div>',
          position: new google.maps.LatLng(50.448402, 30.513525),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker19.addListener('click', function() {
        infoBubble19.open(map, marker19);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();
        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble19.close();
        });

  /*м золоті ворота 2*/
  var marker20 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.446126, 30.515450),
          //draggable: true,
          icon: 'subway.png'

        });
          infoBubble20 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">'+
          '<hr>'+
          '(м) Золоті Ворота'+
          '<hr>'+
          '</div>',
          position: new google.maps.LatLng(50.446126, 30.515450),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker20.addListener('click', function() {
        infoBubble20.open(map, marker20);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();
        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble20.close();
        });
  /*м Театральна*/
  var marker21 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.444842, 30.516068),
          //draggable: true,
          icon: 'subway.png'

        });
          infoBubble21 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">'+
          '<hr>'+
          '(м) Театральна'+
          '<hr>'+
          '</div>',
          position: new google.maps.LatLng(50.444842, 30.516068),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker21.addListener('click', function() {
        infoBubble21.open(map, marker21);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();
        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble21.close();
        });
  /*м Хрешатик*/
  var marker22 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.447062, 30.525360),
          //draggable: true,
          icon: 'subway.png'

        });
          infoBubble22 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">'+
          '<hr>'+
          '(м) Хрещатик'+
          '<hr>'+
          '</div>',
          position: new google.maps.LatLng(50.447062, 30.525360),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker22.addListener('click', function() {
        infoBubble22.open(map, marker22);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble23.close();
        infoBubble24.close();
        infoBubble25.close();
        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble22.close();
        });
  /*площа Льва толстого*/
  var marker23 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.440088, 30.518023),
          //draggable: true,
          icon: 'subway.png'

        });
          infoBubble23 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">'+
          '<hr>'+
          '(м) Льва Толстого'+
          '<hr>'+
          '</div>',
          position: new google.maps.LatLng(50.440088, 30.518023),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker23.addListener('click', function() {
        infoBubble23.open(map, marker23);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble24.close();
        infoBubble25.close();
        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble23.close();
        });
  /*м Палац Спорту*/
  var marker24 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.439652, 30.519533),
          //draggable: true,
          icon: 'subway.png'

        });
          infoBubble24 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">'+
          '<hr>'+
          '(м) Палац Спорту'+
          '<hr>'+
          '</div>',
          position: new google.maps.LatLng(550.439652, 30.519533),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker24.addListener('click', function() {
        infoBubble24.open(map, marker24);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble25.close();
        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble24.close();
        });
  /*м Олімпійська*/
  var marker25 = new google.maps.Marker({
          map: map,
          position: new google.maps.LatLng(50.432249, 30.516762),
          //draggable: true,
          icon: 'subway.png'

        });
          infoBubble25 = new InfoBubble({
          map: map,
          content: '<div class="phoneytext">'+
          '<hr>'+
          '<p>(м) Олімпійська</p>'+ //<p class="met_1">(м)</p> <p>Олімпійська</p>
          '<hr>'+
          '</div>',
          position: new google.maps.LatLng(50.432249, 30.516762),
          shadowStyle: 1,
          padding: 0,
          backgroundColor: 'rgb(0, 0, 0)',
          borderRadius: 4,
          arrowSize: 10,
          borderWidth: 1,
          borderColor: '#2c2c2c',
          disableAutoPan: true,
          hideCloseButton: true,
          arrowPosition: 30,
          backgroundClassName: 'phoney',
          arrowStyle: 2
        });

        //infoBubble2.open();
        marker25.addListener('click', function() {
        infoBubble25.open(map, marker25);
        infoBubble.close();
        infoBubble2.close();
        infoBubble3.close();
        infoBubble4.close();
        infoBubble5.close();
        infoBubble6.close();
        infoBubble7.close();
        infoBubble8.close();
        infoBubble9.close();
        infoBubble10.close();
        infoBubble11.close();
        infoBubble12.close();
        infoBubble13.close();
        infoBubble14.close();
        infoBubble15.close();
        infoBubble16.close();
        infoBubble17.close();
        infoBubble18.close();
        infoBubble19.close();
        infoBubble20.close();
        infoBubble21.close();
        infoBubble22.close();
        infoBubble23.close();
        infoBubble24.close();
        });

        google.maps.event.addListener(map, "click", function () {
          infoBubble25.close();
        });

/*end of markers*/
  }


    </script>
        </div>
    </section>
	<a href="/panorama.html">
		<section class="seventh">
				<span class="trigger-2"></span>
       			 <h2 class="title">Панорама</h2>
       			 <i class="line"></i>
    	</section>
	</a>
    <section class="fourth">
        <ul class="wrapper wow pulse">
            <li>
                <div class="clock">
                    <span class="round"></span>
                    <div class="hours-container">
                        <div class="hours"></div>
                    </div>
                    <div class="minutes-container">
                        <div class="minutes"></div>
                    </div>
                </div>
            </li>
            <li>
                1
                <span class="subheader"><span>хвилина</span></span>
                <span class="text">
                    пішки до найближчих<br> кафе та ресторанів
                </span>
            </li>
            <li>
                1
                <span class="subheader"><span>хвилина</span></span>
                <span class="text">
                    пішки до найближчих<br> торгівельних центрів
                </span>
            </li>
            <li>
                2
                <span class="subheader"><span>хвилина</span></span>
                <span class="text">
                    пішки до найближчої<br> станції метро
                </span>
            </li>
            <li>
                3
                <span class="subheader"><span>хвилини</span></span>
                <span class="text">
                    пішки до Театру оперети<br> та НСК «Олімпійський»
                </span>
            </li>
            <li>
                5
                <span class="subheader"><span>хвилин</span></span>
                <span class="text">
                    на автомобілі<br> до Хрещатику
                </span>
            </li>
            <li>
                7
                <span class="subheader"><span>хвилин</span></span>
                <span class="text">
                    пішки до<br> художніх музеїв
                </span>
            </li>
            <li>
                7
                <span class="subheader"><span>хвилин</span></span>
                <span class="text">
                    пішки до<br> парку Шевченка
                </span>
            </li>
        </ul>
    </section>
	<section class="fifth light">
        <span class="lamps wrapper">
            <i></i>
            <i></i>
            <i></i>
        </span>
		<div class="wrapper">
			<h2 class="subheader wow fadeInDown">
                <span>Щоб дістатися</span><span>найближчих кафе та</span>
                <span> ресторанів,</span>
                <span>вам навіть </span><span>не потрібно залишати</span><span>будинок,</span>
			</h2>
			<p class="more wow fadeInUp">
				адже декілька закладів будуть розташовані на перших поверхах “CHICAGO central house”. А ще ми подбали про те, щоб ви могли насолоджуватися велосипедними прогулянками центром міста – у будинку передбачена вело-паркінг та пункт прокату велосипедів.
				До найближчого парку із велосипедними доріжками ви дістанетесь на двох колесах за хвилину.
			</p>
		</div>
	</section>
    <section class="eleventh">
        <span class="trigger-5"></span>
        <h2 class="title">Цінності</h2>
        <i class="line"></i>
    </section>
    <section class="twelfth light">
        <div class="grid clearfix">
            <figure class="effect-milo wow fadeInLeft">
                <img src="img/gal-1.jpg" alt="img01"/>
                <figcaption>
                    <h2>Art</h2>
                    <p>життя як мистецтво, <em>будинок як шедевр</em></p>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <figure class="effect-milo wow fadeInDown">
                <img src="img/gal-2.jpg" alt="img02"/>
                <figcaption>
                    <h2>Bright</h2>
                    <p>життя як мистецтво, <em>будинок як шедевр</em></p>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <figure class="effect-milo wow fadeInUp">
                <img src="img/gal-3.jpg" alt="img03"/>
                <figcaption>
                    <h2>Central</h2>
                    <p>життя як мистецтво, <em>будинок як шедевр</em></p>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <figure class="effect-milo wow fadeInRight">
                <img src="img/gal-41.jpg" alt="img04"/>
                <figcaption>
                    <h2>Different</h2>
                    <p>життя як мистецтво, <em>будинок як шедевр</em></p>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
        </div>
    </section>
	<section class="ninth">
        <span class="trigger-4"></span>
        <h2 class="title">Переваги</h2>
        <i class="line"></i>
	</section>
    <section class="tenth">
        <ul class="wrapper clearfix">
            <li class="wow bounceIn">
                <img src="img/icons/advantage-1.png" alt="advantage-1">
                <span class="subheader"><span>Американський </span><span>рівень життя,</span></span>
                <span class="last">доступний тепер в Україні</span>
            </li>
            <li class="wow bounceIn">
                <img src="img/icons/advantage-2.png" alt="advantage-2">
                <span class="subheader"><span>Якісне </span><span>будівництво</span></span>
                <span class="last">від надійного забудовника</span>
            </li>
            <li class="wow bounceIn">
                <img src="img/icons/advantage-3.png" alt="advantage-3">
                <span class="subheader"><span>Дружні та </span><span>кваліфіковані</span></span>
                <span class="last">
                    спеціалісти з продажу
                </span>
            </li>
            <li class="wow bounceIn">
                <img src="img/icons/advantage-4.png" alt="advantage-4">
                <span class="subheader"><span>Центральне</span><span>розташування –</span></span>
                <span class="last">у пішій доступності від сіті та від старого міста</span>
            </li>
            <li class="wow bounceIn">
                <img src="img/icons/advantage-5.png" alt="advantage-5">
                <span class="subheader"><span>Насичена міська </span><span>інфраструктура:</span></span>
                <span class="last">магазини, кафе, ресторани, сервісні центри</span>
            </li>
            <li class="wow bounceIn">
                <img src="img/icons/advantage-6.png" alt="advantage-6">
                <span class="subheader"><span>Вільне</span><span>планування</span></span>
                <span class="last">квартир, а також послуги кваліфікованих архітекторів</span>
            </li>
            <li class="wow bounceIn">
                <img src="img/icons/advantage-7.png" alt="advantage-7">
                <span class="subheader"><span>Унікальна</span><span>архітектура</span></span>
                <span class="last">будинку, що виконана у яскравому чиказькому стилі</span>
            </li>
            <li class="wow bounceIn">
                <img src="img/icons/advantage-8.png" alt="advantage-8">
                <span class="subheader" style="margin: 0 -8px"><span>Шедеври сучасного</span><span>мистецтва</span></span>
                <span class="last">у громадському просторі будинку</span>
            </li>
            <li class="wow bounceIn">
                <img src="img/icons/advantage-9.png" alt="advantage-9">
                <span class="subheader"><span>Гармонійна</span><span>естетика</span></span>
                <span class="last">прибудинкових територій</span>
            </li>
            <li class="wow bounceIn">
                <img src="img/icons/advantage-10.png" alt="advantage-10">
                <span class="subheader"><span>Розкішна</span><span>панорама</span></span>
                <span class="last">історичного центру Києва</span>
            </li>
            <li class="wow bounceIn">
                <img src="img/icons/advantage-11.png" alt="advantage-11">
                <span class="subheader"><span>“CHICAGO</span><span>central house”  – </span></span>
                <span class="last">новий архітектурний символ столиці</span>
            </li>
            <li class="wow bounceIn">
                <img src="img/icons/advantage-12.png" alt="advantage-12">
                <span class="subheader"><span>Професійний</span><span>консьєрж-сервіс</span></span>
                <span class="last">для усіх мешканців будинку</span>
            </li>
        </ul>
    </section>
    <section class="eigth">
        <span class="lamps wrapper">
            <i></i>
            <i></i>
            <i></i>
            <i></i>
        </span>
        <span class="trigger-3"></span>
        <h2 class="title">Галерея</h2>
        <i class="line"></i>
        <div class="gallery">
            <a href="img/gallery/1.jpg" class="wow fadeInLeft" rel="gallery">
                <img src="img/gallery/1.jpg" alt="img-gallery">
            </a>
            <a href="img/gallery/2.jpg" class="wow fadeInDown" rel="gallery">
                <img src="img/gallery/2.jpg" alt="img-gallery">
            </a>
            <a href="img/gallery/3.jpg" class="wow fadeInRight" rel="gallery">
                <img src="img/gallery/3.jpg" alt="img-gallery">
            </a>
            <a href="img/gallery/4.jpg" class="wow fadeInUp" rel="gallery">
                <img src="img/gallery/4.jpg" alt="img-gallery">
            </a>
            <a href="img/gallery/5.jpg" class="wow fadeInRight" rel="gallery">
                <img src="img/gallery/5.jpg" alt="img-gallery">
            </a>
            <a href="img/gallery/6.jpg" class="wow fadeInDown" rel="gallery">
                <img src="img/gallery/6.jpg" alt="img-gallery">
            </a>
            <a href="img/gallery/7.jpg" class="wow fadeInLeft" rel="gallery">
                <img src="img/gallery/7.jpg" alt="img-gallery">
            </a>
            <a href="img/gallery/8.jpg" class="wow fadeInLeft" rel="gallery">
                <img src="img/gallery/8.jpg" alt="img-gallery">
            </a>
            <a href="img/gallery/9.jpg" class="wow fadeInUp" rel="gallery">
                <img src="img/gallery/9.jpg" alt="img-gallery">
            </a>
            <a href="img/gallery/10.jpg" class="wow fadeInRight" rel="gallery">
                <img src="img/gallery/10.jpg" alt="img-gallery">
            </a>
            <a href="img/gallery/11.jpg" class="wow fadeInLeft" rel="gallery">
                <img src="img/gallery/11.jpg" alt="img-gallery">
            </a>
        </div>
        <button class="button button-red">Більше фото</button>
    </section>
	<section class="thirteenth" id="aparments">
        <span class="trigger-6"></span>
        <h2 class="title">Квартири</h2>
        <i class="line"></i>
	</section>
	<section class="fourteenth light">
		<div class="wrapper">
            <h2 class="subheader wow fadeInDown"><span>Оберіть свою квартиру</span><span>просто зараз!</span></h2>
            <img src="img/central.jpg" alt="central" class="img-first wow fadeInRight">
            <img src="img/gallery.jpg" alt="gallery" class="img-second wow fadeInRight">
			<div class="text wow fadeInLeft">
				<p>
					Ми пропонуємо вільне планування житлового простору – саме ви вирішуєте, як буде влаштована ваша квартира.  В в цьому допоможуть досвідчені архітектори, яких ми вам надамо, щоб забезпечити втілення усіх ваших бажань.
				</p>
				<p>
					Наше кредо – уважне ставлення до деталей. Ми приділяємо максимальну увагу опрацюванню  ергономіки проектних рішень, підбору високоякісних матеріалів, конструктивним рішенням тощо.
				</p>
				<p>
					Ваша участь у проекті – найкраща нагорода для нас. Отже давайте працювати разом –  звертайтеся до наших спеціалістів з будь-яких питань, пов’язаних із вашим майбутнім житлом.
				</p>
				<button class="button button-red">Обрати квартиру</button>
				<span class="more-info">Щоб отримати додаткову інформацію, будь ласка, зв'яжіться із нами</span>
			</div>
		</div>
	</section>
	<section class="fifteenth" id="builder">
        <span class="trigger-7"></span>
        <h2 class="title">Забудовник</h2>
        <i class="line"></i>
	</section>
	<section class="sixteenth light">
		<div class="wrapper">
            <span class="subheader"><span>Забудовником ЖК “CHICAGO</span><span>central house” виступає</span><span>компанія «КДД Інжиніринг»,</span><span>замовник об’єкту – </span><span>ТОВ «Антоновича-44»</span></span>
			<div class="left-part wow fadeInLeft">
				<img src="img/icons/logo-kiev.png" alt="logo-kiev">
				<p>
					Проект реалізується у партнерстві з групою компаній
					"ХК "Київміськбуд" – надійним забудовником з відмінною репутацією, що має 60-річний досвід.
				</p>
			</div>
			<div class="right-part wow fadeInRight">
				<p>
					Будівництво ЖК “CHICAGO central house” здійснюється з отриманням усіх норм та вимог чинного законодавства України у галузі будівництва та на підставі всієї необхідної
				</p>
			</div>
			<button class="button button-red">Хід будівництва</button>
		</div>
	</section>
	<section class="seventeenth" id="contact">
        <form  id="form" class="wrapper form wow bounceInDown">
            <h2 class="title">Зворотній звязок</h2>
            <input name="name" type="text" required>
            <span class="placeholder">Ім'я:<i>*</i></span>
            <input  name="email" type="email" required>
            <span class="placeholder">Еелектронна пошта:<i>*</i></span>
            <textarea name="tex" cols="30" rows="10" required></textarea>
            <span class="placeholder">Текст повідомлення:<i>*</i></span>
			
            <button class="button button-red">Надіслати</button>
        </form>
		<!--
		<form  id="form">
			<input name="name" type="text" placeholder="Ім'я" required>
			<input name="email" type="text" placeholder="Телефон" required>
			<textarea name="tex" cols="30" rows="10" required></textarea>
            <span class="placeholder">Текст повідомлення:<i>*</i></span>
			<input type="submit" value="Iнформуйте мене" class="button">
		</form>-->
    </section>
	<script>

			$(document).ready(function () {
				 $("form").submit(function () {
				 // Получение ID формы
				 var formID = $(this).attr('id');
				 // Добавление решётки к имени ID
				 var formNm = $('#' + formID);
				 $.ajax({
				 type: "POST",
				 url: 'post.php',
				 data: formNm.serialize(),
				 success: function() {
				                   //код в этом блоке выполняется при успешной отправке сообщения
				                   alert("Ваше сообщение отпрвлено!");
				setTimeout(function() {window.location.reload();}, 500);
				            },
				 error: function (jqXHR, text, error) {
				 // Вывод текста ошибки отправки
				 $(formNm).html(error);
				 }
				 });
				 return false;
				 });
				});
			</script>
	<footer>
        <div class="wrapper">
            <span class="copy">Copyright 2017</span>
            <span class="smarto">
                Розробка сайту
                <a href="#" class="logo-smart"></a>
            </span>
        </div>
       <form  id="callback" class="form">
            <h2 class="title">Зворотній звязок</h2>
            <input name="name" type="text" required>
            <span class="placeholder">Ім'я:<i>*</i></span>
            <input name="email" type="email" required>
            <span class="placeholder">Електронна пошта:<i>*</i></span>
            <textarea name="tex" cols="30" rows="10" required></textarea>
            <span class="placeholder">Текст повідомлення:<i>*</i></span>
            <button class="button button-red">Надіслати</button>
        </form>
		<script>

			$(document).ready(function () {
				 $("callback").submit(function () {
				 // Получение ID формы
				 var formID = $(this).attr('id');
				 // Добавление решётки к имени ID
				 var formNm = $('#' + formID);
				 $.ajax({
				 type: "POST",
				 url: 'post.php',
				 data: formNm.serialize(),
				 success: function() {
				                   //код в этом блоке выполняется при успешной отправке сообщения
				                   alert("Ваше сообщение отпрвлено!");
				setTimeout(function() {window.location.reload();}, 500);
				            },
				 error: function (jqXHR, text, error) {
				 // Вывод текста ошибки отправки
				 $(formNm).html(error);
				 }
				 });
				 return false;
				 });
				});
			</script>
	</footer>
    <script src="js/lib/snap.svg-min.js"></script>
    <script src="js/lib/slider.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-thumbs.js"></script>
    <script src="js/lib/wow.min.js"></script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBqnmzNAzHojSwaOiHXbpTETnKMQgnsos&callback=initMap">
    </script>
	<script src="js/scripts.js"></script>
</body>
</html>

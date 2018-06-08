<?php
include('../../db.php');
$check = mysql_query("SELECT * FROM kvartity where character_code RLIKE '^3'" ,$db);
$myrow = mysql_fetch_array ($check);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/trehkomnatnaya-kvartira/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/trehkomnatnaya-kvartira/" />
<link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/trehkomnatnaya-kvartira/" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Purchase a three-room apartment in CHICAGO Central House Residential Estate</title>
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="Three-room apartments with open plan layout in CHICAGO Central House Residential Estate">
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
	<?php /*Google Tag Manager*/ include_once('../../includes/header_en.php'); ?>

	<section class="fifteenth">
		<span class="trigger-7"></span>
        <h1 class="title">Three-Room Apartments in <br>CHICAGO Central House Residential Estate</h1>
  </section>

  <section class="third light section_select">
    <div class="wrapper">
			<span class="trigger-0"></span>

			<div class="select-info">
				<p>
					Purchase of a three-room apartment in a newly-built apartment block is not only a choice of a very popular type of dwelling, but also a competent investment. Multi-functionality and other advantages of such apartments make this purchase the best option for the family.

				</p>
			</div>
			<div class="select_tabs">
				<ul>
					<li><a id="tab1" href="/en/odnokomnatnaya-kvartira/">One-Room Apartments</a></li>
					<li><a id="tab2" href="/en/dvuhkomnatnaya-kvartira/">Two-Room Apartments</a></li>
					<li><a class="active" id="tab3" href="/en/trehkomnatnaya-kvartira/">Three-Room Apartments</a></li>
					<li><a id="tab4" href="/en/dvuhurovnevaya-kvartira/">Duplex Apartments</a></li>
				</ul>
				</ul>
			</div>
			<div id="content" class="select_table">
				<table>
			   <thead>
			   	<tr>
						<th class="content_subname">floor</th>
				    <th class="content_subname">living space</th>
				    <th class="content_subname">total spase</th>
				   </tr>
				 </thead>
				 <tbody>
				   <?php
       			do {
							printf ( "<tr data-href='/en/appart/?type=%s' data-img='../../img/choice/app/%s'>
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
				<h2>Advantages of Three-Room Apartments in CHICAGO Central House Residential Estate</h2>
				<p>If you decided to purchase a dwelling you should pay attention to the three-room apartments. They have a lot of advantages.</p>
				<ul>
				 <li>Spaciousness. The three-room apartment of the CHICAGO Central House Residential Estate will comfortably accommodate a family of five or more people. Such a dwelling will be a perfect option for a married couple with a lot of children. If you love animals, then your pets will not be bored here.</li>
				 <li>Profitability. First of all, a three-room apartment does not fall in value. Even if you are going to live here alone, in the future, when you settle down to married life, you will not have to purchase more spacious dwelling. You can also rent an apartment and receive a monthly stable income. </li>
				 <li>Multi-functionality. A three-room apartment in the CHICAGO Central House Residential Complex is a real catch for creative people, businessmen and freelancers, got used to working at home. A large floor space allows you to equip studios, workshops and offices in the apartment. </li>
				</ul>
				<h2>Why is Three-Room Apartment in CHICAGO Central House Residential Estate worth Buying</h2>
				<p>Difference in cost between a three-room and 2-room apartment is slight. That's why a three-room apartment in the CHICAGO Central House Residential Complex is a reasonable and advantageous option.</p>
				<p>The three-room apartments in the CHICAGO Central House Residential Estate have loggias and terraces. An open plan layout is a big plus. It’s up to you to decide where the bedroom and kitchen with the pantry will be located. We also prepared for you a large number of layout options - from standard to ultra-modern ones.</p>
				<p>If you have a large family and you are tired of huddling under one roof - the CHICAGO Central House Residential Estate has something to offer you. A three-room apartment in a new residential complex is not a luxury item, but a comfortable dwelling that may become yours today.</p>
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

<?php include('../../includes/footer_en.php'); ?>
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

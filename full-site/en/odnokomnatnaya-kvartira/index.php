<?php include_once('../../includes/utm.php');
include('../../db.php');
$check = mysql_query("SELECT * FROM kvartity where character_code RLIKE '^1'" ,$db);
$myrow = mysql_fetch_array ($check);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>≡ CHICAGO Central House 》Purchase a one-room apartment in CHICAGO Central House Residential Estate</title>
	<meta name="viewport" content="width=device-width">
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="✅ 【CHICAGO Central House】 One-room apartments with open plan layout in CHICAGO Central House Residential Estate ✅ 【CHICAGO】">
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/odnokomnatnaya-kvartira/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/odnokomnatnaya-kvartira/" />
	<link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/odnokomnatnaya-kvartira/" />
	<meta name="robots" content="index, follow">
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/full.css">
	<link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/select.css">
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
	<meta property="og:title" content="≡ CHICAGO Central House 》Purchase a one-room apartment in CHICAGO Central House Residential Estate" />
	<meta property="og:description" content="✅ 【CHICAGO Central House】 One-room apartments with open plan layout in CHICAGO Central House Residential Estate ✅ 【CHICAGO】" />
	<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
	<?php /*Google Tag Manager*/ include_once('../../includes/header_en.php'); ?>

	<section class="h1_wrapper">
		  <h1>One-Room Apartments in  </br>CHICAGO Central House Residential Estate</h1>
  </section>

  <section class="light section_select">

    <div class="wrapper">
			<div class="select-info">
				<p>
				For many years one-room apartments are in high demand in Kievs new buildings. Such type of housing has many advantages: availability and convenience. If you want to become the owner of a cozy one-room apartment, it's time to get acquainted with the offer from CHICAGO Central House Residential Complex.
				</p>
			</div>
			<div class="select_tabs">
				<ul>
          <li><a class="active" id="tab1" href="/en/odnokomnatnaya-kvartira/">One-Room Apartments</a></li>
					<li><a id="tab2" href="/en/dvuhkomnatnaya-kvartira/">Two-Room Apartments</a></li>
					<li><a id="tab3" href="/en/trehkomnatnaya-kvartira/">Three-Room Apartments</a></li>
					<li><a id="tab4" href="/en/dvuhurovnevaya-kvartira/">Duplex Apartments</a></li>
				</ul>
			</div>
			<div class="select_box flex">
				<?php
				do {

				printf (	"<div class='room_item'>
						<div class='room_item_inner'>
							<div class='room_item_img'>
								<img src='/img/choice/app/%s' alt='planning'>
							</div>
							<table class='rooms_table'>
							<tbody>
							<tr>  <td>Floor</td> <td>%s</td></tr>
							<tr>  <td>Living space, m<sup>2</sup></td><td>%s</td></tr>
							<tr>  <td>Total space, m<sup>2</sup></td><td>%s</td></tr>
							</tbody></table>
							</div>
						<a class='button' href='/en/appart/?type=%s'>review planning</a>
					</div> ", $myrow['imgPlan1'], $myrow['floor'], $myrow['houseroom'], $myrow['square'], $myrow['character_code']);
				}

				while ($myrow = mysql_fetch_array ($check));
				?>

			</div>
						<div class="select-info">
						<h2>Advantages of One-Room Apartments in CHICAGO Central House Residential Estate</h2>
						<p>
							One-room apartments in the CHICAGO Central House Residential Complex meet all the key characteristics of comfortable housing and at the same time are distinguished by reasonable prices. And if you add here the successful location of the complex from the point of view of the traffic intersection and proximity to the key facilities of the capital, one can confidently state that one-room apartments in CHICAGO Central House Residential Complex is the most rational offer.
						</p>
							<p>The One-room apartments of the estate are quite spacious. Their minimum floor space is 42 square meters. By the way, purchase of such property is an excellent option for one person or for a young couple having no children.
A one-room dwelling is in great demand among young people: often such apartments are bought by parents for their children-students. It is worth mentioning that dwelling in the CHICAGO Central House Residential Complex suits the students particularly, as many prestigious educational institutions are located not far from it.
						<p>The one-room apartments are popular among private investors, as well. Purchase of the real estate in the newly-built apartment block at the early stages of construction and its further sale is very profitable: firstly, its square meters are becoming more expensive each year, and secondly, you can rent out a house and generate good profit from the rent.
								<h2>Why is One-Room Apartment in CHICAGO Central House Residential Estate worth Buying </h2>
						<ul>
						 <li>First of all, this is a multipurpose dwelling. It will suit both a single person and a couple with more than one child.</li>
						 <li>Free layout of appartments. You decide what your future housing will be like. In addition, we offer a variety of ready-made layouts for every taste and according to the owner's preferences.</li>
						 <li>Saving money. one-room apartment is always easier to sell. In addition, the successful location of the complex will allow to find a tenant quite quickly.</li>
						 </ul>
						 <p>Leave your contact phone number to get comprehensive information and book an excursion. Become one step closer to the dream with CHICAGO Central House Residential Complex.</p>
				</div>
	    </div>
	  </section>

	<?php include('../../includes/form_main_en.php'); ?>
	<?php include('../../includes/form_callback.php'); ?>
	<?php include('../../includes/footer_en.php'); ?>

	<script src="/js/snapSliderFancy.js"></script>
	<script src="/js/scripts.js"></script>

	  </body>
	</html>

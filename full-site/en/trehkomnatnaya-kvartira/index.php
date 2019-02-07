<?php include_once('../../includes/utm.php');
include('../../db.php');
$check = mysql_query("SELECT * FROM kvartity where character_code RLIKE '^3'" ,$db);
$myrow = mysql_fetch_array ($check);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ CHICAGO Central House 》Purchase a three-room apartment in CHICAGO Central House Residential Estate</title>
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/trehkomnatnaya-kvartira/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/trehkomnatnaya-kvartira/" />
<link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/trehkomnatnaya-kvartira/" />
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="✅ 【CHICAGO Central House】 Three-room apartments with open plan layout in CHICAGO Central House Residential Estate">
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/css/full.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/select.css">
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
  <meta property="og:title" content="≡ CHICAGO Central House 》Purchase a three-room apartment in CHICAGO Central House Residential Estate" />
	<meta property="og:description" content="✅ 【CHICAGO Central House】 Three-room apartments with open plan layout in CHICAGO Central House Residential Estate" />
	<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
	<?php /*Google Tag Manager*/ include_once('../../includes/header_en.php'); ?>

	<section class="h1_wrapper">
    <h1>Three-Room Apartments in <br>CHICAGO Central House Residential Estate</h1>
  </section>

  <section class="third light section_select">

    <div class="wrapper">

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
							<tr>  <td>Total area, m<sup>2</sup></td><td>%s</td></tr>
							<tr>  <td>Living area, m<sup>2</sup></td><td>%s</td></tr>
							</tbody></table>
							</div>
						<a class='button' href='/en/appart/?type=%s'>review planning </a>
					</div> ", $myrow['imgPlan1'], $myrow['floor'], $myrow['houseroom'], $myrow['square'], $myrow['character_code']);
				}

				while ($myrow = mysql_fetch_array ($check));
				?>

			</div>
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
			</div>
  </section>

  <?php include('../../includes/form_main_en.php'); ?>
	<?php include('../../includes/form_callback.php'); ?>
	<?php include('../../includes/footer_en.php'); ?>

	<script src="/js/snapSliderFancy.js"></script>
	<script src="/js/scripts.js"></script>
  </body>
</html>

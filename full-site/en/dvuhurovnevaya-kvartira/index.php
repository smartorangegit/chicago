<?php include_once('../../includes/utm.php');
include('../../db.php');
$check = mysql_query("SELECT * FROM kvartity where floor = '23-24'" ,$db);
$myrow = mysql_fetch_array ($check);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/dvuhurovnevaya-kvartira/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/dvuhurovnevaya-kvartira/" />
	<link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/dvuhurovnevaya-kvartira/" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ CHICAGO Central House 》Purchase a duplex apartment in CHICAGO Residential Estate</title>
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="✅ 【CHICAGO Central House】 Duplex apartments with open plan layout in CHICAGO Central House Residential Estate ✅ 【CHICAGO】">
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/css/full.css">
	<link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/select.css">
		<meta property="og:title" content="≡ CHICAGO Central House 》Purchase a duplex apartment in CHICAGO Residential Estate" />
		<meta property="og:description" content="✅ 【CHICAGO Central House】 Duplex apartments with open plan layout in CHICAGO Central House Residential Estate ✅ 【CHICAGO】" />
		<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
  <?php /*Google Tag Manager*/ include_once('../../includes/header_en.php'); ?>

	<section class="h1_wrapper">
    <h1>Duplex Apartments in  <br>CHICAGO Central House Residential Estate</h1>
  </section>
  <section class="light section_select">

    <div class="wrapper">
			<div class="select-info">
				<p>
					Duplex apartments in urban apartment blocks are getting more and more popular. And it's no accident: residing in a duplex apartment brings a lot of pleasure, and the owner of such dwelling places emphasis on his status and exquisite taste in such a way. On the modern market duplex apartments are offered both for the upper crust and for the business class, in particular the CHICAGO Central House Residential Complex.
					</p>
			</div>
			<div class="select_tabs">
				<ul>
					<li><a id="tab1" href="/en/odnokomnatnaya-kvartira/">One-room apartments</a></li>
					<li><a id="tab2" href="/en/dvuhkomnatnaya-kvartira/">Two-room apartments</a></li>
					<li><a id="tab3" href="/en/trehkomnatnaya-kvartira/">Three-room apartments</a></li>
					<li><a class="active" id="tab4" href="/en/dvuhurovnevaya-kvartira/">Duplex apartments</a></li>
					<!-- <li><a id="tab5" href="#">торгові приміщення</a></li> -->
				</ul>
			</div>
			<div class="select_box flex">
				<?php
				do {

				printf (	"<div class='room_item'>
						<div class='room_item_inner'>
							<div class='room_item_img'>
								<img src='/img/choice/app/%s' alt='Планировка квартиры'>
							</div>
							<table class='rooms_table'>
							<tbody>
							<tr>  <td>Floor</td> <td>%s</td></tr>
							<tr>  <td>Living space, м<sup>2</sup></td><td>%s</td></tr>
							<tr>  <td>Total space, м<sup>2</sup></td><td>%s</td></tr>
							</tbody></table>
							</div>
						<a class='button' href='/en/appart/?type=%s'>review planning</a>
					</div> ", $myrow['imgPlan1'], $myrow['floor'], $myrow['houseroom'], $myrow['square'], $myrow['character_code']);
				}

				while ($myrow = mysql_fetch_array ($check));
				?>

			</div>
						<div class="select-info">
						<h2>Advantages of Duplex Apartments in CHICAGO Central House Residential Estate</h2>
						<p>We would like to highlight the main advantages of the duplex apartments in the CHICAGO Central House Residential Estate. </p>
						<ul>
						 <li>Of course, the first and most important advantage of a duplex apartment is a large floor space. </li>
						 <li>Duplex apartments may be easily zoned, and its premises may be divided according to its functional purpose. The common space is arranged on the ground floor - a living room, a kitchen, an entrance hall; and on the second floor there are rest-rooms, bedrooms and bathrooms. A distinctive feature of the duplex apartments of the CHICAGO Central House Residential Complex is an open plan layout, enabling you to divide the space into zones and premises as you see fit. </li>
						 <li>Such a real estate is characterized by a large open space. Owing to this, the apartment looks more spacious and light, which is enhanced by panoramic windows. Absence of the commonplace ceilings makes it possible to create pleasant and soft additional lighting. </li>
						 <li>The constant attribute of a duplex apartment – the staircase – gives a special flavour to the space and even enhances the atmosphere of life in a private residence. </li>
						</ul>
						<h2>Why is Duplex Apartment in CHICAGO Central House Residential Estate worth Buying </h2>
						<p>The duplex apartment, occupying two top floors of the residential complex building, may be compared to a private residence. It is unusual, comfortable and very spacious. Two levels and open plan layout enable you to arrange an apartment based on your own preference, without indulging in every pleasure. </p>
						<p>The Duplex apartments in the CHICAGO Central House Residential Estate have excellent view specifications: panoramic windows from the 24th floor offer breath-taking views of the downtown of Kiev. In addition, regardless of the situation on the real estate market, prices for such dwelling remain consistently high. These are prestigious apartments the demand for which is always high.
						</p>
						<p>Such a real estate is perfect for those who are interested in purchasing the ritzy dwelling, wants to invest in something original and bring a pleasant variety to their lives. If all this is about you, then the CHICAGO Central House Residential Complex is waiting for you. Do not miss the chance to become the owner of the apartment "under the sky" in the downtown of Kiev today.</p>
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

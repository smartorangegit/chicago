<?php include_once('../../includes/utm.php');
include('../../db.php');
$check = mysql_query("SELECT * FROM kvartity where character_code RLIKE '^2'" ,$db);
$myrow = mysql_fetch_array ($check);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/dvuhkomnatnaya-kvartira/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/dvuhkomnatnaya-kvartira/" />
	<link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/dvuhkomnatnaya-kvartira/" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ CHICAGO Central House 》Purchase a two-room apartment in CHICAGO Central House Residential Estate</title>
	<meta name="robots" content="index, follow">
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="✅ 【CHICAGO Central House】 Two-room apartments with open plan layout in CHICAGO Central House Residential Estate ✅ 【CHICAGO】">
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/css/full.css">
	<link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/select.css">
	<meta property="og:title" content="≡ CHICAGO Central House 》Purchase a two-room apartment in CHICAGO Central House Residential Estate" />
	<meta property="og:description" content="✅ 【CHICAGO Central House】 Two-room apartments with open plan layout in CHICAGO Central House Residential Estate ✅ 【CHICAGO】" />
	<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
  <?php /*Google Tag Manager*/ include_once('../../includes/header_en.php'); ?>

	<section class="h1_wrapper">
    <h1>Two-Room Apartments in  <br>CHICAGO Central House Residential Estate</h1>
  </section>

  <section class="light section_select">
    <div class="wrapper">
			<div class="select-info">
				<p>
					Today two-room apartments are no less popular than one-room apartments. It's all about the floor space and layout of such dwelling, which is the best option for a couple or a family with children.
				</p>
			</div>
			<div class="select_tabs">
				<ul>
					<li><a id="tab1" href="/en/odnokomnatnaya-kvartira/">one-room apartments </a></li>
					<li><a class="active" id="tab2" href="/en/dvuhkomnatnaya-kvartira/">two-room apartments </a></li>
					<li><a id="tab3" href="/en/trehkomnatnaya-kvartira/">three-room apartments </a></li>
					<li><a id="tab4" href="/en/dvuhurovnevaya-kvartira/">duplex apartment</a></li>
					<!-- <li><a id="tab5" href="#">торговые помещения</a></li> -->
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
				<h2>Advantages of Two-Room Apartments in CHICAGO Central House Residential Estate</h2>
				<p>The CHICAGO Central House Residential Complex offers to purchase the two-room apartment in Kiev. It has undeniable advantages over one-room real estate. </p>
				<ul>
				 <li>First of all, this is a multipurpose dwelling. It will suit both a single person and a couple with more than one child.  </li>
				 <li>There is always a buyer for a two-room apartment and profit from its sale can be pretty good.</li>
				 <li>The two-room apartments of the residential estate have open plan layout, which will enable you to create a dwelling of your dream. You can also choose the layout out of the options offered by us. </li>
				</ul>
				<h2>Why is Two-Room Apartment in CHICAGO Central House Residential Estate worth Buying </h2>
				<p>The floor space of the two-room apartments in the CHICAGO Central House Residential Complex starts with 63 square metres. Space perception is enhanced by panoramic windows improving lighting.
				 </p>
				<p>The two-room apartment will perfectly suit for newlyweds and small families. Such a dwelling will become a paradise for a quiet and happy life. In addition, the residential complex is equipped with excellent sound insulation owing to the use of high-quality materials.
				 </p>
				<p>If you are looking for the best dwelling in Kiev, feel free to choose the CHICAGO Central House Residential Estate. The apartment here will become your fortress, a creative space, a place for relaxation, pleasant meetings and a happy family life. Call us right now and sign up for a guided tour at any convenient time for you.
				</p>
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

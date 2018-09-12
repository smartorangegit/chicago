<?php include_once('../../includes/utm.php');
include('../../db.php');
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pieces = explode("/", $actual_link);
//print_r($pieces[4]);
//$ty = mb_strtoupper($pieces[4]);

$ty = $_GET['type'];

$urC = mysql_query("SELECT * FROM kvartity" ,$db);
$uC = mysql_fetch_array($urC);
$cO = 0;
while($uC = mysql_fetch_array($urC)){

if($ty == $uC["character_code"]  || $ty == '1a')
{
 $cO = 1;
}
else	{

	}

}
if($cO != 1){
header("Location: https://$_SERVER[HTTP_HOST]/404");
}



$check = mysql_query("SELECT * FROM kvartity where character_code ='$ty'" ,$db);
while ($myrow = mysql_fetch_array($check))
{
 //print_r($myrow); echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
    <meta charset="utf-8">
    <title>CHICAGO Central House - apartments in the center of Kyiv, street Antonovich (Gorky</title>
    <meta name="viewport" content="width=device-width">

<meta name="robots" content="noindex, follow">
<link rel="canonical" href="https://chicago.kiev.ua/en/choice/"/>

<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/appart/?type=<?php echo $ty?>" />
<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/appart/?type=<?php echo $ty?>" />
<link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/appart/?type=<?php echo $ty?>" />

  	<meta name="description" content="CHICAGO Central House - apartments in the center of Kyiv, street Antonovich ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="../../../../../../css/style.css">
    <link rel="stylesheet" href="../../../../../../css/jquery.fancybox-thumbs.css">
    <link rel="stylesheet" href="../../../../../../css/jquery.fancybox.css">
    <link rel="stylesheet" href="../../../../../../css/jquery.fancybox-thumbs.css">
    <link rel="stylesheet" href="../../../../../../css/jquery.fancybox.css">
    <link rel="stylesheet" href="../../../../../../css/choice.css">
<?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
  </head>
  <body>
  <?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
    <header class="header">
      <div class="wrapper">
        <a href="../../../../en/" class="logo">
          <img src="../../../../../../img/chicago-logo.png" alt="CHICAGO Central House residential complex in Kyiv city" title="CHICAGO Central House residential complex in Kyiv city">
        </a>
        <ul class="header-nav">
          <li id="mobile" class="mobile">
            <ul id="minimenu">
              <li id="miniclose" class="mobile">
<li class="language"><?php include_once('../../includes/lang_m.php'); ?></li>
                <li><a href="../../../../en/fashion/" class="separate">UFW</a></li>
                <li><a href="../../../../en/#place" class="separate">location</a></li>
                <li><a href="../../../../en/news/" class="separate">news</a></li>
                <li><a href="../../../../en/#builder" class="separate">developer</a></li>
                <li><a href="../../../../en/progress/" class="separate">construction</a></li>
                <li><a href="../../../../en/#contact" class="separate">contact us</a></li>
            </ul>
          </li>
        </ul>
        <a class="ch-reserv" href="#callback" style="margin-top:10%;">ask a price</a>
      </div>
    </header>

    <div class="wrapper_ch2">
        <div class="ch-menu nomobile">
          <ul>
            <li><a class="imglogo"  href="../../../../en/"><img src="/img/chicago-logo.png" alt="CHICAGO Central House residential complex in Kyiv city" title="CHICAGO Central House residential complex in Kyiv city"></a></li>
<li style="text-transform:lowercase; line-height: 1.4;">sales departament </br>(044) 49-80-400</li>
<li><a href="#callback" class="button callback">callback</a></li>
            <li><a href="../../../../en/#place">location</a></li>
            <li><a href="../../../../en/news/">news</a></li>
            <li><a href="../../../../en/#builder">developer</a></li>
            <li><a href="../../../../en/progress/">construction</a></li>
            <li><a href="../../../../en/#contact">contact us</a></li>
<li class="language"><?php include_once('../../includes/lang_ch.php'); ?></li>
          </ul>
          <!-- <a class="ch-reserv ch2" href="#callback">узнать цену</a> -->

 <?php include('../../includes/form_reserve_en.php'); ?>
        </div>
        <div class="ch-center-app">
          <div class="ch-app-up">
            <div class="ch-planapp">
              <img src="../app/<?=$myrow["imgPlan1"];?>" alt="applan">
            </div>
            <div class="ch-app-info">
              <img src="../info/1/<?=$myrow["imgPlan2"];?>" alt="levelplan">
<div class="table">
<ul style="width:170px;">
<li>Type <?=$myrow["type_en"];?></li>
<li>First level</li>
<li>Square m2</li>
<?
for ($i = 7; $i <= 22; $i++)
{
    if ($myrow["$i"] == 0)
       {
			 }
       else
					{
if($i == 7){echo '<li><p> Total: </p>'.$myrow["$i"].'</li>';}
if($i == 8){echo '<li><p> living: </p>'.$myrow["$i"].'</li>';}
if($i == 9){echo '<li><p> Hall: </p>'.$myrow["$i"].'</li>';}
if($i == 10){echo '<li><p> Kitchen: </p>'.$myrow["$i"].'</li>';}
if($i == 11){echo '<li><p> Living room: </p>'.$myrow["$i"].'</li>';}
if($i == 12){echo '<li><p> Bedroom: </p>'.$myrow["$i"].'</li>';}
if($i == 13){echo '<li><p> Bedroom2: </p>'.$myrow["$i"].'</li>';}
if($i == 14){echo '<li><p> Terrace: </p>'.$myrow["$i"].'</li>';}
if($i == 15){echo '<li><p> Toilet: </p>'.$myrow["$i"].'</li>';}
if($i == 16){echo '<li><p> Bathroom: </p>'.$myrow["$i"].'</li>';}
if($i == 17){echo '<li><p> Loggia: </p>'.$myrow["$i"].'</li>';}
if($i == 18){echo '<li><p> Wardrobe: </p>'.$myrow["$i"].'</li>';}
if($i == 19){echo '<li><p> Wardrobe2: </p>'.$myrow["$i"].'</li>';}
if($i == 20){echo '<li><p> Kitchen-living room: </p>'.$myrow["$i"].'</li>';}
if($i == 21){echo '<li><p> Pantry: </p>'.$myrow["$i"].'</li>';}
					}
}?>
</ul>
<ul style="width:170px;">
<li style="display:none;"></li>

<?
$check2 = mysql_query("SELECT * FROM level2 where type ='$ty'" ,$db);
while ($myrow2 = mysql_fetch_array($check2))
{
	for ($iz = 1; $iz <= 10; $iz++)
		{
			if ($myrow2["$iz"] == 0){}
			else
			{
if($iz == 1){ echo '<li>Second level</li> <li>Square m2</li> <li style="border:none;"><p> Hall: </p>'.$myrow2["$iz"].'</li>';}
if($iz == 2){ echo '<li><p> Office: </p>'.$myrow2["$iz"].'</li>';}
if($iz == 3){ echo '<li><p> Bedroom: </p>'.$myrow2["$iz"].'</li>';}
if($iz == 4){ echo '<li><p> Bedroom2: </p>'.$myrow2["$iz"].'</li>';}
if($iz == 5){ echo '<li><p> Bedroom3: </p>'.$myrow2["$iz"].'</li>';}
if($iz == 6){ echo '<li><p> Office2: </p>'.$myrow2["$iz"].'</li>';}
if($iz == 7){ echo '<li><p> Toilet: </p>'.$myrow2["$iz"].'</li>';}
if($iz == 8){ echo '<li><p> Bathroom: </p>'.$myrow2["$iz"].'</li>';}
if($iz == 9){ echo '<li><p> Loggia: </p>'.$myrow2["$iz"].'</li>';}
if($iz == 10){ echo '<li><p> Wardrobe: </p>'.$myrow2["$iz"].'</li>';}
			}
		}
}
?>
</ul>
 </div>
            </div>
          </div>
          <div class="ch-app-down">
            <div class="num_level">
              <span><?=$myrow["floor"];?></span>
              <p>floor</p>
<a class="ch-reserv ch2" href="#callback">find out the price</a>
            </div>
            <div class="ch-app-name">
              <p>apartment <?=$myrow["type_en"];?></p>
              <a class="ch-load" download href="/img/choice/1/<?=$myrow["character_code"];?>.jpg">download the plan</a>
            </div>

            <div class="ch-new-sec">
              <p><a class="new-app" href="/en/choice/">select floor <span>>></span></a></p>
            </div>
          </div>
        </div>






        <div class="ch-logo nomobile">
          <a href="../../../../en/">
              <img src="../../../../../../img/choice/logo.png" alt="CHICAGO Central House residential complex in Kyiv city" title="CHICAGO Central House residential complex in Kyiv city">
            </a>
          </div>
        </div>
    <script src="../../../../../../js/jquery.fancybox.pack.js"></script>
    <script src="../../../../../../js/jquery.fancybox-thumbs.js"></script>
    <script src="../../../../../../js/menu.js"></script>

	<!-- Yandex.Metrika counter -->
<script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter43410039 = new Ya.Metrika({ id:43410039, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true });
 } catch(e) { } });
 var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); };
 s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js";
 if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script>
 <noscript><div>
 <img src="https://mc.yandex.ru/watch/43410039" style="position:absolute; left:-9999px;" alt="" />
 </div>
 </noscript>
 <!-- /Yandex.Metrika counter -->
  </body>
</html>
<?}?>

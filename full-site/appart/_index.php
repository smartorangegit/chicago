<?
include('../db.php');
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pieces = explode("/", $actual_link);

//print_r($pieces[4]);
//$ty = mb_strtoupper($pieces[4]);
$ty = $_GET['type'];

$urC = mysql_query("SELECT * FROM kvartity" ,$db);
$uC = mysql_fetch_array($urC);
$cO = 0;
while($uC = mysql_fetch_array($urC)){

if($ty == $uC["character_code"] || $ty == '1a')
{
 $cO = 1;
}
else	{
	
	}

}
if($cO != 1){
header("Location: http://$_SERVER[HTTP_HOST]/404");
}



$check = mysql_query("SELECT * FROM kvartity where character_code ='$ty'" ,$db);
while ($myrow = mysql_fetch_array($check))
{
 //print_r($myrow); echo "<br>";

?>
<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="utf-8">
    <title>ЖК Chicago Central House - квартири у центрі Києва, вулиця Антоновича (Горького)</title>
    <?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="noindex, follow">
    <link rel="canonical" href="https://chicago.kiev.ua/choice/"/>
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/appart/?type=<?php echo $ty?>" />
    <link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/appart/?type=<?php echo $ty?>" />
<?php /*	<link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/appart/?type=<?php echo $ty?>" /> */ ?>
    
  	<meta name="description" content="ЖК Chicago Concept House - житловий комплекс у центрі Києва по вулиці Антоновича (Горького), неповторна атмосфера стилю та комфорту.">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/jquery.fancybox-thumbs.css">
    <link rel="stylesheet" href="../../css/jquery.fancybox.css">
    <link rel="stylesheet" href="../../css/jquery.fancybox-thumbs.css">
    <link rel="stylesheet" href="../../css/jquery.fancybox.css">
    <link rel="stylesheet" href="../../css/choice.css">

  </head>
  <body>
    <?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
    <header class="header">
      <div class="wrapper">
        <a href="/" class="logo">
          <img src="../../img/chicago-logo.png" alt="Житловий комплекс CHICAGO CENTRAL HOUSE м. Київ" title="Житловий комплекс CHICAGO CENTRAL HOUSE м. Київ">
        </a>
        <ul class="header-nav">
          <li id="mobile" class="mobile">
            <ul id="minimenu">
              <li id="miniclose" class="mobile">
  <li class="language"><?php include_once('../../includes/lang_m.php'); ?></li>
                <li><a href="../../" class="separate">Будинок</a></li>
                <li><a href="../../#place" class="separate">Розташування</a></li>
                <li><a href="../../news/" class="separate">Новини</a></li>
                <li><a href="../../#builder" class="separate">Забудовник</a></li>
                <li><a href="../../progress/" class="separate">Будівництво</a></li>
                <li><a href="../../#contact" class="separate">Зв'язок</a></li>
            </ul>
          </li>
        </ul>
        <a class="ch-reserv mobile" href="#callback" style="margin-top:10%;">Замовити дзвінок</a>
      </div>
    </header>

    <div class="wrapper_ch2">
        <div class="ch-menu nomobile">
          <ul>
            <li><a class="imglogo"  href="../../"><img src="../../img/chicago-logo.png" alt="Житловий комплекс CHICAGO CENTRAL HOUSE м. Київ" title="Житловий комплекс CHICAGO CENTRAL HOUSE м. Київ"></a></li>
<li style="text-transform:lowercase; line-height: 1.4;">телефон відділу продаж </br>(044) 29-03-415</li>
<li><a href="#callback" class="button callback">замовити дзвінок</a></li>
            <li><a href="../../#place">розташування</a></li>
            <li><a href="../../news/">Новини</a></li>
            <li><a href="../../#builder">забудовник</a></li>
            <li><a href="../../progress/">будівництво</a></li>
            <li><a href="../../#contact">зв&prime;язок</a></li>
            <li class="language"><?php include_once('../includes/lang_ch.php'); ?></li>
          </ul>
          <!-- <a class="ch-reserv ch2" href="#callback">дізнатись ціну</a> -->
          <!-- include for reserve -->
          <?php include_once('../includes/form_reserve.php'); ?>

        </div>
        <div class="ch-center-app">
          <div class="ch-app-up">
            <div class="ch-planapp">
              <img src="../../img/choice/app/<?=$myrow['imgPlan1'];?>" alt="applan">
            </div>
            <div class="ch-app-info">
              <img src="../../img/choice/info/<?=$myrow['imgPlan2'];?>" alt="levelplan">
            </div>
          </div>
          <div class="ch-app-down">
            <div class="num_level">
              <span><?=$myrow['floor'];?></span>
              <p>поверх</p>
              <a class="ch-reserv" href="#callback" style="margin-top:10%;">дізнатись ціну</a>

            </div>
            <div class="ch-app-name">
              <p>Квартира <?=$myrow['type'];?></p>
              <a class="ch-load" download href="../../img/choice/1/1a.png">Завантажити план</a>
            </div>

            <div class="ch-new-sec">
              <p><a class="new-app" href="../../choice/">Обрати поверх <span>>></span></a></p>
            </div>
          </div>
        </div>
        <div class="ch-logo nomobile">
          <a href="../../">
            <img src="../../img/choice/logo.png" alt="Житловий комплекс CHICAGO CENTRAL HOUSE м. Київ" title="Житловий комплекс CHICAGO CENTRAL HOUSE м. Київ">
          </a>

        </div>
    </div>
    <script src="../../js/jquery.fancybox.pack.js"></script>
    <script src="../../js/jquery.fancybox-thumbs.js"></script>
    <script src="../../js/menu.js"></script>
	

  </body>
</html>
<?}?>

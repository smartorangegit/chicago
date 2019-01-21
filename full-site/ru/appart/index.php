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
else  {

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
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>ЖК CHICAGO Central House - квартиры в центре Киева, улица Антоновича (Горького)</title>
    <meta name="viewport" content="width=device-width">

<meta name="robots" content="index, follow">
<link rel="canonical" href="https://chicago.kiev.ua/ru/choice/"/>
<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/appart/?type=<?php echo $ty?>" />
<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/appart/?type=<?php echo $ty?>" />
<link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/appart/?type=<?php echo $ty?>" />

    <meta name="description" content="ЖК CHICAGO Central House - житловий комплекс у центрі Києва по вулиці Антоновича (Горького), неповторна атмосфера стилю та комфорту.">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="../../../../../../css/style.css">
    <link rel="stylesheet" href="../../../../../../css/jquery.fancybox-thumbs.css">
    <link rel="stylesheet" href="../../../../../../css/jquery.fancybox.css">
    <link rel="stylesheet" href="../../../../../../css/jquery.fancybox-thumbs.css">
    <link rel="stylesheet" href="../../../../../../css/jquery.fancybox.css">
    <link rel="stylesheet" href="../../../../../../css/choice.css?v=1.0">
    <link rel="stylesheet" href="../../../../../../css/appart_btn.css">
<?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
  </head>
  <body>
  <?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
    <header class="header">
      <div class="wrapper">
        <a href="../../../../ru/" class="logo">
          <img src="../../../../../../img/chicago-logo.png" alt="Жилой комплекс CHICAGO Central House г. Киев" title="Жилой комплекс CHICAGO Central House г. Киев">
        </a>
        <ul class="header-nav">
          <li id="mobile" class="mobile">
            <ul id="minimenu">
              <li id="miniclose" class="mobile">
<li class="language"><?php include_once('../../includes/lang_m.php'); ?></li>
                <li><a href="../../../../ru/fashion/" class="separate">UFW</a></li>
                <li><a href="../../../../ru/#place" class="separate">расположение</a></li>
                <li><a href="../../../../ru/news/" class="separate">новости</a></li>
                <li><a href="../../../../ru/#builder" class="separate">застройщик</a></li>
                <li><a href="../../../../ru/progress/" class="separate">строительство</a></li>
                <li><a href="../../../../ru/#contact" class="separate">связь</a></li>
            </ul>
          </li>
        </ul>
        <a class="ch-reserv" href="#callback" style="margin-top:10%;">заказать звонок</a>
      </div>
    </header>

    <div class="wrapper_ch2">
        <div class="ch-menu nomobile">
          <ul>
            <li><a class="imglogo"  href="../../../../ru/"><img src="/img/chicago-logo.png" alt="Жилой комплекс CHICAGO Central House г. Киев" title="Жилой комплекс CHICAGO Central House г. Киев"></a></li>
<li style="text-transform:lowercase; line-height: 1.4;">телефон отдела продаж </br>(044) 49-80-400</li>
<li><a href="#callback" class="button callback">заказать звонок</a></li>
            <li><a href="../../../../ru/#place">расположение</a></li>
            <li><a href="../../../../ru/news/">новости</a></li>
            <li><a href="../../../../ru/#builder">застройщик</a></li>
            <li><a href="../../../../ru/progress/">строительство</a></li>
            <li><a href="../../../../ru/#contact">связь</a></li>
<li class="language"><?php include_once('../../includes/lang_ch.php'); ?></li>
          </ul>
          <!-- <a class="ch-reserv ch2" href="#callback">узнать цену</a> -->

 <?php include('../../includes/form_reserve_ru.php'); ?>

        </div>
        <div class="ch-center-app">
<?php if($ty == '2g'){ ?>          
          <ul class="ch-app">
            <li class="ch-app__btn active">
              <span class="ch-reserv">С мебелью</span>
            </li>
             <li class="ch-app__btn">
              <span href="#" class="ch-reserv">Со стенами</span>
            </li>
             <li class="ch-app__btn">
              <span href="#" class="ch-reserv">Без стен</span>
            </li>
          </ul>
          
          <div class="ch-app-up">
           <!--  <div class="ch-planapp">
              <img src="../app/<?/*=$myrow["imgPlan1"];*/?>" alt="applan">
            </div> -->

            <div class="ch-planapp">
             <div class="ch-planapp__item active">
                <img src="../../img/choice/app/app-2g.png?v=1.0" alt="applan">
             </div> 
             <div class="ch-planapp__item">
                <img src="../../img/choice/app/app-2g_st.png" alt="applan">
             </div>
             <div class="ch-planapp__item">
                <img src="../../img/choice/app/app-2g_bst.png" alt="applan">
             </div> 
            </div>
<?php  }  else {?>
          <div class="ch-app-up">
            <div class="ch-planapp">
              <img src="/img/choice/app/<?=$myrow["imgPlan1"];?>?v=1.0" alt="applan">
            </div>
<?php } ?>
            <div class="ch-app-info">
              <img src="../info/1/<?=$myrow["imgPlan2"];?>" alt="levelplan">
              <div class="table">
              <ul style="width:170px;">
              <li>Тип <?=$myrow["type"];?></li>
              <li>Первый уровень</li>
              <li>Площадь, м2</li>
              <?
              for ($i = 7; $i <= 22; $i++)
              {
                  if ($myrow["$i"] == 0)
                     {
                     }
                     else
                        {
              if($i == 7){echo '<li><p> Общая: </p>'.$myrow["$i"].'</li>';}
              if($i == 8){echo '<li><p> Жилая: </p>'.$myrow["$i"].'</li>';}
              if($i == 9){echo '<li><p> Прихожая: </p>'.$myrow["$i"].'</li>';}
              if($i == 10){echo '<li><p> Кухня: </p>'.$myrow["$i"].'</li>';}
              if($i == 11){echo '<li><p> Гостинная: </p>'.$myrow["$i"].'</li>';}
              if($i == 12){echo '<li><p> Спальня: </p>'.$myrow["$i"].'</li>';}
              if($i == 13){echo '<li><p> Спальня 2: </p>'.$myrow["$i"].'</li>';}
              if($i == 14){echo '<li><p> Тераса: </p>'.$myrow["$i"].'</li>';}
              if($i == 15){echo '<li><p> Санузел: </p>'.$myrow["$i"].'</li>';}
              if($i == 16){echo '<li><p> Ванна: </p>'.$myrow["$i"].'</li>';}
              if($i == 17){echo '<li><p> Лоджия: </p>'.$myrow["$i"].'</li>';}
              if($i == 18){echo '<li><p> Гардеробная: </p>'.$myrow["$i"].'</li>';}
              if($i == 19){echo '<li><p> Гардеробная 2: </p>'.$myrow["$i"].'</li>';}
              if($i == 20){echo '<li><p> Кухня-столовая: </p>'.$myrow["$i"].'</li>';}
              if($i == 21){echo '<li><p> Чулан: </p>'.$myrow["$i"].'</li>';}
                        }
              }?>
              </ul>
               <ul style="width:170px;">
             <? if($myrow['floor']=='23-24'){ echo '<li style="display:none;"></li><li>Второй уровень</li> <li>Площадь, м2</li> ';} ?>

              <?
              $check2 = mysql_query("SELECT * FROM level2 where type ='$ty'" ,$db);
              while ($myrow2 = mysql_fetch_array($check2))
              {

                for ($iz = 0; $iz <= 18; $iz++)
                  {
					  
                    if ($myrow2["$iz"] == 0){
						
					}
                    else
                    {
              if($iz == 1){ echo '<li style="border:none;"><p> Прихожая: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 2){ echo '<li style="border:none;"><p> Кабинет: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 3){ echo '<li style="border:none;"><p> Коридор: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 4){ echo '<li><p> Спальня 1: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 5){ echo '<li><p> Спальня 2: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 6){ echo '<li><p> Спальня 3: </p>'.$myrow2["$iz"].'</li>';}
			  if($iz == 7){ echo '<li><p> Спальня 4: </p>'.$myrow2["$iz"].'</li>';}
			  if($iz == 8){ echo '<li><p> Спальня 5: </p>'.$myrow2["$iz"].'</li>';}
			  if($iz == 9){ echo '<li><p> Кабинет 2: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 10){ echo '<li><p> Санузел: </p>'.$myrow2["$iz"].'</li>';}
			  if($iz == 11){ echo '<li><p> Санузел 2: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 12){ echo '<li><p> Ванная: </p>'.$myrow2["$iz"].'</li>';}
			  if($iz == 13){ echo '<li><p> Ванная 2: </p>'.$myrow2["$iz"].'</li>';}
			  if($iz == 14){ echo '<li><p> Лоджия 2: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 15){ echo '<li><p> Лоджия 1: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 16){ echo '<li><p> Гардеробная: </p>'.$myrow2["$iz"].'</li>';}
			  if($iz == 17){ echo '<li><p> Гардеробная 2: </p>'.$myrow2["$iz"].'</li>';}

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
              <p>этаж</p>
<a class="ch-reserv ch2" href="#callback">узнать цену</a>
            </div>
            <div class="ch-app-name">
              <p>квартира <?=$myrow["type"];?></p>
              <a class="ch-load" download href="/img/choice/1/<?=$myrow["character_code"];?>.jpg">скачать план</a>
            </div>

            <div class="ch-new-sec">
              <p><a class="new-app" href="/ru/choice/">выбрать этаж <span>>></span></a></p>
            </div>
          </div>
        </div>
        <div class="ch-logo nomobile">
          <a href="../../../../ru/">
              <img src="../../../../../../img/choice/logo.png" alt="Жилой комплекс CHICAGO Central House г. Киев" title="Жилой комплекс CHICAGO Central House г. Киев">
            </a>
          </div>
        </div>
    <script src="../../../../../../js/jquery.fancybox.pack.js"></script>
    <script src="../../../../../../js/jquery.fancybox-thumbs.js"></script>
    <script src="../../../../../../js/menu.js"></script>
    <script src="../../js/script-appart-btn.js"></script>


  </body>
</html>
<?}?>

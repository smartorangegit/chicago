<?php include_once('../includes/utm.php');
include('../db.php');
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<html lang="uk">
  <head>
    <meta charset="utf-8">
    <title>ЖК CHICAGO Central House - квартири у центрі Києва, вулиця Антоновича (Горького)</title>

    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://chicago.kiev.ua/choice/"/>
  <link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/appart/?type=<?php echo $ty?>" />
    <link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/appart/?type=<?php echo $ty?>" />
    <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/appart/?type=<?php echo $ty?>" />

    <meta name="description" content="ЖК Chicago Concept House - житловий комплекс у центрі Києва по вулиці Антоновича (Горького), неповторна атмосфера стилю та комфорту.">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/jquery.fancybox-thumbs.css">
    <link rel="stylesheet" href="../../css/jquery.fancybox.css">
    <link rel="stylesheet" href="../../css/jquery.fancybox-thumbs.css">
    <link rel="stylesheet" href="../../css/jquery.fancybox.css">
    <link rel="stylesheet" href="../../css/choice.css?v=1.0">
    <link rel="stylesheet" href="../../css/appart_btn.css">
<?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php'); ?>
  </head>
  <body>
    <?php /*Google Tag Manager*/ include_once('../includes/gtm_body.php'); ?>
    <header class="header">
      <div class="wrapper">
        <a href="/" class="logo">
          <img src="../../img/chicago-logo.png" alt="Житловий комплекс CHICAGO Central House м. Київ" title="Житловий комплекс CHICAGO Central House м. Київ">
        </a>
        <ul class="header-nav">
          <li id="mobile" class="mobile">
            <ul id="minimenu">
              <li id="miniclose" class="mobile">
  <li class="language"><?php include_once('../includes/lang_m.php'); ?></li>
                <li><a href="../../fashion/" class="separate">UFW</a></li>
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
            <li><a class="imglogo"  href="../../"><img src="../../img/chicago-logo.png" alt="Житловий комплекс CHICAGO Central House м. Київ" title="Житловий комплекс CHICAGO Central House м. Київ"></a></li>
<li style="text-transform:lowercase; line-height: 1.4;">телефон відділу продаж </br>(044) 49-80-400</li>
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
<?php if($ty == '2g'){ ?>
           <ul class="ch-app">
            <li class="ch-app__btn active">
                <span class="ch-reserv">З меблями</span>
            </li>
             <li class="ch-app__btn">
                <span href="#" class="ch-reserv">Із стінами</span>
            </li>
             <li class="ch-app__btn">
                <span href="#" class="ch-reserv">Без стін</span>
            </li>
          </ul>

          <div class="ch-app-up">
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
              <img src="../../img/choice/app/<?=$myrow['imgPlan1'];?>?v=1.0" alt="applan">
            </div>
<?php } ?>           
            <div class="ch-app-info">
              <img src="../../img/choice/1/<?=$myrow['imgPlan2'];?>" alt="levelplan">
              <div class="table">
              <ul style="width:170px;">
              <li>Тип <?=$myrow["type"];?></li>
              <li>Перший рівень</li>
              <li>Площа, м2</li>
              <?
              for ($i = 7; $i <= 22; $i++)
              {
                  if ($myrow["$i"] == 0)
                     {
                     }
                     else
                        {
              if($i == 7){echo '<li><p> Загальна: </p>'.$myrow["$i"].'</li>';}
              if($i == 8){echo '<li><p> Житлова: </p>'.$myrow["$i"].'</li>';}
              if($i == 9){echo '<li><p> Передпокій: </p>'.$myrow["$i"].'</li>';}
              if($i == 10){echo '<li><p> Кухня: </p>'.$myrow["$i"].'</li>';}
              if($i == 11){echo '<li><p> Вітальня: </p>'.$myrow["$i"].'</li>';}
              if($i == 12){echo '<li><p> Спальня: </p>'.$myrow["$i"].'</li>';}
              if($i == 13){echo '<li><p> Спальня2: </p>'.$myrow["$i"].'</li>';}
              if($i == 14){echo '<li><p> Тераса: </p>'.$myrow["$i"].'</li>';}
              if($i == 15){echo '<li><p> Санвузол: </p>'.$myrow["$i"].'</li>';}
              if($i == 16){echo '<li><p> Ванна: </p>'.$myrow["$i"].'</li>';}
              if($i == 17){echo '<li><p> Лоджія: </p>'.$myrow["$i"].'</li>';}
              if($i == 18){echo '<li><p> Гардеробна: </p>'.$myrow["$i"].'</li>';}
              if($i == 19){echo '<li><p> Гардеробна2: </p>'.$myrow["$i"].'</li>';}
              if($i == 20){echo '<li><p> Кухня-їдальня: </p>'.$myrow["$i"].'</li>';}
              if($i == 21){echo '<li><p> Комора: </p>'.$myrow["$i"].'</li>';}
                        }
              }?>
              </ul>
              <ul style="width:170px;">
             <? if($myrow['floor']=='23-24'){ echo '<li style="display:none;"></li><li>Другий рівень</li> <li>Площа, м2</li> ';} ?>

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
              if($iz == 1){ echo '<li style="border:none;"><p> Передпокій: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 2){ echo '<li style="border:none;"><p> Кабінет: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 3){ echo '<li style="border:none;"><p> Коридор: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 4){ echo '<li><p> Спальня 1: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 5){ echo '<li><p> Спальня 2: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 6){ echo '<li><p> Спальня3: </p>'.$myrow2["$iz"].'</li>';}
			  if($iz == 7){ echo '<li><p> Спальня4: </p>'.$myrow2["$iz"].'</li>';}
			  if($iz == 8){ echo '<li><p> Спальня5: </p>'.$myrow2["$iz"].'</li>';}
			  if($iz == 9){ echo '<li><p> Кабінет 2: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 10){ echo '<li><p> Санвузол: </p>'.$myrow2["$iz"].'</li>';}
			  if($iz == 11){ echo '<li><p> Санвузол 2: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 12){ echo '<li><p> Ванна: </p>'.$myrow2["$iz"].'</li>';}
			  if($iz == 13){ echo '<li><p> Ванна 2: </p>'.$myrow2["$iz"].'</li>';}
			  if($iz == 14){ echo '<li><p> Лоджія 2: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 15){ echo '<li><p> Лоджія 1: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 16){ echo '<li><p> Гардеробна: </p>'.$myrow2["$iz"].'</li>';}
			  if($iz == 17){ echo '<li><p> Гардеробна 2: </p>'.$myrow2["$iz"].'</li>';}

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
              <span><?=$myrow['floor'];?></span>
              <p>поверх</p>
              <a class="ch-reserv" href="#callback" style="margin-top:10%;">дізнатись ціну</a>

            </div>
            <div class="ch-app-name">
              <p>Квартира <?=$myrow['type'];?></p>
              <a class="ch-load" download href="/img/choice/1/<?=$myrow["character_code"];?>.jpg">Завантажити план</a>
            </div>

            <div class="ch-new-sec">
              <p><a class="new-app" href="../../choice/">Обрати поверх <span>>></span></a></p>
            </div>
          </div>
        </div>
        <div class="ch-logo nomobile">
          <a href="../../">
            <img src="../../img/choice/logo.png" alt="Житловий комплекс CHICAGO Central House м. Київ" title="Житловий комплекс CHICAGO Central House м. Київ">
          </a>

        </div>
    </div>
    <script src="../../js/jquery.fancybox.pack.js"></script>
    <script src="../../js/jquery.fancybox-thumbs.js"></script>
    <script src="../../js/menu.js"></script>
    <script src="../../js/script-appart-btn.js"></script>


  </body>
</html>
<?}?>

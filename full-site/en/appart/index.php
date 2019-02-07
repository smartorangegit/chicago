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
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CHICAGO Central House - apartments in the center of Kyiv, street Antonovich (Gorky</title>
    <meta name="description" content="CHICAGO Central House - apartments in the center of Kyiv, street Antonovich ">
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://chicago.kiev.ua/en/choice/"/>
    <link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/appart/?type=<?php echo $ty?>" />
    <link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/appart/?type=<?php echo $ty?>" />
    <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/appart/?type=<?php echo $ty?>" />
    <script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
    <link rel="stylesheet" type="text/css" href="../../css/full.css" />
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/choice.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon.ico">
  </head>
  <body>
  <?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
  <?php /*меню*/ include_once('../../includes/header_en.php'); ?>


        <section class="appart_plan">
          <div class="wrapper flex">
            <div class="appart_aside">
              <div class="subheader">
                <span>Flat <?=$myrow['type'];?></span>
              </div>

              <a class="new-app" href="javascript" onclick="window.history.go(-1);return false; ">Select other flat</a>
              <a class="new-app" href="../../en/choice/">select floor</a>
              <div class="house_map">
                <div class="">
                  Location of the apartment in the house
                </div>
                <img src="../../img/choice/1/<?=$myrow['imgPlan2'];?>" alt="levelplan">
              </div>
              <img class="compas" src="../../img/choice/compass.png" alt="compas">
            </div>

            <div class="appart_cside">
        <div class="ch-center-app">
          <?php if($ty == '2g'){ ?>
          <ul class="ch-app flex">
            <li class="ch-app__btn active">
                <span class="ch-reserv">With furniture</span>
            </li>
             <li class="ch-app__btn">
                <span href="#" class="ch-reserv">With walls</span>
            </li>
             <li class="ch-app__btn">
                <span href="#" class="ch-reserv">No walls</span>
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
          </div>
<?php  }  else {?>
           <div class="ch-app-up">
            <div class="ch-planapp">
              <img src="/img/choice/app/<?=$myrow['imgPlan1'];?>?v=1.0" alt="applan">
            </div>
          </div>
        <?php } ?>
      </div>
    </div>

    <div class="appart_bside">
      <div class="subheader"><span>Floor  <?=$myrow['floor'];?></span></div>

          <div class="table">
            <ul>
              <!-- <li>Type <?=$myrow["type_en"];?></li> -->
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
              if($i == 20){echo '<li><p> Kitchen dining room: </p>'.$myrow["$i"].'</li>';}
              if($i == 21){echo '<li><p> Pantry: </p>'.$myrow["$i"].'</li>';}
                        }
              }?>
              </ul>

               <ul>
             <? if($myrow['floor']=='23-24'){ echo '<li style="display:none;"></li><li>Second level</li> <li>Square, м2</li> ';} ?>

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
              if($iz == 1){ echo '<li style="border:none;"><p> Hall: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 2){ echo '<li style="border:none;"><p> Cabinet: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 3){ echo '<li style="border:none;"><p> Corridor: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 4){ echo '<li><p> Bedroom 1: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 5){ echo '<li><p> Bedroom 2: </p>'.$myrow2["$iz"].'</li>';}
              if($iz == 6){ echo '<li><p> Bedroom 3: </p>'.$myrow2["$iz"].'</li>';}
      			  if($iz == 7){ echo '<li><p> Bedroom 4: </p>'.$myrow2["$iz"].'</li>';}
      			  if($iz == 8){ echo '<li><p> Bedroom 5: </p>'.$myrow2["$iz"].'</li>';}
      			  if($iz == 9){ echo '<li><p> Cabinet 2: </p>'.$myrow2["$iz"].'</li>';}
                    if($iz == 10){ echo '<li><p> Toilet: </p>'.$myrow2["$iz"].'</li>';}
      			  if($iz == 11){ echo '<li><p> Toilet 2: </p>'.$myrow2["$iz"].'</li>';}
                    if($iz == 12){ echo '<li><p> Bathroom: </p>'.$myrow2["$iz"].'</li>';}
      			  if($iz == 13){ echo '<li><p> Bathroom 2: </p>'.$myrow2["$iz"].'</li>';}
      			  if($iz == 14){ echo '<li><p> Loggia 2: </p>'.$myrow2["$iz"].'</li>';}
                    if($iz == 15){ echo '<li><p> Loggia 1: </p>'.$myrow2["$iz"].'</li>';}
                    if($iz == 16){ echo '<li><p> Wardrobe: </p>'.$myrow2["$iz"].'</li>';}
      			  if($iz == 17){ echo '<li><p> Wardrobe 2: </p>'.$myrow2["$iz"].'</li>';}
                    }
                  }
              }
              ?>
              </ul>
            </div>
            <div class="btn_box">
              <a class="button ch-reserv" href="#callback">find out the price</a>
              <a class="button button-red" download href="/img/choice/1/<?=$myrow["character_code"];?>.jpg">download the plan</a>
            </div>
          </div>
        </div>

      </section>

      <div class="box_flat_plan">
        <div class="close-box">
          <svg class="svg_close" id="formclose_new" enable-background="new 0 0 50 50" viewBox="0 0 50 50" width="40" xmlns="http://www.w3.org/2000/svg"><path d="m37.304 11.282 1.414 1.414-26.022 26.02-1.414-1.413z" fill="#ef2732"></path><path d="m12.696 11.282 26.022 26.02-1.414 1.415-26.022-26.02z" fill="#ef2732"></path></svg>
        </div>
        <span>Flat <?=$myrow['type_en'];?></span>
        <div class="flat-plan_img">
          <img src="../../img/choice/app/<?=$myrow['imgPlan1'];?>?v=1.0" alt="applan">
        </div>
      </div>

      <div class="box_house_plan">
        <div class="close-box">
          <svg class="svg_close" id="formclose_new" enable-background="new 0 0 50 50" viewBox="0 0 50 50" width="40" xmlns="http://www.w3.org/2000/svg"><path d="m37.304 11.282 1.414 1.414-26.022 26.02-1.414-1.413z" fill="#ef2732"></path><path d="m12.696 11.282 26.022 26.02-1.414 1.415-26.022-26.02z" fill="#ef2732"></path></svg>
        </div>
        <span>Flat <?=$myrow['type'];?></span>
        <div class="flat-plan_img">
          <img src="../../img/choice/1/<?=$myrow['imgPlan2'];?>" alt="levelplan">
        </div>
      </div>



      <?php include('../../includes/footer_en.php'); ?>
      <?php include('../../includes/form_callback_en.php'); ?>
      <?php
      // include_once('../includes/form_reserve_en.php');
      ?>
      <script defer src="../../js/snapSliderFancy.js"></script>
      <script src="../../js/scripts.js"></script>

  </body>
</html>
<?}?>

<?php
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pieces = explode("/", $actual_link);
//print_r($pieces);
//echo $pieces[0]."//".$pieces[2]."/".$pieces[4]."/";
if($pieces[3] == "ru" || $pieces[3] == "en" ){
$url_r = "$pieces[0]//$pieces[2]/$pieces[3]/$pieces[4]/";
$url_a = "$pieces[0]//$pieces[2]/$pieces[4]/";
$url_n = "$pieces[0]//$pieces[2]/$pieces[3]/$pieces[4]/";
}
else{
$uRa = "https://$_SERVER[HTTP_HOST]"."$_SERVER[REQUEST_URI]";
$uRr = "https://$_SERVER[HTTP_HOST]".'/ru'."$_SERVER[REQUEST_URI]";
$uRn = "https://$_SERVER[HTTP_HOST]".'/en'."$_SERVER[REQUEST_URI]";
}
?>
<div class="lang">
     <a class="separate" href="<?if(!empty($url_a)){ echo $url_a;}else{ echo $uRa;}?>">UA</a>
     <a class="separate" href="<?if(!empty($url_r)){ echo $url_r;}else{ echo $uRr;}?>">RU</a>
     <a class="separate" href="<?if(!empty($url_n)){ echo $url_n;}else{ echo $uRn;}?>">EN</a>
  <!-- <a href="https://chicago.kiev.ua/en/">EN</a> -->
</div>

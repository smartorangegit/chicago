<?php
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pieces = explode("/", $actual_link);
//print_r($pieces);
//echo $pieces[0]."//".$pieces[2]."/".$pieces[4]."/";
if($pieces[3] == "ru" || $pieces[3] == "en"){
$urllang = str_replace('/ru', "",$actual_link);
$urllang_n = str_replace('/ru', "/en",$actual_link);

$url_r = "https://$_SERVER[HTTP_HOST]"."$_SERVER[REQUEST_URI]";
$url_a = $urllang;
$url_n = $urllang_n;
}
else{
$uRa = "https://$_SERVER[HTTP_HOST]"."$_SERVER[REQUEST_URI]";
$uRr = "https://$_SERVER[HTTP_HOST]".'/ru'."$_SERVER[REQUEST_URI]";
$uRn = "https://$_SERVER[HTTP_HOST]".'/en'."$_SERVER[REQUEST_URI]";
}
//echo $uRa ;
?>
<div class="lang_m">
   <a class="separate" href="<?if(!empty($url_a)){ echo $url_a;}else{ echo $uRa;}?>">UA</a>
   <a class="separate" href="<?if(!empty($url_r)){ echo $url_r;}else{ echo $uRr;}?>">RU</a>
   <a class="separate" href="<?if(!empty($url_n)){ echo $url_n;}else{ echo $uRn;}?>">EN</a>
  <!-- <a href="https://chicago.kiev.ua/en/">EN</a> -->
</div>


<style media="screen">
.lang_m {
  /*position: absolute;*/
  right: -70px;
  top: 8px;
}
  .lang_m a {
    /*display: inline-block;*/
    height: 14px;
    color: white;
    padding-right: 3px;
    font-size: 10px;
    text-transform: uppercase;
  }
  li.language .lang_m{
    position: static;
    line-height: 36px;
    padding-top: 12px;
  }
  li.language .lang_m a{
    display: inline-block!important;
  }
</style>

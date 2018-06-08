<?php

//echo $ty;
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pieces = explode("/", $actual_link);
//print_r($pieces);
//echo $pieces[0]."//".$pieces[2]."/".$pieces[4]."/";
$ty = $_GET['type'];

if(stristr($actual_link, 'appart') || stristr($actual_link, 'choice')){
	//if(stristr($pieces[3] == "ru")){
		$uRz = "https://$_SERVER[HTTP_HOST]"."$_SERVER[REQUEST_URI]";
		$uRz2 = "https://$_SERVER[HTTP_HOST]".'/ru'."$_SERVER[REQUEST_URI]";
		$uRz3 = "https://$_SERVER[HTTP_HOST]".'/en'."$_SERVER[REQUEST_URI]";
		$url_a = 0;
		$url_r = 0;
	$chek = 1;
$urllang = str_replace('/ru', "",$uRz);
$urllang_2 = str_replace('/en', "",$urllang);


$urllang2 = str_replace('/ru/ru/', "/ru/",$uRz2);
$urllang2_2 = str_replace('/en/', "/",$urllang2);

$urllang3 = str_replace('/en/en/', "/en/",$uRz3);
$urllang3_2 = str_replace('/ru/', "/",$urllang3);

$uRa = $urllang_2;
$uRr = $urllang2_2;
$uRn = $urllang3_2;
	//}
}

if($chek != 1){
	if($pieces[3] == "ru" || $pieces[3] == "en"  && $chek != 1){
		$url_r = "$pieces[0]//$pieces[2]/$pieces[3]/$pieces[4]/";
		$url_a = "$pieces[0]//$pieces[2]/$pieces[4]/";
		$url_n = "$pieces[0]//$pieces[2]/$pieces[3]/$pieces[4]/";
		
	}
	else{
		$uRa = "https://$_SERVER[HTTP_HOST]"."$_SERVER[REQUEST_URI]";
		$uRr = "https://$_SERVER[HTTP_HOST]".'/ru'."$_SERVER[REQUEST_URI]";
		$uRn =  "https://$_SERVER[HTTP_HOST]".'/en'."$_SERVER[REQUEST_URI]";

	}
}
?>
<div class="lang_ch">
<a href="<?if($url_a != 0 || !empty($url_a)){ echo $url_a;} else{ echo $uRa;}?>">UA</a>
<a href="<?if($url_r != 0 || !empty($url_a)){ echo $url_r;} else{ echo $uRr;}?>">RU</a>
<a href="<?=$uRn?>">EN</a>
  <!-- <a href="https://chicago.kiev.ua/en/">EN</a> -->
</div>

<?php
//echo $urllang3;
?>

<style media="screen">
.lang_ch {
  margin-top: 20px;
}
  .lang_ch a {
    font-family: "IntroBlack", arial, sans-serif;
    display: inline-block!important;
    height: 14px;
    color: white;
    padding: 0!important;
    padding-right: 3px;
    font-size: 16px!important;
    text-transform: uppercase;
  }

</style>

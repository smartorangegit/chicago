<?php 
include("admin/bd.php");
if($_POST['start'] && $_POST['perPage'] && $_POST['lang']) {

    $start = $_POST['start'] - 1;
    $per_page = $_POST['perPage'];
    $lang = $_POST['lang'];
    $lang_title = '';
    $lang_min_text = '';

    if($lang == 'ua') {
        $lang_title = 'title_ua';
        $lang_min_text = 'min_text_ua';
		$lang_name_news = 'name_news_ua';
    } elseif($lang == 'ru') {
        $lang_title = 'title_ru';
        $lang_min_text = 'min_text_ru';
		$lang_name_news = 'name_news_ru';
    }elseif($lang == 'en') {
        $lang_title = 'title_en';
        $lang_min_text = 'min_text_en';
		$lang_name_news = 'name_news_en';
    }



    $sel = $DB->query("SELECT `img_name`, `img_path`, `date`, {$lang_title}, {$lang_min_text}, {$lang_name_news}, `news_code` FROM `news` WHERE `isActive`='0' ORDER BY `date` DESC LIMIT $start, $per_page");
   // print_r(json_encode($sel->fetch_assoc()));
  

 $rows = array();
while ($row = $sel->fetch_assoc()) {
    $rows[] = $row;
}
print_r(json_encode($rows));	

}
 
?>
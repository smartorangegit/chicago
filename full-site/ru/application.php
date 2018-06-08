<?php
include('../config.php');
session_start(); 

function clear_phone($phone){
    $phone=	str_replace("+(38)", "38", $phone);
    $phone = str_replace("-", "", $phone);
    $phone = str_replace(" ", "", $phone);
    return $phone;
}
$_POST['telephone']=clear_phone($_POST['telephone']);

$time = date("H:i:s"); 
$Id = 1; //54
define('CRM_HOST', 'riverside-development.bitrix24.ua'); // Домен срм системы smartorange.bitrix24.ru riverside-development.bitrix24.ua
define('CRM_PORT', '443'); 
define('CRM_PATH', '/crm/configs/import/lead.php'); 
	if ($_POST['typ'] == 8) {
		define('CRM_LOGIN', 'a.sharshakow@saga-development.com.ua');  // логин
		define('CRM_PASSWORD', 'saga123'); // пароль
	}
	else {
		define('CRM_LOGIN', 'gav.sqrt@gmail.com');  // логин
		define('CRM_PASSWORD', '4561210_gav'); // пароль
	}
 
if(!empty($_POST['count'])){
    $count=$_POST['count'];
}
else{
    $count=$_POST['count2'];
}
/********************************************************************************************/

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($count != 0 || $count > 0) {
        /*
           $recaptcha=$_POST['g-recaptcha-response'];
           if(!empty($recaptcha))
           {

               function getCurlData($url)
       {
               $curl = curl_init();
               curl_setopt($curl, CURLOPT_URL, $url);
               curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
               curl_setopt($curl, CURLOPT_TIMEOUT, 10);
               curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
               $curlData = curl_exec($curl);
               curl_close($curl);
               return $curlData;
       }

               $google_url="https://www.google.com/recaptcha/api/siteverify";
               $secret='6Lc1XRUUAAAAAM88Sk63WoiOtrNPihExQFAqsJQh';
               $ip=$_SERVER['REMOTE_ADDR'];
               $url=$google_url."?secret=".$secret."&response=".$recaptcha."&remoteip=".$ip;
               $res=getCurlData($url);
               $res= json_decode($res, true);
               //reCaptcha введена
                if($res['success'])
               {
       */
        // получаем данные из полей и задаем название лида
		if ($_POST['typ'] == 8) {
			 $postData = array(
				'TITLE' => $_POST['metka'], // сохраняем нашу метку и формируем заголовок лида
				'NAME' => $_POST['name'],   // сохраняем имя
				'PHONE_WORK' => $_POST['telephone'], // сохраняем телефон
				'EMAIL_WORK' => $_POST['email'], // сохраняем почту
				'UF_CRM_1485774805' => $_POST['inn'], // сохраняем ИНН UF_CRM_1485437157
				'ASSIGNED_BY_ID' => $Id,
				'ADDRESS' => $_POST['webad'],
				'UF_CRM_1527676517'	=> $_POST['name_an'],
				'UF_CRM_1485774841' => $time, //UF_CRM_1485510398
				'UF_CRM_1485774828' => $_POST['formData'], //UF_CRM_1485507619
			);
		}
		else{
			 $postData = array(
				'TITLE' => $_POST['metka'], // сохраняем нашу метку и формируем заголовок лида
				'NAME' => $_POST['name'],   // сохраняем имя
				'PHONE_WORK' => $_POST['telephone'], // сохраняем телефон
				'EMAIL_WORK' => $_POST['email'], // сохраняем почту
				'UF_CRM_1485774805' => $_POST['inn'], // сохраняем ИНН UF_CRM_1485437157
				'ASSIGNED_BY_ID' => $Id,
				'ADDRESS' => $_POST['webad'],
				'UF_CRM_1485774841' => $time, //UF_CRM_1485510398
				'UF_CRM_1485774828' => $_POST['formData'], //UF_CRM_1485507619
			);
		}		
				
		

        function addintbd($name, $phone, $formData, $typs, $kv)
        {
            GLOBAL $db;

            date_default_timezone_set('Europe/Kiev');
            $today = date("Y-m-d H:i:s");
            $ip = $_SERVER["REMOTE_ADDR"];
            $phone = $_POST['telephone'];
            $name = $_POST['name'];
            $formData = $_POST['formData'];

//echo $today."<br>".$today."<br>".$ip."<br>".$name."<br>".$phone."<br>".$formData."<br>".$typs."<br>";

            $result = $db->query("INSERT INTO `chi_call` (`dates`, `ip`, `name`, `fhonenumber`, `texts`, `typs`,`kv`) VALUES ('$today', '$ip', '$name', '$phone', '$formData', '$typs', '$kv')");
//$result->execute();  $result->close();
        }

        // авторизация, проверка логина и пароля
        if (defined('CRM_AUTH')) {
            $postData['AUTH'] = CRM_AUTH;
        } else {
            $postData['LOGIN'] = CRM_LOGIN;
            $postData['PASSWORD'] = CRM_PASSWORD;
        }

        $fp = fsockopen("ssl://" . CRM_HOST, CRM_PORT, $errno, $errstr, 30);
        if ($fp) {
            // формируем и шифруем строку с данными из формы
            $strPostData = '';
            foreach ($postData as $key => $value)
                $strPostData .= ($strPostData == '' ? '' : '&') . $key . '=' . urlencode($value);
            $str = "POST " . CRM_PATH . " HTTP/1.0\r\n";
            $str .= "Host: " . CRM_HOST . "\r\n";
            $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
            $str .= "Content-Length: " . strlen($strPostData) . "\r\n";
            $str .= "Connection: close\r\n\r\n";

            $str .= $strPostData;

            // отправляем запрос в срм систему
            fwrite($fp, $str);
            $result = '';
            while (!feof($fp)) {
                $result .= fgets($fp, 128);
            }
            fclose($fp);

            $response = explode("\r\n\r\n", $result);
            $output = '<pre>' . print_r($response[1], 1) . '</pre>';
            $_SESSION['rezult_text'] = $mes['c-mes13'];
            addintbd($name, $phone, $formData, $typs = $_POST['typ'], $kv);
            header("Location: success.php");
        } else {
            echo 'Connection Failed! ' . $errstr . ' (' . $errno . ')';
        }

        //
        /*
          }
          else
          {
             // $msg="Please re-enter your reCAPTCHA.";
              //echo 0;
  header("Location: fail.php");
          }

          }
      else
      {
         // $msg="Please re-enter your reCAPTCHA.";
      //	echo 0;
  header("Location: fail.php");
      }
     */

    }
    else
    {

        header("Location: fail.php");
    }
}
?>

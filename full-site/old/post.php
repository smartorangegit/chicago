<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {$name = $_POST['name'];}
   // if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
     if (isset($_POST['email'])) {$email = $_POST['email'];}
    if (isset($_POST['formData'])) {$formData = $_POST['formData'];}

    $to = "vvasilcev@gmail.com"; /*Óêàæèòå àäðåñ, ãà êîòîðûé äîëæíî ïðèõîäèòü ïèñüìî  vvasilcev@gmail.com  */
    $sendfrom   = "support@chicago.kiev.ua"; /*Óêàæèòå àäðåñ, ñ êîòîðîãî áóäåò ïðèõîäèòü ïèñüìî, ìîæíî íå íàñòîÿùèé, íóæíî äëÿ ôîðìèðîâàíèÿ çàãîëîâêà ïèñüìà*/
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject = "Ïèñüìî ñ ñàéòà http://www.chicago.kiev.ua/";
    $message = "$formData
 <b>Сообщение от:</b>  $name </br> <b>Номер для связи :</b> $email" ;
    $send = mail ($to, $subject, $message, $headers);
    if ($send == 'true')
    {

    /*echo '<center>

Ñïàñèáî çà îòïðàâêó âàøåãî ñîîáùåíèÿ!

</center>';*/
    }
    else
    {
    echo '<center>

<b>Îøèáêà. Ñîîáùåíèå íå îòïðàâëåíî!</b>

</center>';
    }
} else {
    http_response_code(403);
    echo "Ïîïðîáóéòå åùå ðàç";
}?>
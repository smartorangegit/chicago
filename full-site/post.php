<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {$name = $_POST['name'];}
    if (isset($_POST['tex'])) {$text = $_POST['tex'];}
    if (isset($_POST['email'])) {$email = $_POST['email'];}
    if (isset($_POST['formData'])) {$formData = $_POST['formData'];}

    $to = "ny.callback@gmail.com"; /*vvasilcev@gmail.com  */
    $sendfrom   = "support@chicago.kiev.ua"; /*Óêàæèòå àäðåñ, ñ êîòîðîãî áóäåò ïðèõîäèòü ïèñüìî, ìîæíî íå íàñòîÿùèé, íóæíî äëÿ ôîðìèðîâàíèÿ çàãîëîâêà ïèñüìà*/
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject = "Сообщение от -  https://www.chicago.kiev.ua/";
    $message = "$formData
 <b>Имя :</b>  $name </br> <b>Телефон / електронна пошта :</b> $email <br> <b>Сообщение :</b> $text" ;
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
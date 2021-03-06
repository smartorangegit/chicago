<?php


header('Content-Type: text/html; charset=utf-8');


$to = "service@saga-development.com.ua"; // почта администратора сайта, на который будут приходить письма


if(!empty($_POST["name"]) && !empty($_POST["apartment_number"]) && !empty($_POST["surname"])&& !empty($_POST["tel"])){ // проверка полей на пустоту, если не пустые данные пришли, то идём дальше
  
    // trim - обрезает пробелы в начале и конце
    // htmlspecialchars - преобразует специальные символы в HTML-сущности
    // strip_tags - удаляет HTML и PHP-теги из строки
    $name = trim(htmlspecialchars(strip_tags($_POST["name"])));
    $tel = trim(htmlspecialchars(strip_tags($_POST["tel"])));
    $surname = trim(htmlspecialchars(strip_tags($_POST["surname"])));
	$apartment_number = trim(htmlspecialchars(strip_tags($_POST["apartment_number"])));
	

    
    // формируем тело письма
    $message = '
    
				Записатися на перегляд в CHICAGO Central House
				Имя: "'.$name.'"
				Фамилия: "'.$surname.'"
                Телефон: "'.$tel.'"
                Повідомлення: "'.$apartment_number.'"
 
    ';
        echo print_r($message);  
    if(mail($to, "Новая заявка", $message)){  // если отправка прошла успешно, то...
        echo "<div class='i_true'>Сообщение отправлено!"; // выводим пользователю сообщение
    } else{ // если не отправилось по како-то причине, то...
        echo "<div class='i_false'>Не полуилось отправить сообщение</div>"; // выводим пользователю сообщение
    }
            
} else{ // если пустые данные пришли
    echo "<div class='i_false'>Необходимо заполнить все поля!</div>"; // выводим пользователю сообщение
}


?>
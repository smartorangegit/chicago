<?php
$webAd = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>

<form id="callback" action="<?= 'https://'.$_SERVER['HTTP_HOST'].'/application.php'?>" method=post enctype="multipart/form-data" class="form clearfix">
           <h2 class="title">Замовити дзвінок</h2>
           <div class="input_wrap">
             <input type="text" name="name" required>
             <span class="placeholder">Ім&prime;я:<i>*</i></span>
           </div>
           <div class="input_wrap">
             <input type="email" name="email" required>
             <span class="placeholder">E-mail:<i>*</i></span>
           </div>
           <div class="input_wrap">
             <input type="tel" name="telephone" id="zipCode1" required>
             <span class="placeholder placeholder_phone">Телефон:<i>*</i></span>
           </div>
           <div class="input_wrap_textarea">
             <textarea onkeyup="javascript:countme2();" tabindex="4" cols="30" rows="10" name="formData" required></textarea>
             <span class="placeholder">Текст повідомлення:<i>*</i></span>
           </div>
           <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
           <input  name="metka" class="metka" type="hidden" value="Форма с Chicago"/>
           <input  name="inn" class="userInn" type="hidden" value="Chicago"/>
           <input  type="submit" value="Надіслати" class="button">
       </form>

       <style media="screen">
         form input[type="submit"]{  border: 4px solid #FF000B;}
       @media only screen and (max-width:425px) {
         .form .button {margin-top: 16px;}
       }
       </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script defer src="/js/maskInitialisation.js"></script>
<!-- Код проверки ввода текста и инициализацию маски вынес в отдельный файл  maskInitialisation.js Андрей 14.11.2017 -->

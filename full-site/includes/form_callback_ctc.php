<?php
$webAd = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>

<form id="callback-ctc"  method=post enctype="multipart/form-data" class="form clearfix" style="display:none;">
           <h2 class="title">Приєднатися до зустрічей КТК</h2>
		   		   <!-- Hidden Required Fields -->
  <input type="hidden" name="project_name" value="Site Name">
  <input type="hidden" name="admin_email" value="sergeykhistovoy@gmail.com">
  <input type="hidden" name="form_subject" value="Form Subject">
  <!-- END Hidden Required Fields -->
           <div class="input_wrap">
             <input type="text" name="name" id="name" required>
             <span class="placeholder">Ім&prime;я:<i>*</i></span>
           </div>
           <div class="input_wrap">
             <input type="surname" name="surname" id="surname" required>
             <span class="placeholder">Прізвище:<i>*</i></span>
           </div>
           <div class="input_wrap">
             <input type="tel" name="tel" id="zipCode1-ctc" required>
             <span class="placeholder placeholder_phone">Телефон:<i>*</i></span>
           </div>
          <!-- <div class="input_wrap_textarea">
             <textarea onkeyup="javascript:countme2();" tabindex="4" cols="30" rows="10" name="formData" required></textarea>
             <span class="placeholder">Текст повідомлення:<i>*</i></span>
           </div>-->
		   <div class="input_wrap">
			<input type="apartment_number" name="apartment_number" id="apartment_number"  required>
             <span class="placeholder placeholder_phone">Номер квартири:<i>*</i></span>
           </div>
           <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
           <input  name="metka" class="metka" type="hidden" value="Форма с Chicago"/>
           <input  name="inn" class="userInn" type="hidden" value="Chicago"/>
           <input  type="submit" value="Надіслати" class="button" id="send">
		   <div class="answer"></div>
       </form>

       <style media="screen">
         form input[type="submit"]{  border: 4px solid #FF000B;}
       @media only screen and (max-width:425px) {
         .form .button {margin-top: 16px;}
       }
       </style>

<script  type="text/javascript">
    // отправялем данные с формы в обработчик
    $("#send").click(function(){

        var msg = $('#callback-ctc').serialize();
        $.ajax({
          type: 'POST',
          url: '../application_ctc.php',
          data: msg,
          success: function(data) {
            $('.answer').html(data).slideDown(300);

          },
          error:  function(xhr, str){
                $('.answer').html('Возникла ошибка: ' + xhr.responseCode);
            }
        });
        return false;
    });



</script>
<script src="/js/maskInitialisation.js"></script>
<!-- Код проверки ввода текста и инициализацию маски вынес в отдельный файл  maskInitialisation.js Андрей 14.11.2017 -->

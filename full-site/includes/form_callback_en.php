<?php
$webAd = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

?>
        <form id="callback" action="<?= 'https://'.$_SERVER['HTTP_HOST'].'/en/application.php'?>" method=post enctype="multipart/form-data"  class="form clearfix">
            <h2 class="title">Feedback</h2>
            <div class="input_wrap">
              <input type="text" name="name" required>
              <span class="placeholder">Name:<i>*</i></span>
            </div>
            <div class="input_wrap">
              <input type="email" name="email" required>
              <span class="placeholder">E-mail:<i>*</i></span>
            </div>
            <div class="input_wrap">
              <input id="zipCode1" type="tel"  name="telephone" required>
              <span class="placeholder placeholder_phone">Telephone:<i>*</i></span>
            </div>
            <div class="input_wrap_textarea">
              <textarea onkeyup="javascript:countme2();" tabindex="4" cols="30" rows="10" name="formData" required></textarea>
              <span class="placeholder">Message text:<i>*</i></span>
            </div>
            <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
            <input  name="metka" class="metka" type="hidden" value="Форма с Chicago"/>
            <input  name="inn" class="userInn" type="hidden" value="Chicago"/>
            <input  type="submit" value="Send" class="button">
        </form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/js/untispam.js"></script>
       <style media="screen">
         form input[type="submit"]{
           border: 4px solid #FF000B;
         }
         @media only screen and (max-width:425px) {
           .form .button {
           margin-top: 16px;
         }
         }
       </style>



 <!-- скрипт маски номера -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
<script src="/js/intlTelInput.min.js"></script>
<script src="/js/maskInitialisation.js"></script>
<!-- конец скрипта маски -->

               <?php
$webAd = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

?>

<style media="screen">
.form h2.title {
  margin-bottom: 8vmin;
}
  @media only screen and (max-width:425px) {
    .form .button {
    margin-top: 16px;
  }
  }

</style>


<form action="<?= 'https://'.$_SERVER['HTTP_HOST'].'/application.php'?>" method=post enctype="multipart/form-data" id="callback" class="form clearfix">
         <h2 class="title">reserve apartment</h2>
         <div class="input_wrap">
           <input type="text" name="name" required>
           <span class="placeholder">Name:<i>*</i></span>
         </div>
         <div class="input_wrap">
           <input type="email"  name="email" required>
           <span class="placeholder">Email:<i>*</i></span>
         </div>
         <div class="input_wrap">
           <input type="tel"  name="telephone" id="zipCode" required>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
<script src="/js/intlTelInput.min.js"></script>
<script src="/js/maskInitialisation.js"></script>
<!-- Код проверки ввода текста и инициализацию маски вынес в отдельный файл  maskInitialisation.js Андрей 14.11.2017 -->

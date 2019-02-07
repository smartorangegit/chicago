	<section  <?LazyLoad("/img/bg-17.jpg", $option=array('class'=>'seventeenth', 'option'=>'center'));?>  id="contact">

		<?php
		$webAd = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

		?>

		<form id="mainform" action="application.php" method=post enctype="multipart/form-data" class="wrapper form wow bounceInDown clearfix">
		<h2 class="title">Обратная связь</h2>
		<div class="input_wrap">
			<input type="text" name="name" required>
			<span class="placeholder">Имя:<i>*</i></span>
		</div>
		<div class="input_wrap">
			<input type="email" name="email" required>
			<span class="placeholder">email:<i>*</i></span>
		</div>
		<div class="input_wrap">
			<input required type="tel" name="telephone" id="zipCode">
			<span class="placeholder placeholder_phone">Телефон:<i>*</i></span>
		</div>
		<div class="input_wrap_textarea">
			<textarea onkeyup="javascript:countme();" tabindex="4" cols="30" rows="10" name="formData"  required></textarea>
			<span class="placeholder">Текст сообщения:<i>*</i></span>
		</div>
		<input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
		<input  name="metka" class="metka" type="hidden" value="Форма с Chicago"/>
		<input  name="inn" class="userInn" type="hidden" value="Chicago"/>
		<input  type="submit" value="Отправить" class="button">
		</form>

		<form  id="realtor-form" action="application.php" method="post" enctype="multipart/form-data" class="wrapper form clearfix" style="display: none;">
            <h2 class="title">Сотрудничество для риелторов</h2>
            <div class="input_wrap realtor_input_wrap">
                <input type="text" name="name_an" required>
                <span class="placeholder">Название АН:<i>*</i></span>
            </div>
            <div class="input_wrap realtor_input_wrap">
                <input type="text" name="name" required>
                <span class="placeholder">Имя:<i>*</i></span>
            </div>
            <div class="input_wrap realtor_input_wrap">
                <input type="email" name="email" required>
                <span class="placeholder">Email:<i>*</i></span>
            </div>
            <div class="input_wrap realtor_input_wrap">
                <input type="tel" name="telephone" required id="zipCode">
                <span class="placeholder placeholder_phone">Телефон:<i>*</i></span>
            </div>
            <div class="input_wrap_textarea">
                <textarea  tabindex="4" cols="30" rows="10" name="formData"  required></textarea>
                <span class="placeholder">Текст сообщения:<i>*</i></span>
            </div>

			<input  name="count" class="webad" type="hidden" value="5">
			<input  name="typ" class="webad" type="hidden" value="8" >
            <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
            <input  name="metka" class="metka" type="hidden" value="Сотрудничество для риелторов - Chicago"/>
            <input  name="inn" class="userInn" type="hidden" value="Chicago"/>
            <!--<button class="button button-red">Надіслати</button>-->
    <?//    <div class="g-recaptcha" id="reCaptcha2" data-sitekey="6Lc1XRUUAAAAAM-WkPVHbGRPXqTkfaOEaFlsqEBu"></div> */?>

        <div id="info"></div>
            <input  type="submit" value="Отправить" class="button">
            </form>
        <div class="for_btn">
            <a class="button for_btn_link" href="http://riverside.net.ua/agent/">Сотрудничество для риелторов</a>
        </div>

				<script>
			// Form add count on textarea input start
		var ct = 0;
			var addCount = document.createElement('input');
			addCount.type = "hidden";
			addCount.id = "count";
			addCount.name = "count";
			addCount.value = "0";
			document.getElementById('mainform').appendChild(addCount);
			function countme() {
				document.getElementById('count').value = ++ct;
			}
			// Form add count on textarea input end
		</script>

			<style>
			#zipCode{padding-left:45px;height: 40px;}
			</style>
    </section>

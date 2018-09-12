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
		<div class="working_hours">
			<span>График работы отдела продаж:</span>
			<span>Пн-пт: 9.00 - 19.00;</span>
			<span>Сб: 10.00 - 18.00;</span>
			<span>Вск: 10.00 - 18.00;</span>
		</div>
		<div class="working_hours">
			<!--<span>Отдел сервиса:</span>
			<span>(044) 494 04 00</span>-->
		</div>
		<input  type="submit" value="Отправить" class="button">
		</form>
		<form  id="realtor-form" action="application.php" method=post enctype="multipart/form-data" class="wrapper form clearfix" style="display: none;">
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
        <div class="working_hours">
            <span>График работы отдела продаж:</span>
			<span>Пн-пт: 9.00 - 19.00;</span>
			<span>Сб: 10.00 - 18.00;</span>
			<span>Вск: 10.00 - 18.00;</span>
        </div>
        <div id="info"></div>
            <input  type="submit" value="Отправить" class="button">
            </form>

        <div class="for_btn">
            <a class="button for_btn_link" href="http://riverside.net.ua/agent/">Сотрудничество для риелторов</a>
        </div>
        <style media="screen">
        .for_btn{   max-width: 860px; width: 100%; background: rgba(0,0,0,0.8);color: black;padding: 24px; position: absolute; bottom: 10%; left: 50%; transform: translateX(-50%);text-align: center;}
        .for_btn .button{padding: 8px 20px;transition: 0.5s;}
        .for_btn .button:hover{color: white; border-color: red;}
            .realtor_input_wrap {
                width: 24%;
            }
            @media only screen and (max-width:768px) {
              .for_btn{ max-width: 380px; bottom: -5px;}
              .seventeenth{ height: auto; padding-bottom: 50px;}
            }
			.third, .fifth {padding-bottom:0;}
        </style>
        <script>
            var controller = new ScrollMagic.Controller();
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
		<!-- Flipclock initiation ends here -->

			<style>
			#zipCode{padding-left:45px;height: 40px;}
			</style>
    </section>
<?php
$webAd = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>

<form id="callback-ctc"  method=post enctype="multipart/form-data" class="form clearfix" style="display:none;">
           <h2 class="title">To arrange an inspection</h2>
		   		   <!-- Hidden Required Fields -->
  <input type="hidden" name="project_name" value="Site Name">
  <input type="hidden" name="admin_email" value="sergeykhistovoy@gmail.com">
  <input type="hidden" name="form_subject" value="Form Subject">
  <!-- END Hidden Required Fields -->
           <div class="input_wrap">
             <input type="text" name="name" id="name" required>
             <span class="placeholder">Name:<i>*</i></span>
           </div>
           <div class="input_wrap">
             <input type="surname" name="surname" id="surname" required>
             <span class="placeholder">Surname:<i>*</i></span>
           </div>
           <div class="input_wrap">
             <input type="tel" name="tel" id="zipCode1-ctc" required>
             <span class="placeholder placeholder_phone">Phone:<i>*</i></span>
           </div>
          <div class="input_wrap_textarea">
             <textarea onkeyup="javascript:countme2();" tabindex="4" cols="30" rows="10" name="apartment_number" id="apartment_number" required></textarea>
             <span class="placeholder">Message text:<i>*</i></span>
           </div>
		  <!-- <div class="input_wrap">
			<input type="apartment_number" name="apartment_number" id="apartment_number"  required>
             <span class="placeholder placeholder_phone">Текстове повідомлення:<i>*</i></span>
           </div> -->

           <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
           <input  name="metka" class="metka" type="hidden" value="Форма с Chicago"/>
           <input  name="inn" class="userInn" type="hidden" value="Chicago"/>
           <input  type="submit" value="Send" class="button" id="send">
		   <div class="answer"></div>
       </form>

       <style media="screen">
         form input[type="submit"]{  border: 4px solid #FF000B;}
       @media only screen and (max-width:425px) {
         .form .button {margin-top: 16px;}
       }
		   #zipCode1-ctc {
		padding-left: 45px;
		height: 40px;
		}
       </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/js/intlTelInput.min.js"></script>

<script  type="text/javascript">
    // отправялем данные с формы в обработчик
    $("#send").click(function(){
		
        var msg = $('#callback-ctc').serialize();
        $.ajax({
          type: 'POST',
          url: '../../application_service-department.php',
          data: msg,
          success: function(data) {
            $('.answer').html(data).slideDown(300);
            console.log(data);
			console.log('111111');
          },
          error:  function(xhr, str){
                $('.answer').html('Возникла ошибка: ' + xhr.responseCode);
            }
        });
        return false;
    });



</script>
<script>
//maskedinput.js//
!function(e){"function"==typeof define&&define.amd?define(["jquery"],e):e("object"==typeof exports?require("jquery"):jQuery)}(function(e){var t,n=navigator.userAgent,a=/iphone/i.test(n),i=/chrome/i.test(n),r=/android/i.test(n);e.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},e.fn.extend({caret:function(e,t){var n;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof e?(t="number"==typeof t?t:e,this.each(function(){this.setSelectionRange?this.setSelectionRange(e,t):this.createTextRange&&((n=this.createTextRange()).collapse(!0),n.moveEnd("character",t),n.moveStart("character",e),n.select())})):(this[0].setSelectionRange?(e=this[0].selectionStart,t=this[0].selectionEnd):document.selection&&document.selection.createRange&&(n=document.selection.createRange(),e=0-n.duplicate().moveStart("character",-1e5),t=e+n.text.length),{begin:e,end:t})},unmask:function(){return this.trigger("unmask")},mask:function(n,o){var c,l,u,f,s,h,g,m;if(!n&&this.length>0){var d=(c=e(this[0])).data(e.mask.dataName);return d?d():void 0}return o=e.extend({autoclear:e.mask.autoclear,placeholder:e.mask.placeholder,completed:null},o),l=e.mask.definitions,u=[],f=g=n.length,s=null,e.each(n.split(""),function(e,t){"?"==t?(g--,f=e):l[t]?(u.push(new RegExp(l[t])),null===s&&(s=u.length-1),f>e&&(h=u.length-1)):u.push(null)}),this.trigger("unmask").each(function(){function c(){if(o.completed){for(var e=s;h>=e;e++)if(u[e]&&A[e]===d(e))return;o.completed.call(S)}}function d(e){return o.placeholder.charAt(e<o.placeholder.length?e:0)}function p(e){for(;++e<g&&!u[e];);return e}function v(e){for(;--e>=0&&!u[e];);return e}function b(e,t){var n,a;if(!(0>e)){for(n=e,a=p(t);g>n;n++)if(u[n]){if(!(g>a&&u[n].test(A[a])))break;A[n]=A[a],A[a]=d(a),a=p(a)}j(),S.caret(Math.max(s,e))}}function k(e){var t,n,a,i;for(t=e,n=d(e);g>t;t++)if(u[t]){if(a=p(t),i=A[t],A[t]=n,!(g>a&&u[a].test(i)))break;n=i}}function y(){R(),S.val()!=w&&S.change()}function x(e,t){var n;for(n=e;t>n&&g>n;n++)u[n]&&(A[n]=d(n))}function j(){S.val(A.join(""))}function R(e){var t,n,a,i=S.val(),r=-1;for(t=0,a=0;g>t;t++)if(u[t]){for(A[t]=d(t);a++<i.length;)if(n=i.charAt(a-1),u[t].test(n)){A[t]=n,r=t;break}if(a>i.length){x(t+1,g);break}}else A[t]===i.charAt(a)&&a++,f>t&&(r=t);return e?j():f>r+1?o.autoclear||A.join("")===T?(S.val()&&S.val(""),x(0,g)):j():(j(),S.val(S.val().substring(0,r+1))),f?t:s}var S=e(this),A=e.map(n.split(""),function(e,t){return"?"!=e?l[e]?d(t):e:void 0}),T=A.join(""),w=S.val();S.data(e.mask.dataName,function(){return e.map(A,function(e,t){return u[t]&&e!=d(t)?e:null}).join("")}),S.one("unmask",function(){S.off(".mask").removeData(e.mask.dataName)}).on("focus.mask",function(){if(!S.prop("readonly")){clearTimeout(t);var e;w=S.val(),e=R(),t=setTimeout(function(){S.get(0)===document.activeElement&&(j(),e==n.replace("?","").length?S.caret(0,e):S.caret(e))},10)}}).on("blur.mask",y).on("keydown.mask",function(e){if(!S.prop("readonly")){var t,n,i,r=e.which||e.keyCode;m=S.val(),8===r||46===r||a&&127===r?(t=S.caret(),n=t.begin,(i=t.end)-n==0&&(n=46!==r?v(n):i=p(n-1),i=46===r?p(i):i),x(n,i),b(n,i-1),e.preventDefault()):13===r?y.call(this,e):27===r&&(S.val(w),S.caret(0,R()),e.preventDefault())}}).on("keypress.mask",function(t){if(!S.prop("readonly")){var n,a,i,o=t.which||t.keyCode,l=S.caret();t.ctrlKey||t.altKey||t.metaKey||32>o||!o||13===o||(l.end-l.begin!=0&&(x(l.begin,l.end),b(l.begin,l.end-1)),n=p(l.begin-1),g>n&&(a=String.fromCharCode(o),u[n].test(a))&&(k(n),A[n]=a,j(),i=p(n),r?setTimeout(function(){e.proxy(e.fn.caret,S,i)()},0):S.caret(i),l.begin<=h&&c()),t.preventDefault())}}).on("input.mask paste.mask",function(){S.prop("readonly")||setTimeout(function(){var e=R(!0);S.caret(e),c()},0)}),i&&r&&S.off("input.mask").on("input.mask",function(){var e=S.val(),t=S.caret();if(m&&m.length&&m.length>e.length){for(R(!0);t.begin>0&&!u[t.begin-1];)t.begin--;if(0===t.begin)for(;t.begin<s&&!u[t.begin];)t.begin++;S.caret(t.begin,t.begin)}else{for(R(!0);t.begin<g&&!u[t.begin];)t.begin++;S.caret(t.begin,t.begin)}c()}),R()})}})});
</script>
<script src="/js/maskInitialisation.js"></script>
<!-- Код проверки ввода текста и инициализацию маски вынес в отдельный файл  maskInitialisation.js Андрей 14.11.2017 -->
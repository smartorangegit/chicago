$(document).ready(function() {
    // скрипт маски номера
  jQuery(function($){
    $.mask.definitions['#']='[0-9]';
    $.mask.definitions['9'] = '';    
    $("form input[type='tel']").mask("+(38) ### ###-##-##",{placeholder:"_"});
  });
  
  var telInput = $("form input[type='tel']");
  
  telInput.intlTelInput({
    initialCountry: 'ua',
    preferredCountries: ['ua' ,'ru'],
    nationalMode: false
  });
  
  $(telInput).on("countrychange", function(e, countryData) {
    $(this).intlTelInput("setNumber", "");    
    $(this).trigger('blur');
    $(this).mask( '+(' + countryData.dialCode + ')' + ' ### ###-##-##',{placeholder:"_"});
  });
  
  // Так как в данной форме юзается кастомные placeholder ы нужна доп логика.
  $('.placeholder_phone, form input[type="tel"], .intl-tel-input').on('click',function() {
    $(telInput).focus();
    $('.placeholder_phone').css({'display': 'none'});
  });
  
  $(telInput).on('focusout',function() {
    var reg = new RegExp(/^[\d ()+]{4,7} \d{3} \d{3}-\d{2}-\d{2}$/g);
    if(!reg.test($(this).val())) {
      $('.placeholder_phone').css({'display': 'inline'});
    }
  });
  
  // конец скрипта маски
  }); //end ready

  var ct2 = 0;
  var addCount2 = document.createElement('input');
  addCount2.type = "hidden";
  addCount2.id = "count2";
  addCount2.name = "count2";
  addCount2.value = "0";
  document.getElementById('callback').appendChild(addCount2);
  function countme2() {
      document.getElementById('count2').value = ++ct2;
  }

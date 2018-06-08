// var clock2;

  $(document).ready(function() {
    var clock2;
    var deadline = 'July 1 2018 23:59:59 GMT+02:00';
    console.log(deadline);
    var t = Date.parse(deadline);
    var time = Date.parse(deadline) - Date.parse(new Date());
    // console.log(time);
    time1 = time/1000;
    console.log(time1);
    clock2 = $('.clock2').FlipClock({
          clockFace: 'DailyCounter',
          autoStart: true,
          callbacks: {
            stop: function() {
              $('.message').html('The clock has stopped!')
            }
          }
      });
      clock2.setTime(time1);
      clock2.setCountdown(true);
      clock2.start();




      $(".underprice").click(function(){
      	$(".mesage").css("left","-15px");
      });

      $('#clock-close').click(function(){
        $('.mesage').css('left','-670px')
        // $('.clock2').css('display','none')
      });

  });

$(document).ready(function () {
  $('#mobile_menu_open').click(function(event) {
    $('.header-nav').toggleClass('header-nav_open')
    $('.burger').toggleClass('mobile_active')
  });

  var h = $(window).height();
  $(window).scroll(function(){

  	 windowTop = $(window).scrollTop();
  	 if (windowTop > 50){
  		 $(".header").addClass("zipped")
  		 // $('.fixed_logo').css('opacity','1')
  	 }
  	 if (windowTop < 50){
  		 $(".header").removeClass("zipped")
  			// $(".fixed_logo").css("opacity","0")
  	 	};

      $(".seventh").each(function(){
            windowTop = $(window).scrollTop() - 350;
            elTop = $(this).offset().top;
             if ( (elTop - h) <= windowTop) {
                 $(this).addClass("panorama_active");
             }
             if ( (elTop - h) > windowTop) {
               if ( $(this).hasClass("panorama_active") ) {
                 $(this).removeClass("panorama_active");
               }
             }
         });

     });

});


$(function(){
    $('.gallery a, #openGal').fancybox({
        wrapCss: 'gal',
        helpers : {
            thumbs  : {
                width   : 50,
                height  : 50
            }
        }
    });


    $('a.galery2, #gal2').fancybox({
        wrapCss: 'gal2'
    });

    $('.ufw_slider a').fancybox({
        wrapCss: 'gallery_kub'
    });

    $('.header-callback .callback').fancybox({
        wrapCss: 'call-form'
    });




    $('.pulse li').each(function(){
      $(this).mouseover(function(){
        $('.clock').addClass('active');
      })
      $(this).mouseout(function(){
        $('.clock').removeClass('active');
      })
    });

    // Form

    $('.form input, .form textarea').blur(function(){
        if($(this).val()){
            $(this).next().hide();
        } else {
            $(this).next().show();
        }
    });

    // Navigation

    $('.header-nav a:not(.separate)').click(function(e){
        e.preventDefault();
        var $href = $(this).attr('href');
        $top = $($href).offset().top;
        $('body,html').animate({scrollTop: $top}, 1000);
    });

    function telephone(queryClass) {
      var elem = $(queryClass);
      var phoneNumber = elem.html();
      var href = 'tel:' + phoneNumber;
      var phoneDisplay = elem.siblings('.phone_display');
      var phoneDisplayLink = phoneDisplay.find('a');
      phoneDisplayLink.attr('href', href);
      phoneDisplayLink.html(phoneNumber);
    }

    setTimeout(function () {
      telephone('.em_phone');
    }, 2000);

    $('#budinok_open, #budinok').hover(
      function () {
        $('#budinok').css('max-height', '195px');
      }, function () {
        $('#budinok').css('max-height', '0');
      });

    $('#uwf_open, #uwf_active').hover(
      function () {
        $('#uwf_active').css('max-height', '35px');
      }, function () {
        $('#uwf_active').css('max-height', '0');
      });
    $('#ctc_open, #ctc_active').hover(
      function () {
        $('#ctc_active').css('max-height', '35px');
      }, function () {
        $('#ctc_active').css('max-height', '0');
      });


    new WOW().init();


});

/*blazy*/
(function(n,l){"function"===typeof define&&define.amd?define(l):"object"===typeof exports?module.exports=l():n.Blazy=l()})(this,function(){function n(b){var c=b._util;c.elements=E(b.options);c.count=c.elements.length;c.destroyed&&(c.destroyed=!1,b.options.container&&p(b.options.container,function(a){q(a,"scroll",c.validateT)}),q(window,"resize",c.saveViewportOffsetT),q(window,"resize",c.validateT),q(window,"scroll",c.validateT));l(b)}function l(b){for(var c=b._util,a=0;a<c.count;a++){var d=c.elements[a];
a:{var f=d,h=b.options;var m=f.getBoundingClientRect();if(h.container&&y&&(f=f.closest(h.containerClass))){var r=f.getBoundingClientRect();if(t(r,e)){var f=r.top-h.offset,g=r.right+h.offset,k=r.bottom+h.offset,h=r.left-h.offset;m=t(m,{top:f>e.top?f:e.top,right:g<e.right?g:e.right,bottom:k<e.bottom?k:e.bottom,left:h>e.left?h:e.left})}else m=!1;break a}m=t(m,e)}if(m||u(d,b.options.successClass))b.load(d),c.elements.splice(a,1),c.count--,a--}0===c.count&&b.destroy()}function t(b,c){return b.right>=c.left&&
b.bottom>=c.top&&b.left<=c.right&&b.top<=c.bottom}function z(b,c,a){if(!u(b,a.successClass)&&(c||a.loadInvisible||0<b.offsetWidth&&0<b.offsetHeight)){c=b.getAttribute(v)||b.getAttribute(a.src);var d=b.getAttribute("data-option");if(c){c=c.split(a.separator);var f=c[A&&1<c.length?1:0],h=b.getAttribute(a.srcset),m="img"===b.nodeName.toLowerCase(),e=(c=b.parentNode)&&"picture"===c.nodeName.toLowerCase();if(m||void 0===b.src){var g=new Image,l=function(){a.error&&a.error(b,"invalid");w(b,a.errorClass);
k(g,"error",l);k(g,"load",n)},n=function(){m?e||B(b,f,h):d?b.style.background='url("'+f+'") '+d+"":b.style.backgroundImage='url("'+f+'")';x(b,a);k(g,"load",n);k(g,"error",l)};e&&(g=b,p(c.getElementsByTagName("source"),function(b){var c=a.srcset,f=b.getAttribute(c);f&&(b.setAttribute("srcset",f),b.removeAttribute(c))}));q(g,"error",l);q(g,"load",n);B(g,f,h)}else b.src=f,x(b,a)}else"video"===b.nodeName.toLowerCase()?(p(b.getElementsByTagName("source"),function(b){var c=a.src,f=b.getAttribute(c);f&&
(b.setAttribute("src",f),b.removeAttribute(c))}),b.load(),x(b,a)):(a.error&&a.error(b,"missing"),w(b,a.errorClass))}}function x(b,c){w(b,c.successClass);c.success&&c.success(b);b.removeAttribute(c.src);b.removeAttribute(c.srcset);p(c.breakpoints,function(a){b.removeAttribute(a.src)})}function B(b,c,a){a&&b.setAttribute("srcset",a);b.src=c}function u(b,c){return-1!==(" "+b.className+" ").indexOf(" "+c+" ")}function w(b,c){u(b,c)||(b.className+=" "+c)}function E(b){var c=[];b=b.root.querySelectorAll(b.selector);
for(var a=b.length;a--;c.unshift(b[a]));return c}function C(b){e.bottom=(window.innerHeight||document.documentElement.clientHeight)+b;e.right=(window.innerWidth||document.documentElement.clientWidth)+b}function q(b,c,a){b.attachEvent?b.attachEvent&&b.attachEvent("on"+c,a):b.addEventListener(c,a,{capture:!1,passive:!0})}function k(b,c,a){b.detachEvent?b.detachEvent&&b.detachEvent("on"+c,a):b.removeEventListener(c,a,{capture:!1,passive:!0})}function p(b,c){if(b&&c)for(var a=b.length,d=0;d<a&&!1!==c(b[d],
d);d++);}function D(b,c,a){var d=0;return function(){var f=+new Date;f-d<c||(d=f,b.apply(a,arguments))}}var v,e,A,y;return function(b){if(!document.querySelectorAll){var c=document.createStyleSheet();document.querySelectorAll=function(a,b,d,e,g){g=document.all;b=[];a=a.replace(/\[for\b/gi,"[htmlFor").split(",");for(d=a.length;d--;){c.addRule(a[d],"k:v");for(e=g.length;e--;)g[e].currentStyle.k&&b.push(g[e]);c.removeRule(0)}return b}}var a=this,d=a._util={};d.elements=[];d.destroyed=!0;a.options=b||
{};a.options.error=a.options.error||!1;a.options.offset=a.options.offset||100;a.options.root=a.options.root||document;a.options.success=a.options.success||!1;a.options.selector=a.options.selector||".b-lazy";a.options.separator=a.options.separator||"|";a.options.containerClass=a.options.container;a.options.container=a.options.containerClass?document.querySelectorAll(a.options.containerClass):!1;a.options.errorClass=a.options.errorClass||"b-error";a.options.breakpoints=a.options.breakpoints||!1;a.options.loadInvisible=
a.options.loadInvisible||!1;a.options.successClass=a.options.successClass||"b-loaded";a.options.validateDelay=a.options.validateDelay||25;a.options.saveViewportOffsetDelay=a.options.saveViewportOffsetDelay||50;a.options.srcset=a.options.srcset||"data-srcset";a.options.src=v=a.options.src||"data-src";a.options.options=a.options.options||"data-options";y=Element.prototype.closest;A=1<window.devicePixelRatio;e={};e.top=0-a.options.offset;e.left=0-a.options.offset;a.revalidate=function(){n(a)};a.load=
function(a,b){var c=this.options;a&&void 0===a.length?z(a,b,c):p(a,function(a){z(a,b,c)})};a.destroy=function(){var b=a._util;a.options.container&&p(a.options.container,function(a){k(a,"scroll",b.validateT)});k(window,"scroll",b.validateT);k(window,"resize",b.validateT);k(window,"resize",b.saveViewportOffsetT);b.count=0;b.elements.length=0;b.destroyed=!0};d.validateT=D(function(){l(a)},a.options.validateDelay,a);d.saveViewportOffsetT=D(function(){C(a.options.offset)},a.options.saveViewportOffsetDelay,
a);C(a.options.offset);p(a.options.breakpoints,function(a){if(a.width>=window.screen.width)return v=a.src,!1});setTimeout(function(){n(a)})}});

  (function() {
    // Initialize
    var bLazy = new Blazy();
  })();

  (function() {
    var elemRed = $('.logo_proj__slick-slider');
    //   Слайдер с логотипами других проектов застройщика на главной slick slider
  if( ( elemRed.length != 0 ) ){

    $('.logo_proj__slick-slider').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        prevArrow: $('.logo_proj__slick-slider__controls_prev-slide'),
        nextArrow: $('.logo_proj__slick-slider__controls_next-slide'),
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 856,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
    });
  }
})();

$(".for_btn_link").on("click", function(e) {
    e.preventDefault();
    $("#realtor-form").fadeToggle();

    $("#mainform").toggle();
});

                                                    /* appart.php*/
$(document).ready(function() {

  $('a.ch-reserv').fancybox({
      });

  $('a.button.callback').fancybox({
          });


  $('.form input, .form textarea').blur(function(){
        if($(this).val()){
            $(this).next().hide();
        } else {
            $(this).next().show();
        }
    });

    $(function(){

      $('ul.ch-app').on('click', 'li:not(.active)', function () {
            var $gallery_tabs = $('.ch-planapp').children('.ch-planapp__item'),
                $active_tab = $gallery_tabs.eq($(this).index());
            $(this).addClass('active').siblings().removeClass('active');
            $gallery_tabs.removeClass('active');
            $active_tab.addClass('active');
        });

    });


    $('.ch-planapp img').click(function(){
      $('.box_flat_plan').addClass('is_active');
    });
    $('.box_flat_plan .close-box').click(function(){
      $('.box_flat_plan').removeClass('is_active');
    });

    $('.house_map').click(function(){
      $('.box_house_plan').addClass('is_active');
    });
    $('.box_house_plan .close-box').click(function(){
      $('.box_house_plan').removeClass('is_active');
    });

});


                                                      /*choice.php*/

      var elems = document.getElementsByClassName('g100');
            var i;
        for (i = elems.length - 1; i >= 0; --i) {

        elems[i].addEventListener('mouseover', function (){

          for (i = elems.length - 1; i >= 0; --i) {
            elems[i].classList.remove('active')
          }
          var item = this;
          var strelka = document.getElementById('strelka');
          strelka.classList.add('strelka-hidden');
          item.classList.add('active');
          var level = this.dataset.level;
          var app = this.dataset.app;
          var sale = this.dataset.sale;
              document.querySelector('#level').innerHTML = level;
              document.querySelector('#appart').innerHTML = app;
            });

        elems[i].addEventListener('mouseleave', function (){
          var item = this;
          item.classList.remove('active');

              });
            };


////appart.php
///перемещение блоков

$(window).bind('resize load', function(){
  ww = window.innerWidth;
  var transBlock = $('.house_bside');

  if( ww <= 768){
    transBlock.remove();
    $('.house_aside .num_box').after(transBlock);
  }
  else if ( ww > 768) {
    transBlock.remove();

    $('.house_aside').after(transBlock);

  }
});


//// select 1,2,3 appartaments

var emptyCells, i;

$('.select_box').each(function() {
emptyCells = [];
for (i = 0; i < $(this).find('.room_item').length; i++) {
  emptyCells.push($('<div>', {
    class: 'cell is-empty'
  }));
}
$(this).append(emptyCells);
});

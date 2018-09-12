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
//bird

$(document).ready(function(){
      $(window).scroll(function(){
        // alert('hallo');
            $('.block1')
              .css('left','20px').css('opacity','0');
            $('.block1 img')
              .css('width','20px');
        });
       });

    // Form

    $('.form input, .form textarea').blur(function(){
        if($(this).val()){
            $(this).next().hide();
        } else {
            $(this).next().show();
        }
    })

    // Navigation

    $('.header-nav a:not(.separate)').click(function(e){
        e.preventDefault();
        var $href = $(this).attr('href');
        $top = $($href).offset().top;
        $('body,html').animate({scrollTop: $top}, 1000);
    })

    // For Demo purposes only (show hover effect on mobile devices)

    // [].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
    //     el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
    // } );
    new WOW().init();

    // Headers slide effect
    var controller = new ScrollMagic.Controller();


    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-1", duration: 300})
    .setTween(".second .title", {transform: "translateX(0)"}).addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-1", duration: 300})
    .setTween(".second i.line", {transform: "translateX(0)"}).addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-2", duration: 300})
    .setTween(".seventh .title", {transform: "translateX(0)"}).addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-2", duration: 300})
    .setTween(".seventh i.line", {transform: "translateX(0)"}).addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-3", duration: 300})
    .setTween(".eigth .title", {transform: "translateX(0)"}).addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-3", duration: 300})
    .setTween(".eigth i.line", {transform: "translateX(0)"}).addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-4", duration: 300})
    .setTween(".ninth .title", {transform: "translateX(0)"}).addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-4", duration: 300})
    .setTween(".ninth i.line", {transform: "translateX(0)"}).addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-5", duration: 300})
    .setTween(".eleventh .title", {transform: "translateX(0)"}).addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-5", duration: 300})
    .setTween(".eleventh i.line", {transform: "translateX(0)"}).addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-6", duration: 300})
    .setTween(".thirteenth .title", {transform: "translateX(0)"}).addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-6", duration: 300})
    .setTween(".thirteenth i.line", {transform: "translateX(0)"}).addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-7", duration: 300})
    .setTween(".fifteenth .title", {transform: "translateX(0)"}).addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-7", duration: 300})
    .setTween(".fifteenth i.line", {transform: "translateX(0)"}).addTo(controller);

    // Header effect

    new ScrollMagic.Scene({triggerElement: ".first .trigger-0"})
        .setClassToggle(".header", "zipped").addTo(controller);

    // Panorama

    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-2", duration: 1500})
    .setTween(".seventh", {backgroundPosition: "-181px 0"}).addTo(controller);

    // First block parallax effect

    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-0", duration: 800})
    .setTween(".block2", {left: "0%"}).addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-0", duration: 1100})
    .setTween(".block3", {left: "0%"}).addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-0", duration: 1100})
    .setTween(".first h2", {transform: "translateX(50%)"}).addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-0", duration: 1100})
    .setTween(".first .subheader", {transform: "translateX(50%)"}).addTo(controller);
});

/*!
  hey, [be]Lazy.js - v1.8.2 - 2016.10.25
  A fast, small and dependency free lazy load script (https://github.com/dinbror/blazy)
  (c) Bjoern Klinggaard - @bklinggaard - http://dinbror.dk/blazy
*/

 // (function(q,m){"function"===typeof define&&define.amd?define(m):"object"===typeof exports?module.exports=m():q.Blazy=m()})(this,function(){function q(b){var c=b._util;c.elements=E(b.options);c.count=c.elements.length;c.destroyed&&(c.destroyed=!1,b.options.container&&l(b.options.container,function(a){n(a,"scroll",c.validateT)}),n(window,"resize",c.saveViewportOffsetT),n(window,"resize",c.validateT),n(window,"scroll",c.validateT));m(b)}function m(b){for(var c=b._util,a=0;a<c.count;a++){var d=c.elements[a],e;a:{var g=d;e=b.options;var p=g.getBoundingClientRect();if(e.container&&y&&(g=g.closest(e.containerClass))){g=g.getBoundingClientRect();e=r(g,f)?r(p,{top:g.top-e.offset,right:g.right+e.offset,bottom:g.bottom+e.offset,left:g.left-e.offset}):!1;break a}e=r(p,f)}if(e||t(d,b.options.successClass))b.load(d),c.elements.splice(a,1),c.count--,a--}0===c.count&&b.destroy()}function r(b,c){return b.right>=c.left&&b.bottom>=c.top&&b.left<=c.right&&b.top<=c.bottom}function z(b,c,a){if(!t(b,a.successClass)&&(c||a.loadInvisible||0<b.offsetWidth&&0<b.offsetHeight))if(c=b.getAttribute(u)||b.getAttribute(a.src)){c=c.split(a.separator);var d=c[A&&1<c.length?1:0],e=b.getAttribute(a.srcset),g="img"===b.nodeName.toLowerCase(),p=(c=b.parentNode)&&"picture"===c.nodeName.toLowerCase();if(g||void 0===b.src){var h=new Image,w=function(){a.error&&a.error(b,"invalid");v(b,a.errorClass);k(h,"error",w);k(h,"load",f)},f=function(){g?p||B(b,d,e):b.style.backgroundImage='url("'+d+'")';x(b,a);k(h,"load",f);k(h,"error",w)};p&&(h=b,l(c.getElementsByTagName("source"),function(b){var c=a.srcset,e=b.getAttribute(c);e&&(b.setAttribute("srcset",e),b.removeAttribute(c))}));n(h,"error",w);n(h,"load",f);B(h,d,e)}else b.src=d,x(b,a)}else"video"===b.nodeName.toLowerCase()?(l(b.getElementsByTagName("source"),function(b){var c=a.src,e=b.getAttribute(c);e&&(b.setAttribute("src",e),b.removeAttribute(c))}),b.load(),x(b,a)):(a.error&&a.error(b,"missing"),v(b,a.errorClass))}function x(b,c){v(b,c.successClass);c.success&&c.success(b);b.removeAttribute(c.src);b.removeAttribute(c.srcset);l(c.breakpoints,function(a){b.removeAttribute(a.src)})}function B(b,c,a){a&&b.setAttribute("srcset",a);b.src=c}function t(b,c){return-1!==(" "+b.className+" ").indexOf(" "+c+" ")}function v(b,c){t(b,c)||(b.className+=" "+c)}function E(b){var c=[];b=b.root.querySelectorAll(b.selector);for(var a=b.length;a--;c.unshift(b[a]));return c}function C(b){f.bottom=(window.innerHeight||document.documentElement.clientHeight)+b;f.right=(window.innerWidth||document.documentElement.clientWidth)+b}function n(b,c,a){b.attachEvent?b.attachEvent&&b.attachEvent("on"+c,a):b.addEventListener(c,a,{capture:!1,passive:!0})}function k(b,c,a){b.detachEvent?b.detachEvent&&b.detachEvent("on"+c,a):b.removeEventListener(c,a,{capture:!1,passive:!0})}function l(b,c){if(b&&c)for(var a=b.length,d=0;d<a&&!1!==c(b[d],d);d++);}function D(b,c,a){var d=0;return function(){var e=+new Date;e-d<c||(d=e,b.apply(a,arguments))}}var u,f,A,y;return function(b){if(!document.querySelectorAll){var c=document.createStyleSheet();document.querySelectorAll=function(a,b,d,h,f){f=document.all;b=[];a=a.replace(/\[for\b/gi,"[htmlFor").split(",");for(d=a.length;d--;){c.addRule(a[d],"k:v");for(h=f.length;h--;)f[h].currentStyle.k&&b.push(f[h]);c.removeRule(0)}return b}}var a=this,d=a._util={};d.elements=[];d.destroyed=!0;a.options=b||{};a.options.error=a.options.error||!1;a.options.offset=a.options.offset||100;a.options.root=a.options.root||document;a.options.success=a.options.success||!1;a.options.selector=a.options.selector||".b-lazy";a.options.separator=a.options.separator||"|";a.options.containerClass=a.options.container;a.options.container=a.options.containerClass?document.querySelectorAll(a.options.containerClass):!1;a.options.errorClass=a.options.errorClass||"b-error";a.options.breakpoints=a.options.breakpoints||!1;a.options.loadInvisible=a.options.loadInvisible||!1;a.options.successClass=a.options.successClass||"b-loaded";a.options.validateDelay=a.options.validateDelay||25;a.options.saveViewportOffsetDelay=a.options.saveViewportOffsetDelay||50;a.options.srcset=a.options.srcset||"data-srcset";a.options.src=u=a.options.src||"data-src";y=Element.prototype.closest;A=1<window.devicePixelRatio;f={};f.top=0-a.options.offset;f.left=0-a.options.offset;a.revalidate=function(){q(a)};a.load=function(a,b){var c=this.options;void 0===a.length?z(a,b,c):l(a,function(a){z(a,b,c)})};a.destroy=function(){var a=this._util;this.options.container&&l(this.options.container,function(b){k(b,"scroll",a.validateT)});k(window,"scroll",a.validateT);k(window,"resize",a.validateT);k(window,"resize",a.saveViewportOffsetT);a.count=0;a.elements.length=0;a.destroyed=!0};d.validateT=D(function(){m(a)},a.options.validateDelay,a);d.saveViewportOffsetT=D(function(){C(a.options.offset)},a.options.saveViewportOffsetDelay,a);C(a.options.offset);l(a.options.breakpoints,function(a){if(a.width>=window.screen.width)return u=a.src,!1});setTimeout(function(){q(a)})}});

// ============================================================================

   
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
    //   Слайдер с логотипами других проектов застройщика на главной slick slider
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
    })
})();

$(".for_btn_link").on("click", function(e) {
    e.preventDefault();
    $("#realtor-form").fadeToggle();
    
    $("#mainform").toggle();
    // $("#realtor-form").fadeToggle();
});
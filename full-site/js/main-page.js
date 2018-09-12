// Google map start
function initMap() {

    var center = {
        lat: 50.439572,
        lng: 30.515734
    };/*{lat:50.406493, lng: 30.519515};*/

    var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: center,
                scrollwheel: false,
                navigationControl: false,
                mapTypeControl: false,
                scaleControl: false,
                draggable: true,
                styles: [{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","elementType":"all","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"transit","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]}]
            });
    
    var polygonCoords = [
        new google.maps.LatLng(50.433919, 30.513405),
        new google.maps.LatLng(50.433924, 30.512895),
        new google.maps.LatLng(50.433408, 30.512668),
        new google.maps.LatLng(50.433336, 30.513424),
        new google.maps.LatLng(50.433919, 30.513405)
    ];

    // Настройки для полигона
    var polygon = new google.maps.Polygon({
        path: polygonCoords, // Координаты
        strokeColor: '#FF0000',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#FF0000',
        fillOpacity: 0.5
    });

    //Добавляем на карту
    polygon.setMap(map);

    var markersIcons = {
        main: {x: 72, y: 2},
        education: {x: 2, y: 2},
        hospital: {x: 37, y: 2},
        goverment: {x: 125, y: 2},
        shop: {x: 160, y: 2},
        sport: {x: 195,	y: 2},
        subway: {x: 230,y: 2}
    };

    var markers_spritesheet;
    if(document.location.pathname === '/') {
        markers_spritesheet = 'main_page_map_markers_spritesheet.png';
    } else {
        markers_spritesheet = '../main_page_map_markers_spritesheet.png';
    }



    var markersData = [
        {
            content: '<div class="phoneytext"><img  src="/img/chicago-logo.png" width=300px style="padding:40px 0 20px 0;"  alt="Житловий комплекс CHICAGO Central House м. Київ" title="Житловий комплекс CHICAGO Central House м. Київ">'+
                    '<hr>'+
                    '<p>вулиця Антоновича, 44</p>'+
                    '</div>',
            position: {lat: 50.433464, lng: 30.513194},
            type: 'main'
        },
        {
            content: '<div class="phoneytext">Школа №112'+
                    '<hr>'+
                    '<p>вулиця Велика Васильківська</p>'+
                    '</div>',
            position: {lat: 50.431071, lng: 30.514989},
            type: 'education'
        },
        {
            content: '<div class="phoneytext">Медицинский центр'+
                        '<hr>'+
                        '<p>вулиця Фізкультури, 1</p>'+
                        '</div>',
            position: {lat: 50.431409, lng: 30.517968},
            type: 'hospital'
        },
        {
            content: '<div class="phoneytext">Медицинский центр'+
                        '<hr>'+
                        '<p>вулиця Еспланадна, 20</p>'+
                        '</div>',
            position: {lat: 50.437365, lng: 30.520353},
            type: 'hospital'
        },
        {
            content: '<div class="phoneytext">Київський природничо-науковий ліцей № 145'+
                    '<hr>'+
                    '<p>вул. Шота Руставелі, 46</p>'+
                    '</div>',
            position: {lat: 50.434420, lng: 30.517509},
            type: 'education'
        },
        {
            content: '<div class="phoneytext">Школа №78'+
                    '<hr>'+
                    '<p>вул. Шота Руставелі, 47</p>'+
                    '</div>',
            position: {lat: 50.435104, lng: 30.518878},
            type: 'education'
        },
        {
            content: '<div class="phoneytext">Аптека'+
                    '<hr>'+
                    '<p>вулиця Антоновича, 47</p>'+
                    '</div>',
            position: {lat: 50.432204, lng: 30.513893},
            type: 'hospital'
        },
        {
            content: '<div class="phoneytext">Фітнес-клуб "Гран-Прі"'+
                    '<hr>'+
                    '<p>вулиця Володимирська, 101</p>'+
                    '</div>',
            position: {lat: 50.432455, lng: 30.509307},
            type: 'sport'
        },
        {
            content: '<div class="phoneytext">Днз №129 З Яслами (З 2-Х Років)'+
                    '<hr>'+
                    '<p>вулиця Володимирська, 89А</p>'+
                    '</div>',
            position: {lat: 50.435227, lng: 30.510311},
            type: 'education'
        },
        {
            content: '<div class="phoneytext">Конституційний суд України'+
                    '<hr>'+
                    '<p>вулиця Жилянська, 14</p>'+
                    '</div>',
            position: {lat: 50.434428, lng: 30.514355},
            type: 'goverment'
        },
        {
            content: '<div class="phoneytext">Мед. центр Інго'+
                    '<hr>'+
                    '<p>вулиця Велика Васильківська, 54 Б</p>'+
                    '</div>',
            position: {lat: 50.434619, lng: 30.514938},
            type: 'hospital'
        },
        {
            content: '<div class="phoneytext">Медичний відділ Представництва МОМ в Україні'+
                    '<hr>'+
                    '<p>вулиця Антоновича, 16-В</p>'+
                    '</div>',
            position: {lat: 50.437462, lng: 30.512832},
            type: 'hospital'
        },
        {
            content: '<div class="phoneytext">ДНЗ №61 Первоцвіт'+
                    '<hr>'+
                    '<p>вулиця Володимирська, 76</p>'+
                    '</div>',
            position: {lat: 50.437188, lng: 30.508384},
            type: 'education'
        },
        {
            content: '<div class="phoneytext">Киевский національний університет ім. Тараса Шевченка'+
                    '<hr>'+
                    '<p>вулиця Володимирська, 60</p>'+
                    '</div>',
            position: {lat: 50.441975, lng: 30.510380},
            type: 'education'
        },
        {
            content: '<div class="phoneytext">PinchukArtCentre'+
                    '<hr>'+
                    '<p>вул. Велика Васильківська/Басейна, 1/3-2</p>'+
                    '</div>',
            position: {lat: 50.441902, lng: 30.520968},
            type: 'goverment'
        },
        {
            content: '<div class="phoneytext">Бессарабский ринок'+
                    '<hr>'+
                    '<p>Бессарабська площа, 2</p>'+
                    '</div>',
            position: {lat: 50.442371, lng: 30.521550},
            type: 'shop'
        },
        {
            content: '<div class="phoneytext">Національний академічний драматичний театр ім. Івана Франко'+
                    '<hr>'+
                    '<p>площа Івана Франка, 3</p>'+
                    '</div>',
            position: {lat: 50.445601, lng: 30.528247},
            type: 'goverment'
        },
        {
            content: '<div class="phoneytext">'+
                    '<hr>'+
                    '(м) Університет'+
                    '<hr>'+
                    '</div>',
            position: {lat: 50.442966, lng: 30.503661},
            type: 'subway'
        },
        {
            content: '<div class="phoneytext">'+
                    '<hr>'+
                    '(м) Золоті Ворота'+
                    '<hr>'+
                    '</div>',
            position: {lat: 50.448402, lng: 30.513525},
            type: 'subway'
        },
        {
            content: '<div class="phoneytext">'+
                    '<hr>'+
                    '(м) Золоті Ворота'+
                    '<hr>'+
                    '</div>',
            position: {lat: 50.446126, lng: 30.515450},
            type: 'subway'
        },
        {
            content: '<div class="phoneytext">'+
                    '<hr>'+
                    '(м) Театральна'+
                    '<hr>'+
                    '</div>',
            position: {lat: 50.444842, lng: 30.516068},
            type: 'subway'
        },
        {
            content: '<div class="phoneytext">'+
                    '<hr>'+
                    '(м) Хрещатик'+
                    '<hr>'+
                    '</div>',
            position: {lat: 50.447062, lng: 30.525360},
            type: 'subway'
        },
        {
            content: '<div class="phoneytext">'+
                    '<hr>'+
                    '(м) Льва Толстого'+
                    '<hr>'+
                    '</div>',
            position: {lat: 50.440088, lng: 30.518023},
            type: 'subway'
        },
        {
            content: '<div class="phoneytext">'+
                    '<hr>'+
                    '(м) Палац Спорту'+
                    '<hr>'+
                    '</div>',
            position: {lat: 50.439652, lng: 30.519533},
            type: 'subway'
        },
        {
            content: '<div class="phoneytext">'+
                    '<hr>'+
                    '<p>(м) Олімпійська</p>'+ //<p class="met_1">(м)</p> <p>Олімпійська</p>
                    '<hr>'+
                    '</div>',
            position: {lat: 50.432249, lng: 30.516762},
            type: 'subway'
        },
    ];

    var activeInfoBubble;

    markersData.forEach(function(marker) {
        var markerSettings = {};
        if(marker.type === 'main') {
            markerSettings.iconWidth = 49;
            markerSettings.iconHeight = 73;
            markerSettings.backgroundColor = 'rgba(30,14,0,0.5)';
            markerSettings.arrowSize = 0;
            markerSettings.arrowPosition = 96;
            markerSettings.width = 400;
            markerSettings.height = 125;
        } else {
            markerSettings.iconWidth = 31;
            markerSettings.iconHeight = 46;
            markerSettings.backgroundColor = 'rgba(30,14,0,0.7)';
            markerSettings.arrowSize = 10;
            markerSettings.arrowPosition = 30;
        }

        var mapMarker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(marker.position.lat, marker.position.lng),
            icon: new google.maps.MarkerImage(markers_spritesheet, 
                                            new google.maps.Size(markerSettings.iconWidth, markerSettings.iconHeight), 
                                            new google.maps.Point(markersIcons[marker.type].x, markersIcons[marker.type].y)
                                            )
        });

        var infoBubble = new InfoBubble({
            map: map,
            content: marker.content,
            position: new google.maps.LatLng(marker.position.lat, marker.position.lng),
            shadowStyle: 1,
            padding: 0,
            backgroundColor: markerSettings.backgroundColor,
            borderRadius: 4,
            arrowSize: markerSettings.arrowSize,
            borderWidth: 1,
            borderColor: '#ff000b',
            backgroundColor: '#ff000b',
            minWidth: 400,
            minHeight: 100,
            disableAutoPan: true,
            hideCloseButton: true,
            arrowPosition: markerSettings.arrowPosition,
            backgroundClassName: 'phoney',
            arrowStyle: 2
        });

        mapMarker.addListener('click', function() {
            activeInfoBubble&&activeInfoBubble.close();
            infoBubble.open(map, mapMarker);
            activeInfoBubble = infoBubble;
        });
    })

    map.addListener('click', function() {
        activeInfoBubble&&activeInfoBubble.close();
    })
};
// Google map end

$('.modal_close, .main_overlay').click(function(){
    $('main_modal').hide(),
    $('.main_overlay').fadeOut();
});

//menu js
$(document).ready(function(){$("#mobile").click(function(t){$("#minimenu").css("display","block").animate({opacity:1,top:"0%"},200)}),$("#miniclose").click(function(){$("#minimenu").animate({opacity:0,top:"45%"},200,function(){$(this).css("display","none"),$("#overlay").fadeOut(400),$(".content-item").css("height","auto")})}),$("a.ch-reserv").fancybox({}),$("a.button.callback").fancybox({}),$(".form input, .form textarea").blur(function(){$(this).val()?$(this).next().hide():$(this).next().show()})});
//end menu js

// Countdown clock start startClock() function 
$(document).ready(function() {
    function startClock() {
        var clock2;
        var deadline = 'October 5 2017 23:59:59 GMT+02:00';
        //console.log(deadline);
        var t = Date.parse(deadline);
        var time = Date.parse(deadline) - Date.parse(new Date());
        // console.log(time);
        time1 = time/1000;
        // console.log(time1);
        clock2 = $('.clock2').FlipClock({
            clockFace: 'DailyCounter',
            language: 'ukrainian',
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
    };
    
}); //end ready


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


function telephone(queryClass) {
    var elem = $(queryClass);
    var phoneNumber = elem.html();
    var href = 'tel:' + phoneNumber;
    var phoneDisplay = elem.siblings('.phone_display');
    var phoneDisplayLink = phoneDisplay.find('a');
    phoneDisplayLink.attr('href', href);
    phoneDisplayLink.html(phoneNumber);
}
setTimeout(function(){
    telephone('.em_phone');
}, 2000);


function sound_on () {
    var video = document.querySelector("video");
    var sound_on = document.getElementById("sound_on");
    var sound_off = document.getElementById("sound_off");
    video.removeAttribute("muted");
    video.muted = false;
    sound_on.setAttribute("style", "display:block;");
    sound_off.setAttribute("style", "display:none;");
    }
function sound_off () {
    var video = document.querySelector("video");
    var sound_on = document.getElementById("sound_on");
    var sound_off = document.getElementById("sound_off");
    video.muted = true;
    sound_on.setAttribute("style", "display:none;");
    sound_off.setAttribute("style", "display:block;");
    }

    // Родной прелоадер чикаго
    // (function() {
    //     var hellopreloader = document.getElementById("hellopreloader_preload");
    //     function fadeOutnojquery(el){
    //         el.style.opacity = 1;
    //         var interhellopreloader = setInterval(function(){
    //             el.style.opacity = el.style.opacity - 0.05;
    //             if (el.style.opacity <=0.05){ 
    //                 clearInterval(interhellopreloader);
    //                 hellopreloader.style.display = "none";
    //             }
    //         },16);
    //     }
    //     window.onload = function(){
    //         setTimeout(function(){
    //             fadeOutnojquery(hellopreloader);},1000);
    //     };
    // })();

    (function() {
        // Загрузка видео
        var videoContainer = document.querySelector('.video__box');
        var content = '<video class="video_desk" autoplay loop muted ><source src="/video/SAGA_FULL.mp4" type="video/mp4"></video>';
        if(window.innerWidth <=768) {
            content = '<video class="is__mobile" src="/video/SAGA_FULL_mob.mp4" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\' playsinline loop muted autoplay controls></video>';
        }
        videoContainer.innerHTML =content;
    })();
$(function(){

	$('ul.ch-app').on('click', 'li:not(.active)', function () {
        var $gallery_tabs = $('.ch-planapp').children('.ch-planapp__item'),
            $active_tab = $gallery_tabs.eq($(this).index());
        $(this).addClass('active').siblings().removeClass('active');
        $gallery_tabs.removeClass('active');
        $active_tab.addClass('active');
    });

});


// $(function(){
// 	function tabs() {
// 		var $gallery_tabs = $('.ch-planapp').children('.ch-planapp__item'),
// 	            $active_tab = $gallery_tabs.eq($(this).index());
// 	        $(this).addClass('active').siblings().removeClass('active');
// 	        $gallery_tabs.removeClass('active');
// 	        $active_tab.addClass('active');
// 	}

// 	$('ul.ch-app').on('click', 'li:not(.active)', function () {
//         tabs();
//     });
	
// });


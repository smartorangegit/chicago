<?php include_once('../../includes/utm.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ CHICAGO Central House 》Panorama | CHICAGO Central House Residential Estate</title>
	<meta name="robots" content="index, follow">
	<meta name="description" content="✅ 【CHICAGO Central House】 A bird's eye view on the downtown of Kiev from CHICAGO Central House ✅ 【CHICAGO】">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/panorama/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/panorama/" />
  <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/panorama/" />
  <link rel="stylesheet" href="/css/full.css">
  <link rel="stylesheet" href="/css/style.css">
	<link rel="image_src" href="/panor/indexdata/thumbnail.jpg" />
	<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta property="og:title" content="≡ CHICAGO Central House 》Panorama | CHICAGO Central House Residential Estate" />
	<meta property="og:description" content="✅ 【CHICAGO Central House】 A bird's eye view on the downtown of Kiev from CHICAGO Central House ✅ 【CHICAGO】" />
	<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
<?php /*Google Tag Manager*/ include_once('../../includes/header_en.php'); ?>
    <!-- MAPS -->
<style type="text/css">
	@-ms-viewport { width: device-width; }
	@media only screen and (min-device-width: 800px) { html { overflow:hidden; } }
	* { padding: 0; margin: 0; }
	html { height: 100%; }
	body { height: 100%; overflow:hidden; min-width: 0; padding-top: 70px!important; box-sizing: border-box;
	background:rgba(255, 0, 11, 0.8);}
	div#container { height: 100%; min-height: 100%; width: 100%; margin: 0 auto; }
	div#tourDIV {
		height:100%;
		position:relative;
		overflow:hidden;
	}
	div#panoDIV {
		height:100%;
		position:relative;
		overflow:hidden;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-o-user-select: none;
		user-select: none;
	}
	@media only screen and (min-device-width: 280px) and (max-device-width: 480px) { .header { display: none; } }
</style>
<!--[if !IE]><!-->
<script type="text/javascript" src="/panor/indexdata/lib/jquery-2.1.1.min.js"></script>

<style type="text/css">
	div#panoDIV.cursorMoveMode {
		cursor: move;
		cursor: url(/panor/indexdata/graphics/cursors_move_html5.cur), move;
	}
	div#panoDIV.cursorDragMode {
		cursor: grab;
		cursor: -moz-grab;
		cursor: -webkit-grab;
		cursor: url(/panor/indexdata/graphics/cursors_drag_html5.cur), default;
	}
	div.exit{
		position: absolute;
    bottom: 1px;
    z-index: 9999;
		left: 20px;
		bottom: 20px;
		color: red;
		text-transform: uppercase;
	}

</style>

<script type="text/javascript">
	function webglAvailable() {
		try {
			var canvas = document.createElement("canvas");
			return !!window.WebGLRenderingContext && (canvas.getContext("webgl") || canvas.getContext("experimental-webgl"));
		} catch(e) {
			return false;
		}
	}
	function getWmodeValue() {
		var webglTest = webglAvailable();
		if(webglTest){
			return 'direct';
		}
		return 'opaque';
	}
	function readDeviceOrientation() {
		// window.innerHeight is not supported by IE
		var winH = window.innerHeight ? window.innerHeight : jQuery(window).height();
		var winW = window.innerWidth ? window.innerWidth : jQuery(window).width();
		//force height for iframe usage
		if(!winH || winH == 0){
			winH = '100%';
		}
		// set the height of the document
		jQuery('html').css('height', winH);
		// scroll to top
		window.scrollTo(0,0);
	}
	jQuery( document ).ready(function() {
		if (/(iphone|ipod|ipad|android|iemobile|webos|fennec|blackberry|kindle|series60|playbook|opera\smini|opera\smobi|opera\stablet|symbianos|palmsource|palmos|blazer|windows\sce|windows\sphone|wp7|bolt|doris|dorothy|gobrowser|iris|maemo|minimo|netfront|semc-browser|skyfire|teashark|teleca|uzardweb|avantgo|docomo|kddi|ddipocket|polaris|eudoraweb|opwv|plink|plucker|pie|xiino|benq|playbook|bb|cricket|dell|bb10|nintendo|up.browser|playstation|tear|mib|obigo|midp|mobile|tablet)/.test(navigator.userAgent.toLowerCase())) {
			if(/iphone/.test(navigator.userAgent.toLowerCase()) && window.self === window.top){
				jQuery('body').css('height', '100.18%');
			}
			// add event listener on resize event (for orientation change)
			if (window.addEventListener) {
				window.addEventListener("load", readDeviceOrientation);
				window.addEventListener("resize", readDeviceOrientation);
				window.addEventListener("orientationchange", readDeviceOrientation);
			}
			//initial execution
			setTimeout(function(){readDeviceOrientation();},10);
		}
	});

	function accessWebVr(){
		unloadPlayer();

		setTimeout(function(){ loadPlayer(true); }, 100);
	}
	function accessStdVr(){
		unloadPlayer();

		setTimeout(function(){ loadPlayer(false); }, 100);
	}
	function loadPlayer(isWebVr) {
		if (isWebVr) {
			embedpano({
				id:"krpanoSWFObject"
				,xml:"/panor/indexdata/index_vr.xml"
				,target:"panoDIV"
				,passQueryParameters:true
				,bgcolor:"#000000"
				,html5:"only+webgl"
				,vars:{skipintro:true,norotation:true}
			});
		} else {
			embedpano({
				id:"krpanoSWFObject"

				,swf:"/panor/indexdata/index.swf"

				,target:"panoDIV"
				,passQueryParameters:true
				,bgcolor:"#000000"
				,html5:"prefer"
			});
		}
		//apply focus on the visit if not embedded into an iframe
		if(top.location === self.location){
			kpanotour.Focus.applyFocus();
		}
	}
	function unloadPlayer(){
		if(jQuery('#krpanoSWFObject')){
			removepano('krpanoSWFObject');
		}
	}
		function isVRModeRequested() {
		var querystr = window.location.search.substring(1);
		var params = querystr.split('&');
		for (var i=0; i<params.length; i++){
			if (params[i].toLowerCase() == "vr"){
				return true;
			}
		}
		return false;
	}
</script>

</head>
<body>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>

<div class="exit">
	<a  href="/en/">&larr; back to site</a>
</div>


			<?php include('../../includes/form_callback_en.php'); ?>
		<div id="container">

			<div id="tourDIV">
				<div id="panoDIV">
					<noscript>

						<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="100%" height="100%" id="/panor/indexdata/index">
							<param name="movie" value="/panor/indexdata/index.swf"/>
							<param name="allowFullScreen" value="true"/>
							<!--[if !IE]>-->
							<object type="application/x-shockwave-flash" data="/panor/indexdata/index.swf" width="100%" height="100%">
								<param name="movie" value="/panor/indexdata/index.swf"/>
								<param name="allowFullScreen" value="true"/>
								<!--<![endif]-->
								<a href="http://www.adobe.com/go/getflash">
									<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player to visualize the Virtual Tour : New Project (Virtual tour generated by Panotour)"/>
								</a>
							<!--[if !IE]>-->
							</object>
							<!--<![endif]-->
						</object>

					</noscript>
				</div>

				<script type="text/javascript" src="/panor/indexdata/index.js"></script>
				<script type="text/javascript">
					if (isVRModeRequested()){
						accessWebVr();
					}else{
						accessStdVr();
					}
				</script>
			</div>
		</div>

	<!-- <iframe src="http://magelangis.com/Pano/Antonovicha44/" width="100%" height="100%" align="left"  style="border-style: none;width: 100%; margin-top: 50px;">
	</iframe> -->
	<script src="/js/snapSliderFancy.js"></script>
	<script src="/js/scripts.js"></script>
	
</body>
</html>

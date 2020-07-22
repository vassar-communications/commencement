<!DOCTYPE html>
<html id="page" class="no-js loading <?php if($page_classes) echo $page_classes; ?>">
	<head>
<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-301357-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-301357-5');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WCS4M7');</script>
<!-- End Google Tag Manager -->
		<title><?php echo $page_title; ?> - Commencement</title>
		<!-- <meta charset="UTF-8"> -->
		<meta charset="utf-8"><meta content="width=device-width,initial-scale=1" name="viewport"> 

<?php $site_title = "Vassar College One Hundred Fifty-Sixth Commencement"; ?>
<?php $site_description = "Conferring of Degrees Sunday, May 24, 2020, at Ten O’Clock (EDT)"; ?>
<?php $site_image = "https://www.vassar.edu/commencement/assets/images/156th-commencemnt-standard.jpg"; ?>
<?php $page_url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<meta name="Description" content="<?php echo $site_description; ?>"><meta name="twitter:card" content="summary">
<meta name="twitter:description" content="<?php echo $site_description; ?>">
<meta name="twitter:creator" content="@vassar"><meta name="twitter:site" content="@vassar"><meta property="og:site_name" content="<?php echo $site_title; ?>"><meta property="og:image" content="<?php echo $site_image; ?>"><meta property="og:title" content="<?php echo $site_title; ?>"><meta property="og:description" content="<?php echo $site_description; ?>"><meta property="og:type" content="website"><meta property="og:url" content="<?php echo $page_url; ?>"><meta property="fb:admins" content="799150191"><meta property="fb:app_id" content="163441663429">

		<script>
			// var the_page = document.getElementById('page');
			// window.addEventListener('load', function () {
			//	the_page.classList.add('js');
			// }, false);
		</script>
		<script
		  src="https://code.jquery.com/jquery-3.4.1.js"
		  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
		  crossorigin="anonymous"></script>
		  <!--<script src="https://cdn.rawgit.com/wnda/pivot/master/pivot.js"></script>-->
		  <script src="/commencement/assets/js/viewbox.js"></script>

		  <!--
		  <script src="/commencement/assets/js/flickity/flickity.js"></script>
		  <link rel="stylesheet" href="/commencement/assets/js/flickity/flickity.css">
		  -->

		  <script src="/commencement/assets/js/site.js"></script>

			<script>

			$(document).ready(function(){

				/*	Detect the problem ones */

				var iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
				if(iOS) { 
					$('html').addClass('ios');
				}

				var isFirefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;				
				if(isFirefox) { 
					$('html').addClass('wtff');
				}
				
				
				/*	Player *
				$('.play_btn').on("click", function(){
	
					var the_player = $("#music")[0];
					
//					  $('.play_btn').toggleClass('paused');
					  	
					if (the_player.paused == false) {
					  the_player.pause();
					  $('.play_btn').addClass('paused').removeClass('playing');

					} else {
					  the_player.play();
					  $('.play_btn').removeClass('paused').addClass('playing');
					}
				}); */
				
			});				
			</script>		  		 
		<link rel="stylesheet" href="https://use.typekit.net/hls7olm.css">
		<link rel="stylesheet" href="/commencement/assets/css/site.css" />
		<style>
			a.video-tile {
			    position: relative;
			}
			a.video-tile:hover {
			    color: #aaa !important;
			}
			.ios .bg-image {
				position: absolute;
			}
			details summary::-webkit-details-marker {
				display:none;
			}			
			details summary::-moz-details-marker {
				display:none;
			}			
			details summary:marker {
				display:none;
			}			
			summary::-moz-list-bullet {
				list-style-type: none;
				display: block;
			}
			.section--cover-img .bg-image-wrapper img,
			.section--bg-image .bg-image-wrapper img {
				display: none;
				position: absolute;
			}
	</style>
	</head>
	<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCS4M7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


		<!-- <div class="preload-images" style="opacity: 0; position: absolute; z-index: -1;">
			<img src="/commencement/assets/images/soundtrack-icon-off.png" />
			<img src="/commencement/assets/images/soundtrack-icon-on.png" />
		</div>
		<audio preload="auto" id="music" src="/commencement/assets/audio/music.mp3"></audio>
		<audio preload="auto" id="swoosh" src="/commencement/assets/audio/swoosh.mp3"></audio> -->		

		<div class="masthead">
			<a class="vassar__logo" href="https://www.vassar.edu/">
				<img src="/commencement/assets/images/vassar-logo.png" alt="Vassar College" />
			</a>
		</div>
		
		<div class="nav" id="nav">
			<a class="nav__btn" href="#nav"><b class="nav-btn__label">Menu</b></a>
			<div class="nav__panel">
				<a href="#" class="nav-close-btn">
					<b class="nav-btn__label">Close</b>
				</a>
				<ul class="nav__menu">
					<li class="nav__item"><a href="/commencement/">Home</a></li>
					<li class="nav__item"><a href="/commencement/ceremony/">Ceremony</a></li>
                    <li class="nav__item"><a href="/commencement/ceremony/program.html">Program</a></li>
                    <li class="nav__item"><a href="/commencement/ceremony/conferring-of-degrees.html">Degrees</a></li>
                    <li class="nav__item"><a href="/commencement/weekend/">Weekend</a></li>
				</ul>
			</div>
		</div>

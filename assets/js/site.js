$(window).on('load',function(){
	$('html').addClass('loaded').removeClass('loading');

	$( ".nav__btn" ).click(function() {
		$('html').toggleClass('nav-open');
			// $("#swoosh")[0].play();

	});
}); 
$( document ).ready(function() {
    if (window.navigator.userAgent.indexOf("Edge") > -1) {
        $('html').addClass('is-edge');
    }
	$('html').addClass('js').removeClass('no-js');

//	alert('a');

    if (window.navigator.userAgent.indexOf("CriOS") > -1) {
        $('html').addClass('is-ios-chrome');
    }
	$('html').addClass('js').removeClass('no-js');


	var iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
					
	if(iOS) { 
		$('html').addClass('ios, is-ios');
	}    

	var is_safari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
	if(is_safari) jQuery( 'html' ).addClass( 'is-safari' );

	
	/* 
    $('.main-carousel').flickity({
	  // options
	  cellAlign: 'left',
	  contain: true
	});
	*/
    
	
	/*	lightbox */
	
	$( ".viewbox" ).click(function() {
		//	is this an image or a video embed?
		var bob = this.attr('data-type');
		
		// alert(bob);
	});
	
	
	/*	click to load iframe */

	function iframe_embed(the_url) {
		var template = '<div class="u-Video"><iframe src="[[URL]]" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>';
		var final_markup = template.replace("[[URL]]", the_url);
		return final_markup;
	}
	
	
	$( ".load-btn" ).click(function() {
		var markup = '<iframe id="map_frame" width="100%" height="100%" src="https://map.concept3d.com/?id=699#!t/2738:1" frameborder="0" scrolling="no" border="0" allow="geolocation"></iframe>';
		
		$(this).addClass('begone');
		$( ".section--full-iframe" ).append( markup );

		$('.section--full-iframe').addClass('show-load-screen');		
		$(function(){
		    $('iframe').on('load', function(){ 
			    $( '.section--full-iframe' ).removeClass('show-load-screen').addClass('iframe-loaded');
		    });
		});
		
	});
	
	
	
	/*	waypoints */

	var waypoint = new Waypoint({
		element: document.getElementById('page'),
		handler: function(direction) {
			var header = jQuery('html');
			if(direction=='down') {
				header.removeClass("notscrolled").addClass("scrolled")
			}
			else {
				header.addClass("notscrolled").removeClass("scrolled")				
			}
		},
		offset: '-1%'
	});
	
	var discreteElements = document.getElementsByClassName('animate-this')
	for (var i = 0; i < discreteElements.length; i++) {
		new Waypoint({
			element: discreteElements[i],
			handler: function() {
				this.element.classList.add("top-50pfrom-topOfWindow");
				//$('.main-carousel').flickity('resize');
			},
//			context: document.getElementById('page-content'),
			offset: '50%'
		});
	}
	var discreteElements = document.getElementsByClassName('animate-this')
	for (var i = 0; i < discreteElements.length; i++) {
		new Waypoint({
			element: discreteElements[i],
			handler: function() {
				this.element.classList.add("top-66pfrom-topOfWindow");
			},
//			context: document.getElementById('page-content'),
			offset: '66%'
		});
	}
	var discreteElements = document.getElementsByClassName('animate-this')
	for (var i = 0; i < discreteElements.length; i++) {
		new Waypoint({
			element: discreteElements[i],
			handler: function() {
				this.element.classList.add("top-hits-topOfWindow");
			},
//			context: document.getElementById('page-content'),
			offset: '-10px'
		});
	}



	/*	pivot 

	pivot.init({
		selector: ".video-tile",
		shine: true,
		shadow: true,
		transition: {
			prop: "transform, background-color",
			duration:"0.5s",
			timing:[0.4,1,0.3,1]
		}
	});
	*/


});


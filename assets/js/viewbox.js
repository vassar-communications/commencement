function video_embed(the_url) {
  var template = '<div class="u-Video"><iframe src="[[URL]]" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>';
  var final_markup = template.replace("[[URL]]", the_url);
  return final_markup;
}

$(document).on('keydown', function(event) {
   if (event.key == "Escape") {
	 close_vb_modal();
   }
});


function close_vb_modal() {
  //  remove the class
  $( 'html' ).removeClass('vb-active');

  //  and clear the media
  $( '.vb-media' ).empty();	 
}

$( document ).ready(function() {
  
  /*  SETUP */
  //  First, define the template
  var markup = '<div class="vb-container"><div class="vb-close-wrapper"><input class="vb-close input--click-area" type="button" label="Close"></div><div class="vb-content"><h2 class="vb-title">title</h2><div class="vb-media"></div><div class="vb-caption"></div></div></div>';
  
  //  and then add that markup to the page
  $( "body" ).append( markup );

  //  we don't want viewbox links to actually go anywhere
  //  So go over all the viewbox links and remove the href.
  //  But save it as an attribute - we'll need it later
  
  $( ".viewbox-link" ).each(function( index ) {
		var vb_href = $(this).attr('href');
		$( this ).attr( "data-href", vb_href );
		$( this ).attr( "tabindex", "0" );
		
		$(this).removeAttr('href');
  });
  
  /*  Set up the close box */
  
  $( ".vb-close" ).click(function() {
	close_vb_modal();
  });
  
  /*  AFTER A CLICK */
  
  $( ".viewbox-link" ).click(function() {
	//	is this an image or a video embed?
	var vb_dataType = $(this).attr('data-type');
	var vb_src = $(this).attr('data-href');
	var vb_title = $(this).attr('data-title');
	var vb_caption = $(this).attr('data-caption');
	
	if (vb_dataType == 'video') {
		/*
			The video iframe take a bit to load. 
		*/
		//	
		$('html').addClass('show-load-screen');		
		$(function(){
		    $('iframe').on('load', function(){ 
			    $('html').removeClass('show-load-screen').addClass('vb-video-loaded vb-active');
		    });
		});
		

	  //  set up the embed markup
	  var video_markup = video_embed(vb_src);
	  
	  //  now add the markup to the modal
	  $( '.vb-media' ).append( video_markup );
	  $( '.vb-title' ).html( vb_title );
	  $( '.vb-caption' ).html( vb_caption );
	}
	
	//	tell the page a viewbox is being displayed
	//	$( 'html' ).addClass('vb-active');
	
  });
});

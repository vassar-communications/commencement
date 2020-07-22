<?php
$the_path = getcwd();
	
function video_tile($title, $type, $href, $caption, $img) {
$markup = <<<EOT
	<a class="video-tile viewbox-link" data-title="$title" data-caption="$caption" data-type="$type" href="$href"><b class="tile__title">$title</b>
		<img src="/commencement/assets/images/360s/$img" />
	</a>
EOT;
	return $markup;
}
function story_item($link, $title, $caption, $img) {
$markup = <<<EOT
	<div class="media media--story-item">
		<div class="media__header">
			<a href="$link"><h3 class="media__title">$title</h3></a>
		</div>
		<div class="media__figure ">
			<a href="$link"><img src="/commencement/assets/images/stories/$img"></a>
		</div>
		
		<div class="media__content">
			<p>$caption</p>
		</div>
	</div>
EOT;
	return $markup;
}



function placeholder($img) {
	echo video_tile("Video title", "video", "https://www.youtube.com/embed/2BN09cpCz_I", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", $img);
}


function join_the_convo() {
$markup = <<<EOT
			<div class="section section--social animate-this section--bg-image theme-cream section--fit-screen">
				<div class="section__inner">
					<h2 class="grad-darkburg-red">Congratulations!</h2>
					<div class="section__content">

						<p class="intro text-center">Tag your posts using #Vassar2020</p>
						
						<div class="foursquare">
							<div class="fsq__item">
								<a href="https://www.facebook.com/vassarcollege/">
									<img src="/commencement/assets/images/social/icon-facebook.png" alt="Facebook" />
								</a>
							</div>
							<div class="fsq__item">
								<a href="https://twitter.com/Vassar">
									<img src="/commencement/assets/images/social/icon-twitter.png" alt="Twitter" />
								</a>
							</div>
							<div class="fsq__item">
								<a href="https://www.instagram.com/vassarcollege/">
									<img src="/commencement/assets/images/social/icon-insta.png" alt="Instagram" />
								</a>
							</div>
							<div class="fsq__item">
								<a href="https://www.youtube.com/user/Vassar">
									<img src="/commencement/assets/images/social/icon-youtube.png" alt="YouTube" />
								</a>
							</div>
						</div>
						<!-- <p class="intro text-center">You belong here! <a href="https://www.vassar.edu/congrats2024/">Reserve your place in the Class of 2024.</a></p> -->
						
						<!-- <div class="musicbox">
							<input type="button" class="play_btn paused" value="Play Music" />
							<p class="musicbox__text">“Seven Bridges Road” by the Vassar Devils, one of Vassar’s acappella groups.</p>
						</div> -->
					</div>
				</div>
				<div class="bg-image-wrapper" style="background-image: url(/commencement/assets/images/footer-hat-toos-0081-18-05-ss2-commencement-vassar-1045.jpg)">
                <img class="bg-image" src="/commencement/assets/images/footer-hat-toos-0081-18-05-ss2-commencement-vassar-1045.jpg" />
                <!--<img class="bg-image" src="/commencement/assets/images/join-the-convo-0149_16_08_BL_6123.jpg" />-->
				</div>
			</div>

EOT;
	return $markup;
}

?>
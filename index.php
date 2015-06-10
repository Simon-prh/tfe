<?php


//include config
require_once('includes/config.php');

//define page title
$title = 'Demo';

//include header template
require('includes/header.php'); 

?>
		
		<main class="intro lol">
			<video class="video_background format" preload="auto" autoplay > 
					<source src="videos/intro.mp4" type="video/mp4"> 
					<source src="videos/intro.ogv" type="video/ogg"> 
					<source src="videos/intro.webm" type="video/webm"> 
					Video not supported
			</video>
				<section class="intro_txt">
					<h1 class="logo">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="194px" height="168px" viewBox="0 0 194 168" enable-background="new 0 0 194 168" xml:space="preserve">
						<polygon class="anim_logo" id="triangle1" fill="none" stroke="#928452" stroke-width="8" stroke-miterlimit="10" points="7.135,164 96.834,8.634 186.533,164 "/>
						<polygon class="anim_logo" id="triangle2" fill="none" stroke="#928452" stroke-width="5" stroke-miterlimit="10" points="31.986,149.5 96.834,37.179 
							161.682,149.5 "/>
						<polygon class="anim_logo" id="triangle3" fill="none" stroke="#928452" stroke-width="3" stroke-miterlimit="10" points="45.329,142.5 96.834,53.292 
							148.339,142.5 "/>
						<polygon class="anim_logo" id="triangle4" fill="#928452" points="51.714,139 96.834,60.849 141.954,139 "/>
						</svg>
					</h1>

					<h1 class="name">Rewind</h1>

					<h2 class="slogan">movies <strong>felt better</strong> back then.</h2>
					<h2 class="feel">9 <strong>old movies</strong> a week</h2>
					<h2 class="feel"><strong>Watch</strong> through your <strong>emotions</strong></h2>
					<h2 class="feel">And <strong>feel</strong></h2>
					<h2 class="feel">Surprise</h2>
					<h2 class="feel">Joy</h2>
					<h2 class="feel">Fear</h2>
					<h2 class="feel">Anger</h2>
					<h2 class="feel">Melancholy</h2>
					<h2 class="feel">Envy</h2>
					<h2 class="feel">Empathy</h2>
					<h2 class="feel">Anxiety</h2>
					<h2 class="feel">Passion</h2>
				
				</section>
				<a class="clickit" id="next" href="selection.php">Skip</a>

		</main>
		
<?php require('includes/footer.php'); ?>
	
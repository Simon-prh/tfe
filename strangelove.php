<?php


//include config
require_once('includes/config.php');

$data = file_get_contents('http://www.omdbapi.com/?t=dr+strangelove&y=&plot=short&r=json');
$data = json_decode($data, true);

//define page title
$title = 'Dr. Strangelove - Rewind';

//include header template
require('includes/header.php'); 

?>
	<body>
		
		<div class="container">
			<!-- navigation -->
			<?php $page = "selection";
			 require('includes/nav.php');  ?>
			<!-- end navigation -->
			<header>	
					<video class="video_extrait format" preload="auto" autoplay loop > 
						<source src="videos/strangelove_extrait.mp4" type="video/mp4"> 
						<source src="videos/strangelove_extrait.ogv" type="video/ogg"> 
						<source src="videos/strangelove_extrait.webm" type="video/webm"> 
						Video not supported
					</video>
					<h1>This week <strong>#joy</strong><br>
						<span class="moviename">The Cabinet of Dr. Caligari</span><br>
						<span class="productor">(by <strong>Stanley Kubrick</strong>, 1964)<span>
					</h1>


			</header>
			
			<main class="thisweek clearfix">
				<section class="synopsis">
				
					<h2>Once upon a time</h2>
					<div class="info-wrapper clearfix">
						<p>General Jack D. Ripper is suffering from paranoia. He strongly believes that Russia is about to attack the free world.
						 To prevent the imminent attack, General Ripper decides to go rogue and execute a nuclear 
						strike against Russia without informing the President. </p>
						<p>It seems that everything is lost as the strike cannot be called off and Ripper
						 has locked the base down making it nearly impossible to penetrate.</p>
						<ul class="clearfix">
							<li class="infos clearfix"><span>Directed by - </span><span><?php echo $data['Director']; ?></span></li>
							<li class="infos clearfix"><span>Genre - </span><span><?php echo $data['Genre']; ?></span></li>
							<li class="infos clearfix"><span>Staring - </span><span><?php echo $data['Actors']; ?></span></li>
							<li class="infos clearfix"><span>Released on - </span><span><?php echo $data['Released']; ?></span></li>
							
							<li class="infos clearfix"><span >IMDB rating ( /10) - </span><span class="rated"><?php echo $data['imdbRating']; ?></span> </li>
						</ul>
					</div>

					
				</section>
				<section class="videoContainer">
						<h2 class="whitetitle" >Take a seat</h2>
						<div class="video-wrapper">
					    	<video id="movies" class="movies" controls preload="auto" poster="img/poster.jpg">
						     	
						     	
							<source src="https://ia601709.us.archive.org/10/items/DRStrangelove_20130616/DR%20Strangelove.mp4" type="video/mp4"> 
							<source src="https://ia801709.us.archive.org/10/items/DRStrangelove_20130616/DR%20Strangelove.ogv" type="video/ogg">
								
							</video>
							<div class="loading">
								<img src="img/loading.gif">
								<p>theater preparation...</p>
							</div>

							<div class="control clearfix">
								<div class="progress-bar">
										<div class="progress">
											<span class="bufferBar"></span>
											<span class="timeBar"></span>
										</div>
								</div>
								<div class="btmControl clearfix">
									<div class="btnPlay btn" title="Play/Pause video">
										<span class="icon-play"></span>
									</div>
									<div class="current-time clearfix">
										<span  class="current"></span>

										<span class="duration"></span>
									</div>
									<div class="btnFS btn" title="Switch to full screen">
										<span class="icon-fullscreen"></span>
									</div>
									<div class="volume" title="Set volume">
										<span class="volumeBar"></span>
									</div>
									<div class="sound sound2 btn" title="Mute/Unmute sound">
										<span class="icon-sound"></span>
									</div>

								</div>
							
							</div>

						</div>
						
						
					</section>
				<section class="levelof">
					<h2 class="whitetitle" onclick="scene1Strangelove()">Can you feel the joy?</h2>
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="431px" height="181px" viewBox="0 0 431 181" enable-background="new 0 0 431 181" xml:space="preserve">
						<polyline fill="none" stroke="#928452" stroke-width="1" stroke-miterlimit="10" points="0,87.5 38.833,87.5 43.463,58.392 47.937,98.714 
							51.083,90.188 52.25,93.26 55.333,87.5 80.625,87.5 82.75,80.75 84.25,83.541 87.25,73.438 92.583,94.51 94.75,87.859 97.5,98.189 
							103.734,6.779 115.25,180.756 119.467,87.5 186.833,87.5 191.463,58.392 195.937,98.714 199.083,90.188 200.25,93.26 203.333,87.5 
							254.834,87.5 259.463,58.392 263.937,98.714 267.084,90.188 268.25,93.26 271.334,87.5 296.625,87.5 298.75,80.75 300.25,83.541 
							303.25,73.438 308.584,94.51 310.75,87.859 313.5,98.189 319.734,6.779 331.25,180.756 335.467,87.5 402.834,87.5 407.463,58.392 
							411.937,98.714 415.084,90.188 416.25,93.26 419.334,87.5 431,87.5 "/>
						<g class="more_click1" onclick="scene1Strangelove()">
							<circle fill="#FFFFFF" cx="43.563" cy="55.5" r="1.897"/>
							<radialGradient id="SVGID_1_" cx="43.5625" cy="55.5" r="3.6433" gradientUnits="userSpaceOnUse">
								<stop  offset="0" style="stop-color:#FFFFFF;stop-opacity:0.4"/>
								<stop  offset="0.0855" style="stop-color:#FFFFFF;stop-opacity:0.3975"/>
								<stop  offset="0.6727" style="stop-color:#FFFFFF;stop-opacity:0.38"/>
								<stop  offset="1" style="stop-color:#FFFFFF;stop-opacity:0"/>
							</radialGradient>
							<circle fill="url(#SVGID_1_)" cx="43.563" cy="55.5" r="3.644"/>
							<circle fill="none" stroke="#FFFFFF" stroke-width="0.25" stroke-miterlimit="10" cx="43.563" cy="55.5" r="4.895"/>
						</g>
						<g class="more_click3">
							<circle fill="#FFFFFF" cx="191.563" cy="55.5" r="1.897"/>
							<radialGradient id="SVGID_2_" cx="191.5625" cy="55.5" r="3.6433" gradientUnits="userSpaceOnUse">
								<stop  offset="0" style="stop-color:#FFFFFF;stop-opacity:0.4"/>
								<stop  offset="0.0855" style="stop-color:#FFFFFF;stop-opacity:0.3975"/>
								<stop  offset="0.6727" style="stop-color:#FFFFFF;stop-opacity:0.38"/>
								<stop  offset="1" style="stop-color:#FFFFFF;stop-opacity:0"/>
							</radialGradient>
							<circle fill="url(#SVGID_2_)" cx="191.563" cy="55.5" r="3.644"/>
							<circle fill="none" stroke="#FFFFFF" stroke-width="0.25" stroke-miterlimit="10" cx="191.563" cy="55.5" r="4.895"/>
						</g>
						<g class="more_click4">
							<circle fill="#FFFFFF" cx="259.563" cy="55.5" r="1.896"/>
							<radialGradient id="SVGID_3_" cx="259.5625" cy="55.5" r="3.6433" gradientUnits="userSpaceOnUse">
								<stop  offset="0" style="stop-color:#FFFFFF;stop-opacity:0.4"/>
								<stop  offset="0.0855" style="stop-color:#FFFFFF;stop-opacity:0.3975"/>
								<stop  offset="0.6727" style="stop-color:#FFFFFF;stop-opacity:0.38"/>
								<stop  offset="1" style="stop-color:#FFFFFF;stop-opacity:0"/>
							</radialGradient>
							<circle fill="url(#SVGID_3_)" cx="259.563" cy="55.5" r="3.644"/>
							<circle fill="none" stroke="#FFFFFF" stroke-width="0.25" stroke-miterlimit="10" cx="259.563" cy="55.5" r="4.895"/>
						</g>
						<g class="more_click6">
							<circle fill="#FFFFFF" cx="407.563" cy="55.5" r="1.896"/>
							<radialGradient id="SVGID_4_" cx="407.5625" cy="55.5" r="3.6433" gradientUnits="userSpaceOnUse">
								<stop  offset="0" style="stop-color:#FFFFFF;stop-opacity:0.4"/>
								<stop  offset="0.0855" style="stop-color:#FFFFFF;stop-opacity:0.3975"/>
								<stop  offset="0.6727" style="stop-color:#FFFFFF;stop-opacity:0.38"/>
								<stop  offset="1" style="stop-color:#FFFFFF;stop-opacity:0"/>
							</radialGradient>
							<circle fill="url(#SVGID_4_)" cx="407.563" cy="55.5" r="3.644"/>
							<circle fill="none" stroke="#FFFFFF" stroke-width="0.25" stroke-miterlimit="10" cx="407.563" cy="55.5" r="4.895"/>
						</g>
						<g class="more_click2">
							<circle fill="#FFFFFF" cx="103.7" cy="7.5" r="2.252"/>
							<radialGradient id="SVGID_5_" cx="103.7002" cy="7.5" r="4.3257" gradientUnits="userSpaceOnUse">
								<stop  offset="0" style="stop-color:#FFFFFF;stop-opacity:0.4"/>
								<stop  offset="0.0855" style="stop-color:#FFFFFF;stop-opacity:0.3975"/>
								<stop  offset="0.6727" style="stop-color:#FFFFFF;stop-opacity:0.38"/>
								<stop  offset="1" style="stop-color:#FFFFFF;stop-opacity:0"/>
							</radialGradient>
							<circle fill="url(#SVGID_5_)" cx="103.7" cy="7.5" r="4.327"/>
							<circle fill="none" stroke="#FFFFFF" stroke-width="0.25" stroke-miterlimit="10" cx="103.7" cy="7.5" r="5.812"/>
						</g>
						<g class="more_click5">
							<circle fill="#FFFFFF" cx="319.7" cy="7.5" r="2.252"/>
							<radialGradient id="SVGID_6_" cx="319.7002" cy="7.5" r="4.3259" gradientUnits="userSpaceOnUse">
								<stop  offset="0" style="stop-color:#FFFFFF;stop-opacity:0.4"/>
								<stop  offset="0.0855" style="stop-color:#FFFFFF;stop-opacity:0.3975"/>
								<stop  offset="0.6727" style="stop-color:#FFFFFF;stop-opacity:0.38"/>
								<stop  offset="1" style="stop-color:#FFFFFF;stop-opacity:0"/>
							</radialGradient>
							<circle fill="url(#SVGID_6_)" cx="319.7" cy="7.5" r="4.327"/>
							<circle fill="none" stroke="#FFFFFF" stroke-width="0.25" stroke-miterlimit="10" cx="319.7" cy="7.5" r="5.812"/>
						</g>
					</svg>
					<div class="blur">
						<section class="more moment1">
							<div class="apercu"><img src="img/test3.jpg"></div>
							<h3>11:02</h3>
							<p class="moments alinea">Descrption of the the scene and why it is related to the emotion. More informations can be found as well like the actors and so on.</p><p class="moments">List of the actors in this scene</p>
							
						</section>

						<section class="more moment2">
							<div class="apercu"><img src="img/test3.jpg"></div>
							<h3>28:38</h3>
							<p class="moments alinea">Descrption of the the scene and why it is related to the emotion. More informations can be found as well like the actors and so on.</p><p class="moments">List of the actors in this scene</p>
							
						</section>
						<section class="more moment3">
							<div class="apercu"><img src="img/test3.jpg"></div>
							<h3>36:41</h3>
							<p class="moments alinea">Descrption of the the scene and why it is related to the emotion. More informations can be found as well like the actors and so on.</p><p class="moments">List of the actors in this scene</p>
							
						</section>
						<section class="more moment4">
							<div class="apercu"><img src="img/test3.jpg"></div>
							<h3>49:07</h3>
							<p class="moments alinea">Descrption of the the scene and why it is related to the emotion. More informations can be found as well like the actors and so on.</p><p class="moments">List of the actors in this scene</p>
							
						</section>
						<section class="more moment5">
							<div class="apercu"><img src="img/test3.jpg"></div>
							<h3>53:12</h3>
							<p class="moments alinea">Descrption of the the scene and why it is related to the emotion. More informations can be found as well like the actors and so on.</p><p class="moments">List of the actors in this scene</p>
							
						</section>
						<section class="more moment6">
							<div class="apercu"><img src="img/test3.jpg"></div>
							<h3>76:30</h3>
							<p class="moments alinea">Descrption of the the scene and why it is related to the emotion. More informations can be found as well like the characters presents and so on.</p><p class="moments">List of the actors in this scene</p>
							
						</section>
					</div>

				</section>

			</main>

		</div>
	

<?php require('includes/footer.php'); ?>

	
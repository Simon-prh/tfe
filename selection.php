<?php


//include config
require_once('includes/config.php');
//check if already logged in move to home page
// if( $user->is_logged_in() ){ header('Location: connexion.php'); } 





//define page title
$title = 'Demo';

//include header template
require('includes/header.php'); 

?>
	<body>
	
		<div id="preloader">
			<img src="img/loading.gif" alt="logo rewind laoding">
		</div>
		
		<div class="container">

			<!-- navigation -->
			<?php $page = "selection";
			 require('includes/nav.php');  ?>
			<!-- end navigation -->

			<main class="selection">
				<ul class="clearfix">
					<li class="min backbg first">
					

						
						
						<a class="check clickit" href="surprise.html">
							<span class="picto surprise">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="916px" height="523px" viewBox="0 0 916 523" enable-background="new 0 0 916 523" xml:space="preserve">
								<polygon class="triangle" fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="307.134,359.307 305,363 243.301,470 
									702.499,470 472.9,72.321 445.006,120.635 "/>
								<rect x="142" y="250" fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" width="58" height="220"/>
								<rect x="742" y="250" fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" width="58" height="220"/>
								<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="305,363 307.134,359.307 365,259.134 
									365,158 258,158 258,444.509 "/>
								<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="445.006,120.635 472.9,72.321 546,198.934 
									546,4 399,4 399,200.276 "/>
								<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="687,443.154 687,158 580,158 580,257.824 
									"/>
								<rect x="840" y="323" fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" width="18" height="18"/>
								<rect x="153" y="90" fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" width="24" height="24"/>
								<rect x="3" y="503" fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" width="18" height="18"/>
								<rect x="895" y="485" fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" width="18" height="18"/>
								<rect x="691" y="54" fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" width="23" height="23"/>
								</svg>
							</span>
							<span class="emotion">#surprise</span>
							<span class="title">&rhard; The Lost World, 1925</span>
							
						</a>
					</li>
					<li class="min backbg second">
						

						
						<a class="check clickit" href="joy.html">
							<span class="picto">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="916px" height="523px" viewBox="0 0 916 523" enable-background="new 0 0 916 523" xml:space="preserve">
								<path fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M71.333,68"/>
								<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="307.134,359.307 305,363 243.301,470 
									702.499,470 472.9,72.321 445.006,120.635 "/>
								<path fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M305,363l2.134-3.693l77.661-134.438
									c-18.1-24.589-47.242-40.547-80.115-40.547c-54.908,0-99.419,44.512-99.419,99.419c0,51.205,38.712,93.361,88.463,98.816L305,363z"
									/>
								<path fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M568.497,237.9c2.372,0.169,4.767,0.26,7.183,0.26
									c54.908,0,99.42-44.512,99.42-99.419c0-54.908-44.512-99.42-99.42-99.42c-39.354,0-73.365,22.868-89.478,56.039L568.497,237.9z"/>
								<g>
									<path fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M690.543,449.291
										c7.373-13.889,11.557-29.73,11.557-46.551c0-53.692-42.564-97.436-95.79-99.347L690.543,449.291z"/>
									<path fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M529.471,470
										c18.171,19.768,44.241,32.16,73.209,32.16s55.038-12.393,73.209-32.16H529.471z"/>
								</g>
								<circle fill="none" stroke="#FFFFFF" stroke-miterlimit="10" cx="712" cy="238.16" r="26.84"/>
								<circle fill="none" stroke="#FFFFFF" stroke-miterlimit="10" cx="310" cy="68" r="30"/>
								<circle fill="none" stroke="#FFFFFF" stroke-miterlimit="10" cx="122" cy="376.342" r="27"/>
								<circle fill="none" stroke="#FFFFFF" stroke-miterlimit="10" cx="781" cy="389" r="6"/>
								<circle fill="none" stroke="#FFFFFF" stroke-miterlimit="10" cx="149" cy="176.321" r="8"/>
								</svg>
							</span>
							<span class="emotion">#joy</span>
							<span class="title">&rhard; Dr. Strangelove, 1964</span>
						</a>
					</li>
					<li class="min backbg third">
						

						<a class="check clickit" href="fear.html">
							<span class="picto">
								<svg version="1.1" class="fear badchild" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="916px" height="523px" viewBox="0 0 916 523" enable-background="new 0 0 916 523" xml:space="preserve">
								<g>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="594.535" y1="283" x2="585.298" y2="267"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="360.456" y1="267" x2="351.213" y2="283"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="535.068" y1="180" x2="525.831" y2="164"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="419.955" y1="164" x2="410.713" y2="180"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="549.502" y1="205" x2="540.265" y2="189"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="405.514" y1="189" x2="396.271" y2="205"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="608.392" y1="307" x2="599.731" y2="292"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="346.015" y1="292" x2="337.35" y2="307"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="580.102" y1="258" x2="570.287" y2="241"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="375.476" y1="241" x2="365.655" y2="258"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="565.091" y1="232" x2="554.698" y2="214"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="391.072" y1="214" x2="380.674" y2="232"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="263.483" y1="435" x2="254.834" y2="450"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="690.952" y1="450" x2="682.292" y2="435"/>
									<polyline fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="249.644,459 243.301,470 517,470 603,470 
										604,470 690,470 702.499,470 696.148,459 	"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="277.322" y1="411" x2="268.673" y2="426"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="677.096" y1="426" x2="668.436" y2="411"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="520.635" y1="155" x2="510.82" y2="138"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="434.975" y1="138" x2="425.154" y2="155"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="505.624" y1="129" x2="495.231" y2="111"/>
									<polyline fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="450.568,111 445.006,120.635 440.174,129 
											"/>
									<polyline fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="490.035,102 472.9,72.321 455.766,102 	
										"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="636.104" y1="355" x2="627.444" y2="340"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="318.287" y1="340" x2="309.621" y2="355"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="622.248" y1="331" x2="613.588" y2="316"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="332.15" y1="316" x2="323.485" y2="331"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="649.383" y1="378" x2="641.301" y2="364"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="304.424" y1="364" x2="296.351" y2="378"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="663.239" y1="402" x2="654.579" y2="387"/>
									<line fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" x1="291.161" y1="387" x2="282.512" y2="402"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="529,111 529,102 490.035,102 495.231,111 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="417,102 417,111 450.568,111 455.766,102 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="619,138 619,129 505.624,129 510.82,138 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="327,129 327,138 434.975,138 440.174,129 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="581,164 581,155 520.635,155 525.831,164 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="365,155 365,164 419.955,164 425.154,155 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="680,189 680,180 535.068,180 540.265,189 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="266,180 266,189 405.514,189 410.713,180 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="217,205 217,214 391.072,214 396.271,205 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="729,214 729,205 549.502,205 554.698,214 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="306,232 306,241 375.476,241 380.674,232 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="640,241 640,232 565.091,232 570.287,241 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="277,258 277,267 360.456,267 365.655,258 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="669,267 669,258 580.102,258 585.298,267 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="728,292 728,283 594.535,283 599.731,292 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="218,283 218,292 346.015,292 351.213,283 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="762,316 762,307 608.392,307 613.588,316 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="184,307 184,316 332.15,316 337.35,307 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="158,331 158,340 318.287,340 323.485,331 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="788,340 788,331 622.248,331 627.444,340 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="750,364 750,355 636.104,355 641.301,364 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="307.134,359.307 309.621,355 196,355 
										196,364 304.424,364 305,363 	"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="142,378 142,387 291.161,387 296.351,378 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="804,387 804,378 649.383,378 654.579,387 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="782,411 782,402 663.239,402 668.436,411 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="164,402 164,411 277.322,411 282.512,402 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="210,426 210,435 263.483,435 268.673,426 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="736,435 736,426 677.096,426 682.292,435 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="724,459 724,450 690.952,450 696.148,459 	
										"/>
									<polygon fill="none" stroke="#FFFFFF"  stroke-miterlimit="10" points="222,450 222,459 249.644,459 254.834,450 	
										"/>
								</g>
								</svg>
															</span>
							<span class="emotion">#fear</span>
							<span class="title">&rhard; The Cabinet of Dr. Caligari, 1920</span>
						</a>
					</li>
					<li class="min backbg fourth">
						

						<a class="check clickit" href="anger.html">
							<span class="picto">
								<svg version="1.1" class="anger badchild" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="916px" height="523px" viewBox="0 0 916 523" enable-background="new 0 0 916 523" xml:space="preserve">
									<g>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="418.39,470 419.605,396.479 325.797,470 	
											"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="526.393,396.479 527.61,470 623.773,470 	
											"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="419.605,211.521 418.852,165.912 
											399.477,199.451 	"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="366.213,303.999 345.674,292.59 
											326.264,326.19 	"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="380.521,250.605 375.125,241.607 
											370.027,250.432 	"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="619.347,325.975 600.133,292.696 
											579.785,303.999 	"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="796.435,471.406 768.693,461.369 
											762.335,478.07 	"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="293.205,43.554 259.927,62.769 
											271.229,83.116 	"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="147.94,480.425 147.046,442.008 
											123.77,442.164 	"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="762.153,236.699 735.461,247.527 
											741.752,263.803 	"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="228.559,240.593 257.117,236.832 
											255.125,219.498 	"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="611.953,63.377 604.824,77.228 
											613.142,81.685 	"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="638.18,358.596 565.479,357.393 
											651.711,470 702.499,470 	"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="380.521,357.393 307.542,358.6 
											307.134,359.307 305,363 243.301,470 298.444,470 	"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="440.106,470 505.893,470 472.999,410.785 	
											"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="472.999,197.213 508.309,133.65 
											472.9,72.321 445.006,120.635 437.592,133.471 	"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="527.142,166.271 526.393,211.521 
											546.355,199.55 	"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="570.754,241.809 565.479,250.605 
											575.734,250.437 	"/>
									</g>
								</svg>
							</span>
							<span class="emotion">#anger</span>
							<span class="title">&rhard; Battleship Potemkin, 1925</span>
						</a>
					</li>
					<li class="min backbg fifth">
						

						<a class="check clickit" href="melancholy.html">
							<span class="picto">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="916px" height="523px" viewBox="0 0 916 523" enable-background="new 0 0 916 523" xml:space="preserve">
									<path fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M71.333,68"/>
									<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="307.134,359.307 305,363 243.301,470 
										702.499,470 472.9,72.321 445.006,120.635 "/>
									<g>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="516.594,148 596,148 596,94 485.417,94 	
											"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="445.006,120.635 460.384,94 340,94 
											340,148 429.198,148 	"/>
									</g>
									<g>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="399.737,199 182,199 182,326 326.374,326 	
											"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="546.038,199 619.361,326 761,326 761,199 	
											"/>
									</g>
									<g>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="305,363 307.134,359.307 310.777,353 
											31,353 31,443 258.87,443 	"/>
										<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="634.949,353 686.91,443 905,443 905,353 	
											"/>
									</g>
									<rect x="799" y="148" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" width="27" height="14"/>
									<rect x="3" y="503" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" width="32" height="17"/>
									<rect x="838" y="506" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" width="75" height="14"/>
									<rect x="39" y="148" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" width="116" height="14"/>
								</svg>
							</span>
							<span class="emotion">#melancholy</span>
							<span class="title">&rhard; D. O. A. , 1949</span>
						</a>
					</li>
					<li class="min backbg sixth">
						

						<a class="check clickit" href="envy.html">
							<span class="picto">
								<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="916px" height="523px" viewBox="0 0 916 523" enable-background="new 0 0 916 523" xml:space="preserve">
									<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="307.134,359.307 305,363 243.301,470 
										702.499,470 472.9,72.321 445.006,120.635 "/>
									<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="439.257,339.253 438.824,339.645 
										426.303,361 519.498,361 472.9,280.648 467.238,290.634 "/>
								</svg>
							</span>
							<span class="emotion">#envy</span>
							<span class="title">&rhard; The General, 1927</span>
						</a>
					</li>
					<li class="min backbg seventh">
						

						<a class="check clickit" href="empathy.html">
							<span class="picto">
								<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="916px" height="523px" viewBox="0 0 916 523" enable-background="new 0 0 916 523" xml:space="preserve">
									<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="243,470 702.499,470 472.75,72.321 "/>
									<rect x="239" y="67" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" width="467" height="403"/>
									<rect x="756" y="267" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" width="21" height="21"/>
									<rect x="164" y="252" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" width="21" height="21"/>
									<rect x="819" y="375" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" width="44" height="44"/>
									<rect x="832" y="123" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" width="78" height="78"/>
									<rect x="53" y="358" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" width="78" height="78"/>
									<rect x="16" y="122" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" width="49" height="49"/>
								</svg>
							</span>
							<span class="emotion">#empathy</span>
							<span class="title">&rhard; Steamboat Bill Jr., 1928</span>
						</a>
					</li>
					<li class="min backbg eighth">
						

						<a class="check clickit" href="anxiety.html">
							<span class="picto">
								<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="916px" height="523px" viewBox="0 0 916 523" enable-background="new 0 0 916 523" xml:space="preserve">
									<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="438.561,467.032 599.482,300.531 
										379.59,241.375 "/>
									<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="405.865,328.826 499.306,399.066 
										515.981,281.643 "/>
									<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="449.012,355.725 503.531,351.567 
										471.724,305.025 "/>
									<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="307.134,359.307 305,363 243.301,470 
										702.499,470 472.9,72.321 445.006,120.635 "/>
								</svg>
							</span>
							<span class="emotion">#anxiety</span>
							<span class="title">&rhard; The 39 Steps, 1935</span>
						</a>
					</li>
					<li class="min backbg ninth">
						

						<a class="check clickit" href="passion.html">
							<span class="picto">
								<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="916px" height="523px" viewBox="0 0 916 523" enable-background="new 0 0 916 523" xml:space="preserve">
									<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="307.134,359.307 305,363 243.301,470 
										702.499,470 472.9,72.321 445.006,120.635 "/>
									<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="566.245,234 633.771,234 558.9,104.321 
										549.804,120.076 525.131,162.788 "/>
									<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="305,363 307.134,359.307 351.962,281.705 
										290,174.383 155.699,407 279.628,407 "/>
									<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="410.499,98.727 328.41,240.91 337.122,256 
										366.811,256 434.074,139.56 "/>
									<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="684.023,438 729.301,438 623.5,254.747 
										600.861,293.958 "/>
									<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="241.699,136 285,61 328.301,136 "/>
									<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="186.397,200 199.5,177.306 212.603,200 "/>
									<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="394.397,52 407.5,29.306 420.603,52 "/>
									<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="716.397,277 729.5,254.307 742.603,277 "/>
									<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="93.397,481 106.5,458.307 119.603,481 "/>
									<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="816.397,461 829.5,438.307 842.603,461 "/>
								</svg>
							</span>
							<span class="emotion">#passion</span>
							<span class="title">&rhard; My Man Godfrey, 1936</span>
						</a>
					</li>

				</ul>
			</main>

		</div>

<?php require('includes/footer.php'); ?>
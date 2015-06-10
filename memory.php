<?php
//include config
require_once('includes/config.php');
//check if already logged in move to home page
//if logged in redirect to members page
if( !$user->is_logged_in() ){ header('Location: selection.php'); } 

  $statement = $db->prepare('SELECT * FROM movies WHERE true');
  $statement->execute();

//define page title
$title = 'Memory - Rewind';

//include header template
require('includes/header.php'); 
?>

	<body class="keyup">
		
		<div id="preloader">
			<img src="img/loading.gif" alt="">
		</div>
		
		<div class="container">
			
			<!-- navigation -->
			<?php $page = "memory";
			 require('includes/nav.php');  ?>
			<!-- end navigation -->

			<main class="memory clearfix">
				<div class="contour cleafix">
					<section class="filters">
						<h1>feelters<span id="reset">press <span id="escape"></span> to reset everything</span></h1>

						<div class="search">
							<span class="loupe"></span>
						  	<label for="search">Search</label>
							<input type="text" name="filter" placeholder="look for a movie, an #emotion,..." value="" id="search" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"/>
						</div>
						<ul>
						    <li class="filters_box">
						      <input type="checkbox" id="surprise" name="onlychoice">
						      <label for="surprise"><span class="boxcontainer"><span></span><span class="filters_emotions">#surprise</span></span></label>
						    </li>
						    <li class="filters_box">
						      <input type="checkbox" id="joy" name="onlychoice">
						      <label for="joy"><span class="boxcontainer"><span></span><span class="filters_emotions">#joy</span></span></label>
						    </li>
						    <li class="filters_box">
						      <input type="checkbox" id="fear" name="onlychoice">
						      <label for="fear"><span class="boxcontainer"><span></span><span class="filters_emotions">#fear</span></span></label>
						    </li>
						    <li class="filters_box">
						      <input type="checkbox" id="anger" name="onlychoice">
						      <label for="anger"><span class="boxcontainer"><span></span><span class="filters_emotions">#anger</span></span></label>
						    </li>
						    <li class="filters_box">
						      <input type="checkbox" id="melancholy" name="onlychoice">
						      <label for="melancholy"><span class="boxcontainer"><span></span><span class="filters_emotions">#melancholy</span></span></label>
						    </li>
						    <li class="filters_box">
						      <input type="checkbox" id="envy" name="onlychoice">
						      <label for="envy"><span class="boxcontainer"><span></span><span class="filters_emotions">#envy</span></span></label>
						    </li>
							   <li class="filters_box">
						      <input type="checkbox" id="empathy" name="onlychoice">
						      <label for="empathy"><span class="boxcontainer"><span></span><span class="filters_emotions">#empathy</span></span></label>
							   </li>
							   <li class="filters_box">
							     <input type="checkbox" id="anxiety" name="onlychoice">
						      <label for="anxiety"><span class="boxcontainer"><span></span><span class="filters_emotions">#anxiety</span></span></label>
						    </li>
						    <li class="filters_box">
						      <input type="checkbox" id="passion" name="onlychoice">
						      <label for="passion"><span class="boxcontainer"><span></span><span class="filters_emotions">#passion</span></span></label>
							</li>
						 </ul>



						  
						  



					</section>
					<section class="results clearfix">
						<p id="noresult">&boxtimes; no movies found</p>
					<?php
							while ($movies = $statement->fetch(PDO::FETCH_ASSOC)){	
								echo '<div data-category="'.$movies['emotion'].'" class="visible clearfix movie_resume fear_movie">
										<div class="movie_visu '.$movies['background'].'">
											<h1>'.$movies['title'].'</h1>
											<p>'.$movies['author'].'</p>
											<p>#'.$movies['emotion'].'</p>
										</div>
										<div class="movie_data">				
											<p>'.$movies['synopsis'].'</p>
											<a href="'.$movies['link'].'">Watch & feel</a>
										</div>
									  	</div>';
							}
						 ?>
				
					</section>
				</div>
			</main>
		</div>

<?php require('includes/footer.php'); ?>
	
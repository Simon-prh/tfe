<nav class="<?php echo ($page == "memory" ? "nav_border" : "")?>">
	<ul>
		<li class="rewind"><a class="clickit" href="index.php">Rewind</a></li>
		<?php   
		    if(isset($_SESSION['username'])) {
		        echo '<li class="logout"><a class="clickit" href="logout.php"><span><img src="img/logout.svg" alt="logo rewind"></span>'.$_SESSION['username'].'</a></li>';
		    } else {
		        echo '<li class="'.($page == "signin" ? "active" : "").'"><a class="clickit" href="connexion.php">Sign in</a></li>';
		    } 
		?>  
		
		<li><a href="#">About</a></li>
		<?php   
		    if(isset($_SESSION['username'])) {
		        echo '<li class="'.($page == "memory" ? "active" : "").'"><a class="clickit" href="memory.php">Memory</a></li>';
		    } else {
		        echo '<li class="'.($page == "memory" ? "active" : "").'"><a class="nolog clickit" href="connexion.php">Memory</a><span>You must be signed in</span></li>';
		    } 
		?>  
		
		<li  class="<?php echo ($page == "selection" ? "active" : "")?>"><a class="clickit" href="selection.php">This week</a><span class="date">19/06 &rhard; 26/06</span></li>
		
		
	</ul>
</nav>
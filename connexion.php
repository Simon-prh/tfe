<?php

//include config
require_once('includes/config.php');
$_SESSION['current_page'] = 'this_page';


//check if already logged in move to home page
if( $user->is_logged_in() ){ header('Location: selection.php'); } 
//process login form if submitted
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($user->login($username,$password)){ 
		$_SESSION['username'] = $username;
		header('Location: selection.php');
		exit;
	
	} else {
		$error[] = 'Wrong username or password';
	}
}//end if submit

//define page title
$title = 'Login';

//include header template
require('includes/header.php'); 

?>
	<body>
	
		<div id="preloader">
			<img src="img/loading.gif">
		</div>
		
		<div class="container">
			<!-- navigation -->
			<?php $page = "signin";
			 require('includes/nav.php');  ?>
			<!-- end navigation -->
			<main class="connexion">
				<div class="contour">
					<section class="form_container">
						<h1>Log in to remember</h1>

						<form  method="post">
							<?php
								//check for any errors
								if(isset($error)){
									foreach($error as $error){
										echo '<p class="danger">&olcross; '.$error.'</p>';
										}
								}
							?>
	
							<div class="form_group">
								<label for="username">Username</label>
								<input required="required" type="text" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" placeholder="username" name="username">
							</div>
							<div class="form_group">
								<label for="password">Password</label>
								<input type="password" required="required" value="" placeholder="password" name="password">
							</div>
							<input class="send" type="submit" value="Log in" name="submit">
							<a class="clickit link" href="register.php">Not registered yet ?</a>
						</form>
					</section>
				</div>
			</main>

		</div>

<?php require('includes/footer.php'); ?>
	
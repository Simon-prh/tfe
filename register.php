<?php
//include config
require_once('includes/config.php');


//if form has been submitted process it
if(isset($_POST['submit'])){
	//very basic validation
	if(strlen($_POST['username']) < 3){
		$error[] = 'Username is too short.';
	} else {
		$stmt = $db->prepare('SELECT username FROM members WHERE username = :username');
		$stmt->execute(array(':username' => $_POST['username']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		if(!empty($row['username'])){
			$error[] = 'Username provided is already in use.';
		}
			
	}
	if(strlen($_POST['password']) < 3){
		$error[] = 'Password is too short.';
	}
	if(strlen($_POST['passwordConfirm']) < 3){
		$error[] = 'Confirm password is too short.';
	}
	if($_POST['password'] != $_POST['passwordConfirm']){
		$error[] = 'Passwords do not match.';
	}
	//email validation
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	    $error[] = 'Please enter a valid email address';
	} else {
		$stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		if(!empty($row['email'])){
			$error[] = 'Email provided is already in use.';
		}
			
	}
	//if no errors have been created carry on
	if(!isset($error)){
		//hash the password
		$hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);
		
		try {
			//insert into database with a prepared statement
			$stmt = $db->prepare('INSERT INTO members (username,password,email) VALUES (:username, :password, :email)');
			$stmt->execute(array(
				':username' => $_POST['username'],
				':password' => $hashedpassword,
				':email' => $_POST['email'],
				
			));
			$id = $db->lastInsertId('userID');
			
		//else catch the exception and show the error.
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
		}
	}
}




//define page title
$title = 'Demo';

//include header template
require('includes/header.php'); 



?>


	
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
						<h1>Register and enhance your feels</h1>

						
						<form name="register" method="post">
							<?php

								//check for any errors
								if(isset($error)){
									foreach($error as $error){
										echo '<p class="danger">&olcross; '.$error.'</p>';
									}
								}
								//if no error and form submited
								if(!isset($error) && (isset($_POST['submit']))){
									echo "<p class='success'>Registration completed, <a class='clickit' href='connexion.php'>log in</a> to discover Memory.</p>";
								}
							?>
							<div class="form_group">
								<label for="username">Email</label>
								<input required="required" type="text" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" placeholder="username" name="username">
							</div>
							<div class="form_group">
								<label for="email">Email</label>
								<input required="required" type="text" value="<?php if(isset($error)){ echo $_POST['email']; } ?>" placeholder="email adress" name="email">
							</div>
							<div class="form_group">
								<label for="password">Password</label>
								<input required="required" type="password" value="" placeholder="password" name="password">
							</div>
							
							<div class="form_group">
								<label for="password">Password confirm</label>
								<input required="required" type="password" value="" placeholder="password verification" name="passwordConfirm">
							</div>
							<input class="send" type="submit" value="Register" name="submit">
							<a class="clickit link" href="connexion.php">Already a Rewinder ?</a>
						</form>
						
					</section>
				</div>
			</main>

		</div>

<?php require('includes/footer.php'); ?>
	

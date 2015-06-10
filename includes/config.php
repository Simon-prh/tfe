<?php
ob_start();
session_start();


//database credentials
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','simon');


try {

    //create PDO connection 
    $db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

} catch(PDOException $e) {
    //show error
    echo '<p class="danger">'.$e->getMessage().'</p>';
    exit;
}




//include the user class, pass in the database connection
include('user.class.php');
$user = new User($db); 
?>

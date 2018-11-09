<?php 

$current_page = end(explode('/', $_SERVER['REQUEST_URI'])); 

/*

if ($_SESSION['userip'] !== $_SERVER['REMOTE_ADDR']){
		#if it is not the same, we just remove all session variables
		#this way the attacker will have no session
	session_unset(); //clears the data of the session variables
	session_destroy(); //remove all session
}

session httponly. 
*/


$dbserver = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'book_club'

?>
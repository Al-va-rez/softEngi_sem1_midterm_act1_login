<?php 

session_start();

if(isset($_POST['btn_Login'])) {
	// Get username and password
	if(!empty($_POST['username']) && !empty($_POST['password'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']); // encrypt password
	}

	// Set the session variables
	if(!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		// login successful
		$_SESSION['login_msg'] = '<p>User logged in: ' . $_SESSION['username'] . '</p>' . '<p>Password: ' . $_SESSION['password'] . '</p>';
	} else { // another user currently logged in
		$_SESSION['login_msg'] = '<p>User <b>' . $_SESSION['username'] . '</b> currently logged in.</p>';
	}

	// Go back to index.php
	header('Location: index.php');
}

?>
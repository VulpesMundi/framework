<?php

switch ( $_GET["a"] ) {

    case "login":
    	// Draw login form
    	include( APP_VIEW . "/header.php" );
        include( APP_VIEW . "/auth/loginView.php" );
        include( APP_VIEW . "/footer.php" );
        break;

    case "logout":
    	// Destroy session and go home
    	$_SESSION = 0;
    	session_destroy();
    	header("location: index.php");
        break;

    case "processAuth":
    	// Check user/password
    	if ( processAuth($_POST) ) {
    		header("Location: index.php");
    	} else {
    		// Draw login form
    		include( APP_VIEW . "/header.php" );
        	include( APP_VIEW . "/auth/loginView.php" );
        	include( APP_VIEW . "/footer.php" );
    	}
    	break;

}

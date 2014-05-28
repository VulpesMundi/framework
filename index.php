<?php

# Load bootstrap to apply configuration
include("config/bootstrap.php");

# Start session to track user
session_start();

# Check if user is authenticated
if ( "processAuth" != $_GET["a"] && !authCheck($_SESSION) ) {
    $_GET["q"] = "auth";
    $_GET["a"] = "login";
}

# Route request to desired controller
switch ($_GET["q"]) {

    case "auth":
        include( APP_CONTROLLER . "/authController.php" );
        break;

    case "home":
        include( APP_CONTROLLER . "/homeController.php" );
        break;

    case "product":
        include( APP_CONTROLLER . "/productController.php" );
        break;

    default:
        include( APP_CONTROLLER . "/homeController.php" );
        break;

}

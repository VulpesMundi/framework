<?php

# Setup Applictation Directory Structure
define("APP_DOC_ROOT", "/framework");
define("APP_DIR_ROOT", dirname ( dirname ( __FILE__ ) ) );

# These should be fine as is
define("APP_MODEL",      APP_DIR_ROOT . "/model");
define("APP_CONTROLLER", APP_DIR_ROOT . "/controller");
define("APP_VIEW",       APP_DIR_ROOT . '/view');
define("APP_JSCRIPT",    APP_DOC_ROOT . "/js");
define("APP_IMG",        APP_DOC_ROOT . "/img");

# Set Debug (None: 0, Errors Only: 1, Warnings: 2, Info: 3, Verbose: 4)
define("DEBUG", 1);

# Set PHP Error Output
ini_set('error_reporting','E_ALL');

# Database Configuration
/*

$dbHost = "localhost";
$dbName = "[db_name]";
$dbUser = "[db_user_name]";
$dbPass = "[db_password]";

$dbh = mysql_pconnect($dbHost, $dbUser, $dbPass)
	or die("Could not connect to Mysql . mysql_error()");

mysql_select_db("storefront", $dbh)
	or die("Could not open database" . mysql_error() );

*/

# Load PHP models
include( APP_MODEL . "/authLibrary.php" );

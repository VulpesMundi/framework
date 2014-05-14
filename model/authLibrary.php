<?php

	function authCheck($array) {

		if ( $array["userID"] ) {
			return true;
		} else {
			return false;
		}

	}

	function processAuth($array) {

		if ( $array["userID"] ) {
			$_SESSION["userID"] = $array["userID"];
			return true;
		} else {
			return false;		}

	}

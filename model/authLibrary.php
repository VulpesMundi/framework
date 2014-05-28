<?php

    function authCheck($array) {

        if ($array["userID"]) {
            if ($_SESSION["userData"] == APP_SESSION_KEY) {
                return true;
            } else {
                $_SESSION = 0;
                session_destroy();
                return false;
            }
        } else {
            return false;
        }

    }

    function processAuth($array) {

        $username = mysql_escape_string($array["userID"]);

        $sql = "SELECT *
                FROM auth_user
                WHERE username = '" . $username . "'";

        $res = mysql_query($sql);

        $row = mysql_fetch_assoc($res);

        if (!$row) {
            return false;
        } elseif ( md5($array["password"]) != $row["password"] ) {
            return false;
        } else {
            $_SESSION["userID"] = $array["userID"];
            $_SESSION["userData"] = APP_SESSION_KEY;
            return true;
        }

    }

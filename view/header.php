<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
        <title>My Project</title />
    </head>
    <body>
        <div id="content"><!-- Main Content Wraper Div -->
            <div id="topPage">
                <div id="userArea">
                    <?php
                        if ( $_SESSION["userID"] ) {
                            $logout = ' ( <a href="index.php?q=auth&a=logout">Logout</a> )';
                            print "Welcome " . $_SESSION["userID"] . $logout;
                        } else {
                            print '<a href="index.php?q=auth&a=logout">Login</a>';
                        }
                    ?>
                </div>
            </div>

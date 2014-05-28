
    <!-- page content -->
    <div id="page">

        <?php

        foreach ( $products as $key => $products ) {
            print "<p>";
            print "Product: " . $products["name"] . "<br />";
            print "Description: " . $products["description"] . "<br />";
            print "</p>";
        }

        ?>

    </div>
    <!-- End page content -->

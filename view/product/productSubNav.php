
    <!-- sub navigation -->
    <div id="subNav">

        <?php

            foreach ( $categories as $key => $cat ) {
                $url = "index.php?q=product&a=category&id=" . $cat["id"];
                print '<a href="' . $url . '" alt="' . $alt . '">' . $cat["name"] . '</a><br />' . "\n";
            }

        ?>

    </div>
    <!-- end sub navigation -->
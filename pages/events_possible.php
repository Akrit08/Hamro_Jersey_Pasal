<!-- This page is about the possible events -->
<?php
session_start();
$loggedIn = isset($_SESSION['customer_id']) ? true : false;
include "../common/document_head.html";
?>

<body class="body w3-auto">
    <header class="w3-container">
        <?php
        echo "<div class='w3-border w3-border-black w3-light-grey'>";
        include "../common/banner.php";
        include "../common/menus.html";
        echo "</div>";
        ?>

    </header>
    <main class="w3-container">
        <div class="w3-container w3-border-left w3-border-right
                 w3-border-black w3-light-grey"
            style="padding-right:0">
            <article>
                <h3>
                    Possible events
                </h3>
                <p>
                    These are the events that we are thinking to hold for
                    this
                    year unless they could get disrupted due to COVID.
                </p>
                <dl>
                    <dt>April 27, 2022</dt>
                    <dd>6-A-side European Football Tournament <br>
                        We are planning to have 12 teams with 6 players each
                        and hold a tournament.</dd>
                    <dt>July 7, 2022</dt>
                    <dd>3 pointer shootout Basketball Tournament <br>
                        We will conduct a 3 pointer shootout tournament that
                        is done individually.</dd>
                    <dt>October 10, 2022</dt>
                    <dd>Field Goal American Football Competition<br>
                        We will have a field goal competition in which we
                        will
                        have 7 teams with 2 players each.</dd>
                </dl>
                <p>
                    Note that all events will be initiated at our location at
                    4 PM, and the participants will be taken from the bus to
                    the respective location unless otherwise noted on this
                    page at least 24 hours before the event in question.
                    Further details on each event may also appear here from
                    time to time as the event approaches.
                </p>
            </article>
        </div>
    </main>
    <!-- footer.html -->
    <footer class="w3-container">
        <?php
        include "../common/footer.html";
        ?>
    </footer>
</body>

</html>
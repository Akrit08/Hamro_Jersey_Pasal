<!-- This page is about recurring events -->
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
                 w3-border-black w3-light-grey" style="padding-right:0">
            <article>
                <h3>
                    Recurring Event
                </h3>
                <h5>
                    Jersey Mania
                </h5>
                <p>
                    This is the event that we are planning to hold every 4
                    months in the location of our current store.
                </p>
                <p>
                    In this event:
                </p>
                <ul>
                    <li>We are planning to display various jerseys of
                        different sports to which we have access.</li>
                    <li>We will explain which jersey is of which sports and
                        which part of the world including a brief history and
                        description.</li>
                    <li>We will present videos and slides explaining how
                        various sports are played and what are the rules and
                        objectives.</li>
                </ul>

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
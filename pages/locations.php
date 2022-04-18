<!-- This page is provides the locations of the company -->
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
                    Our Locations
                </h3>
                <p>
                    Although it may be a small company currently we are
                    hoping
                    to establish more branches in different parts of North
                    America and probably in further future expand it
                    worldwide. We will update the locations of our other
                    store
                    here. Each location will be accompanied by contact
                    information for that location and a link to a map showing
                    you how to find us at that location.
                </p>
                <p>
                    In the meantime, here are a few details (just address and
                    telephone number) for our current (and only) location,
                    should you wish to drop by:
                </p>
                <p>
                    Hamro Jersey Pasal, Inc.<br>9876 Boulevard Rd. <br>
                    Halifax, NS <br> Canada B3K 1A1 <br> Tel: 902.111.1111
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
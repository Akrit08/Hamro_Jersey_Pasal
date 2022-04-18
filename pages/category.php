<!-- category -->
<!-- This page displays all products in a single category. -->
<?php
session_start();
include "../common/document_head.html";
?>

<body class="body w3-auto">
    <header class="w3-container">
        <?php
        echo "<div class='w3-border w3-border-black w3-light-grey'>";
        include "../common/banner.php";
        include "../common/menus.html";
        include "../scripts/connectToDatabase.php";
        echo "</div>";
        ?>

    </header>
    <main class="w3-container">
        <article class="w3-container w3-border-left w3-border-right
                 w3-border-black w3-light-grey">
            <h4>
                Items Available in Your Chosen
                Category&nbsp;&nbsp;&nbsp;&nbsp;
                <a class='w3-button w3-green w3-round w3-small'
                    href='pages/catalog.php'>
                    Return to category list
                </a>
            </h4>
            <?php
            include "../scripts/categoryProcess.php";
            ?>
        </article>
    </main>
    <!-- footer.html -->
    <footer class="w3-container">
        <?php
        include "../common/footer.html";
        ?>
    </footer>
</body>

</html>
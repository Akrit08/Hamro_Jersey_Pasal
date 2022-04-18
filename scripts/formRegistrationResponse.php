<!-- This page is about the process after registration -->
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
            <?php
            // save values that is used to fill the registration form if 
            // we have to go back to the registration form and try again
            $_SESSION['POST_SAVE'] = $_POST;

            include("../scripts/formRegistrationProcess.php");
            ?>
        </article>
    </main>
    <footer>
        <?php
        include "../common/footer.html";
        ?>
    </footer>
</body>

</html>
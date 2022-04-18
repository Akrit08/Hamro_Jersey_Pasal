<!-- checkout -->
<!-- This page handles user's checkout process. -->
<?php
session_start();
if (!preg_match('/shoppingCart.php/', $_SERVER['HTTP_REFERER']))
    header("Location: shoppingCart.php?productID=view");
$customerID = $_SESSION['customer_id'];
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
            include "../scripts/checkoutProcess.php";
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
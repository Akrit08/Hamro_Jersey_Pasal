<!-- This page displays the webpage for shopping cart -->
<?php
session_start();
$customerID = isset($_SESSION['customer_id']) ?
    $_SESSION['customer_id'] : "";
$productID = $_GET['productID'];
if ($customerID == "") {
    $_SESSION['purchasePending'] = $productID;
    header("Location: formLogin.php");
}
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
            <h4 class="w3-center">
                <strong>Your Shopping Cart</strong>
            </h4>
            <?php
            include "../scripts/shoppingCartProcess.php";
            ?>
        </article>
    </main>
    <footer class="w3-container">
        <?php
        include "../common/footer.html";
        ?>
    </footer>
</body>

</html>
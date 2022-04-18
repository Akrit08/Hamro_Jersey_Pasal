<!-- This page is displays the sitemap -->
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
                  w3-border-black w3-light-grey">
            <div class="w3-half w3-border w3-border-black">
                <ul class="w3-ul">
                    <li>
                        <h4 class="w3-wide"><a href="my_business.php">Home
                            </a></h4>
                    </li>
                </ul>
                <ul class="w3-ul w3-border-top w3-border-black">
                    <li>
                        <h4 class="w3-wide">e-store</h4>
                    </li>
                    <li><a href="pages/estore.php">e-store Options</a></li>
                    <li><a href="pages/catalog.php">
                            Product Catalog</a>
                    </li>
                    <li><a href="pages/formRegistration.php">
                            Register</a>
                    </li>
                    <li><a href="pages/formLogin.php">
                            Login</a>
                    </li>
                    <li><?php $href = "pages/shoppingCart.php?" .
                            "productID=view" ?>
                        <a href="<?php echo $href ?>">
                            View Shopping Cart</a>
                    </li>
                    <li><a href="pages/checkout.php">
                            Checkout</a>
                    </li>
                    <li><a href="pages/logout.php">
                            Logout</a>
                    </li>
                </ul>
            </div>
            <div class="w3-half w3-border w3-border-black">
                <ul class="w3-ul">
                    <li>
                        <h4 class="w3-wide">Events</h4>
                    </li>
                    <li><a href="pages/events_recurring.php">Recurring</a>
                    </li>
                    <li><a href="pages/events_possible.php">Possible Events
                        </a></li>
                    <li><a href="pages/offers.php">Offers and Sales</a></li>
                </ul>
                <ul class="w3-ul w3-border-top w3-border-black">
                    <li>
                        <h4 class="w3-wide">About Us</h4>
                    </li>
                    <li><a href="pages/vision.php">Vision and Mission</a>
                    </li>
                    <li><a href="pages/locations.php">Locations</a></li>
                    <li><a href="pages/formFeedback.php">Tell
                            Us What You Think</a></li>
                </ul>
                <ul class="w3-ul w3-border-top w3-border-black">
                    <li>
                        <h4 class="w3-wide">
                            <a href="pages/sitemap.php">Site Map</a>
                        </h4>
                    </li>
                </ul>
            </div>
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
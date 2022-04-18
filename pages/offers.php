<!-- This page is about offers and sales the company provides -->
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
                    Offers and Sales
                </h3>
                <p>
                    Here are some of the offers and sales that we are going
                    to provide as the year progresses:
                </p>
                <dl>
                    <dt>Loyalty Cards</dt>
                    <dd>Earn reward points as you buy from our store with the
                        loyalty card.<br>
                        Every 3 months, this cardholder will get a 50%
                        discount.</dd>
                    <dt>Student Discounts</dt>
                    <dd>15% OFF for students.</dd>
                    <dt>Feast on the fests</dt>
                    <dd>
                        In various public festivals such as Dashain, which
                        is an
                        annual Nepali Festival, Christmas, and New Year we
                        will
                        have various offers such as buy one get one,
                        discounts,
                        and many others.
                    </dd>
                </dl>
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
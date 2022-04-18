<!-- This page is about the vision and mission of the company -->
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
                    About Hamro Jersey Pasal: Our Vision and Mission
                </h3>
                <p>
                    Hamro Jersey Pasal is a new business, and this was the
                    reason behind its formation. I and my cousins, have
                    been and still are huge sports fans mainly European
                    football. We usually follow the English Premier League,
                    which is a football league in England. However, we always
                    used to get a really hard time getting the jerseys of our
                    favorite teams. We had to contact a lot of people and
                    companies to be able to get a particular jersey. So, in
                    order for the future generations to not go through the
                    trouble, we have been through and be able to easily get
                    hold of the jerseys of their favorite teams or
                    sportspersons we decided to form a company which can get
                    the respective jerseys through the links we have made.
                </p>
                <p>
                    As we have been mainly the supporters and followers of
                    European football, we did have a thought of only focusing
                    on that. But we decided that we should respect and
                    prioritize every sport in every country as possible so
                    that we can help customers that follow different sports
                    all over the world. That is why our store also includes
                    jerseys of teams from different sports. And we will keep
                    on increasing more sports.
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
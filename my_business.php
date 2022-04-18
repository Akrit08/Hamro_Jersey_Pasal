<!-- This page is the homepage of the company -->
<?php
session_start();
$loggedIn = isset($_SESSION['customer_id']) ? true : false;
include "common/document_head.html";
?>

<body class="body w3-auto" onload="carousel()">
  <header class="w3-container">
    <?php
    echo "<div class='w3-border w3-border-black w3-light-grey'>";
    include "common/banner.php";
    include "common/menus.html";
    echo "</div>";
    ?>

  </header>
  <main class="w3-container">
    <div class="w3-container w3-border-left w3-border-right
                 w3-border-black w3-light-grey" style="padding-right:0">
      <article class="w3-half">
        <h3>
          Welcome to our store, Hamro Jersey Pasal
        </h3>
        <p>
          Founded in 2022, Hamro Jersey Pasal which means Our Jersey Store
          was created to provide jerseys of different clubs and teams of
          different sports. We are selling jerseys of American and
          Canadian Football teams and Basketball teams in higher amounts
          since it is more popular in North America. Along with that, we
          also sell
          jerseys of European football clubs to help to popularize European
          football in North America. Our store also includes other related
          sports products.
        </p>
        <p>
          View our e-store to explore more about our products and get a hand
          on all the required materials that you need so that you could be
          ready for the Big Game.
        </p>
      </article>
      <div class="w3-half w3-padding w3-center">
        <?php
        include "resources/images_and_labels.html";
        ?>
      </div>
    </div>
  </main>
  <!-- footer.html -->
  <footer class="w3-container">
    <?php
    include "common/footer.html";
    ?>
  </footer>
</body>

</html>
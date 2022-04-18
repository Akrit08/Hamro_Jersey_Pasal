<!-- catalog process -->
<!-- This script assumes a connection has already been made to the database,
from which it loads and displays all product categories. -->
<?php
$query = "SELECT * FROM my_Category ORDER BY catName";
$categories = mysqli_query($db, $query);
$numRecords = mysqli_num_rows($categories);
$categoryCount = 0;
echo "<table style='margin-left: 130px'><tr><td><ul>";
for ($i = 1; $i <= $numRecords; $i++) {
    $row = mysqli_fetch_array($categories, MYSQLI_ASSOC);
    $currentCatName = $row['catName'];
    $prodCatCode = urldecode($row['catCode']);
    $categoryURL = "pages/category.php?categoryCode=$prodCatCode";
    echo "<li><a style='text-align: center; text-decoration:none;' 
            href = '$categoryURL'>$currentCatName</a></li>\r\n";
    $categoryCount++;
    if ($categoryCount >= $numRecords / 2) {
        echo "</ul></td>\r\n<td><ul>";
        $categoryCount = 0;
    }
}
echo "</ul></td></tr></table>";
mysqli_close($db);
?>
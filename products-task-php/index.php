<?php
include_once('includes/db.connection.php');
include('header.php');
?>

<!-- Products Page Content -->
<div class="products-container">
    <?php
    $query = "SELECT * FROM products;";
    $result = mysqli_query($conn, $query);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($item = mysqli_fetch_assoc($result)) {
            include('Templates/_productCard.php');
        }
    }
    ?>
</div>

<?php
include('footer.php');
?>
<?php
include_once('includes/db.connection.php');
include('header.php');
?>

<div class="product-page">
    <?php
    $query = "SELECT * FROM products WHERE product_id = {$_POST["more-btn"]};";
    $result = mysqli_query($conn, $query);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        $item = mysqli_fetch_assoc($result)
    ?>
        <div class="img-container">
            <img src="./img.png" alt="img" />
        </div>

        <div class="content">
            <h1 class="main-header">
                <?php echo $item["product_name"]; ?>
            </h1>
            <h2 class="second-header">
                <?php echo $item["product_title"]; ?>
            </h2>
            <div class="content-text">
                <?php echo $item["product_description"]; ?>
            </div>
            <form action="/products-task-php/index.php">
                <button class="nazaj-btn">NAZAJ NA SEZNAM</button>
            </form>
        </div>
    <?php
    }

    ?>

</div>

<?php
include('footer.php');
?>
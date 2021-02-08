<div class="product-card">
    <div class="card-img-container">
        <img src="./images/img.png" alt="img" />
    </div>

    <div class="card-content">
        <h1 class="main-header"> <?php echo $item["product_name"]; ?> </h1>
        <h2 class='second-header'> <?php echo $item["product_title"]; ?> </h2>
        <div class="content-text">
            <?php echo $item["product_description"]; ?>
        </div>
        <form action="/products-task-php/product.php" method="POST">
            <button class="more-btn btn" name="more-btn" value="<?php echo $item["product_id"]; ?>">VEČ O IZEDLKU <?php echo $item["product_id"]; ?> </button>
        </form>
    </div>
</div>
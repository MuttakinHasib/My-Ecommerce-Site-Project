<div class="container-fluid">
    <div class="row">
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'ecommerce_db');

        if (!$con) {
            die("Error");
        }

        $sql = "SELECT * FROM products";
        $query = mysqli_query($con, $sql);
        while ($rows = mysqli_fetch_assoc($query)) {
            ?>
            <div class="col-md-3">
                <div class="single-cart">
                    <div class="cart-item">
                        <img src="admin/includes/<?php echo $rows['photo']; ?>" alt="">
                    </div>
                    <div class="cart-description">
                        <a href="#"><?php echo $rows['title']; ?></a>
                        <a href="#" class="cart-tk">TK : <?php echo $rows['price']; ?></a>
                        <a href="#" class="btn-cart-item"><span><i class="material-icons">add_shopping_cart</i></span> Add to Cart</a>
                    </div>
                </div>

            </div>
        <?php } ?>
    </div>
</div>
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="header-left-content">
                    <div class="logo" style="width:150px;">
                        <?php
                        $con = mysqli_connect('localhost', 'root', '', 'ecommerce_db');

                        if (!$con) {
                            die("Error");
                        }

                        $sql = "SELECT * FROM site_settings";
                        $query = mysqli_query($con, $sql);
                        while ($rows = mysqli_fetch_assoc($query)) {
                            ?>
                            <img style="width:100%;" src="admin/includes/<?php echo $rows['site_logo']; ?>" alt="">
                        <?php } ?>
                    </div>
                    <div class="search-bar">
                        <form action="#">
                            <input type="text" name="search" placeholder="Search here ......">
                            <a href="#"><i class="fas fa-search"></i></a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="header-right-content">
                    <h4><span><i class="fas fa-phone-alt"></i></span> 01756-170325</h4>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a class="btn-cart" href="#"><i class="fal fa-cart-arrow-down"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
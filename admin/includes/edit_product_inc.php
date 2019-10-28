<style>
    .edit-section {
        background: #ffff;
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .edit-form {
        background: #f36;
        padding: 5rem;
        box-shadow: 0 1rem 4rem .5rem #f36;
    }

    img {
        display: block;
        margin: auto;
    }

    input {
        width: 100%;
        background: rgba(255, 255, 255, .3);
        padding: 8px 25px;
        border: none;
        margin: 1rem 0;
        font-weight: bold;
    }

    .update {
        cursor: pointer;
    }
</style>
<div class="edit-section">
    <div class="edit-form">
        <?php
        $id = $_GET['id'];
        $con = mysqli_connect('localhost', 'root', '', 'ecommerce_db');

        if (!$con) {
            die("Error");
        }

        $sql = "SELECT * FROM products WHERE id = $id";
        $query = mysqli_query($con, $sql);
        $i = 0;
        while ($rows = mysqli_fetch_assoc($query)) {
            $i++;

            ?>
            <form action="updateProduct.php?id=<?php echo $rows['id']; ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="<?php echo $rows['title']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="price" class="form-control" placeholder="TK : <?php echo $rows['price']; ?>">
                </div>
                <div class="edit-img">
                    <img src="<?php echo $rows['photo']; ?>" alt="">
                </div>
                <div class="edit-img">
                    <input type="file" name="file">
                </div>
                <input class="update" type="submit" name="update" value="Update">
            </form>
        <?php } ?>
    </div>
</div>
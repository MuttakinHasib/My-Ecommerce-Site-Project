<div class="tabs-content" data-tab="3">
    <div class="content">
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>ID :</th>
                        <th>Name :</th>
                        <th>Price :</th>
                        <th>Photo :</th>
                        <th>Edit / Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con = mysqli_connect('localhost', 'root', '', 'ecommerce_db');

                    if (!$con) {
                        die("Error");
                    }

                    $sql = "SELECT * FROM products";
                    $query = mysqli_query($con, $sql);
                    $i = 0;
                    while ($rows = mysqli_fetch_assoc($query)) {
                        $i++;

                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $rows['title']; ?></td>
                            <td>TK : <?php echo $rows['price']; ?></td>
                            <td><img style="width:50px;" src="includes/<?php echo $rows['photo']; ?>" alt=""></td>
                            <td>
                                <a href="includes/edit_product_inc.php?id=<?php echo $rows['id']; ?>">Edit</a>
                                <a href="includes/delete.php?id=<?php echo $rows['id']; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
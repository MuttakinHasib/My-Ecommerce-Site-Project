<?php
$con = mysqli_connect('localhost', 'root', '', 'ecommerce_db');
if (!$con) {
    die("connection error");
}

if (isset($_POST['update'])) {

    if ($_GET['id']) {
        $id = $_GET['id'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTempLoc = $_FILES['file']['tmp_name'];
        $fileStore = 'img/' . $fileName;
        move_uploaded_file($fileTempLoc, $fileStore);


        $sql = "UPDATE products SET title='$title',price='$price',photo='$fileStore' WHERE id='$id'";

        $query = mysqli_query($con, $sql);
        if ($query) {
            echo "update Successfully";
            header("Refresh:0.1; url=../dashboard.php?product=update");
        } else {
            echo "date not update";
        }
    }
}

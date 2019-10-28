<?php

include("config.php");

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTempLoc = $_FILES['file']['tmp_name'];
    $fileStore = 'img/' . $fileName;
    move_uploaded_file($fileTempLoc, $fileStore);

    $sql = "INSERT INTO products(title,description,quantity,price,status,photo) VALUES('$title','$description','$quantity','$price','$status','$fileStore')";

    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Refresh:0.1; url=../dashboard.php?product=upload");
    } else {

        ?>

        <script>
            alert("Data Not Sent");
        </script>

<?php

    }
}

?>
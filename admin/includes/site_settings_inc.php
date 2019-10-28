<?php

include("config.php");

if (isset($_POST['submitLogo'])) {


    $siteName = $_POST['siteName'];
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTempLoc = $_FILES['file']['tmp_name'];
    $fileStore = 'logo/' . $fileName;
    move_uploaded_file($fileTempLoc, $fileStore);

    $sql = "INSERT INTO site_settings(site_name,site_logo) VALUES('$siteName','$fileStore')";

    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Refresh:0.1; url=../dashboard.php?settings=update");
    } else {
        echo "data not insert";
    }
}

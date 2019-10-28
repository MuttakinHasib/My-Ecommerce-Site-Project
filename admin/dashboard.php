<?php
include "includes/config.php";
if (empty($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    header("location: index.php");
    exit;
}

include("navbar.php");

?>

<!-- Start Body Area -->

<?php

include("pages/main-section.php");

?>

<!-- End Body Area -->

<?php

include("footer.php");

?>
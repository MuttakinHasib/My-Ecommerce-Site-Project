<?php
error_reporting(0);
include "includes/config.php";
if (empty($_SESSION)) {
    session_start();
}
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    header("location: dashboard.php");
    exit;
}
include "header.php";

?>

<div class="login-page">
    <div class="form-card">
        <div class="form-box">
            <form action="includes/login.php" method="POST">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="username">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="password">
                </div>
                <div class="btn-group">
                    <input type="submit" value="Login" name="login" class="login-btn col">
                    <a href="#" class="signUp-btn col">Sign up</a>
                </div>
                <div class="form-group text-center">
                    <p class="mt-4 text-primary">
                        <?php
                        if ($_GET['login'] == 'failed') {
                            echo "username or password is incorrect";
                        }
                        ?>
                    </p>
                </div>
                <div class="form-group text-center">
                    <a href="reset.php" class="forget-link d-block mt-2 text-danger">Forget your account ?</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>
<style>
    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .delete-section {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
        color: #fff;

    }

    .dl-box {
        background: #f36;
        padding: 5rem;
        box-shadow: 0 1rem 4rem .5rem #f36;
    }

    form {
        display: flex;
        justify-content: space-between;
        align-items: center
    }

    input {
        text-align: center;
        background: red;
        color: #fff;
        width: 100px;
        border: 1px solid red;
        height: 2.5rem;
        cursor: pointer;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .no {
        text-align: center;
        background: lightgreen;
        color: #f36;
        border: 1px solid lightgreen;
        padding: 8px 25px;
        cursor: pointer;
        font-weight: bold;
        letter-spacing: 1px;
        display: inline-block;
        text-decoration: none;

    }
</style>
<div class="delete-section">
    <div class="dl-box">
        <h1>Are you really want to delete this item ?</h1>
        <form method="POST">
            <input type="submit" name="delete" value="Yes">
            <a class="no" href="../dashboard.php">No</a>
        </form>
    </div>
</div>

<?php
$con = mysqli_connect('localhost', 'root', '', 'ecommerce_db');
if (!$con) {
    die("connection error");
}

if (isset($_POST['delete'])) {
    if ($_GET['id']) {
        $id = $_GET['id'];
        $sql = "DELETE FROM products WHERE id='$id'";
        $query = mysqli_query($con, $sql);
        if ($query) {
            echo "date delete Successfully";
            header("Refresh:0.1; url=../dashboard.php?product=deleted");
        } else {
            echo "date not deleted";
        }
    }
}

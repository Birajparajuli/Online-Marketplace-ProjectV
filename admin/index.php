<?php
include("./partials/header.php");

if (!isset($_SESSION["admin_email"])) {

    header("Location:login.php");
}
?>
    <?php include("./partials/nav.php")?>
    <h1><?=$_SESSION['admin_email']?></h1>
</body>
</html>
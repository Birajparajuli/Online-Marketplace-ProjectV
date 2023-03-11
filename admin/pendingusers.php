<?php
include("./partials/header.php");


if (!isset($_SESSION["admin_email"])) {

    header("Location:login.php");
}
include("./partials/nav.php")

    ?>
<div class="flex flex-grow">
    <div>
        <?php include("./partials/sidebar.php") ?>

    </div>
    <div class=" m-5 ">
        <div>
        <h4 class=" border-b-2 w-full text-lg font-bold">Pending Users</h4>

        </div>
        <div>
            
        </div>
        
    </div>

</div>


</body>

</html>
<?php

?>

<nav class="bg-white shadow">
  <div class="container mx-auto px-4">
    <div class="flex justify-between items-center py-4">
      <a href="/" class="text-lg font-bold text-gray-800">RamroBazar</a>
      <div class="flex">
        <a href="login.php" class="text-gray-600 hover:text-gray-800 mr-4 border-2 px-3 py-2 rounded-md text-sm	">Post Your Ad</a>
        <?php if(isset($_SESSION["user_email"])):?>
         <p class="text-white border-2 border-gray-800 px-3 py-2 text-sm rounded-md bg-gray-800 hover:bg-white hover:border-grey-600 hover:text-gray-600 transition-all	"><?= $_SESSION["user_email"]?></p>

          <?php else: ?>
        <a href="signup.php" class="text-white border-2 border-gray-800 px-3 py-2 text-sm rounded-md bg-gray-800 hover:bg-white hover:border-grey-600 hover:text-gray-600 transition-all	">Register</a>

        <?php endif?>
      </div>
    </div>
  </div>
</nav>


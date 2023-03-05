<?php
include("partials/header.php");
include("partials/nav.php");
include('partials/db.php');
// $id = $_GET['id']; 
if (!isset($_SESSION["user_email"])) {

    header("Location:login.php");
}

?>

<div class="grid lg:grid-cols-2 lg:px-20 py-5 px-5 gap-5 grid-cols-1">
    <div class="border-r-2">
        <img src="./media/uploads/user/avatar.png" alt="avatar-image" class="h-24 w-24 rounded-full border-2 " >
        <!-- <input type="file" name="user-image" class="" > -->
        <h3 class="font-bold">Biraj Parajuli</h3>
        <p>9823019616</p>
    </div>

    <div>
        <h3 class="text-2xl font-bold border-b-2 mb-4 ">Your Ads</h3>

        <div class="flex gap-4 border-2 p-1 rounded-md">
            <div>
                <img src="./media/uploads/ad/1677995472.jpg" alt=""  class="h-24 rounded-md ">
            </div>

            <div class="">
                <h3 class="font-bold">This is first Product </h3>

            </div>

            <div class=" flex flex-col items-center text-gray-700 border-l-2 pl-2">
            <a href="#" class="text-green-700 border-b-[1px] pb-1">
                    <i class="fa fa-rocket"></i>
                </a>
                <a href="#" class="text-red-900 border-b-[1px] pb-1">
                    <i class="fa fa-trash"></i>
                </a>
                <a href="#" class="border-b-[1px] pb-1">
                    <i class="fa fa-pencil"></i>
                </a>

                <a href="#" class=" ml-auto">
                    <i class="fa fa-eye"></i>
                </a>

            </div>
        </div>

    </div>
</div>
    
</body>
</html>
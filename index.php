<?php
include("partials/header.php");

?>

    <?php include("partials/nav.php")?>
    <div class=" bg-gray-100 m-4 p-10 rounded-md">
        <div>
            <h1 class="text-center text-4xl font-bold">What are You Looking For?</h1>
        </div>
        <div class="flex justify-center items-center my-5">
            <input type="text" name="search" id="" class="p-3 lg:w-[40vw] rounded-md border-2 border-gray-400">
            <input type="submit" value="Search" class=" ml-3 bg-black py-3 px-5 rounded-md text-white border-2 hover:bg-white hover:text-gray-800 hover:border-gray-900 transition-all cursor-pointer">
        </div>
    </div>

    <div class=" px-4 w-full my-4">
        <div class=" border-b-2">
            <h3 class="mt-2 mb-1 font-bold text-lg">Latest Uploads</h3>
        </div>
        
        <div class="grid grid-cols-4 gap-10">
            <a href="product.php">
            <div class="mt-4 border-2 rounded-md p-2 border-white hover:border-gray-300 transition-all hover:bg-slate-50">
                <div class="">
                <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-02.jpg" alt="" class="rounded-md">
                <h4 class="font-bold text-gray-800 mt-3">Men's Half Sleeve Printed Round neck Tshirt</h4>
                <span class="text-sm my-3">Brand New</span>
                <p class="text-gray-800 font-bold">Rs. 1,200</p>
                </div>
            </div>
            </a>
            <?php
            echo '<script type="text/javascript">toastr.error("Have Fun")</script>';
            ?>
            
        </div>
    </div>
</body>
</html>
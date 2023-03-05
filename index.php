<?php
include("partials/header.php");
include("partials/db.php");

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
        <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-4">
        <?php
        $sql = "SELECT * FROM ads";
        $query_run = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query_run)>0){ 
            foreach($query_run as $item) { ?>
                
                
                <a href="product.php?id=<?= $item["ad_id"]?>">
                <div class="mt-4 border-2 rounded-md p-2 border-white hover:border-gray-300 transition-all hover:bg-slate-50">
                <div class="">
                <img src="./media/uploads/ad/<?=$item["image_1"]?>" alt="" class="rounded-md h-48 w-96 object-cover">
                <h4 class="font-bold text-gray-800 mt-3"><?= $item["name"]?></h4>
                <?php if(($item["condition_id"] ) === '1'){ ?>
                    <span class="text-sm my-3">Brand New</span>
                <?php }elseif(($item["condition_id"] ) === '2'){ ?>
                    <span class="text-sm my-3">Like New</span>
                <?php }elseif(($item["condition_id"] ) === '3'){ ?>
                    <span class="text-sm my-3">Used</span>
                <?php }elseif(($item["condition_id"] ) === '4'){ ?>
                    <span class="text-sm my-3">Not Working</span>
                <?php } else {?>
                    <span class="text-sm my-3"></span>
                <?php }?>
                
                <p class="text-gray-800 font-bold">Rs.<?= $item["price"]?></p>
                </div>
            </div>
            </a>
           
            
        
            <?php } ?>
        <?php } ?>
        </div>
        
      
    </div>
</body>
</html>
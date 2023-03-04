<?php
include("partials/header.php");
include("partials/nav.php");

if(!isset($_SESSION["user_email"])){
    
    header("Location:login.php");
}

?>
<div class="px-10 lg:px-10">
    <div>
        <div class="">
            <div class="md:col-span-1 my-4">
                <div class="px-4 sm:px-0">
                    <h3 class=" font-semibold text-gray-900 text-lg">Post Advertisment</h3>
                    <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what
                        you share.</p>
                </div>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form action="#" method="POST">
                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6 border-b-2">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="company-website"
                                        class="block text-sm font-medium leading-6 text-gray-900">Product Name</label>
                                    <div class="mt-2 block rounded-md shadow-sm">

                                        <input type="text" name="company-website" id="company-website" class="block w-full flex-1 rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm placeholder:pl-2
                  " placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="about"
                                    class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                <div class="mt-2">
                                    <textarea id="about" name="about" rows="3"
                                        class="mt-1 block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:py-1.5 sm:text-sm placeholder:pl-2"
                                        placeholder="Brief description of your Product"></textarea>
                                </div>
                                
                            </div>
                            <div>
                                <label class="block text-sm font-medium leading-6 text-gray-900">Add Photos</label>
                                <input type="file" name="" id="">
                            </div>
                        </div>
                        <div class="bg-white px-4 py-5 sm:p-6  border-b-2">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="country"
                                        class="block text-sm font-medium leading-6 text-gray-900">Category</label>
                                    <select id="country" name="country" autocomplete="country-name"
                                        class="mt-2 block w-full rounded-md border-0 bg-white py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300">
                                        <option>Home Appliances</option>
                                        <option>Electronics</option>
                                        <option>Clothing</option>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="country"
                                        class="block text-sm font-medium leading-6 text-gray-900">Condition</label>
                                    <select id="country" name="country" autocomplete="country-name"
                                        class="mt-2 block w-full rounded-md border-0 bg-white py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300">
                                        <option>Brand New</option>
                                        <option>Like New</option>
                                        <option>Used</option>
                                        <option>Not Working</option>
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name"
                                        class="block text-sm font-medium leading-6 text-gray-900">Location</label>
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name"
                                        class="block text-sm font-medium leading-6 text-gray-900">Used For</label>
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400">
                                </div>
                            </div>
                        </div>
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name"
                                        class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="country"
                                        class="block text-sm font-medium leading-6 text-gray-900">Negotiable ?
                                    </label>
                                    <select id="country" name="country" autocomplete="country-name"
                                        class="mt-2 block w-full rounded-md border-0 bg-white py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300">
                                        <option>Negotiable</option>
                                        <option>Fixed</option>

                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name"
                                        class="block text-sm font-medium leading-6 text-gray-900">Expiray Date</label>
                                    <input type="date" name="first-name" id="first-name" autocomplete="given-name"
                                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:px-2">
                                </div>


                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center text-white border-2 border-gray-800 px-4 py-2 text-sm rounded-md bg-gray-800 hover:bg-white hover:border-grey-600 hover:text-gray-600 transition-all	">Add
                                Advertisment</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>






</div>
</body>

</html>
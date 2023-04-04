<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.4/tailwind.min.css">
</head>

<body>

    <!-- header start -->
    <?php include('header.php'); ?>

    <!-- header end -->





    <div class="grid grid-cols-4">

        <!-- Sidebar section -->
        <aside class="bg-gray-100 py-8 col-span-1">
            <div class="container mx-auto px-4">
                <form action="#" method="GET">
                    <div class="mb-4">
                        <label for="search" class="block text-gray-700 font-bold mb-2">Search</label>
                        <input type="text" name="search" id="search" class="w-full border-gray-400 border-2 p-2" placeholder="Search...">
                    </div>
                    <div class="mb-4">
                        <h2 class="text-gray-700 font-bold mb-2">Categories</h2>
                        <ul>
                            <li><a href="#" class="block text-blue-500 hover:text-blue-600 font-bold">Category 1</a></li>
                            <li><a href="#" class="block text-blue-500 hover:text-blue-600 font-bold">Category 2</a></li>
                            <li><a href="#" class="block text-blue-500 hover:text-blue-600 font-bold">Category 3</a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </aside>




        <!-- Main content section -->
        <main class="container mx-auto px-4 py-20 col-span-3">
            <div class="flex flex-wrap -mx-4">
                <!-- Blog post item -->
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100">
                        <img src="https://via.placeholder.com/500x300" alt="Blog post image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-lg font-bold mb-2">Blog post title</h2>
                            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod justo sed libero auctor, at porta risus tincidunt. Nam quis risus et metus pharetra euismod. Donec convallis ut nisl vel faucibus.</p>
                            <a href="#" class="block mt-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100">
                        <img src="https://via.placeholder.com/500x300" alt="Blog post image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-lg font-bold mb-2">Blog post title</h2>
                            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod justo sed libero auctor, at porta risus tincidunt. Nam quis risus et metus pharetra euismod. Donec convallis ut nisl vel faucibus.</p>
                            <a href="#" class="block mt-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100">
                        <img src="https://via.placeholder.com/500x300" alt="Blog post image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-lg font-bold mb-2">Blog post title</h2>
                            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod justo sed libero auctor, at porta risus tincidunt. Nam quis risus et metus pharetra euismod. Donec convallis ut nisl vel faucibus.</p>
                            <a href="#" class="block mt-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100">
                        <img src="https://via.placeholder.com/500x300" alt="Blog post image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-lg font-bold mb-2">Blog post title</h2>
                            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod justo sed libero auctor, at porta risus tincidunt. Nam quis risus et metus pharetra euismod. Donec convallis ut nisl vel faucibus.</p>
                            <a href="#" class="block mt-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100">
                        <img src="https://via.placeholder.com/500x300" alt="Blog post image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-lg font-bold mb-2">Blog post title</h2>
                            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod justo sed libero auctor, at porta risus tincidunt. Nam quis risus et metus pharetra euismod. Donec convallis ut nisl vel faucibus.</p>
                            <a href="#" class="block mt-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Repeat the above blog post item for each post -->

            </div>
        </main>

    </div>





    <!-- footer start -->

    <?php include('footer.php'); ?>

    <!-- footer end -->



</body>

</html>
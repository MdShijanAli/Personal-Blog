<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images//shijan.jpg" type="image/x-icon">
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
                        <input list="list" type="text" name="search" id="search" class="w-full border-gray-400 border-2 p-2" placeholder="Search...">
                        <datalist id="list">
                            <option value="What is SEO?">
                            <option value="What is PHP?">
                            <option value="What is Laravel?">
                        </datalist>
                    </div>
                    <div class="mb-4">
                        <h2 class="text-gray-700 font-bold mb-2">Categories</h2>
                        <ul>
                            <li><a href="#" class="block text-blue-500 hover:text-blue-600 font-bold">What is SEO?</a></li>
                            <li><a href="#" class="block text-blue-500 hover:text-blue-600 font-bold">What is PHP?</a></li>
                            <li><a href="#" class="block text-blue-500 hover:text-blue-600 font-bold">What is Laravel?</a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </aside>




        <!-- Main content section -->
        <main class="container mx-auto px-4 py-20 col-span-3">
            <div class="flex flex-wrap mx-10">
                <!-- Blog post item -->
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100">
                        <img src="https://searchengineland.com/wp-content/seloads/2023/02/what-is-seo-search-engine-optimization.jpg" alt="Blog post image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-lg font-bold mb-2">What is SEO?</h2>
                            <p class="text-gray-700 limited-text">SEO, or search engine optimization, is the process of optimizing websites so that they rank well on search engines through organic (non paid) searches. This is one of the most crucial marketing strategies for any business.


                                Because Google aims to provide a positive user experience for its searchers, it wants to present the best possible information available. Therefore the focus of SEO efforts should be the process of making sure search engines recognize your content as the leading information on the web for a particular search query.

                            </p>
                            <a href="#" class="block mt-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100">
                        <img src="https://www.websiterating.com/wp-content/uploads/what-is-php.png" alt="Blog post image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-lg font-bold mb-2">What is PHP?</h2>
                            <p class="text-gray-700 limited-text">PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.Instead of lots of commands to output HTML (as seen in C or Perl), PHP pages contain HTML with embedded code that does "something" (in this case, output "Hi, I'm a PHP script!"). The PHP code is enclosed in special start and end processing instructions that allow you to jump into and out of PHP mode

                                What distinguishes PHP from something like client-side JavaScript is that the code is executed on the server, generating HTML which is then sent to the client. The client would receive the results of running that script, but would not know what the underlying code was. You can even configure your web server to process all your HTML files with PHP, and then there's really no way that users can tell what you have up your sleeve.</p>
                            <a href="#" class="block mt-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100">
                        <img src="https://cdn.educba.com/academy/wp-content/uploads/2019/09/What-is-Laravel.png" alt="Blog post image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-lg font-bold mb-2">What is Laravel</h2>
                            <p class="text-gray-700 limited-text">Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in most web projects.Laravel is an easy-to-use web framework that will help you create extensible PHP-based websites and web applications at scale. Before creating a web app or website, you need to make a foundational decision as to what technology you are going to use.</p>
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
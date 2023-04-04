<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images//shijan.jpg" type="image/x-icon">
    <title>My Personal Blog</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
</head>

<body>

    <!-- header start -->
    <?php include('header.php'); ?>

    <!-- header end -->


    <!-- Hero Section Start -->
    <section class="mb-40">

        <div class="px-6 py-12 md:px-12 text-gray-800 text-center lg:text-left">
            <div class="container mx-auto xl:px-32">
                <div class="grid lg:grid-cols-2 flex items-center">
                    <div class="md:mt-12 lg:mt-0 mb-12 lg:mb-0">
                        <div class="block rounded-lg shadow-lg px-6 py-12 md:px-12 lg:-mr-14" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px);">
                            <h1 class="text-4xl md:text-5xl xl:text-6xl font-bold tracking-tight mb-12">Welcome
                                <br /><span class="text-blue-600">To Visit My Blog</span>
                            </h1>
                            <a class="inline-block px-7 py-3 mb-2 md:mb-0 md:mr-2 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="#blog" role="button">Get
                                started</a>

                        </div>
                    </div>
                    <div class="md:mb-12 lg:mb-0">
                        <img src="./images/shijan.jpg" class="w-full rounded-lg shadow-lg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->







    <!-- ====== Blog Section Start -->
    <section id="blog" class=" pb-10 lg:pb-20 lg:mx-20">
        <div class="container">
            <div class="flex flex-wrap justify-center -mx-4">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
                        <span class="font-semibold text-lg text-primary mb-2 block">
                            Our Blogs
                        </span>
                        <h2 class="
                   font-bold
                   text-3xl
                   sm:text-4xl
                   md:text-[40px]
                   text-dark
                   mb-4
                   ">
                            Our Recent News
                        </h2>
                        <p class="text-base text-body-color">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex ">
                <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                    <div class="max-w-[370px] mx-auto mb-10">
                        <div class="rounded overflow-hidden mb-8">
                            <img src="https://www.websiterating.com/wp-content/uploads/what-is-php.png" alt="image" class="w-full" />
                        </div>
                        <div>
                            <span class="
                      bg-primary
                      rounded
                      inline-block
                      text-center
                      py-1
                      px-4
                      text-xs
                      leading-loose
                      font-semibold
                      text-white
                      mb-5
                      ">
                                Dec 22, 2023
                            </span>
                            <h3>
                                <a href="javascript:void(0)" class="
                         font-semibold
                         text-xl
                         sm:text-2xl
                         lg:text-xl
                         xl:text-2xl
                         mb-4
                         inline-block
                         text-dark
                         hover:text-primary
                         ">
                                    What is PHP?
                                </a>
                            </h3>

                            <p class="text-base text-body-color limited-text">PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.Instead of lots of commands to output HTML (as seen in C or Perl), PHP pages contain HTML with embedded code that does "something" (in this case, output "Hi, I'm a PHP script!"). The PHP code is enclosed in special start and end processing instructions that allow you to jump into and out of PHP mode

                                What distinguishes PHP from something like client-side JavaScript is that the code is executed on the server, generating HTML which is then sent to the client. The client would receive the results of running that script, but would not know what the underlying code was. You can even configure your web server to process all your HTML files with PHP, and then there's really no way that users can tell what you have up your sleeve.</p>
                        </div>
                        <a href="#" class="block mt-4 bg-primary hover:bg-blue-600 text-white text-center font-bold py-2 px-4 rounded">Read More</a>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                    <div class="max-w-[370px] mx-auto mb-10">
                        <div class="rounded overflow-hidden mb-8">
                            <img src="https://searchengineland.com/wp-content/seloads/2023/02/what-is-seo-search-engine-optimization.jpg" alt="image" class="w-full" />
                        </div>
                        <div>
                            <span class="
                      bg-primary
                      rounded
                      inline-block
                      text-center
                      py-1
                      px-4
                      text-xs
                      leading-loose
                      font-semibold
                      text-white
                      mb-5
                      ">
                                Dec 22, 2023
                            </span>
                            <h3>
                                <a href="javascript:void(0)" class="
                         font-semibold
                         text-xl
                         sm:text-2xl
                         lg:text-xl
                         xl:text-2xl
                         mb-4
                         inline-block
                         text-dark
                         hover:text-primary
                         ">
                                    What is SEO?
                                </a>
                            </h3>

                            <p class="text-base text-body-color limited-text">SEO, or search engine optimization, is the process of optimizing websites so that they rank well on search engines through organic (non paid) searches. This is one of the most crucial marketing strategies for any business.


                                Because Google aims to provide a positive user experience for its searchers, it wants to present the best possible information available. Therefore the focus of SEO efforts should be the process of making sure search engines recognize your content as the leading information on the web for a particular search query.</p>
                        </div>
                        <a href="#" class="block mt-4 bg-primary hover:bg-blue-600 text-white text-center font-bold py-2 px-4 rounded">Read More</a>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                    <div class="max-w-[370px] mx-auto mb-10">
                        <div class="rounded overflow-hidden mb-8">
                            <img src="https://cdn.educba.com/academy/wp-content/uploads/2019/09/What-is-Laravel.png" alt="image" class="w-full" />
                        </div>
                        <div>
                            <span class="
                      bg-primary
                      rounded
                      inline-block
                      text-center
                      py-1
                      px-4
                      text-xs
                      leading-loose
                      font-semibold
                      text-white
                      mb-5
                      ">
                                Dec 22, 2023
                            </span>
                            <h3>
                                <a href="javascript:void(0)" class="
                         font-semibold
                         text-xl
                         sm:text-2xl
                         lg:text-xl
                         xl:text-2xl
                         mb-4
                         inline-block
                         text-dark
                         hover:text-primary
                         ">
                                    What is Laravel?
                                </a>
                            </h3>

                            <p class="text-base text-body-color limited-text">Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in most web projects.Laravel is an easy-to-use web framework that will help you create extensible PHP-based websites and web applications at scale. Before creating a web app or website, you need to make a foundational decision as to what technology you are going to use.</p>
                        </div>
                        <a href="#" class="block mt-4 bg-primary hover:bg-blue-600 text-white text-center font-bold py-2 px-4 rounded">Read More</a>
                    </div>
                </div>


            </div>
            <div class="text-center mt-10">
                <a href="blogs.php">
                    <button class="
            
            bg-primary
            mx-auto
            rounded
           text-center
            py-2
            px-5
            text-md
           
            font-semibold
            text-white
            mb-5
            ">
                        See More
                    </button>
                </a>
            </div>
        </div>
    </section>
    <!-- ====== Blog Section End -->



    <!-- newsletter section start -->


    <div class=" mx-auto">


        <section class=" text-gray-800 background-radial-gradient">
            <style>
                .background-radial-gradient {
                    background-color: hsl(218, 41%, 15%);
                    background-image: radial-gradient(650px circle at 0% 0%,
                            hsl(218, 41%, 35%) 15%,
                            hsl(218, 41%, 30%) 35%,
                            hsl(218, 41%, 20%) 75%,
                            hsl(218, 41%, 19%) 80%,
                            transparent 100%),
                        radial-gradient(1250px circle at 100% 100%,
                            hsl(218, 41%, 45%) 15%,
                            hsl(218, 41%, 30%) 35%,
                            hsl(218, 41%, 20%) 75%,
                            hsl(218, 41%, 19%) 80%,
                            transparent 100%);
                }
            </style>

            <div class="px-6 py-12 md:px-12 text-center lg:text-left">
                <div class="container mx-auto xl:px-32">
                    <div class="grid lg:grid-cols-2 gap-12 flex items-center">
                        <div class="mt-12 lg:mt-0">
                            <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12" style="color: hsl(218, 81%, 95%)">
                                Do not miss <br /><span style="color: hsl(218, 81%, 75%)">any updates</span>
                            </h1>
                            <p class="mb-4 opacity-70 lead" style="color: hsl(218, 81%, 85%)">
                                We will write rarely and only high-quality content.
                            </p>
                        </div>
                        <div class="mb-12 lg:mb-0">
                            <div class="block rounded-lg shadow-lg bg-white px-6 py-12 md:px-12">
                                <h2 class="text-3xl font-bold mb-12">Subscribe to the newsletter</h2>
                                <form>
                                    <div class="form-group mb-6">
                                        <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput90" placeholder="Name" />
                                    </div>
                                    <div class="form-group mb-6">
                                        <input type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput91" placeholder="Email address" />
                                    </div>
                                    <div class="form-group form-check text-center mb-6">
                                        <input type="checkbox" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer" id="exampleCheck96" checked />
                                        <label class="form-check-label inline-block text-gray-800" for="exampleCheck96">I have read and agree to the terms</label>
                                    </div>
                                    <button type="submit" class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">
                                        Subscribe
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>



    <!-- newsletter section end -->




    <!-- footer start -->

    <?php include('footer.php'); ?>

    <!-- footer end -->




</body>

</html>
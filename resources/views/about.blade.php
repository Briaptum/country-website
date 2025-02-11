<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-[url('/public/images/bg-2.jpg')] bg-cover bg-center bg-fixed min-h-screen relative">
    @include('components.header')
    <main>
        <div class="w-[90%] mx-auto">
            <div class="w-full h-[50vh] flex items-center justify-center">
                <div class="text-white text-center">
                    <h1 class="text-3xl lg:text-6xl font-bold">Everything on your screen!</h1>
                    <p class="text-xl text-white mt-4">No matter where you are, we can deliver your product to your home. We have a wide range of products from food to electronics.</p>

                    <form action="">
                        <input class="rounded-md p-2 outline-none text-black w-[20em] mt-4" type="email" placeholder="Enter your email">
                        <button class="bg-yellow-500 px-4 py-2 rounded-md mt-4 text-white uppercase hover:bg-yellow-300" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- Blog post -->

    <section class="w-full min-h-screen bg-gray-100 py-10">

        <div class="flex flex-col lg:flex-row bg-black w-[90%] lg:w-[70%] mx-auto min-h-[20vh] lg:h-[30vh] justify-between border-2 border-white rounded-2xl">
            <div class="p-4 flex-1 flex flex-col gap-4 justify-center">
                <span class="text-gray-300 text-xl">Blog*</span>
                <h1 class="text-white text-3xl font-bold">Information</h1>
                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem asperiores aut eveniet labore accusamus magni eum excepturi dolore quidem in.</p>
                <button class="bg-yellow-500 px-4 py-2 rounded-md mt-4 text-white text-sm uppercase hover:bg-yellow-300 w-[10em]">Read More</button>
            </div>
            <div class="flex-1">
                    <img class="w-full h-full object-cover" src="{{ asset('images/product.jpg') }}" alt="Blog 1">
            </div>
        </div>
        <!-- Featured Products -->
            <div class="w-[70%] mx-auto mt-10 ">
            <h1 class="text-gray-400 italic lg:text-3xl font-bold md:text-2xl">Featured Products</h1>
            <div class="min-h-[30em] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 bg-black p-10 rounded-2xl">
                <div class="bg-white flex flex-col gap-4 text-black p-4 rounded-2xl">
                    <img class="w-full h-full object-cover" src="{{ asset('images/product.jpg') }}" alt="Blog 1">
                    <h2 class="text-gray-400 italic text-xl font-bold">Product Name</h2>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem asperiores aut eveniet labore accusamus magni eum excepturi dolore quidem in.</p>
                </div>
                <div class="bg-white flex flex-col gap-4 text-black p-4 rounded-2xl">
                    <img class="w-full h-full object-cover" src="{{ asset('images/product.jpg') }}" alt="Blog 1">
                    <h2 class="text-gray-400 italic text-xl font-bold">Product Name</h2>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem asperiores aut eveniet labore accusamus magni eum excepturi dolore quidem in.</p>
                </div>
                <div class="bg-white flex flex-col gap-4 text-black p-4 rounded-2xl">
                    <img class="w-full h-full object-cover" src="{{ asset('images/product.jpg') }}" alt="Blog 1">
                    <h2 class="text-gray-400 italic text-xl font-bold">Product Name</h2>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem asperiores aut eveniet labore accusamus magni eum excepturi dolore quidem in.</p>
                </div>
            </div>
        </div>
    </section>
    @include('components.footer')
</body>
</html>
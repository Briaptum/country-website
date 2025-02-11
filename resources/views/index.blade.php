<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite('resources/css/app.css')
  </head>
  <body class="bg-[url('/public/images/gradient-bg.jpg')] bg-cover bg-center bg-fixed min-h-screen relative">
    @include('components.header')
    <main>
        <div class="w-[90%] h-screen p-10 mx-auto">
            <div class="flex flex-col lg:flex-row justify-evenly items-center">
                <div class="col-12 text-white flex-1">
                    <h1 class="text-3xl lg:text-6xl font-bold">Get The Best <span class="text-yellow-100 underline bg-red-500">Product</span> Deliver To Your Home!</h1>
                    <p class="text-xl text-white">No matter where you are, we can deliver your product to your home. We have a wide range of products from food to electronics.</p>

                        <button class="bg-yellow-500 px-4 py-2 rounded-md mt-4 text-white uppercase hover:bg-yellow-300">Order Now</button>
                        <button class="bg-yellow-500 px-4 py-2 rounded-md mt-4 text-white uppercase hover:bg-yellow-300">Be a member</button>
                </div>
                <div class="col-12 flex-1 mt-8 lg:mt-0">
                    <div class="flex justify-center lg:justify-end items-center">
                        <img src="{{ asset('images/food.png') }}" alt="Apple" class="w-full max-w-[30em] object-contain">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section class="w-full min-h-[50vh] bg-gray-100">
        <div class="w-[90%] mx-auto p-10">
            <div class="text-center">
                <h1 class="text-3xl lg:text-6xl font-bold mb-4">Thanks For Choosing Us</h1>
                <p class="text-1xl lg:text-2xl text-gray-500">We are a team of professionals who are dedicated to providing<br> the best service to our customers.</p>
            </div>
            <div class="grid grid-cols-6 gap-6 mt-10 items-center justify-center">
                <a href="#"><img src="{{ asset('images/apple-2.png') }}" alt="Apple" class="w-full max-w-[8em] object-contain mx-auto"></a>
                <a href="#"><img src="{{ asset('images/chat-gpt.png') }}" alt="Chat Gpt" class="w-full max-w-[8em] object-contain mx-auto"></a>
                <a href="#"><img src="{{ asset('images/uber.png') }}" alt="Uber" class="w-full max-w-[8em] object-contain mx-auto"></a>
                <a href="#"><img src="{{ asset('images/twitch.png') }}" alt="Twitch" class="w-full max-w-[8em] object-contain mx-auto"></a>
                <a href="#"><img src="{{ asset('images/sony.png') }}" alt="Sony" class="w-full max-w-[8em] object-contain mx-auto"></a>
                <a href="#"><img src="{{ asset('images/stocks.png') }}" alt="Stocks" class="w-full max-w-[8em] object-contain mx-auto"></a>
            </div>
        </div>
    </section>
    @include('components.footer')
  </body>
</html>
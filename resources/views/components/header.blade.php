@vite('resources/css/app.css')
@vite('resources/js/app.js')
@vite('resources/js/components/Example.jsx')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<script src="{{ asset('js/app.js') }}" defer></script>

<body>
    <header class="min-h-[100px] relative z-10 px-10 py-1">
        <div class="flex justify-between items-center text-white p-4 w-[70%] mx-auto">
            <nav class="flex-1">
                <!-- Mobile menu button -->
                <div class="menu:hidden">
                    <button id="mobile-menu-button" class="text-white hover:text-gray-300">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>

                <!-- Desktop menu -->
                <ul class="hidden menu:flex gap-6">
                    <li class="flex items-center gap-2">
                        <a id="example" class="text-white hover:text-gray-300" href="#">Home</a>
                        <i class="fas fa-home ml-1 text-xs"></i>
                    </li>
                    <li class="flex items-center gap-2">
                        <a id="about" class="text-white hover:text-gray-300" href="#" >About</a>
                        <i class="fas fa-info ml-1 text-xs"></i>
                    </li>
                    <li class="flex items-center gap-2">
                        <a id="contact" class="text-white hover:text-gray-300" href="#" >Contact</a>
                        <i class="fas fa-phone ml-1 text-xs"></i>
                    </li>
                    <li class="flex items-center gap-2">
                        <a id="login" class="text-white hover:text-gray-300" href="#">Login</a>
                        <i class="fas fa-user ml-1 text-xs"></i>
                    </li>
                    <div class="flex-1 flex justify-center relative group">
                        <button id="items" class="text-white hover:text-gray-300 flex items-center gap-2">
                            <a href="#">Products</a>
                            <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div class="flex flex-col menu:flex-row justify-evenly gap-2 absolute invisible group-hover:visible opacity-0 group-hover:opacity-100 top-full mt-2 min-w-[30em] bg-white rounded-md shadow-lg py-1 transition-all duration-300">
                            <div class="flex flex-col gap-2">
                                <h2 class="text-gray-800 font-bold text-center">Items 1</h2>
                                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Clothes</a>
                                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Shoes</a>
                                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Wear</a>
                                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Pants</a>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h2 class="text-gray-800 font-bold text-center">Items 2</h2>
                                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Socks</a>
                                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Sweater</a>
                                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">T-shirt</a>
                                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Category 4</a>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h2 class="text-gray-800 font-bold text-center">Items 3</h2>
                                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Jersey</a>
                                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Uniform</a>
                                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">For Kids</a>
                                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">For Women</a>
                            </div>
                        </div>
                    </div>
                </ul>

                <!-- Mobile menu (hidden by default) -->
                <div id="mobile-menu" class="hidden menu:hidden fixed inset-0 bg-black bg-opacity-50 z-50 transition-opacity duration-300 ease-in-out opacity-0">
                    <div class="bg-white w-64 h-full overflow-y-auto transform -translate-x-full transition-transform duration-300 ease-in-out">
                        <div class="p-4">
                            <button id="close-mobile-menu" class="text-gray-800 hover:text-gray-600">
                            </button>
                            <ul>
                                <li class="whitespace-nowrap">
                                    <a href="#" class="block text-gray-800 hover:bg-gray-100 text-sm">Home</a>
                                </li>
                                <li>
                                    <a href="#" class="block text-gray-800 hover:bg-gray-100 text-sm">About</a>
                                </li>
                                <li>
                                    <a href="#" class="block text-gray-800 hover:bg-gray-100 text-sm">Contact</a>
                                </li>
                                <li><a href="#" class="block text-gray-800 hover:bg-gray-100 text-sm">Login <i class="fas fa-user ml-1 text-xs"></i></a></li>
                                <li>
                                    <button class="w-full text-left py-2 text-gray-800 hover:bg-gray-100 whitespace-nowrap text-sm" onclick="toggleMobileSubmenu()">
                                        Product
                                        <i class="fas fa-chevron-down ml-1 text-xs"></i>
                                    </button>
                                    <div id="mobile-submenu" class="hidden pl-4">
                                        <div class="py-2 text-black">
                                            <h3 class="font-bold mb-2">Items 1</h3>
                                            <a href="#" class="block py-1 text-gray-800 hover:bg-gray-100">Clothes</a>
                                            <a href="#" class="block py-1 text-gray-800 hover:bg-gray-100">Shoes</a>
                                            <a href="#" class="block py-1 text-gray-800 hover:bg-gray-100">Wear</a>
                                            <a href="#" class="block py-1 text-gray-800 hover:bg-gray-100">Pants</a>
                                        </div>
                                        <div class="py-2 text-black">
                                            <h3 class="font-bold mb-2">Items 2</h3>
                                            <a href="#" class="block py-1 text-gray-800 hover:bg-gray-100">Socks</a>
                                            <a href="#" class="block py-1 text-gray-800 hover:bg-gray-100">Sweater</a>
                                            <a href="#" class="block py-1 text-gray-800 hover:bg-gray-100">T-shirt</a>
                                            <a href="#" class="block py-1 text-gray-800 hover:bg-gray-100">Category 4</a>
                                        </div>
                                        <div class="py-2 text-black">
                                            <h3 class="font-bold mb-2">Items 3</h3>
                                            <a href="#" class="block py-1 text-gray-800 hover:bg-gray-100">Jersey</a>
                                            <a href="#" class="block py-1 text-gray-800 hover:bg-gray-100">Uniform</a>
                                            <a href="#" class="block py-1 text-gray-800 hover:bg-gray-100">For Kids</a>
                                            <a href="#" class="block py-1 text-gray-800 hover:bg-gray-100">For Women</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="flex-1 flex justify-center">
                <a href="#"><img class="w-10 h-10 object-contain" src="{{ asset('images/apple.png') }}" alt="Logo"></a>
            </div>

            <div class="flex-1">
                <div class="flex-1">
                    <input id="search-input" class="min-w-full rounded-md p-2 outline-none text-black absolute left-0 top-20 invisible" type="text" placeholder="Search..">
                    <button id="search-button" class="absolute right-0 top-12 h-full bg-gray rounded-md p-2 invisible">
                        <i class="fa-solid fa-magnifying-glass text-black"></i>
                    </button>
                </div>
                <ul class="flex justify-end gap-6">
                    <li><a id="search" href="#"><i class="fa-solid fa-magnifying-glass text-white hover:text-custom-yellow"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-cart-shopping text-white hover:text-custom-yellow"></i></a></li>
                </ul>
            </div>
        </div>
    </header>

    

    <script>
        // Mobile menu functionality
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeMobileMenuButton = document.getElementById('close-mobile-menu');
        const mobileMenuContent = mobileMenu.querySelector('.bg-white');

        function openMobileMenu() {
            mobileMenu.classList.remove('hidden');
            setTimeout(() => {
                mobileMenu.classList.remove('opacity-0');
                mobileMenuContent.classList.remove('-translate-x-full');
            }, 10);
        }

        function closeMobileMenu() {
            mobileMenu.classList.add('opacity-0');
            mobileMenuContent.classList.add('-translate-x-full');
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 300);
        }

        mobileMenuButton.addEventListener('click', openMobileMenu);
        closeMobileMenuButton.addEventListener('click', closeMobileMenu);

        // Close menu when clicking outside
        mobileMenu.addEventListener('click', (e) => {
            if (e.target === mobileMenu) {
                closeMobileMenu();
            }
        });

        // Mobile submenu functionality
        function toggleMobileSubmenu() {
            const submenu = document.getElementById('mobile-submenu');
            submenu.classList.toggle('hidden');
        }

        const search = document.getElementById('search');
        search.addEventListener('click', () => {
            const searchInput = document.getElementById('search-input');
            searchInput.classList.toggle('invisible');
            const searchButton = document.getElementById('search-button');
            searchButton.classList.toggle('invisible');
        });
    </script>
</body>
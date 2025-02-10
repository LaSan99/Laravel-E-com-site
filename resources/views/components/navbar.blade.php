<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
                <span class="text-xl font-bold text-gray-800">SwiftBuy 🚀</span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('shop') }}" class="text-gray-600 hover:text-blue-600 transition duration-150">Shop</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition duration-150">Categories</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition duration-150">Deals</a>
                <div class="relative group">
                    <a href="{{ route('cart') }}" class="flex items-center space-x-1 text-gray-600 hover:text-blue-600 transition duration-150">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                        <span class="bg-blue-600 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                    </a>
                </div>
                <a href="{{ route('login') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-150">Login</a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden text-gray-600 hover:text-blue-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div class="hidden md:hidden pb-4">
            <a href="{{ route('shop') }}" class="block py-2 text-gray-600 hover:text-blue-600">Shop</a>
            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600">Categories</a>
            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600">Deals</a>
            <a href="{{ route('cart') }}" class="block py-2 text-gray-600 hover:text-blue-600">Cart (3)</a>
            <a href="{{ route('login') }}" class="block py-2 text-gray-600 hover:text-blue-600">Login</a>
        </div>
    </div>
</nav>

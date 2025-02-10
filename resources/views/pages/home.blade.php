@extends('layout.app')

@section('content')
<!-- Hero Section -->
<div class="relative overflow-hidden bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 text-white mb-12 rounded-3xl">
    <div class="absolute inset-0 opacity-10"></div>
    <div class="container mx-auto px-4 py-24 relative">
        <div class="max-w-3xl">
            <span class="inline-block px-4 py-1 rounded-full bg-white/20 backdrop-blur-sm text-sm font-medium mb-6">
                🚀 New Collection Available
            </span>
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                Discover the Future of Shopping
            </h1>
            <p class="text-xl md:text-2xl mb-10 text-white/90 leading-relaxed">
                Experience premium tech gadgets and accessories curated just for you. Elevate your digital lifestyle today.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('shop') }}" class="inline-flex items-center bg-white text-indigo-600 px-8 py-4 rounded-full font-semibold hover:bg-opacity-90 transition duration-300 shadow-lg hover:shadow-xl">
                    Shop Now
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="#featured" class="inline-flex items-center bg-white/10 backdrop-blur-sm text-white px-8 py-4 rounded-full font-semibold hover:bg-white/20 transition duration-300">
                    View Featured
                </a>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 right-0 w-1/3 h-full bg-white/5 backdrop-blur-3xl transform rotate-12 translate-x-1/3"></div>
</div>

<!-- Featured Categories -->
<div class="container mx-auto px-4 mb-12">
    <h2 class="text-2xl font-bold mb-6">Shop by Category</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        @php
        $categories = [
            ['name' => 'Audio', 'icon' => '🎧'],
            ['name' => 'Wearables', 'icon' => '⌚'],
            ['name' => 'Photography', 'icon' => '📸'],
            ['name' => 'Accessories', 'icon' => '🔌'],
        ];
        @endphp
        
        @foreach ($categories as $category)
        <a href="{{ route('shop') }}" class="bg-white rounded-lg p-6 text-center hover:shadow-md transition duration-200">
            <span class="text-4xl mb-2 block">{{ $category['icon'] }}</span>
            <h3 class="font-semibold">{{ $category['name'] }}</h3>
        </a>
        @endforeach
    </div>
</div>

<!-- Featured Products -->
<div class="container mx-auto px-4 mb-12">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Featured Products</h2>
        <a href="{{ route('shop') }}" class="text-blue-600 hover:text-blue-800">View All →</a>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($products->take(6) as $product)
        <div class="bg-white rounded-lg shadow-md overflow-hidden group hover:shadow-xl transition duration-200">
            <div class="relative">
                <img src="{{ $product['image'] }}" class="w-full h-48 object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition duration-200 flex items-center justify-center">
                    <a href="{{ route('product', ['id' => $product['id']]) }}" class="bg-white text-gray-900 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100">
                        View Details
                    </a>
                </div>
            </div>
            <div class="p-4">
                <h3 class="font-semibold text-lg mb-2">{{ $product['name'] }}</h3>
                <div class="flex justify-between items-center">
                    <span class="text-blue-600 font-bold">${{ $product['price'] }}</span>
                    <button class="text-sm bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Features Section -->
<div class="bg-gray-50 py-12 mb-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-lg mb-2">Quality Products</h3>
                <p class="text-gray-600">Curated selection of premium products</p>
            </div>
            <div class="text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8 4-8-4V5l8 4 8-4v2z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-lg mb-2">Fast Shipping</h3>
                <p class="text-gray-600">Quick delivery to your doorstep</p>
            </div>
            <div class="text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-lg mb-2">Secure Shopping</h3>
                <p class="text-gray-600">Safe and secure checkout process</p>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter Section -->
<div class="container mx-auto px-4 mb-12">
    <div class="bg-gray-100 rounded-lg p-8 text-center">
        <h2 class="text-2xl font-bold mb-4">Stay Updated</h2>
        <p class="text-gray-600 mb-6">Subscribe to our newsletter for the latest products and deals</p>
        <form class="max-w-md mx-auto flex gap-4">
            <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-2 rounded-lg border focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                Subscribe
            </button>
        </form>
    </div>
</div>
@endsection

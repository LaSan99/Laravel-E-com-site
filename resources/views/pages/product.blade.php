@extends('layout.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <nav class="text-gray-500 mb-8">
        <ol class="flex items-center space-x-2">
            <li><a href="{{ route('home') }}" class="hover:text-blue-600">Home</a></li>
            <li><span class="mx-2">/</span></li>
            <li><a href="{{ route('shop') }}" class="hover:text-blue-600">Shop</a></li>
            <li><span class="mx-2">/</span></li>
            <li class="text-gray-800">{{ $product['name'] }}</li>
        </ol>
    </nav>

    <!-- Product Details -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-8">
            <!-- Product Image Section -->
            <div class="space-y-4">
                <div class="aspect-w-1 aspect-h-1 rounded-lg overflow-hidden">
                    <img 
                        src="{{ $product['image'] }}" 
                        alt="{{ $product['name'] }}" 
                        class="w-full h-full object-cover"
                    >
                </div>
                <!-- Thumbnail Images -->
                @if(isset($product['gallery']))
                <div class="grid grid-cols-4 gap-4">
                    @foreach($product['gallery'] as $image)
                    <button class="border-2 {{ $loop->first ? 'border-blue-600' : 'border-transparent hover:border-blue-600' }} rounded-lg overflow-hidden">
                        <img src="{{ $image }}" alt="Thumbnail" class="w-full h-20 object-cover">
                    </button>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Product Info Section -->
            <div class="space-y-6">
                <div>
                    <span class="text-blue-600 font-semibold">{{ $product['category'] }}</span>
                    <h1 class="text-3xl font-bold mt-1">{{ $product['name'] }}</h1>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="flex items-center">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 {{ $i < $product['rating'] ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                        <span class="ml-2 text-gray-600">({{ rand(10, 50) }} reviews)</span>
                    </div>
                    <span class="{{ $product['stock'] ? 'text-green-500' : 'text-red-500' }}">
                        {{ $product['stock'] ? 'In Stock' : 'Out of Stock' }}
                    </span>
                </div>

                <div class="text-3xl font-bold">${{ $product['price'] }}</div>

                <p class="text-gray-600">{{ $product['description'] }}</p>

                <!-- Color Selection -->
                <div>
                    <h3 class="font-semibold mb-3">Color</h3>
                    <div class="flex space-x-3">
                        <button class="w-8 h-8 rounded-full bg-black ring-2 ring-offset-2 ring-black"></button>
                        <button class="w-8 h-8 rounded-full bg-white border-2 border-gray-300 hover:ring-2 hover:ring-offset-2 hover:ring-gray-300"></button>
                        <button class="w-8 h-8 rounded-full bg-blue-600 hover:ring-2 hover:ring-offset-2 hover:ring-blue-600"></button>
                    </div>
                </div>

                <!-- Quantity and Add to Cart -->
                <div class="flex items-center space-x-4">
                    <div class="flex items-center border rounded-lg">
                        <button class="px-4 py-2 hover:bg-gray-100">-</button>
                        <span class="px-4 py-2 border-x">1</span>
                        <button class="px-4 py-2 hover:bg-gray-100">+</button>
                    </div>
                    <button class="flex-1 bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700 transition duration-150" 
                            {{ !$product['stock'] ? 'disabled' : '' }}>
                        {{ $product['stock'] ? 'Add to Cart' : 'Out of Stock' }}
                    </button>
                    <button class="p-2 text-gray-500 hover:text-red-500 border rounded-lg hover:border-red-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </button>
                </div>

                <!-- Additional Info -->
                <div class="border-t pt-6 space-y-4">
                    <div class="flex items-center space-x-4 text-sm">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8 4-8-4V5l8 4 8-4v2z"/>
                            </svg>
                            Free Shipping
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                            Secure Payment
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Description Tabs -->
    <div class="mt-12">
        <div class="border-b">
            <nav class="flex space-x-8">
                <button class="border-b-2 border-blue-600 py-4 text-blue-600 font-medium">Description</button>
                <button class="py-4 text-gray-600 font-medium">Specifications</button>
                <button class="py-4 text-gray-600 font-medium">Reviews</button>
            </nav>
        </div>
        <div class="py-6">
            <h3 class="font-semibold mb-4">Product Description</h3>
            <div class="prose max-w-none">
                <p class="text-gray-600">{{ $product['description'] }}</p>
                @if(isset($product['features']))
                <ul class="list-disc list-inside mt-4 space-y-2 text-gray-600">
                    @foreach($product['features'] as $feature)
                        <li>{{ $feature }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

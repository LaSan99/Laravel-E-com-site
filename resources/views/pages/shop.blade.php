@extends('layout.app')

@section('content')
<div class="flex flex-col md:flex-row gap-6">
    <!-- Filters Sidebar -->
    <div class="w-full md:w-64 bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-lg font-bold mb-4">Filters</h2>
        
        <!-- Categories -->
        <div class="mb-6">
            <h3 class="font-semibold mb-2">Categories</h3>
            <div class="space-y-2">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox text-blue-600">
                    <span class="ml-2">Audio</span>
                </label>
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox text-blue-600">
                    <span class="ml-2">Wearables</span>
                </label>
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox text-blue-600">
                    <span class="ml-2">Photography</span>
                </label>
            </div>
        </div>

        <!-- Price Range -->
        <div class="mb-6">
            <h3 class="font-semibold mb-2">Price Range</h3>
            <div class="space-y-2">
                <input type="range" min="0" max="1000" class="w-full">
                <div class="flex justify-between text-sm text-gray-600">
                    <span>$0</span>
                    <span>$1000</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Products Grid -->
    <div class="flex-1">
        <!-- Sort Options -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">All Products</h1>
            <select class="border rounded-lg px-4 py-2">
                <option>Sort by: Featured</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
                <option>Newest First</option>
            </select>
        </div>

        <!-- Products -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($products as $product)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img 
                    src="{{ $product['image'] }}" 
                    alt="{{ $product['name'] }}" 
                    class="w-full h-48 object-cover"
                >
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-semibold text-lg">{{ $product['name'] }}</h3>
                        <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded text-sm">
                            {{ $product['category'] }}
                        </span>
                    </div>
                    <p class="text-gray-600 mb-4">{{ $product['description'] }}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold">${{ $product['price'] }}</span>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
            <nav class="flex space-x-2">
                <a href="#" class="px-4 py-2 border rounded-lg hover:bg-gray-50">Previous</a>
                <a href="#" class="px-4 py-2 border rounded-lg bg-blue-600 text-white">1</a>
                <a href="#" class="px-4 py-2 border rounded-lg hover:bg-gray-50">2</a>
                <a href="#" class="px-4 py-2 border rounded-lg hover:bg-gray-50">3</a>
                <a href="#" class="px-4 py-2 border rounded-lg hover:bg-gray-50">Next</a>
            </nav>
        </div>
    </div>
</div>
@endsection 
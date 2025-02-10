@extends('layout.app')

@section('content')
<div class="flex flex-col lg:flex-row gap-8">
    <!-- Cart Items1 -->
    <div class="flex-1">
        <h1 class="text-2xl font-bold mb-6">Shopping Cart</h1>
        
        <!-- Cart Items List -->
        <div class="bg-white rounded-lg shadow-md">
            <!-- Cart Item -->
            @for ($i = 1; $i <= 3; $i++)
            <div class="flex items-center p-6 hover:bg-gray-50 {{ $i > 1 ? 'border-t' : '' }}">
                @php
                    $images = [
                        'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=200&q=80',
                        'https://images.unsplash.com/photo-1546868871-7041f2a55e12?w=200&q=80',
                        'https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=200&q=80'
                    ];
                @endphp
                <img src="{{ $images[$i-1] }}" alt="Product {{ $i }}" class="w-24 h-24 object-cover rounded-lg">
                
                <div class="flex-1 ml-6">
                    <h3 class="font-semibold text-lg">Product {{ $i }}</h3>
                    <p class="text-gray-600">Category</p>
                </div>

                <div class="flex items-center gap-6">
                    <!-- Quantity Selector -->
                    <div class="flex items-center border rounded-lg">
                        <button class="px-3 py-1 hover:bg-gray-100">-</button>
                        <span class="px-3 py-1 border-x">1</span>
                        <button class="px-3 py-1 hover:bg-gray-100">+</button>
                    </div>

                    <!-- Price -->
                    <div class="text-right">
                        <p class="font-semibold">${{ rand(20, 100) }}.99</p>
                        <button class="text-red-600 hover:text-red-800 text-sm">Remove</button>
                    </div>
                </div>
            </div>
            @endfor

            <!-- Empty Cart Message -->
            @if (false)
            <div class="p-6 text-center">
                <p class="text-gray-600">Your cart is empty</p>
                <a href="{{ route('shop') }}" class="text-blue-600 hover:text-blue-800 mt-2 inline-block">Continue Shopping</a>
            </div>
            @endif
        </div>
    </div>

    <!-- Order Summary -->
    <div class="lg:w-80">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-lg font-bold mb-4">Order Summary</h2>
            
            <!-- Summary Items -->
            <div class="space-y-2 mb-4">
                <div class="flex justify-between">
                    <span class="text-gray-600">Subtotal</span>
                    <span class="font-semibold">$199.97</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-600">Shipping</span>
                    <span class="font-semibold">$9.99</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-600">Tax</span>
                    <span class="font-semibold">$20.00</span>
                </div>
            </div>

            <!-- Total -->
            <div class="border-t pt-4 mb-6">
                <div class="flex justify-between">
                    <span class="font-bold">Total</span>
                    <span class="font-bold">$229.96</span>
                </div>
            </div>

            <!-- Checkout Button -->
            <button class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700">
                Proceed to Checkout
            </button>

            <!-- Promo Code -->
            <div class="mt-4">
                <div class="flex gap-2">
                    <input type="text" placeholder="Promo code" class="flex-1 border rounded-lg px-4 py-2">
                    <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">Apply</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
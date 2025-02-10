<?php

use Illuminate\Support\Facades\Route;

// Define products array to be used across routes
$products = [
    [
        'id' => 1, 
        'name' => 'Wireless Headphones', 
        'price' => '199.99',
        'category' => 'Audio',
        'description' => 'Premium wireless headphones with active noise cancellation, delivering crystal-clear sound quality and exceptional comfort for extended listening sessions. Features include Bluetooth 5.0, 30-hour battery life, and touch controls.',
        'features' => [
            'Active Noise Cancellation',
            'Bluetooth 5.0 connectivity',
            '30-hour battery life',
            'Touch controls',
            'Voice assistant support',
            'Premium carrying case included'
        ],
        'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500&q=80',
        'gallery' => [
            'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=200&q=80',
            'https://images.unsplash.com/photo-1505740106531-4243f3831c78?w=200&q=80',
            'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=200&q=80',
            'https://images.unsplash.com/photo-1505740106531-4243f3831c78?w=200&q=80'
        ],
        'stock' => true,
        'rating' => 4
    ],
    [
        'id' => 2, 
        'name' => 'Smart Watch', 
        'price' => '299.99',
        'category' => 'Wearables',
        'description' => 'Feature-rich smartwatch with comprehensive health tracking capabilities. Monitor your fitness goals, receive notifications, and stay connected on the go.',
        'features' => [
            'Heart rate monitoring',
            'Sleep tracking',
            'GPS navigation',
            'Water resistant',
            'Up to 7 days battery life',
            'Multiple sport modes'
        ],
        'image' => 'https://images.unsplash.com/photo-1546868871-7041f2a55e12?w=500&q=80',
        'stock' => true,
        'rating' => 5
    ],
    [
        'id' => 3, 
        'name' => 'Camera Lens', 
        'price' => '449.99',
        'category' => 'Photography',
        'description' => 'Professional grade camera lens for DSLR cameras. Perfect for capturing stunning portraits and landscape photography.',
        'features' => [
            'Wide aperture f/1.8',
            'Weather sealed',
            'Silent autofocus',
            'Image stabilization',
            'Multi-coating',
            'Metal construction'
        ],
        'image' => 'https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=500&q=80',
        'stock' => true,
        'rating' => 4
    ],
    [
        'id' => 4, 
        'name' => 'Laptop', 
        'price' => '999.99',
        'category' => 'Computers',
        'description' => 'Powerful and portable laptop perfect for both work and entertainment. Features the latest processor and graphics capabilities.',
        'image' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=500&q=80',
        'stock' => true,
        'rating' => 5
    ],
    [
        'id' => 5, 
        'name' => 'Smartphone', 
        'price' => '799.99',
        'category' => 'Mobile',
        'description' => 'Latest generation smartphone with advanced camera system and all-day battery life.',
        'image' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=500&q=80',
        'stock' => true,
        'rating' => 4
    ],
    [
        'id' => 6, 
        'name' => 'Wireless Speaker', 
        'price' => '159.99',
        'category' => 'Audio',
        'description' => 'Portable wireless speaker with immersive 360-degree sound and waterproof design.',
        'image' => 'https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=500&q=80',
        'stock' => false,
        'rating' => 4
    ],
    [
        'id' => 7, 
        'name' => 'Tablet', 
        'price' => '399.99',
        'category' => 'Mobile',
        'description' => 'Versatile tablet perfect for productivity and entertainment on the go.',
        'image' => 'https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=500&q=80',
        'stock' => true,
        'rating' => 4
    ],
    [
        'id' => 8, 
        'name' => 'Gaming Mouse', 
        'price' => '79.99',
        'category' => 'Gaming',
        'description' => 'High-precision gaming mouse with customizable RGB lighting and programmable buttons.',
        'image' => 'https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=500&q=80',
        'stock' => true,
        'rating' => 5
    ],
    [
        'id' => 9, 
        'name' => 'Mechanical Keyboard', 
        'price' => '129.99',
        'category' => 'Gaming',
        'description' => 'Premium mechanical keyboard with RGB backlighting and durable switches.',
        'image' => 'https://images.unsplash.com/photo-1511467687858-23d96c32e4ae?w=500&q=80',
        'stock' => true,
        'rating' => 4
    ],
];

// Home page route
Route::get('/', function () use ($products) {
    return view('pages.home', ['products' => collect($products)]);
})->name('home');

// Shop page route
Route::get('/shop', function () use ($products) {
    return view('pages.shop', ['products' => collect($products)]);
})->name('shop');

// Product details page route
Route::get('/product/{id}', function ($id) use ($products) {
    $product = collect($products)->firstWhere('id', (int) $id);
    
    if (!$product) {
        abort(404);
    }
    
    return view('pages.product', compact('product'));
})->name('product');

// Cart page route
Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');

// Login page route
Route::get('/login', function () {
    return view('pages.login');
})->name('login');


@extends('layout.app')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center">
    <div class="w-full max-w-md">
        <!-- Login Form Card -->
        <div class="bg-white rounded-lg shadow-md p-8">
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold">Welcome Back</h1>
                <p class="text-gray-600">Please sign in to your account</p>
            </div>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                
                <!-- Email Input -->
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="w-full px-4 py-3 rounded-lg border focus:border-blue-500 focus:ring-blue-500"
                        placeholder="you@example.com"
                        required
                    >
                </div>

                <!-- Password Input -->
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="w-full px-4 py-3 rounded-lg border focus:border-blue-500 focus:ring-blue-500"
                        placeholder="••••••••"
                        required
                    >
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="text-blue-600 border-gray-300 rounded">
                        <span class="ml-2 text-gray-600">Remember me</span>
                    </label>
                    <a href="#" class="text-blue-600 hover:text-blue-800">Forgot password?</a>
                </div>

                <!-- Login Button -->
                <button 
                    type="submit" 
                    class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-200"
                >
                    Sign In
                </button>
            </form>

            <!-- Divider -->
            <div class="relative my-6">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white text-gray-500">Or continue with</span>
                </div>
            </div>

            <!-- Social Login Buttons -->
            <div class="grid grid-cols-2 gap-4">
                <button class="flex items-center justify-center px-4 py-2 border rounded-lg hover:bg-gray-50">
                    <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-5 h-5 mr-2">
                    Google
                </button>
                <button class="flex items-center justify-center px-4 py-2 border rounded-lg hover:bg-gray-50">
                    <img src="https://www.svgrepo.com/show/448234/facebook.svg" alt="Facebook" class="w-5 h-5 mr-2">
                    Facebook
                </button>
            </div>

            <!-- Sign Up Link -->
            <p class="text-center mt-8 text-gray-600">
                Don't have an account? 
                <a href="#" class="text-blue-600 hover:text-blue-800">Sign up</a>
            </p>
        </div>
    </div>
</div>
@endsection 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="min-h-screen flex items-center justify-center w-full">
        <div>
            @if(session()->has('loginError'))
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <span class="font-medium">{{ session('loginError') }}</span>
            </div>
            @endif
            <div class="bg-gray-900 shadow-md rounded-xl px-8 py-6 w-[360px]">
                <h1 class="text-2xl font-bold text-center mb-4 text-gray-200">Welcome Back!</h1>
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mb-4">
                        <label for="email" name="email" id="email" class="block text-sm font-medium text-gray-300 mb-2">Email Address</label>
                        <input type="email" name="email"id="email" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        @error('email')
                            is-invalid
                        @enderror
                        value="{{ old('email') }}"
                        placeholder="your@email.com"
                        >
                        @error('email')
                            <diV class="text-sm text-red-500">
                                {{$message}}
                            </diV>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" name="password" id="password" class="block text-sm font-medium text-gray-300 mb-2">Password</label>
                        <input type="password" name="password" id="password" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="Enter your password"
                        required>
                        @error('password')
                        <diV class="text-sm text-red-500">
                            {{$message}}
                        </diV>
                        @enderror
                    </div>
                    <button type="submit" class="mt-8 w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

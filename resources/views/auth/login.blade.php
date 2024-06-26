@extends('layouts.app')

@section('content')
<div class="flex items-center h-screen p-4 bg-gray-100 lg:justify-center">
    <div class="flex flex-col overflow-hidden bg-white rounded-md shadow-lg max md:flex-row md:flex-1 lg:max-w-screen-md">
        <div class="p-4 py-6 text-white bg-blue-500 md:w-80 md:flex-shrink-0 md:flex md:flex-col md:items-center md:justify-evenly">
            <div class="my-3 text-4xl font-bold tracking-wider text-center">
                <a href="#">DentAssist</a>
            </div>
            <p class="mt-6 font-normal text-center text-gray-300 md:mt-0">
                Bienvenue dans l'outils général de DentAssist veuillez vous connecter avec vos identifiants vendeur !
            </p>
        </div>
        <div class="p-5 bg-white md:flex-1">
            <h3 class="my-4 text-2xl font-semibold text-gray-700">Page de connexion</h3>
            <form action=" {{ route('login') }} " class="flex flex-col space-y-5" method="POST">
                @csrf
                <div class="flex flex-col space-y-1">
                    <label for="email" class="text-sm font-semibold text-gray-500">Email address</label>
                    <input type="email" name="email" id="email" autofocus class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200" />
                </div>
                <div class="flex flex-col space-y-1">
                    <div class="flex items-center justify-between">
                        <label for="password" class="text-sm font-semibold text-gray-500">Password</label>
                        <!-- <a href="#" class="text-sm text-blue-600 hover:underline focus:text-blue-800">Forgot Password?</a> -->
                    </div>
                    <input type="password" name="password" id="password" class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200" />
                </div>
                <!-- <div class="flex items-center space-x-2">
                    <input type="checkbox" id="remember" class="w-4 h-4 transition duration-300 rounded focus:ring-2 focus:ring-offset-0 focus:outline-none focus:ring-blue-200" />
                    <label for="remember" class="text-sm font-semibold text-gray-500">Remember me</label>
                </div> -->
                <div>
                    <button type="submit" class="w-full px-4 py-2 text-lg font-semibold text-white transition-colors duration-300 bg-blue-500 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-blue-200 focus:ring-4">
                        Se connecter
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
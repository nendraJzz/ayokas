<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Dashboard') }}</title>

        <!-- Icons -->
        <link rel="icon" href="{{ asset('svg/logo.svg') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            
            <!-- Page Content -->
            <main class="flex">
                <!-- Sidebar -->
                <div class="bg-gray-800 text-white w-64 space-y-6 py-7 px-5 h-screen hidden lg:block">
                    <nav class="mt-20">
                        
                        <!-- Link Dashboard -->
                        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-responsive-nav-link>

                        <!-- Link Dashboard -->
                        <x-responsive-nav-link :href="route('dashboard.pay')" :active="request()->routeIs('dashboard.pay')">
                            {{ __('Bayar') }}
                        </x-responsive-nav-link>
        
                       <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a href="{{ route('logout') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white"
                               @click.prevent="$root.submit();">
                                Logout
                            </a>
                        </form>      
                    </nav>
                </div>
                
                
                <!-- Main Content -->
                <div class="w-full mt-20">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>

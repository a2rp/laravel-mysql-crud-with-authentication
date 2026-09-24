<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Authenticated Laravel product inventory workspace.">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>{{ config('app.name', 'Product Manager') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <main>{{ $slot }}</main>
        </div>
        <footer class="app-footer bg-white px-6 py-5 text-center text-sm text-gray-500">
            Copyright © {{ date('Y') }}
            <a class="font-semibold text-gray-800 hover:text-teal-600" href="https://www.ashishranjan.net/" target="_blank" rel="noopener noreferrer">Ashish Ranjan</a>
            <span class="mx-2">·</span>
            <a class="hover:text-gray-800" href="https://github.com/a2rp" target="_blank" rel="noopener noreferrer" aria-label="GitHub">GitHub</a>
            <span class="mx-2">·</span>
            <a class="hover:text-gray-800" href="mailto:ash.ranjan09@gmail.com" aria-label="Email">Email</a>
        </footer>
    </body>
</html>
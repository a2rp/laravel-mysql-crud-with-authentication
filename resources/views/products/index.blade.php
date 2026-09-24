<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Authenticated Laravel product inventory management.">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>@yield('title', 'Product Manager') | Ashish Ranjan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="catalog-body">
<header class="catalog-header">
    <div class="catalog-header-inner">
        <a class="catalog-brand" href="{{ route('product/index') }}">
            <img src="{{ asset('logo.png') }}" alt="Product Manager logo">
            <span><small>Authenticated CRUD</small><strong>Product Manager</strong></span>
        </a>
        <nav class="catalog-nav" aria-label="Primary navigation">
            <a href="{{ route('product/index') }}">Products</a>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('product/create') }}">Add product</a>
        </nav>
    </div>
</header>
<main class="catalog-main"><section class="catalog-heading">
    <div><p class="catalog-eyebrow">Authenticated inventory</p><h1>Products</h1><p class="catalog-lead">Manage product names, quantities, and prices after signing in.</p></div>
    <a class="catalog-button" href="{{ route('product/create') }}">+ Add product</a>
</section>
@if(session()->has("success"))<div class="catalog-notice" role="status">{{ session("success") }}</div>@endif
<div class="catalog-table">
    <table>
        <thead><tr><th>ID</th><th>Name</th><th>Quantity</th><th>Price</th><th>Actions</th></tr></thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td><td><strong>{{ $product->name }}</strong></td><td>{{ $product->quantity }}</td><td>{{ number_format((float) $product->price, 2) }}</td>
                    <td><div class="catalog-actions"><a class="catalog-link" href="{{ route('product/edit', ['product' => $product]) }}">Edit</a><form action="{{ route('product/delete', ['product' => $product]) }}" method="POST">@csrf @method('DELETE')<button class="catalog-button catalog-danger" type="submit">Delete</button></form></div></td>
                </tr>
            @empty
                <tr><td class="catalog-empty" colspan="5">No products yet. Add your first product to get started.</td></tr>
            @endforelse
        </tbody>
    </table>
</div></main>
<footer class="catalog-footer">
    <p>Copyright © {{ date('Y') }} <a href="https://www.ashishranjan.net/" target="_blank" rel="noopener noreferrer">Ashish Ranjan</a></p>
    <div class="catalog-footer-links" aria-label="External links">
        <a class="catalog-icon-link" href="https://www.ashishranjan.net/" target="_blank" rel="noopener noreferrer" aria-label="Portfolio" title="Portfolio">◉</a>
        <a class="catalog-icon-link" href="https://github.com/a2rp" target="_blank" rel="noopener noreferrer" aria-label="GitHub" title="GitHub">GH</a>
        <a class="catalog-icon-link" href="https://codepen.io/ash1198" target="_blank" rel="noopener noreferrer" aria-label="CodePen" title="CodePen">CP</a>
        <a class="catalog-icon-link" href="https://www.linkedin.com/in/aashishranjan" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" title="LinkedIn">in</a>
        <a class="catalog-icon-link" href="https://www.facebook.com/theash.ashish/" target="_blank" rel="noopener noreferrer" aria-label="Facebook" title="Facebook">f</a>
        <a class="catalog-icon-link" href="https://www.youtube.com/@ashishranjan-ashz?sub_confirmation=1" target="_blank" rel="noopener noreferrer" aria-label="YouTube" title="YouTube">▶</a>
        <a class="catalog-icon-link" href="mailto:ash.ranjan09@gmail.com" aria-label="Email" title="Email">✉</a>
        <a class="catalog-icon-link" href="https://a2rp-donation-page.netlify.app/" target="_blank" rel="noopener noreferrer" aria-label="Support" title="Support">?</a>
        <a class="catalog-icon-link" href="https://buymeacoffee.com/a2rp" target="_blank" rel="noopener noreferrer" aria-label="Buy Me a Coffee" title="Buy Me a Coffee">☕</a>
        <a class="catalog-icon-link" href="https://patreon.com/a2rp" target="_blank" rel="noopener noreferrer" aria-label="Patreon" title="Patreon">♥</a>
    </div>
</footer>
</body>
</html>
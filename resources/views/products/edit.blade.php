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
<main class="catalog-main"><section class="catalog-heading"><div><p class="catalog-eyebrow">Authenticated inventory</p><h1>Edit product</h1><p class="catalog-lead">Update this product and keep its inventory record accurate.</p></div><a class="catalog-button" href="{{ route('product/index') }}">Back to products</a></section>
@if($errors->any())<div class="catalog-errors" role="alert"><strong>Please review the form:</strong><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
<form class="catalog-form" action="{{ route('product/update', ['product' => $product]) }}" method="POST">
    @csrf @method("put")
    <div class="catalog-field"><label for="name">Product name</label><input id="name" type="text" name="name" value="{{ old('name', $product->name) }}" placeholder="Enter product name" required></div>
    <div class="catalog-field"><label for="quantity">Quantity</label><input id="quantity" type="number" min="0" step="1" name="quantity" value="{{ old('quantity', $product->quantity) }}" placeholder="0" required></div>
    <div class="catalog-field"><label for="price">Price</label><input id="price" type="number" min="0" step="0.01" name="price" value="{{ old('price', $product->price) }}" placeholder="0.00" required></div>
    <button class="catalog-button" type="submit">Update product</button>
</form></main>
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
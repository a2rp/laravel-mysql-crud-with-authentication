# Laravel MySQL CRUD with Authentication

A Laravel product inventory application with authentication, profile management, protected product operations, Blade views, validation, and MySQL-ready Eloquent persistence.

## Features

- Authenticated dashboard with login, registration, password reset, and profile controls
- Protected product create, update, and delete operations
- Quantity and price validation with session feedback
- Responsive branded navigation and inventory forms
- Vite-managed Tailwind CSS and JavaScript assets
- Icon-style external links and dynamic copyright footer

## Tech Stack

- Laravel 10 and PHP 8.1+
- Blade, Breeze-style authentication, Eloquent, and MySQL-compatible storage
- Tailwind CSS and Vite

## Run Locally

Install PHP, Composer, Node.js, and MySQL, then run:

npm install
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate
npm run build
php artisan serve

Set the database values in .env before migrating. Register or sign in before using protected product routes.

This server-rendered Laravel application is not deployed to GitHub Pages. Use a PHP and MySQL-capable host for production.

## Future Direction

Search, filters, pagination, product images, role-based permissions, and audit history can be added while keeping authentication and product workflows intact.

## Links

- Portfolio: https://www.ashishranjan.net
- GitHub: https://github.com/a2rp
- CodePen: https://codepen.io/ash1198
- LinkedIn: https://www.linkedin.com/in/aashishranjan
- Facebook: https://www.facebook.com/theash.ashish/
- YouTube: https://www.youtube.com/@ashishranjan-ashz?sub_confirmation=1
- Email: mailto:ash.ranjan09@gmail.com

## Support

- Support: https://a2rp-donation-page.netlify.app/
- Buy Me A Coffee: https://buymeacoffee.com/a2rp
- Patreon: https://patreon.com/a2rp
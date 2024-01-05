<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="icon" href="img/r2.png" type="image">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="<?php echo url('/') ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="img/r.png" class="h-8" alt="Reag Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">REAG</span>
        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
            <a href="<?php echo url('faq') ?>" class="text-sm  text-gray-500 dark:text-white hover:underline">Support</a>
            <a href="<?php echo url('register') ?>" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Register</a>
            <a href="<?php echo url('login_member') ?>" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Login</a>
            <a href="<?php echo url('cart') ?>" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline"><img src="img/shopping-cart.png" alt=""></a>
        </div>
    </div>
</nav>
<nav class="bg-gray-50 dark:bg-gray-700">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Store</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline">Tentang Kami</a>
                </li>
                <li>
                    <a href="<?php echo url('product-list') ?>" class="text-gray-900 dark:text-white hover:underline">Produk</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>
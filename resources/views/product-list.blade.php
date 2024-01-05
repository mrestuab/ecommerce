<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>ROG | Republic of Gamers</title>
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
            </ul>
        </div>
    </div>
</nav>

<div class="m-10 justify-center">
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img src="img/l1.jpg" alt="laptop">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    <a href="<?php echo url('description') ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Read more
        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
    </a>
    </div>
</div>


<script src="../path/to/flowbite/dist/flowbite.js"></script>
</body>
</html>
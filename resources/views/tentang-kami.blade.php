<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tentang kami</title>
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

<section id="about-us" class="py-16">
<div class="container mx-auto py-2 flex">
    <div class="w-1/2 flex flex-col px-16 justify-center text-center">
<h2 class="text-3xl font-bold mb-5">
    About Us
</h2>
<p>“Berpikiran maju” adalah nilai inti dalam gaming. Untuk menumbangkan, untuk menyatukan dua nilai dan untuk menentang: ini adalah cara-cara gamers mewujudkan identitas sesungguhnya di dunia virtual.</p>
    </div>
    <div class="w-1/2 relative">
    <img class="w-full relative z-10" src="https://dlcdnwebimgs.asus.com/files/media/F437FDB6-360D-4B4F-A098-BC71FE9C59BC/v2/images/medium/2x/2__rog_mechanization_logo.webp" alt="">
    <div class="h-full w-full absolute top-6 left-6">
    </div>
</div>
</div>
</section>


</body>
</html>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>Register</title>
    <link rel="icon" href="img/r2.png" type="image">
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
    <div class="mt-20">

    </div>
</body>

</html> -->


@extends('app')

@section('title', 'REAG | Register')

@section('meta')
<meta name="csrf-token" content="{{ csrf_token()}}">
@endsection

@section('content')
<div class="max-w-lg h-screen flex flex-col items-center justify-center px-6 py-8 mx-auto lg:py-0">
    <a href="<?php echo url('/') ?>" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
        <img src="img/r.png" class="h-8" alt="Reag Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">REAG</span>
    </a><br />

    <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                Buat akun baru
            </h1>

            <!-- Error Alert -->
            @if ($errors->any())
            <p>{{$errors->first()}}</p>
            <div class="alert alert-danger">
                <strong>Gagal</strong>
            </div>
            @endif

            <form id="form-register" class="max-w-md mx-auto" action="/register">

                <div class="relative z-0 w-full mb-5 group">
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " required />
                    </div>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " required />
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " required />
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " required />
                </div>
                <button type="submit" class="w-full text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-blue-800">Daftar</button>
            </form>
        </div>
    </div>
</div>


@endsection

@push('js')
<script type="module">
    $(function() {

        $('#form-register').submit(function(e) {
            e.preventDefault();

            const name = $('input[name="name"]').val();
            const email = $('input[name="email"]').val();
            const password = $('input[name="password"]').val();
            const confirm_password = $('input[name="confirm_password"]').val();
            const csrf_token = $('meta[name="csrf-token"]').attr('content');

            if(password !== confirm_password) {
                alert('Konfirmasi password tidak sesuai');
                return
            }

            const payload = new FormData();
            payload.set('name', name);
            payload.set('email', email);
            payload.set('password', password);
            payload.set('_token', csrf_token);

            $.ajax({
                url: '/api/register',
                type: 'POST',
                data: payload,
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data) {
                        alert('Akun berhasil dibuat')
                        window.location.href = '/login';
                    }
                }
            });
        });

    });
</script>
@endpush

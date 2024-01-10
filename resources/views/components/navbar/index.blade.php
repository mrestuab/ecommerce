@section('navbar')
<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-1 px-4">
        <a href="<?php echo url('/') ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="/img/r.png" class="h-8" alt="Reag Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">REAG</span>
        </a>
        <div class="flex items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <div>
                    <a href="<?php echo url('login') ?>" class="text-sm  text-gray-500 hover:underline">Login</a> |
                    <a href="<?php echo url('register') ?>" class="text-sm text-gray-500 hover:underline">Register</a>
                </div>
                <a href="<?php echo url('cart') ?>"  class="relative inline-flex items-center p-3 text-sm font-medium text-center text-gray-500">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9V4a3 3 0 0 0-6 0v5m9.92 10H2.08a1 1 0 0 1-1-1.077L2 6h14l.917 11.923A1 1 0 0 1 15.92 19Z" />
                    </svg>
                    <span class="sr-only">Cart</span>
                    <div class="absolute inline-flex items-center justify-center w-5 h-5 text-[8px] font-bold text-white bg-red-500 border-2 border-white rounded-full top-1 end-0 dark:border-gray-900">20</div>
                </a>
            </div>
            <button data-collapse-toggle="navbar-language" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden focus:outline-none " aria-controls="navbar-language" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-language">
            <ul class="flex justify-items-center items-center flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 text-sm">
                <li>
                    <a href="<?php echo url('/') ?>" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Toko</a>
                </li>
                <li>
                    <a href="<?php echo url('tentang-kami') ?>" class="text-gray-900 dark:text-white hover:underline">Tentang Kami</a>
                </li>
                <li>
                    <a href="<?php echo url('products') ?>" class="text-gray-900 dark:text-white hover:underline">Produk</a>
                </li>

                <li>
                    <a href="<?php echo url('support') ?>" class="text-gray-900 dark:text-white hover:underline">Support</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endsection

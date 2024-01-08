@extends('app')
@extends('components.navbar.index')
@extends('components.footer.index')

@section('title', 'REAG | Produk Detail')

@section('content')
<div class="bg-gray-100 dark:bg-gray-800 py-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4">
                <div class="h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                    <img class="w-full h-full object-cover" src="/img/l1.jpg" alt="Product Image">
                </div>
                <div class="flex md:flex-row flex-col gap-2 mb-4">
                    <div class="w-full md:w-1/2 px-2">
                        <button class="w-full bg-gray-900 text-white py-2 px-4 font-bold hover:bg-gray-800">Masukan Keranjang</button>
                    </div>
                    <div class="w-full md:w-1/2 px-2">
                        <button class="w-full bg-emerald-600 text-white py-2 px-4 font-bold hover:bg-emerald-700">Beli Sekarang</button>
                    </div>
                </div>
            </div>
            <div class="md:flex-1 px-4">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">ASUS ROG STRIX G15 G513RM RYZEN 9-6900HX RTX3060 16G 1TB 300Hz W11 OHS - 15.6" FHD</h2>
                <div class="flex mb-4">
                    <div class="mr-4">
                        <span class="font-bold text-gray-700 dark:text-gray-300">Price:</span>
                        <span class="text-gray-600 dark:text-gray-300">$29.99</span>
                    </div>
                </div>
                <div>
                    <span class="font-bold text-gray-700 dark:text-gray-300">Deskripsi:</span>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">
                    <div class="border-t-2 justify-center">
                        <p class="text-lg font-bold">Sistem Operasi</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit quo perferendis illum voluptate alias minus, nesciunt veritatis commodi voluptatibus expedita asperiores error saepe iusto ut? Nulla magnam provident natus et.</p>
                    </div>

                    <div class="border-t-2 justify-center">
                        <p class="text-lg font-bold">Prosesor</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ex tempora voluptate aliquid ducimus voluptates ab ad dolor fugiat nemo, in deserunt blanditiis facilis quia nostrum id accusantium? Doloribus, in?</p>
                    </div>

                    <div class="border-t-2 justify-center">
                        <p class="text-lg font-bold">Grafis</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ex tempora voluptate aliquid ducimus voluptates ab ad dolor fugiat nemo, in deserunt blanditiis facilis quia nostrum id accusantium? Doloribus, in?</p>
                    </div>

                    <div class="border-t-2 justify-center">
                        <p class="text-lg font-bold">Tampilan</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ex tempora voluptate aliquid ducimus voluptates ab ad dolor fugiat nemo, in deserunt blanditiis facilis quia nostrum id accusantium? Doloribus, in?</p>
                    </div>

                    <div class="border-t-2 justify-center">
                        <p class="text-lg font-bold">Memori</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ex tempora voluptate aliquid ducimus voluptates ab ad dolor fugiat nemo, in deserunt blanditiis facilis quia nostrum id accusantium? Doloribus, in?</p>
                    </div>

                    <div class="border-t-2 justify-center">
                        <p class="text-lg font-bold">Penyimpanan</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ex tempora voluptate aliquid ducimus voluptates ab ad dolor fugiat nemo, in deserunt blanditiis facilis quia nostrum id accusantium? Doloribus, in?</p>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

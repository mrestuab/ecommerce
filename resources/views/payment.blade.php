@extends('app')
@extends('components.navbar.index')
@extends('components.footer.index')

@section('title', 'REAG | Produk Detail')

@section('content')
<div class="grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32">
    <div class="mt-10 bg-white px-4 pt-8 lg:mt-0">
        <p class="text-xl font-medium">Detail Pembayaran</p>
        <p class="text-gray-400 text-sm mt-2">
            Selesaikan pesanan kamu dengan memberikan detail pembayaran.
        </p>
        <div class="">
            <label for="name" class="mt-4 mb-2 block text-sm font-medium">Nama Lengkap</label>
            <div class="relative">
                <input type="text" id="name" name="name" class="w-full rounded-md border border-gray-200 px-4 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" />
            </div>
            <label for="phone_number" class="mt-4 mb-2 block text-sm font-medium">Nomor Handphone</label>
            <div class="relative">
                <input type="text" id="phone_number" name="phone_number" class="w-full rounded-md border border-gray-200 px-4 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" />
            </div>
            <label for="email" class="mt-4 mb-2 block text-sm font-medium">Email</label>
            <div class="relative">
                <input type="text" id="email" name="email" class="w-full rounded-md border border-gray-200 px-4 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" />
            </div>
            <label for="message" class="mt-4 mb-2 block text-sm font-medium">Alamat</label>
            <div class="relative">
                <textarea id="message" rows="4" class="w-full rounded-md border border-gray-200 px-4 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"></textarea>
            </div>
            <div class="flex flex-col sm:flex-row gap-3">
                <div class="w-full md:w-1/2 flex flex-col">
                    <label for="billing-address" class="mt-4 mb-2 block text-sm font-medium">Provinsi</label>
                    <select type="text" name="billing-state" class="w-full rounded-md border border-gray-200 px-4 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500">
                        <option value="State">State</option>
                    </select>
                </div>
                <div class="w-full md:w-1/2 flex flex-col">
                    <label for="billing-address" class="mt-4 mb-2 block text-sm font-medium">Kecamatan</label>
                    <select type="text" name="billing-state" class="w-full rounded-md border border-gray-200 px-4 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500">
                        <option value="State">State</option>
                    </select>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-3">
                <div class="w-full md:w-1/2 flex flex-col">
                    <label for="billing-address" class="mt-4 mb-2 block text-sm font-medium">Kode Pos</label>
                    <select type="text" name="billing-state" class="w-full rounded-md border border-gray-200 px-4 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500">
                        <option value="State">State</option>
                    </select>
                </div>
            </div>

            <!-- Total -->
            <div class="mt-6 border-t border-b py-2">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-gray-900">Subtotal</p>
                    <p class="font-semibold text-gray-900">$399.00</p>
                </div>
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-gray-900">Shipping</p>
                    <p class="font-semibold text-gray-900">$8.00</p>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-between">
                <p class="text-sm font-medium text-gray-900">Total</p>
                <p class="text-2xl font-semibold text-gray-900">$408.00</p>
            </div>
        </div>
        <button class="mt-4 mb-8 w-full bg-emerald-600 px-6 py-3 font-medium text-white">Buat Pesanan</button>
    </div>
    <div class="px-4 pt-8">
        <p class="text-xl font-medium">List Produk</p>
        <p class="text-gray-400 text-sm mt-2">Berikut daftar produk yang akan kamu beli.</p>
        <div class="mt-8 space-y-3 border bg-white px-2 py-4 sm:px-6">
            <div class="flex flex-col rounded-lg bg-white sm:flex-row">
                <img class="m-2 h-24 w-28 rounded-md border object-cover object-center" src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" />
                <div class="flex w-full flex-col px-4 py-4">
                    <span class="font-semibold">Nike Air Max Pro 8888 - Super Light</span>
                    <span class="float-right text-gray-400">42EU - 8.5US</span>
                    <p class="text-lg font-bold">$138.99</p>
                </div>
            </div>
            <div class="flex flex-col rounded-lg bg-white sm:flex-row">
                <img class="m-2 h-24 w-28 rounded-md border object-cover object-center" src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" />
                <div class="flex w-full flex-col px-4 py-4">
                    <span class="font-semibold">Nike Air Max Pro 8888 - Super Light</span>
                    <span class="float-right text-gray-400">42EU - 8.5US</span>
                    <p class="mt-auto text-lg font-bold">$238.99</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

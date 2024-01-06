@extends('layout.app')
@extends('components.navbar.index')
@extends('components.footer.index')

@section('title', 'REAG | Home')

@section('content')
<div class="relative bg-slate-100 dark:bg-slate-800 py-20 sm:py-32 sm:overflow-x-auto sm:flex">
        <div class="flex flex-col sm:flex-row items-center sm:flex-none min-w-full sm:px-6 lg:px-8 gap-y-16 gap-x-10">
        @foreach ($categories as $category)
            <a id="" href="<?php echo url('product-list') ?>" class="flex-none w-[23.625rem] max-w-full sm:ml-auto">
                <div class="bg-slate-200 rounded-lg ring-1 ring-slate-900/5 overflow-hidden shadow-md shadow-slate-700/5">
                    <img alt="{{$category['nama_kategori']}}" loading="lazy" width="750" height="1624"
                        decoding="async" data-nimg="1" class=""
                        style="color:transparent" src="/uploads/{{$category['gambar']}}">
                        <span class="">{{$category['nama_kategori']}}</span>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection

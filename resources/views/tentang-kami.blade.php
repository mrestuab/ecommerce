@extends('app')
@extends('components.navbar.index')
@extends('components.footer.index')

@section('title', 'REAG | Tentang Kami')

@section('content')
<section id="about-us" class="py-16">
    <div class="container mx-auto py-2 justify-items-center items-center flex md:flex-row gap-2 flex-col">
        <div class="w-full md:w-1/2 flex flex-col px-16 justify-center text-center">
            <h2 class="text-3xl font-bold mb-5">
                About Us
            </h2>
            <p>“Berpikiran maju” adalah nilai inti dalam gaming. Untuk menumbangkan, untuk menyatukan dua nilai dan untuk menentang: ini adalah cara-cara gamers mewujudkan identitas sesungguhnya di dunia virtual.</p>
        </div>
        <div class="w-[70%] md:w-1/2 relative">
            <img class="w-full relative z-10" src="https://dlcdnwebimgs.asus.com/files/media/F437FDB6-360D-4B4F-A098-BC71FE9C59BC/v2/images/medium/2x/2__rog_mechanization_logo.webp" alt="">
            </div>
        </div>
    </div>
</section>

<section id="logo" class="py-16">
    <div class="w-[70%] md:w-1/2 relative">
        <img class="w-50 pl-48 relative z-10" src="img/logo.png" alt="">
        </div>
</section>

@endsection

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/sponsor.css') }}">
<link href='https://fonts.googleapis.com/css?family=Noto Serif' rel='stylesheet'>*,
<x-layout>
    <x-slot name="title">Sponsorship</x-slot>
    <div class="home-profil">
        <div class="text-home-profil">
            <h1 class="text-arunika-sponsor">Sponsored By</h1>
            {{-- <h1 class="text-arunika2">"Cahaya Matahari Yang Baru Saja Terbit"</h1> --}}
            <h4 class="text-lorem"></h4>
            {{-- <button class="tentang-kami">Tentang Kami</button> --}}
        </div>
        <div class="diamond">
            <img class="pict-sponsor-diamond1" src="pict/sponsor/hotel-ciputra3-diamond.png" alt="">
            <img class="pict-sponsor-diamond2" src="pict/sponsor/barbys-diamond.png" alt="">
        </div>
        <div class="platinum">
            <img class="pict-sponsor-platinum" src="pict/sponsor/citraland-platinum.png" alt="">
        </div>
        <div class="gold">
            <img class="pict-sponsor-gold" src="pict/sponsor/paper-star-gold.png" alt="">
            <img class="pict-sponsor-gold" src="pict/sponsor/the-catur-vila-gold.png" alt="">
            <img class="pict-sponsor-gold" src="pict/sponsor/trinusa-jaya-indo-gold.png" alt="">
            <img class="pict-sponsor-gold" src="pict/sponsor/abadi-comm-gold.png" alt="">
        </div>
        <div>
            <img class="pict-sponsor-profil" src="pict/gambar-arunika.svg" alt="">
        </div>
        <img class="flower1" src="pict/flower1.svg" alt="">
        <img class="flower2" src="pict/flower1.svg" alt="">
        <div class="second">
            <section id="" class="">
                <svg class="editorial" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28 " preserveAspectRatio="none">
                    <defs>
                        <path id="gentle-wave" d="M-160 44c30 0   58-18 88-18s    58 18 88 18    58-18 88-18    58 18 88 18    v44h-352z" />
                    </defs>
                    <g class="parallax1">
                        <use xlink:href="#gentle-wave" x="50" y="3" fill="#F7C273" />
                    </g>
                    <g class="parallax2">
                        <use xlink:href="#gentle-wave" x="50" y="0" fill="#DE8040" />
                    </g>
                    <g class="parallax3">
                        <use xlink:href="#gentle-wave" x="50" y="9" fill="#D55B22" />
                    </g>
                    <g class="parallax4">
                        <use xlink:href="#gentle-wave" x="50" y="6" fill="#fff" />
                    </g>
                </svg>

            </section>
        </div>
    </div>

</x-layout>

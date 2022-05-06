<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link href='https://fonts.googleapis.com/css?family=Noto Serif' rel='stylesheet'>*,
<x-layout>
    <x-slot name="title">Pengumpulan</x-slot>
    <div class="home-arunika">
        <div class="wrapper">
            <div class="border"></div>
            <div class="main-element"><img class="pict-home-barcode" src="pict/barcode-pengumpulan.jpeg" alt=""></div>
        </div>
        <img class="flower1" src="pict/flower1.svg" alt="">
        <img class="flower2" src="pict/flower1.svg" alt="">
        <div class="text-home-2">
            <h1 class="text-arunika">Pengumpulan</h1>
            <h4 class="text-2">Scan barcode disamping untuk melakukan pengumpulang beserta pendaftaran. Atau
                kalian dapat meneka tombol dibawah ini</h4>
            <h4 class="text-lorem"></h4>
            <button class="tentang-kami"><a class="tentang-kami" href="https://linktr.ee/ciputrafilmfest">Link
                    Pengumpulan</a></button>
            {{-- <button class="tentang-kami">Tentang Kami</button> --}}
        </div>
        <img class="flower1" src="pict/flower1.svg" alt="">
        <img class="flower2" src="pict/flower1.svg" alt="">


    </div>
    <footer>
        <svg class="editorial2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="gentle-wave"
                    d="M-160 44c30 0   58-18 88-18s    58 18 88 18    58-18 88-18    58 18 88 18    v44h-352z" />
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
    </footer>
</x-layout>

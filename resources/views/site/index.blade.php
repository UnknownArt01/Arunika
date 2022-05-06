<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/linimasa.css') }}">
<link href='https://fonts.googleapis.com/css?family=Noto Serif' rel='stylesheet'>*,
<x-layout>
    <x-slot name="title">Arunika</x-slot>
    
    <section id="section-1">
        <div class="home-arunika">
            <div class="text-home-arunika">
                <h1 class="text-arunika">ARUNIKA</h1>
                <h1 class="text-arunika2">"Cahaya Matahari Yang Baru Saja Terbit"</h1>
                <h4 class="text-lorem">Ciputra Film Festival 2022 adalah festival film nasional perdana yang
                    diselenggarakan oleh Fakultas Ilmu Komunikasi dan Bisnis Media Universitas Ciputra, di tahun ini CFF
                    mengangkat tema "Arunika" yaitu cahaya matahari terbit, yang sesuai dengan visi dan misi CFF yaitu untuk
                    memberi apresiasi bagi sineas muda Indonesia. CFF menyediakan screening bagi film-film terpilih yang
                    akan ditayangkan di Dian Auditorium, Universitas Ciputra, Surabaya.</h4>
                <button class="tentang-kami"><a class="tentang-kami" href="#section-2">Lini
                        Masa</a></button>
            </div>
            <div>
                <img class="pict-home-arunika" src="pict/gambar-arunika.svg" alt="">
            </div>
    
            <img class="flower1" src="pict/flower1.svg" alt="">
            <img class="flower2" src="pict/flower1.svg" alt="">
            
        </div>
        
        <div class="display">
            {{-- <div>
                <div class="wrapper">
                    <div class="border"></div>
                    <div class="main-element2"><img class="pict-home-barcode" src="pict/logo-brown.svg" alt=""></div>
                </div>
                <img class="flower1" src="pict/flower1.svg" alt="">
                <img class="flower2" src="pict/flower1.svg" alt="">
            </div> --}}
            <div class="alt-vtl">
                
            </div>
    
        </div>
    </section>
    <section id="section-2">
        <div class="timeline-poseng">
        <h1 class="linimasa-h1">Lini Masa</h1>
        <img class="pict-timeline" src="pict/timeline.png" alt="">
    </div>
    </section>
    
    
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

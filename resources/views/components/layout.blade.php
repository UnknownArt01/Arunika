<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Arunika' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Noto Serif' rel='stylesheet'>*,
</head>
<body>
    <img src="pict/background.svg" alt="" class="background">
    <main>
        <header>
            <div class="logo_kiri">
                <img src="pict/logo-uc.png" alt="" class="uc-logo">
                <img src="pict/fikom-logo.svg" alt="" class="fikom-logo">
            </div>
            <div class="tengah">
                <ul class="head-li">
                    <li><a href="{{ route('site.index') }}">Home</a></li> 
                    <li><a href="{{ route('site.pengumpulan2') }}">Pengumpulan</a></li>
                    <li><a href="{{ route('site.panduan') }}">Panduan</a></li>
                    <li><a href="{{ route('site.screening') }}">Screening</a></li>
                    <li><a href="{{ route('site.juri') }}">Juri</a></li>
                    <li><a href="{{ route('site.sponsor') }}">Sponsor</a></li>
                    <li><a href="{{ route('site.profil') }}">Profil</a></li>
                </ul>
            </div>
            <div class="logo_kanan"><img src="pict/logo-brown.svg" alt=""></div>
        </header>
        {{ $slot }}
        <footer></footer>
    </main>
</body>
</html>
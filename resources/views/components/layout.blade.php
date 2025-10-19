<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav>
        <x-nav-link href='/' active="123" :highlights="false">
            Home
        </x-nav-link>

        <x-nav-link href='/about'>
            About
        </x-nav-link>

        <x-nav-link href='/contact'>
            Contact
        </x-nav-link>

        <x-nav-link href='/siswa'>
            Siswa
        </x-nav-link>
    </nav>

    <main>
        {{ $slot }}
    </main>

    <footer>
        <h3>ini footer dari <span>{{$footer}}</span></h3>
    </footer>
</body>
</html>
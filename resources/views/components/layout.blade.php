<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'NONèTimes - Hompage' }}</title>
    {{-- Google Fonts, Bootstrap e my style css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Asset LiveWire --}}
    @livewireStyles
</head>

<body>
    {{-- NavBar inizio --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">NONèTimes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @if(Route::currentRouteName() == 'home') active @endif" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::currentRouteName() == 'create.article') active @endif" href="{{ route('create.article') }}">Link</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- NavBar fine --}}
    {{ $slot }}
    @livewireScripts
</body>

</html>
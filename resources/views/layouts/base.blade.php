<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name', 'EduPlanner') }}</title>

        @if (isset($meta) && $meta->hasActualContent())
            {{ $meta }}
        @else
            <x-shared.meta />
        @endif

        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
              rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.44.0/dist/tabler-icons.min.css"
              rel="stylesheet">

        @livewireStyles
        @fluxAppearance
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @stack('head')
    </head>

    <body class="min-h-dvh bg-white dark:bg-neutral-900 text-neutral-900 dark:text-neutral-100 antialiased">
        {{ $slot }}

        @livewireScripts
        @fluxScripts
        @stack('body')
    </body>

</html>

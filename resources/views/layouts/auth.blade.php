<x-layouts.base>
    <div class="h-screen grid sm:grid-cols-2">
        <div class="hidden sm:block relative">
            <div class="absolute z-10 p-6 w-full h-full flex items-center justify-center ">
                <img class="max-w-full aspect-square w-60" src="{{ asset('assets/img/app-logo.png') }}"
                     alt="Logo SMKN 1 Tangerang">
            </div>
            <img class="object-cover h-full" src="{{ asset('assets/img/app-bg-pattern.png') }}" alt="Background Pattern">
        </div>
        <div class="p-6">
            {{ $slot }}
        </div>
    </div>
</x-layouts.base>

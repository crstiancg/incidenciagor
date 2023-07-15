<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b864ea5e19.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('css')

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased bg-gray-100">
    <x-banner />
    @php
        $links = [
            [
                'title' => 'Dashboard',
                'url' => route('admin.dashboard.index'),
                'active' => request()->routeIs('admin.dashboard*'),
                'icon' => 'fa-solid fa-gauge'
            ],

            [
                'title' => 'Roles',
                'url' => route('admin.roles.index'),
                'active' => request()->routeIs('admin.roles*'),
                'icon' => 'fa-solid fa-gauge'
            ],

            [
                'title' => 'Equipos',
                'url' => route('admin.equipos.index'),
                'active' => request()->routeIs('admin.equipos.*'),
                'icon' => 'fa-solid fa-desktop'
            ],

            [
                'title' => 'Tipos',
                'url' => route('admin.tipos.index'),
                'active' => request()->routeIs('admin.tipos.*'),
                'icon' => 'fa-solid fa-bars'
            ],

            [
                'title' => 'Oficinas',
                'url' => route('admin.oficinas.index'),
                'active' => request()->routeIs('admin.oficinas.*'),
                'icon' => 'fa-solid fa-house-laptop'
            ],

            [
                'title' => 'Incidencias',
                'url' => route('admin.incidencias.index'),
                'active' => request()->routeIs('admin.incidencias.*'),
                'icon' => 'fa-solid fa-bolt'
            ],

            [
                'title' => 'Historial',
                'url' => route('admin.historial.index'),
                'active' => request()->routeIs('admin.historial.*'),
                'icon' => 'fa-brands fa-slack',
            ],

            [
                'title' => 'Lista de Fallos',
                'url' => route('admin.etiquetas.index'),
                'active' => request()->routeIs('admin.etiquetas.*'),
                'icon' => 'fa-brands fa-slack',
            ],
        ];
    @endphp
    <div class="flex" x-data="{ 
        open: false,
        openSiderbar: true,
        }">
        <div :class="{
            'lg:block': openSiderbar,
        }" class="w-64 flex-shrink-0 hidden lg:block">

            <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar"
                aria-controls="default-sidebar" type="button"
                class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                    </path>
                </svg>
            </button>
            
            @include('layouts.partiels.admin.siderbar')

        </div>
        <div class="w-full">

            @include('layouts.partiels.admin.navigation')
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                {{ $slot }}
            </div>
        </div>
    </div>

    @stack('modals')

    @livewireScripts

    @stack('js')

</body>

</html>

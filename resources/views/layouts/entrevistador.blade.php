<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')
            <div class="container py-8 grid grid-cols-5">
                <aside>
                    <h1 class="font-bold text-lg mb-4">Edición de Colaborador</h1>

                    <ul class="text-sm text-gray-600">
                        <li class="leading-7 mb-1 border-l-4 @routeIs('entrevistador.collaborators.edit', $collaborator) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{ route('entrevistador.collaborators.edit', $collaborator) }}">Información Personal</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 @routeIs('entrevistador.collaborators.datogenerals', $collaborator) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{ route('entrevistador.collaborators.datogenerals', $collaborator) }}">Información General</a>
                        </li>

                        <li class="leading-7 mb-1 border-l-4 @routeIs('entrevistador.collaborators.datosmedicos', $collaborator) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{ route('entrevistador.collaborators.datosmedicos', $collaborator) }}">Datos Médicos</a>
                        </li>

                        <li class="leading-7 mb-1 border-l-4 @routeIs('entrevistador.collaborators.trainings', $collaborator) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{ route('entrevistador.collaborators.trainings', $collaborator) }}">Capacitaciones</a>
                        </li>
                    </ul>
                </aside>

                <main class="card col-span-4">
                    <div class="card-body text-gray-600">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>

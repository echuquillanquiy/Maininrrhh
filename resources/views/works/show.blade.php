<x-app-layout>

    <section class="bg-gray-700 py-12 mb-12">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                <img class="h-60 w-full object-cover" src="{{ Storage::url($work->image) }}" alt="{{ $work->slug }}">
            </figure>

            <div class="text-white">
                <h1 class="text-4xl mb-6">{{ $work->titulo }}</h1>
                <p class="mb-3"><i class="fas fa-tags mr-2"></i>Categoría: <strong>{{ $work->type->name }}</strong></p>
                <p class="mb-3 text-green-400"><i class="fas fa-calendar-alt mr-2"></i>Inicio: {{ $work->inicio }}</p>
                <p class="mb-3 text-red-400"><i class="fas fa-calendar-alt mr-2"></i>Fin: {{ $work->fin }}</p>
                <p><i class="fas fa-users mr-2"></i>Postulantes: {{ $work->applicants_count }}</p>
            </div>

        </div>
    </section>

    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="order-2 lg:col-span-2 lg:order-1">
            <section class="card mb-4">
                <div class="card-body">
                    <h1 class="font-bold text-3xl mb-2">Descripción del Puesto</h1>

                    <p class="text-gray-700 text-base">{{ $work->descripcion }}</p>
                </div>
            </section>

            <section class="card mb-4">
                <div class="card-body">
                    <h1 class="font-bold text-3xl mb-2">Requerimientos del Puesto</h1>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
                        @foreach($work->requirements as $requirement)
                            <li class="text-gray-700 text-base"><i class="fas fa-check text-gray-600 mr-2"></i> {{ $requirement->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </section>

            <section class="card">
                <div class="card-body">
                    <figure>
                        <img class="h-80 w-full object-cover" src="{{ Storage::url($work->image) }}" alt="{{ $work->slug }}">
                    </figure>
                </div>
            </section>

        </div>

        <div class="order-1 lg:order-2">
            <section class="card mb-4">
                <div class="card-body">

                    <div class="flex items-center">
                        <img class="h-10 w-10 object-cover shadow-md rounded-full" src="{{ asset('img/logos/logo-icon.jpg') }}" alt="Logo Mainin">
                        <div class="ml-4">
                            <h1 class="font-bold text-gray-500 text-md">Pertenece a nuestro equipo</h1>
                            <a class="text-blue-400 text-sm font-bold">{{ '@' . Str::limit($work->titulo, 25) }}</a>
                        </div>
                    </div>

                    @can('applied', $work)
                        <a href="{{ route('works.index') }}" class="btn bg-blue-500 btn-block mt-4 text-white">Ya postulaste a esta vacante</a>
                    @else
                        <form action="{{ route('works.applied', $work) }}" method="post">
                            @csrf
                            <button class="btn btn-danger btn-block mt-4">Postular a esta vacante</button>
                        </form>
                    @endcan

                </div>
            </section>

            <aside class="hidden lg:block">
                @foreach($similares as $similar)
                    <article class="flex mb-6">
                        <img class="h-32 w-40 object-cover" src="{{ Storage::url($similar->image) }}" alt="{{ $similar->titulo }}">
                        <div class="ml-3">
                            <h1>
                                <a class="font-bold text-gray-500 mb-3" href="{{ route('works.show', $similar) }}">{{ Str::limit($similar->titulo, 40) }}</a>
                            </h1>

                            <div class="flex items-center mb-2">
                                <img class="w-8 w-8 object-cover shadow-lg rounded-full" src="{{ asset('img/logos/logo-icon.jpg') }}" alt="Logo Mainin">
                                <p class="text-gray-700 text-md ml-2 font-bold">MAININ</p>
                            </div>

                            <p class="text-sm text-gray-700 font-bold"><i class="fas fa-tags mr-1 text-yellow-600"></i>Categoría: {{ $similar->type->name }}</p>
                        </div>
                    </article>
                @endforeach
            </aside>
        </div>
    </div>

</x-app-layout>

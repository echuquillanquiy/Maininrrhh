<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('img/home/portada.jpg') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-40">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">MANTENIMIENTO E INGENIERIA INDUSTRIAL</h1>
                <p class="text-white text-lg mb-4 mt-2">Somos una empresa proveedora de bienes y servicios de Mantenimiento eléctrico, mecanico, ejecución de obras electromecanicas, construccion civil en los sectores de minería, industria, energéticas y edificaciones en general desde la etapa de planificación, consultoría y ejecución.</p>

                @livewire('search')
            </div>
        </div>
    </section>

    <section class="mt-12">
        <h1 class="text-gray-600 text-center text-3xl mb-6">SERVICIOS</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-6 gap-y-8">
            @foreach($services as $service)
                <article>
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{ Storage::url($service->url) }}" alt="">
                    </figure>

                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">{{ $service->name }}</h1>
                    </header>

                    <p class="text-sm text-gray-500">{{ Str::limit($service->descripcion, 70) }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="mt-12 bg-gray-700 py-12">
        <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3">
            <div>
                <h1 class="text-center text-white text-3xl text-bold">¿QUIÉNES SOMOS?</h1>
                <p class="text-center text-white mt-3">
                    Somos una empresa proveedora de bienes y servicios de Mantenimiento eléctrico, mecanico, ejecución de obras electromecanicas,
                    construccion civil en los sectores de minería, industria, energéticas y edificaciones en general desde la etapa de planificación, consultoría y ejecución.
                </p>
            </div>

            <div>
                <h1 class="text-center text-white text-3xl text-bold">MISIÓN</h1>
                <p class="text-center text-white mt-3">
                    Brindamos un servicio de excelencia integral en el área de mantenimiento, ingeniería y construcción de proyectos, con un valor
                    agregado adicional, trabajando en un entorno que motive y desarrolle nuestro personal.
                </p>
            </div>

            <div>
                <h1 class="text-center text-white text-3xl text-bold">VISIÓN</h1>
                <p class="text-center text-white mt-3">
                    Ser una empresa confiable y reconocida en la presentación de bienes y servicios, con responsabilidad, equidad social y un alto espíritu innovador.
                </p>
            </div>
        </div>

        <div class="flex justify-center mb-4 mt-4">
            <a href="{{ route('works.index') }}" type="submit" class="bg-red-500 hover:bg-red-dark text-white font-bold py-2 px-4 rounded right-0 top-0 mt-4">
                ¿Quieres ser parte de nosotros?
            </a>
        </div>

    </section>

    <section class="my-12">
        <h1 class="text-center text-3xl text-gray-600">ÚLTIMOS TRABAJOS</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Nuestro servicio de calidad nos ha permitido trabajar en los proyectos de minería más importantes del Perú.</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

            @foreach($works as $work)
                <x-work-card :work="$work"/>
            @endforeach
        </div>
    </section>

</x-app-layout>

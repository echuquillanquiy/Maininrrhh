<x-app-layout>

    <section class="bg-cover" style="background-image: url({{ asset('img/works/portada2.jpg') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-40">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">UNETE A NUESTRO GRANDIOSO GRUPO DE TRABAJO</h1>
                <p class="text-white text-lg mb-4 mt-2">
                    Trabaja con nosotros, pertenece a una de las mas grande empresas del Perú
                </p>

                @livewire('search')
            </div>
        </div>
    </section>

    @livewire('works-index')

</x-app-layout>

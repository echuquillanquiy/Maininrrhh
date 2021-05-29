<div class="container py-6">
    <x-table-responsive>
        <div class="px-6 py-4">
            <input wire:keydown="limpiar_page" wire:model="search" type="text" class="form-input w-full shadow-sm rounded-lg" placeholder="Ingrese su busqueda...">
        </div>
        @if($works->count())
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50 text-center">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Título
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Aplicantes
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Publicación
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Estado
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($works as $work)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="{{ Storage::url($work->image) }}" alt="{{ $work->slug }}">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $work->titulo }}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        {{ $work->type->name }}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="text-sm text-gray-900">{{ $work->applicants_count }}</div>
                            <div class="text-sm text-gray-500">Postulantes</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-green-500">{{ $work->inicio }}</div>
                            <div class="text-sm text-red-400">{{ $work->fin }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">

                            @switch($work->estado)
                                @case(1)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                      PUBLICADO
                                    </span>
                                @break

                                @case(2)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-600">
                                          TERMINADO
                                    </span>
                                @break
                                @default

                            @endswitch
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="px-6 py-4">
                {{ $works->links() }}
            </div>
        @else
            <div class="px-6 py-4 card text-red-500">
                No hay coincidencias en tu busqueda...
            </div>
        @endif
    </x-table-responsive>
</div>

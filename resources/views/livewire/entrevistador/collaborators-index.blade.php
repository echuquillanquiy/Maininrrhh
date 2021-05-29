<div class="lg:max-w-8xl mx-auto px-4 py-6">
    <x-table-responsive>
        <div class="px-6 py-4 flex">
            <input wire:keydown="limpiar_page" wire:model="search" type="text" class="form-input shadow-sm rounded-lg" placeholder="Ingrese su busqueda...">
            <a class="btn btn-danger" href="">Nuevo Colaborador</a>
        </div>
        @if($collaborators->count())
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombres y Apellidos
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Documento
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Domicilio
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Ubigeo
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
                    @foreach($collaborators as $collaborator)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="{{ Storage::url($collaborator->image->url) }}" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $collaborator->nombres }}, {{ $collaborator->apellidos }}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{ $collaborator->correo }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $collaborator->documento }}</div>
                                <div class="text-sm text-gray-500">{{ $collaborator->ndocumento }}</div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $collaborator->direccion }}</div>
                                <div class="text-sm text-gray-500">
                                    {{ $collaborator->departament->name }}, {{ $collaborator->province->name }}, {{ $collaborator->district->name }}
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $collaborator->ubigee->ubigeo_cod }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @switch($collaborator->estado)
                                    @case(1)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            ACEPTADO
                                        </span>
                                        @break

                                    @case(2)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-600">
                                            RECHAZADO
                                        </span>
                                        @break
                                    @default

                                @endswitch
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('entrevistador.collaborators.edit', $collaborator) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                <!-- More people... -->
                </tbody>
            </table>

            <div class="px-6 py-4">
                {{ $collaborators->links() }}
            </div>
        @else
            <div class="px-6 py-4 card text-red-500">
                No hay coincidencias en tu busqueda...
            </div>
        @endif
    </x-table-responsive>

</div>

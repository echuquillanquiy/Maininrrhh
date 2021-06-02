<div>
    <x-slot name="collaborator">
        {{ $collaborator->id }}
    </x-slot>

    <h1 class="text-2xl font-bold">Información Médica: {{ $collaborator->nombres }}, {{ $collaborator->apellidos }}</h1>
    <hr class="mt-2 mb-6">
    @if($collaborator->medicals->count())
        @foreach($collaborator->medicals as $item)
        <article class="card">
            <div class="card-body bg-gray-100">
                @if($medical->id == $item->id)
                    <div class="grid grid-cols-1 lg:grid-cols-5 gap-2">
                        <div class="mt-1 col-span-2">
                            <label class="w-32">Categoría: </label>
                            <select wire:model="medical.client_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach($clients as $client)
                                    <option value="{{ $client->id }}">{{ $client->razon_social }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-2">
                            <label class="w-32">Talla:</label>
                            <input wire:model="medical.talla" wire:keyup="calcularImc()" type="text" class="form-input w-full rounded-lg" disabled>
                            @error('medical.talla')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2">
                            <label class="w-32">Peso:</label>
                            <input wire:model="medical.peso" wire:change="calcularImc()" type="text" class="form-input w-full rounded-lg">
                            @error('medical.peso')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2">
                            <label class="w-32">Imc:</label>
                            <input wire:model="medical.imc" type="text" class="form-input w-full rounded-lg" disabled>
                            @error('medical.imc')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2 col-span-3">
                            <label class="w-32">Dx. Nutrición:</label>
                            <input wire:model="medical.diagnutricion" type="text" class="form-input w-full rounded-lg" disabled>
                            @error('medical.diagnutricion')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2">
                            <label class="w-32">Examen Médico</label>
                            <input wire:model="medical.fechaexmedico" type="date" class="form-input w-full rounded-lg">
                            @error('medical.fechaexmedico')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2">
                            <label class="w-32">Levantamiento Obs</label>
                            <input wire:model="medical.levantamientoobs" type="date" class="form-input w-full rounded-lg">
                            @error('medical.levantamientoobs')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2 col-span-3">
                            <label class="w-32">Centro médico de atención:</label>
                            <input wire:model="medical.centromedico" type="text" class="form-input w-full rounded-lg">
                            @error('medical.centromedico')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2 col-span-2">
                            <label class="w-32">Aptitud:</label>
                            <input wire:model="medical.aptitud" type="text" class="form-input w-full rounded-lg">
                            @error('medical.aptitud')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-4 flex justify-end">
                        <button class="btn btn-danger" wire:click="cancel">Cancelar</button>
                        <button class="btn btn-primary ml-2" wire:click="update">Actualizar</button>
                    </div>
                @else
                    <div class="grid grid-cols-1 lg:grid-cols-6">
                        <div class="mb-4 col-span-2">
                            <label class="mb-3">Empresa Cliente:</label>
                            <p class="text-base">
                                <strong> {{ $item->client->razon_social }}</strong>
                            </p>
                        </div>

                        <div class="mb-4">
                            <label class="mb-3">Peso:</label>
                            <p class="text-base">
                                <strong> {{ $item->peso }}</strong>
                            </p>
                        </div>

                        <div class="mb-4">
                            <label class="mb-3">Talla:</label>
                            <p class="text-base">
                                <strong> {{ $item->talla }}</strong>
                            </p>
                        </div>

                        <div class="mb-4">
                            <label class="mb-3">IMC:</label>
                            <p class="text-base">
                                <strong> {{ $item->imc }}</strong>
                            </p>
                        </div>

                        <div class="mb-4">
                            <label class="mb-3">Dx. Nutrición:</label>
                            <p class="text-base">
                                <strong> {{ $item->diagnutricion }}</strong>
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-4">
                        <div class="mb-4">
                            <label class="mb-3">Fecha Examen médico:</label>
                            <p class="text-base">
                                <strong> {{ $item->fechaexmedico }}</strong>
                            </p>
                        </div>

                        <div class="mb-4">
                            <label class="mb-3">Levantamiento Observación:</label>
                            <p class="text-base">
                                <strong> {{ $item->levantamientoobs }}</strong>
                            </p>
                        </div>

                        <div class="mb-4">
                            <label class="mb-3">Centro Médico:</label>
                            <p class="text-base">
                                <strong> {{ $item->centromedico }}</strong>
                            </p>
                        </div>

                        <div class="mb-4">
                            <label class="mb-3">Aptitud:</label>
                            <p class="text-base">
                                <strong> {{ $item->aptitud }}</strong>
                            </p>
                        </div>

                        <div class="mt-2">
                            <button class="btn btn-primary text-sm" wire:click="edit({{ $item }})">Editar</button>
                        </div>
                    </div>
                @endif
            </div>
        </article>
    @endforeach
    @else
        <div class="mt-4" x-data="{open: false}">
        <a x-show="!open" x-on:click="open = true" class="flex items-center cursor-pointer">
            <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
            Agregar Dato Médico
        </a>

        <article class="card" x-show="open">
            <div class="card-body">
                <h1 class="text-xl font-bold mb-4">Agregar Dato General</h1>

                <div class="grid grid-cols-1 lg:grid-cols-5 gap-2">
                    <div class="mt-1 col-span-2">
                        <label class="w-32">Categoría: </label>
                        <select wire:model="client_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @foreach($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->razon_social }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-2">
                        <label class="w-32">Talla:</label>
                        <input wire:model="talla" wire:change="calcularImcStore()" type="text" class="form-input w-full rounded-lg">
                        @error('talla')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <label class="w-32">Peso:</label>
                        <input wire:model="peso" wire:change="calcularImcStore()" type="text" class="form-input w-full rounded-lg">
                        @error('peso')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <label class="w-32">Imc:</label>
                        <input wire:model="imc" type="text" class="form-input w-full rounded-lg">
                        @error('imc')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-2 col-span-3">
                        <label class="w-32">Dx. Nutrición:</label>
                        <input wire:model="diagnutricion" type="text" class="form-input w-full rounded-lg">
                        @error('diagnutricion')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <label class="w-32">Examen Médico</label>
                        <input wire:model="fechaexmedico" type="date" class="form-input w-full rounded-lg">
                        @error('fechaexmedico')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <label class="w-32">Levantamiento Obs</label>
                        <input wire:model="levantamientoobs" type="date" class="form-input w-full rounded-lg">
                        @error('levantamientoobs')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-2 col-span-3">
                        <label class="w-32">Centro médico de atención:</label>
                        <input wire:model="centromedico" type="text" class="form-input w-full rounded-lg">
                        @error('centromedico')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-2 mb-2 col-span-2">
                        <label class="w-32">Aptitud:</label>
                        <input wire:model="aptitud" type="text" class="form-input w-full rounded-lg">
                        @error('aptitud')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-end cursor-pointer">
                    <buttton class="btn btn-danger" x-on:click="open = false">Cancelar</buttton>
                    <buttton class="btn btn-primary ml-2" wire:click="store">Agregar</buttton>
                </div>
            </div>
        </article>
    </div>
    @endif
</div>

<div>
    <x-slot name="collaborator">
        {{ $collaborator->id }}
    </x-slot>

    <h1 class="text-2xl font-bold">CAPACITACIONES</h1>
    <hr class="mt-2 mb-6">

    @foreach($collaborator->trainings as $item)
        <article class="card mt-4">
            <div class="card-body bg-gray-100">
                @if($training->id == $item->id)
                    <div>
                        <div class="flex items-center">
                            <label class="w-32">Empresa: </label>
                            <select wire:model="training.empresa" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="{{ $item->empresa }}">{{ $item->empresa }}</option>
                                <option value="LAS BAMBAS">LAS BAMBAS</option>
                                <option value="BROCAL">BROCAL</option>
                                <option value="ANTAPACCAY">ANTAPACCAY</option>
                            </select>
                        </div>

                        <div class="flex items-center">
                            <label class="w-32">Descripción: </label>
                            <textarea type="text" class="form-input rounded-lg w-full mt-2" wire:model="training.descripcion"></textarea>
                        </div>

                        @error('training.descripcion')
                            <span class="text-sx text-red-500">{{ $message }}</span>
                        @enderror

                        <div class="flex items-center">
                            <label class="w-32">Fecha: </label>
                            <input type="date" class="form-input rounded-lg w-full mt-2" wire:model="training.fechacap">
                        </div>

                        @error('training.fechacap')
                        <span class="text-sx text-red-500">{{ $message }}</span>
                        @enderror

                        <div class="mt-4 flex justify-end">
                            <button class="btn btn-danger" wire:click="cancel">Cancelar</button>
                            <button class="btn btn-primary ml-2" wire:click="update">Actualizar</button>
                        </div>
                    </div>
                @else
                    <header>
                        <h1><i class="fas fa-user-graduate text-blue-500 mr-1"></i>Capacitación: {{ $item->empresa }}</h1>

                        <div>
                            <hr class="my-2">
                            <p class="text-sm">Descripción: <strong>{{ $item->descripcion }}</strong></p>
                            <p class="text-sm">Fecha: <strong>{{ $item->fechacap }}</strong></p>

                            <div class="mt-2">
                                <button class="btn btn-primary text-sm" wire:click="edit({{ $item }})">Editar</button>
                                <button class="btn btn-danger text-sm" wire:click="destroy({{ $item }})">Eliminar</button>
                            </div>
                        </div>
                    </header>
                @endif
            </div>
        </article>
    @endforeach

    <div class="mt-4" x-data="{open: false}">
        <a x-show="!open" x-on:click="open = true" class="flex items-center cursor-pointer">
            <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
            Agregar nueva Capacitación
        </a>

        <article class="card" x-show="open">
            <div class="card-body">
                <h1 class="text-xl font-bold mb-4">Agregar nueva Capacitación</h1>

                <div class="mb-4">
                    <div class="flex items-center">
                        <label class="w-32">Empresa: </label>
                        <select wire:model="empresa" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option>[Seleccione una Empresa]</option>
                            <option value="LAS BAMBAS">LAS BAMBAS</option>
                            <option value="BROCAL">BROCAL</option>
                            <option value="ANTAPACCAY">ANTAPACCAY</option>
                        </select>
                    </div>

                    @error('empresa')
                    <span class="text-sx text-red-500">{{ $message }}</span>
                    @enderror

                    <div class="flex items-center">
                        <label class="w-32">Descripción: </label>
                        <textarea type="text" class="form-input rounded-lg w-full mt-2" wire:model="descripcion"></textarea>
                    </div>

                    @error('descripcion')
                    <span class="text-sx text-red-500">{{ $message }}</span>
                    @enderror

                    <div class="flex items-center">
                        <label class="w-32">Fecha: </label>
                        <input type="date" class="form-input rounded-lg w-full mt-2" wire:model="fechacap">
                    </div>

                    @error('fechacap')
                    <span class="text-sx text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-end cursor-pointer">
                    <buttton class="btn btn-danger" x-on:click="open = false">Cancelar</buttton>
                    <buttton class="btn btn-primary ml-2" wire:click="store">Agregar</buttton>
                </div>
            </div>
        </article>
    </div>
</div>

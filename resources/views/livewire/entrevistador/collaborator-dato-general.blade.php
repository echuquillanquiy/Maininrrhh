<div>
    <x-slot name="collaborator">
        {{ $collaborator->id }}
    </x-slot>

    <h1 class="text-2xl font-bold">Información General: {{ $collaborator->nombres }}, {{ $collaborator->apellidos }}</h1>

    <hr class="mt-2 mb-6">
    @if($collaborator->datogenerals->count())
        @foreach($collaborator->datogenerals as $item)
            <article class="card">
                <div class="card-body bg-gray-100">
                    @if($datogeneral->id == $item->id)
                        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">

                            <div class="mt-1">
                                <label class="w-32">Categoría: </label>
                                <select wire:model="datogeneral.category_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-1">
                                <label class="w-32">Monto: </label>
                                <select wire:model="datogeneral.amount_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach($amounts as $amount)
                                        <option value="{{ $amount->id }}">{{ $amount->monto }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-1">
                                <label class="w-32">Área: </label>
                                <select wire:model="datogeneral.area_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach($areas as $area)
                                        <option value="{{ $area->id }}">{{ $area->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-1">
                                <label class="w-32">Puesto: </label>
                                <select wire:model="datogeneral.position_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach($positions as $position)
                                        <option value="{{ $position->id }}">{{ $position->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-2">
                                <label class="w-32">¿Cuenta con respirador?</label>
                                <input wire:model="datogeneral.respirador" type="text" class="form-input w-full rounded-lg">
                                @error('datogeneral.respirador')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="mt-2">
                                <label class="w-32">¿Cuenta con zapatos?</label>
                                <input wire:model="datogeneral.zapatos" type="text" class="form-input w-full rounded-lg">
                                @error('datogeneral.zapatos')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="mt-2">
                                <label class="w-32">Talla de zapato</label>
                                <input wire:model="datogeneral.tallazapato" type="text" class="form-input w-full rounded-lg">
                                @error('datogeneral.tallazapato')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="mt-2">
                                <label class="w-32">Talla de pantalón</label>
                                <input wire:model="datogeneral.tallapantalon" type="text" class="form-input w-full rounded-lg">
                                @error('datogeneral.tallapantalon')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="mt-2">
                                <label class="w-32">Talla de camisa</label>
                                <input wire:model="datogeneral.tallacamisa" type="text" class="form-input w-full rounded-lg">

                                @error('datogeneral.tallacamisa')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mt-2">
                                <label class="w-32">Inicio inducción</label>
                                <input wire:model="datogeneral.inicioinduccion" type="date" class="form-input w-full rounded-lg">
                                @error('datogeneral.inicioinduccion')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mt-2">
                                <label class="w-32">Fin inducción</label>
                                <input wire:model="datogeneral.fininduccion" type="date" class="form-input w-full rounded-lg">
                                @error('datogeneral.fininduccion')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mt-2">
                                <label class="w-32">Lugar de inducción</label>
                                <input wire:model="datogeneral.lugarinduccion" type="text" class="form-input w-full rounded-lg">
                                @error('datogeneral.lugarinduccion')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mt-2 col-span-2">
                                <label class="w-32">Especialidad</label>
                                <input wire:model="datogeneral.especialidad" type="text" class="form-input w-full rounded-lg">
                                @error('datogeneral.especialidad')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mt-2 col-span-2">
                                <label class="w-32">Donde se entero de la entrevista</label>
                                <input wire:model="datogeneral.medio" type="text" class="form-input w-full rounded-lg">
                                @error('datogeneral.medio')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mt-2 col-span-2">
                                <label class="w-32">Observaciones</label>
                                <textarea wire:model="datogeneral.observaciones" type="text" class="form-input w-full rounded-lg" rows="3"></textarea>
                                @error('datogeneral.observaciones')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="mt-2 col-span-2">
                                <label class="w-32">Comentarios</label>
                                <textarea wire:model="datogeneral.comentarios" type="text" class="form-input w-full rounded-lg" rows="3"></textarea>
                                @error('datogeneral.comentarios')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="mt-4 flex justify-end">
                            <button class="btn btn-danger" wire:click="cancel">Cancelar</button>
                            <button class="btn btn-primary ml-2" wire:click="update">Actualizar</button>
                        </div>
                    @else
                        <div class="grid grid-cols-1 lg:grid-cols-4">
                            <div class="mb-4">
                                <label class="mb-3">Categoría:</label>
                                <p class="text-base">
                                    <strong> {{ $item->category->name }}</strong>
                                </p>
                            </div>

                            <div class="mb-4">
                                <label class="mb-3">Monto:</label>
                                <p class="text-base">
                                    <strong>{{ $item->amount->monto }}</strong>
                                </p>
                            </div>

                            <div class="mb-4">
                                <label class="mb-3">Área:</label>
                                <p class="text-base">
                                    <strong>{{ $item->area->name }}</strong>
                                </p>
                            </div>

                            <div class="mb-4">
                                <label class="mb-3">Puesto:</label>
                                <p class="text-base">
                                    <strong>{{ $item->position->name }}</strong>
                                </p>
                            </div>

                            <div class="mb-4">
                                <label class="mb-3">¿Cuenta con respirador?:</label>
                                <p class="text-base">
                                    <strong>{{ $item->respirador }}</strong>
                                </p>
                            </div>

                            <div class="mb-4">
                                <label class="mb-3">¿Cuenta con zapatos?:</label>
                                <p class="text-base">
                                    <strong>{{ $item->zapatos }}</strong>
                                </p>
                            </div>

                            <div class="mb-4">
                                <label class="mb-3">Talla de zapato:</label>
                                <p class="text-base">
                                    <strong>{{ $item->tallazapato }}</strong>
                                </p>
                            </div>

                            <div class="mb-4">
                                <label class="mb-3">Talla de zapato:</label>
                                <p class="text-base">
                                    <strong>{{ $item->tallapantalon }}</strong>
                                </p>
                            </div>

                            <div class="mb-4">
                                <label class="mb-3">Talla de camisa:</label>
                                <p class="text-base">
                                    <strong>{{ $item->tallacamisa }}</strong>
                                </p>
                            </div>

                            <div class="mb-4">
                                <label class="mb-3">Inicio inducción:</label>
                                <p class="text-base">
                                    <strong>{{ $item->inicioinduccion }}</strong>
                                </p>
                            </div>

                            <div class="mb-4">
                                <label class="mb-3">Fin inducción:</label>
                                <p class="text-base">
                                    <strong>{{ $item->fininduccion }}</strong>
                                </p>
                            </div>

                            <div class="mb-4">
                                <label class="mb-3">Lugar inducción:</label>
                                <p class="text-base">
                                    <strong>{{ $item->lugarinduccion }}</strong>
                                </p>
                            </div>

                            <div class="mb-4 col-span-2">
                                <label class="mb-3">Especialidad:</label>
                                <p class="text-base">
                                    <strong>{{ $item->especialidad }}</strong>
                                </p>
                            </div>

                            <div class="mb-4 col-span-2">
                                <label class="mb-3">¿Como se entero de la entrevista?</label>
                                <p class="text-base">
                                    <strong>{{ $item->medio }}</strong>
                                </p>
                            </div>

                            <div class="mb-4 col-span-2">
                                <label class="mb-3">Observaciones:</label>
                                <p class="text-base">
                                    <strong>{{ $item->observaciones }}</strong>
                                </p>
                            </div>

                            <div class="col-span-2">
                                <label class="mb-3">Comentarios:</label>
                                <p class="text-base">
                                    <strong>{{ $item->comentarios }}</strong>
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
                Agregar Dato General
            </a>

            <article class="card" x-show="open">
                <div class="card-body">
                    <h1 class="text-xl font-bold mb-4">Agregar Dato General</h1>

                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">

                        <div class="mt-1">
                            <label class="w-32">Categoría: </label>
                            <select wire:model="category_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-1">
                            <label class="w-32">Monto: </label>
                            <select wire:model="amount_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach($amounts as $amount)
                                    <option value="{{ $amount->id }}">{{ $amount->monto }}</option>
                                @endforeach
                            </select>

                            @error('amount_id')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-1">
                            <label class="w-32">Área: </label>
                            <select wire:model="area_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach($areas as $area)
                                    <option value="{{ $area->id }}">{{ $area->name }}</option>
                                @endforeach
                            </select>
                            @error('area_id')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-1">
                            <label class="w-32">Puesto: </label>
                            <select wire:model="position_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach($positions as $position)
                                    <option value="{{ $position->id }}">{{ $position->name }}</option>
                                @endforeach
                            </select>
                            @error('position_id')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2">
                            <label class="w-32">¿Cuenta con respirador?</label>
                            <input wire:model="respirador" type="text" class="form-input w-full rounded-lg">
                            @error('respirador')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="mt-2">
                            <label class="w-32">¿Cuenta con zapatos?</label>
                            <input wire:model="zapatos" type="text" class="form-input w-full rounded-lg">
                            @error('zapatos')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="mt-2">
                            <label class="w-32">Talla de zapato</label>
                            <input wire:model="tallazapato" type="text" class="form-input w-full rounded-lg">
                            @error('tallazapato')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="mt-2">
                            <label class="w-32">Talla de pantalón</label>
                            <input wire:model="tallapantalon" type="text" class="form-input w-full rounded-lg">
                            @error('tallapantalon')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="mt-2">
                            <label class="w-32">Talla de camisa</label>
                            <input wire:model="tallacamisa" type="text" class="form-input w-full rounded-lg">

                            @error('tallacamisa')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2">
                            <label class="w-32">Inicio inducción</label>
                            <input wire:model="inicioinduccion" type="date" class="form-input w-full rounded-lg">
                            @error('inicioinduccion')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2">
                            <label class="w-32">Fin inducción</label>
                            <input wire:model="fininduccion" type="date" class="form-input w-full rounded-lg">
                            @error('fininduccion')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2">
                            <label class="w-32">Lugar de inducción</label>
                            <input wire:model="lugarinduccion" type="text" class="form-input w-full rounded-lg">
                            @error('lugarinduccion')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2 col-span-2">
                            <label class="w-32">Especialidad</label>
                            <input wire:model="especialidad" type="text" class="form-input w-full rounded-lg">
                            @error('especialidad')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2 col-span-2">
                            <label class="w-32">Donde se entero de la entrevista</label>
                            <input wire:model="medio" type="text" class="form-input w-full rounded-lg">
                            @error('medio')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2 col-span-2">
                            <label class="w-32">Observaciones</label>
                            <textarea wire:model="observaciones" type="text" class="form-input w-full rounded-lg" rows="3"></textarea>
                            @error('observaciones')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="mt-2 col-span-2">
                            <label class="w-32">Comentarios</label>
                            <textarea wire:model="comentarios" type="text" class="form-input w-full rounded-lg" rows="3"></textarea>
                            @error('comentarios')
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

<div>
    <div class="bg-gray-200 py-4 mb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-4 focus:outline-none" wire:click="resetFilters">
                <i class="fas fa-briefcase text-xs mr-2"></i>
                Todos los cursos
            </button>

            <div class="relative mr-4" x-data="{ open: false }">
                <button class="px-4 text-gray-700 h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click="open = true">
                    <i class="fas fa-tags text-sm mr-2"></i>
                    Categoría
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">
                    @foreach($types as $type)
                        <a class="transition-colors duration-200 block px-4 py-2 text-xs text-gray-900 rounded hover:bg-blue-500 hover:text-white cursor-pointer" wire:click="$set('type_id', {{ $type->id }})" x-on:click="open = false">{{ $type->name }}</a>
                    @endforeach
                </div>
                <!-- // Dropdown Body -->
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8 mb-12">
        @foreach($works as $work)
            <x-work-card :work="$work"/>
        @endforeach
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
        {{ $works->links() }}
    </div>
</div>


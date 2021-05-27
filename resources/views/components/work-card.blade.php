@props(['work'])
<article class="card">
    <img class="h-40 w-full object-cover" src="{{ Storage::url($work->image) }}" alt="">

    <div class="card-body">
        <h1 class="card-title">{{ Str::limit($work->titulo, 40) }}</h1>
        <p class="text-gray-500 text-xs mb-3">Categoría: <strong>{{ $work->type->name }}</strong></p>

        <p class="text-sm text-green-500 mr-2"><i class="fas fa-calendar-alt"></i> Desde:
            {{ $work->inicio }}
        </p>
        <p class="text-sm text-red-600 mt-1"><i class="fas fa-calendar-alt"></i> Hasta:
            {{ $work->inicio }}
        </p>
        <p class="text-yellow-700 text-sm ml-auto mt-4"><i class="fas fa-users"></i> ({{ $work->applicants_count }}) Postulantes</p>

        <a href="{{ route('works.show', $work) }}" type="submit" class="btn-block mt-4 btn btn-primary">
            Más Información
        </a>
    </div>
</article>

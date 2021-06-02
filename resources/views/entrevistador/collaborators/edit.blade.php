<x-entrevistador-layout>

    <x-slot name="collaborator">
        {{ $collaborator->id }}
    </x-slot>

    <h1 class="text-2xl font-bold">Información del Colaborador</h1>
    <hr class="mt-2 mb-6">

    {!! Form::model($collaborator, ['route' => ['entrevistador.collaborators.update', $collaborator], 'method' => 'put', 'files' => true]) !!}

    @include('entrevistador.collaborators.partials.form')

    <div class="flex justify-end">
        {!! Form::submit('Actualizar información', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    <script>
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
    </script>
</x-entrevistador-layout>

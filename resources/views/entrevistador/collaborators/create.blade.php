<x-app-layout>
    <div class="container py-8">
        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl font-bold">CREAR NUEVO COLABORADOR</h1>
                <hr class="mt-2 mb-6">

                {!! Form::open(['route' => 'entrevistador.collaborators.store', 'files' => true]) !!}

                    {!! Form::hidden('user_id', auth()->user()->id) !!}
                    @include('entrevistador.collaborators.partials.form')

                    <div class="flex justify-end">
                        {!! Form::submit('Guardar información', ['class' => 'btn btn-primary cursor-pointer']) !!}
                    </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

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
</x-app-layout>

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>

        $(function () {
            $('#select-departament').on('change', onSelectDepartmentChange);

        });
        function onSelectDepartmentChange()
        {
            var departament_id = $(this).val();

            //AJAX

            $.get('/api/departaments/'+departament_id+'/provinces', function (data) {
                var html_select = '<option value="">[PROVINCIAS]</option>';
                for (var i = 0; i < data.length; ++i)
                    html_select += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                $('#select-province').html(html_select);
            });
        }

        $(function () {
            $('#select-province').on('change', onSelectProvinceChange);

        });
        function onSelectProvinceChange()
        {
            let province_id = $(this).val();

            //AJAX

            $.get('/api/provinces/'+province_id+'/districts', function (data2) {
                var html_select2 = '<option value="">[DISTRITOS]</option>';
                for (var i = 0; i < data2.length; ++i)
                    html_select2 += '<option value="'+data2[i].id+'">'+data2[i].name+'</option>';
                $('#select-district').html(html_select2);
            });
        }

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

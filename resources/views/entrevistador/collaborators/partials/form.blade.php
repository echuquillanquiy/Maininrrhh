<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <div class="mb-4">
        {!! Form::label('nombres', 'Nombres del colaborador') !!}
        {!! Form::text('nombres', null, ['class' => 'form-input block w-full mt-1 rounded-lg' . ($errors->has('nombres') ? ' border-red-600' : ''), 'autofocus' => 'autofocus']) !!}

        @error('nombres')
            <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>

    <div class="mb-4">
        {!! Form::label('apellidos', 'Apellidos del colaborador') !!}
        {!! Form::text('apellidos', null, ['class' => 'form-input block w-full mt-1 rounded-lg'  . ($errors->has('apellidos') ? ' border-red-600' : '')]) !!}

        @error('apellidos')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="mb-4">
        @isset($collaborator)
            {!! Form::label('documento', 'Tipo de Documento') !!}
            {!! Form::select('documento', [$collaborator->documento => $collaborator->documento,'DNI' => 'DNI',
                'PASAPORTE' => 'PASAPORTE', 'CARNET DE EXTRANJERIA' => 'CARNET DE EXTRANJERIA'], null, ['class' => 'form-input w-full mt-1 rounded-lg']) !!}
        @else
            {!! Form::label('documento', 'Tipo de Documento') !!}
            {!! Form::select('documento', ['DNI' => 'DNI',
                'PASAPORTE' => 'PASAPORTE', 'CARNET DE EXTRANJERIA' => 'CARNET DE EXTRANJERIA'], null, ['class' => 'form-input w-full mt-1 rounded-lg']) !!}
        @endisset

    </div>

    <div class="mb-4">
        {!! Form::label('ndocumento', 'Número de documento') !!}
        {!! Form::text('ndocumento', null, ['class' => 'form-input block w-full mt-1 rounded-lg' . ($errors->has('ndocumento') ? ' border-red-600' : '')]) !!}

        @error('ndocumento')
            <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>

    <div class="mb-4">
        {!! Form::label('fechanac', 'Fecha de Nacimiento') !!}
        {!! Form::date('fechanac', null, ['class' => 'form-input block w-full mt-1 rounded-lg' . ($errors->has('fechanac') ? ' border-red-600' : '')]) !!}

        @error('fechanac')
            <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <div>
        @isset($collaborator)
        {!! Form::label('instruccion', 'Grado de Instrucción') !!}
        {!! Form::select('instruccion', [
                $collaborator->instruccion => $collaborator->instruccion,
                'ANALFABETO' => 'ANALFABETO',
                'PRIMARIA COMPLETA' => 'PRIMARIA COMPLETA',
                'PRIMARIA INCOMPLETA' => 'PRIMARIA INCOMPLETA',
                'SECUNDARIA COMPLETA' => 'SECUNDARIA COMPLETA',
                'SECUNDARIA INCOMPLETA' => 'SECUNDARIA INCOMPLETA',
                'TÉCNICO COMPLETO' => 'TÉCNICO COMPLETO',
                'TÉCNICO INCOMPLETO' => 'TÉCNICO INCOMPLETO',
                'UNIVERSITARIO COMPLETO' => 'UNIVERSITARIO COMPLETO',
                'UNIVERSITARIO INCOMPLETO' => 'UNIVERSITARIO INCOMPLETO',
                ],
                null, ['class' => 'form-input w-full mt-1 rounded-lg']) !!}
        @else
            {!! Form::label('instruccion', 'Grado de Instrucción') !!}
            {!! Form::select('instruccion', [
                    'ANALFABETO' => 'ANALFABETO',
                    'PRIMARIA COMPLETA' => 'PRIMARIA COMPLETA',
                    'PRIMARIA INCOMPLETA' => 'PRIMARIA INCOMPLETA',
                    'SECUNDARIA COMPLETA' => 'SECUNDARIA COMPLETA',
                    'SECUNDARIA INCOMPLETA' => 'SECUNDARIA INCOMPLETA',
                    'TÉCNICO COMPLETO' => 'TÉCNICO COMPLETO',
                    'TÉCNICO INCOMPLETO' => 'TÉCNICO INCOMPLETO',
                    'UNIVERSITARIO COMPLETO' => 'UNIVERSITARIO COMPLETO',
                    'UNIVERSITARIO INCOMPLETO' => 'UNIVERSITARIO INCOMPLETO',
                    ],
                    null, ['class' => 'form-input w-full mt-1 rounded-lg']) !!}
        @endisset
    </div>

    <div class="mb-4">
        {!! Form::label('telefono', 'Número de Telefóno') !!}
        {!! Form::text('telefono', null, ['class' => 'form-input block w-full mt-1 rounded-lg' . ($errors->has('telefono') ? ' border-red-600' : '')]) !!}

        @error('telefono')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="mb-4 col-span-2">
        {!! Form::label('direccion', 'Dirección') !!}
        {!! Form::text('direccion', null, ['class' => 'form-input block w-full mt-1 rounded-lg' . ($errors->has('direccion') ? ' border-red-600' : '')]) !!}

        @error('direccion')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>

    <div class="mb-4">
        {!! Form::label('correo', 'Correo Electronico') !!}
        {!! Form::text('correo', null, ['class' => 'form-input block w-full mt-1 rounded-lg' . ($errors->has('correo') ? ' border-red-600' : '')]) !!}

        @error('correo')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
    @isset($collaborator)
        <div class="mb-4">
            {!! Form::label('departament_id', 'Departamento') !!}
            {!! Form::select('departament_id', $departaments, null, ['class' => 'form-input w-full mt-1 rounded-lg', 'id' => 'select-departament']) !!}
        </div>
    @else
        <div class="mb-4">
            {!! Form::label('departament_id', 'Departamento') !!}
            {!! Form::select('departament_id', $departaments, null, ['class' => 'form-input w-full mt-1 rounded-lg', 'id' => 'select-departament']) !!}
        </div>
    @endisset

    <div class="mb-4">
        {!! Form::label('province_id', 'Provincias') !!}
        {!! Form::select('province_id', $provinces, null, ['class' => 'form-input w-full mt-1 rounded-lg', 'id' => 'select-province']) !!}
    </div>

    <div class="mb-4">
        {!! Form::label('district_id', 'Distritos') !!}
        {!! Form::select('district_id', $districts, null, ['class' => 'form-input w-full mt-1 rounded-lg', 'id' => 'select-district']) !!}
    </div>

    <div class="mb-4">
        {!! Form::label('ubigee_id', 'Ubigeo') !!}
        {!! Form::select('ubigee_id', $ubigees, null, ['class' => 'form-input w-full mt-1 rounded-lg']) !!}
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

    <div class="mb-4">
        @isset($collaborator)
        {!! Form::label('sexo', 'Sexo') !!}
        {!! Form::select('sexo', [$collaborator->sexo => $collaborator->sexo,'M' => 'MASCULINO', 'F' => 'FEMENINO'], null, ['class' => 'form-input w-full mt-1 rounded-lg']) !!}
        @else
            {!! Form::label('sexo', 'Sexo') !!}
            {!! Form::select('sexo', ['M' => 'MASCULINO', 'F' => 'FEMENINO'], null, ['class' => 'form-input w-full mt-1 rounded-lg']) !!}
        @endisset
    </div>

    <div class="mb-4">
        @isset($collaborator)
        {!! Form::label('estadocivil', 'Estado Civil') !!}
        {!! Form::select('estadocivil', [$collaborator->estadocivil => $collaborator->estadocivil,
            'SOLTERO' => 'SOLTERO', 'CASADO' => 'CASADO', 'DIVORCIADO' => 'DIVORCIADO', 'VIUDO' => 'VIUDO', 'CONVIVIENTE' => 'CONVIVIENTE'], null, ['class' => 'form-input w-full mt-1 rounded-lg']) !!}
        @else
            {!! Form::label('estadocivil', 'Estado Civil') !!}
            {!! Form::select('estadocivil', [
                'SOLTERO' => 'SOLTERO', 'CASADO' => 'CASADO', 'DIVORCIADO' => 'DIVORCIADO', 'VIUDO' => 'VIUDO', 'CONVIVIENTE' => 'CONVIVIENTE'], null, ['class' => 'form-input w-full mt-1 rounded-lg']) !!}
        @endisset
    </div>

    <div class="mb-4">
        @isset($collaborator)
        {!! Form::label('sanguineo', 'Grupo RH') !!}
        {!! Form::select('sanguineo', [$collaborator->sanguineo => $collaborator->sanguineo,
            'A+' => 'A+',
            'B+' => 'B+',
            'O+' => 'O+',
            'AB+' => 'AB+',
            'A-' => 'A-',
            'B-' => 'B-',
            'AB-' => 'AB-',
            'O-' => 'O-'], null, ['class' => 'form-input w-full mt-1 rounded-lg']) !!}
        @else
            {!! Form::label('sanguineo', 'Grupo RH') !!}
            {!! Form::select('sanguineo', [
                'A+' => 'A+',
                'B+' => 'B+',
                'O+' => 'O+',
                'AB+' => 'AB+',
                'A-' => 'A-',
                'B-' => 'B-',
                'AB-' => 'AB-',
                'O-' => 'O-'], null, ['class' => 'form-input w-full mt-1 rounded-lg']) !!}
        @endisset
    </div>

    <div class="mb-4">
        {!! Form::label('hijos', 'N° de Hijos') !!}
        {!! Form::text('hijos', null, ['class' => 'form-input block w-full mt-1 rounded-lg' . ($errors->has('hijos') ? ' border-red-600' : '')]) !!}
        @error('hijos')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="mb-4">
        {!! Form::label('contacto', 'Nombre de contacto') !!}
        {!! Form::text('contacto', null, ['class' => 'form-input block w-full mt-1 rounded-lg' . ($errors->has('contacto') ? ' border-red-600' : '')]) !!}
        @error('contacto')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>

    <div class="mb-4">
        {!! Form::label('telemeergencia', 'Telefóno contacto de emergencia') !!}
        {!! Form::text('telemeergencia', null, ['class' => 'form-input block w-full mt-1 rounded-lg' . ($errors->has('teleemergencia') ? ' border-red-600' : '')]) !!}
        @error('telemeergencia')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>

    <div class="mb-4">
        {!! Form::label('tiempocasa', 'Tiempo viviendo en casa') !!}
        {!! Form::text('tiempocasa', null, ['class' => 'form-input block w-full mt-1 rounded-lg' . ($errors->has('tiempocasa') ? ' border-red-600' : '')]) !!}
        @error('tiempocasa')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 ">
    <div class="mb-4">
        @isset($collaborator)
        {!! Form::label('banco', 'Grupo RH') !!}
        {!! Form::select('banco', [$collaborator->sanguineo => $collaborator->sanguineo,
            'BCP' => 'BCP',
            'BBVA' => 'BBVA',
            'INTERBANK' => 'INTERBANK',
            'BANCO DE LA NACION' => 'BANCO DE LA NACION',], null, ['class' => 'form-input w-full mt-1 rounded-lg']) !!}
        @else
            {!! Form::label('banco', 'Grupo RH') !!}
            {!! Form::select('banco', [
                'BCP' => 'BCP',
                'BBVA' => 'BBVA',
                'INTERBANK' => 'INTERBANK',
                'BANCO DE LA NACION' => 'BANCO DE LA NACION',], null, ['class' => 'form-input w-full mt-1 rounded-lg']) !!}
        @endisset
    </div>

    <div class="mb-4 col-span-2">
        {!! Form::label('cuentabancaria', 'Número de cuenta bancaria') !!}
        {!! Form::text('cuentabancaria', null, ['class' => 'form-input block w-full mt-1 rounded-lg' . ($errors->has('cuentabancaria') ? ' border-red-600' : '')]) !!}

        @error('cuentabancaria')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>
</div>

<h1 class="text-2xl font-bold mt-8 mb-2">Foto del Colaborador</h1>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
    <figure>
        @isset($collaborator->image)
            <img id="picture" class="w-full h-64 object-cover object-center" src="{{ Storage::url($collaborator->image->url) }}" alt="">
        @else
            <img id="picture" class="w-full h-64 object-cover object-center" src="https://cdn.pixabay.com/photo/2016/04/25/07/15/man-1351317_960_720.png" alt="">
        @endisset
    </figure>

    <div>
        <p class="mb-2">
            Por favor selecciona una imagen válida, la cual podrás pre - visualizar antes de subirla...
        </p>
        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 rounded-md @error ('file') border-red-600 @enderror">
            {!! Form::file('file', ['class', 'form-input w-full', 'id' => 'file', 'accept' => 'image/*']) !!}
        </div>

        @error('file')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror
    </div>

</div>



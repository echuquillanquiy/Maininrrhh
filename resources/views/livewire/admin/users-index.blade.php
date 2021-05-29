<div>
    <div class="card">
        <div class="card-header">
            <input wire:keydown="limpiar_page" wire:model="search" class="form-control w-100 text-bold" placeholder="Realice su busqueda...">
        </div>
        @if($users->count())
            <div class="card-body table-responsive">
                <table class="table table-striped">
                    <thead class="text-center">
                    <tr>
                        <th>ID</th>
                        <th>Nombres y Apellidos</th>
                        <th>DNI</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Nombre de usuario</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($users as $user)
                        <tr class="font-italic font-weight-bold">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}, {{ $user->lastname }}</td>
                            <td>{{ $user->dni }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->username }}</td>
                            <td width="10px">
                                <a class="btn btn-info" href="{{ route('admin.users.edit', $user) }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{ $users->links() }}
            </div>

        @else
            <div class="card-body">
                <strong>No hay registros...</strong>
            </div>
        @endif
    </div>
</div>

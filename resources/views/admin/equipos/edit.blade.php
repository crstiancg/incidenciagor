<x-admin-layout>
    <form class="bg-white rounded p-6 shadow-lg" action="{{ route('admin.equipos.update', $equipo) }}" method="post">
        @csrf
        @method('PUT')
        <x-validation-errors class="mb-4">

        </x-validation-errors>
        <div class="mb-4">
            <x-label>Codigo Patrimonial</x-label>
            <x-input type="text" class="w-full" name="codpatrominal" value="{{ old('codpatrominal', $equipo->codpatrominal) }}"/>
        </div>

        <div class="mb-4">
            <x-label>Descripción</x-label>
            <textarea name="descripcion" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">{{ old('descripcion', $equipo->descripcion) }}</textarea>
        </div>

        <div class="mb-4">
            <x-label>
                Estado
            </x-label>
            <select name="estado"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                    <option value="Incidencia"  {{ old('estado', $equipo->estado) == 'Incidencia' ? 'selected' : ''}}>Incidencia</option>
                    <option value="Funcional" {{ old('estado', $equipo->estado) == 'Funcional' ? 'selected' : ''}}>Funcional</option>
                    <option value="Suspendido" {{ old('estado', $equipo->estado) == 'Suspendido' ? 'selected' : ''}}>Suspendido</option>
                    <option value="Inactivo" {{ old('estado', $equipo->estado) == 'Inactivo' ? 'selected' : ''}}>Inactivo</option>
            </select>
        </div>

        <div class="mb-4">
            <x-label>
                Condición
            </x-label>
            <select name="condicion"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                    <option value="Nuevo" {{ old('condicion', $equipo->condicion) == 'Nuevo' ? 'selected' : ''}}>Nuevo</option>
                    <option value="Regular" {{ old('condicion', $equipo->condicion) == 'Regular' ? 'selected' : ''}}>Regular</option>
                    <option value="Malo" {{ old('condicion', $equipo->condicion) == 'Malo' ? 'selected' : ''}}>Malo</option>
                    <option value="Desfazado" {{ old('condicion', $equipo->condicion) == 'Desfazado' ? 'selected' : ''}}>Desfazado</option>
            </select>
        </div>

        <div class="mb-4">
            <x-label>Modelo</x-label>
            <x-input type="text" class="w-full" name="modelo" value="{{ old('modelo', $equipo->modelo) }}"/>
        </div>

        <div class="mb-4">
            <x-label>Marca</x-label>
            <x-input type="text" class="w-full" name="marca" value="{{ old('marca', $equipo->marca) }}"/>
        </div>

        <div class="mb-4">
            <x-label>Serie</x-label>
            <x-input type="text" class="w-full" name="serie" value="{{ old('serie', $equipo->serie) }}"/>
        </div>

        <div class="mb-4">
            <x-label>Protocolo de Internet</x-label>
            <x-input type="text" class="w-full" name="ip" value="{{ old('ip', $equipo->ip) }}"/>
        </div>

        <div class="mb-4">
            <x-label>Observación</x-label>
            <textarea name="observacion" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">{{ old('observacion', $equipo->observacion) }}</textarea>
        </div>

        <div class="mb-4">
            <x-label>
                Oficina
            </x-label>
            <select name="oficina_id"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                @foreach ($oficinas as $oficina)
                    <option value="{{ $oficina->id }}" @selected(old('oficina_id', $equipo->oficina_id) == $oficina->id)>{{ $oficina->nombre }}</option>
                @endforeach
            </select>
        </div>

        
        <div class="mb-4">
            <x-label>
                Tipo
            </x-label>
            <select name="tipo_id"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                @foreach ($tipos as $tipo)
                    <option value="{{ $tipo->id }}" @selected(old('tipo_id', $equipo->tipo_id) == $tipo->id)>{{ $tipo->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-end">
            <x-button>
                Update
            </x-button>
        </div>
    </form>
    <script>
        
    </script>
</x-admin-layout>
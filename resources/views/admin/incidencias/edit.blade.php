<x-admin-layout>
    <form class="bg-white rounded p-6 shadow-lg" action="{{ route('admin.incidencias.update', $incidencia) }}" method="post">
        @csrf
        @method('PUT')
        <x-validation-errors class="mb-4">

        </x-validation-errors>
        <div class="mb-4">
            <x-label>Decripción</x-label>
            <x-input type="text" class="w-full" name="descripcion" value="{{ old('descripcion',$incidencia->descripcion) }}"/>
        </div>

        <div class="mb-4">
            <x-label>Usuario</x-label>
            <textarea name="usuario" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">{{ old('usuario', $incidencia->usuario) }}</textarea>
        </div>

        <div class="mb-4">
            <x-label>
                Nivel
            </x-label>
            <select name="nivel"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                <option value="1" {{ old('nivel', $incidencia->nivel) == 1 ? 'selected' : ''}}>Muy urgente</option>
                <option value="0" {{ old('nivel', $incidencia->nivel) == 0 ? 'selected' : ''}}>Urgente</option>
            </select>
        </div>

        <div class="mb-4">
            <x-label>
                Estado
            </x-label>
            <select name="estado"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                    <option value="Aperturado" {{ old('estado', $incidencia->estado) == 'Aperturado' ? 'selected' : ''}}>Aperturado</option>
                    <option value="Pendiente" {{ old('estado', $incidencia->estado) == 'Pendiente' ? 'selected' : ''}}>Pendiente</option>
                    <option value="Cierre" {{ old('estado', $incidencia->estado) == 'Cierre' ? 'selected' : ''}}>Cierre</option>
            </select>
        </div>

        <div class="mb-4">
            <x-label>
                Equipo
            </x-label>
            <select name="equipo_id"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                @foreach ($equipos as $equipo)
                    <option value="{{ $equipo->id }}" @selected(old('equipo_id', $incidencia->equipo_id) == $equipo->id)>{{ $equipo->codpatrominal }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <x-label>
                Oficina
            </x-label>
            <select name="oficina_id"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                @foreach ($oficinas as $oficina)
                    <option value="{{ $oficina->id }}" @selected(old('oficina_id', $incidencia->oficina_id) == $oficina->id)>{{ $oficina->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <x-label>
                Reporte de fallos
            </x-label>
            <select name="etiqueta_id"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                @foreach ($etiquetas as $etiqueta)
                    <option value="{{ $etiqueta->id }}" @selected(old('etiqueta_id', $incidencia->etiqueta_id) == $etiqueta->id)>{{ $etiqueta->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <x-label>Respuesta</x-label>
            <textarea name="respuesta" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">{{ old('respuesta', $incidencia->respuesta) }}</textarea>
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
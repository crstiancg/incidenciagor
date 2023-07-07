<x-admin-layout>
    <form class="bg-white rounded p-6 shadow-lg" action="{{ route('admin.incidencias.store') }}" method="post">
        @csrf
        <x-validation-errors class="mb-4">

        </x-validation-errors>
        <div class="mb-4">
            <x-label>Decripción</x-label>
            <x-input type="text" class="w-full" name="descripcion" value="{{ old('descripcion') }}"/>
        </div>

        <div class="mb-4">
            <x-label>Usuario</x-label>
            <textarea name="usuario" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">{{ old('usuario') }}</textarea>
        </div>

        <div class="mb-4">
            <x-label>
                Nivel
            </x-label>
            <select name="nivel"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                <option value="1">Muy urgente</option>
                <option value="0">Urgente</option>
            </select>
        </div>

        <div class="mb-4">
            <x-label>
                Estado
            </x-label>
            <select name="estado"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                    <option value="Aperturado">Aperturado</option>
                    <option value="Pendiente">Pendiente</option>
                    <option value="Cierre">Cierre</option>
            </select>
        </div>

        <div class="mb-4">
            <x-label>
                Equipo
            </x-label>
            <select name="equipo_id"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                @foreach ($equipos as $equipo)
                    <option value="{{ $equipo->id }}">{{ $equipo->codpatrominal }}</option>
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
                    <option value="{{ $oficina->id }}">{{ $oficina->nombre }}</option>
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
                    <option value="{{ $etiqueta->id }}">{{ $etiqueta->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <x-label>Respuesta</x-label>
            <textarea name="respuesta" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">{{ old('respuesta') }}</textarea>
        </div>

        <div class="flex justify-end">
            <x-button>
                Store
            </x-button>
        </div>
    </form>
    <script>
        
    </script>
</x-admin-layout>
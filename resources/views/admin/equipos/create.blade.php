<x-admin-layout>
    <form class="bg-white rounded p-6 shadow-lg" action="{{ route('admin.equipos.store') }}" method="post">
        @csrf
        <x-validation-errors class="mb-4">

        </x-validation-errors>
        <div class="mb-4">
            <x-label>Codigo Patrimonial</x-label>
            <x-input type="text" class="w-full" name="codpatrominal" value="{{ old('codpatrominal') }}"/>
        </div>

        <div class="mb-4">
            <x-label>Descripción</x-label>
            <textarea name="descripcion" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">{{ old('descripcion') }}</textarea>
        </div>

        <div class="mb-4">
            <x-label>
                Estado
            </x-label>
            <select name="estado"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                    <option value="Incidencia">Incidencia</option>
                    <option value="Funcional">Funcional</option>
                    <option value="Suspendido">Suspendido</option>
                    <option value="Inactivo">Inactivo</option>
            </select>
        </div>

        <div class="mb-4">
            <x-label>
                Condición
            </x-label>
            <select name="condicion"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                    <option value="Nuevo">Nuevo</option>
                    <option value="Regular">Regular</option>
                    <option value="Malo">Malo</option>
                    <option value="Desfazado">Desfazado</option>
            </select>
        </div>

        <div class="mb-4">
            <x-label>Modelo</x-label>
            <x-input type="text" class="w-full" name="modelo" value="{{ old('modelo') }}"/>
        </div>

        <div class="mb-4">
            <x-label>Marca</x-label>
            <x-input type="text" class="w-full" name="marca" value="{{ old('marca') }}"/>
        </div>

        <div class="mb-4">
            <x-label>Serie</x-label>
            <x-input type="text" class="w-full" name="serie" value="{{ old('serie') }}"/>
        </div>

        <div class="mb-4">
            <x-label>Protocolo de Internet</x-label>
            <x-input type="text" class="w-full" name="ip" value="{{ old('ip') }}"/>
        </div>

        <div class="mb-4">
            <x-label>Observación</x-label>
            <textarea name="observacion" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">{{ old('observacion') }}</textarea>
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
                Oficina
            </x-label>
            <select name="tipo_id"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                @foreach ($tipos as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                @endforeach
            </select>
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
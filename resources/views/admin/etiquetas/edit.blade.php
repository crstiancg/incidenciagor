<x-admin-layout>
    <form class="bg-white rounded p-6 shadow-lg" action="{{ route('admin.etiquetas.update', $etiqueta) }}" method="post">
        @csrf
        @method('PUT')
        <x-validation-errors class="mb-4">

        </x-validation-errors>
        <div class="mb-4">
            <x-label>Nombre</x-label>
            <x-input type="text" class="w-full" name="nombre" id="nombre" value="{{ old('nombre', $etiqueta->nombre) }}"/>
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
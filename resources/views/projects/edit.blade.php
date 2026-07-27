<x-templates.app-layout title="Editar Proyecto">
    <h2>Actualizar Proyecto #{{ $id }}</h2>

    <form action="{{ route('projects.update', $id) }}" method="POST" style="max-width: 400px; display: flex; flex-direction: column; gap: 12px;">
        @csrf
        @method('PUT')

        <div>
            <label style="display: block; font-weight: bold;">Nombre del Proyecto:</label>
            <input type="text" name="nombre" value="{{ $proyecto['nombre'] ?? '' }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
        </div>

        <div>
            <label style="display: block; font-weight: bold;">Estado:</label>
            <input type="text" name="estado" value="{{ $proyecto['estado'] ?? '' }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
        </div>

        <div>
            <label style="display: block; font-weight: bold;">Monto (CLP):</label>
            <input type="number" name="monto" value="{{ $proyecto['monto'] ?? '' }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
        </div>

        <x-atoms.button type="submit">Actualizar Proyecto</x-atoms.button>
    </form>
</x-templates.app-layout>
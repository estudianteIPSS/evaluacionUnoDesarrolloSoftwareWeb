<x-templates.app-layout title="Editar Proyecto">
    <h2>Actualizar Proyecto #{{ $proyecto->id }}</h2>

    <form action="{{ route('projects.update', $proyecto->id) }}" method="POST" style="max-width: 400px; display: flex; flex-direction: column; gap: 12px;">
        @csrf
        @method('PUT')

        <div>
            <label style="display: block; font-weight: bold;">Nombre del Proyecto:</label>
            <input type="text" name="nombre" value="{{ old('nombre', $proyecto->nombre) }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
        </div>

        <div>
            <label style="display: block; font-weight: bold;">Fecha Inicio:</label>
            <input type="date" name="fecha_inicio" value="{{ old('fecha_inicio', $proyecto->fecha_inicio) }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
        </div>

        <div>
            <label style="display: block; font-weight: bold;">Responsable:</label>
            <input type="text" name="responsable" value="{{ old('responsable', $proyecto->responsable) }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div>
            <label style="display: block; font-weight: bold;">Monto:</label>
            <input type="number" name="monto" value="{{ old('monto', $proyecto->monto) }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div>
            <label style="display: block; font-weight: bold;">Estado:</label>
            <input type="text" name="estado" value="{{ old('estado', $proyecto->estado) }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
        </div>

        <button type="submit" style="padding: 10px; background-color: #3182ce; color: white; border: none; border-radius: 4px; cursor: pointer;">
            Guardar Cambios
        </button>
    </form>
</x-templates.app-layout>
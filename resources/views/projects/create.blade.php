<x-templates.app-layout title="Crear Proyecto">
    <h2>Agregar Nuevo Proyecto</h2>

    <form action="{{ route('projects.store') }}" method="POST" style="max-width: 400px; display: flex; flex-direction: column; gap: 12px;">
        @csrf

        <div>
            <label style="display: block; font-weight: bold;">Nombre del Proyecto:</label>
            <input type="text" name="nombre" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
        </div>

        <div>
            <label style="display: block; font-weight: bold;">Fecha de Inicio:</label>
            <input type="date" name="fecha_inicio" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
        </div>

        <div>
            <label style="display: block; font-weight: bold;">Estado:</label>
            <select name="estado" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                <option>Planificación</option>
                <option>En Progreso</option>
                <option>Finalizado</option>
            </select>
        </div>

        <div>
            <label style="display: block; font-weight: bold;">Responsable:</label>
            <input type="text" name="responsable" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
        </div>

        <div>
            <label style="display: block; font-weight: bold;">Monto (CLP):</label>
            <input type="number" name="monto" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
        </div>

        <x-atoms.button type="submit">Guardar Proyecto</x-atoms.button>
    </form>
</x-templates.app-layout>
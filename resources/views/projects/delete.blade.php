<x-templates.app-layout title="Eliminar Proyecto">
    <h2>Eliminar Proyecto por ID</h2>

    <form action="{{ route('projects.destroy') }}" method="POST" style="max-width: 400px; display: flex; flex-direction: column; gap: 12px;">
        @csrf
        @method('DELETE')

        <div>
            <label style="display: block; font-weight: bold;">Ingrese el ID a eliminar:</label>
            <input type="number" name="id" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
        </div>

        <x-atoms.button type="submit" variant="danger">Eliminar Proyecto</x-atoms.button>
    </form>
</x-templates.app-layout>
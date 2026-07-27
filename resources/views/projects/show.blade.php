<x-templates.app-layout title="Buscar Proyecto">
    <h2>Buscar Proyecto por ID</h2>

    <form action="{{ route('projects.show') }}" method="GET" style="margin-bottom: 20px;">
        <input type="number" name="id" value="{{ $searchId }}" placeholder="Ingrese ID del proyecto" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
        <x-atoms.button type="submit">Buscar</x-atoms.button>
    </form>

    @if($proyecto)
        <div style="border: 1px solid #cbd5e0; padding: 15px; border-radius: 6px; background-color: #f7fafc; max-width: 400px;">
            <h3>{{ $proyecto['nombre'] }}</h3>
            <p><strong>ID:</strong> {{ $proyecto['id'] }}</p>
            <p><strong>Fecha de Inicio:</strong> {{ $proyecto['fecha_inicio'] }}</p>
            <p><strong>Estado:</strong> {{ $proyecto['estado'] }}</p>
            <p><strong>Responsable:</strong> {{ $proyecto['responsable'] }}</p>
            <p><strong>Monto:</strong> ${{ number_format($proyecto['monto'], 0, ',', '.') }} CLP</p>
        </div>
    @elseif($searchId)
        <p style="color: #e53e3e;">No se encontró ningún proyecto con el ID: {{ $searchId }}</p>
    @endif
</x-templates.app-layout>
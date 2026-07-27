@props(['proyectos'])
<table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
    <thead>
        <tr style="background-color: #edf2f7;">
            <th style="border: 1px solid #cbd5e0; padding: 8px;">ID</th>
            <th style="border: 1px solid #cbd5e0; padding: 8px;">Nombre</th>
            <th style="border: 1px solid #cbd5e0; padding: 8px;">Fecha Inicio</th>
            <th style="border: 1px solid #cbd5e0; padding: 8px;">Estado</th>
            <th style="border: 1px solid #cbd5e0; padding: 8px;">Responsable</th>
            <th style="border: 1px solid #cbd5e0; padding: 8px;">Monto (CLP)</th>
            <th style="border: 1px solid #cbd5e0; padding: 8px;">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($proyectos as $p)
            <tr>
                <td style="border: 1px solid #cbd5e0; padding: 8px;">{{ $p['id'] }}</td>
                <td style="border: 1px solid #cbd5e0; padding: 8px;">{{ $p['nombre'] }}</td>
                <td style="border: 1px solid #cbd5e0; padding: 8px;">{{ $p['fecha_inicio'] }}</td>
                <td style="border: 1px solid #cbd5e0; padding: 8px;">{{ $p['estado'] }}</td>
                <td style="border: 1px solid #cbd5e0; padding: 8px;">{{ $p['responsable'] }}</td>
                <td style="border: 1px solid #cbd5e0; padding: 8px;">${{ number_format($p['monto'], 0, ',', '.') }}</td>
                <td style="border: 1px solid #cbd5e0; padding: 8px;">
                    <a href="{{ route('projects.edit', $p['id']) }}" style="color: #3182ce;">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

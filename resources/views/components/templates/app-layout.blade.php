@props(['title' => 'Gestión de Proyectos'])
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }} - Tech Solutions</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px;">
    <h1 style="color: #2b6cb0;">Tech Solutions - Sistema de Gestión</h1>
    <nav style="margin-bottom: 20px;">
        <a href="{{ route('projects.index') }}" style="margin-right: 15px;">Listar Proyectos</a>
        <a href="{{ route('projects.create') }}" style="margin-right: 15px;">Crear Proyecto</a>
        <a href="{{ route('projects.show') }}" style="margin-right: 15px;">Buscar por ID</a>
        <a href="{{ route('projects.delete.view') }}" style="margin-right: 15px;">Eliminar Proyecto</a>
    </nav>
    <hr style="margin-bottom: 20px;">

    @if(session('success'))
        <div style="padding: 10px; background-color: #c6f6d5; color: #22543d; margin-bottom: 15px; border-radius: 4px;">
            {{ session('success') }}
        </div>
    @endif

    {{ $slot }}
</body>
</html>

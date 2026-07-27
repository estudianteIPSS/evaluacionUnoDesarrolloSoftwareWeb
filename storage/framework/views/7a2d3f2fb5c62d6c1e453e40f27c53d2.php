<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' => 'Gestión de Proyectos']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['title' => 'Gestión de Proyectos']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo e($title); ?> - Tech Solutions</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px;">
    <h1 style="color: #2b6cb0;">Tech Solutions - Sistema de Gestión</h1>
    <nav style="margin-bottom: 20px;">
        <a href="<?php echo e(route('projects.index')); ?>" style="margin-right: 15px;">Listar Proyectos</a>
        <a href="<?php echo e(route('projects.create')); ?>" style="margin-right: 15px;">Crear Proyecto</a>
        <a href="<?php echo e(route('projects.show')); ?>" style="margin-right: 15px;">Buscar por ID</a>
        <a href="<?php echo e(route('projects.delete.view')); ?>" style="margin-right: 15px;">Eliminar Proyecto</a>
    </nav>
    <hr style="margin-bottom: 20px;">

    <?php if(session('success')): ?>
        <div style="padding: 10px; background-color: #c6f6d5; color: #22543d; margin-bottom: 15px; border-radius: 4px;">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php echo e($slot); ?>

</body>
</html>
<?php /**PATH C:\Users\Eduardo\Desktop\tech-solutions-laravel\resources\views/components/templates/app-layout.blade.php ENDPATH**/ ?>
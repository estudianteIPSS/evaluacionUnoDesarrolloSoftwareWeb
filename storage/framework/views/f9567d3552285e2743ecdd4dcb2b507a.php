<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['proyectos']));

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

foreach (array_filter((['proyectos']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
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
        <?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="border: 1px solid #cbd5e0; padding: 8px;"><?php echo e($p['id']); ?></td>
                <td style="border: 1px solid #cbd5e0; padding: 8px;"><?php echo e($p['nombre']); ?></td>
                <td style="border: 1px solid #cbd5e0; padding: 8px;"><?php echo e($p['fecha_inicio']); ?></td>
                <td style="border: 1px solid #cbd5e0; padding: 8px;"><?php echo e($p['estado']); ?></td>
                <td style="border: 1px solid #cbd5e0; padding: 8px;"><?php echo e($p['responsable']); ?></td>
                <td style="border: 1px solid #cbd5e0; padding: 8px;">$<?php echo e(number_format($p['monto'], 0, ',', '.')); ?></td>
                <td style="border: 1px solid #cbd5e0; padding: 8px;">
                    <a href="<?php echo e(route('projects.edit', $p['id'])); ?>" style="color: #3182ce;">Editar</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH C:\Users\Eduardo\Desktop\tech-solutions-laravel\resources\views/components/organisms/project-table.blade.php ENDPATH**/ ?>
<?php if (isset($component)) { $__componentOriginal65e9aed1e20e27d4447553c0aa3d1d0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal65e9aed1e20e27d4447553c0aa3d1d0a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.templates.app-layout','data' => ['title' => 'Buscar Proyecto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('templates.app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Buscar Proyecto']); ?>
    <h2>Buscar Proyecto por ID</h2>

    <form action="<?php echo e(route('projects.show')); ?>" method="GET" style="margin-bottom: 20px;">
        <input type="number" name="id" value="<?php echo e($searchId); ?>" placeholder="Ingrese ID del proyecto" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
        <?php if (isset($component)) { $__componentOriginal24e00c00ca284956c19f488a436335cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal24e00c00ca284956c19f488a436335cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.button','data' => ['type' => 'submit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('atoms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit']); ?>Buscar <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal24e00c00ca284956c19f488a436335cc)): ?>
<?php $attributes = $__attributesOriginal24e00c00ca284956c19f488a436335cc; ?>
<?php unset($__attributesOriginal24e00c00ca284956c19f488a436335cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal24e00c00ca284956c19f488a436335cc)): ?>
<?php $component = $__componentOriginal24e00c00ca284956c19f488a436335cc; ?>
<?php unset($__componentOriginal24e00c00ca284956c19f488a436335cc); ?>
<?php endif; ?>
    </form>

    <?php if($proyecto): ?>
        <div style="border: 1px solid #cbd5e0; padding: 15px; border-radius: 6px; background-color: #f7fafc; max-width: 400px;">
            <h3><?php echo e($proyecto['nombre']); ?></h3>
            <p><strong>ID:</strong> <?php echo e($proyecto['id']); ?></p>
            <p><strong>Fecha de Inicio:</strong> <?php echo e($proyecto['fecha_inicio']); ?></p>
            <p><strong>Estado:</strong> <?php echo e($proyecto['estado']); ?></p>
            <p><strong>Responsable:</strong> <?php echo e($proyecto['responsable']); ?></p>
            <p><strong>Monto:</strong> $<?php echo e(number_format($proyecto['monto'], 0, ',', '.')); ?> CLP</p>
        </div>
    <?php elseif($searchId): ?>
        <p style="color: #e53e3e;">No se encontró ningún proyecto con el ID: <?php echo e($searchId); ?></p>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal65e9aed1e20e27d4447553c0aa3d1d0a)): ?>
<?php $attributes = $__attributesOriginal65e9aed1e20e27d4447553c0aa3d1d0a; ?>
<?php unset($__attributesOriginal65e9aed1e20e27d4447553c0aa3d1d0a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65e9aed1e20e27d4447553c0aa3d1d0a)): ?>
<?php $component = $__componentOriginal65e9aed1e20e27d4447553c0aa3d1d0a; ?>
<?php unset($__componentOriginal65e9aed1e20e27d4447553c0aa3d1d0a); ?>
<?php endif; ?><?php /**PATH C:\Users\Eduardo\Desktop\tech-solutions-laravel\resources\views/projects/show.blade.php ENDPATH**/ ?>
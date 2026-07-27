<?php if (isset($component)) { $__componentOriginal65e9aed1e20e27d4447553c0aa3d1d0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal65e9aed1e20e27d4447553c0aa3d1d0a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.templates.app-layout','data' => ['title' => 'Crear Proyecto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('templates.app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Crear Proyecto']); ?>
    <h2>Agregar Nuevo Proyecto</h2>

    <form action="<?php echo e(route('projects.store')); ?>" method="POST" style="max-width: 400px; display: flex; flex-direction: column; gap: 12px;">
        <?php echo csrf_field(); ?>

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

        <?php if (isset($component)) { $__componentOriginal24e00c00ca284956c19f488a436335cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal24e00c00ca284956c19f488a436335cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.button','data' => ['type' => 'submit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('atoms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit']); ?>Guardar Proyecto <?php echo $__env->renderComponent(); ?>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal65e9aed1e20e27d4447553c0aa3d1d0a)): ?>
<?php $attributes = $__attributesOriginal65e9aed1e20e27d4447553c0aa3d1d0a; ?>
<?php unset($__attributesOriginal65e9aed1e20e27d4447553c0aa3d1d0a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65e9aed1e20e27d4447553c0aa3d1d0a)): ?>
<?php $component = $__componentOriginal65e9aed1e20e27d4447553c0aa3d1d0a; ?>
<?php unset($__componentOriginal65e9aed1e20e27d4447553c0aa3d1d0a); ?>
<?php endif; ?><?php /**PATH C:\Users\Eduardo\Desktop\tech-solutions-laravel\resources\views/projects/create.blade.php ENDPATH**/ ?>
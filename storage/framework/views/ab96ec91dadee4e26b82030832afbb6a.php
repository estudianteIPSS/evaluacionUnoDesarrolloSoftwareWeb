<?php if (isset($component)) { $__componentOriginal65e9aed1e20e27d4447553c0aa3d1d0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal65e9aed1e20e27d4447553c0aa3d1d0a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.templates.app-layout','data' => ['title' => 'Eliminar Proyecto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('templates.app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Eliminar Proyecto']); ?>
    <h2>Eliminar Proyecto por ID</h2>

    <form action="<?php echo e(route('projects.destroy')); ?>" method="POST" style="max-width: 400px; display: flex; flex-direction: column; gap: 12px;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>

        <div>
            <label style="display: block; font-weight: bold;">Ingrese el ID a eliminar:</label>
            <input type="number" name="id" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
        </div>

        <?php if (isset($component)) { $__componentOriginal24e00c00ca284956c19f488a436335cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal24e00c00ca284956c19f488a436335cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.button','data' => ['type' => 'submit','variant' => 'danger']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('atoms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','variant' => 'danger']); ?>Eliminar Proyecto <?php echo $__env->renderComponent(); ?>
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
<?php endif; ?><?php /**PATH C:\Users\Eduardo\Desktop\tech-solutions-laravel\resources\views/projects/delete.blade.php ENDPATH**/ ?>
<?php if (isset($component)) { $__componentOriginal65e9aed1e20e27d4447553c0aa3d1d0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal65e9aed1e20e27d4447553c0aa3d1d0a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.templates.app-layout','data' => ['title' => 'Listado de Proyectos']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('templates.app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Listado de Proyectos']); ?>
    <?php if (isset($component)) { $__componentOriginal74c56701e9af4ad1fa698b53a94bc634 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74c56701e9af4ad1fa698b53a94bc634 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.uf-card','data' => ['valor' => $valorUF]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('molecules.uf-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['valor' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($valorUF)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74c56701e9af4ad1fa698b53a94bc634)): ?>
<?php $attributes = $__attributesOriginal74c56701e9af4ad1fa698b53a94bc634; ?>
<?php unset($__attributesOriginal74c56701e9af4ad1fa698b53a94bc634); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74c56701e9af4ad1fa698b53a94bc634)): ?>
<?php $component = $__componentOriginal74c56701e9af4ad1fa698b53a94bc634; ?>
<?php unset($__componentOriginal74c56701e9af4ad1fa698b53a94bc634); ?>
<?php endif; ?>
    <h2>Listado General de Proyectos</h2>
    <?php if (isset($component)) { $__componentOriginalb0c6a3725b263a0cf307e1ec73bed09f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb0c6a3725b263a0cf307e1ec73bed09f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.organisms.project-table','data' => ['proyectos' => $proyectos]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('organisms.project-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['proyectos' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($proyectos)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb0c6a3725b263a0cf307e1ec73bed09f)): ?>
<?php $attributes = $__attributesOriginalb0c6a3725b263a0cf307e1ec73bed09f; ?>
<?php unset($__attributesOriginalb0c6a3725b263a0cf307e1ec73bed09f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb0c6a3725b263a0cf307e1ec73bed09f)): ?>
<?php $component = $__componentOriginalb0c6a3725b263a0cf307e1ec73bed09f; ?>
<?php unset($__componentOriginalb0c6a3725b263a0cf307e1ec73bed09f); ?>
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
<?php endif; ?><?php /**PATH C:\Users\Eduardo\Desktop\tech-solutions-laravel\resources\views/projects/index.blade.php ENDPATH**/ ?>
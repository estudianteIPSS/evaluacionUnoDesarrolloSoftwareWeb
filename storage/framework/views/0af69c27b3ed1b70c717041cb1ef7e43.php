<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['valor']));

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

foreach (array_filter((['valor']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<div style="background: #e2e8f0; padding: 12px; border-radius: 6px; margin-bottom: 20px; border-left: 4px solid #3182ce;">
    <strong>Indicador Económico Oficial:</strong> 
    <?php if($valor): ?>
        Valor UF hoy: <strong>$<?php echo e(number_format($valor, 2, ',', '.')); ?> CLP</strong>
    <?php else: ?>
        <span style="color: red;">No fue posible consultar la UF.</span>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\Eduardo\Desktop\tech-solutions-laravel\resources\views/components/molecules/uf-card.blade.php ENDPATH**/ ?>
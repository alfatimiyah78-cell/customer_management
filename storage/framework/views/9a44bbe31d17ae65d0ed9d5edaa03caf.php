<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'sortable' => null,
    'direction' => null,
]));

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

foreach (array_filter(([
    'sortable' => null,
    'direction' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<th
    <?php echo e($attributes->merge(['class' => 'border-r border-zinc-200 border-b-zinc-300/80 dark:border-white/10 px-6 py-3 text-center text-xs whitespace-nowrap tracking-wider font-bold text-zinc-800 dark:text-white'])->only('class')); ?>>

    <!--[if BLOCK]><![endif]--><?php if (! ($sortable)): ?>
        <span class="leading-4 tracking-wider">
            <?php echo e($slot); ?>

        </span>
    <?php else: ?>
        <button <?php echo e($attributes->except('class')); ?> class="space-x-1 leading-4">
            <span>
                <?php echo e($slot); ?>

            </span>
            <span>
                <!--[if BLOCK]><![endif]--><?php if($direction === 'asc'): ?>
                    <i class="fas fa-sort-up"></i> ↑
                <?php elseif($direction === 'desc'): ?>
                    <i class="fas fa-sort-down"></i> ↓
                <?php else: ?>
                    <i class="text-muted fas fa-sort"></i> ↑↓
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </span>
        </button>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</th>
<?php /**PATH C:\xampp\htdocs\customer_management\resources\views/components/tables/header.blade.php ENDPATH**/ ?>
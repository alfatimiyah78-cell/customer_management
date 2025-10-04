<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['disabled' => false]));

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

foreach (array_filter((['disabled' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<select data-flux-select-native <?php echo e($disabled ? 'disabled' : ''); ?> <?php echo $attributes->merge([
    'class' =>
        'bg-white dark:bg-white/10 dark:disabled:bg-white/[9%] w-full pl-3 pr-10 block h-10 py-2 text-base sm:text-sm leading-none rounded-lg appearance-none shadow-xs border text-gray-600',
]); ?>>
    <?php echo e($slot); ?>

</select>
<?php /**PATH C:\xampp\htdocs\customer_management\resources\views/components/customer-management/select.blade.php ENDPATH**/ ?>
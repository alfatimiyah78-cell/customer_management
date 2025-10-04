<div class="p-3">
    <?php
    $tableType = 'normal';
    $tableItems = $sortedPermissionsRolesUsers;
    ?>

    <div
        class="bg-white dark:bg-white/10 border border-zinc-200 border-b-zinc-300/80 dark:border-white/10 rounded shadow">
        <div class="border-b border-zinc-200 border-b-zinc-300/80 dark:border-white/10 p-3">
            <div class="flex justify-between text-zinc-800 dark:text-white">
                <div class="flex justify-start text-sm ms-2 py-3">
                    <?php if (isset($component)) { $__componentOriginal4cc377eda9b63b796b6668ee7832d023 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cc377eda9b63b796b6668ee7832d023 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::badge.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php echo trans('roles.titles.permissions-table'); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4cc377eda9b63b796b6668ee7832d023)): ?>
<?php $attributes = $__attributesOriginal4cc377eda9b63b796b6668ee7832d023; ?>
<?php unset($__attributesOriginal4cc377eda9b63b796b6668ee7832d023); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4cc377eda9b63b796b6668ee7832d023)): ?>
<?php $component = $__componentOriginal4cc377eda9b63b796b6668ee7832d023; ?>
<?php unset($__componentOriginal4cc377eda9b63b796b6668ee7832d023); ?>
<?php endif; ?>
                </div>
                <div class="flex justify-between">

                </div>
            </div>

            <?php echo $__env->make('livewire.admin.roles.tables.permission-items-table', [
            'tabletype' => $tableType,
            'items' => $tableItems,
            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        </div>
    </div>
</div>

<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.roles.modal.edit-permission', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-968455140-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
<?php /**PATH C:\xampp\htdocs\customer_management\resources\views/livewire/admin/roles/tables/permissions-table.blade.php ENDPATH**/ ?>
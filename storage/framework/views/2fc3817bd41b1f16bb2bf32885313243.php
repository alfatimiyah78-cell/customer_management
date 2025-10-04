<section class="w-full">
    <?php echo $__env->make('partials.settings-heading', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php if (isset($component)) { $__componentOriginal2b805ec16449dd7a8a3ee49eb83c332a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b805ec16449dd7a8a3ee49eb83c332a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.paket.layout','data' => ['heading' => __('paket.pakets'),'subheading' => __('Pakets description')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.paket.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('paket.pakets')),'subheading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Pakets description'))]); ?>

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('livewire-pie-chart', ['pieChartModel' => $pieChartModel]);

$__html = app('livewire')->mount($__name, $__params, ''.e($pieChartModel->reactiveKey()).'', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <div class="md:flex-row flex-col flex gap-2 justify-between mb-4">
            <div class="md:flex-row flex-col flex justify-start gap-2">
                <?php if (isset($component)) { $__componentOriginal26c546557cdc09040c8dd00b2090afd0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26c546557cdc09040c8dd00b2090afd0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::input.index','data' => ['wire:model.live.debounce.500ms' => 'search_name','type' => 'text','placeholder' => ''.e(trans('paket.ph.search-with-name')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live.debounce.500ms' => 'search_name','type' => 'text','placeholder' => ''.e(trans('paket.ph.search-with-name')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal26c546557cdc09040c8dd00b2090afd0)): ?>
<?php $attributes = $__attributesOriginal26c546557cdc09040c8dd00b2090afd0; ?>
<?php unset($__attributesOriginal26c546557cdc09040c8dd00b2090afd0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26c546557cdc09040c8dd00b2090afd0)): ?>
<?php $component = $__componentOriginal26c546557cdc09040c8dd00b2090afd0; ?>
<?php unset($__componentOriginal26c546557cdc09040c8dd00b2090afd0); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::select.index','data' => ['wire:model.change' => 'search_server','id' => 'search_server','class' => 'mt-1 mr-1 pr-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.change' => 'search_server','id' => 'search_server','class' => 'mt-1 mr-1 pr-4']); ?>
                    <option value="" selected>
                        <?php echo e(trans('paket.ph.search-with-server')); ?>

                    </option>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = \App\Models\Servers\Mikrotik::where('disabled', false)->orderBy('name', 'asc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mikrotik): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($mikrotik->id); ?>"><?php echo e($mikrotik->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $attributes = $__attributesOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__attributesOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $component = $__componentOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__componentOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::select.index','data' => ['wire:model.change' => 'search_with_status','id' => 'search_with_status','class' => 'mt-1 mr-1 pr-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.change' => 'search_with_status','id' => 'search_with_status','class' => 'mt-1 mr-1 pr-4']); ?>
                    <option value="">
                        <?php echo e(trans('paket.ph.search-with-status')); ?>

                    </option>
                    <option value="true"><?php echo e(trans('paket.status.disable')); ?></option>
                    <option value="false"><?php echo e(trans('paket.status.enable')); ?></option>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $attributes = $__attributesOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__attributesOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $component = $__componentOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__componentOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
            </div>
            <div class="md:flex justify-between gap-2">
                <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['wire:click' => '$dispatch(\'show-add-paket-modal\')','style' => 'cursor: pointer;','variant' => 'primary','icon' => 'plus-circle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => '$dispatch(\'show-add-paket-modal\')','style' => 'cursor: pointer;','variant' => 'primary','icon' => 'plus-circle']); ?>
                    <?php echo e(__('paket.button.create')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>

            </div>
        </div>

        <div wire:loading.class="opacity-75">
            <?php if (isset($component)) { $__componentOriginal7fdb3552722b7d40f4be207e2e79dc5a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7fdb3552722b7d40f4be207e2e79dc5a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.table','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('header', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginal882fa6b7955d55100e3dde31162d8487 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal882fa6b7955d55100e3dde31162d8487 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.theader','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.theader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php if (isset($component)) { $__componentOriginal81fa8e6e728dc68625514880143c1cdd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81fa8e6e728dc68625514880143c1cdd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header','data' => ['class' => 'w-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-1']); ?><?php echo e(trans('paket.table.no')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal81fa8e6e728dc68625514880143c1cdd)): ?>
<?php $attributes = $__attributesOriginal81fa8e6e728dc68625514880143c1cdd; ?>
<?php unset($__attributesOriginal81fa8e6e728dc68625514880143c1cdd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81fa8e6e728dc68625514880143c1cdd)): ?>
<?php $component = $__componentOriginal81fa8e6e728dc68625514880143c1cdd; ?>
<?php unset($__componentOriginal81fa8e6e728dc68625514880143c1cdd); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal81fa8e6e728dc68625514880143c1cdd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81fa8e6e728dc68625514880143c1cdd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header','data' => ['sortable' => true,'wire:click.prevent' => 'sortBy(\'name\')','direction' => $sortField === 'name' ? $sortDirection : null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sortable' => true,'wire:click.prevent' => 'sortBy(\'name\')','direction' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sortField === 'name' ? $sortDirection : null)]); ?><?php echo e(trans('paket.table.name')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal81fa8e6e728dc68625514880143c1cdd)): ?>
<?php $attributes = $__attributesOriginal81fa8e6e728dc68625514880143c1cdd; ?>
<?php unset($__attributesOriginal81fa8e6e728dc68625514880143c1cdd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81fa8e6e728dc68625514880143c1cdd)): ?>
<?php $component = $__componentOriginal81fa8e6e728dc68625514880143c1cdd; ?>
<?php unset($__componentOriginal81fa8e6e728dc68625514880143c1cdd); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginal81fa8e6e728dc68625514880143c1cdd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81fa8e6e728dc68625514880143c1cdd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header','data' => ['sortable' => true,'wire:click.prevent' => 'sortBy(\'price\')','direction' => $sortField === 'price' ? $sortDirection : null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sortable' => true,'wire:click.prevent' => 'sortBy(\'price\')','direction' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sortField === 'price' ? $sortDirection : null)]); ?>
                            <?php echo e(trans('paket.table.price')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal81fa8e6e728dc68625514880143c1cdd)): ?>
<?php $attributes = $__attributesOriginal81fa8e6e728dc68625514880143c1cdd; ?>
<?php unset($__attributesOriginal81fa8e6e728dc68625514880143c1cdd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81fa8e6e728dc68625514880143c1cdd)): ?>
<?php $component = $__componentOriginal81fa8e6e728dc68625514880143c1cdd; ?>
<?php unset($__componentOriginal81fa8e6e728dc68625514880143c1cdd); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal81fa8e6e728dc68625514880143c1cdd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81fa8e6e728dc68625514880143c1cdd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(trans('paket.table.profile')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal81fa8e6e728dc68625514880143c1cdd)): ?>
<?php $attributes = $__attributesOriginal81fa8e6e728dc68625514880143c1cdd; ?>
<?php unset($__attributesOriginal81fa8e6e728dc68625514880143c1cdd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81fa8e6e728dc68625514880143c1cdd)): ?>
<?php $component = $__componentOriginal81fa8e6e728dc68625514880143c1cdd; ?>
<?php unset($__componentOriginal81fa8e6e728dc68625514880143c1cdd); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal81fa8e6e728dc68625514880143c1cdd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81fa8e6e728dc68625514880143c1cdd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(trans('paket.table.server')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal81fa8e6e728dc68625514880143c1cdd)): ?>
<?php $attributes = $__attributesOriginal81fa8e6e728dc68625514880143c1cdd; ?>
<?php unset($__attributesOriginal81fa8e6e728dc68625514880143c1cdd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81fa8e6e728dc68625514880143c1cdd)): ?>
<?php $component = $__componentOriginal81fa8e6e728dc68625514880143c1cdd; ?>
<?php unset($__componentOriginal81fa8e6e728dc68625514880143c1cdd); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginal81fa8e6e728dc68625514880143c1cdd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81fa8e6e728dc68625514880143c1cdd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php echo e(trans('paket.table.client')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal81fa8e6e728dc68625514880143c1cdd)): ?>
<?php $attributes = $__attributesOriginal81fa8e6e728dc68625514880143c1cdd; ?>
<?php unset($__attributesOriginal81fa8e6e728dc68625514880143c1cdd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81fa8e6e728dc68625514880143c1cdd)): ?>
<?php $component = $__componentOriginal81fa8e6e728dc68625514880143c1cdd; ?>
<?php unset($__componentOriginal81fa8e6e728dc68625514880143c1cdd); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal81fa8e6e728dc68625514880143c1cdd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81fa8e6e728dc68625514880143c1cdd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php echo e(trans('paket.table.trial-days')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal81fa8e6e728dc68625514880143c1cdd)): ?>
<?php $attributes = $__attributesOriginal81fa8e6e728dc68625514880143c1cdd; ?>
<?php unset($__attributesOriginal81fa8e6e728dc68625514880143c1cdd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81fa8e6e728dc68625514880143c1cdd)): ?>
<?php $component = $__componentOriginal81fa8e6e728dc68625514880143c1cdd; ?>
<?php unset($__componentOriginal81fa8e6e728dc68625514880143c1cdd); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal81fa8e6e728dc68625514880143c1cdd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81fa8e6e728dc68625514880143c1cdd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header','data' => ['class' => 'w-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-1']); ?>
                            <?php if (isset($component)) { $__componentOriginal4cc377eda9b63b796b6668ee7832d023 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cc377eda9b63b796b6668ee7832d023 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::badge.index','data' => ['size' => 'sm','iconTrailing' => 'power']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','icon-trailing' => 'power']); ?><?php echo e(trans('paket.table.status')); ?>

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
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal81fa8e6e728dc68625514880143c1cdd)): ?>
<?php $attributes = $__attributesOriginal81fa8e6e728dc68625514880143c1cdd; ?>
<?php unset($__attributesOriginal81fa8e6e728dc68625514880143c1cdd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81fa8e6e728dc68625514880143c1cdd)): ?>
<?php $component = $__componentOriginal81fa8e6e728dc68625514880143c1cdd; ?>
<?php unset($__componentOriginal81fa8e6e728dc68625514880143c1cdd); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal81fa8e6e728dc68625514880143c1cdd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81fa8e6e728dc68625514880143c1cdd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(trans('paket.table.action')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal81fa8e6e728dc68625514880143c1cdd)): ?>
<?php $attributes = $__attributesOriginal81fa8e6e728dc68625514880143c1cdd; ?>
<?php unset($__attributesOriginal81fa8e6e728dc68625514880143c1cdd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81fa8e6e728dc68625514880143c1cdd)): ?>
<?php $component = $__componentOriginal81fa8e6e728dc68625514880143c1cdd; ?>
<?php unset($__componentOriginal81fa8e6e728dc68625514880143c1cdd); ?>
<?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal882fa6b7955d55100e3dde31162d8487)): ?>
<?php $attributes = $__attributesOriginal882fa6b7955d55100e3dde31162d8487; ?>
<?php unset($__attributesOriginal882fa6b7955d55100e3dde31162d8487); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal882fa6b7955d55100e3dde31162d8487)): ?>
<?php $component = $__componentOriginal882fa6b7955d55100e3dde31162d8487; ?>
<?php unset($__componentOriginal882fa6b7955d55100e3dde31162d8487); ?>
<?php endif; ?>
                 <?php $__env->endSlot(); ?>
                 <?php $__env->slot('body', null, []); ?> 
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $pakets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $paket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php if (isset($component)) { $__componentOriginal7dc152880c0620fc2a35c885f9303a4a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7dc152880c0620fc2a35c885f9303a4a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php if (isset($component)) { $__componentOriginal0fd7ca41726632205875e207356598d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0fd7ca41726632205875e207356598d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell','data' => ['class' => 'text-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-center']); ?>
                                <?php echo e(($pakets->currentpage() - 1) * $pakets->perpage() + $loop->index + 1); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $attributes = $__attributesOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__attributesOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $component = $__componentOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__componentOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal0fd7ca41726632205875e207356598d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0fd7ca41726632205875e207356598d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <?php if (isset($component)) { $__componentOriginal943cdda7cef0d01ea0b343893679e71f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal943cdda7cef0d01ea0b343893679e71f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.group','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                    <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'xs','variant' => 'primary','style' => 'cursor: pointer;']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'xs','variant' => 'primary','style' => 'cursor: pointer;']); ?>
                                        <?php echo e($paket->name); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'xs','variant' => ''.e($paket->show_on_customer ? 'success' : 'danger').'','icon' => 'eye','style' => 'cursor: pointer;']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'xs','variant' => ''.e($paket->show_on_customer ? 'success' : 'danger').'','icon' => 'eye','style' => 'cursor: pointer;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal943cdda7cef0d01ea0b343893679e71f)): ?>
<?php $attributes = $__attributesOriginal943cdda7cef0d01ea0b343893679e71f; ?>
<?php unset($__attributesOriginal943cdda7cef0d01ea0b343893679e71f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal943cdda7cef0d01ea0b343893679e71f)): ?>
<?php $component = $__componentOriginal943cdda7cef0d01ea0b343893679e71f; ?>
<?php unset($__componentOriginal943cdda7cef0d01ea0b343893679e71f); ?>
<?php endif; ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $attributes = $__attributesOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__attributesOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $component = $__componentOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__componentOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginal0fd7ca41726632205875e207356598d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0fd7ca41726632205875e207356598d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <span class="flex justify-end">
                                    <!--[if BLOCK]><![endif]--><?php if($paket->price == 0): ?>
                                        <?php echo e(trans('paket.free')); ?>

                                    <?php else: ?>
                                        <?php echo 'Rp. ' . number_format($paket->price, 0); ?>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </span>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $attributes = $__attributesOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__attributesOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $component = $__componentOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__componentOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal0fd7ca41726632205875e207356598d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0fd7ca41726632205875e207356598d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell','data' => ['class' => 'text-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-center']); ?>
                                <?php if (isset($component)) { $__componentOriginal4cc377eda9b63b796b6668ee7832d023 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cc377eda9b63b796b6668ee7832d023 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::badge.index','data' => ['class' => 'text-xs','color' => 'sky']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-xs','color' => 'sky']); ?>
                                    <?php echo e($paket->paket_profile->profile_name ?? ''); ?> -
                                    <?php echo e($paket->mikrotik_ppp_profile_id ?? ''); ?>

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
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $attributes = $__attributesOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__attributesOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $component = $__componentOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__componentOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal0fd7ca41726632205875e207356598d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0fd7ca41726632205875e207356598d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell','data' => ['class' => 'text-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-center']); ?>
                                <?php echo e($paket->mikrotik->name ?? ''); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $attributes = $__attributesOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__attributesOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $component = $__componentOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__componentOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginal0fd7ca41726632205875e207356598d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0fd7ca41726632205875e207356598d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell','data' => ['class' => 'text-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-center']); ?>
                                <a wire:click="showViewCustomerPaketModal('<?php echo e($paket->slug); ?>')"
                                    style="cursor: pointer" wire:loading.attr="disabled"
                                    title="<?php echo e(trans('paket.button.view-customer')); ?>">
                                    <?php echo trans_choice('paket.label.customer-paket-count', $paket->customer_pakets->count(), [
                                        'count_customer' => $paket->customer_pakets->count(),
                                    ]); ?>

                                </a>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $attributes = $__attributesOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__attributesOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $component = $__componentOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__componentOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal0fd7ca41726632205875e207356598d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0fd7ca41726632205875e207356598d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell','data' => ['class' => 'text-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-center']); ?>
                                <?php echo e($paket->trial_days); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $attributes = $__attributesOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__attributesOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $component = $__componentOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__componentOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal0fd7ca41726632205875e207356598d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0fd7ca41726632205875e207356598d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <div class="inline-flex">
                                    <!--[if BLOCK]><![endif]--><?php if(!$paket->customer_pakets->count()): ?>
                                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.toogle-button', ['model' => $paket,'field' => 'disabled','dispatch' => 'paket-disable']);

$__html = app('livewire')->mount($__name, $__params, ''.e(now()).'', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <span class="ms-2 font-medium text-gray-900 dark:text-gray-300">
                                        <!--[if BLOCK]><![endif]--><?php if($paket->disabled): ?>
                                            <?php echo e(trans('system.disable')); ?>

                                        <?php else: ?>
                                            <?php echo e(trans('system.enable')); ?>

                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </span>
                                </div>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $attributes = $__attributesOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__attributesOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $component = $__componentOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__componentOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal0fd7ca41726632205875e207356598d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0fd7ca41726632205875e207356598d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <div class="flex gap-2 justify-end">
                                    <?php if (isset($component)) { $__componentOriginal943cdda7cef0d01ea0b343893679e71f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal943cdda7cef0d01ea0b343893679e71f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.group','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <?php if (isset($component)) { $__componentOriginalf5109f209df079b3a83484e1e6310749 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5109f209df079b3a83484e1e6310749 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::tooltip.index','data' => ['content' => ''.e(trans('paket.button.show')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['content' => ''.e(trans('paket.button.show')).'']); ?>
                                            <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'xs','variant' => 'primary','style' => 'cursor: pointer;','icon' => 'eye','disabled' => true,'wire:click' => '$dispatch(\'show-view-paket-modal\', {paket: \''.e($paket->slug).'\'})']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'xs','variant' => 'primary','style' => 'cursor: pointer;','icon' => 'eye','disabled' => true,'wire:click' => '$dispatch(\'show-view-paket-modal\', {paket: \''.e($paket->slug).'\'})']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5109f209df079b3a83484e1e6310749)): ?>
<?php $attributes = $__attributesOriginalf5109f209df079b3a83484e1e6310749; ?>
<?php unset($__attributesOriginalf5109f209df079b3a83484e1e6310749); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5109f209df079b3a83484e1e6310749)): ?>
<?php $component = $__componentOriginalf5109f209df079b3a83484e1e6310749; ?>
<?php unset($__componentOriginalf5109f209df079b3a83484e1e6310749); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginalf5109f209df079b3a83484e1e6310749 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5109f209df079b3a83484e1e6310749 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::tooltip.index','data' => ['content' => ''.e(trans('paket.button.edit')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['content' => ''.e(trans('paket.button.edit')).'']); ?>
                                        <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'xs','variant' => 'primary','style' => 'cursor: pointer;','icon' => 'pencil','wire:click' => '$dispatch(\'show-add-paket-modal\', {paket: \''.e($paket->slug).'\'})']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'xs','variant' => 'primary','style' => 'cursor: pointer;','icon' => 'pencil','wire:click' => '$dispatch(\'show-add-paket-modal\', {paket: \''.e($paket->slug).'\'})']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5109f209df079b3a83484e1e6310749)): ?>
<?php $attributes = $__attributesOriginalf5109f209df079b3a83484e1e6310749; ?>
<?php unset($__attributesOriginalf5109f209df079b3a83484e1e6310749); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5109f209df079b3a83484e1e6310749)): ?>
<?php $component = $__componentOriginalf5109f209df079b3a83484e1e6310749; ?>
<?php unset($__componentOriginalf5109f209df079b3a83484e1e6310749); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginalf5109f209df079b3a83484e1e6310749 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5109f209df079b3a83484e1e6310749 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::tooltip.index','data' => ['content' => ''.e(trans('paket.button.update-script')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['content' => ''.e(trans('paket.button.update-script')).'']); ?>
                                            <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'xs','variant' => 'primary','style' => 'cursor: pointer;','icon' => 'arrow-up-circle','wire:click' => 'updateProfileScript(\''.e($paket->slug).'\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'xs','variant' => 'primary','style' => 'cursor: pointer;','icon' => 'arrow-up-circle','wire:click' => 'updateProfileScript(\''.e($paket->slug).'\')']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5109f209df079b3a83484e1e6310749)): ?>
<?php $attributes = $__attributesOriginalf5109f209df079b3a83484e1e6310749; ?>
<?php unset($__attributesOriginalf5109f209df079b3a83484e1e6310749); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5109f209df079b3a83484e1e6310749)): ?>
<?php $component = $__componentOriginalf5109f209df079b3a83484e1e6310749; ?>
<?php unset($__componentOriginalf5109f209df079b3a83484e1e6310749); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginalf5109f209df079b3a83484e1e6310749 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5109f209df079b3a83484e1e6310749 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::tooltip.index','data' => ['content' => ''.e(trans('paket.button.delete')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['content' => ''.e(trans('paket.button.delete')).'']); ?>
                                            <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'xs','variant' => 'danger','style' => 'cursor: pointer;','icon' => 'trash','wire:click' => '$dispatch(\'show-delete-paket-modal\', {paket: \''.e($paket->slug).'\'})']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'xs','variant' => 'danger','style' => 'cursor: pointer;','icon' => 'trash','wire:click' => '$dispatch(\'show-delete-paket-modal\', {paket: \''.e($paket->slug).'\'})']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5109f209df079b3a83484e1e6310749)): ?>
<?php $attributes = $__attributesOriginalf5109f209df079b3a83484e1e6310749; ?>
<?php unset($__attributesOriginalf5109f209df079b3a83484e1e6310749); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5109f209df079b3a83484e1e6310749)): ?>
<?php $component = $__componentOriginalf5109f209df079b3a83484e1e6310749; ?>
<?php unset($__componentOriginalf5109f209df079b3a83484e1e6310749); ?>
<?php endif; ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal943cdda7cef0d01ea0b343893679e71f)): ?>
<?php $attributes = $__attributesOriginal943cdda7cef0d01ea0b343893679e71f; ?>
<?php unset($__attributesOriginal943cdda7cef0d01ea0b343893679e71f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal943cdda7cef0d01ea0b343893679e71f)): ?>
<?php $component = $__componentOriginal943cdda7cef0d01ea0b343893679e71f; ?>
<?php unset($__componentOriginal943cdda7cef0d01ea0b343893679e71f); ?>
<?php endif; ?>
                                </div>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $attributes = $__attributesOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__attributesOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $component = $__componentOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__componentOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7dc152880c0620fc2a35c885f9303a4a)): ?>
<?php $attributes = $__attributesOriginal7dc152880c0620fc2a35c885f9303a4a; ?>
<?php unset($__attributesOriginal7dc152880c0620fc2a35c885f9303a4a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7dc152880c0620fc2a35c885f9303a4a)): ?>
<?php $component = $__componentOriginal7dc152880c0620fc2a35c885f9303a4a; ?>
<?php unset($__componentOriginal7dc152880c0620fc2a35c885f9303a4a); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php if (isset($component)) { $__componentOriginal7dc152880c0620fc2a35c885f9303a4a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7dc152880c0620fc2a35c885f9303a4a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php if (isset($component)) { $__componentOriginal0fd7ca41726632205875e207356598d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0fd7ca41726632205875e207356598d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell','data' => ['colspan' => '8']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colspan' => '8']); ?>
                                <div class="flex justify-center items-center">
                                    <span class="font-medium py-8 text-gray-400 text-xl">
                                        <?php echo e(trans('paket.notfound')); ?>

                                    </span>
                                </div>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $attributes = $__attributesOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__attributesOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0fd7ca41726632205875e207356598d5)): ?>
<?php $component = $__componentOriginal0fd7ca41726632205875e207356598d5; ?>
<?php unset($__componentOriginal0fd7ca41726632205875e207356598d5); ?>
<?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7dc152880c0620fc2a35c885f9303a4a)): ?>
<?php $attributes = $__attributesOriginal7dc152880c0620fc2a35c885f9303a4a; ?>
<?php unset($__attributesOriginal7dc152880c0620fc2a35c885f9303a4a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7dc152880c0620fc2a35c885f9303a4a)): ?>
<?php $component = $__componentOriginal7dc152880c0620fc2a35c885f9303a4a; ?>
<?php unset($__componentOriginal7dc152880c0620fc2a35c885f9303a4a); ?>
<?php endif; ?>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7fdb3552722b7d40f4be207e2e79dc5a)): ?>
<?php $attributes = $__attributesOriginal7fdb3552722b7d40f4be207e2e79dc5a; ?>
<?php unset($__attributesOriginal7fdb3552722b7d40f4be207e2e79dc5a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7fdb3552722b7d40f4be207e2e79dc5a)): ?>
<?php $component = $__componentOriginal7fdb3552722b7d40f4be207e2e79dc5a; ?>
<?php unset($__componentOriginal7fdb3552722b7d40f4be207e2e79dc5a); ?>
<?php endif; ?>
            <!--[if BLOCK]><![endif]--><?php if($pakets->hasPages()): ?>
                <div class="p-3">
                    <?php echo e($pakets->links()); ?>

                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b805ec16449dd7a8a3ee49eb83c332a)): ?>
<?php $attributes = $__attributesOriginal2b805ec16449dd7a8a3ee49eb83c332a; ?>
<?php unset($__attributesOriginal2b805ec16449dd7a8a3ee49eb83c332a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b805ec16449dd7a8a3ee49eb83c332a)): ?>
<?php $component = $__componentOriginal2b805ec16449dd7a8a3ee49eb83c332a; ?>
<?php unset($__componentOriginal2b805ec16449dd7a8a3ee49eb83c332a); ?>
<?php endif; ?>
    <!-- Add Paket Profile Modal -->
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.pakets.modal.add-paket-modal', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-648208453-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.pakets.modal.delete-paket-modal', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-648208453-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

</section>
<?php /**PATH C:\xampp\htdocs\customer_management\resources\views/livewire/admin/pakets/paket-list.blade.php ENDPATH**/ ?>
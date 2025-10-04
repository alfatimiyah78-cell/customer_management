<section class="w-full">
    <?php echo $__env->make('partials.settings-heading', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php if (isset($component)) { $__componentOriginal2b805ec16449dd7a8a3ee49eb83c332a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b805ec16449dd7a8a3ee49eb83c332a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.paket.layout','data' => ['heading' => __('paket.profiles'),'subheading' => __('Profiles description')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.paket.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('paket.profiles')),'subheading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Profiles description'))]); ?>
        <div class="md:flex justify-between mb-2">
            <div class="md:flex justify-start gap-2">
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::select.index','data' => ['wire:model.change' => 'search_with_status','id' => 'search_with_status','class' => 'mt-1 mr-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.change' => 'search_with_status','id' => 'search_with_status','class' => 'mt-1 mr-1']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['wire:click' => '$dispatch(\'show-add-paket-profile-modal\')','style' => 'cursor: pointer;','variant' => 'primary','icon' => 'plus-circle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => '$dispatch(\'show-add-paket-profile-modal\')','style' => 'cursor: pointer;','variant' => 'primary','icon' => 'plus-circle']); ?>
                    <?php echo e(__('paket.button.add-profile')); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(trans('paket.table.no')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e(trans('mikrotik.table.name')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e(trans('paket.table.paket')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e(trans('paket.table.client')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e(trans('mikrotik.table.rate-limit')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e(trans('mikrotik.table.parent-queue')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e(trans('mikrotik.table.action')); ?> <?php echo $__env->renderComponent(); ?>
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
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $paketProfiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
<?php $component->withAttributes(['class' => 'text-center']); ?><?php echo e(($paketProfiles->currentpage() - 1) * $paketProfiles->perpage() + $loop->index + 1); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e($profile->profile_name); ?> <?php echo $__env->renderComponent(); ?>
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
                                <!--[if BLOCK]><![endif]--><?php $__empty_2 = true; $__currentLoopData = $profile->pakets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                    <?php if (isset($component)) { $__componentOriginal4cc377eda9b63b796b6668ee7832d023 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cc377eda9b63b796b6668ee7832d023 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::badge.index','data' => ['size' => 'sm','color' => 'blue']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','color' => 'blue']); ?> <?php echo e($paket->name); ?> -
                                        <?php echo e($paket->mikrotik->name); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4cc377eda9b63b796b6668ee7832d023)): ?>
<?php $attributes = $__attributesOriginal4cc377eda9b63b796b6668ee7832d023; ?>
<?php unset($__attributesOriginal4cc377eda9b63b796b6668ee7832d023); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4cc377eda9b63b796b6668ee7832d023)): ?>
<?php $component = $__componentOriginal4cc377eda9b63b796b6668ee7832d023; ?>
<?php unset($__componentOriginal4cc377eda9b63b796b6668ee7832d023); ?>
<?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                    <?php if (isset($component)) { $__componentOriginal4cc377eda9b63b796b6668ee7832d023 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cc377eda9b63b796b6668ee7832d023 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::badge.index','data' => ['size' => 'sm','color' => 'red']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','color' => 'red']); ?><?php echo e(trans('paket.not-used-in-paket')); ?>

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
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::badge.index','data' => ['size' => 'sm','color' => 'blue']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','color' => 'blue']); ?> <?php echo e($profile->customer_pakets->count()); ?>

                                    clients <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e($profile->rate_limit); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e($profile->parent_queue); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['title' => ''.e(trans('paket.button.edit')).'','size' => 'xs','variant' => 'primary','style' => 'cursor: pointer;','icon' => 'pencil','wire:click' => '$dispatch(\'show-add-paket-profile-modal\', {paketProfile: \''.e($profile->slug).'\'})']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(trans('paket.button.edit')).'','size' => 'xs','variant' => 'primary','style' => 'cursor: pointer;','icon' => 'pencil','wire:click' => '$dispatch(\'show-add-paket-profile-modal\', {paketProfile: \''.e($profile->slug).'\'})']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['title' => ''.e(trans('paket.button.delete')).'','size' => 'xs','variant' => 'danger','style' => 'cursor: pointer;','icon' => 'trash','wire:click' => '$dispatch(\'show-delete-paket-profile-modal\', {paketProfile: \''.e($profile->slug).'\'})']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(trans('paket.button.delete')).'','size' => 'xs','variant' => 'danger','style' => 'cursor: pointer;','icon' => 'trash','wire:click' => '$dispatch(\'show-delete-paket-profile-modal\', {paketProfile: \''.e($profile->slug).'\'})']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell','data' => ['colspan' => '9']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colspan' => '9']); ?>
                                <div class="flex justify-center items-center">
                                    <span class="font-medium py-8 text-gray-400 text-xl">
                                        <?php echo e(trans('paket.profile-not-found')); ?>

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
            <!--[if BLOCK]><![endif]--><?php if($paketProfiles->hasPages()): ?>
                <div class="p-3">
                    <?php echo e($paketProfiles->links()); ?>

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
[$__name, $__params] = $__split('admin.pakets.modal.add-paket-profile-modal', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3454522430-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <!-- Add Paket Profile Modal -->
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.pakets.modal.delete-paket-profile-modal', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3454522430-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
</section>
<?php /**PATH C:\xampp\htdocs\customer_management\resources\views/livewire/admin/pakets/profile-list.blade.php ENDPATH**/ ?>
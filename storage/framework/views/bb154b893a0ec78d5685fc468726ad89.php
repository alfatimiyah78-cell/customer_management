<section class="w-full">
    <?php echo $__env->make('partials.show-customer-heading', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php if (isset($component)) { $__componentOriginal6e89d115c9f3ae0ec1b8798fd4f8016f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6e89d115c9f3ae0ec1b8798fd4f8016f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.admin-customer.layout','data' => ['heading' => __('customer.billings'),'subheading' => __('customer.billings-description'),'user' => $user]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.admin-customer.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('customer.billings')),'subheading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('customer.billings-description')),'user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>

        <?php if (isset($component)) { $__componentOriginal7fdb3552722b7d40f4be207e2e79dc5a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7fdb3552722b7d40f4be207e2e79dc5a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.table','data' => ['class' => 'table-fixed']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'table-fixed']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header','data' => ['class' => 'w-2 px-4 py-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-2 px-4 py-2']); ?><?php echo e(trans('billing.table.no')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e(trans('billing.table.periode')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header','data' => ['class' => 'w-max']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-max']); ?><?php echo e(trans('billing.table.bill')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e(trans('billing.table.deadline')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e(trans('billing.table.status')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e(trans('billing.table.action')); ?> <?php echo $__env->renderComponent(); ?>
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
                <?php
                    $websystem = \App\Models\Websystem::first();
                ?>
                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $user->invoices->whereNull('paid_at')->sortByDesc('periode'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $billing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell','data' => ['align' => 'center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['align' => 'center']); ?><?php echo e($loop->index + 1); ?> <?php echo $__env->renderComponent(); ?>
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
                            <?php echo e(\Carbon\Carbon::parse($billing->periode)->format('M Y')); ?>

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
                            <?php if (isset($component)) { $__componentOriginal67715e151ce025d8249354c6d1f2e40f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal67715e151ce025d8249354c6d1f2e40f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.billings.bill-amount','data' => ['billing' => $billing]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('billings.bill-amount'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['billing' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($billing)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal67715e151ce025d8249354c6d1f2e40f)): ?>
<?php $attributes = $__attributesOriginal67715e151ce025d8249354c6d1f2e40f; ?>
<?php unset($__attributesOriginal67715e151ce025d8249354c6d1f2e40f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal67715e151ce025d8249354c6d1f2e40f)): ?>
<?php $component = $__componentOriginal67715e151ce025d8249354c6d1f2e40f; ?>
<?php unset($__componentOriginal67715e151ce025d8249354c6d1f2e40f); ?>
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
                            <?php if (isset($component)) { $__componentOriginalb78fbfcff0a98a0b6243be96f57c7208 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb78fbfcff0a98a0b6243be96f57c7208 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.billings.deadline-bill','data' => ['billing' => $billing]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('billings.deadline-bill'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['billing' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($billing)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb78fbfcff0a98a0b6243be96f57c7208)): ?>
<?php $attributes = $__attributesOriginalb78fbfcff0a98a0b6243be96f57c7208; ?>
<?php unset($__attributesOriginalb78fbfcff0a98a0b6243be96f57c7208); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb78fbfcff0a98a0b6243be96f57c7208)): ?>
<?php $component = $__componentOriginalb78fbfcff0a98a0b6243be96f57c7208; ?>
<?php unset($__componentOriginalb78fbfcff0a98a0b6243be96f57c7208); ?>
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
                            <?php if (isset($component)) { $__componentOriginal94e89a6ef8d34add78a1be6254d350e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal94e89a6ef8d34add78a1be6254d350e9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.billings.status-payment','data' => ['billing' => $billing]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('billings.status-payment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['billing' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($billing)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal94e89a6ef8d34add78a1be6254d350e9)): ?>
<?php $attributes = $__attributesOriginal94e89a6ef8d34add78a1be6254d350e9; ?>
<?php unset($__attributesOriginal94e89a6ef8d34add78a1be6254d350e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal94e89a6ef8d34add78a1be6254d350e9)): ?>
<?php $component = $__componentOriginal94e89a6ef8d34add78a1be6254d350e9; ?>
<?php unset($__componentOriginal94e89a6ef8d34add78a1be6254d350e9); ?>
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
                            <div class="flex justify-end">
                                <?php if (isset($component)) { $__componentOriginal02f7f790d403752d4678b1e66a369c12 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02f7f790d403752d4678b1e66a369c12 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.billings.bill-action','data' => ['billing' => $billing]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('billings.bill-action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['billing' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($billing)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal02f7f790d403752d4678b1e66a369c12)): ?>
<?php $attributes = $__attributesOriginal02f7f790d403752d4678b1e66a369c12; ?>
<?php unset($__attributesOriginal02f7f790d403752d4678b1e66a369c12); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal02f7f790d403752d4678b1e66a369c12)): ?>
<?php $component = $__componentOriginal02f7f790d403752d4678b1e66a369c12; ?>
<?php unset($__componentOriginal02f7f790d403752d4678b1e66a369c12); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell','data' => ['colspan' => '8','class' => 'hidden sm:table-cell']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colspan' => '8','class' => 'hidden sm:table-cell']); ?>
                            <div class="flex justify-center items-center">
                                <span class="font-medium py-8 text-gray-400 text-xl">
                                    <?php echo e(trans('billing.notfound')); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell','data' => ['colspan' => '6','class' => 'sm:hidden']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colspan' => '6','class' => 'sm:hidden']); ?>
                            <div class="flex justify-center items-center">
                                <span class="font-medium py-8 text-gray-400 text-xl">
                                    <?php echo e(trans('billing.notfound')); ?>

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
                <?php
                    $billingUnpayment = $user->invoices->whereNull('paid_at');
                ?>
                <!--[if BLOCK]><![endif]--><?php if(count($billingUnpayment)): ?>
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

                            <?php
                                $whatsappGatewayDisabled = \App\Models\WhatsappGateway\WhatsappGatewayGeneral::first()
                                    ->disabled;
                            ?>
                            <?php if (isset($component)) { $__componentOriginal331b6ba21e0e01280281656c233161e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal331b6ba21e0e01280281656c233161e3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.billings.total-bill-footer','data' => ['user' => $user,'whatsappGatewayDisabled' => $whatsappGatewayDisabled]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('billings.total-bill-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user),'whatsappGatewayDisabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($whatsappGatewayDisabled)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal331b6ba21e0e01280281656c233161e3)): ?>
<?php $attributes = $__attributesOriginal331b6ba21e0e01280281656c233161e3; ?>
<?php unset($__attributesOriginal331b6ba21e0e01280281656c233161e3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal331b6ba21e0e01280281656c233161e3)): ?>
<?php $component = $__componentOriginal331b6ba21e0e01280281656c233161e3; ?>
<?php unset($__componentOriginal331b6ba21e0e01280281656c233161e3); ?>
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

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.billings.modal.billing-payment', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3286090186-0', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('admin.billings.modal.add-discount', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3286090186-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6e89d115c9f3ae0ec1b8798fd4f8016f)): ?>
<?php $attributes = $__attributesOriginal6e89d115c9f3ae0ec1b8798fd4f8016f; ?>
<?php unset($__attributesOriginal6e89d115c9f3ae0ec1b8798fd4f8016f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6e89d115c9f3ae0ec1b8798fd4f8016f)): ?>
<?php $component = $__componentOriginal6e89d115c9f3ae0ec1b8798fd4f8016f; ?>
<?php unset($__componentOriginal6e89d115c9f3ae0ec1b8798fd4f8016f); ?>
<?php endif; ?>

</section>
<?php /**PATH C:\xampp\htdocs\customer_management\resources\views/livewire/admin/customers/show-billing-customer.blade.php ENDPATH**/ ?>
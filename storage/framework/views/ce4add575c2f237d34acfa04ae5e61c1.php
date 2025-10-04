<div class="w-full p-3">
    <!--Graph Card-->

    <div
        class="bg-white dark:bg-white/10 shadow-xs border border-zinc-200 border-b-zinc-300/80 dark:border-white/10 rounded text-zinc-800 dark:text-white">
        <div class="border-b border-zinc-200 border-b-zinc-300/80 dark:border-white/10 p-3">
            <div class="flex justify-between">
                <div class="flex justify-start">
                    <?php echo trans('roles.titles.roles-card'); ?>

                </div>
                <div class="flex justify-between">
                    <?php if (isset($component)) { $__componentOriginal4cc377eda9b63b796b6668ee7832d023 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cc377eda9b63b796b6668ee7832d023 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::badge.index','data' => ['size' => 'sm','variant' => 'pill','iconTrailing' => 'shield-exclamation']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','variant' => 'pill','icon-trailing' => 'shield-exclamation']); ?>
                        <?php echo trans_choice('roles.cards.roles-count', count($items), [
                        'count' => count($items),
                        ]); ?>

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
            </div>
        </div>
        <div class="p-3">
            <ul class="list-group list-group-flush">
                <!--[if BLOCK]><![endif]--><?php if(count($items) != 0): ?>
                <div
                    class="w-full bg-white dark:bg-white/10 shadow-xs border border-zinc-200 border-b-zinc-300/80 dark:border-white/10 rounded text-zinc-800 dark:text-white">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemKey => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <?php if (isset($component)) { $__componentOriginal8d877216a0f89998cfdaa304dd2dd6a3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8d877216a0f89998cfdaa304dd2dd6a3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.accordin','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('accordin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <div class="flex justify-start">
                                <strong class="text-blue-500 dark:text-gray-300"><?php echo e($item['role']->name); ?></strong>
                            </div>
                            <div class="justify-between hidden md:flex">
                                <?php if (isset($component)) { $__componentOriginal4cc377eda9b63b796b6668ee7832d023 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cc377eda9b63b796b6668ee7832d023 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::badge.index','data' => ['class' => 'me-2','iconTrailing' => 'user-circle','size' => 'sm','variant' => 'pill']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'me-2','icon-trailing' => 'user-circle','size' => 'sm','variant' => 'pill']); ?>
                                    <?php echo trans_choice('roles.cards.users-count', count($item['users']), ['count' =>
                                    count($item['users'])]); ?>

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

                                <?php if (isset($component)) { $__componentOriginal4cc377eda9b63b796b6668ee7832d023 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cc377eda9b63b796b6668ee7832d023 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::badge.index','data' => ['size' => 'sm','variant' => 'pill','iconTrailing' => 'shield-exclamation']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','variant' => 'pill','icon-trailing' => 'shield-exclamation']); ?>
                                    <?php echo trans_choice('roles.cards.permissions-count', count($item['permissions']), [
                                    'count' => count($item['permissions']),
                                    ]); ?>

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

                             <?php $__env->slot('content', null, []); ?> 
                                <div
                                    class="w-full divide-y divide-neutral-300 overflow-hidden rounded-md border border-neutral-300 bg-neutral-50/40 dark:divide-neutral-700 dark:border-neutral-700 dark:bg-neutral-900/50 text-zinc-800 dark:text-white">
                                    <?php if (isset($component)) { $__componentOriginal8d877216a0f89998cfdaa304dd2dd6a3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8d877216a0f89998cfdaa304dd2dd6a3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.accordin','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('accordin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <div class="text-xs">
                                            <?php echo trans('roles.cards.role-card.table-users-caption', ['role' =>
                                            $item['role']->name]); ?>

                                        </div>
                                         <?php $__env->slot('content', null, []); ?> 
                                            <?php if (isset($component)) { $__componentOriginal7fdb3552722b7d40f4be207e2e79dc5a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7fdb3552722b7d40f4be207e2e79dc5a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.table','data' => ['class' => 'table-auto text-xs']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'table-auto text-xs']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header','data' => ['class' => 'w-px']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-px']); ?><?php echo trans('roles.cards.role-card.user-id'); ?>

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
<?php $component->withAttributes([]); ?><?php echo trans('roles.cards.role-card.user-fullname'); ?>

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
<?php $component->withAttributes([]); ?><?php echo trans('roles.cards.role-card.user-email'); ?> <?php echo $__env->renderComponent(); ?>
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
                                                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $item['users']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemUserKey => $itemUser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
                                                            <?php echo e($itemUser->id); ?>

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
                                                            <?php echo e($itemUser->full_name); ?>

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
                                                            <?php echo e($itemUser->email); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell','data' => ['colspan' => '3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colspan' => '3']); ?>
                                                            <div class="flex justify-center items-center">
                                                                <span
                                                                    class="font-medium py-8 text-zinc-800 dark:text-white text-xl">
                                                                    <?php echo e(trans('roles.user-notfound')); ?>

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
                                         <?php $__env->endSlot(); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8d877216a0f89998cfdaa304dd2dd6a3)): ?>
<?php $attributes = $__attributesOriginal8d877216a0f89998cfdaa304dd2dd6a3; ?>
<?php unset($__attributesOriginal8d877216a0f89998cfdaa304dd2dd6a3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8d877216a0f89998cfdaa304dd2dd6a3)): ?>
<?php $component = $__componentOriginal8d877216a0f89998cfdaa304dd2dd6a3; ?>
<?php unset($__componentOriginal8d877216a0f89998cfdaa304dd2dd6a3); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginal8d877216a0f89998cfdaa304dd2dd6a3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8d877216a0f89998cfdaa304dd2dd6a3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.accordin','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('accordin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <div class="text-xs">
                                            <?php echo trans('roles.cards.role-card.table-permissions-caption', [
                                            'role' => $item['role']->name,
                                            ]); ?>

                                        </div>
                                         <?php $__env->slot('content', null, []); ?> 
                                            <?php if (isset($component)) { $__componentOriginal7fdb3552722b7d40f4be207e2e79dc5a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7fdb3552722b7d40f4be207e2e79dc5a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.table','data' => ['class' => 'table-auto text-xs']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'table-auto text-xs']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header','data' => ['class' => 'w-px']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-px']); ?><?php echo trans('roles.cards.role-card.permissions-id'); ?>

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
<?php $component->withAttributes([]); ?><?php echo trans('roles.cards.role-card.permissions-name'); ?>

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
                                                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $item['permissions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemUserKey => $itemUser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
<?php $component->withAttributes(['class' => 'text-center']); ?><?php echo e($itemUser->id); ?>

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
<?php $component->withAttributes([]); ?><?php echo e($itemUser->name); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell','data' => ['colspan' => '2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colspan' => '2']); ?>
                                                            <div class="flex justify-center items-center">
                                                                <span
                                                                    class="font-medium py-8 text-zinc-800 dark:text-white text-xl">
                                                                    <?php echo e(trans('roles.user-notfound')); ?>

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
                                         <?php $__env->endSlot(); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8d877216a0f89998cfdaa304dd2dd6a3)): ?>
<?php $attributes = $__attributesOriginal8d877216a0f89998cfdaa304dd2dd6a3; ?>
<?php unset($__attributesOriginal8d877216a0f89998cfdaa304dd2dd6a3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8d877216a0f89998cfdaa304dd2dd6a3)): ?>
<?php $component = $__componentOriginal8d877216a0f89998cfdaa304dd2dd6a3; ?>
<?php unset($__componentOriginal8d877216a0f89998cfdaa304dd2dd6a3); ?>
<?php endif; ?>
                                </div>


                             <?php $__env->endSlot(); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8d877216a0f89998cfdaa304dd2dd6a3)): ?>
<?php $attributes = $__attributesOriginal8d877216a0f89998cfdaa304dd2dd6a3; ?>
<?php unset($__attributesOriginal8d877216a0f89998cfdaa304dd2dd6a3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8d877216a0f89998cfdaa304dd2dd6a3)): ?>
<?php $component = $__componentOriginal8d877216a0f89998cfdaa304dd2dd6a3; ?>
<?php unset($__componentOriginal8d877216a0f89998cfdaa304dd2dd6a3); ?>
<?php endif; ?>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <?php else: ?>
                <li class="list-group-item">
                    <?php echo trans('roles.cards.none-count'); ?>

                </li>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </ul>

        </div>
    </div>
    <!--/Graph Card-->
</div>
<?php /**PATH C:\xampp\htdocs\customer_management\resources\views/livewire/admin/roles/cards/roles-card.blade.php ENDPATH**/ ?>
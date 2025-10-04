<?php if (\Illuminate\Support\Facades\Blade::check('role', 'admin')): ?>
    <?php if (isset($component)) { $__componentOriginald33a3439ec8f8da64b388b23a8637b39 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald33a3439ec8f8da64b388b23a8637b39 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navbar.index','data' => ['class' => '-mb-px max-lg:hidden']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '-mb-px max-lg:hidden']); ?>
        <?php if (isset($component)) { $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navbar.item','data' => ['icon' => 'layout-grid','href' => route('dashboard'),'current' => request()->routeIs('dashboard'),'wire:navigate' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navbar.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'layout-grid','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('dashboard')),'current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('dashboard')),'wire:navigate' => true]); ?>
            <?php echo e(trans('menu.dashboard')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $attributes = $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $component = $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::dropdown','data' => ['class' => 'max-lg:hidden']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'max-lg:hidden']); ?>
            <?php if (isset($component)) { $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navbar.item','data' => ['icon' => 'users','iconTrailing' => 'chevron-down','current' => request()->routeIs('customers.*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navbar.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'users','icon-trailing' => 'chevron-down','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('customers.*'))]); ?>
                <?php echo e(trans('menu.customers')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $attributes = $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $component = $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal0acbef9d8e9b45c80d953734a49636ad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0acbef9d8e9b45c80d953734a49636ad = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navmenu.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navmenu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navmenu.item','data' => ['icon' => 'users','href' => route('customers.management'),'current' => request()->routeIs('customers.management'),'wire:navigate' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navmenu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'users','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('customers.management')),'current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('customers.management')),'wire:navigate' => true]); ?>
                    <?php echo e(trans('menu.customers')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $attributes = $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $component = $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navmenu.item','data' => ['icon' => 'users','href' => route('customers.paket.management'),'current' => request()->routeIs('customers.paket.management'),'wire:navigate' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navmenu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'users','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('customers.paket.management')),'current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('customers.paket.management')),'wire:navigate' => true]); ?>
                    <?php echo e(trans('menu.customers-paket')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $attributes = $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $component = $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0acbef9d8e9b45c80d953734a49636ad)): ?>
<?php $attributes = $__attributesOriginal0acbef9d8e9b45c80d953734a49636ad; ?>
<?php unset($__attributesOriginal0acbef9d8e9b45c80d953734a49636ad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0acbef9d8e9b45c80d953734a49636ad)): ?>
<?php $component = $__componentOriginal0acbef9d8e9b45c80d953734a49636ad; ?>
<?php unset($__componentOriginal0acbef9d8e9b45c80d953734a49636ad); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888)): ?>
<?php $attributes = $__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888; ?>
<?php unset($__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888)): ?>
<?php $component = $__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888; ?>
<?php unset($__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888); ?>
<?php endif; ?>


        <?php if (isset($component)) { $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navbar.item','data' => ['icon' => 'currency-dollar','href' => route('billings.management'),'current' => request()->routeIs('billings.management'),'wire:navigate' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navbar.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'currency-dollar','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('billings.management')),'current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('billings.management')),'wire:navigate' => true]); ?>
            <?php echo e(trans('menu.billings')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $attributes = $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $component = $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navbar.item','data' => ['icon' => 'layout-grid','href' => route('pakets.management'),'current' => request()->routeIs('pakets.management'),'wire:navigate' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navbar.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'layout-grid','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('pakets.management')),'current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('pakets.management')),'wire:navigate' => true]); ?>
            <?php echo e(trans('menu.pakets')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $attributes = $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $component = $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalc481942d30cc0ab06077963cf20a45e8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc481942d30cc0ab06077963cf20a45e8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::separator','data' => ['vertical' => true,'variant' => 'subtle','class' => 'my-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::separator'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['vertical' => true,'variant' => 'subtle','class' => 'my-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc481942d30cc0ab06077963cf20a45e8)): ?>
<?php $attributes = $__attributesOriginalc481942d30cc0ab06077963cf20a45e8; ?>
<?php unset($__attributesOriginalc481942d30cc0ab06077963cf20a45e8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc481942d30cc0ab06077963cf20a45e8)): ?>
<?php $component = $__componentOriginalc481942d30cc0ab06077963cf20a45e8; ?>
<?php unset($__componentOriginalc481942d30cc0ab06077963cf20a45e8); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::dropdown','data' => ['class' => 'max-lg:hidden']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'max-lg:hidden']); ?>
            <?php if (isset($component)) { $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navbar.item','data' => ['icon' => 'cog','iconTrailing' => 'chevron-down','current' => request()->routeIs('managements.*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navbar.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'cog','icon-trailing' => 'chevron-down','current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('managements.*'))]); ?>
                <?php echo e(trans('menu.settings')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $attributes = $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $component = $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal0acbef9d8e9b45c80d953734a49636ad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0acbef9d8e9b45c80d953734a49636ad = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navmenu.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navmenu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navmenu.item','data' => ['icon' => 'wifi','href' => route('managements.hotspots'),'current' => request()->routeIs('managements.hotspot*'),'wire:navigate' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navmenu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'wifi','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('managements.hotspots')),'current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('managements.hotspot*')),'wire:navigate' => true]); ?>
                    <?php echo e(trans('menu.hotspots')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $attributes = $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $component = $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navmenu.item','data' => ['icon' => 'wa','href' => route('managements.whatsapp_gateway'),'current' => request()->routeIs('managements.whatsapp_gateway'),'wire:navigate' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navmenu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'wa','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('managements.whatsapp_gateway')),'current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('managements.whatsapp_gateway')),'wire:navigate' => true]); ?>
                    <?php echo e(trans('menu.whatsapp-gateway')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $attributes = $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $component = $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navmenu.item','data' => ['icon' => 'cog','href' => route('managements.websystem'),'current' => request()->routeIs('managements.websystem'),'wire:navigate' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navmenu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'cog','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('managements.websystem')),'current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('managements.websystem')),'wire:navigate' => true]); ?>
                    <?php echo e(trans('menu.general')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $attributes = $__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__attributesOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf)): ?>
<?php $component = $__componentOriginal6498d2c45a9cd193b85bf4c51011baaf; ?>
<?php unset($__componentOriginal6498d2c45a9cd193b85bf4c51011baaf); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0acbef9d8e9b45c80d953734a49636ad)): ?>
<?php $attributes = $__attributesOriginal0acbef9d8e9b45c80d953734a49636ad; ?>
<?php unset($__attributesOriginal0acbef9d8e9b45c80d953734a49636ad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0acbef9d8e9b45c80d953734a49636ad)): ?>
<?php $component = $__componentOriginal0acbef9d8e9b45c80d953734a49636ad; ?>
<?php unset($__componentOriginal0acbef9d8e9b45c80d953734a49636ad); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888)): ?>
<?php $attributes = $__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888; ?>
<?php unset($__attributesOriginal2b4bb2cd4b8f1a3c08bae49ea918b888); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888)): ?>
<?php $component = $__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888; ?>
<?php unset($__componentOriginal2b4bb2cd4b8f1a3c08bae49ea918b888); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald33a3439ec8f8da64b388b23a8637b39)): ?>
<?php $attributes = $__attributesOriginald33a3439ec8f8da64b388b23a8637b39; ?>
<?php unset($__attributesOriginald33a3439ec8f8da64b388b23a8637b39); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald33a3439ec8f8da64b388b23a8637b39)): ?>
<?php $component = $__componentOriginald33a3439ec8f8da64b388b23a8637b39; ?>
<?php unset($__componentOriginald33a3439ec8f8da64b388b23a8637b39); ?>
<?php endif; ?>
<?php else: ?>
    <?php if (isset($component)) { $__componentOriginald33a3439ec8f8da64b388b23a8637b39 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald33a3439ec8f8da64b388b23a8637b39 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navbar.index','data' => ['class' => '-mb-px max-lg:hidden']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '-mb-px max-lg:hidden']); ?>
        <?php if (isset($component)) { $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navbar.item','data' => ['icon' => 'home','href' => route('customer.dashboard'),'current' => request()->routeIs('customer.dashboard'),'wire:navigate' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navbar.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'home','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('customer.dashboard')),'current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('customer.dashboard')),'wire:navigate' => true]); ?>
            <?php echo e(trans('menu.customer.home')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $attributes = $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $component = $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navbar.item','data' => ['href' => route('customer.subscriptionmanagement'),'current' => request()->routeIs('customer.subscriptionmanagement'),'wire:navigate' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navbar.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('customer.subscriptionmanagement')),'current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('customer.subscriptionmanagement')),'wire:navigate' => true]); ?>
            <?php echo e(trans('menu.customer.subscription')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $attributes = $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $component = $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::navbar.item','data' => ['href' => route('customer.paymentmanagement'),'current' => request()->routeIs('customer.paymentmanagement'),'wire:navigate' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::navbar.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('customer.paymentmanagement')),'current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('customer.paymentmanagement')),'wire:navigate' => true]); ?>
            <?php echo e(trans('menu.customer.bill')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $attributes = $__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__attributesOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48)): ?>
<?php $component = $__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48; ?>
<?php unset($__componentOriginalc4cbba45ed073bedf6d5fbbd59b58e48); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald33a3439ec8f8da64b388b23a8637b39)): ?>
<?php $attributes = $__attributesOriginald33a3439ec8f8da64b388b23a8637b39; ?>
<?php unset($__attributesOriginald33a3439ec8f8da64b388b23a8637b39); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald33a3439ec8f8da64b388b23a8637b39)): ?>
<?php $component = $__componentOriginald33a3439ec8f8da64b388b23a8637b39; ?>
<?php unset($__componentOriginald33a3439ec8f8da64b388b23a8637b39); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\customer_management\resources\views/partials/navbar.blade.php ENDPATH**/ ?>
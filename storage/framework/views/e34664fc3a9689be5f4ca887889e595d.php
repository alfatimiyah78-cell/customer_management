<div class="flex gap-2 flex-col">
    <?php
       $whatsappGatewayDisabled = \App\Models\WhatsappGateway\WhatsappGatewayGeneral::first()->disabled;
        $billingUnpayments = $billings->where('status', '!=', 'paid');
    ?>
    <div class="sm:flex justify-between pt-1 pb-1">
        <div class="justify-start pt-1 pb-1 dark:text-gray-200 text-gray-600 text-xs sm:text-sm">
            <div>
                <?php echo trans('billing.periode'); ?>

                <span class="font-bold ms-1">
                    <!--[if BLOCK]><![endif]--><?php if($search_with_month == 'all-month'): ?>
                        All Month
                    <?php else: ?>
                        <?php echo e(\Carbon\Carbon::create()->month((int) $search_with_month)->format('F')); ?>

                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </span>
                <span class="font-bold ms-1">
                    <!--[if BLOCK]><![endif]--><?php if($search_with_year == 'all-year'): ?>
                        All Year
                    <?php else: ?>
                        <?php echo e(\Carbon\Carbon::create()->year((int) $search_with_year)->format('Y')); ?>

                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </span>
            </div>

        </div>
        <div class="justify-end">
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
                <!--[if BLOCK]><![endif]--><?php if(count($billingUnpayments)): ?>
                    <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'sm','wire:click' => '$dispatch(\'show-create-invoices-modal\')','style' => 'cursor: pointer;','variant' => 'primary','iconTrailing' => 'printer']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','wire:click' => '$dispatch(\'show-create-invoices-modal\')','style' => 'cursor: pointer;','variant' => 'primary','iconTrailing' => 'printer']); ?>
                        <?php echo trans('billing.button.invoice'); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'sm','wire:click' => '$dispatch(\'export-billing-modal\')','style' => 'cursor: pointer;','variant' => 'primary','iconTrailing' => 'printer','disabled' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','wire:click' => '$dispatch(\'export-billing-modal\')','style' => 'cursor: pointer;','variant' => 'primary','iconTrailing' => 'printer','disabled' => true]); ?>
                        <?php echo trans('billing.button.billing'); ?>

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
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'sm','wire:click' => '$dispatch(\'create-new-billings-modal\')','style' => 'cursor: pointer;','variant' => 'primary','icon' => 'plus-circle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','wire:click' => '$dispatch(\'create-new-billings-modal\')','style' => 'cursor: pointer;','variant' => 'primary','icon' => 'plus-circle']); ?>
                    <?php echo trans('billing.button.create'); ?>

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

                <!--[if BLOCK]><![endif]--><?php if(!$whatsappGatewayDisabled): ?>
                    <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'sm','wire:click' => '$dispatch(\'send-notification-modal\')','style' => 'cursor: pointer;','variant' => 'success','icon' => 'wa']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','wire:click' => '$dispatch(\'send-notification-modal\')','style' => 'cursor: pointer;','variant' => 'success','icon' => 'wa']); ?>
                        <?php echo e(__('billing.button.send-notification')); ?>

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
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
    </div>

    <div class="flex gap-2 flex-col md:flex-row">
        <?php if (isset($component)) { $__componentOriginal26c546557cdc09040c8dd00b2090afd0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26c546557cdc09040c8dd00b2090afd0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::input.index','data' => ['wire:model.live.debounce.500ms' => 'search_name','type' => 'text','placeholder' => ''.e(trans('billing.ph.search-with-name')).'','clearable' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live.debounce.500ms' => 'search_name','type' => 'text','placeholder' => ''.e(trans('billing.ph.search-with-name')).'','clearable' => true]); ?>
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
        <?php if (isset($component)) { $__componentOriginal26c546557cdc09040c8dd00b2090afd0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26c546557cdc09040c8dd00b2090afd0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::input.index','data' => ['wire:model.live.debounce.500ms' => 'search_address','type' => 'text','placeholder' => ''.e(trans('billing.ph.search-with-address')).'','clearable' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live.debounce.500ms' => 'search_address','type' => 'text','placeholder' => ''.e(trans('billing.ph.search-with-address')).'','clearable' => true]); ?>
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

        <?php if (isset($component)) { $__componentOriginala467913f9ff34913553be64599ec6e92 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala467913f9ff34913553be64599ec6e92 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::select.index','data' => ['wire:model.change' => 'search_with_status']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.change' => 'search_with_status']); ?>
            <?php if (isset($component)) { $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::select.option.index','data' => ['value' => 'pending']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::select.option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => 'pending']); ?><?php echo e(trans('billing.status.unpayment')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $attributes = $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $component = $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::select.option.index','data' => ['value' => 'paylater']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::select.option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => 'paylater']); ?><?php echo e(trans('billing.status.pay-later')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $attributes = $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $component = $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::select.option.index','data' => ['value' => 'overdue']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::select.option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => 'overdue']); ?><?php echo e(trans('billing.status.overdue')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $attributes = $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $component = $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::select.option.index','data' => ['value' => 'partially_paid']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::select.option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => 'partially_paid']); ?><?php echo e(trans('billing.status.partial-paid')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $attributes = $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $component = $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::select.option.index','data' => ['value' => 'paid']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::select.option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => 'paid']); ?><?php echo e(trans('billing.status.payment')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $attributes = $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $component = $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::select.option.index','data' => ['value' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::select.option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '']); ?><?php echo e(trans('billing.ph.all')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $attributes = $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $component = $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala467913f9ff34913553be64599ec6e92)): ?>
<?php $attributes = $__attributesOriginala467913f9ff34913553be64599ec6e92; ?>
<?php unset($__attributesOriginala467913f9ff34913553be64599ec6e92); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala467913f9ff34913553be64599ec6e92)): ?>
<?php $component = $__componentOriginala467913f9ff34913553be64599ec6e92; ?>
<?php unset($__componentOriginala467913f9ff34913553be64599ec6e92); ?>
<?php endif; ?>

        <!--[if BLOCK]><![endif]--><?php if($search_with_status === 'paylater' || $search_with_status === 'partially_paid' || $search_with_status === 'paid'): ?>
        <?php if (isset($component)) { $__componentOriginala467913f9ff34913553be64599ec6e92 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala467913f9ff34913553be64599ec6e92 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::select.index','data' => ['wire:model.change' => 'search_with_teller']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.change' => 'search_with_teller']); ?>
            <?php if (isset($component)) { $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::select.option.index','data' => ['value' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::select.option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '']); ?><?php echo e(trans('billing.ph.search-teller')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $attributes = $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $component = $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::select.option.index','data' => ['value' => ''.e($payment->teller).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::select.option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($payment->teller).'']); ?>
                    <?php echo e($payment->teller); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $attributes = $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $component = $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala467913f9ff34913553be64599ec6e92)): ?>
<?php $attributes = $__attributesOriginala467913f9ff34913553be64599ec6e92; ?>
<?php unset($__attributesOriginala467913f9ff34913553be64599ec6e92); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala467913f9ff34913553be64599ec6e92)): ?>
<?php $component = $__componentOriginala467913f9ff34913553be64599ec6e92; ?>
<?php unset($__componentOriginala467913f9ff34913553be64599ec6e92); ?>
<?php endif; ?>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


        <?php if (isset($component)) { $__componentOriginala467913f9ff34913553be64599ec6e92 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala467913f9ff34913553be64599ec6e92 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::select.index','data' => ['wire:model.change' => 'search_with_year']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.change' => 'search_with_year']); ?>
            <?php if (isset($component)) { $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::select.option.index','data' => ['value' => 'all-year']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::select.option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => 'all-year']); ?><?php echo e(__('billing.ph.all-year')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $attributes = $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $component = $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::select.option.index','data' => ['value' => ''.e($year->year).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::select.option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($year->year).'']); ?>
                    <?php echo e($year->year); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $attributes = $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $component = $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala467913f9ff34913553be64599ec6e92)): ?>
<?php $attributes = $__attributesOriginala467913f9ff34913553be64599ec6e92; ?>
<?php unset($__attributesOriginala467913f9ff34913553be64599ec6e92); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala467913f9ff34913553be64599ec6e92)): ?>
<?php $component = $__componentOriginala467913f9ff34913553be64599ec6e92; ?>
<?php unset($__componentOriginala467913f9ff34913553be64599ec6e92); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginala467913f9ff34913553be64599ec6e92 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala467913f9ff34913553be64599ec6e92 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::select.index','data' => ['wire:model.change' => 'search_with_month','name' => 'search_with_month']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.change' => 'search_with_month','name' => 'search_with_month']); ?>
            <?php if (isset($component)) { $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::select.option.index','data' => ['value' => 'all-month']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::select.option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => 'all-month']); ?><?php echo e(__('billing.ph.all-month')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $attributes = $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $component = $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = array_reverse(\Carbon\CarbonPeriod::create(now()->addMonth(), '1 month', now()->addMonths(12))->toArray()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::select.option.index','data' => ['value' => ''.e($date->format('m')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::select.option'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($date->format('m')).'']); ?>
                    <?php echo e($date->format('F')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $attributes = $__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__attributesOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745)): ?>
<?php $component = $__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745; ?>
<?php unset($__componentOriginalc7395a5f1f6c2e275d1dc4ea0be0c745); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala467913f9ff34913553be64599ec6e92)): ?>
<?php $attributes = $__attributesOriginala467913f9ff34913553be64599ec6e92; ?>
<?php unset($__attributesOriginala467913f9ff34913553be64599ec6e92); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala467913f9ff34913553be64599ec6e92)): ?>
<?php $component = $__componentOriginala467913f9ff34913553be64599ec6e92; ?>
<?php unset($__componentOriginala467913f9ff34913553be64599ec6e92); ?>
<?php endif; ?>
    </div>

    <div class="flex flex-col md:flex-row gap-2 mt-2">
        <!--[if BLOCK]><![endif]--><?php if($search_with_status != 'paid'): ?>
            <?php if (isset($component)) { $__componentOriginal71c1d735a08e0e10633b9680f9f963ee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal71c1d735a08e0e10633b9680f9f963ee = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-date-range','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-date-range'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('start_date', null, ['wire:model' => 'startDateDeadline']); ?>  <?php $__env->endSlot(); ?>
                 <?php $__env->slot('end_date', null, ['wire:model' => 'endDateDeadline']); ?>  <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal71c1d735a08e0e10633b9680f9f963ee)): ?>
<?php $attributes = $__attributesOriginal71c1d735a08e0e10633b9680f9f963ee; ?>
<?php unset($__attributesOriginal71c1d735a08e0e10633b9680f9f963ee); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c1d735a08e0e10633b9680f9f963ee)): ?>
<?php $component = $__componentOriginal71c1d735a08e0e10633b9680f9f963ee; ?>
<?php unset($__componentOriginal71c1d735a08e0e10633b9680f9f963ee); ?>
<?php endif; ?>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'sm','wire:click' => 'clearSearch','title' => ''.e(__('Reset')).'','style' => 'cursor: pointer;','variant' => 'primary','iconTrailing' => 'x-circle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','wire:click' => 'clearSearch','title' => ''.e(__('Reset')).'','style' => 'cursor: pointer;','variant' => 'primary','iconTrailing' => 'x-circle']); ?><?php echo e(__('Reset')); ?>

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
        <?php if (isset($component)) { $__componentOriginal1db8c57e729d67f7d4103875cf3230cb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1db8c57e729d67f7d4103875cf3230cb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::modal.trigger','data' => ['name' => 'advance-search']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::modal.trigger'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'advance-search']); ?>
            <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['iconTrailing' => 'magnifying-glass-circle','size' => 'sm','variant' => 'primary','disabled' => true,'style' => 'cursor: pointer;']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['iconTrailing' => 'magnifying-glass-circle','size' => 'sm','variant' => 'primary','disabled' => true,'style' => 'cursor: pointer;']); ?>
                <?php echo e(__('Advance Search')); ?>

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
<?php if (isset($__attributesOriginal1db8c57e729d67f7d4103875cf3230cb)): ?>
<?php $attributes = $__attributesOriginal1db8c57e729d67f7d4103875cf3230cb; ?>
<?php unset($__attributesOriginal1db8c57e729d67f7d4103875cf3230cb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1db8c57e729d67f7d4103875cf3230cb)): ?>
<?php $component = $__componentOriginal1db8c57e729d67f7d4103875cf3230cb; ?>
<?php unset($__componentOriginal1db8c57e729d67f7d4103875cf3230cb); ?>
<?php endif; ?>
    </div>

    <div wire:loading.class="opacity-75">
        <?php if (isset($component)) { $__componentOriginal3969065b33d8f849854f52e7f2dcea0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3969065b33d8f849854f52e7f2dcea0a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::checkbox.group.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::checkbox.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header','data' => ['class' => 'w-2 text-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-2 text-center']); ?><?php echo e(trans('billing.table.no')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header','data' => ['class' => 'w-max','sortable' => true,'wire:click.prevent' => 'sortBy(\'full_name\')','direction' => $sortField === 'full_name' ? $sortDirection : null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-max','sortable' => true,'wire:click.prevent' => 'sortBy(\'full_name\')','direction' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sortField === 'full_name' ? $sortDirection : null)]); ?><?php echo e(trans('billing.table.customer-name')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header','data' => ['class' => 'w-max text-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-max text-center']); ?><?php echo e(trans('billing.table.bill')); ?> <?php echo $__env->renderComponent(); ?>
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
                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
<?php $component->withAttributes(['class' => 'text-center']); ?><?php echo e(($users->currentpage() - 1) * $users->perpage() + $loop->index + 1); ?> <?php echo $__env->renderComponent(); ?>
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
                            <div class="flex gap-2">
                            <?php if (isset($component)) { $__componentOriginal2e57535a42d25d5415c31aa83132341b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e57535a42d25d5415c31aa83132341b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.eye','data' => ['variant' => 'solid','class' => 'text-sky-500 dark:text-sky-300 size-4','style' => 'cursor: pointer;','wire:navigate' => true,'href' => ''.e(route('customer.show', $user->username)).'','title' => ''.e(trans('customer.button.show-customer')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::icon.eye'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'solid','class' => 'text-sky-500 dark:text-sky-300 size-4','style' => 'cursor: pointer;','wire:navigate' => true,'href' => ''.e(route('customer.show', $user->username)).'','title' => ''.e(trans('customer.button.show-customer')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e57535a42d25d5415c31aa83132341b)): ?>
<?php $attributes = $__attributesOriginal2e57535a42d25d5415c31aa83132341b; ?>
<?php unset($__attributesOriginal2e57535a42d25d5415c31aa83132341b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e57535a42d25d5415c31aa83132341b)): ?>
<?php $component = $__componentOriginal2e57535a42d25d5415c31aa83132341b; ?>
<?php unset($__componentOriginal2e57535a42d25d5415c31aa83132341b); ?>
<?php endif; ?>
                                <?php echo e($user->full_name); ?>

                            </div>
                            <div class="text-xs">
                                <?php echo e($user->user_address->address); ?>

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

                            <?php if (isset($component)) { $__componentOriginal45f1d42cdced705b696f6db11ccf5ffd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal45f1d42cdced705b696f6db11ccf5ffd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.table-1','data' => ['class' => 'table-fixed']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.table-1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'table-fixed']); ?>
                                 <?php $__env->slot('header', null, []); ?> 
                                    <?php if (isset($component)) { $__componentOriginal5d26745f4e847988fcf32bc3780bf442 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5d26745f4e847988fcf32bc3780bf442 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header-table-1','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header-table-1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        #
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5d26745f4e847988fcf32bc3780bf442)): ?>
<?php $attributes = $__attributesOriginal5d26745f4e847988fcf32bc3780bf442; ?>
<?php unset($__attributesOriginal5d26745f4e847988fcf32bc3780bf442); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5d26745f4e847988fcf32bc3780bf442)): ?>
<?php $component = $__componentOriginal5d26745f4e847988fcf32bc3780bf442; ?>
<?php unset($__componentOriginal5d26745f4e847988fcf32bc3780bf442); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal5d26745f4e847988fcf32bc3780bf442 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5d26745f4e847988fcf32bc3780bf442 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header-table-1','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header-table-1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <?php echo e(trans('billing.table.customer-paket')); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5d26745f4e847988fcf32bc3780bf442)): ?>
<?php $attributes = $__attributesOriginal5d26745f4e847988fcf32bc3780bf442; ?>
<?php unset($__attributesOriginal5d26745f4e847988fcf32bc3780bf442); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5d26745f4e847988fcf32bc3780bf442)): ?>
<?php $component = $__componentOriginal5d26745f4e847988fcf32bc3780bf442; ?>
<?php unset($__componentOriginal5d26745f4e847988fcf32bc3780bf442); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal5d26745f4e847988fcf32bc3780bf442 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5d26745f4e847988fcf32bc3780bf442 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header-table-1','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header-table-1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <?php echo e(trans('billing.table.periode')); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5d26745f4e847988fcf32bc3780bf442)): ?>
<?php $attributes = $__attributesOriginal5d26745f4e847988fcf32bc3780bf442; ?>
<?php unset($__attributesOriginal5d26745f4e847988fcf32bc3780bf442); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5d26745f4e847988fcf32bc3780bf442)): ?>
<?php $component = $__componentOriginal5d26745f4e847988fcf32bc3780bf442; ?>
<?php unset($__componentOriginal5d26745f4e847988fcf32bc3780bf442); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal5d26745f4e847988fcf32bc3780bf442 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5d26745f4e847988fcf32bc3780bf442 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header-table-1','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header-table-1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <?php echo e(trans('billing.table.bill')); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5d26745f4e847988fcf32bc3780bf442)): ?>
<?php $attributes = $__attributesOriginal5d26745f4e847988fcf32bc3780bf442; ?>
<?php unset($__attributesOriginal5d26745f4e847988fcf32bc3780bf442); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5d26745f4e847988fcf32bc3780bf442)): ?>
<?php $component = $__componentOriginal5d26745f4e847988fcf32bc3780bf442; ?>
<?php unset($__componentOriginal5d26745f4e847988fcf32bc3780bf442); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal5d26745f4e847988fcf32bc3780bf442 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5d26745f4e847988fcf32bc3780bf442 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header-table-1','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header-table-1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <?php echo e(trans('billing.table.deadline')); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5d26745f4e847988fcf32bc3780bf442)): ?>
<?php $attributes = $__attributesOriginal5d26745f4e847988fcf32bc3780bf442; ?>
<?php unset($__attributesOriginal5d26745f4e847988fcf32bc3780bf442); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5d26745f4e847988fcf32bc3780bf442)): ?>
<?php $component = $__componentOriginal5d26745f4e847988fcf32bc3780bf442; ?>
<?php unset($__componentOriginal5d26745f4e847988fcf32bc3780bf442); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal5d26745f4e847988fcf32bc3780bf442 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5d26745f4e847988fcf32bc3780bf442 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header-table-1','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header-table-1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <?php echo e(trans('billing.table.payment-time')); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5d26745f4e847988fcf32bc3780bf442)): ?>
<?php $attributes = $__attributesOriginal5d26745f4e847988fcf32bc3780bf442; ?>
<?php unset($__attributesOriginal5d26745f4e847988fcf32bc3780bf442); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5d26745f4e847988fcf32bc3780bf442)): ?>
<?php $component = $__componentOriginal5d26745f4e847988fcf32bc3780bf442; ?>
<?php unset($__componentOriginal5d26745f4e847988fcf32bc3780bf442); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginal5d26745f4e847988fcf32bc3780bf442 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5d26745f4e847988fcf32bc3780bf442 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.header-table-1','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.header-table-1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <?php echo e(trans('billing.table.action')); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5d26745f4e847988fcf32bc3780bf442)): ?>
<?php $attributes = $__attributesOriginal5d26745f4e847988fcf32bc3780bf442; ?>
<?php unset($__attributesOriginal5d26745f4e847988fcf32bc3780bf442); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5d26745f4e847988fcf32bc3780bf442)): ?>
<?php $component = $__componentOriginal5d26745f4e847988fcf32bc3780bf442; ?>
<?php unset($__componentOriginal5d26745f4e847988fcf32bc3780bf442); ?>
<?php endif; ?>

                                 <?php $__env->endSlot(); ?>

                                 <?php $__env->slot('body', null, []); ?> 
                                    <?php
                                        if ($search_with_status == 'paid') {
                                            $billings = $user->invoices->sortByDesc('periode');
                                        } else {
                                            $billings = $user->invoices->sortBy('periode')->sortBy('customer_paket_id');
                                        }
                                    ?>

                                    <!--[if BLOCK]><![endif]--><?php $__empty_2 = true; $__currentLoopData = $billings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $billing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                        <?php if (isset($component)) { $__componentOriginalff445d057c00968e6366f0e5d0bef752 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff445d057c00968e6366f0e5d0bef752 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.row-table-1','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.row-table-1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                            <?php if (isset($component)) { $__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell-table-1','data' => ['class' => 'text-center text-xs']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell-table-1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-center text-xs']); ?>
                                                <?php if (isset($component)) { $__componentOriginal9384bd05e996fcc8c16dc84e6bbc1c8f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9384bd05e996fcc8c16dc84e6bbc1c8f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::checkbox.index','data' => ['wire:model.live' => 'selectedInvoice','wire:key' => ''.e($billing->id).'','value' => ''.e($billing->id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'selectedInvoice','wire:key' => ''.e($billing->id).'','value' => ''.e($billing->id).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9384bd05e996fcc8c16dc84e6bbc1c8f)): ?>
<?php $attributes = $__attributesOriginal9384bd05e996fcc8c16dc84e6bbc1c8f; ?>
<?php unset($__attributesOriginal9384bd05e996fcc8c16dc84e6bbc1c8f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9384bd05e996fcc8c16dc84e6bbc1c8f)): ?>
<?php $component = $__componentOriginal9384bd05e996fcc8c16dc84e6bbc1c8f; ?>
<?php unset($__componentOriginal9384bd05e996fcc8c16dc84e6bbc1c8f); ?>
<?php endif; ?>
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff)): ?>
<?php $attributes = $__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff; ?>
<?php unset($__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff)): ?>
<?php $component = $__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff; ?>
<?php unset($__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff); ?>
<?php endif; ?>
                                                <?php if (isset($component)) { $__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell-table-1','data' => ['class' => 'text-center text-xs']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell-table-1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-center text-xs']); ?>
                                                <?php echo e($billing->customer_paket->paket->name.' - '.$billing->customer_paket->internet_service->value); ?>

                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff)): ?>
<?php $attributes = $__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff; ?>
<?php unset($__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff)): ?>
<?php $component = $__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff; ?>
<?php unset($__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff); ?>
<?php endif; ?>
                                            <?php if (isset($component)) { $__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell-table-1','data' => ['class' => 'text-center text-xs']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell-table-1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-center text-xs']); ?>
                                                <?php if (isset($component)) { $__componentOriginalf5109f209df079b3a83484e1e6310749 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5109f209df079b3a83484e1e6310749 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::tooltip.index','data' => ['content' => ''.e(\Carbon\Carbon::parse($billing->start_periode)->format('d F Y').' - '. \Carbon\Carbon::parse($billing->end_periode)->format('d F Y')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['content' => ''.e(\Carbon\Carbon::parse($billing->start_periode)->format('d F Y').' - '. \Carbon\Carbon::parse($billing->end_periode)->format('d F Y')).'']); ?>
                                                    <div>
                                                        <?php echo e(\Carbon\Carbon::parse($billing->periode)->format('m-y')); ?>

                                                    </div>
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
<?php if (isset($__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff)): ?>
<?php $attributes = $__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff; ?>
<?php unset($__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff)): ?>
<?php $component = $__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff; ?>
<?php unset($__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff); ?>
<?php endif; ?>
                                            <?php if (isset($component)) { $__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell-table-1','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell-table-1'); ?>
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
<?php if (isset($__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff)): ?>
<?php $attributes = $__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff; ?>
<?php unset($__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff)): ?>
<?php $component = $__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff; ?>
<?php unset($__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff); ?>
<?php endif; ?>
                                            <?php if (isset($component)) { $__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell-table-1','data' => ['class' => 'text-center text-xs']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell-table-1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-center text-xs']); ?>
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
<?php if (isset($__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff)): ?>
<?php $attributes = $__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff; ?>
<?php unset($__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff)): ?>
<?php $component = $__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff; ?>
<?php unset($__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff); ?>
<?php endif; ?>
                                            <?php if (isset($component)) { $__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell-table-1','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell-table-1'); ?>
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
<?php if (isset($__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff)): ?>
<?php $attributes = $__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff; ?>
<?php unset($__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff)): ?>
<?php $component = $__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff; ?>
<?php unset($__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff); ?>
<?php endif; ?>
                                            <?php if (isset($component)) { $__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell-table-1','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell-table-1'); ?>
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
<?php if (isset($__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff)): ?>
<?php $attributes = $__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff; ?>
<?php unset($__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff)): ?>
<?php $component = $__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff; ?>
<?php unset($__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff); ?>
<?php endif; ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalff445d057c00968e6366f0e5d0bef752)): ?>
<?php $attributes = $__attributesOriginalff445d057c00968e6366f0e5d0bef752; ?>
<?php unset($__attributesOriginalff445d057c00968e6366f0e5d0bef752); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff445d057c00968e6366f0e5d0bef752)): ?>
<?php $component = $__componentOriginalff445d057c00968e6366f0e5d0bef752; ?>
<?php unset($__componentOriginalff445d057c00968e6366f0e5d0bef752); ?>
<?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                        <?php if (isset($component)) { $__componentOriginalff445d057c00968e6366f0e5d0bef752 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff445d057c00968e6366f0e5d0bef752 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.row-table-1','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.row-table-1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                            <?php if (isset($component)) { $__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.cell-table-1','data' => ['colspan' => '6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tables.cell-table-1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colspan' => '6']); ?>
                                                <div class="flex justify-center items-center">
                                                    <span class="font-medium text-gray-700 text-sm">
                                                        <?php echo e(trans('billing.notfound')); ?>

                                                    </span>
                                                </div>
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff)): ?>
<?php $attributes = $__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff; ?>
<?php unset($__attributesOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff)): ?>
<?php $component = $__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff; ?>
<?php unset($__componentOriginal26a9c3e5d4ec96d0ee6e3932b40c8dff); ?>
<?php endif; ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalff445d057c00968e6366f0e5d0bef752)): ?>
<?php $attributes = $__attributesOriginalff445d057c00968e6366f0e5d0bef752; ?>
<?php unset($__attributesOriginalff445d057c00968e6366f0e5d0bef752); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff445d057c00968e6366f0e5d0bef752)): ?>
<?php $component = $__componentOriginalff445d057c00968e6366f0e5d0bef752; ?>
<?php unset($__componentOriginalff445d057c00968e6366f0e5d0bef752); ?>
<?php endif; ?>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                 <?php $__env->endSlot(); ?>
                                 <?php $__env->slot('footer', null, []); ?> 
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
                                 <?php $__env->endSlot(); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal45f1d42cdced705b696f6db11ccf5ffd)): ?>
<?php $attributes = $__attributesOriginal45f1d42cdced705b696f6db11ccf5ffd; ?>
<?php unset($__attributesOriginal45f1d42cdced705b696f6db11ccf5ffd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45f1d42cdced705b696f6db11ccf5ffd)): ?>
<?php $component = $__componentOriginal45f1d42cdced705b696f6db11ccf5ffd; ?>
<?php unset($__componentOriginal45f1d42cdced705b696f6db11ccf5ffd); ?>
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
                <!--[if BLOCK]><![endif]--><?php if($users->count()): ?>
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

                        <div class="sm:flex justify-between pt-1 pb-1">
                            <div class="justify-start pt-1 pb-1 dark:text-gray-200 text-gray-600 text-xs sm:text-sm">
                            </div>
                            <div class="justify-end pt-1 pb-1">
                                <?php echo e(trans('billing.label.action-with-selected')); ?>

                            </div>
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


                        <div class="flex pt-1 pb-1 gap-2">
                                <?php if (isset($component)) { $__componentOriginal56d1ee5891d66f2938e3231b69d1ee2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal56d1ee5891d66f2938e3231b69d1ee2c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::checkbox.all','data' => ['wire:model' => 'checkAll','wire:key' => ''.e(Illuminate\Pagination\LengthAwarePaginator::resolveCurrentPage()).'','label' => 'Select All']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::checkbox.all'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'checkAll','wire:key' => ''.e(Illuminate\Pagination\LengthAwarePaginator::resolveCurrentPage()).'','label' => 'Select All']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal56d1ee5891d66f2938e3231b69d1ee2c)): ?>
<?php $attributes = $__attributesOriginal56d1ee5891d66f2938e3231b69d1ee2c; ?>
<?php unset($__attributesOriginal56d1ee5891d66f2938e3231b69d1ee2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal56d1ee5891d66f2938e3231b69d1ee2c)): ?>
<?php $component = $__componentOriginal56d1ee5891d66f2938e3231b69d1ee2c; ?>
<?php unset($__componentOriginal56d1ee5891d66f2938e3231b69d1ee2c); ?>
<?php endif; ?>
                                <!--[if BLOCK]><![endif]--><?php if(collect($selectedInvoice)->count()): ?>
                                    <!--[if BLOCK]><![endif]--><?php if($search_with_status === 'paid'): ?>
                                        <?php if (isset($component)) { $__componentOriginalf5109f209df079b3a83484e1e6310749 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5109f209df079b3a83484e1e6310749 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::tooltip.index','data' => ['content' => ''.e(trans('billing.payment.tooltip-bulk-unpayment', ['count' => collect($selectedInvoice)->count()])).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['content' => ''.e(trans('billing.payment.tooltip-bulk-unpayment', ['count' => collect($selectedInvoice)->count()])).'']); ?>
                                            <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'xs','variant' => 'danger','style' => 'cursor: pointer;','disabled' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'xs','variant' => 'danger','style' => 'cursor: pointer;','disabled' => true]); ?>
                                                <?php echo e(trans('billing.button.bulk-unpayment', ['count' => collect($selectedInvoice)->count()])); ?>

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
                                    <?php else: ?>
                                        <?php if (isset($component)) { $__componentOriginalf5109f209df079b3a83484e1e6310749 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5109f209df079b3a83484e1e6310749 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::tooltip.index','data' => ['content' => ''.e(trans('billing.payment.tooltip-bulk-payment', ['count' => collect($selectedInvoice)->count()])).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['content' => ''.e(trans('billing.payment.tooltip-bulk-payment', ['count' => collect($selectedInvoice)->count()])).'']); ?>
                                            <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'xs','variant' => 'success','style' => 'cursor: pointer;','wire:click' => 'bulkSelectedPayment']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'xs','variant' => 'success','style' => 'cursor: pointer;','wire:click' => 'bulkSelectedPayment']); ?>
                                                <?php echo e(trans('billing.button.bulk-payment', ['count' => collect($selectedInvoice)->count()])); ?>

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
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

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
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3969065b33d8f849854f52e7f2dcea0a)): ?>
<?php $attributes = $__attributesOriginal3969065b33d8f849854f52e7f2dcea0a; ?>
<?php unset($__attributesOriginal3969065b33d8f849854f52e7f2dcea0a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3969065b33d8f849854f52e7f2dcea0a)): ?>
<?php $component = $__componentOriginal3969065b33d8f849854f52e7f2dcea0a; ?>
<?php unset($__componentOriginal3969065b33d8f849854f52e7f2dcea0a); ?>
<?php endif; ?>
        <!--[if BLOCK]><![endif]--><?php if($users->hasPages()): ?>
            <div class="p-3">
                <?php echo e($users->links()); ?>

            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
    <?php if (isset($component)) { $__componentOriginalaf18b228d3b5dbaf8a324e22c28a5b7f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf18b228d3b5dbaf8a324e22c28a5b7f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.advance-search-billing','data' => ['modalName' => 'advance-search']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('advance-search-billing'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['modalName' => 'advance-search']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaf18b228d3b5dbaf8a324e22c28a5b7f)): ?>
<?php $attributes = $__attributesOriginalaf18b228d3b5dbaf8a324e22c28a5b7f; ?>
<?php unset($__attributesOriginalaf18b228d3b5dbaf8a324e22c28a5b7f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaf18b228d3b5dbaf8a324e22c28a5b7f)): ?>
<?php $component = $__componentOriginalaf18b228d3b5dbaf8a324e22c28a5b7f; ?>
<?php unset($__componentOriginalaf18b228d3b5dbaf8a324e22c28a5b7f); ?>
<?php endif; ?>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.billings.modal.add-discount', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-4209654236-0', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('admin.billings.modal.billing-payment', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-4209654236-1', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('admin.billings.modal.bulk-payment', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-4209654236-2', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('admin.billings.modal.billing-unpayment', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-4209654236-3', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('admin.billings.modal.create-invoices-modal', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-4209654236-4', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('admin.billings.modal.create-new-billings', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-4209654236-5', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('admin.billings.modal.send-notifications', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-4209654236-6', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
</div>
<?php /**PATH C:\xampp\htdocs\customer_management\resources\views/livewire/admin/billings/billing-management.blade.php ENDPATH**/ ?>
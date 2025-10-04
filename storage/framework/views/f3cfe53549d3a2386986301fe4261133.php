<label class="items-center cursor-pointer">
    <input type="checkbox" value="" class="sr-only peer" wire:model.change="hasDisable">
    <div wire:loading wire:target="hasDisable">
        <?php if (isset($component)) { $__componentOriginalf96a245564930737e77e68aad2e1597a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf96a245564930737e77e68aad2e1597a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::icon.loading','data' => ['class' => 'inline w-4 h-4 me-3 text-blue-500 ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon.loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'inline w-4 h-4 me-3 text-blue-500 ']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf96a245564930737e77e68aad2e1597a)): ?>
<?php $attributes = $__attributesOriginalf96a245564930737e77e68aad2e1597a; ?>
<?php unset($__attributesOriginalf96a245564930737e77e68aad2e1597a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf96a245564930737e77e68aad2e1597a)): ?>
<?php $component = $__componentOriginalf96a245564930737e77e68aad2e1597a; ?>
<?php unset($__componentOriginalf96a245564930737e77e68aad2e1597a); ?>
<?php endif; ?>
    </div>
    <div wire:loading.remove wire:target="hasDisable"
        class="relative w-9 h-5  bg-gray-400 dark:bg-gray-800 dark:border-gray-600 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 rounded-full peer  peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all  peer-checked:bg-green-600">
    </div>
</label>
<?php /**PATH C:\xampp\htdocs\customer_management\resources\views/livewire/components/toogle-button.blade.php ENDPATH**/ ?>
<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

<?php app('livewire')->forceAssetInjection(); ?>
<?php echo app('flux')->scripts(); ?>

<script data-navigate-once src="http://localhost:8080/vendor/livewire-charts/app.js"></script>
<!--Custom Script-->
<script data-navigate-once src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>

<?php if (\Illuminate\Support\Facades\Blade::check('role', 'admin')): ?>

<?php endif; ?>
<?php echo $__env->yieldPushContent('scripts'); ?>
<?php /**PATH C:\xampp\htdocs\customer_management\resources\views/partials/footer.blade.php ENDPATH**/ ?>
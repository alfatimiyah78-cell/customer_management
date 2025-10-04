<div
    class="flex flex-col gap-2 items-center justify-center w-full text-[13px] leading-[20px] flex-1 text-[#706f6c] dark:text-[#A1A09A]">
    <div class="mt-4">
        <a href="<?php echo e(route('tos')); ?>">Ketentuan Layanan</a> &bull; <a href="<?php echo e(route('contact')); ?>">Contact</a> &bull; <a
            href="<?php echo e(route('privacy')); ?>">Kebijakan Privasi</a>
    </div>
    <div>
        Customer Management V.<?php echo e(env('APP_VERSION')); ?> - &copy<?php echo e(\Carbon\Carbon::now()->format('Y')); ?> by
        <?php echo e(\App\Models\Websystem::first()->title ?? env('APP_NAME')); ?>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\customer_management\resources\views/partials/guest-footer.blade.php ENDPATH**/ ?>
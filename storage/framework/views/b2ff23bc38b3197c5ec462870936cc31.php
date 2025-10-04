<div class="shadow border-b border-zinc-200 border-b-zinc-300/80 dark:border-white/10 sm:rounded-lg relative overflow-x-auto">
    <!-- <div class="align-middle min-w-full shadow sm:rounded-lg ">-->
    <table <?php echo e($attributes->merge(['class' => 'min-w-full divide-y divide-gray-200 dark:divide-none'])->only('class')); ?>>
        <!--[if BLOCK]><![endif]--><?php if(!empty($header)): ?>
            <?php echo e($header); ?>

        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <tbody class="bg-white dark:bg-white/10 divide-y divide-gray-200 dark:divide-gray-600">
            <?php echo e($body ?? ''); ?>

        </tbody>
        <!--[if BLOCK]><![endif]--><?php if(!empty($footer)): ?>
            <tfoot class="table-foot">
                <?php echo e($footer); ?>

            </tfoot>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\customer_management\resources\views/components/tables/table.blade.php ENDPATH**/ ?>
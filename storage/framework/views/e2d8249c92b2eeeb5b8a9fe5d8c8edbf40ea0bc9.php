<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 style="color: rgb(255,71,91); text-align: center; margin-left: 200px; padding-bottom: 1rem" class="display-4"
            ><b>Shirt Details</b></h1>
        </div>
        <?php echo $__env->make('FirstFashion.shirt.shirtDetails', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <a type="button" href="<?php echo e(route('FirstFashion.shirt_manager')); ?>" class="btn btn-danger"
           style="margin-left: 100px; font-size: 20px"
        >&lt;&lt;&nbsp;Shirt Manager</a>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('masters.adminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/t0mbb./Documents/c03/FirstFashion/resources/views/FirstFashion/shirt/showShirt.blade.php ENDPATH**/ ?>
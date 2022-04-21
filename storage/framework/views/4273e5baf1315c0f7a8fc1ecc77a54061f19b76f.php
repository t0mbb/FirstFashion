<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 style="color: blue; text-align: center; margin-left: 200px; padding-bottom: 2rem" class="display-4"><b>Are
                    you sure to delete this Admin?</b></h1>
        </div>

        <?php echo $__env->make('FirstFashion.admin.adminDetails', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <form action="<?php echo e(route('FirstFashion.destroyAdmin', ['ad_id' => $admin->ad_id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="ad_id" value="<?php echo e($admin->ad_id); ?>">
            <button type="submit" class="btn btn-danger"
                    style="margin-left: 100px; font-size: 20px"
            ><b>Delete</b></button>
            <a href="<?php echo e(route('FirstFashion.admin_manager')); ?>" class="btn btn-info"
               style="font-size: 20px"
            ><b>Cancel</b></a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('masters.adminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/t0mbb./Documents/asm/FirstFashion/resources/views/FirstFashion/admin/confirmAdmin.blade.php ENDPATH**/ ?>
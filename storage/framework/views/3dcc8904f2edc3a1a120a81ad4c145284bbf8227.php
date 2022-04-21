<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 style="color: blue; text-align: center; margin-left: 200px; padding-bottom: 1rem" class="display-4"><b>Update
                    admin information</b></h1>
        </div>


        <?php echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <form action="<?php echo e(route('FirstFashion.updateAdmin', ['ad_id' => old('ad_id')?? $admin->ad_id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('FirstFashion.admin.adminFields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <button type="submit" class="btn btn-success"
                    style="margin-left: 100px; font-size: 20px"
            >Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('masters.adminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/t0mbb./Documents/asm/FirstFashion/resources/views/FirstFashion/admin/updateAdmin.blade.php ENDPATH**/ ?>
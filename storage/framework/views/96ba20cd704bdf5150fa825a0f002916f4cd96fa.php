<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 style="color: blue; text-align: center" class="display-4">Update An Existing Shirt</h1>
        </div>


        <?php echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <form action="<?php echo e(route('FirstFashion.updateShirt', ['shirt_id' => old('shirt_id')?? $shirt->shirt_id])); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('FirstFashion.shirt.shirtFields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <button type="submit" class="btn btn-success" style="font-size: 20px; margin-left: 100px">Update</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('masters.adminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/t0mbb./Documents/asm/FirstFashion/resources/views/FirstFashion/shirt/updateShirt.blade.php ENDPATH**/ ?>
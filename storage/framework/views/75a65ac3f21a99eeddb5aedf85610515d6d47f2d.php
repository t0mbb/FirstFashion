<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 style="color: blue; text-align: center; margin-left: 200px; padding-bottom: 2rem" class="display-4">Are you sure you want to delete?</h1>
        </div>
        <?php echo $__env->make('FirstFashion.category.categoryDetails', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <form action="<?php echo e(route('FirstFashion.destroyCategory', ['cat_id' =>$category->cat_id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="cat_id" value="<?php echo e($category->cat_id); ?>">
            <button style="margin-left: 100px; font-size: 20px" type="submit" class="btn btn-danger">Delete</button>
            <a style="font-size: 20px"
                href="<?php echo e(route('FirstFashion.category_manager')); ?>" class="btn btn-info">Cancel</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('masters.adminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/t0mbb./Documents/asm/FirstFashion/resources/views/FirstFashion/category/confirmCategory.blade.php ENDPATH**/ ?>
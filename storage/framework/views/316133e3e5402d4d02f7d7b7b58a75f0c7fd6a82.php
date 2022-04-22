

<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 style="background: linear-gradient(to right, rgba(249, 0, 104, 1) 0%, rgba(247, 117, 24, 1) 100%);
        border-radius: 15px;
        color: whitesmoke; margin-left: 400px; margin-right: 190px;
        text-align : center;
        font-size: 30px;
        padding-bottom: 10px;
        margin-bottom: 50px;
        font-family: 'Century';"  class="display-4">Are you sure you want to delete?</h1>
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

<?php echo $__env->make('masters.adminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\New folder\FirstFashion\resources\views/FirstFashion/category/confirmCategory.blade.php ENDPATH**/ ?>
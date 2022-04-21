<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 style="color: blue; text-align: center; padding-bottom: 2rem; margin-left: 200px"
                class="display-4"><b>Are you sure to delete this Customer?</b></h1>
        </div>

        <?php echo $__env->make('FirstFashion.customer.customerDetails', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <form action="<?php echo e(route('FirstFashion.destroyCustomer', ['cus_id' => $customer->cus_id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="cus_id" value="<?php echo e($customer->cus_id); ?>">
            <button style="margin-left: 100px; font-size: 20px" type="submit" class="btn btn-danger"
            ><b>DELETE</b></button>
            <a style="font-size: 20px" href="<?php echo e(route('FirstFashion.customer_manager')); ?>" class="btn btn-info"
            ><b>CANCEL</b></a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('masters.adminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/t0mbb./Documents/asm/FirstFashion/resources/views/FirstFashion/customer/confirmCustomer.blade.php ENDPATH**/ ?>
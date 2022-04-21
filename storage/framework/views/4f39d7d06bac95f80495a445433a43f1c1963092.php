<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 style="color: red; text-align: center; margin-left: 200px; padding-bottom: 2rem" class="display-4"><b>Customer
                    Details</b></h1>
        </div>

        <?php echo $__env->make('FirstFashion.customer.customerDetails', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <a type="button" href="<?php echo e(route('FirstFashion.customer_manager')); ?>" class="btn btn-danger"
           style="margin-left: 100px; font-size: 20px"
        ><b>&lt;&lt;&nbsp;Customer Manager</b></a>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('masters.adminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/t0mbb./Documents/c03/FirstFashion/resources/views/FirstFashion/customer/showCustomer.blade.php ENDPATH**/ ?>
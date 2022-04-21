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
        font-family: 'Century';"  class="display-4"><b>Update An Existing Customer</b></h1>
        </div>


        <?php echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <form action="<?php echo e(route('FirstFashion.updateCustomer', ['cus_id' => old('cus_id')?? $customer->cus_id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('FirstFashion.customer.customerFields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <button style="font-size: 20px; margin-left: 100px" type="submit" class="btn btn-danger"><b>Update</b></button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('masters.adminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/t0mbb./Documents/c03/FirstFashion/resources/views/FirstFashion/customer/updateCustomer.blade.php ENDPATH**/ ?>
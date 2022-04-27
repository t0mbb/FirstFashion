<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 style="color: red; text-align: center; margin-left: 200px; padding-bottom: 1rem" class="display-4"><b>Update
                    admin information</b></h1>
        </div>


        <?php echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <form action="<?php echo e(route('FirstFashion.updateAdmin', ['ad_id' => old('ad_id')?? $admin->ad_id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('FirstFashion.admin.adminFields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--Modal: Login with Avatar Form-->
                <div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
                        <!--Content-->
                        <div class="modal-content">

                            <!--Header-->
                            <div class="modal-header">
                                <img src="<?php echo e(asset('backend/images/2.png')); ?>" width="300" alt="avatar" class="rounded-circle img-responsive">
                            </div>
                            <!--Body-->
                            <div class="modal-body text-center mb-1">

                                <h5 class="mt-1 mb-2"><?php echo e(\Illuminate\Support\Facades\Session::get('ad_user')); ?></h5>

                                <div class="md-form ml-0 mr-0">
                                    <input type="password" class="form-control form-control-sm validate ml-0" id="ad_pass" name="ad_pass" value="">
                                    <label data-error="wrong" data-success="right" for="ad_pass" class="ml-0">Enter password</label>
                                </div>

                                <div class="text-center mt-4">
                                    <button class="btn btn-cyan mt-1" style="color: rgb(255,71,91)">Submit<i class="fas fa-sign-in ml-1"></i></button>
                                </div>
                            </div>

                        </div>
                        <!--/.Content-->
                    </div>
                </div>
                <div class="text-center">
                    <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modalLoginAvatar">Submit </a>
                </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('masters.adminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/t0mbb./Documents/c03/FirstFashion/resources/views/FirstFashion/admin/updateAdmin.blade.php ENDPATH**/ ?>
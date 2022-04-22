<?php $__env->startSection('main'); ?>
<style>
    body {
        background: linear-gradient(to right, #c04848, #480048);
        min-height: 100vh
    }
    img {
        height: 170px;
        width: 140px
    }
</style>














    <?php $__currentLoopData = $resultSearch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $re): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- List group-->
                <ul class="list-group shadow" style="padding-bottom: 20px;">
                    <!-- list group item -->
                    <li class="list-group-item" style="background: linear-gradient(to right, #c04848, #480048);color : whitesmoke; margin-bottom: 50px">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2"><?php echo e($re->shirt_name); ?></h5>
                                <p style="color: lightskyblue"  class="font mb-0 large"><?php echo e($re->shirt_description); ?></p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h6 class="font-weight-bold my-2"><?php echo e($re->shirt_price); ?>$</h6>
                                    <ul class="list-inline small">
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-danger"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-danger"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-danger"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-danger"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-danger"></i></li>
                                    </ul>
                                </div>
                            </div><img src="<?php echo e(asset('storage/images/shirt/' .$re->shirt_image)); ?>" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                        </div> <!-- End -->
                    </li> <!-- End -->
                </ul> <!-- End -->
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





<?php $__env->stopSection(); ?>


<?php echo $__env->make('masters.homepageMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\New folder\FirstFashion\resources\views/FirstFashion/homepage/search.blade.php ENDPATH**/ ?>
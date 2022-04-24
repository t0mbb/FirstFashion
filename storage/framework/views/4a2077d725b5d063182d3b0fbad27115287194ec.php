<?php $__env->startSection('main'); ?>
    <style>
        body {
            background: linear-gradient(to right, #c04848, #480048);
            min-height: 100vh
        }
        .text-gray {
            color: #aaa
        }
        /*img {*/
        /*    height: 170px;*/
        /*    width: 140px*/
        /*}*/
    </style>
    <div class="container" style="margin-top: -50px ;" >
        <div class="row text-center text-white mb-4">
            <div class="col-lg-7 mx-auto">
                <h1 style="background: linear-gradient(to right, rgba(249, 0, 104, 1) 0%, rgba(247, 117, 24, 1) 100%);
        border-radius: 15px;

        margin-left: -100px;
        margin-right: -100px;
        text-align : center;
        font-size: 40px;

        color:white;text-shadow: 0 -1px 4px #FFF, 0 -2px 10px #ff0, 0 -10px 20px #ff8000, 0 -18px 40px #F00;"  class="display-4">All shirt</h1>
            </div>
        </div>
        <?php $__currentLoopData = $shirt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <!-- List group-->
                <ul class="list-group shadow"style="padding-bottom: 20px;">
                    <!-- list group item -->
                    <li class="list-group-item"style="background: linear-gradient(to right, #c04848, #480048);color : whitesmoke;">
                        <!-- Custom content-->
                        <a href="<?php echo e(route('FirstFashion.detailShirt', ['shirt_id' => $s->shirt_id])); ?>" style="color: whitesmoke;">
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2"><?php echo e($s->shirt_name); ?></h5>
                                <p style="color: lightskyblue"  class="font mb-0 large"><?php echo e($s->shirt_description); ?></p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h6 class="font-weight-bold my-2"><?php echo e($s->shirt_price); ?>$</h6>
                                    <ul class="list-inline small">
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                                    </ul>
                                </div>
                            </div><img src="<?php echo e(asset('storage/images/shirt/' .$s->shirt_image)); ?>" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                        </div>
                        </a><!-- End -->
                    </li> <!-- End -->
                </ul> <!-- End -->
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('masters.homepageMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/t0mbb./Documents/c03/FirstFashion/resources/views/FirstFashion/homepage/allShirt.blade.php ENDPATH**/ ?>
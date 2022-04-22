<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">First Fashion</h1>
        </div>
        <div class="row">
            <style>
                .card {
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                    max-width: 300px;
                    margin: auto;
                    text-align: center;
                    font-family: arial;
                }

                .price {
                    color: grey;
                    font-size: 22px;
                }

                .card button {
                    border: none;
                    outline: 0;
                    padding: 12px;
                    color: white;
                    background-color: #000;
                    text-align: center;
                    cursor: pointer;
                    width: 100%;
                    font-size: 18px;
                }

                .card button:hover {
                    opacity: 0.7;
                }
            </style>
            <?php $__currentLoopData = $resultSearch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $re): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <a href="<?php echo e(route('FirstFashion.detailShirt', ['shirt_id' => $re->shirt_id])); ?>">
                        <img src="<?php echo e(asset('storage/images/uniform/' .$re->shirt_image)); ?>" alt="" style="max-width:200px; max-height: 200px">
                    </a>

                    <h5><?php echo e($re->shirt_name); ?></h5>
                    <p class="price"><?php echo e($re->shirt_price); ?>$</p>
                    <p>
                        <a href="<?php echo e(route('FirstFashion.detailShirt', ['shirt_id' => $re->shirt_id])); ?>">
                            <button>Add to Cart</button>
                        </a>
                    </p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('masters.homepageMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/t0mbb./Documents/c03/FirstFashion/resources/views/FirstFashion/homepage/search.blade.php ENDPATH**/ ?>
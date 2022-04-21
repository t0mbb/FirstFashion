<?php $__env->startSection('main'); ?>
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 style="color: red; text-align: center; margin-left: 200px; padding-bottom: 2rem" class="display-4"><b>Shirt Manager</b></h1>
        </div>

        <table class="table table-primary table-bordered border-bold" style="margin-left: 100px;">
            <thead class="thead-dark">
            <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: rgb(255,99,71); color: whitesmoke">
                <th scope="col">Name</th>

                <th scope="col">Price ($)</th>
                <th scope="col">Category</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $shirts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr style="font-size: 20px; color: black; background-color: transparent">
                    <td><?php echo e($s->shirt_name); ?></td>



                    <td><?php echo e($s->shirt_price); ?>$</td>
                    <td><?php echo e(dd($cat)); ?></td>
                    <td><a type="button" class="btn btn-primary btn-sm" style="font-size: 15px"
                           href="<?php echo e(route('FirstFashion.showShirt', ['shirt_id' => $s->shirt_id])); ?>"
                        ><b>DETAILS</b></a>
                    </td>
                    <td><a type="button" class="btn btn-success btn-sm" style="font-size: 15px"
                           href="<?php echo e(route('FirstFashion.editShirt', ['shirt_id' => $s->shirt_id])); ?>"
                        ><b>EDIT</b></a>
                    </td>
                    <td>
                        <a type="button" class="btn btn-danger btn-sm" style="font-size: 15px"
                           href="<?php echo e(route('FirstFashion.confirmShirt', ['shirt_id' => $s->shirt_id])); ?>"
                        ><b>DELETE</b></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>


    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('masters.adminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/t0mbb./Documents/asm/FirstFashion/resources/views/FirstFashion/shirt/shirt_manager.blade.php ENDPATH**/ ?>
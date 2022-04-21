<?php if(count($errors->all())): ?>
    <div class="row" style="margin-left: 10px">
        <div class="col-md-12">
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($err); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /Users/t0mbb./Documents/asm/FirstFashion/resources/views/partials/errors.blade.php ENDPATH**/ ?>
<?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="Name" required value="<?php echo e($contact->name); ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="email" class="form-control mt-2" placeholder="email" required value="<?php echo e($contact->email); ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="Phone number" required value="<?php echo e($contact->phone); ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <input class="form-control mt-2" list="datalistOptions"
                   placeholder="Gender" value="<?php echo e($contact->gender); ?>">
            <datalist id="datalistOptions">
                <option value="Female">
                <option value="Male">
                <option value="Other">
            </datalist>
        </div>
        <div class="col-12">
            <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Your Message" rows="3" value="<?php echo e($contact->message); ?>"></textarea>
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-success" type="submit">Send message</button>
        </div>
    </div>


<?php /**PATH /Users/t0mbb./Documents/c03/FirstFashion/resources/views/FirstFashion/homepage/contactfield.blade.php ENDPATH**/ ?>
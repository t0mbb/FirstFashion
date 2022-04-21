<input type="hidden" name="ad_id" value="<?php echo e(old('ad_id')?? $admin->ad_id); ?>">
<div class="form-group" style="margin-left: 100px">
    <label style="color: deepskyblue; font-size: 30px" for="ad_user" class="font-weight-bold">Username</label>
    <input readonly type="text" class="form-control" id="ad_user" name="ad_user" value="<?php echo e(old('ad_user')?? $admin->ad_user); ?>">
</div>

<div class="form-group" style="margin-left: 100px">
    <label style="color: deepskyblue; font-size: 30px" for="ad_fullname" class="font-weight-bold">Full Name</label>
    <input type="text" class="form-control" id="ad_fullname" name="ad_fullname" value="<?php echo e(old('ad_fullname')?? $admin->ad_fullname); ?>">
</div>

<div class="form-group" style="margin-left: 100px">
    <label style="color: deepskyblue; font-size: 30px" for="ad_phone" class="font-weight-bold">Phone</label>
    <input type="text" class="form-control" id="ad_phone" name="ad_phone" value="<?php echo e(old('ad_phone')?? $admin->ad_phone); ?>">
</div>

<div class="form-group" style="margin-left: 100px">
    <label style="color: deepskyblue; font-size: 30px" for="ad_email" class="font-weight-bold">Email</label>
    <input type="text" class="form-control" id="ad_email" name="ad_email" value="<?php echo e(old('ad_email')?? $admin->ad_email); ?>">
</div>

<div class="form-group" style="margin-left: 100px">
    <label style="color: deepskyblue; font-size: 30px" for="ad_pass" class="font-weight-bold">Password</label>
    <input type="password" class="form-control" id="ad_pass" name="ad_pass" value="">
</div>

<?php /**PATH /Users/t0mbb./Documents/asm/FirstFashion/resources/views/FirstFashion/admin/adminFields.blade.php ENDPATH**/ ?>
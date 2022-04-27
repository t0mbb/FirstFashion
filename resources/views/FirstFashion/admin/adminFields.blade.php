<input type="hidden" name="ad_id" value="{{old('ad_id')?? $admin->ad_id}}">


<div class="form-group" style="margin-left: 100px">
    <label style="color: rgb(255,71,91); font-size: 30px" for="ad_fullname" class="font-weight-bold">Full Name</label>
    <input type="text" class="form-control" id="ad_fullname" name="ad_fullname" value="{{old('ad_fullname')?? $admin->ad_fullname}}">
</div>

<div class="form-group" style="margin-left: 100px">
    <label style="color: rgb(255,71,91); font-size: 30px" for="ad_phone" class="font-weight-bold">Phone</label>
    <input type="text" class="form-control" id="ad_phone" name="ad_phone" value="{{old('ad_phone')?? $admin->ad_phone}}">
</div>

<div class="form-group" style="margin-left: 100px">
    <label style="color: rgb(255,71,91); font-size: 30px" for="ad_email" class="font-weight-bold">Email</label>
    <input type="text" class="form-control" id="ad_email" name="ad_email" value="{{old('ad_email')?? $admin->ad_email}}">
</div>

